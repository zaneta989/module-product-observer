<?php

class Larwa_ProductObserver_Adminhtml_ViewController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('Reports'))->_title($this->__('Product Views'));
        $this->loadLayout();
        $this->_setActiveMenu('report/report');
        $this->renderLayout();
    }
}

