<?php
$tdatatbl_currency_daily_rate = array();
$tdatatbl_currency_daily_rate[".searchableFields"] = array();
$tdatatbl_currency_daily_rate[".ShortName"] = "tbl_currency_daily_rate";
$tdatatbl_currency_daily_rate[".OwnerID"] = "";
$tdatatbl_currency_daily_rate[".OriginalTable"] = "tbl_currency_daily_rate";


$tdatatbl_currency_daily_rate[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_currency_daily_rate[".originalPagesByType"] = $tdatatbl_currency_daily_rate[".pagesByType"];
$tdatatbl_currency_daily_rate[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_currency_daily_rate[".originalPages"] = $tdatatbl_currency_daily_rate[".pages"];
$tdatatbl_currency_daily_rate[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_currency_daily_rate[".originalDefaultPages"] = $tdatatbl_currency_daily_rate[".defaultPages"];

//	field labels
$fieldLabelstbl_currency_daily_rate = array();
$fieldToolTipstbl_currency_daily_rate = array();
$pageTitlestbl_currency_daily_rate = array();
$placeHolderstbl_currency_daily_rate = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_currency_daily_rate["English"] = array();
	$fieldToolTipstbl_currency_daily_rate["English"] = array();
	$placeHolderstbl_currency_daily_rate["English"] = array();
	$pageTitlestbl_currency_daily_rate["English"] = array();
	$fieldLabelstbl_currency_daily_rate["English"]["ID"] = "ID";
	$fieldToolTipstbl_currency_daily_rate["English"]["ID"] = "";
	$placeHolderstbl_currency_daily_rate["English"]["ID"] = "";
	$fieldLabelstbl_currency_daily_rate["English"]["PubDate"] = "Publish Date";
	$fieldToolTipstbl_currency_daily_rate["English"]["PubDate"] = "";
	$placeHolderstbl_currency_daily_rate["English"]["PubDate"] = "";
	$fieldLabelstbl_currency_daily_rate["English"]["BaseCurrency"] = "Base Currency";
	$fieldToolTipstbl_currency_daily_rate["English"]["BaseCurrency"] = "";
	$placeHolderstbl_currency_daily_rate["English"]["BaseCurrency"] = "";
	$fieldLabelstbl_currency_daily_rate["English"]["TargetCurrency"] = "Target Currency";
	$fieldToolTipstbl_currency_daily_rate["English"]["TargetCurrency"] = "";
	$placeHolderstbl_currency_daily_rate["English"]["TargetCurrency"] = "";
	$fieldLabelstbl_currency_daily_rate["English"]["ExchangeRate"] = "Exchange Rate";
	$fieldToolTipstbl_currency_daily_rate["English"]["ExchangeRate"] = "";
	$placeHolderstbl_currency_daily_rate["English"]["ExchangeRate"] = "";
	$fieldLabelstbl_currency_daily_rate["English"]["InverseRate"] = "Inverse Rate";
	$fieldToolTipstbl_currency_daily_rate["English"]["InverseRate"] = "";
	$placeHolderstbl_currency_daily_rate["English"]["InverseRate"] = "";
	if (count($fieldToolTipstbl_currency_daily_rate["English"]))
		$tdatatbl_currency_daily_rate[".isUseToolTips"] = true;
}


	$tdatatbl_currency_daily_rate[".NCSearch"] = true;



$tdatatbl_currency_daily_rate[".shortTableName"] = "tbl_currency_daily_rate";
$tdatatbl_currency_daily_rate[".nSecOptions"] = 0;

$tdatatbl_currency_daily_rate[".mainTableOwnerID"] = "";
$tdatatbl_currency_daily_rate[".entityType"] = 0;
$tdatatbl_currency_daily_rate[".connId"] = "logistics_at_localhost";


$tdatatbl_currency_daily_rate[".strOriginalTableName"] = "tbl_currency_daily_rate";

	



$tdatatbl_currency_daily_rate[".showAddInPopup"] = false;

$tdatatbl_currency_daily_rate[".showEditInPopup"] = false;

$tdatatbl_currency_daily_rate[".showViewInPopup"] = false;

$tdatatbl_currency_daily_rate[".listAjax"] = false;
//	temporary
//$tdatatbl_currency_daily_rate[".listAjax"] = false;

	$tdatatbl_currency_daily_rate[".audit"] = true;

	$tdatatbl_currency_daily_rate[".locking"] = false;


$pages = $tdatatbl_currency_daily_rate[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_currency_daily_rate[".edit"] = true;
	$tdatatbl_currency_daily_rate[".afterEditAction"] = 1;
	$tdatatbl_currency_daily_rate[".closePopupAfterEdit"] = 1;
	$tdatatbl_currency_daily_rate[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_currency_daily_rate[".add"] = true;
$tdatatbl_currency_daily_rate[".afterAddAction"] = 1;
$tdatatbl_currency_daily_rate[".closePopupAfterAdd"] = 1;
$tdatatbl_currency_daily_rate[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_currency_daily_rate[".list"] = true;
}



$tdatatbl_currency_daily_rate[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_currency_daily_rate[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_currency_daily_rate[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_currency_daily_rate[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_currency_daily_rate[".printFriendly"] = true;
}



$tdatatbl_currency_daily_rate[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_currency_daily_rate[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_currency_daily_rate[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_currency_daily_rate[".isUseAjaxSuggest"] = true;

$tdatatbl_currency_daily_rate[".rowHighlite"] = true;



																					

$tdatatbl_currency_daily_rate[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_currency_daily_rate[".buttonsAdded"] = false;

$tdatatbl_currency_daily_rate[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_currency_daily_rate[".isUseTimeForSearch"] = false;


$tdatatbl_currency_daily_rate[".badgeColor"] = "CD853F";


$tdatatbl_currency_daily_rate[".allSearchFields"] = array();
$tdatatbl_currency_daily_rate[".filterFields"] = array();
$tdatatbl_currency_daily_rate[".requiredSearchFields"] = array();

$tdatatbl_currency_daily_rate[".googleLikeFields"] = array();
$tdatatbl_currency_daily_rate[".googleLikeFields"][] = "ID";
$tdatatbl_currency_daily_rate[".googleLikeFields"][] = "PubDate";
$tdatatbl_currency_daily_rate[".googleLikeFields"][] = "BaseCurrency";
$tdatatbl_currency_daily_rate[".googleLikeFields"][] = "TargetCurrency";
$tdatatbl_currency_daily_rate[".googleLikeFields"][] = "ExchangeRate";
$tdatatbl_currency_daily_rate[".googleLikeFields"][] = "InverseRate";



$tdatatbl_currency_daily_rate[".tableType"] = "list";

$tdatatbl_currency_daily_rate[".printerPageOrientation"] = 0;
$tdatatbl_currency_daily_rate[".nPrinterPageScale"] = 100;

$tdatatbl_currency_daily_rate[".nPrinterSplitRecords"] = 40;

$tdatatbl_currency_daily_rate[".geocodingEnabled"] = false;










$tdatatbl_currency_daily_rate[".pageSize"] = 20;

$tdatatbl_currency_daily_rate[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY PubDate DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_currency_daily_rate[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_currency_daily_rate[".orderindexes"] = array();
	$tdatatbl_currency_daily_rate[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "PubDate");



$tdatatbl_currency_daily_rate[".sqlHead"] = "SELECT ID,  PubDate,  BaseCurrency,  TargetCurrency,  ExchangeRate,  InverseRate";
$tdatatbl_currency_daily_rate[".sqlFrom"] = "FROM tbl_currency_daily_rate";
$tdatatbl_currency_daily_rate[".sqlWhereExpr"] = "";
$tdatatbl_currency_daily_rate[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_currency_daily_rate[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_currency_daily_rate[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_currency_daily_rate[".highlightSearchResults"] = true;

$tableKeystbl_currency_daily_rate = array();
$tableKeystbl_currency_daily_rate[] = "ID";
$tdatatbl_currency_daily_rate[".Keys"] = $tableKeystbl_currency_daily_rate;


$tdatatbl_currency_daily_rate[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_currency_daily_rate";
	$fdata["Label"] = GetFieldLabel("tbl_currency_daily_rate","ID");
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


	$tdatatbl_currency_daily_rate["ID"] = $fdata;
		$tdatatbl_currency_daily_rate[".searchableFields"][] = "ID";
//	PubDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PubDate";
	$fdata["GoodName"] = "PubDate";
	$fdata["ownerTable"] = "tbl_currency_daily_rate";
	$fdata["Label"] = GetFieldLabel("tbl_currency_daily_rate","PubDate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "PubDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PubDate";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatatbl_currency_daily_rate["PubDate"] = $fdata;
		$tdatatbl_currency_daily_rate[".searchableFields"][] = "PubDate";
//	BaseCurrency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "BaseCurrency";
	$fdata["GoodName"] = "BaseCurrency";
	$fdata["ownerTable"] = "tbl_currency_daily_rate";
	$fdata["Label"] = GetFieldLabel("tbl_currency_daily_rate","BaseCurrency");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BaseCurrency";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BaseCurrency";

	
	
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_currency";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Code";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Code";

	

	
	$edata["LookupOrderBy"] = "Code";

	
	
	
	

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatatbl_currency_daily_rate["BaseCurrency"] = $fdata;
		$tdatatbl_currency_daily_rate[".searchableFields"][] = "BaseCurrency";
//	TargetCurrency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TargetCurrency";
	$fdata["GoodName"] = "TargetCurrency";
	$fdata["ownerTable"] = "tbl_currency_daily_rate";
	$fdata["Label"] = GetFieldLabel("tbl_currency_daily_rate","TargetCurrency");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TargetCurrency";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TargetCurrency";

	
	
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_currency";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Code";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Code";

	

	
	$edata["LookupOrderBy"] = "Code";

	
	
	
	

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatatbl_currency_daily_rate["TargetCurrency"] = $fdata;
		$tdatatbl_currency_daily_rate[".searchableFields"][] = "TargetCurrency";
//	ExchangeRate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ExchangeRate";
	$fdata["GoodName"] = "ExchangeRate";
	$fdata["ownerTable"] = "tbl_currency_daily_rate";
	$fdata["Label"] = GetFieldLabel("tbl_currency_daily_rate","ExchangeRate");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "ExchangeRate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ExchangeRate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 9;

	
	
	
	
		
	
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


	$tdatatbl_currency_daily_rate["ExchangeRate"] = $fdata;
		$tdatatbl_currency_daily_rate[".searchableFields"][] = "ExchangeRate";
//	InverseRate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "InverseRate";
	$fdata["GoodName"] = "InverseRate";
	$fdata["ownerTable"] = "tbl_currency_daily_rate";
	$fdata["Label"] = GetFieldLabel("tbl_currency_daily_rate","InverseRate");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "InverseRate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InverseRate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 9;

	
	
	
	
		
	
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


	$tdatatbl_currency_daily_rate["InverseRate"] = $fdata;
		$tdatatbl_currency_daily_rate[".searchableFields"][] = "InverseRate";


$tables_data["tbl_currency_daily_rate"]=&$tdatatbl_currency_daily_rate;
$field_labels["tbl_currency_daily_rate"] = &$fieldLabelstbl_currency_daily_rate;
$fieldToolTips["tbl_currency_daily_rate"] = &$fieldToolTipstbl_currency_daily_rate;
$placeHolders["tbl_currency_daily_rate"] = &$placeHolderstbl_currency_daily_rate;
$page_titles["tbl_currency_daily_rate"] = &$pageTitlestbl_currency_daily_rate;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_currency_daily_rate"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_currency_daily_rate"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_currency_daily_rate()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  PubDate,  BaseCurrency,  TargetCurrency,  ExchangeRate,  InverseRate";
$proto0["m_strFrom"] = "FROM tbl_currency_daily_rate";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY PubDate DESC";
	
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
	"m_strTable" => "tbl_currency_daily_rate",
	"m_srcTableName" => "tbl_currency_daily_rate"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_currency_daily_rate";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PubDate",
	"m_strTable" => "tbl_currency_daily_rate",
	"m_srcTableName" => "tbl_currency_daily_rate"
));

$proto8["m_sql"] = "PubDate";
$proto8["m_srcTableName"] = "tbl_currency_daily_rate";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "BaseCurrency",
	"m_strTable" => "tbl_currency_daily_rate",
	"m_srcTableName" => "tbl_currency_daily_rate"
));

$proto10["m_sql"] = "BaseCurrency";
$proto10["m_srcTableName"] = "tbl_currency_daily_rate";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TargetCurrency",
	"m_strTable" => "tbl_currency_daily_rate",
	"m_srcTableName" => "tbl_currency_daily_rate"
));

$proto12["m_sql"] = "TargetCurrency";
$proto12["m_srcTableName"] = "tbl_currency_daily_rate";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ExchangeRate",
	"m_strTable" => "tbl_currency_daily_rate",
	"m_srcTableName" => "tbl_currency_daily_rate"
));

$proto14["m_sql"] = "ExchangeRate";
$proto14["m_srcTableName"] = "tbl_currency_daily_rate";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "InverseRate",
	"m_strTable" => "tbl_currency_daily_rate",
	"m_srcTableName" => "tbl_currency_daily_rate"
));

$proto16["m_sql"] = "InverseRate";
$proto16["m_srcTableName"] = "tbl_currency_daily_rate";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "tbl_currency_daily_rate";
$proto19["m_srcTableName"] = "tbl_currency_daily_rate";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ID";
$proto19["m_columns"][] = "PubDate";
$proto19["m_columns"][] = "BaseCurrency";
$proto19["m_columns"][] = "TargetCurrency";
$proto19["m_columns"][] = "ExchangeRate";
$proto19["m_columns"][] = "InverseRate";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "tbl_currency_daily_rate";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "tbl_currency_daily_rate";
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
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "PubDate",
	"m_strTable" => "tbl_currency_daily_rate",
	"m_srcTableName" => "tbl_currency_daily_rate"
));

$proto22["m_column"]=$obj;
$proto22["m_bAsc"] = 0;
$proto22["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto22);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tbl_currency_daily_rate";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_currency_daily_rate = createSqlQuery_tbl_currency_daily_rate();


	
		;

						

$tdatatbl_currency_daily_rate[".sqlquery"] = $queryData_tbl_currency_daily_rate;



$tableEvents["tbl_currency_daily_rate"] = new eventsBase;
$tdatatbl_currency_daily_rate[".hasEvents"] = false;

?>