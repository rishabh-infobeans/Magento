<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FAQController
 *
 * @author rishabh
 */
class Buyshop_Faq_Adminhtml_FaqController extends Mage_Adminhtml_Controller_Action {

    public function indexAction() {
        $this->loadLayout();
        $this->renderLayout();
    }

}
