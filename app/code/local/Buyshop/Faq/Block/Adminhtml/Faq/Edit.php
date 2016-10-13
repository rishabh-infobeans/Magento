<?php

class Buyshop_Faq_Block_Adminhtml_Faq_Edit extends Mage_Adminhtml_Block_Widget_Form_Container {

    public function __construct() {

        parent::__construct();
        $this->_objectId = "faq_id";
        $this->_blockGroup = "faq";
        $this->_controller = "adminhtml_faq";
        $this->_updateButton("save", "label", Mage::helper("faq")->__("Save Item"));
        $this->_updateButton("delete", "label", Mage::helper("faq")->__("Delete Item"));

        $this->_addButton("saveandcontinue", array(
            "label" => Mage::helper("faq")->__("Save And Continue Edit"),
            "onclick" => "saveAndContinueEdit()",
            "class" => "save",
                ), -100);


        $this->_formScripts[] = "function saveAndContinueEdit(){
            editForm.submit($('edit_form').action+'back/edit/');
            }";
    }

    public function getHeaderText() {
        if (Mage::registry("faq_data") && Mage::registry("faq_data")->getId()) {

            return Mage::helper("faq")->__("Edit FAQ '%s'", $this->htmlEscape(Mage::registry("faq_data")->getName()));
        } else {

            return Mage::helper("faq")->__("Add FAQ");
        }
    }

}
