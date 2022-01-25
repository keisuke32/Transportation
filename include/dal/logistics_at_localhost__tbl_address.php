<?php
$dalTabletbl_address = array();
$dalTabletbl_address["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID");
$dalTabletbl_address["CompanyID"] = array("type"=>3,"varname"=>"CompanyID", "name" => "CompanyID");
$dalTabletbl_address["AddressTypeID"] = array("type"=>3,"varname"=>"AddressTypeID", "name" => "AddressTypeID");
$dalTabletbl_address["Description"] = array("type"=>200,"varname"=>"Description", "name" => "Description");
$dalTabletbl_address["Address1"] = array("type"=>200,"varname"=>"Address1", "name" => "Address1");
$dalTabletbl_address["Address2"] = array("type"=>200,"varname"=>"Address2", "name" => "Address2");
$dalTabletbl_address["City"] = array("type"=>200,"varname"=>"City", "name" => "City");
$dalTabletbl_address["County"] = array("type"=>200,"varname"=>"County", "name" => "County");
$dalTabletbl_address["Longitude"] = array("type"=>14,"varname"=>"Longitude", "name" => "Longitude");
$dalTabletbl_address["Latitude"] = array("type"=>14,"varname"=>"Latitude", "name" => "Latitude");
$dalTabletbl_address["ProvinceID"] = array("type"=>3,"varname"=>"ProvinceID", "name" => "ProvinceID");
$dalTabletbl_address["CountryID"] = array("type"=>3,"varname"=>"CountryID", "name" => "CountryID");
$dalTabletbl_address["PostalCode"] = array("type"=>200,"varname"=>"PostalCode", "name" => "PostalCode");
$dalTabletbl_address["HoursOpen"] = array("type"=>134,"varname"=>"HoursOpen", "name" => "HoursOpen");
$dalTabletbl_address["HoursClose"] = array("type"=>134,"varname"=>"HoursClose", "name" => "HoursClose");
$dalTabletbl_address["Comments"] = array("type"=>201,"varname"=>"Comments", "name" => "Comments");
	$dalTabletbl_address["ID"]["key"]=true;

$dal_info["logistics_at_localhost__tbl_address"] = &$dalTabletbl_address;
?>