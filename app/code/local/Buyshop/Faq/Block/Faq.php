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
class Buyshop_Faq_Block_Faq extends Mage_Core_Block_Template {

    public function __construct() {
        parent::__construct();
        $datasets = Mage::getModel('faq/faq')->getCollection();
        $this->setDatasets($datasets);
    }

    protected function _prepareLayout() {
        parent::_prepareLayout();
        $pager = $this->getLayout()->createBlock('page/html_pager')->setCollection($this->getDatasets());
        $this->setChild('pager', $pager);
        $this->getDatasets()->load();
        return $this;
    }

    public function getPagerHtml() {
        return $this->getChildHtml('pager');
    }

}
