<?php

/**
 * Class Pandagroup_Customer_Model_Provider_Session_Test
 */
class Pandagroup_Customer_Model_Provider_Session_Test extends TestCase
{
    public function testCustomerIsLogged()
    {
        $session = new Pandagroup_Customer_Model_Provider_Session();
        $this->assertSame('boolean',gettype($session->customerIsLogged()));
    }

    public function testGetInstance()
    {
        $session = new Pandagroup_Customer_Model_Provider_Session();
        $this->assertInstanceOf('Mage_Customer_Model_Session',$session->getInstance());
    }
}