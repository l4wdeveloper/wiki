<?php

/**
 * Class Pandagroup_Customer_Model_Provider_Session
 */
class Pandagroup_Customer_Model_Provider_Session
{
    /**
     * Get instance model customer session
     *
     * @return Mage_Customer_Model_Session
     */
    public function getInstance()
    {
        return Mage::getSingleton('customer/session');
    }

    /**
     * Check if customer is logged
     *
     * @return boolean
     */
    public function customerIsLogged()
    {
        return $this->getInstance()->isLoggedIn();
    }

    /**
     * Get customer object
     *
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->getInstance()->getCustomer();
    }
}