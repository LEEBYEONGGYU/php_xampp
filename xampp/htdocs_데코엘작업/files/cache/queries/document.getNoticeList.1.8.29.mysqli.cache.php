<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNoticeList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl6_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl6_argument'}->checkFilter('number');
${'module_srl6_argument'}->createConditionValue();
if(!${'module_srl6_argument'}->isValid()) return ${'module_srl6_argument'}->getErrorMessage();
} else
${'module_srl6_argument'} = NULL;if(${'module_srl6_argument'} !== null) ${'module_srl6_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl7_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl7_argument'}->createConditionValue();
if(!${'category_srl7_argument'}->isValid()) return ${'category_srl7_argument'}->getErrorMessage();
} else
${'category_srl7_argument'} = NULL;if(${'category_srl7_argument'} !== null) ${'category_srl7_argument'}->setColumnType('number');

${'sort_index8_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index8_argument'}->ensureDefaultValue('document_srl');
if(!${'sort_index8_argument'}->isValid()) return ${'sort_index8_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`decoel_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl6_argument,"in")
,new ConditionWithoutArgument('`is_notice`',"'Y'","equal", 'and')
,new ConditionWithArgument('`category_srl`',$category_srl7_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index8_argument'}, "desc")
));
$query->setLimit();
return $query; ?>