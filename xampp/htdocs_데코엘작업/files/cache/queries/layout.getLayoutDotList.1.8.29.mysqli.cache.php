<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl17_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl17_argument'}->checkFilter('number');
${'site_srl17_argument'}->ensureDefaultValue('0');
${'site_srl17_argument'}->checkNotNull();
${'site_srl17_argument'}->createConditionValue();
if(!${'site_srl17_argument'}->isValid()) return ${'site_srl17_argument'}->getErrorMessage();
if(${'site_srl17_argument'} !== null) ${'site_srl17_argument'}->setColumnType('number');

${'layout_type18_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type18_argument'}->ensureDefaultValue('P');
${'layout_type18_argument'}->createConditionValue();
if(!${'layout_type18_argument'}->isValid()) return ${'layout_type18_argument'}->getErrorMessage();
if(${'layout_type18_argument'} !== null) ${'layout_type18_argument'}->setColumnType('char');

${'layout19_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout19_argument'}->ensureDefaultValue('.');
${'layout19_argument'}->createConditionValue();
if(!${'layout19_argument'}->isValid()) return ${'layout19_argument'}->getErrorMessage();
if(${'layout19_argument'} !== null) ${'layout19_argument'}->setColumnType('varchar');

${'sort_index20_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index20_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index20_argument'}->isValid()) return ${'sort_index20_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`decoel_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl17_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type18_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout19_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index20_argument'}, "desc")
));
$query->setLimit();
return $query; ?>