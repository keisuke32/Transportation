<?php
$tdatatargettransportation104_v1_audit = array();
$tdatatargettransportation104_v1_audit[".searchableFields"] = array();
$tdatatargettransportation104_v1_audit[".ShortName"] = "targettransportation104_v1_audit";
$tdatatargettransportation104_v1_audit[".OwnerID"] = "";
$tdatatargettransportation104_v1_audit[".OriginalTable"] = "targettransportation104_v1_audit";


$tdatatargettransportation104_v1_audit[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatargettransportation104_v1_audit[".originalPagesByType"] = $tdatatargettransportation104_v1_audit[".pagesByType"];
$tdatatargettransportation104_v1_audit[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatargettransportation104_v1_audit[".originalPages"] = $tdatatargettransportation104_v1_audit[".pages"];
$tdatatargettransportation104_v1_audit[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatargettransportation104_v1_audit[".originalDefaultPages"] = $tdatatargettransportation104_v1_audit[".defaultPages"];

//	field labels
$fieldLabelstargettransportation104_v1_audit = array();
$fieldToolTipstargettransportation104_v1_audit = array();
$pageTitlestargettransportation104_v1_audit = array();
$placeHolderstargettransportation104_v1_audit = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstargettransportation104_v1_audit["English"] = array();
	$fieldToolTipstargettransportation104_v1_audit["English"] = array();
	$placeHolderstargettransportation104_v1_audit["English"] = array();
	$pageTitlestargettransportation104_v1_audit["English"] = array();
	$fieldLabelstargettransportation104_v1_audit["English"]["id"] = "ID";
	$fieldToolTipstargettransportation104_v1_audit["English"]["id"] = "";
	$placeHolderstargettransportation104_v1_audit["English"]["id"] = "";
	$fieldLabelstargettransportation104_v1_audit["English"]["datetime"] = "Date and time";
	$fieldToolTipstargettransportation104_v1_audit["English"]["datetime"] = "";
	$placeHolderstargettransportation104_v1_audit["English"]["datetime"] = "";
	$fieldLabelstargettransportation104_v1_audit["English"]["ip"] = "IP address";
	$fieldToolTipstargettransportation104_v1_audit["English"]["ip"] = "";
	$placeHolderstargettransportation104_v1_audit["English"]["ip"] = "";
	$fieldLabelstargettransportation104_v1_audit["English"]["user"] = "User";
	$fieldToolTipstargettransportation104_v1_audit["English"]["user"] = "";
	$placeHolderstargettransportation104_v1_audit["English"]["user"] = "";
	$fieldLabelstargettransportation104_v1_audit["English"]["table"] = "Table changed";
	$fieldToolTipstargettransportation104_v1_audit["English"]["table"] = "";
	$placeHolderstargettransportation104_v1_audit["English"]["table"] = "";
	$fieldLabelstargettransportation104_v1_audit["English"]["action"] = "Action";
	$fieldToolTipstargettransportation104_v1_audit["English"]["action"] = "";
	$placeHolderstargettransportation104_v1_audit["English"]["action"] = "";
	$fieldLabelstargettransportation104_v1_audit["English"]["description"] = "Description";
	$fieldToolTipstargettransportation104_v1_audit["English"]["description"] = "";
	$placeHolderstargettransportation104_v1_audit["English"]["description"] = "";
	if (count($fieldToolTipstargettransportation104_v1_audit["English"]))
		$tdatatargettransportation104_v1_audit[".isUseToolTips"] = true;
}


	$tdatatargettransportation104_v1_audit[".NCSearch"] = true;



$tdatatargettransportation104_v1_audit[".shortTableName"] = "targettransportation104_v1_audit";
$tdatatargettransportation104_v1_audit[".nSecOptions"] = 0;

$tdatatargettransportation104_v1_audit[".mainTableOwnerID"] = "";
$tdatatargettransportation104_v1_audit[".entityType"] = 0;
$tdatatargettransportation104_v1_audit[".connId"] = "logistics_at_localhost";


$tdatatargettransportation104_v1_audit[".strOriginalTableName"] = "targettransportation104_v1_audit";

	



$tdatatargettransportation104_v1_audit[".showAddInPopup"] = false;

$tdatatargettransportation104_v1_audit[".showEditInPopup"] = false;

$tdatatargettransportation104_v1_audit[".showViewInPopup"] = false;

	$tdatatargettransportation104_v1_audit[".listAjax"] = true;
//	temporary
//$tdatatargettransportation104_v1_audit[".listAjax"] = false;

	$tdatatargettransportation104_v1_audit[".audit"] = false;

	$tdatatargettransportation104_v1_audit[".locking"] = false;


$pages = $tdatatargettransportation104_v1_audit[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatargettransportation104_v1_audit[".edit"] = true;
	$tdatatargettransportation104_v1_audit[".afterEditAction"] = 1;
	$tdatatargettransportation104_v1_audit[".closePopupAfterEdit"] = 1;
	$tdatatargettransportation104_v1_audit[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatargettransportation104_v1_audit[".add"] = true;
$tdatatargettransportation104_v1_audit[".afterAddAction"] = 1;
$tdatatargettransportation104_v1_audit[".closePopupAfterAdd"] = 1;
$tdatatargettransportation104_v1_audit[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatargettransportation104_v1_audit[".list"] = true;
}



$tdatatargettransportation104_v1_audit[".strSortControlSettingsJSON"] = "";

$tdatatargettransportation104_v1_audit[".strClickActionJSON"] = "{\"fields\":{\"action\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"datetime\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"description\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ip\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"table\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"user\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"popup\",\"page\":\"view\",\"table\":null,\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatatargettransportation104_v1_audit[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatargettransportation104_v1_audit[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatargettransportation104_v1_audit[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatargettransportation104_v1_audit[".printFriendly"] = true;
}



$tdatatargettransportation104_v1_audit[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatargettransportation104_v1_audit[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatargettransportation104_v1_audit[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatargettransportation104_v1_audit[".isUseAjaxSuggest"] = true;

$tdatatargettransportation104_v1_audit[".rowHighlite"] = true;



																					

$tdatatargettransportation104_v1_audit[".ajaxCodeSnippetAdded"] = false;

$tdatatargettransportation104_v1_audit[".buttonsAdded"] = false;

$tdatatargettransportation104_v1_audit[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatargettransportation104_v1_audit[".isUseTimeForSearch"] = false;


$tdatatargettransportation104_v1_audit[".badgeColor"] = "B22222";


$tdatatargettransportation104_v1_audit[".allSearchFields"] = array();
$tdatatargettransportation104_v1_audit[".filterFields"] = array();
$tdatatargettransportation104_v1_audit[".requiredSearchFields"] = array();

$tdatatargettransportation104_v1_audit[".googleLikeFields"] = array();
$tdatatargettransportation104_v1_audit[".googleLikeFields"][] = "id";
$tdatatargettransportation104_v1_audit[".googleLikeFields"][] = "datetime";
$tdatatargettransportation104_v1_audit[".googleLikeFields"][] = "ip";
$tdatatargettransportation104_v1_audit[".googleLikeFields"][] = "user";
$tdatatargettransportation104_v1_audit[".googleLikeFields"][] = "table";
$tdatatargettransportation104_v1_audit[".googleLikeFields"][] = "action";
$tdatatargettransportation104_v1_audit[".googleLikeFields"][] = "description";



$tdatatargettransportation104_v1_audit[".tableType"] = "list";

$tdatatargettransportation104_v1_audit[".printerPageOrientation"] = 0;
$tdatatargettransportation104_v1_audit[".nPrinterPageScale"] = 100;

$tdatatargettransportation104_v1_audit[".nPrinterSplitRecords"] = 40;

$tdatatargettransportation104_v1_audit[".geocodingEnabled"] = false;







$tdatatargettransportation104_v1_audit[".noRecordsFirstPage"] = true;



$tdatatargettransportation104_v1_audit[".pageSize"] = 20;

$tdatatargettransportation104_v1_audit[".warnLeavingPages"] = true;

$tdatatargettransportation104_v1_audit[".hideEmptyFieldsOnView"] = true;


$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatargettransportation104_v1_audit[".strOrderBy"] = $tstrOrderBy;

$tdatatargettransportation104_v1_audit[".orderindexes"] = array();


$tdatatargettransportation104_v1_audit[".sqlHead"] = "SELECT id,  	`datetime`,  	ip,  	`user`,  	`table`,  	`action`,  	description";
$tdatatargettransportation104_v1_audit[".sqlFrom"] = "FROM targettransportation104_v1_audit";
$tdatatargettransportation104_v1_audit[".sqlWhereExpr"] = "";
$tdatatargettransportation104_v1_audit[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatargettransportation104_v1_audit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatargettransportation104_v1_audit[".arrGroupsPerPage"] = $arrGPP;

$tdatatargettransportation104_v1_audit[".highlightSearchResults"] = true;

$tableKeystargettransportation104_v1_audit = array();
$tableKeystargettransportation104_v1_audit[] = "id";
$tdatatargettransportation104_v1_audit[".Keys"] = $tableKeystargettransportation104_v1_audit;


$tdatatargettransportation104_v1_audit[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "targettransportation104_v1_audit";
	$fdata["Label"] = GetFieldLabel("targettransportation104_v1_audit","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatatargettransportation104_v1_audit["id"] = $fdata;
		$tdatatargettransportation104_v1_audit[".searchableFields"][] = "id";
//	datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "datetime";
	$fdata["GoodName"] = "datetime";
	$fdata["ownerTable"] = "targettransportation104_v1_audit";
	$fdata["Label"] = GetFieldLabel("targettransportation104_v1_audit","datetime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "datetime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`datetime`";

	
	
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


	$tdatatargettransportation104_v1_audit["datetime"] = $fdata;
		$tdatatargettransportation104_v1_audit[".searchableFields"][] = "datetime";
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "targettransportation104_v1_audit";
	$fdata["Label"] = GetFieldLabel("targettransportation104_v1_audit","ip");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ip";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ip";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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


	$tdatatargettransportation104_v1_audit["ip"] = $fdata;
		$tdatatargettransportation104_v1_audit[".searchableFields"][] = "ip";
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "targettransportation104_v1_audit";
	$fdata["Label"] = GetFieldLabel("targettransportation104_v1_audit","user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatatargettransportation104_v1_audit["user"] = $fdata;
		$tdatatargettransportation104_v1_audit[".searchableFields"][] = "user";
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "targettransportation104_v1_audit";
	$fdata["Label"] = GetFieldLabel("targettransportation104_v1_audit","table");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "table";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`table`";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatatargettransportation104_v1_audit["table"] = $fdata;
		$tdatatargettransportation104_v1_audit[".searchableFields"][] = "table";
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "targettransportation104_v1_audit";
	$fdata["Label"] = GetFieldLabel("targettransportation104_v1_audit","action");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "action";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`action`";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatatargettransportation104_v1_audit["action"] = $fdata;
		$tdatatargettransportation104_v1_audit[".searchableFields"][] = "action";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "targettransportation104_v1_audit";
	$fdata["Label"] = GetFieldLabel("targettransportation104_v1_audit","description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatatargettransportation104_v1_audit["description"] = $fdata;
		$tdatatargettransportation104_v1_audit[".searchableFields"][] = "description";


$tables_data["targettransportation104_v1_audit"]=&$tdatatargettransportation104_v1_audit;
$field_labels["targettransportation104_v1_audit"] = &$fieldLabelstargettransportation104_v1_audit;
$fieldToolTips["targettransportation104_v1_audit"] = &$fieldToolTipstargettransportation104_v1_audit;
$placeHolders["targettransportation104_v1_audit"] = &$placeHolderstargettransportation104_v1_audit;
$page_titles["targettransportation104_v1_audit"] = &$pageTitlestargettransportation104_v1_audit;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["targettransportation104_v1_audit"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["targettransportation104_v1_audit"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_targettransportation104_v1_audit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	`datetime`,  	ip,  	`user`,  	`table`,  	`action`,  	description";
$proto0["m_strFrom"] = "FROM targettransportation104_v1_audit";
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
	"m_strName" => "id",
	"m_strTable" => "targettransportation104_v1_audit",
	"m_srcTableName" => "targettransportation104_v1_audit"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "targettransportation104_v1_audit";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "targettransportation104_v1_audit",
	"m_srcTableName" => "targettransportation104_v1_audit"
));

$proto8["m_sql"] = "`datetime`";
$proto8["m_srcTableName"] = "targettransportation104_v1_audit";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "targettransportation104_v1_audit",
	"m_srcTableName" => "targettransportation104_v1_audit"
));

$proto10["m_sql"] = "ip";
$proto10["m_srcTableName"] = "targettransportation104_v1_audit";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "targettransportation104_v1_audit",
	"m_srcTableName" => "targettransportation104_v1_audit"
));

$proto12["m_sql"] = "`user`";
$proto12["m_srcTableName"] = "targettransportation104_v1_audit";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "targettransportation104_v1_audit",
	"m_srcTableName" => "targettransportation104_v1_audit"
));

$proto14["m_sql"] = "`table`";
$proto14["m_srcTableName"] = "targettransportation104_v1_audit";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "targettransportation104_v1_audit",
	"m_srcTableName" => "targettransportation104_v1_audit"
));

$proto16["m_sql"] = "`action`";
$proto16["m_srcTableName"] = "targettransportation104_v1_audit";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "targettransportation104_v1_audit",
	"m_srcTableName" => "targettransportation104_v1_audit"
));

$proto18["m_sql"] = "description";
$proto18["m_srcTableName"] = "targettransportation104_v1_audit";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "targettransportation104_v1_audit";
$proto21["m_srcTableName"] = "targettransportation104_v1_audit";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "datetime";
$proto21["m_columns"][] = "ip";
$proto21["m_columns"][] = "user";
$proto21["m_columns"][] = "table";
$proto21["m_columns"][] = "action";
$proto21["m_columns"][] = "description";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "targettransportation104_v1_audit";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "targettransportation104_v1_audit";
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
$proto0["m_srcTableName"]="targettransportation104_v1_audit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_targettransportation104_v1_audit = createSqlQuery_targettransportation104_v1_audit();


	
		;

							

$tdatatargettransportation104_v1_audit[".sqlquery"] = $queryData_targettransportation104_v1_audit;



$tableEvents["targettransportation104_v1_audit"] = new eventsBase;
$tdatatargettransportation104_v1_audit[".hasEvents"] = false;

?>