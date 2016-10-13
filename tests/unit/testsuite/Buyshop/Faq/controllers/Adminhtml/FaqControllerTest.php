<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Buyshop_Faq_Adminhtml_FaqControllerTest extends PHPUnit_Framework_TestCase {

    private $rowcount = 0;

    public function testsqlQuery() {
        //fetching data using query
        $connection = Mage::getSingleton('core/resource')->getConnection('core_read');
        $sql = "SELECT faq_id FROM `buyshop_faq` WHERE 1=1";
        $rows = $connection->fetchAll($sql);
        $sqlrow = $this->testRowCount($rows);
    }

    public function testRowCount($row = array()) {
        foreach ($row as $value) {
            $this->rowcount = $this->rowcount + 1;
        }
        return $this->rowcount;
    }

    public function testModel() {
        $modelsize = Mage::getModel('faq/faq')->getCollection()->getSize();
        return $modelsize;
    }

    public function assertion() {
        $sqlrowcount = $this->testSqlQuery();
        $modelsizecount = $this->testModel();
        $this->assertsEqual($sqlrowcount, 0);
    }

    public function testeditAction() {
        
    }

}
