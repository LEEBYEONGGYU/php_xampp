<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleConfig");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module)) {
${'module33_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module33_argument'}->createConditionValue();
if(!${'module33_argument'}->isValid()) return ${'module33_argument'}->getErrorMessage();
} else
${'module33_argument'} = NULL;if(${'module33_argument'} !== null) ${'module33_argument'}->setColumnType('varchar');
if(isset($args->site_srl)) {
${'site_srl34_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl34_argument'}->createConditionValue();
if(!${'site_srl34_argument'}->isValid()) return ${'site_srl34_argument'}->getErrorMessage();
} else
${'site_srl34_argument'} = NULL;if(${'site_srl34_argument'} !== null) ${'site_srl34_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`decoel_module_config`', '`module_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module33_argument,"equal")
,new ConditionWithArgument('`site_srl`',$site_srl34_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>