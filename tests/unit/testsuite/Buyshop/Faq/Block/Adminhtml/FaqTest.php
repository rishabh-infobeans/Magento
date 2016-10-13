<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Faq
 *
 * @author rishabh
 */
class Buyshop_Faq_Block_Adminhtml_FaqTest extends PHPUnit_Framework_TestCase {

    public function testIntance() {
        $this->assertInstanceOf('Buyshop_Faq_Helper_Data', Mage::helper("faq"));
    }

    public function testHelper() {
        $faqManager = "FAQ Manager";
        $addnewFaq = "Add New Faq";
        $this->assertEquals('FAQ Manager', Mage::helper("faq")->__("FAQ Manager"));
        $this->assertEquals('Add New Faq', Mage::helper("faq")->__("Add New Faq"));
    }

}
