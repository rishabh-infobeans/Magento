<?php

class Buyshop_Faq_Block_FaqTest extends PHPUnit_Framework_TestCase {

    protected $datasets;

    public function testConstruct() {
        $datasets = Mage::getModel('faq/faq')->getCollection();
        $this->assertInstanceOf('Buyshop_Faq_Model_Mysql4_Faq_Collection', $datasets);
    }

    public function testDataset() {
        $datasets = Mage::getModel('faq/faq')->getCollection()->getSize();
        $this->assertGreaterThanOrEqual(0, $datasets);
    }

}
