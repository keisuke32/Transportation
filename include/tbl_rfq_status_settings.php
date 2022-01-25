<?php
$tdatatbl_rfq_status = array();
$tdatatbl_rfq_status[".searchableFields"] = array();
$tdatatbl_rfq_status[".ShortName"] = "tbl_rfq_status";
$tdatatbl_rfq_status[".OwnerID"] = "";
$tdatatbl_rfq_status[".OriginalTable"] = "tbl_rfq_status";


$tdatatbl_rfq_status[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatbl_rfq_status[".originalPagesByType"] = $tdatatbl_rfq_status[".pagesByType"];
$tdatatbl_rfq_status[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatbl_rfq_status[".originalPages"] = $tdatatbl_rfq_status[".pages"];
$tdatatbl_rfq_status[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatbl_rfq_status[".originalDefaultPages"] = $tdatatbl_rfq_status[".defaultPages"];

//	field labels
$fieldLabelstbl_rfq_status = array();
$fieldToolTipstbl_rfq_status = array();
$pageTitlestbl_rfq_status = array();
$placeHolderstbl_rfq_status = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_rfq_status["English"] = array();
	$fieldToolTipstbl_rfq_status["English"] = array();
	$placeHolderstbl_rfq_status["English"] = array();
	$pageTitlestbl_rfq_status["English"] = array();
	$fieldLabelstbl_rfq_status["English"]["ID"] = "ID";
	$fieldToolTipstbl_rfq_status["English"]["ID"] = "";
	$placeHolderstbl_rfq_status["English"]["ID"] = "";
	$fieldLabelstbl_rfq_status["English"]["Status"] = "Status";
	$fieldToolTipstbl_rfq_status["English"]["Status"] = "";
	$placeHolderstbl_rfq_status["English"]["Status"] = "";
	if (count($fieldToolTipstbl_rfq_status["English"]))
		$tdatatbl_rfq_status[".isUseToolTips"] = true;
}


	$tdatatbl_rfq_status[".NCSearch"] = true;



$tdatatbl_rfq_status[".shortTableName"] = "tbl_rfq_status";
$tdatatbl_rfq_status[".nSecOptions"] = 0;

$tdatatbl_rfq_status[".mainTableOwnerID"] = "";
$tdatatbl_rfq_status[".entityType"] = 0;
$tdatatbl_rfq_status[".connId"] = "logistics_at_localhost";


$tdatatbl_rfq_status[".strOriginalTableName"] = "tbl_rfq_status";

	



$tdatatbl_rfq_status[".showAddInPopup"] = false;

$tdatatbl_rfq_status[".showEditInPopup"] = false;

$tdatatbl_rfq_status[".showViewInPopup"] = false;

$tdatatbl_rfq_status[".listAjax"] = false;
//	temporary
//$tdatatbl_rfq_status[".listAjax"] = false;

	$tdatatbl_rfq_status[".audit"] = false;

	$tdatatbl_rfq_status[".locking"] = false;


$pages = $tdatatbl_rfq_status[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_rfq_status[".edit"] = true;
	$tdatatbl_rfq_status[".afterEditAction"] = 1;
	$tdatatbl_rfq_status[".closePopupAfterEdit"] = 1;
	$tdatatbl_rfq_status[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_rfq_status[".add"] = true;
$tdatatbl_rfq_status[".afterAddAction"] = 1;
$tdatatbl_rfq_status[".closePopupAfterAdd"] = 1;
$tdatatbl_rfq_status[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_rfq_status[".list"] = true;
}



$tdatatbl_rfq_status[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_rfq_status[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_rfq_status[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_rfq_status[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_rfq_status[".printFriendly"] = true;
}



$tdatatbl_rfq_status[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_rfq_status[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_rfq_status[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_rfq_status[".isUseAjaxSuggest"] = true;

$tdatatbl_rfq_status[".rowHighlite"] = true;



																					

$tdatatbl_rfq_status[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_rfq_status[".buttonsAdded"] = false;

$tdatatbl_rfq_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_rfq_status[".isUseTimeForSearch"] = false;


$tdatatbl_rfq_status[".badgeColor"] = "E07878";


$tdatatbl_rfq_status[".allSearchFields"] = array();
$tdatatbl_rfq_status[".filterFields"] = array();
$tdatatbl_rfq_status[".requiredSearchFields"] = array();

$tdatatbl_rfq_status[".googleLikeFields"] = array();
$tdatatbl_rfq_status[".googleLikeFields"][] = "ID";
$tdatatbl_rfq_status[".googleLikeFields"][] = "Status";



$tdatatbl_rfq_status[".tableType"] = "list";

$tdatatbl_rfq_status[".printerPageOrientation"] = 0;
$tdatatbl_rfq_status[".nPrinterPageScale"] = 100;

$tdatatbl_rfq_status[".nPrinterSplitRecords"] = 40;

$tdatatbl_rfq_status[".geocodingEnabled"] = false;










$tdatatbl_rfq_status[".pageSize"] = 20;

$tdatatbl_rfq_status[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_rfq_status[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_rfq_status[".orderindexes"] = array();


$tdatatbl_rfq_status[".sqlHead"] = "SELECT ID,  	Status";
$tdatatbl_rfq_status[".sqlFrom"] = "FROM tbl_rfq_status";
$tdatatbl_rfq_status[".sqlWhereExpr"] = "";
$tdatatbl_rfq_status[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_rfq_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_rfq_status[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_rfq_status[".highlightSearchResults"] = true;

$tableKeystbl_rfq_status = array();
$tableKeystbl_rfq_status[] = "ID";
$tdatatbl_rfq_status[".Keys"] = $tableKeystbl_rfq_status;


$tdatatbl_rfq_status[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_rfq_status";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_status","ID");
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


	$tdatatbl_rfq_status["ID"] = $fdata;
		$tdatatbl_rfq_status[".searchableFields"][] = "ID";
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "tbl_rfq_status";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_status","Status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Status";

		$fdata["sourceSingle"] = "Status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status";

	
	
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


	$tdatatbl_rfq_status["Status"] = $fdata;
		$tdatatbl_rfq_status[".searchableFields"][] = "Status";


$tables_data["tbl_rfq_status"]=&$tdatatbl_rfq_status;
$field_labels["tbl_rfq_status"] = &$fieldLabelstbl_rfq_status;
$fieldToolTips["tbl_rfq_status"] = &$fieldToolTipstbl_rfq_status;
$placeHolders["tbl_rfq_status"] = &$placeHolderstbl_rfq_status;
$page_titles["tbl_rfq_status"] = &$pageTitlestbl_rfq_status;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_rfq_status"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_rfq_status"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_rfq_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	Status";
$proto0["m_strFrom"] = "FROM tbl_rfq_status";
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
	"m_strTable" => "tbl_rfq_status",
	"m_srcTableName" => "tbl_rfq_status"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_rfq_status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "tbl_rfq_status",
	"m_srcTableName" => "tbl_rfq_status"
));

$proto8["m_sql"] = "Status";
$proto8["m_srcTableName"] = "tbl_rfq_status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tbl_rfq_status";
$proto11["m_srcTableName"] = "tbl_rfq_status";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID";
$proto11["m_columns"][] = "Status";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tbl_rfq_status";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tbl_rfq_status";
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
$proto0["m_srcTableName"]="tbl_rfq_status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_rfq_status = createSqlQuery_tbl_rfq_status();


	
		;

		

$tdatatbl_rfq_status[".sqlquery"] = $queryData_tbl_rfq_status;



$tableEvents["tbl_rfq_status"] = new eventsBase;
$tdatatbl_rfq_status[".hasEvents"] = false;

?>