<?php
$dalTabletbl_invoice_payments = array();
$dalTabletbl_invoice_payments["InvoicePaymentID"] = array("type"=>3,"varname"=>"InvoicePaymentID", "name" => "InvoicePaymentID");
$dalTabletbl_invoice_payments["InvoicePaymentInvoiceID"] = array("type"=>3,"varname"=>"InvoicePaymentInvoiceID", "name" => "InvoicePaymentInvoiceID");
$dalTabletbl_invoice_payments["InvoicePaymentDate"] = array("type"=>7,"varname"=>"InvoicePaymentDate", "name" => "InvoicePaymentDate");
$dalTabletbl_invoice_payments["InvoicePaymentType"] = array("type"=>129,"varname"=>"InvoicePaymentType", "name" => "InvoicePaymentType");
$dalTabletbl_invoice_payments["InvoicePaymentAmount"] = array("type"=>14,"varname"=>"InvoicePaymentAmount", "name" => "InvoicePaymentAmount");
$dalTabletbl_invoice_payments["InvoicePaymentRefNumber"] = array("type"=>200,"varname"=>"InvoicePaymentRefNumber", "name" => "InvoicePaymentRefNumber");
$dalTabletbl_invoice_payments["InvoicePaymentFullPayment"] = array("type"=>13,"varname"=>"InvoicePaymentFullPayment", "name" => "InvoicePaymentFullPayment");
	$dalTabletbl_invoice_payments["InvoicePaymentID"]["key"]=true;

$dal_info["logistics_at_localhost__tbl_invoice_payments"] = &$dalTabletbl_invoice_payments;
?>