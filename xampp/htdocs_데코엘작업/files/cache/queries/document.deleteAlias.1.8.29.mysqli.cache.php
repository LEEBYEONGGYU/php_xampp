<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteAlias");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->alias_srl)) {
${'alias_srl27_argument'} = new ConditionArgument('alias_srl', $args->alias_srl, 'equal');
${'alias_srl27_argument'}->checkFilter('number');
${'alias_srl27_argument'}->createConditionValue();
if(!${'alias_srl27_argument'}->isValid()) return ${'alias_srl27_argument'}->getErrorMessage();
} else
${'alias_srl27_argument'} = NULL;if(${'alias_srl27_argument'} !== null) ${'alias_srl27_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl28_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl28_argument'}->checkFilter('number');
${'document_srl28_argument'}->createConditionValue();
if(!${'document_srl28_argument'}->isValid()) return ${'document_srl28_argument'}->getErrorMessage();
} else
${'document_srl28_argument'} = NULL;if(${'document_srl28_argument'} !== null) ${'document_srl28_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl29_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl29_argument'}->checkFilter('number');
${'module_srl29_argument'}->createConditionValue();
if(!${'module_srl29_argument'}->isValid()) return ${'module_srl29_argument'}->getErrorMessage();
} else
${'module_srl29_argument'} = NULL;if(${'module_srl29_argument'} !== null) ${'module_srl29_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`decoel_document_aliases`', '`document_aliases`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`alias_srl`',$alias_srl27_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl28_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl29_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>