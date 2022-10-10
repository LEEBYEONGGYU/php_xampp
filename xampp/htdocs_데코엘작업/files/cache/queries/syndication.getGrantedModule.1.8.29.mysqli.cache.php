<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getGrantedModule");
$query->setAction("select");
$query->setPriority("");

${'module_srl36_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl36_argument'}->checkFilter('number');
${'module_srl36_argument'}->checkNotNull();
${'module_srl36_argument'}->createConditionValue();
if(!${'module_srl36_argument'}->isValid()) return ${'module_srl36_argument'}->getErrorMessage();
if(${'module_srl36_argument'} !== null) ${'module_srl36_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`decoel_module_grants`', '`module_grants`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl36_argument,"equal")
,new ConditionWithoutArgument('`name`',"'access','view','list'","in", 'and')))
,new ConditionGroup(array(
new ConditionWithoutArgument('`group_srl`','1',"more")
,new ConditionWithoutArgument('`group_srl`','-1',"equal", 'or')
,new ConditionWithoutArgument('`group_srl`','-2',"equal", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>