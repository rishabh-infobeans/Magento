<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Grid
 *
 * @author rishabh
 */
class Buyshop_Faq_Block_Adminhtml_Faq_GridTest extends PHPUnit_Framework_TestCase {

    private $classname;

    public function testConstructorMethods() {
        $this->checkMethods('setId', 'faqGrid');
        $this->checkMethods('setDefaultSort', 'id');
        $this->checkMethods('setDefaultDir', 'ASC');
        $this->checkMethods('setSaveParametersInSession', true);
    }

    public function checkMethods($methodName = array(), $methodArguement = array()) {
        $this->classname = 'Buyshop_Faq_Block_Adminhtml_Faq_Grid';
        $mock = $this->getMockBuilder($this->classname)
                ->disableOriginalConstructor()
                ->getMock();
        // set expectations for constructor calls
        $mock->expects($this->once())
                ->method($methodName)
                ->with(
                        $this->equalTo($methodArguement)
        );
        // now call the constructor
        $reflectedClass = new ReflectionClass($this->classname);
        $constructor = $reflectedClass->getConstructor();
        $constructor->invoke($mock, $methodArguement);
    }
}
