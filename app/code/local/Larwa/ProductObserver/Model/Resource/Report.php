<?php
class Larwa_ProductObserver_Model_Resource_Report extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('productobserver/report', 'id');
    }
}
