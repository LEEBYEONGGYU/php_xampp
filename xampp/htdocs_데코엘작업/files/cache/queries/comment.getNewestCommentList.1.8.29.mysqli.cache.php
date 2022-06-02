<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestCommentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status12_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status12_argument'}->createConditionValue();
if(!${'status12_argument'}->isValid()) return ${'status12_argument'}->getErrorMessage();
} else
${'status12_argument'} = NULL;if(${'status12_argument'} !== null) ${'status12_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl13_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl13_argument'}->checkFilter('number');
${'module_srl13_argument'}->createConditionValue();
if(!${'module_srl13_argument'}->isValid()) return ${'module_srl13_argument'}->getErrorMessage();
} else
${'module_srl13_argument'} = NULL;if(${'module_srl13_argument'} !== null) ${'module_srl13_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl14_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl14_argument'}->checkFilter('number');
${'document_srl14_argument'}->createConditionValue();
if(!${'document_srl14_argument'}->isValid()) return ${'document_srl14_argument'}->getErrorMessage();
} else
${'document_srl14_argument'} = NULL;if(${'document_srl14_argument'} !== null) ${'document_srl14_argument'}->setColumnType('number');

${'list_count16_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count16_argument'}->ensureDefaultValue('20');
if(!${'list_count16_argument'}->isValid()) return ${'list_count16_argument'}->getErrorMessage();

${'sort_index15_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index15_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index15_argument'}->isValid()) return ${'sort_index15_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`decoel_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status12_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl13_argument,"in", 'and')
,new ConditionWithArgument('`document_srl`',$document_srl14_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index15_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count16_argument'}));
return $query; ?>