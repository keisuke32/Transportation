<?php
$dalTabletbl_uom = array();
$dalTabletbl_uom["ID"] = array("type"=>16,"varname"=>"ID", "name" => "ID");
$dalTabletbl_uom["UOMTypeID"] = array("type"=>16,"varname"=>"UOMTypeID", "name" => "UOMTypeID");
$dalTabletbl_uom["Code"] = array("type"=>200,"varname"=>"Code", "name" => "Code");
$dalTabletbl_uom["Name"] = array("type"=>200,"varname"=>"Name", "name" => "Name");
$dalTabletbl_uom["OffCode"] = array("type"=>16,"varname"=>"OffCode", "name" => "OffCode");
	$dalTabletbl_uom["ID"]["key"]=true;

$dal_info["logistics_at_localhost__tbl_uom"] = &$dalTabletbl_uom;
?>