<?php
$tdatatbl_credit_approval_status = array();
$tdatatbl_credit_approval_status[".searchableFields"] = array();
$tdatatbl_credit_approval_status[".ShortName"] = "tbl_credit_approval_status";
$tdatatbl_credit_approval_status[".OwnerID"] = "";
$tdatatbl_credit_approval_status[".OriginalTable"] = "tbl_credit_approval_Status";


$tdatatbl_credit_approval_status[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_credit_approval_status[".originalPagesByType"] = $tdatatbl_credit_approval_status[".pagesByType"];
$tdatatbl_credit_approval_status[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_credit_approval_status[".originalPages"] = $tdatatbl_credit_approval_status[".pages"];
$tdatatbl_credit_approval_status[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_credit_approval_status[".originalDefaultPages"] = $tdatatbl_credit_approval_status[".defaultPages"];

//	field labels
$fieldLabelstbl_credit_approval_status = array();
$fieldToolTipstbl_credit_approval_status = array();
$pageTitlestbl_credit_approval_status = array();
$placeHolderstbl_credit_approval_status = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_credit_approval_status["English"] = array();
	$fieldToolTipstbl_credit_approval_status["English"] = array();
	$placeHolderstbl_credit_approval_status["English"] = array();
	$pageTitlestbl_credit_approval_status["English"] = array();
	$fieldLabelstbl_credit_approval_status["English"]["ID"] = "ID";
	$fieldToolTipstbl_credit_approval_status["English"]["ID"] = "";
	$placeHolderstbl_credit_approval_status["English"]["ID"] = "";
	$fieldLabelstbl_credit_approval_status["English"]["StatusName"] = "Status Name";
	$fieldToolTipstbl_credit_approval_status["English"]["StatusName"] = "";
	$placeHolderstbl_credit_approval_status["English"]["StatusName"] = "";
	if (count($fieldToolTipstbl_credit_approval_status["English"]))
		$tdatatbl_credit_approval_status[".isUseToolTips"] = true;
}


	$tdatatbl_credit_approval_status[".NCSearch"] = true;



$tdatatbl_credit_approval_status[".shortTableName"] = "tbl_credit_approval_status";
$tdatatbl_credit_approval_status[".nSecOptions"] = 0;

$tdatatbl_credit_approval_status[".mainTableOwnerID"] = "";
$tdatatbl_credit_approval_status[".entityType"] = 0;
$tdatatbl_credit_approval_status[".connId"] = "logistics_at_localhost";


$tdatatbl_credit_approval_status[".strOriginalTableName"] = "tbl_credit_approval_Status";

	



$tdatatbl_credit_approval_status[".showAddInPopup"] = false;

$tdatatbl_credit_approval_status[".showEditInPopup"] = false;

$tdatatbl_credit_approval_status[".showViewInPopup"] = false;

$tdatatbl_credit_approval_status[".listAjax"] = false;
//	temporary
//$tdatatbl_credit_approval_status[".listAjax"] = false;

	$tdatatbl_credit_approval_status[".audit"] = true;

	$tdatatbl_credit_approval_status[".locking"] = false;


$pages = $tdatatbl_credit_approval_status[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_credit_approval_status[".edit"] = true;
	$tdatatbl_credit_approval_status[".afterEditAction"] = 1;
	$tdatatbl_credit_approval_status[".closePopupAfterEdit"] = 1;
	$tdatatbl_credit_approval_status[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_credit_approval_status[".add"] = true;
$tdatatbl_credit_approval_status[".afterAddAction"] = 1;
$tdatatbl_credit_approval_status[".closePopupAfterAdd"] = 1;
$tdatatbl_credit_approval_status[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_credit_approval_status[".list"] = true;
}



$tdatatbl_credit_approval_status[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_credit_approval_status[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_credit_approval_status[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_credit_approval_status[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_credit_approval_status[".printFriendly"] = true;
}



$tdatatbl_credit_approval_status[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_credit_approval_status[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_credit_approval_status[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_credit_approval_status[".isUseAjaxSuggest"] = true;

$tdatatbl_credit_approval_status[".rowHighlite"] = true;



																					

$tdatatbl_credit_approval_status[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_credit_approval_status[".buttonsAdded"] = false;

$tdatatbl_credit_approval_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_credit_approval_status[".isUseTimeForSearch"] = false;


$tdatatbl_credit_approval_status[".badgeColor"] = "EDCA00";


$tdatatbl_credit_approval_status[".allSearchFields"] = array();
$tdatatbl_credit_approval_status[".filterFields"] = array();
$tdatatbl_credit_approval_status[".requiredSearchFields"] = array();

$tdatatbl_credit_approval_status[".googleLikeFields"] = array();
$tdatatbl_credit_approval_status[".googleLikeFields"][] = "ID";
$tdatatbl_credit_approval_status[".googleLikeFields"][] = "StatusName";



$tdatatbl_credit_approval_status[".tableType"] = "list";

$tdatatbl_credit_approval_status[".printerPageOrientation"] = 0;
$tdatatbl_credit_approval_status[".nPrinterPageScale"] = 100;

$tdatatbl_credit_approval_status[".nPrinterSplitRecords"] = 40;

$tdatatbl_credit_approval_status[".geocodingEnabled"] = false;










$tdatatbl_credit_approval_status[".pageSize"] = 20;

$tdatatbl_credit_approval_status[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_credit_approval_status[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_credit_approval_status[".orderindexes"] = array();


$tdatatbl_credit_approval_status[".sqlHead"] = "SELECT ID,  	StatusName";
$tdatatbl_credit_approval_status[".sqlFrom"] = "FROM tbl_credit_approval_Status";
$tdatatbl_credit_approval_status[".sqlWhereExpr"] = "";
$tdatatbl_credit_approval_status[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_credit_approval_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_credit_approval_status[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_credit_approval_status[".highlightSearchResults"] = true;

$tableKeystbl_credit_approval_status = array();
$tableKeystbl_credit_approval_status[] = "ID";
$tdatatbl_credit_approval_status[".Keys"] = $tableKeystbl_credit_approval_status;


$tdatatbl_credit_approval_status[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_credit_approval_Status";
	$fdata["Label"] = GetFieldLabel("tbl_credit_approval_Status","ID");
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


	$tdatatbl_credit_approval_status["ID"] = $fdata;
		$tdatatbl_credit_approval_status[".searchableFields"][] = "ID";
//	StatusName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StatusName";
	$fdata["GoodName"] = "StatusName";
	$fdata["ownerTable"] = "tbl_credit_approval_Status";
	$fdata["Label"] = GetFieldLabel("tbl_credit_approval_Status","StatusName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "StatusName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "StatusName";

	
	
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


	$tdatatbl_credit_approval_status["StatusName"] = $fdata;
		$tdatatbl_credit_approval_status[".searchableFields"][] = "StatusName";


$tables_data["tbl_credit_approval_Status"]=&$tdatatbl_credit_approval_status;
$field_labels["tbl_credit_approval_Status"] = &$fieldLabelstbl_credit_approval_status;
$fieldToolTips["tbl_credit_approval_Status"] = &$fieldToolTipstbl_credit_approval_status;
$placeHolders["tbl_credit_approval_Status"] = &$placeHolderstbl_credit_approval_status;
$page_titles["tbl_credit_approval_Status"] = &$pageTitlestbl_credit_approval_status;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_credit_approval_Status"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_credit_approval_Status"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_credit_approval_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	StatusName";
$proto0["m_strFrom"] = "FROM tbl_credit_approval_Status";
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
	"m_strTable" => "tbl_credit_approval_Status",
	"m_srcTableName" => "tbl_credit_approval_Status"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_credit_approval_Status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "StatusName",
	"m_strTable" => "tbl_credit_approval_Status",
	"m_srcTableName" => "tbl_credit_approval_Status"
));

$proto8["m_sql"] = "StatusName";
$proto8["m_srcTableName"] = "tbl_credit_approval_Status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tbl_credit_approval_Status";
$proto11["m_srcTableName"] = "tbl_credit_approval_Status";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID";
$proto11["m_columns"][] = "StatusName";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tbl_credit_approval_Status";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tbl_credit_approval_Status";
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
$proto0["m_srcTableName"]="tbl_credit_approval_Status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_credit_approval_status = createSqlQuery_tbl_credit_approval_status();


	
		;

		

$tdatatbl_credit_approval_status[".sqlquery"] = $queryData_tbl_credit_approval_status;



$tableEvents["tbl_credit_approval_Status"] = new eventsBase;
$tdatatbl_credit_approval_status[".hasEvents"] = false;

?>