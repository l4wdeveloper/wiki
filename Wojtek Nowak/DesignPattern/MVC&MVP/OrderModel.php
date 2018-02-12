<?php

/**
 * Class Pandagroup_Customer_Model_Provider_Order
 */
class Pandagroup_Customer_Model_Provider_Order
{
    /* @var $order Mage_Sales_Model_Order */
    protected $order;

    /**
    * Get order
    *
    * @return $this
    */
    public function loadBy()
    {
        $this->order = Mage::getSingleton('sales/order')->getCollection();
        return $this;
    }

    /**
    * Load orders by customer id
    *
    * @param int $customerId
    * @return $this
    */
    public function customerId($customerId)
    {
        $this->order->addFieldToFilter('customer_id', $customerId);
        return $this;
    }
    /**
    * Load by order id
    *
    * @param int $orderId
    * @return $this
    */
    public function orderId($orderId)
    {
        $this->order->addFieldToFilter('product_id', $orderId);
        return $this;
    }
    /**
    * Get result query
    *
    * @return Mage_Sales_Model_Order
    */
    public function getResult()
    {
        return $this->order;
    }
}