<?php

/**
 * Class PandaGroup_Customer_Block_Main
 */
class PandaGroup_Customer_Block_Main extends Mage_Core_Block_Template
{
    /**
     * Get orders
     *
     * @return Mage_Sales_Model_Order
     */
    public function getOrders()
    {
        /* @orderProvider PandaGroup_Customer_Model_Provider_Order */
        $orderProvider = Mage::getModel('pandagroup_customer/provider_order');

        /* @$sessionProvider PandaGroup_Customer_Model_Provider_Session */
        $sessionProvider = Mage::getModel('pandagroup_customer/provider_session');

        $orderId = Mage::registry('orderId');

        if ($sessionProvider->customerIsLogged()) {

            $customerId = $sessionProvider->getCustomer()->getId();
            $orders = $orderProvider->loadByCustomerId($customerId);

            if (!isset($orderId)) {
                $customerId = $sessionProvider->getCusotmerId();
                $orders = $orders->orderId($orderId);
            }

            return $orders->getResult();
        }
        return;
    }
}