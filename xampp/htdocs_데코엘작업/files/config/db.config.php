<?php if(!defined("__XE__")) exit();
$db_info = (object)array (
  'master_db' => 
  array (
    'db_type' => 'mysqli',
    'db_port' => '3306',
    'db_hostname' => '127.0.0.1',
    'db_userid' => 'bgpoilkj',
    'db_password' => 'byeonggyu12@',
    'db_database' => 'bgpoilkj',
    'db_table_prefix' => 'decoel_',
  ),
  'slave_db' => 
  array (
    0 => 
    array (
      'db_type' => 'mysqli',
      'db_port' => '3306',
      'db_hostname' => '127.0.0.1',
      'db_userid' => 'bgpoilkj',
      'db_password' => 'dce35669',
      'db_database' => 'byeonggyu12@',
      'db_table_prefix' => 'decoel_',
    ),
  ),
  'default_url' => 'http://bgpoilkj.cafe24.com',
  'use_mobile_view' => 'Y',
  'use_rewrite' => 'Y',
  'time_zone' => '+0900',
  'use_prepared_statements' => 'Y',
  'qmail_compatibility' => 'N',
  'use_db_session' => 'N',
  'use_ssl' => 'none',
  'sitelock_whitelist' => 
  array (
    0 => '127.0.0.1',
  ),
  'use_sso' => 'N',
  'use_html5' => 'N',
  'admin_ip_list' => NULL,
);