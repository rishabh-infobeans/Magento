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
class Buyshop_Faq_Block_Adminhtml_Faq_Grid extends Mage_Adminhtml_Block_Widget_Grid {

    public function __construct() {
        parent::__construct();
        $this->setId('faqGrid');
        $this->setDefaultSort('id');
        $this->setDefaultDir('ASC');
        $this->setSaveParametersInSession(true);
    }

    protected function _prepareCollection() {

        $collection = Mage::getModel('faq/faq')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns() {
        $this->addColumn('faq_id', array(
            'header' => Mage::helper('faq')->__('ID'),
            'align' => 'right',
            'width' => '10px',
            'index' => 'faq_id',
        ));

        $this->addColumn('title', array(
            'header' => Mage::helper('faq')->__('Title'),
            'align' => 'left',
            'index' => 'title',
            'width' => '50px',
        ));


        $this->addColumn('desc', array(
            'header' => Mage::helper('faq')->__('Description'),
            'width' => '150px',
            'index' => 'desc',
        ));
        $this->addColumn("timestamp", array(
            "header" => Mage::helper("faq")->__("Created Time"),
            'width' => '150px',
            "index" => "timestamp",
        ));
        return parent::_prepareColumns();
    }

    public function getRowUrl($row) {
        return $this->getUrl("*/*/edit", array("id" => $row->getId()));
    }

    protected function _prepareMassaction() {
        $this->setMassactionIdField('faq_id');
        $this->getMassactionBlock()->setFormFieldName('faq_ids');
        $this->getMassactionBlock()->setUseSelectAll(true);
        $this->getMassactionBlock()->addItem('remove_faq', array(
            'label' => Mage::helper('faq')->__('Remove FAQ'),
            'url' => $this->getUrl('*/faq/massRemove'),
            'confirm' => Mage::helper('faq')->__('Are you sure?')
        ));
        return $this;
    }

}
