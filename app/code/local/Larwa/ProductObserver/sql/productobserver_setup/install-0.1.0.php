<?php

$installer = $this;
$installer->startSetup();

$installer->run("
    CREATE TABLE `{$installer->getTable('productobserver/report')}` (
      `id` bigint NOT NULL auto_increment,
      `ip` varchar(20),
      `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP,
      `product_id` int(11),
      PRIMARY KEY  (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");

$installer->endSetup();
