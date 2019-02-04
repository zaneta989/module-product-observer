<?php

class Larwa_ProductObserver_Model_Observer
{
    public function observeProduct($observer)
    {
        $report = Mage::getModel('productobserver/report');
        $report->setIp($_SERVER['REMOTE_ADDR']);
        $report->setProductId($observer->getProduct()->getId());
        $report->save();
    }
}
