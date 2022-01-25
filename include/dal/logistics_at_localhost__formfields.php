<?php
$dalTableformfields = array();
$dalTableformfields["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableformfields["formid"] = array("type"=>3,"varname"=>"formid", "name" => "formid");
$dalTableformfields["fieldform"] = array("type"=>200,"varname"=>"fieldform", "name" => "fieldform");
$dalTableformfields["fieldsql"] = array("type"=>200,"varname"=>"fieldsql", "name" => "fieldsql");
$dalTableformfields["fieldformalt"] = array("type"=>200,"varname"=>"fieldformalt", "name" => "fieldformalt");
$dalTableformfields["cboxon"] = array("type"=>200,"varname"=>"cboxon", "name" => "cboxon");
$dalTableformfields["cboxoff"] = array("type"=>200,"varname"=>"cboxoff", "name" => "cboxoff");
	$dalTableformfields["id"]["key"]=true;

$dal_info["logistics_at_localhost__formfields"] = &$dalTableformfields;
?>