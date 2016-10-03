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
class Buyshop_Faq_Block_Adminhtml_Faq extends Mage_Adminhtml_Block_Widget_Grid_Container {

    public function __construct() {
        $this->_controller = "adminhtml_faq";
        $this->_blockGroup = "faq";
        $this->_headerText = Mage::helper("faq")->__("FAQ Manager");
        $this->_addButtonLabel = Mage::helper("faq")->__("Add New FAQ");
        parent::__construct();
    }

}
