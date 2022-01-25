<?php
$dalTabletbl_documents = array();
$dalTabletbl_documents["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID");
$dalTabletbl_documents["CompanyID"] = array("type"=>3,"varname"=>"CompanyID", "name" => "CompanyID");
$dalTabletbl_documents["OrderID"] = array("type"=>3,"varname"=>"OrderID", "name" => "OrderID");
$dalTabletbl_documents["Title"] = array("type"=>200,"varname"=>"Title", "name" => "Title");
$dalTabletbl_documents["Keywords"] = array("type"=>200,"varname"=>"Keywords", "name" => "Keywords");
$dalTabletbl_documents["FileName"] = array("type"=>200,"varname"=>"FileName", "name" => "FileName");
$dalTabletbl_documents["Document"] = array("type"=>128,"varname"=>"Document", "name" => "Document");
	$dalTabletbl_documents["ID"]["key"]=true;

$dal_info["logistics_at_localhost__tbl_documents"] = &$dalTabletbl_documents;
?>