<?php

class Ebizmarts_MageMonkey_Block_Adminhtml_System_Config_Form_Field_Mapfields extends Mage_Adminhtml_Block_System_Config_Form_Field_Array_Abstract
{

    public function __construct()
    {
        $this->addColumn('magento', array(
            'label' => Mage::helper('monkey')->__('Customer'),
            'style' => 'width:120px',
        ));
        $this->addColumn('mailchimp', array(
            'label' => Mage::helper('monkey')->__('MailChimp'),
            'style' => 'width:120px',
        ));
        $this->_addAfter = false;
        $this->_addButtonLabel = Mage::helper('monkey')->__('Add field');
        parent::__construct();
    }
}