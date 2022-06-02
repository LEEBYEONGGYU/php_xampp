<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocumentExtraVars");
$query->setAction("delete");
$query->setPriority("");

${'module_srl22_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl22_argument'}->checkFilter('number');
${'module_srl22_argument'}->checkNotNull();
${'module_srl22_argument'}->createConditionValue();
if(!${'module_srl22_argument'}->isValid()) return ${'module_srl22_argument'}->getErrorMessage();
if(${'module_srl22_argument'} !== null) ${'module_srl22_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl23_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl23_argument'}->checkFilter('number');
${'document_srl23_argument'}->createConditionValue();
if(!${'document_srl23_argument'}->isValid()) return ${'document_srl23_argument'}->getErrorMessage();
} else
${'document_srl23_argument'} = NULL;if(${'document_srl23_argument'} !== null) ${'document_srl23_argument'}->setColumnType('number');
if(isset($args->var_idx)) {
${'var_idx24_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx24_argument'}->checkFilter('number');
${'var_idx24_argument'}->createConditionValue();
if(!${'var_idx24_argument'}->isValid()) return ${'var_idx24_argument'}->getErrorMessage();
} else
${'var_idx24_argument'} = NULL;if(${'var_idx24_argument'} !== null) ${'var_idx24_argument'}->setColumnType('number');
if(isset($args->lang_code)) {
${'lang_code25_argument'} = new ConditionArgument('lang_code', $args->lang_code, 'equal');
${'lang_code25_argument'}->createConditionValue();
if(!${'lang_code25_argument'}->isValid()) return ${'lang_code25_argument'}->getErrorMessage();
} else
${'lang_code25_argument'} = NULL;if(${'lang_code25_argument'} !== null) ${'lang_code25_argument'}->setColumnType('varchar');
if(isset($args->eid)) {
${'eid26_argument'} = new ConditionArgument('eid', $args->eid, 'equal');
${'eid26_argument'}->createConditionValue();
if(!${'eid26_argument'}->isValid()) return ${'eid26_argument'}->getErrorMessage();
} else
${'eid26_argument'} = NULL;if(${'eid26_argument'} !== null) ${'eid26_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`decoel_document_extra_vars`', '`document_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl22_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl23_argument,"equal", 'and')
,new ConditionWithArgument('`var_idx`',$var_idx24_argument,"equal", 'and')
,new ConditionWithArgument('`lang_code`',$lang_code25_argument,"equal", 'and')
,new ConditionWithArgument('`eid`',$eid26_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>