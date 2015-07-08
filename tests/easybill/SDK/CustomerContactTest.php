<?php

namespace easybill\SDK;

include_once 'ClientHelper.php';

use easybill\SDK\Model\Customer;
use easybill\SDK\Model\CustomerContact;

class CustomerContactTest extends ClientHelper
{
    /** @var  Customer */
    public static $customer;

    /**
     * @beforeClass
     */
    public static function setUpSomeSharedFixtures()
    {
        self::$customer = new Customer();
        self::$customer->lastName = 'FooBar' . time();

        $test = new self();
        self::$customer = $test->getClient()->createCustomer(self::$customer);
    }

    /**
     * @afterClass
     */
    public static function tearDownSomeSharedFixtures()
    {
        $test = new self();
        $test->getClient()->deleteCustomer(self::$customer->customerID);
        self::$customer = null;
    }

    public function testCreateCustomerContact()
    {
        $contact = new CustomerContact();
        $contact->customerID = self::$customer->customerID;
        $contact->street = 'Meep';
        $contact->zipCode = '4444';
        $contact->city = 'FooBar';
        $contact = $this->getClient()->createCustomerContact($contact);
        $this->assertInstanceOf('\easybill\SDK\Model\CustomerContact', $contact);
        $this->assertNotNull($contact->contactID);
        return $contact;
    }

    /**
     * @depends testCreateCustomerContact
     */
    public function testDeleteCustomerContact(CustomerContact $contact)
    {
        $this->getClient()->deleteCustomerContact($contact->contactID);
        $res = $this->getClient()->findCustomerContact($contact->contactID);
        $this->assertNull($res);
    }

}
