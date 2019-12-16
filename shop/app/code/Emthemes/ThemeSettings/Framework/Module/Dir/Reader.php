<?php
/**
 * Module configuration file reader
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Emthemes\ThemeSettings\Framework\Module\Dir;

use Magento\Framework\Config\FileIterator;
use Magento\Framework\Config\FileIteratorFactory;
use Magento\Framework\Filesystem;
use Magento\Framework\Module\Dir;
use Magento\Framework\Module\ModuleListInterface;
use Magento\Framework\Component\ComponentRegistrar;

class Reader
{
    /**
     * Module directories that were set explicitly
     *
     * @var array
     */
    protected $customModuleDirs = [];

    /**
     * Directory registry
     *
     * @var Dir
     */
    protected $moduleDirs;

    /**
     * Modules configuration provider
     *
     * @var ModuleListInterface
     */
    protected $modulesList;

    /**
     * @var FileIteratorFactory
     */
    protected $fileIteratorFactory;

    /**
     * @var Filesystem\Directory\ReadFactory
     */
    protected $readFactory;

    /**
     * @param Dir $moduleDirs
     * @param ModuleListInterface $moduleList
     * @param FileIteratorFactory $fileIteratorFactory
     * @param Filesystem\Directory\ReadFactory $readFactory
     */
    public function __construct(
    	\Magento\Theme\Model\Theme $theme,
    	\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
    	ComponentRegistrar $componentRegistrar,
        Dir $moduleDirs,
        ModuleListInterface $moduleList,
        FileIteratorFactory $fileIteratorFactory,
        Filesystem\Directory\ReadFactory $readFactory,
        \Magento\Theme\Model\Design $design
    ) {
    	$this->theme = $theme;
    	$this->componentRegistrar = $componentRegistrar;
        $this->moduleDirs = $moduleDirs;
        $this->modulesList = $moduleList;
        $this->fileIteratorFactory = $fileIteratorFactory;
        $this->readFactory = $readFactory;
        $this->design = $design;
        if(isset($_SESSION["theme_id"])){
        	$this->themeId = $_SESSION["theme_id"];
        }else{
		    $this->themeId = $scopeConfig->getValue('design/theme/theme_id',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
		    if($design->getDesign()){
				$this->themeId = $design->getDesign();
			}
		}
    }

    /**
     * Go through all modules and find configuration files of active modules
     *
     * @param string $filename
     * @return FileIterator
     */
    public function getConfigurationFiles($filename)
    {
    	$uri = $_SERVER['REQUEST_URI'];
        $params = explode('/',$uri);
        $code = "";
        for($i=0; $i < count($params); $i++){
        	if($params[$i] == 'settheme'){
        		$code = ucwords($params[$i+1]);
        		break;
        	}
        }
        if(!$code) $code = $this->themeId;
        $this->theme->load($code);
        $themePath = $this->theme->getFullPath();
        $themePath = str_replace('setup','frontend',$themePath);
        return $this->fileIteratorFactory->create($this->getFiles($filename, $themePath));
    }

    /**
     * Go through all modules and find composer.json files of active modules
     *
     * @return FileIterator
     */
    public function getComposerJsonFiles()
    {
        return $this->fileIteratorFactory->create($this->getFiles('composer.json'));
    }

    /**
     * Go through all modules and find corresponding files of active modules
     *
     * @param string $filename
     * @param string $subDir
     * @return array
     */
     
    private function getThemeDir($theme) {
    	$path = $this->componentRegistrar->getPath(ComponentRegistrar::THEME, $theme);
    	return $path;
    }
    private function getFiles($filename, $theme = '')
    {
        $result = [];
        $themeEtcDir = $this->getThemeDir($theme).'/etc';
        $file = $themeEtcDir . '/' . $filename;
        $directoryRead = $this->readFactory->create($themeEtcDir);
        $path = $directoryRead->getRelativePath($file);
        if ($directoryRead->isExist($path)) {
            $result[] = $file;
        }
        return $result;
    }

    /**
     * Retrieve list of module action files
     *
     * @return array
     */
    public function getActionFiles()
    {
        $actions = [];
        foreach ($this->modulesList->getNames() as $moduleName) {
            $actionDir = $this->getModuleDir(Dir::MODULE_CONTROLLER_DIR, $moduleName);
            if (!file_exists($actionDir)) {
                continue;
            }
            $dirIterator = new \RecursiveDirectoryIterator($actionDir, \RecursiveDirectoryIterator::SKIP_DOTS);
            $recursiveIterator = new \RecursiveIteratorIterator($dirIterator, \RecursiveIteratorIterator::LEAVES_ONLY);
            $namespace = str_replace('_', '\\', $moduleName);
            /** @var \SplFileInfo $actionFile */
            foreach ($recursiveIterator as $actionFile) {
                $actionName = str_replace('/', '\\', str_replace($actionDir, '', $actionFile->getPathname()));
                $action = $namespace . "\\" . Dir::MODULE_CONTROLLER_DIR . substr($actionName, 0, -4);
                $actions[strtolower($action)] = $action;
            }
        }
        return $actions;
    }

    /**
     * Get module directory by directory type
     *
     * @param string $type
     * @param string $moduleName
     * @return string
     */
    public function getModuleDir($type, $moduleName)
    {
        if (isset($this->customModuleDirs[$moduleName][$type])) {
            return $this->customModuleDirs[$moduleName][$type];
        }
        return $this->moduleDirs->getDir($moduleName, $type);
    }

    /**
     * Set path to the corresponding module directory
     *
     * @param string $moduleName
     * @param string $type directory type (etc, controllers, locale etc)
     * @param string $path
     * @return void
     */
    public function setModuleDir($moduleName, $type, $path)
    {
        $this->customModuleDirs[$moduleName][$type] = $path;
    }
}
