<?php

class Larwa_ProductObserver_IndexController extends Mage_Core_Controller_Front_Action
{
    public function testModelAction()
    {
        $report = Mage::getModel('productobserver/report');
        echo get_class($report);
    }
}

