<?php
$tdatatbl_city = array();
$tdatatbl_city[".searchableFields"] = array();
$tdatatbl_city[".ShortName"] = "tbl_city";
$tdatatbl_city[".OwnerID"] = "";
$tdatatbl_city[".OriginalTable"] = "tbl_city";


$tdatatbl_city[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatbl_city[".originalPagesByType"] = $tdatatbl_city[".pagesByType"];
$tdatatbl_city[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatbl_city[".originalPages"] = $tdatatbl_city[".pages"];
$tdatatbl_city[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatbl_city[".originalDefaultPages"] = $tdatatbl_city[".defaultPages"];

//	field labels
$fieldLabelstbl_city = array();
$fieldToolTipstbl_city = array();
$pageTitlestbl_city = array();
$placeHolderstbl_city = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_city["English"] = array();
	$fieldToolTipstbl_city["English"] = array();
	$placeHolderstbl_city["English"] = array();
	$pageTitlestbl_city["English"] = array();
	$fieldLabelstbl_city["English"]["ID"] = "ID";
	$fieldToolTipstbl_city["English"]["ID"] = "";
	$placeHolderstbl_city["English"]["ID"] = "";
	$fieldLabelstbl_city["English"]["ProvinceID"] = "Province/State";
	$fieldToolTipstbl_city["English"]["ProvinceID"] = "";
	$placeHolderstbl_city["English"]["ProvinceID"] = "";
	$fieldLabelstbl_city["English"]["CityName"] = "City Name";
	$fieldToolTipstbl_city["English"]["CityName"] = "";
	$placeHolderstbl_city["English"]["CityName"] = "";
	$fieldLabelstbl_city["English"]["provincename"] = "Province/State";
	$fieldToolTipstbl_city["English"]["provincename"] = "";
	$placeHolderstbl_city["English"]["provincename"] = "";
	if (count($fieldToolTipstbl_city["English"]))
		$tdatatbl_city[".isUseToolTips"] = true;
}


	$tdatatbl_city[".NCSearch"] = true;



$tdatatbl_city[".shortTableName"] = "tbl_city";
$tdatatbl_city[".nSecOptions"] = 0;

$tdatatbl_city[".mainTableOwnerID"] = "";
$tdatatbl_city[".entityType"] = 0;
$tdatatbl_city[".connId"] = "logistics_at_localhost";


$tdatatbl_city[".strOriginalTableName"] = "tbl_city";

	



$tdatatbl_city[".showAddInPopup"] = false;

$tdatatbl_city[".showEditInPopup"] = false;

$tdatatbl_city[".showViewInPopup"] = false;

$tdatatbl_city[".listAjax"] = false;
//	temporary
//$tdatatbl_city[".listAjax"] = false;

	$tdatatbl_city[".audit"] = false;

	$tdatatbl_city[".locking"] = false;


$pages = $tdatatbl_city[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_city[".edit"] = true;
	$tdatatbl_city[".afterEditAction"] = 1;
	$tdatatbl_city[".closePopupAfterEdit"] = 1;
	$tdatatbl_city[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_city[".add"] = true;
$tdatatbl_city[".afterAddAction"] = 1;
$tdatatbl_city[".closePopupAfterAdd"] = 1;
$tdatatbl_city[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_city[".list"] = true;
}



$tdatatbl_city[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_city[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_city[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_city[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_city[".printFriendly"] = true;
}



$tdatatbl_city[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_city[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_city[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_city[".isUseAjaxSuggest"] = true;

$tdatatbl_city[".rowHighlite"] = true;



																					

$tdatatbl_city[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_city[".buttonsAdded"] = false;

$tdatatbl_city[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_city[".isUseTimeForSearch"] = false;


$tdatatbl_city[".badgeColor"] = "778899";


$tdatatbl_city[".allSearchFields"] = array();
$tdatatbl_city[".filterFields"] = array();
$tdatatbl_city[".requiredSearchFields"] = array();

$tdatatbl_city[".googleLikeFields"] = array();
$tdatatbl_city[".googleLikeFields"][] = "ID";
$tdatatbl_city[".googleLikeFields"][] = "ProvinceID";
$tdatatbl_city[".googleLikeFields"][] = "CityName";
$tdatatbl_city[".googleLikeFields"][] = "provincename";



$tdatatbl_city[".tableType"] = "list";

$tdatatbl_city[".printerPageOrientation"] = 0;
$tdatatbl_city[".nPrinterPageScale"] = 100;

$tdatatbl_city[".nPrinterSplitRecords"] = 40;

$tdatatbl_city[".geocodingEnabled"] = false;










$tdatatbl_city[".pageSize"] = 20;

$tdatatbl_city[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY tbl_province.Name, tbl_city.CityName";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_city[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_city[".orderindexes"] = array();
	$tdatatbl_city[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "tbl_province.Name");

	$tdatatbl_city[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "tbl_city.CityName");



$tdatatbl_city[".sqlHead"] = "SELECT tbl_city.ID,  tbl_city.ProvinceID,  tbl_city.CityName,  tbl_province.Name AS provincename";
$tdatatbl_city[".sqlFrom"] = "FROM tbl_city  INNER JOIN tbl_province ON tbl_city.ProvinceID = tbl_province.ProvinceID";
$tdatatbl_city[".sqlWhereExpr"] = "";
$tdatatbl_city[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_city[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_city[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_city[".highlightSearchResults"] = true;

$tableKeystbl_city = array();
$tableKeystbl_city[] = "ID";
$tdatatbl_city[".Keys"] = $tableKeystbl_city;


$tdatatbl_city[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_city";
	$fdata["Label"] = GetFieldLabel("tbl_city","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_city.ID";

	
	
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


	$tdatatbl_city["ID"] = $fdata;
		$tdatatbl_city[".searchableFields"][] = "ID";
//	ProvinceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProvinceID";
	$fdata["GoodName"] = "ProvinceID";
	$fdata["ownerTable"] = "tbl_city";
	$fdata["Label"] = GetFieldLabel("tbl_city","ProvinceID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProvinceID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_city.ProvinceID";

	
	
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
	$edata["LookupTable"] = "tbl_province";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "ProvinceID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	

	
	$edata["LookupOrderBy"] = "Name";

	
	
	
	

	
	
	
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


	$tdatatbl_city["ProvinceID"] = $fdata;
		$tdatatbl_city[".searchableFields"][] = "ProvinceID";
//	CityName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CityName";
	$fdata["GoodName"] = "CityName";
	$fdata["ownerTable"] = "tbl_city";
	$fdata["Label"] = GetFieldLabel("tbl_city","CityName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CityName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_city.CityName";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatatbl_city["CityName"] = $fdata;
		$tdatatbl_city[".searchableFields"][] = "CityName";
//	provincename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "provincename";
	$fdata["GoodName"] = "provincename";
	$fdata["ownerTable"] = "tbl_province";
	$fdata["Label"] = GetFieldLabel("tbl_city","provincename");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_province.Name";

	
	
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


	$tdatatbl_city["provincename"] = $fdata;
		$tdatatbl_city[".searchableFields"][] = "provincename";


$tables_data["tbl_city"]=&$tdatatbl_city;
$field_labels["tbl_city"] = &$fieldLabelstbl_city;
$fieldToolTips["tbl_city"] = &$fieldToolTipstbl_city;
$placeHolders["tbl_city"] = &$placeHolderstbl_city;
$page_titles["tbl_city"] = &$pageTitlestbl_city;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_city"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_city"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_city()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tbl_city.ID,  tbl_city.ProvinceID,  tbl_city.CityName,  tbl_province.Name AS provincename";
$proto0["m_strFrom"] = "FROM tbl_city  INNER JOIN tbl_province ON tbl_city.ProvinceID = tbl_province.ProvinceID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY tbl_province.Name, tbl_city.CityName";
	
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
	"m_strTable" => "tbl_city",
	"m_srcTableName" => "tbl_city"
));

$proto6["m_sql"] = "tbl_city.ID";
$proto6["m_srcTableName"] = "tbl_city";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ProvinceID",
	"m_strTable" => "tbl_city",
	"m_srcTableName" => "tbl_city"
));

$proto8["m_sql"] = "tbl_city.ProvinceID";
$proto8["m_srcTableName"] = "tbl_city";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CityName",
	"m_strTable" => "tbl_city",
	"m_srcTableName" => "tbl_city"
));

$proto10["m_sql"] = "tbl_city.CityName";
$proto10["m_srcTableName"] = "tbl_city";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "tbl_province",
	"m_srcTableName" => "tbl_city"
));

$proto12["m_sql"] = "tbl_province.Name";
$proto12["m_srcTableName"] = "tbl_city";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "provincename";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tbl_city";
$proto15["m_srcTableName"] = "tbl_city";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "ID";
$proto15["m_columns"][] = "ProvinceID";
$proto15["m_columns"][] = "CityName";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "tbl_city";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tbl_city";
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
												$proto18=array();
$proto18["m_link"] = "SQLL_INNERJOIN";
			$proto19=array();
$proto19["m_strName"] = "tbl_province";
$proto19["m_srcTableName"] = "tbl_city";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ProvinceID";
$proto19["m_columns"][] = "CountryID";
$proto19["m_columns"][] = "Code";
$proto19["m_columns"][] = "Name";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "INNER JOIN tbl_province ON tbl_city.ProvinceID = tbl_province.ProvinceID";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "tbl_city";
$proto20=array();
$proto20["m_sql"] = "tbl_city.ProvinceID = tbl_province.ProvinceID";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProvinceID",
	"m_strTable" => "tbl_city",
	"m_srcTableName" => "tbl_city"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "= tbl_province.ProvinceID";
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
	"m_strName" => "Name",
	"m_strTable" => "tbl_province",
	"m_srcTableName" => "tbl_city"
));

$proto22["m_column"]=$obj;
$proto22["m_bAsc"] = 1;
$proto22["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto22);

$proto0["m_orderby"][]=$obj;					
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "CityName",
	"m_strTable" => "tbl_city",
	"m_srcTableName" => "tbl_city"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tbl_city";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_city = createSqlQuery_tbl_city();


	
		;

				

$tdatatbl_city[".sqlquery"] = $queryData_tbl_city;



$tableEvents["tbl_city"] = new eventsBase;
$tdatatbl_city[".hasEvents"] = false;

?>