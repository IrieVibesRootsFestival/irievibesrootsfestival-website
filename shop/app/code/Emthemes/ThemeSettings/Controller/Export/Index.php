<?php
/**
 * Copyright © 2015 Emthemes. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Emthemes\ThemeSettings\Controller\Export;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Catalog\Controller\Product
{
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Cms\Model\ResourceModel\Page\Collection $pageCollection,
		\Magento\Cms\Model\ResourceModel\Block\Collection $blockCollection,
		\Magento\Cms\Model\Block $block,
		\Magento\Widget\Model\ResourceModel\Widget\Instance\Collection $widgetCollection,
		\Magento\Widget\Model\Widget\InstanceFactory $widgetFactory
	)
	{
		$this->_widgetFactory = $widgetFactory;
		$this->pageCollection = $pageCollection;
		$this->blockCollection = $blockCollection;
		$this->widgetCollection = $widgetCollection;
		$this->block = $block;
		parent::__construct($context);
	}
    public function execute()
    {
    	$this->exportPage();
    	$this->exportBlock();
    	$this->exportWidget();
        exit;
    }
    
    public function exportPage()
    {
    	$path = dirname(dirname(__DIR__)).'/fixtures';
        $list = array (
			array('title','page_layout','meta_keywords','meta_description','identifier','content_heading','content','is_active','sort_order','layout_update_xml','custom_theme','custom_root_template','custom_layout_update_xml','custom_theme_from','custom_theme_to')
		);
		
		$this->pageCollection->addFieldToSelect('*');
		foreach($this->pageCollection as $page){
			$data = [];
			foreach($list[0] as $attribute){
				$data[] = $page->getData($attribute);
			}
			$list[] = $data;
		}

		$fp = fopen($path.'/pages.csv', 'w');

		foreach ($list as $fields) {
			fputcsv($fp, $fields);
		}

		fclose($fp);
		echo 'export page finish'.'<br/>';
    }
    
    protected function _initWidgetInstance($widget)
    {
        /** @var $widgetInstance \Magento\Widget\Model\Widget\Instance */
        $widgetInstance = $this->_widgetFactory->create();

        $code = 'cms_static_block';
        $instanceId = $widget->getInstanceId();
        if ($instanceId) {
            $widgetInstance->load($instanceId)->setCode($code);
            if (!$widgetInstance->getId()) {
                $this->messageManager->addError(__('Please specify a correct widget.'));
                return false;
            }
        } else {
            // Widget id was not provided on the query-string.  Locate the widget instance
            // type (namespace\classname) based upon the widget code (aka, widget id).
            $themeId = $widget->getThemeId();
            $type = $code != null ? $widgetInstance->getWidgetReference('code', $code, 'type') : null;
            $widgetInstance->setType($type)->setCode($code)->setThemeId($themeId);
        }
        return $widgetInstance;
    }
    
    public function exportWidget()
    {
    	$path = dirname(dirname(__DIR__)).'/fixtures';
        $list = array (
			array('block_identifier', 'type_code', 'theme_path', 'title', 'page_groups', 'sort_order')
		);
		
		$widgetCollection = $this->widgetCollection->addFieldToSelect('*');
		//$widgetCollection->addFieldToFilter('instance_id',20);
		//$widgetCollection->join(array('wip' => 'widget_instance_page'), 'main_table.instance_id = wip.instance_id');
		$widgetCollection->join(array('t' => 'theme'), 'main_table.theme_id = t.theme_id',array('theme_path'));

		foreach($this->widgetCollection as $widget){
			
			$data = [];
			$params = $widget->getWidgetParameters();
			$data['block_identifier'] = $this->block->load($params['block_id'])->getData('identifier');
			$data['type_code'] = 'cms_static_block';
			$data['theme_path'] = 'frontend/'.$widget->getData('theme_path');
			$data['title'] = $widget->getTitle();
			//$data['page_group'] = $widget->getPageGroup();
			//$params = [];
			//$params['block'] = $widget->getData('block_reference');
			//$params['layout_handle'] = $widget->getData('layout_handle');
			$widget = $this->_initWidgetInstance($widget);
			$pageGroups = $widget->getPageGroups();
			$tmpPg = [];
			foreach($pageGroups as $pageGroup){
				$tmp = [];
				$pg = $pageGroup['page_group'];
				$tmp['page_group'] = $pg;
				$tmp[$pg] = [];
				$tmp[$pg]['for'] = $pageGroup['page_for'];
				$tmp[$pg]['layout_handle'] = $pageGroup['layout_handle'];
				$tmp[$pg]['block'] = $pageGroup['block_reference'];
				//$tmp[$pg]['template'] = $pageGroup['page_template'];
				//$tmp[$pg]['page_id'] = '';
				$tmpPg[] = $tmp;
			}
			$pageGroups = $tmpPg;
			$data['page_groups'] = serialize($pageGroups);
			
			$data['sort_order'] = $widget->getData('sort_order');
			$list[] = $data;
		}

		$fp = fopen($path.'/widgets.csv', 'w');

		foreach ($list as $fields) {
			fputcsv($fp, $fields);
		}

		fclose($fp);
		echo 'export widget finish'.'<br/>';
    }
    
    public function exportBlock()
    {
    	$path = dirname(dirname(__DIR__)).'/fixtures';
        $list = array (
			array('title', 'identifier', 'content')
		);
		
		$this->blockCollection->addFieldToSelect('*');
		foreach($this->blockCollection as $block){
			$data = [];
			foreach($list[0] as $attribute){
				$data[] = $block->getData($attribute);
			}
			$list[] = $data;
		}

		$fp = fopen($path.'/blocks.csv', 'w');

		foreach ($list as $fields) {
			fputcsv($fp, $fields);
		}

		fclose($fp);
		echo 'export block finish'.'<br/>';
    }
}
