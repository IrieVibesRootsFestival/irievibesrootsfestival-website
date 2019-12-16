<?php
/* app/code/Atwix/TestAttribute/Setup/InstallData.php */
 
namespace Emthemes\Em0146settings\Setup;
 
use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
 
/**
 * @codeCoverageIgnore
 */
class InstallData implements InstallDataInterface
{
    /**
     * EAV setup factory
     *
     * @var EavSetupFactory
     */
    private $eavSetupFactory;
 
    /**
     * Init
     *
     * @param EavSetupFactory $eavSetupFactory
     */
    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }
 
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        /** @var EavSetup $eavSetup */
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
 
        /**
         * Add attributes to the eav/attribute
         */
       
    
        if(!$eavSetup->getAttribute(\Magento\Catalog\Model\Product::ENTITY,'em_hot_label'))
        {   
            $eavSetup->addAttribute(
                \Magento\Catalog\Model\Product::ENTITY,
                'em_hot_label',
                [
                    'type' => 'int',
                    'label' => 'EM Hot Label',
                    'input' => 'select',
                    'class' => '',
                    'source' => 'Magento\Eav\Model\Entity\Attribute\Source\Boolean',
                    'global' =>\Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                    'visible' => true,
                    'required' => false,
                    'user_defined' => false,
                    'default' => 0,
                    'searchable' => false,
                    'filterable' => false,
                    'comparable' => false,
                    'used_in_product_listing' => true,
                    'group' => 'General'
                ]
            );
        }
        if(!$eavSetup->getAttribute(\Magento\Catalog\Model\Product::ENTITY,'em_sale_label'))
        {
            $eavSetup->addAttribute(
                \Magento\Catalog\Model\Product::ENTITY,
                'em_sale_label',
                [
                    'type' => 'int',
                    'label' => 'EM Sale Label',
                    'input' => 'select',
                    'class' => '',
                    'source' => 'Magento\Eav\Model\Entity\Attribute\Source\Boolean',
                    'global' =>\Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                    'visible' => true,
                    'required' => false,
                    'user_defined' => false,
                    'default' => 0,
                    'searchable' => false,
                    'filterable' => false,
                    'comparable' => false,
                    'used_in_product_listing' => true,                
                    'group' => 'General'
                ]
            );
        }
        if(!$eavSetup->getAttribute(\Magento\Catalog\Model\Product::ENTITY,'em_new_label'))
        {
            $eavSetup->addAttribute(
                \Magento\Catalog\Model\Product::ENTITY,
                'em_new_label',
                [
                    'type' => 'int',                
                    'label' => 'EM New Label',
                    'input' => 'select',
                    'class' => '',
                    'source' => 'Magento\Eav\Model\Entity\Attribute\Source\Boolean',
                    'global' =>\Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                    'visible' => true,
                    'required' => false,
                    'user_defined' => false,
                    'default' => 0,
                    'searchable' => false,
                    'filterable' => false,
                    'comparable' => false,                    
                    'used_in_product_listing' => true,                                        
                    'group' => 'General'
                ]
            );
        }
    }
}