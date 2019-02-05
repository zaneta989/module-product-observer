<?php

class Larwa_ProductObserver_Block_Adminhtml_View_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('productobserver_view_grid');
        $this->setDefaultSort('id');
        $this->setDefaultDir('DESC');
        $this->setSaveParametersInSession(true);
    }

    protected function _prepareCollection()
    {
        $this->setCollection(Mage::getModel('productobserver/report')->getCollection());
        parent::_prepareCollection();
        return $this;
    }

    protected function _prepareColumns()
    {
        $helper = Mage::helper('productobserver');

        $this->addColumn('id', [
            'header' => $helper->__('Id #'),
            'index' => 'id'
        ]);

        $this->addColumn('ip', [
            'header' => $helper->__('IP Address'),
            'index' => 'ip',
        ]);

        $this->addColumn('timestamp', [
            'header' => $helper->__('Date'),
            'type' => 'datetime',
            'index' => 'timestamp'
        ]);

        $this->addColumn('product_id', [
            'header' => $helper->__('Product Id'),
            'index' => 'product_id',
        ]);

        return parent::_prepareColumns();
    }
}
