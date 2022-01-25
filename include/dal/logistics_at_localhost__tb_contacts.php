<?php
$dalTabletb_contacts = array();
$dalTabletb_contacts["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID");
$dalTabletb_contacts["CompanyID"] = array("type"=>3,"varname"=>"CompanyID", "name" => "CompanyID");
$dalTabletb_contacts["AddressID"] = array("type"=>3,"varname"=>"AddressID", "name" => "AddressID");
$dalTabletb_contacts["UserID"] = array("type"=>3,"varname"=>"UserID", "name" => "UserID");
$dalTabletb_contacts["ContactName"] = array("type"=>200,"varname"=>"ContactName", "name" => "ContactName");
$dalTabletb_contacts["ContactTitle"] = array("type"=>200,"varname"=>"ContactTitle", "name" => "ContactTitle");
$dalTabletb_contacts["ContactPrimaryEmail"] = array("type"=>200,"varname"=>"ContactPrimaryEmail", "name" => "ContactPrimaryEmail");
$dalTabletb_contacts["ContactPrimaryPhone"] = array("type"=>200,"varname"=>"ContactPrimaryPhone", "name" => "ContactPrimaryPhone");
$dalTabletb_contacts["LeadSourceID"] = array("type"=>3,"varname"=>"LeadSourceID", "name" => "LeadSourceID");
	$dalTabletb_contacts["ID"]["key"]=true;

$dal_info["logistics_at_localhost__tb_contacts"] = &$dalTabletb_contacts;
?>