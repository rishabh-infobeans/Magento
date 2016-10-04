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

    public function IndexAction() {
        $this->loadLayout();
        $this->getLayout()->getBlock("head")->setTitle($this->__("FAQ"));
//        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
//        $breadcrumbs->addCrumb("home", array(
//            "label" => $this->__("Home"),
//            "title" => $this->__("Home"),
//            "link" => Mage::getBaseUrl()
//        ));
//
//        $breadcrumbs->addCrumb("faq", array(
//            "label" => $this->__("Faq"),
//            "title" => $this->__("Faq")
//        ));

        $this->renderLayout();
    }

}
