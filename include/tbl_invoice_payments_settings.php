<?php
$tdatatbl_invoice_payments = array();
$tdatatbl_invoice_payments[".searchableFields"] = array();
$tdatatbl_invoice_payments[".ShortName"] = "tbl_invoice_payments";
$tdatatbl_invoice_payments[".OwnerID"] = "";
$tdatatbl_invoice_payments[".OriginalTable"] = "tbl_invoice_payments";


$tdatatbl_invoice_payments[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_invoice_payments[".originalPagesByType"] = $tdatatbl_invoice_payments[".pagesByType"];
$tdatatbl_invoice_payments[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_invoice_payments[".originalPages"] = $tdatatbl_invoice_payments[".pages"];
$tdatatbl_invoice_payments[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_invoice_payments[".originalDefaultPages"] = $tdatatbl_invoice_payments[".defaultPages"];

//	field labels
$fieldLabelstbl_invoice_payments = array();
$fieldToolTipstbl_invoice_payments = array();
$pageTitlestbl_invoice_payments = array();
$placeHolderstbl_invoice_payments = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_invoice_payments["English"] = array();
	$fieldToolTipstbl_invoice_payments["English"] = array();
	$placeHolderstbl_invoice_payments["English"] = array();
	$pageTitlestbl_invoice_payments["English"] = array();
	$fieldLabelstbl_invoice_payments["English"]["InvoicePaymentID"] = "ID";
	$fieldToolTipstbl_invoice_payments["English"]["InvoicePaymentID"] = "";
	$placeHolderstbl_invoice_payments["English"]["InvoicePaymentID"] = "";
	$fieldLabelstbl_invoice_payments["English"]["InvoicePaymentInvoiceID"] = "Invoice";
	$fieldToolTipstbl_invoice_payments["English"]["InvoicePaymentInvoiceID"] = "";
	$placeHolderstbl_invoice_payments["English"]["InvoicePaymentInvoiceID"] = "";
	$fieldLabelstbl_invoice_payments["English"]["InvoicePaymentDate"] = "Payment Date";
	$fieldToolTipstbl_invoice_payments["English"]["InvoicePaymentDate"] = "";
	$placeHolderstbl_invoice_payments["English"]["InvoicePaymentDate"] = "";
	$fieldLabelstbl_invoice_payments["English"]["InvoicePaymentType"] = "Payment Type";
	$fieldToolTipstbl_invoice_payments["English"]["InvoicePaymentType"] = "";
	$placeHolderstbl_invoice_payments["English"]["InvoicePaymentType"] = "";
	$fieldLabelstbl_invoice_payments["English"]["InvoicePaymentAmount"] = "Payment Amount";
	$fieldToolTipstbl_invoice_payments["English"]["InvoicePaymentAmount"] = "";
	$placeHolderstbl_invoice_payments["English"]["InvoicePaymentAmount"] = "";
	$fieldLabelstbl_invoice_payments["English"]["InvoicePaymentRefNumber"] = "Ref Number";
	$fieldToolTipstbl_invoice_payments["English"]["InvoicePaymentRefNumber"] = "";
	$placeHolderstbl_invoice_payments["English"]["InvoicePaymentRefNumber"] = "";
	$fieldLabelstbl_invoice_payments["English"]["InvoicePaymentFullPayment"] = "Full Payment";
	$fieldToolTipstbl_invoice_payments["English"]["InvoicePaymentFullPayment"] = "";
	$placeHolderstbl_invoice_payments["English"]["InvoicePaymentFullPayment"] = "";
	if (count($fieldToolTipstbl_invoice_payments["English"]))
		$tdatatbl_invoice_payments[".isUseToolTips"] = true;
}


	$tdatatbl_invoice_payments[".NCSearch"] = true;



$tdatatbl_invoice_payments[".shortTableName"] = "tbl_invoice_payments";
$tdatatbl_invoice_payments[".nSecOptions"] = 0;

$tdatatbl_invoice_payments[".mainTableOwnerID"] = "";
$tdatatbl_invoice_payments[".entityType"] = 0;
$tdatatbl_invoice_payments[".connId"] = "logistics_at_localhost";


$tdatatbl_invoice_payments[".strOriginalTableName"] = "tbl_invoice_payments";

	



$tdatatbl_invoice_payments[".showAddInPopup"] = false;

$tdatatbl_invoice_payments[".showEditInPopup"] = false;

$tdatatbl_invoice_payments[".showViewInPopup"] = false;

$tdatatbl_invoice_payments[".listAjax"] = false;
//	temporary
//$tdatatbl_invoice_payments[".listAjax"] = false;

	$tdatatbl_invoice_payments[".audit"] = true;

	$tdatatbl_invoice_payments[".locking"] = false;


$pages = $tdatatbl_invoice_payments[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_invoice_payments[".edit"] = true;
	$tdatatbl_invoice_payments[".afterEditAction"] = 1;
	$tdatatbl_invoice_payments[".closePopupAfterEdit"] = 1;
	$tdatatbl_invoice_payments[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_invoice_payments[".add"] = true;
$tdatatbl_invoice_payments[".afterAddAction"] = 1;
$tdatatbl_invoice_payments[".closePopupAfterAdd"] = 1;
$tdatatbl_invoice_payments[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_invoice_payments[".list"] = true;
}



$tdatatbl_invoice_payments[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_invoice_payments[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_invoice_payments[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_invoice_payments[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_invoice_payments[".printFriendly"] = true;
}



$tdatatbl_invoice_payments[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_invoice_payments[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_invoice_payments[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_invoice_payments[".isUseAjaxSuggest"] = true;

$tdatatbl_invoice_payments[".rowHighlite"] = true;



																																										

$tdatatbl_invoice_payments[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_invoice_payments[".buttonsAdded"] = false;

$tdatatbl_invoice_payments[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_invoice_payments[".isUseTimeForSearch"] = false;


$tdatatbl_invoice_payments[".badgeColor"] = "edca00";


$tdatatbl_invoice_payments[".allSearchFields"] = array();
$tdatatbl_invoice_payments[".filterFields"] = array();
$tdatatbl_invoice_payments[".requiredSearchFields"] = array();

$tdatatbl_invoice_payments[".googleLikeFields"] = array();
$tdatatbl_invoice_payments[".googleLikeFields"][] = "InvoicePaymentID";
$tdatatbl_invoice_payments[".googleLikeFields"][] = "InvoicePaymentInvoiceID";
$tdatatbl_invoice_payments[".googleLikeFields"][] = "InvoicePaymentDate";
$tdatatbl_invoice_payments[".googleLikeFields"][] = "InvoicePaymentType";
$tdatatbl_invoice_payments[".googleLikeFields"][] = "InvoicePaymentAmount";
$tdatatbl_invoice_payments[".googleLikeFields"][] = "InvoicePaymentRefNumber";
$tdatatbl_invoice_payments[".googleLikeFields"][] = "InvoicePaymentFullPayment";



$tdatatbl_invoice_payments[".tableType"] = "list";

$tdatatbl_invoice_payments[".printerPageOrientation"] = 0;
$tdatatbl_invoice_payments[".nPrinterPageScale"] = 100;

$tdatatbl_invoice_payments[".nPrinterSplitRecords"] = 40;

$tdatatbl_invoice_payments[".geocodingEnabled"] = false;










$tdatatbl_invoice_payments[".pageSize"] = 20;

$tdatatbl_invoice_payments[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_invoice_payments[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_invoice_payments[".orderindexes"] = array();


$tdatatbl_invoice_payments[".sqlHead"] = "SELECT InvoicePaymentID,  	InvoicePaymentInvoiceID,  	InvoicePaymentDate,  	InvoicePaymentType,  	InvoicePaymentAmount,  	InvoicePaymentRefNumber,  	InvoicePaymentFullPayment";
$tdatatbl_invoice_payments[".sqlFrom"] = "FROM tbl_invoice_payments";
$tdatatbl_invoice_payments[".sqlWhereExpr"] = "";
$tdatatbl_invoice_payments[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_invoice_payments[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_invoice_payments[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_invoice_payments[".highlightSearchResults"] = true;

$tableKeystbl_invoice_payments = array();
$tableKeystbl_invoice_payments[] = "InvoicePaymentID";
$tdatatbl_invoice_payments[".Keys"] = $tableKeystbl_invoice_payments;


$tdatatbl_invoice_payments[".hideMobileList"] = array();




//	InvoicePaymentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "InvoicePaymentID";
	$fdata["GoodName"] = "InvoicePaymentID";
	$fdata["ownerTable"] = "tbl_invoice_payments";
	$fdata["Label"] = GetFieldLabel("tbl_invoice_payments","InvoicePaymentID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "InvoicePaymentID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InvoicePaymentID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatbl_invoice_payments["InvoicePaymentID"] = $fdata;
		$tdatatbl_invoice_payments[".searchableFields"][] = "InvoicePaymentID";
//	InvoicePaymentInvoiceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "InvoicePaymentInvoiceID";
	$fdata["GoodName"] = "InvoicePaymentInvoiceID";
	$fdata["ownerTable"] = "tbl_invoice_payments";
	$fdata["Label"] = GetFieldLabel("tbl_invoice_payments","InvoicePaymentInvoiceID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "InvoicePaymentInvoiceID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InvoicePaymentInvoiceID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatbl_invoice_payments["InvoicePaymentInvoiceID"] = $fdata;
		$tdatatbl_invoice_payments[".searchableFields"][] = "InvoicePaymentInvoiceID";
//	InvoicePaymentDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "InvoicePaymentDate";
	$fdata["GoodName"] = "InvoicePaymentDate";
	$fdata["ownerTable"] = "tbl_invoice_payments";
	$fdata["Label"] = GetFieldLabel("tbl_invoice_payments","InvoicePaymentDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "InvoicePaymentDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InvoicePaymentDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatbl_invoice_payments["InvoicePaymentDate"] = $fdata;
		$tdatatbl_invoice_payments[".searchableFields"][] = "InvoicePaymentDate";
//	InvoicePaymentType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "InvoicePaymentType";
	$fdata["GoodName"] = "InvoicePaymentType";
	$fdata["ownerTable"] = "tbl_invoice_payments";
	$fdata["Label"] = GetFieldLabel("tbl_invoice_payments","InvoicePaymentType");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "InvoicePaymentType";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InvoicePaymentType";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Check";
	$edata["LookupValues"][] = "Cash";
	$edata["LookupValues"][] = "Credit";
	$edata["LookupValues"][] = "Deposit";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatbl_invoice_payments["InvoicePaymentType"] = $fdata;
		$tdatatbl_invoice_payments[".searchableFields"][] = "InvoicePaymentType";
//	InvoicePaymentAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "InvoicePaymentAmount";
	$fdata["GoodName"] = "InvoicePaymentAmount";
	$fdata["ownerTable"] = "tbl_invoice_payments";
	$fdata["Label"] = GetFieldLabel("tbl_invoice_payments","InvoicePaymentAmount");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "InvoicePaymentAmount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InvoicePaymentAmount";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatbl_invoice_payments["InvoicePaymentAmount"] = $fdata;
		$tdatatbl_invoice_payments[".searchableFields"][] = "InvoicePaymentAmount";
//	InvoicePaymentRefNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "InvoicePaymentRefNumber";
	$fdata["GoodName"] = "InvoicePaymentRefNumber";
	$fdata["ownerTable"] = "tbl_invoice_payments";
	$fdata["Label"] = GetFieldLabel("tbl_invoice_payments","InvoicePaymentRefNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "InvoicePaymentRefNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InvoicePaymentRefNumber";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatbl_invoice_payments["InvoicePaymentRefNumber"] = $fdata;
		$tdatatbl_invoice_payments[".searchableFields"][] = "InvoicePaymentRefNumber";
//	InvoicePaymentFullPayment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "InvoicePaymentFullPayment";
	$fdata["GoodName"] = "InvoicePaymentFullPayment";
	$fdata["ownerTable"] = "tbl_invoice_payments";
	$fdata["Label"] = GetFieldLabel("tbl_invoice_payments","InvoicePaymentFullPayment");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "InvoicePaymentFullPayment";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InvoicePaymentFullPayment";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatbl_invoice_payments["InvoicePaymentFullPayment"] = $fdata;
		$tdatatbl_invoice_payments[".searchableFields"][] = "InvoicePaymentFullPayment";


$tables_data["tbl_invoice_payments"]=&$tdatatbl_invoice_payments;
$field_labels["tbl_invoice_payments"] = &$fieldLabelstbl_invoice_payments;
$fieldToolTips["tbl_invoice_payments"] = &$fieldToolTipstbl_invoice_payments;
$placeHolders["tbl_invoice_payments"] = &$placeHolderstbl_invoice_payments;
$page_titles["tbl_invoice_payments"] = &$pageTitlestbl_invoice_payments;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_invoice_payments"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_invoice_payments"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tbl_invoices";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_invoices";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_invoices";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_invoice_payments"][0] = $masterParams;
				$masterTablesData["tbl_invoice_payments"][0]["masterKeys"] = array();
	$masterTablesData["tbl_invoice_payments"][0]["masterKeys"][]="ID";
				$masterTablesData["tbl_invoice_payments"][0]["detailKeys"] = array();
	$masterTablesData["tbl_invoice_payments"][0]["detailKeys"][]="InvoicePaymentInvoiceID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_invoice_payments()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "InvoicePaymentID,  	InvoicePaymentInvoiceID,  	InvoicePaymentDate,  	InvoicePaymentType,  	InvoicePaymentAmount,  	InvoicePaymentRefNumber,  	InvoicePaymentFullPayment";
$proto0["m_strFrom"] = "FROM tbl_invoice_payments";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "InvoicePaymentID",
	"m_strTable" => "tbl_invoice_payments",
	"m_srcTableName" => "tbl_invoice_payments"
));

$proto6["m_sql"] = "InvoicePaymentID";
$proto6["m_srcTableName"] = "tbl_invoice_payments";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "InvoicePaymentInvoiceID",
	"m_strTable" => "tbl_invoice_payments",
	"m_srcTableName" => "tbl_invoice_payments"
));

$proto8["m_sql"] = "InvoicePaymentInvoiceID";
$proto8["m_srcTableName"] = "tbl_invoice_payments";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "InvoicePaymentDate",
	"m_strTable" => "tbl_invoice_payments",
	"m_srcTableName" => "tbl_invoice_payments"
));

$proto10["m_sql"] = "InvoicePaymentDate";
$proto10["m_srcTableName"] = "tbl_invoice_payments";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "InvoicePaymentType",
	"m_strTable" => "tbl_invoice_payments",
	"m_srcTableName" => "tbl_invoice_payments"
));

$proto12["m_sql"] = "InvoicePaymentType";
$proto12["m_srcTableName"] = "tbl_invoice_payments";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "InvoicePaymentAmount",
	"m_strTable" => "tbl_invoice_payments",
	"m_srcTableName" => "tbl_invoice_payments"
));

$proto14["m_sql"] = "InvoicePaymentAmount";
$proto14["m_srcTableName"] = "tbl_invoice_payments";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "InvoicePaymentRefNumber",
	"m_strTable" => "tbl_invoice_payments",
	"m_srcTableName" => "tbl_invoice_payments"
));

$proto16["m_sql"] = "InvoicePaymentRefNumber";
$proto16["m_srcTableName"] = "tbl_invoice_payments";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "InvoicePaymentFullPayment",
	"m_strTable" => "tbl_invoice_payments",
	"m_srcTableName" => "tbl_invoice_payments"
));

$proto18["m_sql"] = "InvoicePaymentFullPayment";
$proto18["m_srcTableName"] = "tbl_invoice_payments";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "tbl_invoice_payments";
$proto21["m_srcTableName"] = "tbl_invoice_payments";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "InvoicePaymentID";
$proto21["m_columns"][] = "InvoicePaymentInvoiceID";
$proto21["m_columns"][] = "InvoicePaymentDate";
$proto21["m_columns"][] = "InvoicePaymentType";
$proto21["m_columns"][] = "InvoicePaymentAmount";
$proto21["m_columns"][] = "InvoicePaymentRefNumber";
$proto21["m_columns"][] = "InvoicePaymentFullPayment";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "tbl_invoice_payments";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "tbl_invoice_payments";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_invoice_payments";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_invoice_payments = createSqlQuery_tbl_invoice_payments();


	
		;

							

$tdatatbl_invoice_payments[".sqlquery"] = $queryData_tbl_invoice_payments;



$tableEvents["tbl_invoice_payments"] = new eventsBase;
$tdatatbl_invoice_payments[".hasEvents"] = false;

?>