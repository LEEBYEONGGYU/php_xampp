<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleInfoByDocument");
$query->setAction("select");
$query->setPriority("");

${'document_srl2_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl2_argument'}->checkNotNull();
${'document_srl2_argument'}->createConditionValue();
if(!${'document_srl2_argument'}->isValid()) return ${'document_srl2_argument'}->getErrorMessage();
if(${'document_srl2_argument'} !== null) ${'document_srl2_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`modules`.*')
));
$query->setTables(array(
new Table('`decoel_modules`', '`modules`')
,new Table('`decoel_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`documents`.`document_srl`',$document_srl2_argument,"equal")
,new ConditionWithoutArgument('`modules`.`module_srl`','`documents`.`module_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>