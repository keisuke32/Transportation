<?php
$tdatatbl_province = array();
$tdatatbl_province[".searchableFields"] = array();
$tdatatbl_province[".ShortName"] = "tbl_province";
$tdatatbl_province[".OwnerID"] = "";
$tdatatbl_province[".OriginalTable"] = "tbl_province";


$tdatatbl_province[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_province[".originalPagesByType"] = $tdatatbl_province[".pagesByType"];
$tdatatbl_province[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_province[".originalPages"] = $tdatatbl_province[".pages"];
$tdatatbl_province[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_province[".originalDefaultPages"] = $tdatatbl_province[".defaultPages"];

//	field labels
$fieldLabelstbl_province = array();
$fieldToolTipstbl_province = array();
$pageTitlestbl_province = array();
$placeHolderstbl_province = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_province["English"] = array();
	$fieldToolTipstbl_province["English"] = array();
	$placeHolderstbl_province["English"] = array();
	$pageTitlestbl_province["English"] = array();
	$fieldLabelstbl_province["English"]["ProvinceID"] = "Province/State";
	$fieldToolTipstbl_province["English"]["ProvinceID"] = "";
	$placeHolderstbl_province["English"]["ProvinceID"] = "";
	$fieldLabelstbl_province["English"]["CountryID"] = "Country";
	$fieldToolTipstbl_province["English"]["CountryID"] = "";
	$placeHolderstbl_province["English"]["CountryID"] = "";
	$fieldLabelstbl_province["English"]["Code"] = "Code";
	$fieldToolTipstbl_province["English"]["Code"] = "";
	$placeHolderstbl_province["English"]["Code"] = "";
	$fieldLabelstbl_province["English"]["Name"] = "Name";
	$fieldToolTipstbl_province["English"]["Name"] = "";
	$placeHolderstbl_province["English"]["Name"] = "";
	if (count($fieldToolTipstbl_province["English"]))
		$tdatatbl_province[".isUseToolTips"] = true;
}


	$tdatatbl_province[".NCSearch"] = true;



$tdatatbl_province[".shortTableName"] = "tbl_province";
$tdatatbl_province[".nSecOptions"] = 0;

$tdatatbl_province[".mainTableOwnerID"] = "";
$tdatatbl_province[".entityType"] = 0;
$tdatatbl_province[".connId"] = "logistics_at_localhost";


$tdatatbl_province[".strOriginalTableName"] = "tbl_province";

	



$tdatatbl_province[".showAddInPopup"] = false;

$tdatatbl_province[".showEditInPopup"] = false;

$tdatatbl_province[".showViewInPopup"] = false;

	$tdatatbl_province[".listAjax"] = true;
//	temporary
//$tdatatbl_province[".listAjax"] = false;

	$tdatatbl_province[".audit"] = true;

	$tdatatbl_province[".locking"] = false;


$pages = $tdatatbl_province[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_province[".edit"] = true;
	$tdatatbl_province[".afterEditAction"] = 1;
	$tdatatbl_province[".closePopupAfterEdit"] = 1;
	$tdatatbl_province[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_province[".add"] = true;
$tdatatbl_province[".afterAddAction"] = 1;
$tdatatbl_province[".closePopupAfterAdd"] = 1;
$tdatatbl_province[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_province[".list"] = true;
}



$tdatatbl_province[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_province[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_province[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_province[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_province[".printFriendly"] = true;
}



$tdatatbl_province[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_province[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_province[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_province[".isUseAjaxSuggest"] = true;

$tdatatbl_province[".rowHighlite"] = true;



																																										

$tdatatbl_province[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_province[".buttonsAdded"] = false;

$tdatatbl_province[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_province[".isUseTimeForSearch"] = false;


$tdatatbl_province[".badgeColor"] = "8fbc8b";


$tdatatbl_province[".allSearchFields"] = array();
$tdatatbl_province[".filterFields"] = array();
$tdatatbl_province[".requiredSearchFields"] = array();

$tdatatbl_province[".googleLikeFields"] = array();
$tdatatbl_province[".googleLikeFields"][] = "ProvinceID";
$tdatatbl_province[".googleLikeFields"][] = "CountryID";
$tdatatbl_province[".googleLikeFields"][] = "Code";
$tdatatbl_province[".googleLikeFields"][] = "Name";



$tdatatbl_province[".tableType"] = "list";

$tdatatbl_province[".printerPageOrientation"] = 0;
$tdatatbl_province[".nPrinterPageScale"] = 100;

$tdatatbl_province[".nPrinterSplitRecords"] = 40;

$tdatatbl_province[".geocodingEnabled"] = false;





$tdatatbl_province[".isResizeColumns"] = true;





$tdatatbl_province[".pageSize"] = 20;

$tdatatbl_province[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_province[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_province[".orderindexes"] = array();
	$tdatatbl_province[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "Name");



$tdatatbl_province[".sqlHead"] = "SELECT ProvinceID,  CountryID,  Code,  Name";
$tdatatbl_province[".sqlFrom"] = "FROM tbl_province";
$tdatatbl_province[".sqlWhereExpr"] = "";
$tdatatbl_province[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_province[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_province[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_province[".highlightSearchResults"] = true;

$tableKeystbl_province = array();
$tableKeystbl_province[] = "ProvinceID";
$tdatatbl_province[".Keys"] = $tableKeystbl_province;


$tdatatbl_province[".hideMobileList"] = array();




//	ProvinceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProvinceID";
	$fdata["GoodName"] = "ProvinceID";
	$fdata["ownerTable"] = "tbl_province";
	$fdata["Label"] = GetFieldLabel("tbl_province","ProvinceID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ProvinceID";

		$fdata["sourceSingle"] = "ProvinceID";

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


	$tdatatbl_province["ProvinceID"] = $fdata;
		$tdatatbl_province[".searchableFields"][] = "ProvinceID";
//	CountryID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CountryID";
	$fdata["GoodName"] = "CountryID";
	$fdata["ownerTable"] = "tbl_province";
	$fdata["Label"] = GetFieldLabel("tbl_province","CountryID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CountryID";

		$fdata["sourceSingle"] = "CountryID";

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


	$tdatatbl_province["CountryID"] = $fdata;
		$tdatatbl_province[".searchableFields"][] = "CountryID";
//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "tbl_province";
	$fdata["Label"] = GetFieldLabel("tbl_province","Code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Code";

		$fdata["sourceSingle"] = "Code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Code";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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


	$tdatatbl_province["Code"] = $fdata;
		$tdatatbl_province[".searchableFields"][] = "Code";
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "tbl_province";
	$fdata["Label"] = GetFieldLabel("tbl_province","Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Name";

		$fdata["sourceSingle"] = "Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Name";

	
	
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
			$edata["EditParams"].= " maxlength=18";

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


	$tdatatbl_province["Name"] = $fdata;
		$tdatatbl_province[".searchableFields"][] = "Name";


$tables_data["tbl_province"]=&$tdatatbl_province;
$field_labels["tbl_province"] = &$fieldLabelstbl_province;
$fieldToolTips["tbl_province"] = &$fieldToolTipstbl_province;
$placeHolders["tbl_province"] = &$placeHolderstbl_province;
$page_titles["tbl_province"] = &$pageTitlestbl_province;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_province"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_province"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tbl_country";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_country";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_country";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_province"][0] = $masterParams;
				$masterTablesData["tbl_province"][0]["masterKeys"] = array();
	$masterTablesData["tbl_province"][0]["masterKeys"][]="ID";
				$masterTablesData["tbl_province"][0]["detailKeys"] = array();
	$masterTablesData["tbl_province"][0]["detailKeys"][]="CountryID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_province()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ProvinceID,  CountryID,  Code,  Name";
$proto0["m_strFrom"] = "FROM tbl_province";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Name";
	
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
	"m_strName" => "ProvinceID",
	"m_strTable" => "tbl_province",
	"m_srcTableName" => "tbl_province"
));

$proto6["m_sql"] = "ProvinceID";
$proto6["m_srcTableName"] = "tbl_province";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CountryID",
	"m_strTable" => "tbl_province",
	"m_srcTableName" => "tbl_province"
));

$proto8["m_sql"] = "CountryID";
$proto8["m_srcTableName"] = "tbl_province";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Code",
	"m_strTable" => "tbl_province",
	"m_srcTableName" => "tbl_province"
));

$proto10["m_sql"] = "Code";
$proto10["m_srcTableName"] = "tbl_province";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "tbl_province",
	"m_srcTableName" => "tbl_province"
));

$proto12["m_sql"] = "Name";
$proto12["m_srcTableName"] = "tbl_province";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tbl_province";
$proto15["m_srcTableName"] = "tbl_province";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "ProvinceID";
$proto15["m_columns"][] = "CountryID";
$proto15["m_columns"][] = "Code";
$proto15["m_columns"][] = "Name";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "tbl_province";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tbl_province";
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
												$proto18=array();
						$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "tbl_province",
	"m_srcTableName" => "tbl_province"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 1;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tbl_province";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_province = createSqlQuery_tbl_province();


	
		;

				

$tdatatbl_province[".sqlquery"] = $queryData_tbl_province;



$tableEvents["tbl_province"] = new eventsBase;
$tdatatbl_province[".hasEvents"] = false;

?>