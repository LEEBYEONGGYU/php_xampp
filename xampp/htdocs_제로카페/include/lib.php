<?php

// session
session_start();

// db
$db = new PDO("mysql:host=127.0.0.1; dbname=zero; charset=utf8;","web","1234",array(PDO::ATTR_EMULATE_PREPARES,PDO::ERRMODE_EXCEPTION));

// function
function mq($q, $array=NULL){
	$query=$GLOBALS['db']->prepare($q);
	$query->execute($array);
	return $query;
}

function mfa($query){
	$result=$query->fetch();
	return $result;
}

function mfaq($q, $array=NULL){
	$query=mq($q,$array);
	$result=mfa($query);
	return $result;
}

function mnr($query){
	$result=$query->rowCount();
	return $result;
}

function mnrq($q,$array=NULL){
	$query=mq($q, $array);
	$result=mnr($query);
	return $result;
}

function ut($text){
	return nl2br(htmlspecialchars($text));
}

function image($src, $title, $plus=NULL){
	echo '<img src="/image/'.$src.'" title="'.$title.'" alt="'.$title.'" '.$plus.' >';
}

function str($prev,$array){
	echo str_replace($prev,'<span class="hit">'.$prev.'</span>',$array);
}

// url
$arr = isset($_GET['params']) ? explode('/',$_GET['params']) : "";
$main_id = isset($arr[0]) ? $arr[0] : "";
$sub_id = isset($arr[1]) ? $arr[1] : "";
$mode = isset($arr[2]) ? $arr[2] : "list";
$val1 = isset($arr[3]) ? $arr[3] : "";
$val2 = isset($arr[4]) ? $arr[4] : "";
$page = isset($arr[5]) ? $arr[5] : "1";
$url = "/".$main_id."/".$sub_id;

// pagetype
if($main_id != "" && $sub_id != ""){
	$pt = 'sub';
	$now_main = mfaq("select * from main_menu where m_id='{$main_id}'");
	$now_sub = mfaq("select * from sub_menu where s_id='{$sub_id}'");
	$home_title = $now_main['m_title'] . " | " . $now_sub['s_title'];
} else {
	$pt = 'main';
	$home_title = 'ZeroCafe :: Welcome';
}

// etc
$description = "제로카페, 언제나 환영합니다.";
$keywords = "제로카페, 카페, 판매, 원두";