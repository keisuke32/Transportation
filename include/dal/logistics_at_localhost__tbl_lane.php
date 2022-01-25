<?php
$dalTabletbl_lane = array();
$dalTabletbl_lane["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID");
$dalTabletbl_lane["CompanyID"] = array("type"=>3,"varname"=>"CompanyID", "name" => "CompanyID");
$dalTabletbl_lane["OriginCity"] = array("type"=>200,"varname"=>"OriginCity", "name" => "OriginCity");
$dalTabletbl_lane["OriginProvinceID"] = array("type"=>3,"varname"=>"OriginProvinceID", "name" => "OriginProvinceID");
$dalTabletbl_lane["OriginCountryID"] = array("type"=>3,"varname"=>"OriginCountryID", "name" => "OriginCountryID");
$dalTabletbl_lane["DestinationCity"] = array("type"=>200,"varname"=>"DestinationCity", "name" => "DestinationCity");
$dalTabletbl_lane["DestinationProvinceID"] = array("type"=>3,"varname"=>"DestinationProvinceID", "name" => "DestinationProvinceID");
$dalTabletbl_lane["DestinationCountryID"] = array("type"=>3,"varname"=>"DestinationCountryID", "name" => "DestinationCountryID");
$dalTabletbl_lane["Cost"] = array("type"=>14,"varname"=>"Cost", "name" => "Cost");
$dalTabletbl_lane["Created"] = array("type"=>135,"varname"=>"Created", "name" => "Created");
$dalTabletbl_lane["Modified"] = array("type"=>135,"varname"=>"Modified", "name" => "Modified");
	$dalTabletbl_lane["ID"]["key"]=true;

$dal_info["logistics_at_localhost__tbl_lane"] = &$dalTabletbl_lane;
?>