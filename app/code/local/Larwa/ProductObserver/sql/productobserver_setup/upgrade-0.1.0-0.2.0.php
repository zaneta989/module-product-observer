<?php

$installer = $this;
$installer->startSetup();
$installer->run("
        ALTER TABLE `{$installer->getTable('productobserver/report')}` ADD INDEX IDX_IP (ip);
        ALTER TABLE `{$installer->getTable('productobserver/report')}` ADD INDEX IDX_TIMESTAMP (`timestamp`);
        ALTER TABLE `{$installer->getTable('productobserver/report')}` ADD INDEX IDX_PRODUCT_ID (product_id);
    ");
$installer->endSetup();
