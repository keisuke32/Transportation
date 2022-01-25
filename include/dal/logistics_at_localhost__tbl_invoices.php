<?php
$dalTabletbl_invoices = array();
$dalTabletbl_invoices["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID");
$dalTabletbl_invoices["InvoiceCompanyID"] = array("type"=>3,"varname"=>"InvoiceCompanyID", "name" => "InvoiceCompanyID");
$dalTabletbl_invoices["InvoiceDate"] = array("type"=>7,"varname"=>"InvoiceDate", "name" => "InvoiceDate");
$dalTabletbl_invoices["InvoiceDueDate"] = array("type"=>7,"varname"=>"InvoiceDueDate", "name" => "InvoiceDueDate");
$dalTabletbl_invoices["InvoiceStatus"] = array("type"=>129,"varname"=>"InvoiceStatus", "name" => "InvoiceStatus");
$dalTabletbl_invoices["InvoiceNumber"] = array("type"=>200,"varname"=>"InvoiceNumber", "name" => "InvoiceNumber");
	$dalTabletbl_invoices["ID"]["key"]=true;

$dal_info["logistics_at_localhost__tbl_invoices"] = &$dalTabletbl_invoices;
?>