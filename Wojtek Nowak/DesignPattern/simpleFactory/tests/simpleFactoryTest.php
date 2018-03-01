<?php
class Mage_Core_Model_Factory_Test extends TestCase
{
        protected $instance;
        
        public function __construct()
        {
            $this->instance = new Mage_Core_Model_Factory;
        }

	public function testGetModel()
	{
            $catalogProductModel = $this->instance->getModel('catalog/product');
            $this->assertInstanceOf(Mage_Catalog_Model_Product::class, $catalogProductModel);
	}

        public function testGetSingleton()
        {
            $catalogProductSingleton = $this->instance->getSingleton('catalog/product');
            $this->assertInstanceOf(Mage_Catalog_Model_Product::class, $catalogProductSingleton);
        }

        public function testGetResourceModel()
        {
            $resourceModel = $this->instance->getResourceModel('catalog/product');
            $this->assertInstanceOf(Mage_Catalog_Model_Resource_Product::class, $resourceModel);
        }

        public function testGetHelper()
        {
            $helper = $this->instance->getHelper('core/data');
            $this->assertInstanceOf(Mage_Core_Helper_Data::class, $helper);
        }

        public function testGetUrlRewriteInstance()
        {
            $urlRewrite = $this->instance->getUrlRewriteInstance();
            $this->assertInstanceOf(Mage_Core_Model_Url_Rewrite::class, $urlRewrite);
        }

        public function testGetConfig()
        {
            $getConfig = $this->instance->getConfig();
            $this->assertInstanceOf(Mage_Core_Model_Config::class, $getConfig);
        }
}
