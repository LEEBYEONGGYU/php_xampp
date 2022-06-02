<?php

include "../include/lib.php";

$xml = simplexml_load_file("{$_SERVER['DOCUMENT_ROOT']}/xml/coffeelist.xml");


for($i=0;$i<count($xml);$i++){
	$id=$xml->item[$i]->id;
	$kind=$xml->item[$i]->kind;
	$percent=$xml->item[$i]->percent;
	$memo=$xml->item[$i]->memo;
	$country=$xml->item[$i]->country;
	$count=$xml->item[$i]->count;
	$price=$xml->item[$i]->price;
	mq("insert into coffee set id=?,kind=?,percent=?,memo=?,country=?,count=?,price=?",array($id,$kind,$percent,$memo,$country,$count,$price));
}
