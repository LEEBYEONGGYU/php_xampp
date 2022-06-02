<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocuments");
$query->setAction("select");
$query->setPriority("");

${'document_srls12_argument'} = new ConditionArgument('document_srls', $args->document_srls, 'in');
${'document_srls12_argument'}->checkNotNull();
${'document_srls12_argument'}->createConditionValue();
if(!${'document_srls12_argument'}->isValid()) return ${'document_srls12_argument'}->getErrorMessage();
if(${'document_srls12_argument'} !== null) ${'document_srls12_argument'}->setColumnType('number');

${'page15_argument'} = new Argument('page', $args->{'page'});
${'page15_argument'}->ensureDefaultValue('1');
if(!${'page15_argument'}->isValid()) return ${'page15_argument'}->getErrorMessage();

${'page_count16_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count16_argument'}->ensureDefaultValue('10');
if(!${'page_count16_argument'}->isValid()) return ${'page_count16_argument'}->getErrorMessage();

${'list_count17_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count17_argument'}->ensureDefaultValue('20');
if(!${'list_count17_argument'}->isValid()) return ${'list_count17_argument'}->getErrorMessage();

${'list_order13_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order13_argument'}->ensureDefaultValue('list_order');
if(!${'list_order13_argument'}->isValid()) return ${'list_order13_argument'}->getErrorMessage();

${'order_type14_argument'} = new SortArgument('order_type14', $args->order_type);
${'order_type14_argument'}->ensureDefaultValue('asc');
if(!${'order_type14_argument'}->isValid()) return ${'order_type14_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`decoel_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srls12_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'list_order13_argument'}, $order_type14_argument)
));
$query->setLimit(new Limit(${'list_count17_argument'}, ${'page15_argument'}, ${'page_count16_argument'}));
return $query; ?>