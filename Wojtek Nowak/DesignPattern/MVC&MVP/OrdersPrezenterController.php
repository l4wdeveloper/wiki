<?php

/**
 * Class OrdersPrezenterController
 */
class PandaGroup_Customer_OrdersPrezenterController extends Mage_Core_Controller_Front_Action
{
    /**
     * Show orders logged customer
     */
    public function listAction()
    {
        /* @orderProvider PandaGroup_Customer_Model_Provider_Order */
        $orderProvider = Mage::getModel('pandagroup_customer/provider_order');

        /* @$sessionProvider PandaGroup_Customer_Model_Provider_Session */
        $sessionProvider = Mage::getModel('pandagroup_customer/provider_session');

        $orders = [];
        $orderId = (int) $this->getRequest()->getParam('orderId');

        if($sessionProvider->customerIsLogged()){
            $customerId = $sessionProvider->getCusotmerId();
            $orders = $orderProvider->loadByCustomerId($customerId);
            if($orderId > 0){
                $orders = $orders->orderId($orderId);
            }
        }
        $this->loadLayout();
        $this->getLayout()->getBlock('main')->assign('orders', $orders->getResult());
        $this->renderLayout();
    }
}