<?php
$dalTableforms = array();
$dalTableforms["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableforms["formname"] = array("type"=>200,"varname"=>"formname", "name" => "formname");
$dalTableforms["sqlquery"] = array("type"=>200,"varname"=>"sqlquery", "name" => "sqlquery");
$dalTableforms["formfile"] = array("type"=>200,"varname"=>"formfile", "name" => "formfile");
$dalTableforms["pdffile"] = array("type"=>200,"varname"=>"pdffile", "name" => "pdffile");
$dalTableforms["multifields"] = array("type"=>3,"varname"=>"multifields", "name" => "multifields");
	$dalTableforms["id"]["key"]=true;

$dal_info["logistics_at_localhost__forms"] = &$dalTableforms;
?>