<?php

class Larwa_ProductObserver_Block_Adminhtml_View extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = 'productobserver';
        $this->_controller = 'adminhtml_view';
        $this->_headerText = Mage::helper('productobserver')->__('Product Observer');

        parent::__construct();
        $this->_removeButton('add');
    }
}
