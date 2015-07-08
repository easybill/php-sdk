<?php

namespace easybill\SDK;

use easybill\SDK\Model\Customer;
use easybill\SDK\Model\CustomerContact;

class ClientTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @return \easybill\SDK\Client
     */
    public function getClient()
    {
        $client = new Client(
            'path/to/your/soap.easybill.wsdl',
            'your api key!'
        );
        return $client;
    }

    public function testCreateCustomer()
    {
        $customer = new Customer();
        $customer->lastName = 'FooBar' . time();
        $customer = $this->getClient()->createCustomer($customer);

        $this->assertInstanceOf('easybill\SDK\Model\Customer', $customer);
        $this->assertNotNull($customer->customerID);
        return $customer;
    }

    /**
     * @depends testCreateCustomer
     */
    public function testFindCustomer(Customer $customer)
    {
        $customer = $this->getClient()->findCustomer($customer->customerID);
        $this->assertInstanceOf('easybill\SDK\Model\Customer', $customer);
        $this->assertNotNull($customer->customerID);
        return $customer;
    }

    /**
     * @depends testFindCustomer
     */
    public function testFindCustomerByCustomerNumber(Customer $customer)
    {
        $res = $this->getClient()->findCustomerByCustomerNumber($customer->customerNumber);
        $this->assertInstanceOf('easybill\SDK\Model\Customer', $res);
        $this->assertSame($customer->customerNumber, $res->customerNumber);

        return $res;
    }

    /**
     * @depends testFindCustomerByCustomerNumber
     */
    public function testSearchCustomers(Customer $customer)
    {
        $res = $this->getClient()->searchCustomers($customer->lastName);
        $this->assertSame(1, $res->count());
        $this->assertInstanceOf('easybill\SDK\Model\Customer', $res->current());
        $this->assertSame($customer->lastName, $res->current()->lastName);
        return $res->current();
    }

    /**
     * @depends testSearchCustomers
     */
    public function testUpdateCustomer(Customer $customer)
    {
        $customer->firstName = 'klaus';
        $res = $this->getClient()->updateCustomer($customer);
        $this->assertSame($customer->firstName, $res->firstName);
        $res = $this->getClient()->findCustomer($customer->customerID);
        $this->assertSame($customer->firstName, $res->firstName);
        return $res;
    }

    /**
     * @depends testUpdateCustomer
     */
    public function testCreateCustomerContact(Customer $customer)
    {
        $contact = new CustomerContact();
        $contact->customerID = $customer->customerID;
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

        return $this->getClient()->findCustomer($contact->customerID);
    }

    /**
     * @depends testDeleteCustomerContact
     */
    public function testDeleteCustomer(Customer $customer)
    {
        $this->getClient()->deleteCustomer($customer->customerID);
        $res = $this->getClient()->findCustomer($customer->customerID);
        $this->assertNull($res);
    }


}
