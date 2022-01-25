<?php
$tdatatbl_order_status = array();
$tdatatbl_order_status[".searchableFields"] = array();
$tdatatbl_order_status[".ShortName"] = "tbl_order_status";
$tdatatbl_order_status[".OwnerID"] = "";
$tdatatbl_order_status[".OriginalTable"] = "tbl_order_status";


$tdatatbl_order_status[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_order_status[".originalPagesByType"] = $tdatatbl_order_status[".pagesByType"];
$tdatatbl_order_status[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_order_status[".originalPages"] = $tdatatbl_order_status[".pages"];
$tdatatbl_order_status[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_order_status[".originalDefaultPages"] = $tdatatbl_order_status[".defaultPages"];

//	field labels
$fieldLabelstbl_order_status = array();
$fieldToolTipstbl_order_status = array();
$pageTitlestbl_order_status = array();
$placeHolderstbl_order_status = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_order_status["English"] = array();
	$fieldToolTipstbl_order_status["English"] = array();
	$placeHolderstbl_order_status["English"] = array();
	$pageTitlestbl_order_status["English"] = array();
	$fieldLabelstbl_order_status["English"]["ID"] = "ID";
	$fieldToolTipstbl_order_status["English"]["ID"] = "";
	$placeHolderstbl_order_status["English"]["ID"] = "";
	$fieldLabelstbl_order_status["English"]["OrderID"] = "Order";
	$fieldToolTipstbl_order_status["English"]["OrderID"] = "";
	$placeHolderstbl_order_status["English"]["OrderID"] = "";
	$fieldLabelstbl_order_status["English"]["StatusDate"] = "Status Date";
	$fieldToolTipstbl_order_status["English"]["StatusDate"] = "";
	$placeHolderstbl_order_status["English"]["StatusDate"] = "";
	$fieldLabelstbl_order_status["English"]["Private"] = "Private";
	$fieldToolTipstbl_order_status["English"]["Private"] = "";
	$placeHolderstbl_order_status["English"]["Private"] = "";
	$fieldLabelstbl_order_status["English"]["Status"] = "Status";
	$fieldToolTipstbl_order_status["English"]["Status"] = "";
	$placeHolderstbl_order_status["English"]["Status"] = "";
	$fieldLabelstbl_order_status["English"]["UserID"] = "User ID";
	$fieldToolTipstbl_order_status["English"]["UserID"] = "";
	$placeHolderstbl_order_status["English"]["UserID"] = "";
	if (count($fieldToolTipstbl_order_status["English"]))
		$tdatatbl_order_status[".isUseToolTips"] = true;
}


	$tdatatbl_order_status[".NCSearch"] = true;



$tdatatbl_order_status[".shortTableName"] = "tbl_order_status";
$tdatatbl_order_status[".nSecOptions"] = 0;

$tdatatbl_order_status[".mainTableOwnerID"] = "";
$tdatatbl_order_status[".entityType"] = 0;
$tdatatbl_order_status[".connId"] = "logistics_at_localhost";


$tdatatbl_order_status[".strOriginalTableName"] = "tbl_order_status";

	



$tdatatbl_order_status[".showAddInPopup"] = false;

$tdatatbl_order_status[".showEditInPopup"] = false;

$tdatatbl_order_status[".showViewInPopup"] = false;

$tdatatbl_order_status[".listAjax"] = false;
//	temporary
//$tdatatbl_order_status[".listAjax"] = false;

	$tdatatbl_order_status[".audit"] = true;

	$tdatatbl_order_status[".locking"] = false;


$pages = $tdatatbl_order_status[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_order_status[".edit"] = true;
	$tdatatbl_order_status[".afterEditAction"] = 1;
	$tdatatbl_order_status[".closePopupAfterEdit"] = 1;
	$tdatatbl_order_status[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_order_status[".add"] = true;
$tdatatbl_order_status[".afterAddAction"] = 1;
$tdatatbl_order_status[".closePopupAfterAdd"] = 1;
$tdatatbl_order_status[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_order_status[".list"] = true;
}



$tdatatbl_order_status[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_order_status[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_order_status[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_order_status[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_order_status[".printFriendly"] = true;
}



$tdatatbl_order_status[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_order_status[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_order_status[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_order_status[".isUseAjaxSuggest"] = true;

$tdatatbl_order_status[".rowHighlite"] = true;



																																										

$tdatatbl_order_status[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_order_status[".buttonsAdded"] = false;

$tdatatbl_order_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_order_status[".isUseTimeForSearch"] = false;


$tdatatbl_order_status[".badgeColor"] = "4169e1";


$tdatatbl_order_status[".allSearchFields"] = array();
$tdatatbl_order_status[".filterFields"] = array();
$tdatatbl_order_status[".requiredSearchFields"] = array();

$tdatatbl_order_status[".googleLikeFields"] = array();
$tdatatbl_order_status[".googleLikeFields"][] = "ID";
$tdatatbl_order_status[".googleLikeFields"][] = "OrderID";
$tdatatbl_order_status[".googleLikeFields"][] = "StatusDate";
$tdatatbl_order_status[".googleLikeFields"][] = "Private";
$tdatatbl_order_status[".googleLikeFields"][] = "Status";
$tdatatbl_order_status[".googleLikeFields"][] = "UserID";



$tdatatbl_order_status[".tableType"] = "list";

$tdatatbl_order_status[".printerPageOrientation"] = 0;
$tdatatbl_order_status[".nPrinterPageScale"] = 100;

$tdatatbl_order_status[".nPrinterSplitRecords"] = 40;

$tdatatbl_order_status[".geocodingEnabled"] = false;










$tdatatbl_order_status[".pageSize"] = 20;

$tdatatbl_order_status[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_order_status[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_order_status[".orderindexes"] = array();


$tdatatbl_order_status[".sqlHead"] = "SELECT ID,  	OrderID,  	StatusDate,  	`Private`,  	Status,  	UserID";
$tdatatbl_order_status[".sqlFrom"] = "FROM tbl_order_status";
$tdatatbl_order_status[".sqlWhereExpr"] = "";
$tdatatbl_order_status[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_order_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_order_status[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_order_status[".highlightSearchResults"] = true;

$tableKeystbl_order_status = array();
$tableKeystbl_order_status[] = "ID";
$tdatatbl_order_status[".Keys"] = $tableKeystbl_order_status;


$tdatatbl_order_status[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_order_status";
	$fdata["Label"] = GetFieldLabel("tbl_order_status","ID");
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


	$tdatatbl_order_status["ID"] = $fdata;
		$tdatatbl_order_status[".searchableFields"][] = "ID";
//	OrderID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "OrderID";
	$fdata["GoodName"] = "OrderID";
	$fdata["ownerTable"] = "tbl_order_status";
	$fdata["Label"] = GetFieldLabel("tbl_order_status","OrderID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "OrderID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OrderID";

	
	
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
	$edata["LookupTable"] = "tbl_orders";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ID";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatatbl_order_status["OrderID"] = $fdata;
		$tdatatbl_order_status[".searchableFields"][] = "OrderID";
//	StatusDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "StatusDate";
	$fdata["GoodName"] = "StatusDate";
	$fdata["ownerTable"] = "tbl_order_status";
	$fdata["Label"] = GetFieldLabel("tbl_order_status","StatusDate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "StatusDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "StatusDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
		$edata["autoUpdatable"] = true;

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


	$tdatatbl_order_status["StatusDate"] = $fdata;
		$tdatatbl_order_status[".searchableFields"][] = "StatusDate";
//	Private
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Private";
	$fdata["GoodName"] = "Private";
	$fdata["ownerTable"] = "tbl_order_status";
	$fdata["Label"] = GetFieldLabel("tbl_order_status","Private");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "Private";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Private`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatatbl_order_status["Private"] = $fdata;
		$tdatatbl_order_status[".searchableFields"][] = "Private";
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "tbl_order_status";
	$fdata["Label"] = GetFieldLabel("tbl_order_status","Status");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
		$edata["UseRTE"] = true;

	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatatbl_order_status["Status"] = $fdata;
		$tdatatbl_order_status[".searchableFields"][] = "Status";
//	UserID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "UserID";
	$fdata["GoodName"] = "UserID";
	$fdata["ownerTable"] = "tbl_order_status";
	$fdata["Label"] = GetFieldLabel("tbl_order_status","UserID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "UserID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserID";

	
	
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
	$edata["LookupTable"] = "tbl_users";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	

	
	$edata["LookupOrderBy"] = "Name";

	
	
	
	

	
	
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


	$tdatatbl_order_status["UserID"] = $fdata;
		$tdatatbl_order_status[".searchableFields"][] = "UserID";


$tables_data["tbl_order_status"]=&$tdatatbl_order_status;
$field_labels["tbl_order_status"] = &$fieldLabelstbl_order_status;
$fieldToolTips["tbl_order_status"] = &$fieldToolTipstbl_order_status;
$placeHolders["tbl_order_status"] = &$placeHolderstbl_order_status;
$page_titles["tbl_order_status"] = &$pageTitlestbl_order_status;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_order_status"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_order_status"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tbl_orders";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_orders";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_orders";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_order_status"][0] = $masterParams;
				$masterTablesData["tbl_order_status"][0]["masterKeys"] = array();
	$masterTablesData["tbl_order_status"][0]["masterKeys"][]="ID";
				$masterTablesData["tbl_order_status"][0]["detailKeys"] = array();
	$masterTablesData["tbl_order_status"][0]["detailKeys"][]="OrderID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_order_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	OrderID,  	StatusDate,  	`Private`,  	Status,  	UserID";
$proto0["m_strFrom"] = "FROM tbl_order_status";
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
	"m_strTable" => "tbl_order_status",
	"m_srcTableName" => "tbl_order_status"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_order_status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "OrderID",
	"m_strTable" => "tbl_order_status",
	"m_srcTableName" => "tbl_order_status"
));

$proto8["m_sql"] = "OrderID";
$proto8["m_srcTableName"] = "tbl_order_status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "StatusDate",
	"m_strTable" => "tbl_order_status",
	"m_srcTableName" => "tbl_order_status"
));

$proto10["m_sql"] = "StatusDate";
$proto10["m_srcTableName"] = "tbl_order_status";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Private",
	"m_strTable" => "tbl_order_status",
	"m_srcTableName" => "tbl_order_status"
));

$proto12["m_sql"] = "`Private`";
$proto12["m_srcTableName"] = "tbl_order_status";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "tbl_order_status",
	"m_srcTableName" => "tbl_order_status"
));

$proto14["m_sql"] = "Status";
$proto14["m_srcTableName"] = "tbl_order_status";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "UserID",
	"m_strTable" => "tbl_order_status",
	"m_srcTableName" => "tbl_order_status"
));

$proto16["m_sql"] = "UserID";
$proto16["m_srcTableName"] = "tbl_order_status";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "tbl_order_status";
$proto19["m_srcTableName"] = "tbl_order_status";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ID";
$proto19["m_columns"][] = "OrderID";
$proto19["m_columns"][] = "StatusDate";
$proto19["m_columns"][] = "Private";
$proto19["m_columns"][] = "Status";
$proto19["m_columns"][] = "UserID";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "tbl_order_status";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "tbl_order_status";
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
$proto0["m_srcTableName"]="tbl_order_status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_order_status = createSqlQuery_tbl_order_status();


	
		;

						

$tdatatbl_order_status[".sqlquery"] = $queryData_tbl_order_status;



include_once(getabspath("include/tbl_order_status_events.php"));
$tableEvents["tbl_order_status"] = new eventclass_tbl_order_status;
$tdatatbl_order_status[".hasEvents"] = true;

?>