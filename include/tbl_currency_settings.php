<?php
$tdatatbl_currency = array();
$tdatatbl_currency[".searchableFields"] = array();
$tdatatbl_currency[".ShortName"] = "tbl_currency";
$tdatatbl_currency[".OwnerID"] = "";
$tdatatbl_currency[".OriginalTable"] = "tbl_currency";


$tdatatbl_currency[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_currency[".originalPagesByType"] = $tdatatbl_currency[".pagesByType"];
$tdatatbl_currency[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_currency[".originalPages"] = $tdatatbl_currency[".pages"];
$tdatatbl_currency[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_currency[".originalDefaultPages"] = $tdatatbl_currency[".defaultPages"];

//	field labels
$fieldLabelstbl_currency = array();
$fieldToolTipstbl_currency = array();
$pageTitlestbl_currency = array();
$placeHolderstbl_currency = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_currency["English"] = array();
	$fieldToolTipstbl_currency["English"] = array();
	$placeHolderstbl_currency["English"] = array();
	$pageTitlestbl_currency["English"] = array();
	$fieldLabelstbl_currency["English"]["ID"] = "ID";
	$fieldToolTipstbl_currency["English"]["ID"] = "";
	$placeHolderstbl_currency["English"]["ID"] = "";
	$fieldLabelstbl_currency["English"]["Symbol"] = "Symbol";
	$fieldToolTipstbl_currency["English"]["Symbol"] = "";
	$placeHolderstbl_currency["English"]["Symbol"] = "";
	$fieldLabelstbl_currency["English"]["Code"] = "Code";
	$fieldToolTipstbl_currency["English"]["Code"] = "";
	$placeHolderstbl_currency["English"]["Code"] = "";
	$fieldLabelstbl_currency["English"]["Name"] = "Name";
	$fieldToolTipstbl_currency["English"]["Name"] = "";
	$placeHolderstbl_currency["English"]["Name"] = "";
	if (count($fieldToolTipstbl_currency["English"]))
		$tdatatbl_currency[".isUseToolTips"] = true;
}


	$tdatatbl_currency[".NCSearch"] = true;



$tdatatbl_currency[".shortTableName"] = "tbl_currency";
$tdatatbl_currency[".nSecOptions"] = 0;

$tdatatbl_currency[".mainTableOwnerID"] = "";
$tdatatbl_currency[".entityType"] = 0;
$tdatatbl_currency[".connId"] = "logistics_at_localhost";


$tdatatbl_currency[".strOriginalTableName"] = "tbl_currency";

	



$tdatatbl_currency[".showAddInPopup"] = false;

$tdatatbl_currency[".showEditInPopup"] = false;

$tdatatbl_currency[".showViewInPopup"] = false;

	$tdatatbl_currency[".listAjax"] = true;
//	temporary
//$tdatatbl_currency[".listAjax"] = false;

	$tdatatbl_currency[".audit"] = true;

	$tdatatbl_currency[".locking"] = false;


$pages = $tdatatbl_currency[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_currency[".edit"] = true;
	$tdatatbl_currency[".afterEditAction"] = 1;
	$tdatatbl_currency[".closePopupAfterEdit"] = 1;
	$tdatatbl_currency[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_currency[".add"] = true;
$tdatatbl_currency[".afterAddAction"] = 1;
$tdatatbl_currency[".closePopupAfterAdd"] = 1;
$tdatatbl_currency[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_currency[".list"] = true;
}



$tdatatbl_currency[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_currency[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_currency[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_currency[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_currency[".printFriendly"] = true;
}



$tdatatbl_currency[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_currency[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_currency[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_currency[".isUseAjaxSuggest"] = true;

$tdatatbl_currency[".rowHighlite"] = true;



																					

$tdatatbl_currency[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_currency[".buttonsAdded"] = false;

$tdatatbl_currency[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_currency[".isUseTimeForSearch"] = false;


$tdatatbl_currency[".badgeColor"] = "778899";


$tdatatbl_currency[".allSearchFields"] = array();
$tdatatbl_currency[".filterFields"] = array();
$tdatatbl_currency[".requiredSearchFields"] = array();

$tdatatbl_currency[".googleLikeFields"] = array();
$tdatatbl_currency[".googleLikeFields"][] = "ID";
$tdatatbl_currency[".googleLikeFields"][] = "Symbol";
$tdatatbl_currency[".googleLikeFields"][] = "Code";
$tdatatbl_currency[".googleLikeFields"][] = "Name";



$tdatatbl_currency[".tableType"] = "list";

$tdatatbl_currency[".printerPageOrientation"] = 0;
$tdatatbl_currency[".nPrinterPageScale"] = 100;

$tdatatbl_currency[".nPrinterSplitRecords"] = 40;

$tdatatbl_currency[".geocodingEnabled"] = false;





$tdatatbl_currency[".isResizeColumns"] = true;





$tdatatbl_currency[".pageSize"] = 20;

$tdatatbl_currency[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Code";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_currency[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_currency[".orderindexes"] = array();
	$tdatatbl_currency[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "Code");



$tdatatbl_currency[".sqlHead"] = "SELECT ID,  Symbol,  Code,  Name";
$tdatatbl_currency[".sqlFrom"] = "FROM tbl_currency";
$tdatatbl_currency[".sqlWhereExpr"] = "";
$tdatatbl_currency[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_currency[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_currency[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_currency[".highlightSearchResults"] = true;

$tableKeystbl_currency = array();
$tableKeystbl_currency[] = "ID";
$tdatatbl_currency[".Keys"] = $tableKeystbl_currency;


$tdatatbl_currency[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_currency";
	$fdata["Label"] = GetFieldLabel("tbl_currency","ID");
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


	$tdatatbl_currency["ID"] = $fdata;
		$tdatatbl_currency[".searchableFields"][] = "ID";
//	Symbol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Symbol";
	$fdata["GoodName"] = "Symbol";
	$fdata["ownerTable"] = "tbl_currency";
	$fdata["Label"] = GetFieldLabel("tbl_currency","Symbol");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Symbol";

		$fdata["sourceSingle"] = "Symbol";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Symbol";

	
	
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
			$edata["EditParams"].= " maxlength=1";

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


	$tdatatbl_currency["Symbol"] = $fdata;
		$tdatatbl_currency[".searchableFields"][] = "Symbol";
//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "tbl_currency";
	$fdata["Label"] = GetFieldLabel("tbl_currency","Code");
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


	$tdatatbl_currency["Code"] = $fdata;
		$tdatatbl_currency[".searchableFields"][] = "Code";
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "tbl_currency";
	$fdata["Label"] = GetFieldLabel("tbl_currency","Name");
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
			$edata["EditParams"].= " maxlength=40";

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


	$tdatatbl_currency["Name"] = $fdata;
		$tdatatbl_currency[".searchableFields"][] = "Name";


$tables_data["tbl_currency"]=&$tdatatbl_currency;
$field_labels["tbl_currency"] = &$fieldLabelstbl_currency;
$fieldToolTips["tbl_currency"] = &$fieldToolTipstbl_currency;
$placeHolders["tbl_currency"] = &$placeHolderstbl_currency;
$page_titles["tbl_currency"] = &$pageTitlestbl_currency;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_currency"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_currency"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_currency()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  Symbol,  Code,  Name";
$proto0["m_strFrom"] = "FROM tbl_currency";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Code";
	
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
	"m_strTable" => "tbl_currency",
	"m_srcTableName" => "tbl_currency"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_currency";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Symbol",
	"m_strTable" => "tbl_currency",
	"m_srcTableName" => "tbl_currency"
));

$proto8["m_sql"] = "Symbol";
$proto8["m_srcTableName"] = "tbl_currency";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Code",
	"m_strTable" => "tbl_currency",
	"m_srcTableName" => "tbl_currency"
));

$proto10["m_sql"] = "Code";
$proto10["m_srcTableName"] = "tbl_currency";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "tbl_currency",
	"m_srcTableName" => "tbl_currency"
));

$proto12["m_sql"] = "Name";
$proto12["m_srcTableName"] = "tbl_currency";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tbl_currency";
$proto15["m_srcTableName"] = "tbl_currency";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "ID";
$proto15["m_columns"][] = "Symbol";
$proto15["m_columns"][] = "Code";
$proto15["m_columns"][] = "Name";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "tbl_currency";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tbl_currency";
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
	"m_strName" => "Code",
	"m_strTable" => "tbl_currency",
	"m_srcTableName" => "tbl_currency"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 1;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tbl_currency";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_currency = createSqlQuery_tbl_currency();


	
		;

				

$tdatatbl_currency[".sqlquery"] = $queryData_tbl_currency;



$tableEvents["tbl_currency"] = new eventsBase;
$tdatatbl_currency[".hasEvents"] = false;

?>