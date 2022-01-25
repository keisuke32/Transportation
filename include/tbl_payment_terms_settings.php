<?php
$tdatatbl_payment_terms = array();
$tdatatbl_payment_terms[".searchableFields"] = array();
$tdatatbl_payment_terms[".ShortName"] = "tbl_payment_terms";
$tdatatbl_payment_terms[".OwnerID"] = "";
$tdatatbl_payment_terms[".OriginalTable"] = "tbl_payment_terms";


$tdatatbl_payment_terms[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_payment_terms[".originalPagesByType"] = $tdatatbl_payment_terms[".pagesByType"];
$tdatatbl_payment_terms[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_payment_terms[".originalPages"] = $tdatatbl_payment_terms[".pages"];
$tdatatbl_payment_terms[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_payment_terms[".originalDefaultPages"] = $tdatatbl_payment_terms[".defaultPages"];

//	field labels
$fieldLabelstbl_payment_terms = array();
$fieldToolTipstbl_payment_terms = array();
$pageTitlestbl_payment_terms = array();
$placeHolderstbl_payment_terms = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_payment_terms["English"] = array();
	$fieldToolTipstbl_payment_terms["English"] = array();
	$placeHolderstbl_payment_terms["English"] = array();
	$pageTitlestbl_payment_terms["English"] = array();
	$fieldLabelstbl_payment_terms["English"]["ID"] = "ID";
	$fieldToolTipstbl_payment_terms["English"]["ID"] = "";
	$placeHolderstbl_payment_terms["English"]["ID"] = "";
	$fieldLabelstbl_payment_terms["English"]["Description"] = "Description";
	$fieldToolTipstbl_payment_terms["English"]["Description"] = "";
	$placeHolderstbl_payment_terms["English"]["Description"] = "";
	if (count($fieldToolTipstbl_payment_terms["English"]))
		$tdatatbl_payment_terms[".isUseToolTips"] = true;
}


	$tdatatbl_payment_terms[".NCSearch"] = true;



$tdatatbl_payment_terms[".shortTableName"] = "tbl_payment_terms";
$tdatatbl_payment_terms[".nSecOptions"] = 0;

$tdatatbl_payment_terms[".mainTableOwnerID"] = "";
$tdatatbl_payment_terms[".entityType"] = 0;
$tdatatbl_payment_terms[".connId"] = "logistics_at_localhost";


$tdatatbl_payment_terms[".strOriginalTableName"] = "tbl_payment_terms";

	



$tdatatbl_payment_terms[".showAddInPopup"] = false;

$tdatatbl_payment_terms[".showEditInPopup"] = false;

$tdatatbl_payment_terms[".showViewInPopup"] = false;

	$tdatatbl_payment_terms[".listAjax"] = true;
//	temporary
//$tdatatbl_payment_terms[".listAjax"] = false;

	$tdatatbl_payment_terms[".audit"] = true;

	$tdatatbl_payment_terms[".locking"] = false;


$pages = $tdatatbl_payment_terms[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_payment_terms[".edit"] = true;
	$tdatatbl_payment_terms[".afterEditAction"] = 1;
	$tdatatbl_payment_terms[".closePopupAfterEdit"] = 1;
	$tdatatbl_payment_terms[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_payment_terms[".add"] = true;
$tdatatbl_payment_terms[".afterAddAction"] = 1;
$tdatatbl_payment_terms[".closePopupAfterAdd"] = 1;
$tdatatbl_payment_terms[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_payment_terms[".list"] = true;
}



$tdatatbl_payment_terms[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_payment_terms[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_payment_terms[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_payment_terms[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_payment_terms[".printFriendly"] = true;
}



$tdatatbl_payment_terms[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_payment_terms[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_payment_terms[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_payment_terms[".isUseAjaxSuggest"] = true;

$tdatatbl_payment_terms[".rowHighlite"] = true;



																					

$tdatatbl_payment_terms[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_payment_terms[".buttonsAdded"] = false;

$tdatatbl_payment_terms[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_payment_terms[".isUseTimeForSearch"] = false;


$tdatatbl_payment_terms[".badgeColor"] = "008B8B";


$tdatatbl_payment_terms[".allSearchFields"] = array();
$tdatatbl_payment_terms[".filterFields"] = array();
$tdatatbl_payment_terms[".requiredSearchFields"] = array();

$tdatatbl_payment_terms[".googleLikeFields"] = array();
$tdatatbl_payment_terms[".googleLikeFields"][] = "ID";
$tdatatbl_payment_terms[".googleLikeFields"][] = "Description";



$tdatatbl_payment_terms[".tableType"] = "list";

$tdatatbl_payment_terms[".printerPageOrientation"] = 0;
$tdatatbl_payment_terms[".nPrinterPageScale"] = 100;

$tdatatbl_payment_terms[".nPrinterSplitRecords"] = 40;

$tdatatbl_payment_terms[".geocodingEnabled"] = false;





$tdatatbl_payment_terms[".isResizeColumns"] = true;





$tdatatbl_payment_terms[".pageSize"] = 20;

$tdatatbl_payment_terms[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Description";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_payment_terms[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_payment_terms[".orderindexes"] = array();
	$tdatatbl_payment_terms[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "Description");



$tdatatbl_payment_terms[".sqlHead"] = "SELECT ID,  Description";
$tdatatbl_payment_terms[".sqlFrom"] = "FROM tbl_payment_terms";
$tdatatbl_payment_terms[".sqlWhereExpr"] = "";
$tdatatbl_payment_terms[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_payment_terms[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_payment_terms[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_payment_terms[".highlightSearchResults"] = true;

$tableKeystbl_payment_terms = array();
$tableKeystbl_payment_terms[] = "ID";
$tdatatbl_payment_terms[".Keys"] = $tableKeystbl_payment_terms;


$tdatatbl_payment_terms[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_payment_terms";
	$fdata["Label"] = GetFieldLabel("tbl_payment_terms","ID");
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


	$tdatatbl_payment_terms["ID"] = $fdata;
		$tdatatbl_payment_terms[".searchableFields"][] = "ID";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "tbl_payment_terms";
	$fdata["Label"] = GetFieldLabel("tbl_payment_terms","Description");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Description";

		$fdata["sourceSingle"] = "Description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Description";

	
	
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


	$tdatatbl_payment_terms["Description"] = $fdata;
		$tdatatbl_payment_terms[".searchableFields"][] = "Description";


$tables_data["tbl_payment_terms"]=&$tdatatbl_payment_terms;
$field_labels["tbl_payment_terms"] = &$fieldLabelstbl_payment_terms;
$fieldToolTips["tbl_payment_terms"] = &$fieldToolTipstbl_payment_terms;
$placeHolders["tbl_payment_terms"] = &$placeHolderstbl_payment_terms;
$page_titles["tbl_payment_terms"] = &$pageTitlestbl_payment_terms;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_payment_terms"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_payment_terms"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_payment_terms()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  Description";
$proto0["m_strFrom"] = "FROM tbl_payment_terms";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Description";
	
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
	"m_strTable" => "tbl_payment_terms",
	"m_srcTableName" => "tbl_payment_terms"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_payment_terms";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "tbl_payment_terms",
	"m_srcTableName" => "tbl_payment_terms"
));

$proto8["m_sql"] = "Description";
$proto8["m_srcTableName"] = "tbl_payment_terms";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tbl_payment_terms";
$proto11["m_srcTableName"] = "tbl_payment_terms";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID";
$proto11["m_columns"][] = "Description";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tbl_payment_terms";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tbl_payment_terms";
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
												$proto14=array();
						$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "tbl_payment_terms",
	"m_srcTableName" => "tbl_payment_terms"
));

$proto14["m_column"]=$obj;
$proto14["m_bAsc"] = 1;
$proto14["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto14);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tbl_payment_terms";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_payment_terms = createSqlQuery_tbl_payment_terms();


	
		;

		

$tdatatbl_payment_terms[".sqlquery"] = $queryData_tbl_payment_terms;



$tableEvents["tbl_payment_terms"] = new eventsBase;
$tdatatbl_payment_terms[".hasEvents"] = false;

?>