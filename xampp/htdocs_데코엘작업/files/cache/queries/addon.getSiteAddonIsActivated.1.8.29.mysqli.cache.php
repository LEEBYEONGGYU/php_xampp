<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddonIsActivated");
$query->setAction("select");
$query->setPriority("");

${'site_srl23_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl23_argument'}->checkNotNull();
${'site_srl23_argument'}->createConditionValue();
if(!${'site_srl23_argument'}->isValid()) return ${'site_srl23_argument'}->getErrorMessage();
if(${'site_srl23_argument'} !== null) ${'site_srl23_argument'}->setColumnType('number');

${'addon24_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon24_argument'}->checkNotNull();
${'addon24_argument'}->createConditionValue();
if(!${'addon24_argument'}->isValid()) return ${'addon24_argument'}->getErrorMessage();
if(${'addon24_argument'} !== null) ${'addon24_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`decoel_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl23_argument,"equal")
,new ConditionWithArgument('`addon`',$addon24_argument,"equal", 'and')
,new ConditionWithoutArgument('`is_used`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>