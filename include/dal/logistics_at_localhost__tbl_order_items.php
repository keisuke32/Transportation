<?php
$dalTabletbl_order_items = array();
$dalTabletbl_order_items["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID");
$dalTabletbl_order_items["OrderID"] = array("type"=>3,"varname"=>"OrderID", "name" => "OrderID");
$dalTabletbl_order_items["Description"] = array("type"=>200,"varname"=>"Description", "name" => "Description");
$dalTabletbl_order_items["Weight"] = array("type"=>3,"varname"=>"Weight", "name" => "Weight");
$dalTabletbl_order_items["WeightUOMID"] = array("type"=>3,"varname"=>"WeightUOMID", "name" => "WeightUOMID");
$dalTabletbl_order_items["PackageQuantitiy"] = array("type"=>3,"varname"=>"PackageQuantitiy", "name" => "PackageQuantitiy");
$dalTabletbl_order_items["PackageTypeID"] = array("type"=>16,"varname"=>"PackageTypeID", "name" => "PackageTypeID");
$dalTabletbl_order_items["HndlingQuantitiy"] = array("type"=>3,"varname"=>"HndlingQuantitiy", "name" => "HndlingQuantitiy");
$dalTabletbl_order_items["HandlingTypeID"] = array("type"=>16,"varname"=>"HandlingTypeID", "name" => "HandlingTypeID");
$dalTabletbl_order_items["CreateDate"] = array("type"=>135,"varname"=>"CreateDate", "name" => "CreateDate");
$dalTabletbl_order_items["HS_Code"] = array("type"=>200,"varname"=>"HS_Code", "name" => "HS_Code");
$dalTabletbl_order_items["TarifClass"] = array("type"=>200,"varname"=>"TarifClass", "name" => "TarifClass");
$dalTabletbl_order_items["NMFC_Code"] = array("type"=>200,"varname"=>"NMFC_Code", "name" => "NMFC_Code");
	$dalTabletbl_order_items["ID"]["key"]=true;

$dal_info["logistics_at_localhost__tbl_order_items"] = &$dalTabletbl_order_items;
?>