<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocumentExtraKeys");
$query->setAction("delete");
$query->setPriority("");

${'module_srl19_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl19_argument'}->checkFilter('number');
${'module_srl19_argument'}->checkNotNull();
${'module_srl19_argument'}->createConditionValue();
if(!${'module_srl19_argument'}->isValid()) return ${'module_srl19_argument'}->getErrorMessage();
if(${'module_srl19_argument'} !== null) ${'module_srl19_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl20_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl20_argument'}->checkFilter('number');
${'document_srl20_argument'}->createConditionValue();
if(!${'document_srl20_argument'}->isValid()) return ${'document_srl20_argument'}->getErrorMessage();
} else
${'document_srl20_argument'} = NULL;if(isset($args->var_idx)) {
${'var_idx21_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx21_argument'}->checkFilter('number');
${'var_idx21_argument'}->createConditionValue();
if(!${'var_idx21_argument'}->isValid()) return ${'var_idx21_argument'}->getErrorMessage();
} else
${'var_idx21_argument'} = NULL;if(${'var_idx21_argument'} !== null) ${'var_idx21_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`decoel_document_extra_keys`', '`document_extra_keys`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl19_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl20_argument,"equal", 'and')
,new ConditionWithArgument('`var_idx`',$var_idx21_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>