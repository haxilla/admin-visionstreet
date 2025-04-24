<?php

if(!isset($value)){
	dd("error-line4-code/admin/getvalue");}

if(str_contains($value,';')){
	//first explode
	$allValues=explode(";",$value);
	//loop through each line to separate
	foreach($allValues as $singleValue){
		//explode
		$pieces=explode(":",$singleValue);
		//parse
		$key=$pieces[0];
		$value=$pieces[1];
		$$key=$value;}

}elseif(str_contains($value,':')){
	//explode
	$pieces=explode(":",$value);
	//parse
	$key=$pieces[0];
	$value=$pieces[1];
	$$key=$value;}