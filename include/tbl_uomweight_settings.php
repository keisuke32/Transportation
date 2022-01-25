<?php
$tdatatbl_uomweight = array();
$tdatatbl_uomweight[".searchableFields"] = array();
$tdatatbl_uomweight[".ShortName"] = "tbl_uomweight";
$tdatatbl_uomweight[".OwnerID"] = "";
$tdatatbl_uomweight[".OriginalTable"] = "tbl_uom";


$tdatatbl_uomweight[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_uomweight[".originalPagesByType"] = $tdatatbl_uomweight[".pagesByType"];
$tdatatbl_uomweight[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_uomweight[".originalPages"] = $tdatatbl_uomweight[".pages"];
$tdatatbl_uomweight[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_uomweight[".originalDefaultPages"] = $tdatatbl_uomweight[".defaultPages"];

//	field labels
$fieldLabelstbl_uomweight = array();
$fieldToolTipstbl_uomweight = array();
$pageTitlestbl_uomweight = array();
$placeHolderstbl_uomweight = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_uomweight["English"] = array();
	$fieldToolTipstbl_uomweight["English"] = array();
	$placeHolderstbl_uomweight["English"] = array();
	$pageTitlestbl_uomweight["English"] = array();
	$fieldLabelstbl_uomweight["English"]["ID"] = "ID";
	$fieldToolTipstbl_uomweight["English"]["ID"] = "";
	$placeHolderstbl_uomweight["English"]["ID"] = "";
	$fieldLabelstbl_uomweight["English"]["Code"] = "Code";
	$fieldToolTipstbl_uomweight["English"]["Code"] = "";
	$placeHolderstbl_uomweight["English"]["Code"] = "";
	if (count($fieldToolTipstbl_uomweight["English"]))
		$tdatatbl_uomweight[".isUseToolTips"] = true;
}


	$tdatatbl_uomweight[".NCSearch"] = true;



$tdatatbl_uomweight[".shortTableName"] = "tbl_uomweight";
$tdatatbl_uomweight[".nSecOptions"] = 0;

$tdatatbl_uomweight[".mainTableOwnerID"] = "";
$tdatatbl_uomweight[".entityType"] = 1;
$tdatatbl_uomweight[".connId"] = "logistics_at_localhost";


$tdatatbl_uomweight[".strOriginalTableName"] = "tbl_uom";

	



$tdatatbl_uomweight[".showAddInPopup"] = false;

$tdatatbl_uomweight[".showEditInPopup"] = false;

$tdatatbl_uomweight[".showViewInPopup"] = false;

	$tdatatbl_uomweight[".listAjax"] = true;
//	temporary
//$tdatatbl_uomweight[".listAjax"] = false;

	$tdatatbl_uomweight[".audit"] = true;

	$tdatatbl_uomweight[".locking"] = false;


$pages = $tdatatbl_uomweight[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_uomweight[".edit"] = true;
	$tdatatbl_uomweight[".afterEditAction"] = 1;
	$tdatatbl_uomweight[".closePopupAfterEdit"] = 1;
	$tdatatbl_uomweight[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_uomweight[".add"] = true;
$tdatatbl_uomweight[".afterAddAction"] = 1;
$tdatatbl_uomweight[".closePopupAfterAdd"] = 1;
$tdatatbl_uomweight[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_uomweight[".list"] = true;
}



$tdatatbl_uomweight[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_uomweight[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_uomweight[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_uomweight[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_uomweight[".printFriendly"] = true;
}



$tdatatbl_uomweight[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_uomweight[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_uomweight[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_uomweight[".isUseAjaxSuggest"] = true;

$tdatatbl_uomweight[".rowHighlite"] = true;



																					

$tdatatbl_uomweight[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_uomweight[".buttonsAdded"] = false;

$tdatatbl_uomweight[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_uomweight[".isUseTimeForSearch"] = false;


$tdatatbl_uomweight[".badgeColor"] = "E07878";


$tdatatbl_uomweight[".allSearchFields"] = array();
$tdatatbl_uomweight[".filterFields"] = array();
$tdatatbl_uomweight[".requiredSearchFields"] = array();

$tdatatbl_uomweight[".googleLikeFields"] = array();
$tdatatbl_uomweight[".googleLikeFields"][] = "ID";
$tdatatbl_uomweight[".googleLikeFields"][] = "Code";



$tdatatbl_uomweight[".tableType"] = "list";

$tdatatbl_uomweight[".printerPageOrientation"] = 0;
$tdatatbl_uomweight[".nPrinterPageScale"] = 100;

$tdatatbl_uomweight[".nPrinterSplitRecords"] = 40;

$tdatatbl_uomweight[".geocodingEnabled"] = false;





$tdatatbl_uomweight[".isResizeColumns"] = true;





$tdatatbl_uomweight[".pageSize"] = 20;

$tdatatbl_uomweight[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_uomweight[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_uomweight[".orderindexes"] = array();


$tdatatbl_uomweight[".sqlHead"] = "SELECT ID,  Code";
$tdatatbl_uomweight[".sqlFrom"] = "FROM tbl_uom";
$tdatatbl_uomweight[".sqlWhereExpr"] = "(UOMTypeID = 2)";
$tdatatbl_uomweight[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_uomweight[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_uomweight[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_uomweight[".highlightSearchResults"] = true;

$tableKeystbl_uomweight = array();
$tableKeystbl_uomweight[] = "ID";
$tdatatbl_uomweight[".Keys"] = $tableKeystbl_uomweight;


$tdatatbl_uomweight[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_uom";
	$fdata["Label"] = GetFieldLabel("tbl_uomWeight","ID");
	$fdata["FieldType"] = 16;


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


	$tdatatbl_uomweight["ID"] = $fdata;
		$tdatatbl_uomweight[".searchableFields"][] = "ID";
//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "tbl_uom";
	$fdata["Label"] = GetFieldLabel("tbl_uomWeight","Code");
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
			$edata["EditParams"].= " maxlength=4";

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


	$tdatatbl_uomweight["Code"] = $fdata;
		$tdatatbl_uomweight[".searchableFields"][] = "Code";


$tables_data["tbl_uomWeight"]=&$tdatatbl_uomweight;
$field_labels["tbl_uomWeight"] = &$fieldLabelstbl_uomweight;
$fieldToolTips["tbl_uomWeight"] = &$fieldToolTipstbl_uomweight;
$placeHolders["tbl_uomWeight"] = &$placeHolderstbl_uomweight;
$page_titles["tbl_uomWeight"] = &$pageTitlestbl_uomweight;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_uomWeight"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_uomWeight"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_uomweight()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  Code";
$proto0["m_strFrom"] = "FROM tbl_uom";
$proto0["m_strWhere"] = "(UOMTypeID = 2)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "UOMTypeID = 2";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "UOMTypeID",
	"m_strTable" => "tbl_uom",
	"m_srcTableName" => "tbl_uomWeight"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 2";
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
	"m_strTable" => "tbl_uom",
	"m_srcTableName" => "tbl_uomWeight"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_uomWeight";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Code",
	"m_strTable" => "tbl_uom",
	"m_srcTableName" => "tbl_uomWeight"
));

$proto8["m_sql"] = "Code";
$proto8["m_srcTableName"] = "tbl_uomWeight";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tbl_uom";
$proto11["m_srcTableName"] = "tbl_uomWeight";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID";
$proto11["m_columns"][] = "UOMTypeID";
$proto11["m_columns"][] = "Code";
$proto11["m_columns"][] = "Name";
$proto11["m_columns"][] = "OffCode";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tbl_uom";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tbl_uomWeight";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_uomWeight";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_uomweight = createSqlQuery_tbl_uomweight();


	
		;

		

$tdatatbl_uomweight[".sqlquery"] = $queryData_tbl_uomweight;



$tableEvents["tbl_uomWeight"] = new eventsBase;
$tdatatbl_uomweight[".hasEvents"] = false;

?>