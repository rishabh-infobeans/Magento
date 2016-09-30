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
class Buyshop_Faq_Model_Resource_Faq extends Mage_Core_Model_Resource_Db_Abstract {

    protected function _construct() {
        $this->_init('faq/faq', 'faq_id');
    }

}
