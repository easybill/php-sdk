<?php

namespace easybill\SDK;

include_once 'ClientHelper.php';

use easybill\SDK\Model\Customer;

class CustomerTest extends ClientHelper
{

    public function testCreateCustomer()
    {
        $customer = new Customer();
        $customer->lastName = 'FooBar' . time();
        $customer = $this->getClient()->createCustomer($customer);

        $this->assertInstanceOf('easybill\SDK\Model\Customer', $customer);
        $this->assertNotNull($customer->customerID);
        return $customer;
    }

    public function testFindCustomerWrongId()
    {
        foreach (array(1, "1", null, "") as $customerID) {
            $this->assertNull($this->getClient()->findCustomer($customerID));
        }
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

    public function testFindCustomerByCustomerNumberWrongId()
    {
        foreach (array(1, "1", null, "") as $customerID) {
            $this->assertNull($this->getClient()->findCustomerByCustomerNumber($customerID));
        }
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

    public function testSearchCustomersWithWrongData()
    {
        $collection = $this->getClient()->searchCustomers(md5(time()));
        $this->assertInstanceOf('\easybill\SDK\Collection\Customers', $collection);
        $this->assertSame(0, $collection->count());
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
     * @expectedException \easybill\SDK\Exception\ModelDataNotValid
     */
    public function testUpdateCustomerWithDataNotValid()
    {
        $customer = new Customer();
        $res = $this->getClient()->updateCustomer($customer);
    }

    /**
     * @expectedException \easybill\SDK\Exception\ModelDataNotValid
     */
    public function testUpdateCustomerNotFound()
    {
        $customer = new Customer();
        $customer->firstName = 123;
        $customer->customerID = 1;
        $res = $this->getClient()->updateCustomer($customer);
    }

    /**
     * @depends testUpdateCustomer
     */
    public function testDeleteCustomer(Customer $customer)
    {
        $this->getClient()->deleteCustomer($customer->customerID);
        $res = $this->getClient()->findCustomer($customer->customerID);
        $this->assertNull($res);
    }

}
