<?php
$dalTabletbl_company_equipment = array();
$dalTabletbl_company_equipment["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID");
$dalTabletbl_company_equipment["CompanyID"] = array("type"=>3,"varname"=>"CompanyID", "name" => "CompanyID");
$dalTabletbl_company_equipment["EquipmentTypeID"] = array("type"=>200,"varname"=>"EquipmentTypeID", "name" => "EquipmentTypeID");
$dalTabletbl_company_equipment["EquipmentNumber"] = array("type"=>200,"varname"=>"EquipmentNumber", "name" => "EquipmentNumber");
	$dalTabletbl_company_equipment["ID"]["key"]=true;

$dal_info["logistics_at_localhost__tbl_company_equipment"] = &$dalTabletbl_company_equipment;
?>