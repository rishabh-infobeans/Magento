<?php

class Buyshop_Faq_Block_Adminhtml_Faq_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form {

    protected function _prepareForm() {

        $form = new Varien_Data_Form();
        $this->setForm($form);
        $wysiwygConfig = Mage::getSingleton('cms/wysiwyg_config')->getConfig(
                array('tab_id' => 'form_section')
        );
        $wysiwygConfig["directives_url"] = Mage::getSingleton('adminhtml/url')->getUrl('adminhtml/cms_wysiwyg/directive');
        $wysiwygConfig["directives_url"] = Mage::getSingleton('adminhtml/url')->getUrl('adminhtml/cms_wysiwyg/directive');

        $wysiwygConfig["directives_url_quoted"] = Mage::getSingleton('adminhtml/url')->getUrl('adminhtml/cms_wysiwyg/directive');
        $wysiwygConfig["widget_window_url"] = Mage::getSingleton('adminhtml/url')->getUrl('adminhtml/widget/index');
        $wysiwygConfig["files_browser_window_width"] = (int) Mage::getConfig()->getNode('adminhtml/cms/browser/window_width');

        $wysiwygConfig["files_browser_window_height"] = (int) Mage::getConfig()->getNode('adminhtml/cms/browser/window_height');

        $plugins = $wysiwygConfig->getData("plugins");

        $plugins[0]["options"]["url"] = Mage::getSingleton('adminhtml/url')->getUrl('adminhtml/system_variable/wysiwygPlugin');

        $plugins[0]["options"]["onclick"]["subject"] = "MagentovariablePlugin.loadChooser('" . Mage::getSingleton('adminhtml/url')->getUrl('adminhtml/system_variable/wysiwygPlugin') . "', '{{html_id}}');";
        $plugins = $wysiwygConfig->setData("plugins", $plugins);

        $fieldset = $form->addFieldset("faq_form", array("legend" => Mage::helper("faq")->__("Item information")));

        $fieldset->addField("title", "text", array(
            "label" => Mage::helper("faq")->__("Title"),
            "class" => "required-entry",
            "required" => true,
            "name" => "title",
        ));
        $fieldset->addField("desc", "editor", array(
            "label" => Mage::helper("faq")->__("Description"),
            "class" => "required-entry",
            "required" => true,
            "name" => "description",
        ));
        if (Mage::getSingleton("adminhtml/session")->getFaqData()) {
            $form->setValues(Mage::getSingleton("adminhtml/session")->getFaqData());
            Mage::getSingleton("adminhtml/session")->getFaqData(null);
        } elseif (Mage::registry("faq_data")) {
            $form->setValues(Mage::registry("faq_data")->getData());
        }
        return parent::_prepareForm();
    }

}
