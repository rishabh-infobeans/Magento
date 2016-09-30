<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Observer
 *
 * @author rishabh
 */
class Buyshop_Testimonial_Model_Observer {

    const TWO = 2;

    public function changeCustomerGroup($observer) {

        $customer = Mage::getSingleton('customer/session')->getCustomer();
        Mage::getSingleton('core/session')->setMySessionVariable($customer->getGroupId());

        if ($customer->getGroupId() != self::TWO) {
            $customer->setGroupId(self::TWO);
            $customer->save();
        }
    }

    public function revertCustomerGroup($observer) {
        $value = Mage::getSingleton('core/session')->getMySessionVariable();
        $group = Mage::getModel('customer/group')->load($value);
        $customer = Mage::getSingleton('customer/session')->getCustomer();
        $customer->setGroupId($value);
        $customer->save();
    }

}
