<?php
/**
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Emthemes\ThemeSettings\Controller\Adminhtml\Config;

class Save extends \Magento\Backend\App\Action
{

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Emthemes\ThemeSettings\Model\Config\Structure $configStructure,
        //\Magento\Config\Controller\Adminhtml\System\ConfigSectionChecker $sectionChecker,
        \Emthemes\ThemeSettings\Model\ConfigFactory $configFactory,
        //\Magento\Framework\Cache\FrontendInterface $cache,
        \Magento\Framework\Config\CacheInterface $cache,
        \Magento\Framework\Stdlib\StringUtils $string,
        \Emthemes\ThemeSettings\App\Config $themeConfig
    ) {
        parent::__construct($context);
        $this->_configFactory = $configFactory;
        $this->_cache = $cache;
        $this->_objectManager = $context->getObjectManager();
        $this->string = $string;        
        $this->themeConfig = $themeConfig;
    }
    
    protected function _getGroupsForSave()
    {
        $groups = $this->getRequest()->getPost('groups');
        $files = $this->getRequest()->getFiles('groups');

        if ($files && is_array($files)) {
            /**
             * Carefully merge $_FILES and $_POST information
             * None of '+=' or 'array_merge_recursive' can do this correct
             */
            foreach ($files as $groupName => $group) {
                $data = $this->_processNestedGroups($group);
                if (!empty($data)) {
                    if (!empty($groups[$groupName])) {
                        $groups[$groupName] = array_merge_recursive((array)$groups[$groupName], $data);
                    } else {
                        $groups[$groupName] = $data;
                    }
                }
            }
        }
        return $groups;
    }

    /**
     * Process nested groups
     *
     * @param mixed $group
     * @return array
     */
    protected function _processNestedGroups($group)
    {
        $data = [];

        if (isset($group['fields']) && is_array($group['fields'])) {
            foreach ($group['fields'] as $fieldName => $field) {
                if (!empty($field['value'])) {
                    $data['fields'][$fieldName] = ['value' => $field['value']];
                }
            }
        }

        if (isset($group['groups']) && is_array($group['groups'])) {
            foreach ($group['groups'] as $groupName => $groupData) {
                $nestedGroup = $this->_processNestedGroups($groupData);
                if (!empty($nestedGroup)) {
                    $data['groups'][$groupName] = $nestedGroup;
                }
            }
        }

        return $data;
    }

    /**
     * Custom save logic for section
     *
     * @return void
     */
    protected function _saveSection()
    {
        $method = '_save' . $this->string->upperCaseWords($this->getRequest()->getParam('section'), '_', '');
        if (method_exists($this, $method)) {
            $this->{$method}();
        }
    }

    /**
     * Advanced save procedure
     *
     * @return void
     */
    protected function _saveAdvanced()
    {
        $this->_cache->clean();
    }
    
    protected function updateToLessFile()
    {
    	$themeId = $this->getRequest()->getParam('settheme');
      $section = $this->getRequest()->getParam('section');
    	$theme = $this->_objectManager->get('Magento\Theme\Model\Theme')->load($themeId);
    	$themePath = $theme->getThemePath();
    	$themePath = str_replace('_','/',$themePath);            
    	$pathToLessFile = dirname(dirname(dirname(dirname(dirname(dirname(dirname(__FILE__))))))).'/design/frontend/'.$themePath.'/web/css/source/variables/_'.$section.'.less';
    	$groups = $this->_getGroupsForSave();      
        
    	$file = fopen($pathToLessFile, 'w') or die("error");
      $configs = array();
      $folderName = "pub/media/emthemes/themesettings/background";
      $configModel = $this->_objectManager->get('\Emthemes\ThemeSettings\Model\Config');
      $settingHelper = $this->_objectManager->get('\Emthemes\ThemeSettings\Helper\Data');
      
    	foreach ($groups as $groupId => $groupData) {
            foreach($groupData['fields'] as $name => $field){  
                  if($field['value'] == NULL)                 	                
                  {
                        //$field['value'] = $configModel->getConfigDataValue($section.'/'.$groupId.'/'.$name);
                        $field['value'] = $this->themeConfig->getValue($section.'/'.$groupId.'/'.$name,\Magento\Store\Model\ScopeInterface::SCOPE_WEBSITE);
                  }
                  if(isset($field['value']) && !(preg_match("/google_fonts|file|custom_css/",$name)) ){                    
                        if (preg_match("/\\s/",$field['value'])) {
		                  $configs["@{$name}"] = "~\"{$field['value']}\"";
	                  }
	                  else{	
		                  $configs["@{$name}"] = "{$field['value']}";
	                  }
                  } 
                  if(preg_match("/bg_file/",$name))
                  {
                        if(!isset($field['value']['value']))
                              $field['value']['value'] = "blank.gif";
                        $path = $settingHelper->getBaseUrl().$folderName . '/' . $field['value']['value'];                        
                        $configs["@{$name}"] = "~\"{$path}\"";
                  }
                 
                   /** custom css file */
                  if($section == 'css')                  
                  {
                    if($additionalCssFilesString = explode(',', $field['value']))
                    {
                        $i=0;

                        foreach($additionalCssFilesString as $add){
                              if (preg_match("/.less/",$add)) {
                                    $customPath = "custom/".$add;
                                    $configs['additional_css_file'][$i] = "\"{$customPath}\"";
                              }
                              $i++;
                        }
                    }
                        
                  }
            }
        }

        if(count($configs) > 0)
              foreach($configs as $key => $value)    
              {         
                  if($value != NULL)                  
                  {
                        if($key == 'additional_css_file')
                        {
                              foreach($value as $i => $customLess)            
                              {
                                    fwrite($file,"@import ".$customLess.";");
                              }
                        }
                        else{
                              fwrite($file,$key.":".$value.";");
                        }
                  }
              }
        
    	fclose($file);
    }

    /**
     * Save configuration
     *
     * @return \Magento\Backend\Model\View\Result\Redirect
     */
    public function execute()
    {
        try {
            // custom save logic
            //$this->_saveSection();
            $section = $this->getRequest()->getParam('section');
            $website = $this->getRequest()->getParam('website');
            $theme = $this->getRequest()->getParam('settheme');

            $configData = [
                'section' => $section,
                'website' => $website,
                'theme' => $theme,
                'groups' => $this->_getGroupsForSave(),
            ];                        
            /** @var \Magento\Config\Model\Config $configModel  */
            $configModel = $this->_configFactory->create(['data' => $configData]);
            $configModel->save();
            $typographyList = array('css','fonts','page','header','menu','body','footer','buttons');
            if(in_array($section,$typographyList))
                  $this->updateToLessFile();
		$this->_cache->clean();
            $this->messageManager->addSuccess(__('You saved the configuration.'));
        } catch (\Magento\Framework\Exception\LocalizedException $e) {
            $messages = explode("\n", $e->getMessage());
            foreach ($messages as $message) {
                $this->messageManager->addError($message);
            }
        } catch (\Exception $e) {
            $this->messageManager->addException(
                $e,
                __('Something went wrong while saving this configuration:') . ' ' . $e->getMessage()
            );
        }

        //$this->_saveState($this->getRequest()->getPost('config_state'));
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        return $resultRedirect->setPath(
            'themesettings/config/edit',
            [
            	'settheme' => $theme,
                '_current' => ['section', 'website', 'store'],
                '_nosid' => true
            ]
        );
    }
}
