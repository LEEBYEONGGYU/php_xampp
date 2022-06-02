<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSkinDotList");
$query->setAction("select");
$query->setPriority("");

${'skin22_argument'} = new ConditionArgument('skin', $args->skin, 'like');
${'skin22_argument'}->ensureDefaultValue('.');
${'skin22_argument'}->createConditionValue();
if(!${'skin22_argument'}->isValid()) return ${'skin22_argument'}->getErrorMessage();
if(${'skin22_argument'} !== null) ${'skin22_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`module`')
,new SelectExpression('`skin`')
));
$query->setTables(array(
new Table('`decoel_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`skin`',$skin22_argument,"like")))
));
$query->setGroups(array(
'`skin`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>