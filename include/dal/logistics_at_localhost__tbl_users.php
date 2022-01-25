<?php
$dalTabletbl_users = array();
$dalTabletbl_users["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID");
$dalTabletbl_users["CompanyID"] = array("type"=>3,"varname"=>"CompanyID", "name" => "CompanyID");
$dalTabletbl_users["AddressID"] = array("type"=>3,"varname"=>"AddressID", "name" => "AddressID");
$dalTabletbl_users["Login"] = array("type"=>200,"varname"=>"Login", "name" => "Login");
$dalTabletbl_users["Password"] = array("type"=>200,"varname"=>"Password", "name" => "Password");
$dalTabletbl_users["PasswordHint"] = array("type"=>200,"varname"=>"PasswordHint", "name" => "PasswordHint");
$dalTabletbl_users["Name"] = array("type"=>200,"varname"=>"Name", "name" => "Name");
$dalTabletbl_users["Email"] = array("type"=>200,"varname"=>"Email", "name" => "Email");
$dalTabletbl_users["PrimaryPhone"] = array("type"=>200,"varname"=>"PrimaryPhone", "name" => "PrimaryPhone");
$dalTabletbl_users["PrimaryCell"] = array("type"=>200,"varname"=>"PrimaryCell", "name" => "PrimaryCell");
$dalTabletbl_users["Active"] = array("type"=>16,"varname"=>"Active", "name" => "Active");
$dalTabletbl_users["TimeStamp"] = array("type"=>135,"varname"=>"TimeStamp", "name" => "TimeStamp");
$dalTabletbl_users["reset_token"] = array("type"=>200,"varname"=>"reset_token", "name" => "reset_token");
$dalTabletbl_users["reset_date"] = array("type"=>135,"varname"=>"reset_date", "name" => "reset_date");
$dalTabletbl_users["two_factor"] = array("type"=>3,"varname"=>"two_factor", "name" => "two_factor");
$dalTabletbl_users["totp_secret"] = array("type"=>200,"varname"=>"totp_secret", "name" => "totp_secret");
$dalTabletbl_users["two_factor1"] = array("type"=>3,"varname"=>"two_factor1", "name" => "two_factor1");
$dalTabletbl_users["totp_secret1"] = array("type"=>200,"varname"=>"totp_secret1", "name" => "totp_secret1");
$dalTabletbl_users["Picture"] = array("type"=>128,"varname"=>"Picture", "name" => "Picture");
	$dalTabletbl_users["ID"]["key"]=true;

$dal_info["logistics_at_localhost__tbl_users"] = &$dalTabletbl_users;
?>