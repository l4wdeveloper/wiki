<?php

/**
 * Class PandaGroup_Customer_OrdersTest
 */
class PandaGroup_Customer_OrdersTest extends TestCase
{
    public function testGetResult()
    {
        $orderProvider = new Pandagroup_Customer_Model_Provider_Order();
        $this->assertInstanceOf('Mage_Sales_Model_Order', $orderProvider->getResult());
    }
}