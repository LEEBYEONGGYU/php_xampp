<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertInstalledPackage");
$query->setAction("insert");
$query->setPriority("");

${'package_srl19_argument'} = new Argument('package_srl', $args->{'package_srl'});
${'package_srl19_argument'}->checkFilter('number');
${'package_srl19_argument'}->checkNotNull();
if(!${'package_srl19_argument'}->isValid()) return ${'package_srl19_argument'}->getErrorMessage();
if(${'package_srl19_argument'} !== null) ${'package_srl19_argument'}->setColumnType('number');

${'version20_argument'} = new Argument('version', $args->{'version'});
${'version20_argument'}->checkNotNull();
if(!${'version20_argument'}->isValid()) return ${'version20_argument'}->getErrorMessage();
if(${'version20_argument'} !== null) ${'version20_argument'}->setColumnType('varchar');

${'current_version21_argument'} = new Argument('current_version', $args->{'current_version'});
${'current_version21_argument'}->checkNotNull();
if(!${'current_version21_argument'}->isValid()) return ${'current_version21_argument'}->getErrorMessage();
if(${'current_version21_argument'} !== null) ${'current_version21_argument'}->setColumnType('varchar');
if(isset($args->need_update)) {
${'need_update22_argument'} = new Argument('need_update', $args->{'need_update'});
if(!${'need_update22_argument'}->isValid()) return ${'need_update22_argument'}->getErrorMessage();
} else
${'need_update22_argument'} = NULL;if(${'need_update22_argument'} !== null) ${'need_update22_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`package_srl`', ${'package_srl19_argument'})
,new InsertExpression('`version`', ${'version20_argument'})
,new InsertExpression('`current_version`', ${'current_version21_argument'})
,new InsertExpression('`need_update`', ${'need_update22_argument'})
));
$query->setTables(array(
new Table('`decoel_ai_installed_packages`', '`ai_installed_packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>