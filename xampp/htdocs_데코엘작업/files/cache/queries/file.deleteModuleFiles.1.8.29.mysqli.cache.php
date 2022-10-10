<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleFiles");
$query->setAction("delete");
$query->setPriority("");

${'module_srl34_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl34_argument'}->checkFilter('number');
${'module_srl34_argument'}->checkNotNull();
${'module_srl34_argument'}->createConditionValue();
if(!${'module_srl34_argument'}->isValid()) return ${'module_srl34_argument'}->getErrorMessage();
if(${'module_srl34_argument'} !== null) ${'module_srl34_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`decoel_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl34_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>