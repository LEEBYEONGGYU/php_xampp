<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deletePackage");
$query->setAction("delete");
$query->setPriority("");

${'path17_argument'} = new ConditionArgument('path', $args->path, 'equal');
${'path17_argument'}->checkNotNull();
${'path17_argument'}->createConditionValue();
if(!${'path17_argument'}->isValid()) return ${'path17_argument'}->getErrorMessage();
if(${'path17_argument'} !== null) ${'path17_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`decoel_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`path`',$path17_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>