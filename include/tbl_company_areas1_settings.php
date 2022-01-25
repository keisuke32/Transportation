<?php
$tdatatbl_company_areas1 = array();
$tdatatbl_company_areas1[".searchableFields"] = array();
$tdatatbl_company_areas1[".ShortName"] = "tbl_company_areas1";
$tdatatbl_company_areas1[".OwnerID"] = "";
$tdatatbl_company_areas1[".OriginalTable"] = "tbl_company_areas";


$tdatatbl_company_areas1[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatbl_company_areas1[".originalPagesByType"] = $tdatatbl_company_areas1[".pagesByType"];
$tdatatbl_company_areas1[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatbl_company_areas1[".originalPages"] = $tdatatbl_company_areas1[".pages"];
$tdatatbl_company_areas1[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatbl_company_areas1[".originalDefaultPages"] = $tdatatbl_company_areas1[".defaultPages"];

//	field labels
$fieldLabelstbl_company_areas1 = array();
$fieldToolTipstbl_company_areas1 = array();
$pageTitlestbl_company_areas1 = array();
$placeHolderstbl_company_areas1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_company_areas1["English"] = array();
	$fieldToolTipstbl_company_areas1["English"] = array();
	$placeHolderstbl_company_areas1["English"] = array();
	$pageTitlestbl_company_areas1["English"] = array();
	$fieldLabelstbl_company_areas1["English"]["ID"] = "ID";
	$fieldToolTipstbl_company_areas1["English"]["ID"] = "";
	$placeHolderstbl_company_areas1["English"]["ID"] = "";
	$fieldLabelstbl_company_areas1["English"]["CountryID"] = "Country";
	$fieldToolTipstbl_company_areas1["English"]["CountryID"] = "";
	$placeHolderstbl_company_areas1["English"]["CountryID"] = "";
	$fieldLabelstbl_company_areas1["English"]["ProvinceID"] = "Province";
	$fieldToolTipstbl_company_areas1["English"]["ProvinceID"] = "";
	$placeHolderstbl_company_areas1["English"]["ProvinceID"] = "";
	$fieldLabelstbl_company_areas1["English"]["CompanyID"] = "Company";
	$fieldToolTipstbl_company_areas1["English"]["CompanyID"] = "";
	$placeHolderstbl_company_areas1["English"]["CompanyID"] = "";
	if (count($fieldToolTipstbl_company_areas1["English"]))
		$tdatatbl_company_areas1[".isUseToolTips"] = true;
}


	$tdatatbl_company_areas1[".NCSearch"] = true;



$tdatatbl_company_areas1[".shortTableName"] = "tbl_company_areas1";
$tdatatbl_company_areas1[".nSecOptions"] = 0;

$tdatatbl_company_areas1[".mainTableOwnerID"] = "";
$tdatatbl_company_areas1[".entityType"] = 0;
$tdatatbl_company_areas1[".connId"] = "logistics_at_localhost";


$tdatatbl_company_areas1[".strOriginalTableName"] = "tbl_company_areas";

	



$tdatatbl_company_areas1[".showAddInPopup"] = false;

$tdatatbl_company_areas1[".showEditInPopup"] = false;

$tdatatbl_company_areas1[".showViewInPopup"] = false;

$tdatatbl_company_areas1[".listAjax"] = false;
//	temporary
//$tdatatbl_company_areas1[".listAjax"] = false;

	$tdatatbl_company_areas1[".audit"] = false;

	$tdatatbl_company_areas1[".locking"] = false;


$pages = $tdatatbl_company_areas1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_company_areas1[".edit"] = true;
	$tdatatbl_company_areas1[".afterEditAction"] = 1;
	$tdatatbl_company_areas1[".closePopupAfterEdit"] = 1;
	$tdatatbl_company_areas1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_company_areas1[".add"] = true;
$tdatatbl_company_areas1[".afterAddAction"] = 1;
$tdatatbl_company_areas1[".closePopupAfterAdd"] = 1;
$tdatatbl_company_areas1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_company_areas1[".list"] = true;
}



$tdatatbl_company_areas1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_company_areas1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_company_areas1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_company_areas1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_company_areas1[".printFriendly"] = true;
}



$tdatatbl_company_areas1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_company_areas1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_company_areas1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_company_areas1[".isUseAjaxSuggest"] = true;

$tdatatbl_company_areas1[".rowHighlite"] = true;



																																										

