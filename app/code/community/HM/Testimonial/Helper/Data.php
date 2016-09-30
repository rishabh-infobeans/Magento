<?php
/**
 * Magento Testimonial
 *
 * Testimonial Plus for Magento
 * Author: Hire Magento
 * Website: www.hiremagento.com 
 * Suport Email: hiremagento@gmail.com
 *
**/
class HM_Testimonial_Helper_Data extends Mage_Core_Helper_Abstract
{
	
	public function getConfigEnableFrontend() {
		return Mage::getStoreConfig('hm_testimonial/testimonial_general/frontend_submission');
	}
	
	public function getConfigEnableGuest() {
		return Mage::getStoreConfig('hm_testimonial/testimonial_general/guest_submission');
	}

	public function getConfigAutoApprove() {
		return Mage::getStoreConfig('hm_testimonial/testimonial_general/approve_testimonial');
	}

	public function getConfigShowName() {
		return Mage::getStoreConfig('hm_testimonial/testimonial_general/display_name');
	}

	public function getConfigShowUrl() {
		return Mage::getStoreConfig('hm_testimonial/testimonial_general/display_wedsite');
	}
}
	 