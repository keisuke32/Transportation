<?php
$tdatatbl_lane = array();
$tdatatbl_lane[".searchableFields"] = array();
$tdatatbl_lane[".ShortName"] = "tbl_lane";
$tdatatbl_lane[".OwnerID"] = "";
$tdatatbl_lane[".OriginalTable"] = "tbl_lane";


$tdatatbl_lane[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_lane[".originalPagesByType"] = $tdatatbl_lane[".pagesByType"];
$tdatatbl_lane[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_lane[".originalPages"] = $tdatatbl_lane[".pages"];
$tdatatbl_lane[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_lane[".originalDefaultPages"] = $tdatatbl_lane[".defaultPages"];

//	field labels
$fieldLabelstbl_lane = array();
$fieldToolTipstbl_lane = array();
$pageTitlestbl_lane = array();
$placeHolderstbl_lane = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_lane["English"] = array();
	$fieldToolTipstbl_lane["English"] = array();
	$placeHolderstbl_lane["English"] = array();
	$pageTitlestbl_lane["English"] = array();
	$fieldLabelstbl_lane["English"]["ID"] = "ID";
	$fieldToolTipstbl_lane["English"]["ID"] = "";
	$placeHolderstbl_lane["English"]["ID"] = "";
	$fieldLabelstbl_lane["English"]["OriginCity"] = "Origin City";
	$fieldToolTipstbl_lane["English"]["OriginCity"] = "";
	$placeHolderstbl_lane["English"]["OriginCity"] = "";
	$fieldLabelstbl_lane["English"]["OriginProvinceID"] = "Origin Province/State";
	$fieldToolTipstbl_lane["English"]["OriginProvinceID"] = "";
	$placeHolderstbl_lane["English"]["OriginProvinceID"] = "";
	$fieldLabelstbl_lane["English"]["OriginCountryID"] = "Origin Country";
	$fieldToolTipstbl_lane["English"]["OriginCountryID"] = "";
	$placeHolderstbl_lane["English"]["OriginCountryID"] = "";
	$fieldLabelstbl_lane["English"]["DestinationCity"] = "Destination City";
	$fieldToolTipstbl_lane["English"]["DestinationCity"] = "";
	$placeHolderstbl_lane["English"]["DestinationCity"] = "";
	$fieldLabelstbl_lane["English"]["DestinationProvinceID"] = "Destination Province/State";
	$fieldToolTipstbl_lane["English"]["DestinationProvinceID"] = "";
	$placeHolderstbl_lane["English"]["DestinationProvinceID"] = "";
	$fieldLabelstbl_lane["English"]["DestinationCountryID"] = "Destination Country";
	$fieldToolTipstbl_lane["English"]["DestinationCountryID"] = "";
	$placeHolderstbl_lane["English"]["DestinationCountryID"] = "";
	$fieldLabelstbl_lane["English"]["Cost"] = "Cost";
	$fieldToolTipstbl_lane["English"]["Cost"] = "";
	$placeHolderstbl_lane["English"]["Cost"] = "";
	$fieldLabelstbl_lane["English"]["Created"] = "Created";
	$fieldToolTipstbl_lane["English"]["Created"] = "";
	$placeHolderstbl_lane["English"]["Created"] = "";
	$fieldLabelstbl_lane["English"]["Modified"] = "Modified";
	$fieldToolTipstbl_lane["English"]["Modified"] = "";
	$placeHolderstbl_lane["English"]["Modified"] = "";
	$fieldLabelstbl_lane["English"]["CompanyID"] = "Company";
	$fieldToolTipstbl_lane["English"]["CompanyID"] = "";
	$placeHolderstbl_lane["English"]["CompanyID"] = "";
	if (count($fieldToolTipstbl_lane["English"]))
		$tdatatbl_lane[".isUseToolTips"] = true;
}


	$tdatatbl_lane[".NCSearch"] = true;



$tdatatbl_lane[".shortTableName"] = "tbl_lane";
$tdatatbl_lane[".nSecOptions"] = 0;

$tdatatbl_lane[".mainTableOwnerID"] = "";
$tdatatbl_lane[".entityType"] = 0;
$tdatatbl_lane[".connId"] = "logistics_at_localhost";


$tdatatbl_lane[".strOriginalTableName"] = "tbl_lane";

	



$tdatatbl_lane[".showAddInPopup"] = false;

$tdatatbl_lane[".showEditInPopup"] = false;

$tdatatbl_lane[".showViewInPopup"] = false;

$tdatatbl_lane[".listAjax"] = false;
//	temporary
//$tdatatbl_lane[".listAjax"] = false;

	$tdatatbl_lane[".audit"] = true;

	$tdatatbl_lane[".locking"] = false;


$pages = $tdatatbl_lane[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_lane[".edit"] = true;
	$tdatatbl_lane[".afterEditAction"] = 1;
	$tdatatbl_lane[".closePopupAfterEdit"] = 1;
	$tdatatbl_lane[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_lane[".add"] = true;
$tdatatbl_lane[".afterAddAction"] = 1;
$tdatatbl_lane[".closePopupAfterAdd"] = 1;
$tdatatbl_lane[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_lane[".list"] = true;
}



$tdatatbl_lane[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_lane[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_lane[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_lane[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_lane[".printFriendly"] = true;
}



$tdatatbl_lane[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_lane[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_lane[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_lane[".isUseAjaxSuggest"] = true;

$tdatatbl_lane[".rowHighlite"] = true;



																					

$tdatatbl_lane[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_lane[".buttonsAdded"] = false;

$tdatatbl_lane[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_lane[".isUseTimeForSearch"] = false;


$tdatatbl_lane[".badgeColor"] = "CD5C5C";


$tdatatbl_lane[".allSearchFields"] = array();
$tdatatbl_lane[".filterFields"] = array();
$tdatatbl_lane[".requiredSearchFields"] = array();

$tdatatbl_lane[".googleLikeFields"] = array();
$tdatatbl_lane[".googleLikeFields"][] = "ID";
$tdatatbl_lane[".googleLikeFields"][] = "CompanyID";
$tdatatbl_lane[".googleLikeFields"][] = "OriginCity";
$tdatatbl_lane[".googleLikeFields"][] = "OriginProvinceID";
$tdatatbl_lane[".googleLikeFields"][] = "OriginCountryID";
$tdatatbl_lane[".googleLikeFields"][] = "DestinationCity";
$tdatatbl_lane[".googleLikeFields"][] = "DestinationProvinceID";
$tdatatbl_lane[".googleLikeFields"][] = "DestinationCountryID";
$tdatatbl_lane[".googleLikeFields"][] = "Cost";
$tdatatbl_lane[".googleLikeFields"][] = "Created";
$tdatatbl_lane[".googleLikeFields"][] = "Modified";



$tdatatbl_lane[".tableType"] = "list";

$tdatatbl_lane[".printerPageOrientation"] = 0;
$tdatatbl_lane[".nPrinterPageScale"] = 100;

$tdatatbl_lane[".nPrinterSplitRecords"] = 40;

$tdatatbl_lane[".geocodingEnabled"] = false;










$tdatatbl_lane[".pageSize"] = 20;

$tdatatbl_lane[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_lane[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_lane[".orderindexes"] = array();


$tdatatbl_lane[".sqlHead"] = "SELECT ID,  	CompanyID,  	OriginCity,  	OriginProvinceID,  	OriginCountryID,  	DestinationCity,  	DestinationProvinceID,  	DestinationCountryID,  	Cost,  	Created,  	Modified";
$tdatatbl_lane[".sqlFrom"] = "FROM tbl_lane";
$tdatatbl_lane[".sqlWhereExpr"] = "";
$tdatatbl_lane[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_lane[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_lane[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_lane[".highlightSearchResults"] = true;

$tableKeystbl_lane = array();
$tableKeystbl_lane[] = "ID";
$tdatatbl_lane[".Keys"] = $tableKeystbl_lane;


$tdatatbl_lane[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_lane";
	$fdata["Label"] = GetFieldLabel("tbl_lane","ID");
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


	$tdatatbl_lane["ID"] = $fdata;
		$tdatatbl_lane[".searchableFields"][] = "ID";
//	CompanyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CompanyID";
	$fdata["GoodName"] = "CompanyID";
	$fdata["ownerTable"] = "tbl_lane";
	$fdata["Label"] = GetFieldLabel("tbl_lane","CompanyID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CompanyID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CompanyID";

	
	
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


	$tdatatbl_lane["CompanyID"] = $fdata;
		$tdatatbl_lane[".searchableFields"][] = "CompanyID";
//	OriginCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "OriginCity";
	$fdata["GoodName"] = "OriginCity";
	$fdata["ownerTable"] = "tbl_lane";
	$fdata["Label"] = GetFieldLabel("tbl_lane","OriginCity");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "OriginCity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OriginCity";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_lane["OriginCity"] = $fdata;
		$tdatatbl_lane[".searchableFields"][] = "OriginCity";
//	OriginProvinceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "OriginProvinceID";
	$fdata["GoodName"] = "OriginProvinceID";
	$fdata["ownerTable"] = "tbl_lane";
	$fdata["Label"] = GetFieldLabel("tbl_lane","OriginProvinceID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "OriginProvinceID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OriginProvinceID";

	
	
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


	$tdatatbl_lane["OriginProvinceID"] = $fdata;
		$tdatatbl_lane[".searchableFields"][] = "OriginProvinceID";
//	OriginCountryID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "OriginCountryID";
	$fdata["GoodName"] = "OriginCountryID";
	$fdata["ownerTable"] = "tbl_lane";
	$fdata["Label"] = GetFieldLabel("tbl_lane","OriginCountryID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "OriginCountryID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OriginCountryID";

	
	
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


	$tdatatbl_lane["OriginCountryID"] = $fdata;
		$tdatatbl_lane[".searchableFields"][] = "OriginCountryID";
//	DestinationCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DestinationCity";
	$fdata["GoodName"] = "DestinationCity";
	$fdata["ownerTable"] = "tbl_lane";
	$fdata["Label"] = GetFieldLabel("tbl_lane","DestinationCity");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DestinationCity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DestinationCity";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_lane["DestinationCity"] = $fdata;
		$tdatatbl_lane[".searchableFields"][] = "DestinationCity";
//	DestinationProvinceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DestinationProvinceID";
	$fdata["GoodName"] = "DestinationProvinceID";
	$fdata["ownerTable"] = "tbl_lane";
	$fdata["Label"] = GetFieldLabel("tbl_lane","DestinationProvinceID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DestinationProvinceID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DestinationProvinceID";

	
	
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


	$tdatatbl_lane["DestinationProvinceID"] = $fdata;
		$tdatatbl_lane[".searchableFields"][] = "DestinationProvinceID";
//	DestinationCountryID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DestinationCountryID";
	$fdata["GoodName"] = "DestinationCountryID";
	$fdata["ownerTable"] = "tbl_lane";
	$fdata["Label"] = GetFieldLabel("tbl_lane","DestinationCountryID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DestinationCountryID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DestinationCountryID";

	
	
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


	$tdatatbl_lane["DestinationCountryID"] = $fdata;
		$tdatatbl_lane[".searchableFields"][] = "DestinationCountryID";
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "tbl_lane";
	$fdata["Label"] = GetFieldLabel("tbl_lane","Cost");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Cost";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cost";

	
	
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


	$tdatatbl_lane["Cost"] = $fdata;
		$tdatatbl_lane[".searchableFields"][] = "Cost";
//	Created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Created";
	$fdata["GoodName"] = "Created";
	$fdata["ownerTable"] = "tbl_lane";
	$fdata["Label"] = GetFieldLabel("tbl_lane","Created");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Created";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Created";

	
	
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


	$tdatatbl_lane["Created"] = $fdata;
		$tdatatbl_lane[".searchableFields"][] = "Created";
//	Modified
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Modified";
	$fdata["GoodName"] = "Modified";
	$fdata["ownerTable"] = "tbl_lane";
	$fdata["Label"] = GetFieldLabel("tbl_lane","Modified");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Modified";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Modified";

	
	
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


	$tdatatbl_lane["Modified"] = $fdata;
		$tdatatbl_lane[".searchableFields"][] = "Modified";


$tables_data["tbl_lane"]=&$tdatatbl_lane;
$field_labels["tbl_lane"] = &$fieldLabelstbl_lane;
$fieldToolTips["tbl_lane"] = &$fieldToolTipstbl_lane;
$placeHolders["tbl_lane"] = &$placeHolderstbl_lane;
$page_titles["tbl_lane"] = &$pageTitlestbl_lane;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_lane"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_lane"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_lane()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	CompanyID,  	OriginCity,  	OriginProvinceID,  	OriginCountryID,  	DestinationCity,  	DestinationProvinceID,  	DestinationCountryID,  	Cost,  	Created,  	Modified";
$proto0["m_strFrom"] = "FROM tbl_lane";
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
	"m_strTable" => "tbl_lane",
	"m_srcTableName" => "tbl_lane"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_lane";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CompanyID",
	"m_strTable" => "tbl_lane",
	"m_srcTableName" => "tbl_lane"
));

$proto8["m_sql"] = "CompanyID";
$proto8["m_srcTableName"] = "tbl_lane";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "OriginCity",
	"m_strTable" => "tbl_lane",
	"m_srcTableName" => "tbl_lane"
));

$proto10["m_sql"] = "OriginCity";
$proto10["m_srcTableName"] = "tbl_lane";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "OriginProvinceID",
	"m_strTable" => "tbl_lane",
	"m_srcTableName" => "tbl_lane"
));

$proto12["m_sql"] = "OriginProvinceID";
$proto12["m_srcTableName"] = "tbl_lane";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "OriginCountryID",
	"m_strTable" => "tbl_lane",
	"m_srcTableName" => "tbl_lane"
));

$proto14["m_sql"] = "OriginCountryID";
$proto14["m_srcTableName"] = "tbl_lane";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DestinationCity",
	"m_strTable" => "tbl_lane",
	"m_srcTableName" => "tbl_lane"
));

$proto16["m_sql"] = "DestinationCity";
$proto16["m_srcTableName"] = "tbl_lane";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DestinationProvinceID",
	"m_strTable" => "tbl_lane",
	"m_srcTableName" => "tbl_lane"
));

$proto18["m_sql"] = "DestinationProvinceID";
$proto18["m_srcTableName"] = "tbl_lane";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DestinationCountryID",
	"m_strTable" => "tbl_lane",
	"m_srcTableName" => "tbl_lane"
));

$proto20["m_sql"] = "DestinationCountryID";
$proto20["m_srcTableName"] = "tbl_lane";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "tbl_lane",
	"m_srcTableName" => "tbl_lane"
));

$proto22["m_sql"] = "Cost";
$proto22["m_srcTableName"] = "tbl_lane";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Created",
	"m_strTable" => "tbl_lane",
	"m_srcTableName" => "tbl_lane"
));

$proto24["m_sql"] = "Created";
$proto24["m_srcTableName"] = "tbl_lane";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Modified",
	"m_strTable" => "tbl_lane",
	"m_srcTableName" => "tbl_lane"
));

$proto26["m_sql"] = "Modified";
$proto26["m_srcTableName"] = "tbl_lane";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "tbl_lane";
$proto29["m_srcTableName"] = "tbl_lane";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "ID";
$proto29["m_columns"][] = "CompanyID";
$proto29["m_columns"][] = "OriginCity";
$proto29["m_columns"][] = "OriginProvinceID";
$proto29["m_columns"][] = "OriginCountryID";
$proto29["m_columns"][] = "DestinationCity";
$proto29["m_columns"][] = "DestinationProvinceID";
$proto29["m_columns"][] = "DestinationCountryID";
$proto29["m_columns"][] = "Cost";
$proto29["m_columns"][] = "Created";
$proto29["m_columns"][] = "Modified";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "tbl_lane";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "tbl_lane";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_lane";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_lane = createSqlQuery_tbl_lane();


	
		;

											

$tdatatbl_lane[".sqlquery"] = $queryData_tbl_lane;



$tableEvents["tbl_lane"] = new eventsBase;
$tdatatbl_lane[".hasEvents"] = false;

?>