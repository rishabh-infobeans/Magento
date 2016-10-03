<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexController
 *
 * @author rishabh
 */
class Buyshop_Faq_IndexController extends Mage_Core_Controller_Front_Action {

    public function testModelAction() {
        $params = $this->getRequest()->getParams();
        $faq = Mage::getModel('faq/faq');
        echo("Loading the blogpost with an ID of " . $params['id']);
        $faq->load($params['id']);
        $data = $faq->getData();
        var_dump($data);
    }

}
