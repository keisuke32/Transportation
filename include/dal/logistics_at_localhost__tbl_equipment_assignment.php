<?php
$dalTabletbl_equipment_assignment = array();
$dalTabletbl_equipment_assignment["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID");
$dalTabletbl_equipment_assignment["EquipmentID"] = array("type"=>3,"varname"=>"EquipmentID", "name" => "EquipmentID");
$dalTabletbl_equipment_assignment["StartDate"] = array("type"=>135,"varname"=>"StartDate", "name" => "StartDate");
$dalTabletbl_equipment_assignment["EndDate"] = array("type"=>135,"varname"=>"EndDate", "name" => "EndDate");
$dalTabletbl_equipment_assignment["OrderID"] = array("type"=>3,"varname"=>"OrderID", "name" => "OrderID");
	$dalTabletbl_equipment_assignment["ID"]["key"]=true;

$dal_info["logistics_at_localhost__tbl_equipment_assignment"] = &$dalTabletbl_equipment_assignment;
?>