<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Emthemes\ThemeSettings\Setup;

use Magento\Framework\Setup;
use Magento\Store\Model\Store;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Installer implements Setup\SampleData\InstallerInterface
{
    /**
     * @var \Magento\CatalogSampleData\Model\Category
     */
    private $category;

    /**
     * Setup class for css
     *
     * @var \Magento\ThemeSampleData\Model\Css
     */
    private $css;

    /**
     * @var \Emthemes\ThemeSettings\Setup\Model\Page
     */
    private $page;

    /**
     * @var \Emthemes\ThemeSettings\Setup\Model\Block
     */
    private $block;

    /**
     * @param \Magento\CatalogSampleData\Model\Category $category
     * @param \Magento\ThemeSampleData\Model\Css $css
     * @param \Emthemes\ThemeSettings\Setup\Model\Page $page
     * @param \Emthemes\ThemeSettings\Setup\Model\Block $block
     */
    public function __construct(
        \Emthemes\ThemeSettings\Setup\Model\Page $page,
        \Emthemes\ThemeSettings\Setup\Model\Block $block,
        \Emthemes\ThemeSettings\Setup\Model\Widget $widget,
        \Magento\Theme\Model\Config $config,
        \Emthemes\ThemeSettings\App\Config $themeConfig,
        \Magento\Theme\Model\Theme $theme,
        \Magento\Framework\App\Config\Storage\WriterInterface $configWriter,
        \Magento\Theme\Model\ResourceModel\Theme\CollectionFactory $collectionFactory
    ) {
        $this->page = $page;
        $this->block = $block;
        $this->widget = $widget;
		$this->config = $config;
        $this->collectionFactory = $collectionFactory;
        $this->configWriter = $configWriter;
        $this->themeConfig = $themeConfig;
        $this->theme = $theme;
    }

    /**
     * {@inheritdoc}
     */
    public function install()
    {
        $this->page->install(['Emthemes_ThemeSettings::fixtures/pages.csv']);
        $this->block->install(['Emthemes_ThemeSettings::fixtures/blocks.csv']);
        $this->widget->install(['Emthemes_ThemeSettings::fixtures/widgets.csv']);
        
        $this->assignTheme();
    }
    
    protected function assignTheme()
    {
        $themes = $this->collectionFactory->create()->loadRegisteredThemes();
        /** @var \Magento\Theme\Model\Theme $theme */
        $query = 'Emthemes';
        foreach ($themes as $theme) {
        	if(substr($theme->getCode(), 0, strlen($query)) === $query)
            {
                $this->config->assignToStore(
                    $theme,
                    [Store::DEFAULT_STORE_ID],
                    ScopeConfigInterface::SCOPE_TYPE_DEFAULT
                );
                $_SESSION["theme_id"] = $theme->getThemeId();
                $cmsHomePage = $this->themeConfig->getValue('cms_home_page', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
                $this->configWriter->save('web/default/cms_home_page', $cmsHomePage, ScopeConfigInterface::SCOPE_TYPE_DEFAULT, Store::DEFAULT_STORE_ID);
                break;
            }
        }
    }
}
