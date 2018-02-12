<?php

/**
 * Class PandaGroup_Customer_Orders
 */
class PandaGroup_Customer_OrdersController extends Mage_Core_Controller_Front_Action
{
    /**
     * Show orders logged customer
     */
    public function listAction()
    {
        $orderId = (int) $this->getRequest()->getParam('orderId');

        if($orderId > 0){
            Mage::register(‘orderId’, $orderId);
        }

        $this->loadLayout();
        $this->renderLayout();
    }
}