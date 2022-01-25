<?php
$dalTabletbl_equipment = array();
$dalTabletbl_equipment["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID");
$dalTabletbl_equipment["EquipmentTypeID"] = array("type"=>2,"varname"=>"EquipmentTypeID", "name" => "EquipmentTypeID");
$dalTabletbl_equipment["EquipmentNumber"] = array("type"=>200,"varname"=>"EquipmentNumber", "name" => "EquipmentNumber");
$dalTabletbl_equipment["EquipmentDescription"] = array("type"=>200,"varname"=>"EquipmentDescription", "name" => "EquipmentDescription");
	$dalTabletbl_equipment["ID"]["key"]=true;

$dal_info["logistics_at_localhost__tbl_equipment"] = &$dalTabletbl_equipment;
?>