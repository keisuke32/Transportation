<?php
$tdatatbl_country = array();
$tdatatbl_country[".searchableFields"] = array();
$tdatatbl_country[".ShortName"] = "tbl_country";
$tdatatbl_country[".OwnerID"] = "";
$tdatatbl_country[".OriginalTable"] = "tbl_country";


$tdatatbl_country[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatatbl_country[".originalPagesByType"] = $tdatatbl_country[".pagesByType"];
$tdatatbl_country[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatatbl_country[".originalPages"] = $tdatatbl_country[".pages"];
$tdatatbl_country[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatatbl_country[".originalDefaultPages"] = $tdatatbl_country[".defaultPages"];

//	field labels
$fieldLabelstbl_country = array();
$fieldToolTipstbl_country = array();
$pageTitlestbl_country = array();
$placeHolderstbl_country = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_country["English"] = array();
	$fieldToolTipstbl_country["English"] = array();
	$placeHolderstbl_country["English"] = array();
	$pageTitlestbl_country["English"] = array();
	$fieldLabelstbl_country["English"]["ID"] = "ID";
	$fieldToolTipstbl_country["English"]["ID"] = "";
	$placeHolderstbl_country["English"]["ID"] = "";
	$fieldLabelstbl_country["English"]["Name"] = "Name";
	$fieldToolTipstbl_country["English"]["Name"] = "";
	$placeHolderstbl_country["English"]["Name"] = "";
	$fieldLabelstbl_country["English"]["Code"] = "Code";
	$fieldToolTipstbl_country["English"]["Code"] = "";
	$placeHolderstbl_country["English"]["Code"] = "";
	$fieldLabelstbl_country["English"]["CurrencyID"] = "Currency ID";
	$fieldToolTipstbl_country["English"]["CurrencyID"] = "";
	$placeHolderstbl_country["English"]["CurrencyID"] = "";
	if (count($fieldToolTipstbl_country["English"]))
		$tdatatbl_country[".isUseToolTips"] = true;
}


	$tdatatbl_country[".NCSearch"] = true;



$tdatatbl_country[".shortTableName"] = "tbl_country";
$tdatatbl_country[".nSecOptions"] = 0;

$tdatatbl_country[".mainTableOwnerID"] = "";
$tdatatbl_country[".entityType"] = 0;
$tdatatbl_country[".connId"] = "logistics_at_localhost";


$tdatatbl_country[".strOriginalTableName"] = "tbl_country";

	



$tdatatbl_country[".showAddInPopup"] = false;

$tdatatbl_country[".showEditInPopup"] = false;

$tdatatbl_country[".showViewInPopup"] = false;

	$tdatatbl_country[".listAjax"] = true;
//	temporary
//$tdatatbl_country[".listAjax"] = false;

	$tdatatbl_country[".audit"] = true;

	$tdatatbl_country[".locking"] = false;


$pages = $tdatatbl_country[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_country[".edit"] = true;
	$tdatatbl_country[".afterEditAction"] = 1;
	$tdatatbl_country[".closePopupAfterEdit"] = 1;
	$tdatatbl_country[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_country[".add"] = true;
$tdatatbl_country[".afterAddAction"] = 1;
$tdatatbl_country[".closePopupAfterAdd"] = 1;
$tdatatbl_country[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_country[".list"] = true;
}



$tdatatbl_country[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_country[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_country[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_country[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_country[".printFriendly"] = true;
}



$tdatatbl_country[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_country[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_country[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_country[".isUseAjaxSuggest"] = true;

$tdatatbl_country[".rowHighlite"] = true;



																					

$tdatatbl_country[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_country[".buttonsAdded"] = false;

$tdatatbl_country[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_country[".isUseTimeForSearch"] = false;


$tdatatbl_country[".badgeColor"] = "BC8F8F";


$tdatatbl_country[".allSearchFields"] = array();
$tdatatbl_country[".filterFields"] = array();
$tdatatbl_country[".requiredSearchFields"] = array();

$tdatatbl_country[".googleLikeFields"] = array();
$tdatatbl_country[".googleLikeFields"][] = "ID";
$tdatatbl_country[".googleLikeFields"][] = "Name";
$tdatatbl_country[".googleLikeFields"][] = "Code";
$tdatatbl_country[".googleLikeFields"][] = "CurrencyID";



$tdatatbl_country[".tableType"] = "list";

$tdatatbl_country[".printerPageOrientation"] = 0;
$tdatatbl_country[".nPrinterPageScale"] = 100;

$tdatatbl_country[".nPrinterSplitRecords"] = 40;

$tdatatbl_country[".geocodingEnabled"] = false;





$tdatatbl_country[".isResizeColumns"] = true;





$tdatatbl_country[".pageSize"] = 20;

$tdatatbl_country[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_country[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_country[".orderindexes"] = array();
	$tdatatbl_country[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "Name");



$tdatatbl_country[".sqlHead"] = "SELECT ID,  Name,  Code,  CurrencyID";
$tdatatbl_country[".sqlFrom"] = "FROM tbl_country";
$tdatatbl_country[".sqlWhereExpr"] = "";
$tdatatbl_country[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_country[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_country[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_country[".highlightSearchResults"] = true;

$tableKeystbl_country = array();
$tableKeystbl_country[] = "ID";
$tdatatbl_country[".Keys"] = $tableKeystbl_country;


$tdatatbl_country[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_country";
	$fdata["Label"] = GetFieldLabel("tbl_country","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

		$fdata["sourceSingle"] = "ID";

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


	$tdatatbl_country["ID"] = $fdata;
		$tdatatbl_country[".searchableFields"][] = "ID";
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "tbl_country";
	$fdata["Label"] = GetFieldLabel("tbl_country","Name");
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
			$edata["EditParams"].= " maxlength=35";

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


	$tdatatbl_country["Name"] = $fdata;
		$tdatatbl_country[".searchableFields"][] = "Name";
//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "tbl_country";
	$fdata["Label"] = GetFieldLabel("tbl_country","Code");
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


	$tdatatbl_country["Code"] = $fdata;
		$tdatatbl_country[".searchableFields"][] = "Code";
//	CurrencyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CurrencyID";
	$fdata["GoodName"] = "CurrencyID";
	$fdata["ownerTable"] = "tbl_country";
	$fdata["Label"] = GetFieldLabel("tbl_country","CurrencyID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CurrencyID";

		$fdata["sourceSingle"] = "CurrencyID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CurrencyID";

	
	
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

	
		
	$edata["LinkField"] = "ID";
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


	$tdatatbl_country["CurrencyID"] = $fdata;
		$tdatatbl_country[".searchableFields"][] = "CurrencyID";


$tables_data["tbl_country"]=&$tdatatbl_country;
$field_labels["tbl_country"] = &$fieldLabelstbl_country;
$fieldToolTips["tbl_country"] = &$fieldToolTipstbl_country;
$placeHolders["tbl_country"] = &$placeHolderstbl_country;
$page_titles["tbl_country"] = &$pageTitlestbl_country;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_country"] = array();
//	tbl_province
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_province";
		$detailsParam["dOriginalTable"] = "tbl_province";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_province";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_province");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_country"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_country"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_country"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["tbl_country"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_country"][$dIndex]["detailKeys"][]="CountryID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_country"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_country()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  Name,  Code,  CurrencyID";
$proto0["m_strFrom"] = "FROM tbl_country";
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
	"m_strName" => "ID",
	"m_strTable" => "tbl_country",
	"m_srcTableName" => "tbl_country"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_country";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "tbl_country",
	"m_srcTableName" => "tbl_country"
));

$proto8["m_sql"] = "Name";
$proto8["m_srcTableName"] = "tbl_country";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Code",
	"m_strTable" => "tbl_country",
	"m_srcTableName" => "tbl_country"
));

$proto10["m_sql"] = "Code";
$proto10["m_srcTableName"] = "tbl_country";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CurrencyID",
	"m_strTable" => "tbl_country",
	"m_srcTableName" => "tbl_country"
));

$proto12["m_sql"] = "CurrencyID";
$proto12["m_srcTableName"] = "tbl_country";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tbl_country";
$proto15["m_srcTableName"] = "tbl_country";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "ID";
$proto15["m_columns"][] = "Name";
$proto15["m_columns"][] = "Code";
$proto15["m_columns"][] = "CurrencyID";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "tbl_country";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tbl_country";
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
	"m_strTable" => "tbl_country",
	"m_srcTableName" => "tbl_country"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 1;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tbl_country";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_country = createSqlQuery_tbl_country();


	
		;

				

$tdatatbl_country[".sqlquery"] = $queryData_tbl_country;



$tableEvents["tbl_country"] = new eventsBase;
$tdatatbl_country[".hasEvents"] = false;

?>