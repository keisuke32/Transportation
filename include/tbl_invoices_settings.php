<?php
$tdatatbl_invoices = array();
$tdatatbl_invoices[".searchableFields"] = array();
$tdatatbl_invoices[".ShortName"] = "tbl_invoices";
$tdatatbl_invoices[".OwnerID"] = "";
$tdatatbl_invoices[".OriginalTable"] = "tbl_invoices";


$tdatatbl_invoices[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatatbl_invoices[".originalPagesByType"] = $tdatatbl_invoices[".pagesByType"];
$tdatatbl_invoices[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatatbl_invoices[".originalPages"] = $tdatatbl_invoices[".pages"];
$tdatatbl_invoices[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatatbl_invoices[".originalDefaultPages"] = $tdatatbl_invoices[".defaultPages"];

//	field labels
$fieldLabelstbl_invoices = array();
$fieldToolTipstbl_invoices = array();
$pageTitlestbl_invoices = array();
$placeHolderstbl_invoices = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_invoices["English"] = array();
	$fieldToolTipstbl_invoices["English"] = array();
	$placeHolderstbl_invoices["English"] = array();
	$pageTitlestbl_invoices["English"] = array();
	$fieldLabelstbl_invoices["English"]["ID"] = "ID";
	$fieldToolTipstbl_invoices["English"]["ID"] = "";
	$placeHolderstbl_invoices["English"]["ID"] = "";
	$fieldLabelstbl_invoices["English"]["InvoiceCompanyID"] = "Invoice Company";
	$fieldToolTipstbl_invoices["English"]["InvoiceCompanyID"] = "";
	$placeHolderstbl_invoices["English"]["InvoiceCompanyID"] = "";
	$fieldLabelstbl_invoices["English"]["InvoiceDate"] = "Invoice Date";
	$fieldToolTipstbl_invoices["English"]["InvoiceDate"] = "";
	$placeHolderstbl_invoices["English"]["InvoiceDate"] = "";
	$fieldLabelstbl_invoices["English"]["InvoiceDueDate"] = "Invoice Due Date";
	$fieldToolTipstbl_invoices["English"]["InvoiceDueDate"] = "";
	$placeHolderstbl_invoices["English"]["InvoiceDueDate"] = "";
	$fieldLabelstbl_invoices["English"]["InvoiceStatus"] = "Invoice Status";
	$fieldToolTipstbl_invoices["English"]["InvoiceStatus"] = "";
	$placeHolderstbl_invoices["English"]["InvoiceStatus"] = "";
	$fieldLabelstbl_invoices["English"]["InvoiceNumber"] = "Invoice Number";
	$fieldToolTipstbl_invoices["English"]["InvoiceNumber"] = "";
	$placeHolderstbl_invoices["English"]["InvoiceNumber"] = "";
	if (count($fieldToolTipstbl_invoices["English"]))
		$tdatatbl_invoices[".isUseToolTips"] = true;
}


	$tdatatbl_invoices[".NCSearch"] = true;



$tdatatbl_invoices[".shortTableName"] = "tbl_invoices";
$tdatatbl_invoices[".nSecOptions"] = 0;

$tdatatbl_invoices[".mainTableOwnerID"] = "";
$tdatatbl_invoices[".entityType"] = 0;
$tdatatbl_invoices[".connId"] = "logistics_at_localhost";


$tdatatbl_invoices[".strOriginalTableName"] = "tbl_invoices";

	



$tdatatbl_invoices[".showAddInPopup"] = false;

$tdatatbl_invoices[".showEditInPopup"] = false;

$tdatatbl_invoices[".showViewInPopup"] = false;

$tdatatbl_invoices[".listAjax"] = false;
//	temporary
//$tdatatbl_invoices[".listAjax"] = false;

	$tdatatbl_invoices[".audit"] = true;

	$tdatatbl_invoices[".locking"] = false;


$pages = $tdatatbl_invoices[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_invoices[".edit"] = true;
	$tdatatbl_invoices[".afterEditAction"] = 1;
	$tdatatbl_invoices[".closePopupAfterEdit"] = 1;
	$tdatatbl_invoices[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_invoices[".add"] = true;
$tdatatbl_invoices[".afterAddAction"] = 1;
$tdatatbl_invoices[".closePopupAfterAdd"] = 1;
$tdatatbl_invoices[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_invoices[".list"] = true;
}



$tdatatbl_invoices[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_invoices[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_invoices[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_invoices[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_invoices[".printFriendly"] = true;
}



$tdatatbl_invoices[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_invoices[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_invoices[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_invoices[".isUseAjaxSuggest"] = true;

$tdatatbl_invoices[".rowHighlite"] = true;



																					

$tdatatbl_invoices[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_invoices[".buttonsAdded"] = false;

$tdatatbl_invoices[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_invoices[".isUseTimeForSearch"] = false;


$tdatatbl_invoices[".badgeColor"] = "CD853F";


$tdatatbl_invoices[".allSearchFields"] = array();
$tdatatbl_invoices[".filterFields"] = array();
$tdatatbl_invoices[".requiredSearchFields"] = array();

$tdatatbl_invoices[".googleLikeFields"] = array();
$tdatatbl_invoices[".googleLikeFields"][] = "ID";
$tdatatbl_invoices[".googleLikeFields"][] = "InvoiceCompanyID";
$tdatatbl_invoices[".googleLikeFields"][] = "InvoiceDate";
$tdatatbl_invoices[".googleLikeFields"][] = "InvoiceDueDate";
$tdatatbl_invoices[".googleLikeFields"][] = "InvoiceStatus";
$tdatatbl_invoices[".googleLikeFields"][] = "InvoiceNumber";



$tdatatbl_invoices[".tableType"] = "list";

$tdatatbl_invoices[".printerPageOrientation"] = 0;
$tdatatbl_invoices[".nPrinterPageScale"] = 100;

$tdatatbl_invoices[".nPrinterSplitRecords"] = 40;

$tdatatbl_invoices[".geocodingEnabled"] = false;










$tdatatbl_invoices[".pageSize"] = 20;

$tdatatbl_invoices[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_invoices[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_invoices[".orderindexes"] = array();


$tdatatbl_invoices[".sqlHead"] = "SELECT ID,  	InvoiceCompanyID,  	InvoiceDate,  	InvoiceDueDate,  	InvoiceStatus,  	InvoiceNumber";
$tdatatbl_invoices[".sqlFrom"] = "FROM tbl_invoices";
$tdatatbl_invoices[".sqlWhereExpr"] = "";
$tdatatbl_invoices[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_invoices[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_invoices[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_invoices[".highlightSearchResults"] = true;

$tableKeystbl_invoices = array();
$tableKeystbl_invoices[] = "ID";
$tdatatbl_invoices[".Keys"] = $tableKeystbl_invoices;


$tdatatbl_invoices[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_invoices";
	$fdata["Label"] = GetFieldLabel("tbl_invoices","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdatatbl_invoices["ID"] = $fdata;
		$tdatatbl_invoices[".searchableFields"][] = "ID";
//	InvoiceCompanyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "InvoiceCompanyID";
	$fdata["GoodName"] = "InvoiceCompanyID";
	$fdata["ownerTable"] = "tbl_invoices";
	$fdata["Label"] = GetFieldLabel("tbl_invoices","InvoiceCompanyID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "InvoiceCompanyID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InvoiceCompanyID";

	
	
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


	$tdatatbl_invoices["InvoiceCompanyID"] = $fdata;
		$tdatatbl_invoices[".searchableFields"][] = "InvoiceCompanyID";
//	InvoiceDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "InvoiceDate";
	$fdata["GoodName"] = "InvoiceDate";
	$fdata["ownerTable"] = "tbl_invoices";
	$fdata["Label"] = GetFieldLabel("tbl_invoices","InvoiceDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "InvoiceDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InvoiceDate";

	
	
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


	$tdatatbl_invoices["InvoiceDate"] = $fdata;
		$tdatatbl_invoices[".searchableFields"][] = "InvoiceDate";
//	InvoiceDueDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "InvoiceDueDate";
	$fdata["GoodName"] = "InvoiceDueDate";
	$fdata["ownerTable"] = "tbl_invoices";
	$fdata["Label"] = GetFieldLabel("tbl_invoices","InvoiceDueDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "InvoiceDueDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InvoiceDueDate";

	
	
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


	$tdatatbl_invoices["InvoiceDueDate"] = $fdata;
		$tdatatbl_invoices[".searchableFields"][] = "InvoiceDueDate";
//	InvoiceStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "InvoiceStatus";
	$fdata["GoodName"] = "InvoiceStatus";
	$fdata["ownerTable"] = "tbl_invoices";
	$fdata["Label"] = GetFieldLabel("tbl_invoices","InvoiceStatus");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "InvoiceStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InvoiceStatus";

	
	
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
	$edata["LookupValues"][] = "Due";
	$edata["LookupValues"][] = "Overdue";
	$edata["LookupValues"][] = "Partial Payment";
	$edata["LookupValues"][] = "Paid";

	
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


	$tdatatbl_invoices["InvoiceStatus"] = $fdata;
		$tdatatbl_invoices[".searchableFields"][] = "InvoiceStatus";
//	InvoiceNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "InvoiceNumber";
	$fdata["GoodName"] = "InvoiceNumber";
	$fdata["ownerTable"] = "tbl_invoices";
	$fdata["Label"] = GetFieldLabel("tbl_invoices","InvoiceNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "InvoiceNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InvoiceNumber";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatbl_invoices["InvoiceNumber"] = $fdata;
		$tdatatbl_invoices[".searchableFields"][] = "InvoiceNumber";


$tables_data["tbl_invoices"]=&$tdatatbl_invoices;
$field_labels["tbl_invoices"] = &$fieldLabelstbl_invoices;
$fieldToolTips["tbl_invoices"] = &$fieldToolTipstbl_invoices;
$placeHolders["tbl_invoices"] = &$placeHolderstbl_invoices;
$page_titles["tbl_invoices"] = &$pageTitlestbl_invoices;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_invoices"] = array();
//	tbl_invoice_payments
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_invoice_payments";
		$detailsParam["dOriginalTable"] = "tbl_invoice_payments";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_invoice_payments";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_invoice_payments");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_invoices"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_invoices"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_invoices"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["tbl_invoices"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_invoices"][$dIndex]["detailKeys"][]="InvoicePaymentInvoiceID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_invoices"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_invoices()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	InvoiceCompanyID,  	InvoiceDate,  	InvoiceDueDate,  	InvoiceStatus,  	InvoiceNumber";
$proto0["m_strFrom"] = "FROM tbl_invoices";
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
	"m_strName" => "ID",
	"m_strTable" => "tbl_invoices",
	"m_srcTableName" => "tbl_invoices"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_invoices";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "InvoiceCompanyID",
	"m_strTable" => "tbl_invoices",
	"m_srcTableName" => "tbl_invoices"
));

$proto8["m_sql"] = "InvoiceCompanyID";
$proto8["m_srcTableName"] = "tbl_invoices";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "InvoiceDate",
	"m_strTable" => "tbl_invoices",
	"m_srcTableName" => "tbl_invoices"
));

$proto10["m_sql"] = "InvoiceDate";
$proto10["m_srcTableName"] = "tbl_invoices";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "InvoiceDueDate",
	"m_strTable" => "tbl_invoices",
	"m_srcTableName" => "tbl_invoices"
));

$proto12["m_sql"] = "InvoiceDueDate";
$proto12["m_srcTableName"] = "tbl_invoices";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "InvoiceStatus",
	"m_strTable" => "tbl_invoices",
	"m_srcTableName" => "tbl_invoices"
));

$proto14["m_sql"] = "InvoiceStatus";
$proto14["m_srcTableName"] = "tbl_invoices";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "InvoiceNumber",
	"m_strTable" => "tbl_invoices",
	"m_srcTableName" => "tbl_invoices"
));

$proto16["m_sql"] = "InvoiceNumber";
$proto16["m_srcTableName"] = "tbl_invoices";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "tbl_invoices";
$proto19["m_srcTableName"] = "tbl_invoices";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ID";
$proto19["m_columns"][] = "InvoiceCompanyID";
$proto19["m_columns"][] = "InvoiceDate";
$proto19["m_columns"][] = "InvoiceDueDate";
$proto19["m_columns"][] = "InvoiceStatus";
$proto19["m_columns"][] = "InvoiceNumber";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "tbl_invoices";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "tbl_invoices";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_invoices";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_invoices = createSqlQuery_tbl_invoices();


	
		;

						

$tdatatbl_invoices[".sqlquery"] = $queryData_tbl_invoices;



$tableEvents["tbl_invoices"] = new eventsBase;
$tdatatbl_invoices[".hasEvents"] = false;

?>