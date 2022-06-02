<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPackage");
$query->setAction("insert");
$query->setPriority("");

${'package_srl10_argument'} = new Argument('package_srl', $args->{'package_srl'});
${'package_srl10_argument'}->checkFilter('number');
${'package_srl10_argument'}->checkNotNull();
if(!${'package_srl10_argument'}->isValid()) return ${'package_srl10_argument'}->getErrorMessage();
if(${'package_srl10_argument'} !== null) ${'package_srl10_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl11_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl11_argument'}->checkFilter('number');
if(!${'category_srl11_argument'}->isValid()) return ${'category_srl11_argument'}->getErrorMessage();
} else
${'category_srl11_argument'} = NULL;if(${'category_srl11_argument'} !== null) ${'category_srl11_argument'}->setColumnType('number');

${'path12_argument'} = new Argument('path', $args->{'path'});
${'path12_argument'}->checkNotNull();
if(!${'path12_argument'}->isValid()) return ${'path12_argument'}->getErrorMessage();
if(${'path12_argument'} !== null) ${'path12_argument'}->setColumnType('varchar');

${'have_instance13_argument'} = new Argument('have_instance', $args->{'have_instance'});
${'have_instance13_argument'}->checkNotNull();
if(!${'have_instance13_argument'}->isValid()) return ${'have_instance13_argument'}->getErrorMessage();
if(${'have_instance13_argument'} !== null) ${'have_instance13_argument'}->setColumnType('char');

${'updatedate14_argument'} = new Argument('updatedate', $args->{'updatedate'});
${'updatedate14_argument'}->checkNotNull();
if(!${'updatedate14_argument'}->isValid()) return ${'updatedate14_argument'}->getErrorMessage();
if(${'updatedate14_argument'} !== null) ${'updatedate14_argument'}->setColumnType('date');

${'latest_item_srl15_argument'} = new Argument('latest_item_srl', $args->{'latest_item_srl'});
${'latest_item_srl15_argument'}->checkNotNull();
if(!${'latest_item_srl15_argument'}->isValid()) return ${'latest_item_srl15_argument'}->getErrorMessage();
if(${'latest_item_srl15_argument'} !== null) ${'latest_item_srl15_argument'}->setColumnType('number');

${'version16_argument'} = new Argument('version', $args->{'version'});
${'version16_argument'}->checkNotNull();
if(!${'version16_argument'}->isValid()) return ${'version16_argument'}->getErrorMessage();
if(${'version16_argument'} !== null) ${'version16_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`package_srl`', ${'package_srl10_argument'})
,new InsertExpression('`category_srl`', ${'category_srl11_argument'})
,new InsertExpression('`path`', ${'path12_argument'})
,new InsertExpression('`have_instance`', ${'have_instance13_argument'})
,new InsertExpression('`updatedate`', ${'updatedate14_argument'})
,new InsertExpression('`latest_item_srl`', ${'latest_item_srl15_argument'})
,new InsertExpression('`version`', ${'version16_argument'})
));
$query->setTables(array(
new Table('`decoel_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>