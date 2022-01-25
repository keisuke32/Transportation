<?php
$dalTabletbl_order_status = array();
$dalTabletbl_order_status["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID");
$dalTabletbl_order_status["OrderID"] = array("type"=>3,"varname"=>"OrderID", "name" => "OrderID");
$dalTabletbl_order_status["StatusDate"] = array("type"=>135,"varname"=>"StatusDate", "name" => "StatusDate");
$dalTabletbl_order_status["Private"] = array("type"=>13,"varname"=>"Private", "name" => "Private");
$dalTabletbl_order_status["Status"] = array("type"=>201,"varname"=>"Status", "name" => "Status");
$dalTabletbl_order_status["UserID"] = array("type"=>3,"varname"=>"UserID", "name" => "UserID");
	$dalTabletbl_order_status["ID"]["key"]=true;

$dal_info["logistics_at_localhost__tbl_order_status"] = &$dalTabletbl_order_status;
?>