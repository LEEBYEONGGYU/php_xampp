<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleExtraVars");
$query->setAction("insert");
$query->setPriority("");

${'module_srl28_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl28_argument'}->checkFilter('number');
${'module_srl28_argument'}->checkNotNull();
if(!${'module_srl28_argument'}->isValid()) return ${'module_srl28_argument'}->getErrorMessage();
if(${'module_srl28_argument'} !== null) ${'module_srl28_argument'}->setColumnType('number');

${'name29_argument'} = new Argument('name', $args->{'name'});
${'name29_argument'}->checkNotNull();
if(!${'name29_argument'}->isValid()) return ${'name29_argument'}->getErrorMessage();
if(${'name29_argument'} !== null) ${'name29_argument'}->setColumnType('varchar');

${'value30_argument'} = new Argument('value', $args->{'value'});
${'value30_argument'}->checkNotNull();
if(!${'value30_argument'}->isValid()) return ${'value30_argument'}->getErrorMessage();
if(${'value30_argument'} !== null) ${'value30_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl28_argument'})
,new InsertExpression('`name`', ${'name29_argument'})
,new InsertExpression('`value`', ${'value30_argument'})
));
$query->setTables(array(
new Table('`decoel_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>