$tdatatbl_company_areas1[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_company_areas1[".buttonsAdded"] = false;

$tdatatbl_company_areas1[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatbl_company_areas1[".isUseTimeForSearch"] = false;


$tdatatbl_company_areas1[".badgeColor"] = "2f4f4f";


$tdatatbl_company_areas1[".allSearchFields"] = array();
$tdatatbl_company_areas1[".filterFields"] = array();
$tdatatbl_company_areas1[".requiredSearchFields"] = array();

$tdatatbl_company_areas1[".googleLikeFields"] = array();
$tdatatbl_company_areas1[".googleLikeFields"][] = "ID";
$tdatatbl_company_areas1[".googleLikeFields"][] = "CompanyID";
$tdatatbl_company_areas1[".googleLikeFields"][] = "CountryID";
$tdatatbl_company_areas1[".googleLikeFields"][] = "ProvinceID";



$tdatatbl_company_areas1[".tableType"] = "list";

$tdatatbl_company_areas1[".printerPageOrientation"] = 0;
$tdatatbl_company_areas1[".nPrinterPageScale"] = 100;

$tdatatbl_company_areas1[".nPrinterSplitRecords"] = 40;

$tdatatbl_company_areas1[".geocodingEnabled"] = false;










$tdatatbl_company_areas1[".pageSize"] = 20;

$tdatatbl_company_areas1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_company_areas1[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_company_areas1[".orderindexes"] = array();


$tdatatbl_company_areas1[".sqlHead"] = "SELECT ID,  	CompanyID,  	CountryID,  	ProvinceID";
$tdatatbl_company_areas1[".sqlFrom"] = "FROM tbl_company_areas";
$tdatatbl_company_areas1[".sqlWhereExpr"] = "";
$tdatatbl_company_areas1[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatatbl_company_areas1[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_company_areas1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_company_areas1[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_company_areas1[".highlightSearchResults"] = true;

$tableKeystbl_company_areas1 = array();
$tableKeystbl_company_areas1[] = "ID";
$tdatatbl_company_areas1[".Keys"] = $tableKeystbl_company_areas1;


$tdatatbl_company_areas1[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_company_areas";
	$fdata["Label"] = GetFieldLabel("tbl_company_areas","ID");
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


	$tdatatbl_company_areas1["ID"] = $fdata;
		$tdatatbl_company_areas1[".searchableFields"][] = "ID";
//	CompanyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CompanyID";
	$fdata["GoodName"] = "CompanyID";
	$fdata["ownerTable"] = "tbl_company_areas";
	$fdata["Label"] = GetFieldLabel("tbl_company_areas","CompanyID");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_company";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	

	
	$edata["LookupOrderBy"] = "Name";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


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


	$tdatatbl_company_areas1["CompanyID"] = $fdata;
		$tdatatbl_company_areas1[".searchableFields"][] = "CompanyID";
//	CountryID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CountryID";
	$fdata["GoodName"] = "CountryID";
	$fdata["ownerTable"] = "tbl_company_areas";
	$fdata["Label"] = GetFieldLabel("tbl_company_areas","CountryID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CountryID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CountryID";

	
	
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
	$edata["LookupTable"] = "tbl_country";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	

	
	$edata["LookupOrderBy"] = "Name";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "ProvinceID";
				$edata["DependentLookups"][] = "ProvinceID";
				$edata["DependentLookups"][] = "ProvinceID";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


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


	$tdatatbl_company_areas1["CountryID"] = $fdata;
		$tdatatbl_company_areas1[".searchableFields"][] = "CountryID";
//	ProvinceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ProvinceID";
	$fdata["GoodName"] = "ProvinceID";
	$fdata["ownerTable"] = "tbl_company_areas";
	$fdata["Label"] = GetFieldLabel("tbl_company_areas","ProvinceID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ProvinceID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProvinceID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_province";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "ProvinceID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "CountryID", "lookup" => "CountryID" );

	
	

	
	
	
// End Lookup Settings


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
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_province";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

	
		
	$edata["LinkField"] = "ProvinceID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "CountryID", "lookup" => "CountryID" );

	
	

	
		$edata["Multiselect"] = true;

	
// End Lookup Settings


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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_province";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ProvinceID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "CountryID", "lookup" => "CountryID" );

	
	

	
	
		$edata["SelectSize"] = 10;

// End Lookup Settings


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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatbl_company_areas1["ProvinceID"] = $fdata;
		$tdatatbl_company_areas1[".searchableFields"][] = "ProvinceID";


$tables_data["tbl_company_areas"]=&$tdatatbl_company_areas1;
$field_labels["tbl_company_areas"] = &$fieldLabelstbl_company_areas1;
$fieldToolTips["tbl_company_areas"] = &$fieldToolTipstbl_company_areas1;
$placeHolders["tbl_company_areas"] = &$placeHolderstbl_company_areas1;
$page_titles["tbl_company_areas"] = &$pageTitlestbl_company_areas1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_company_areas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_company_areas"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tbl_company";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_company";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_company";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_company_areas"][0] = $masterParams;
				$masterTablesData["tbl_company_areas"][0]["masterKeys"] = array();
	$masterTablesData["tbl_company_areas"][0]["masterKeys"][]="ID";
				$masterTablesData["tbl_company_areas"][0]["detailKeys"] = array();
	$masterTablesData["tbl_company_areas"][0]["detailKeys"][]="CompanyID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_company_areas1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	CompanyID,  	CountryID,  	ProvinceID";
$proto0["m_strFrom"] = "FROM tbl_company_areas";
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
	"m_strTable" => "tbl_company_areas",
	"m_srcTableName" => "tbl_company_areas"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_company_areas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CompanyID",
	"m_strTable" => "tbl_company_areas",
	"m_srcTableName" => "tbl_company_areas"
));

$proto8["m_sql"] = "CompanyID";
$proto8["m_srcTableName"] = "tbl_company_areas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CountryID",
	"m_strTable" => "tbl_company_areas",
	"m_srcTableName" => "tbl_company_areas"
));

$proto10["m_sql"] = "CountryID";
$proto10["m_srcTableName"] = "tbl_company_areas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ProvinceID",
	"m_strTable" => "tbl_company_areas",
	"m_srcTableName" => "tbl_company_areas"
));

$proto12["m_sql"] = "ProvinceID";
$proto12["m_srcTableName"] = "tbl_company_areas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tbl_company_areas";
$proto15["m_srcTableName"] = "tbl_company_areas";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "ID";
$proto15["m_columns"][] = "CompanyID";
$proto15["m_columns"][] = "CountryID";
$proto15["m_columns"][] = "ProvinceID";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "tbl_company_areas";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tbl_company_areas";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_company_areas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_company_areas1 = createSqlQuery_tbl_company_areas1();


	
		;

				

$tdatatbl_company_areas1[".sqlquery"] = $queryData_tbl_company_areas1;



include_once(getabspath("include/tbl_company_areas1_events.php"));
$tableEvents["tbl_company_areas"] = new eventclass_tbl_company_areas1;
$tdatatbl_company_areas1[".hasEvents"] = true;

?>