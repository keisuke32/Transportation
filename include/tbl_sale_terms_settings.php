<?php
$tdatatbl_sale_terms = array();
$tdatatbl_sale_terms[".searchableFields"] = array();
$tdatatbl_sale_terms[".ShortName"] = "tbl_sale_terms";
$tdatatbl_sale_terms[".OwnerID"] = "";
$tdatatbl_sale_terms[".OriginalTable"] = "tbl_sale_terms";


$tdatatbl_sale_terms[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_sale_terms[".originalPagesByType"] = $tdatatbl_sale_terms[".pagesByType"];
$tdatatbl_sale_terms[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_sale_terms[".originalPages"] = $tdatatbl_sale_terms[".pages"];
$tdatatbl_sale_terms[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_sale_terms[".originalDefaultPages"] = $tdatatbl_sale_terms[".defaultPages"];

//	field labels
$fieldLabelstbl_sale_terms = array();
$fieldToolTipstbl_sale_terms = array();
$pageTitlestbl_sale_terms = array();
$placeHolderstbl_sale_terms = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_sale_terms["English"] = array();
	$fieldToolTipstbl_sale_terms["English"] = array();
	$placeHolderstbl_sale_terms["English"] = array();
	$pageTitlestbl_sale_terms["English"] = array();
	$fieldLabelstbl_sale_terms["English"]["ID"] = "ID";
	$fieldToolTipstbl_sale_terms["English"]["ID"] = "";
	$placeHolderstbl_sale_terms["English"]["ID"] = "";
	$fieldLabelstbl_sale_terms["English"]["Code"] = "Code";
	$fieldToolTipstbl_sale_terms["English"]["Code"] = "";
	$placeHolderstbl_sale_terms["English"]["Code"] = "";
	$fieldLabelstbl_sale_terms["English"]["Name"] = "Name";
	$fieldToolTipstbl_sale_terms["English"]["Name"] = "";
	$placeHolderstbl_sale_terms["English"]["Name"] = "";
	if (count($fieldToolTipstbl_sale_terms["English"]))
		$tdatatbl_sale_terms[".isUseToolTips"] = true;
}


	$tdatatbl_sale_terms[".NCSearch"] = true;



$tdatatbl_sale_terms[".shortTableName"] = "tbl_sale_terms";
$tdatatbl_sale_terms[".nSecOptions"] = 0;

$tdatatbl_sale_terms[".mainTableOwnerID"] = "";
$tdatatbl_sale_terms[".entityType"] = 0;
$tdatatbl_sale_terms[".connId"] = "logistics_at_localhost";


$tdatatbl_sale_terms[".strOriginalTableName"] = "tbl_sale_terms";

	



$tdatatbl_sale_terms[".showAddInPopup"] = false;

$tdatatbl_sale_terms[".showEditInPopup"] = false;

$tdatatbl_sale_terms[".showViewInPopup"] = false;

	$tdatatbl_sale_terms[".listAjax"] = true;
//	temporary
//$tdatatbl_sale_terms[".listAjax"] = false;

	$tdatatbl_sale_terms[".audit"] = true;

	$tdatatbl_sale_terms[".locking"] = false;


$pages = $tdatatbl_sale_terms[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_sale_terms[".edit"] = true;
	$tdatatbl_sale_terms[".afterEditAction"] = 1;
	$tdatatbl_sale_terms[".closePopupAfterEdit"] = 1;
	$tdatatbl_sale_terms[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_sale_terms[".add"] = true;
$tdatatbl_sale_terms[".afterAddAction"] = 1;
$tdatatbl_sale_terms[".closePopupAfterAdd"] = 1;
$tdatatbl_sale_terms[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_sale_terms[".list"] = true;
}



$tdatatbl_sale_terms[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_sale_terms[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_sale_terms[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_sale_terms[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_sale_terms[".printFriendly"] = true;
}



$tdatatbl_sale_terms[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_sale_terms[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_sale_terms[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_sale_terms[".isUseAjaxSuggest"] = true;

$tdatatbl_sale_terms[".rowHighlite"] = true;



																					

$tdatatbl_sale_terms[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_sale_terms[".buttonsAdded"] = false;

$tdatatbl_sale_terms[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_sale_terms[".isUseTimeForSearch"] = false;


$tdatatbl_sale_terms[".badgeColor"] = "CFAE83";


$tdatatbl_sale_terms[".allSearchFields"] = array();
$tdatatbl_sale_terms[".filterFields"] = array();
$tdatatbl_sale_terms[".requiredSearchFields"] = array();

$tdatatbl_sale_terms[".googleLikeFields"] = array();
$tdatatbl_sale_terms[".googleLikeFields"][] = "ID";
$tdatatbl_sale_terms[".googleLikeFields"][] = "Code";
$tdatatbl_sale_terms[".googleLikeFields"][] = "Name";



$tdatatbl_sale_terms[".tableType"] = "list";

$tdatatbl_sale_terms[".printerPageOrientation"] = 0;
$tdatatbl_sale_terms[".nPrinterPageScale"] = 100;

$tdatatbl_sale_terms[".nPrinterSplitRecords"] = 40;

$tdatatbl_sale_terms[".geocodingEnabled"] = false;





$tdatatbl_sale_terms[".isResizeColumns"] = true;





$tdatatbl_sale_terms[".pageSize"] = 20;

$tdatatbl_sale_terms[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_sale_terms[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_sale_terms[".orderindexes"] = array();
	$tdatatbl_sale_terms[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "Name");



$tdatatbl_sale_terms[".sqlHead"] = "SELECT ID,  Code,  Name";
$tdatatbl_sale_terms[".sqlFrom"] = "FROM tbl_sale_terms";
$tdatatbl_sale_terms[".sqlWhereExpr"] = "";
$tdatatbl_sale_terms[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_sale_terms[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_sale_terms[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_sale_terms[".highlightSearchResults"] = true;

$tableKeystbl_sale_terms = array();
$tableKeystbl_sale_terms[] = "ID";
$tdatatbl_sale_terms[".Keys"] = $tableKeystbl_sale_terms;


$tdatatbl_sale_terms[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_sale_terms";
	$fdata["Label"] = GetFieldLabel("tbl_sale_terms","ID");
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


	$tdatatbl_sale_terms["ID"] = $fdata;
		$tdatatbl_sale_terms[".searchableFields"][] = "ID";
//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "tbl_sale_terms";
	$fdata["Label"] = GetFieldLabel("tbl_sale_terms","Code");
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


	$tdatatbl_sale_terms["Code"] = $fdata;
		$tdatatbl_sale_terms[".searchableFields"][] = "Code";
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "tbl_sale_terms";
	$fdata["Label"] = GetFieldLabel("tbl_sale_terms","Name");
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


	$tdatatbl_sale_terms["Name"] = $fdata;
		$tdatatbl_sale_terms[".searchableFields"][] = "Name";


$tables_data["tbl_sale_terms"]=&$tdatatbl_sale_terms;
$field_labels["tbl_sale_terms"] = &$fieldLabelstbl_sale_terms;
$fieldToolTips["tbl_sale_terms"] = &$fieldToolTipstbl_sale_terms;
$placeHolders["tbl_sale_terms"] = &$placeHolderstbl_sale_terms;
$page_titles["tbl_sale_terms"] = &$pageTitlestbl_sale_terms;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_sale_terms"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_sale_terms"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_sale_terms()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  Code,  Name";
$proto0["m_strFrom"] = "FROM tbl_sale_terms";
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
	"m_strTable" => "tbl_sale_terms",
	"m_srcTableName" => "tbl_sale_terms"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_sale_terms";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Code",
	"m_strTable" => "tbl_sale_terms",
	"m_srcTableName" => "tbl_sale_terms"
));

$proto8["m_sql"] = "Code";
$proto8["m_srcTableName"] = "tbl_sale_terms";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "tbl_sale_terms",
	"m_srcTableName" => "tbl_sale_terms"
));

$proto10["m_sql"] = "Name";
$proto10["m_srcTableName"] = "tbl_sale_terms";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tbl_sale_terms";
$proto13["m_srcTableName"] = "tbl_sale_terms";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ID";
$proto13["m_columns"][] = "Code";
$proto13["m_columns"][] = "Name";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tbl_sale_terms";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tbl_sale_terms";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto16=array();
						$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "tbl_sale_terms",
	"m_srcTableName" => "tbl_sale_terms"
));

$proto16["m_column"]=$obj;
$proto16["m_bAsc"] = 1;
$proto16["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto16);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tbl_sale_terms";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_sale_terms = createSqlQuery_tbl_sale_terms();


	
		;

			

$tdatatbl_sale_terms[".sqlquery"] = $queryData_tbl_sale_terms;



$tableEvents["tbl_sale_terms"] = new eventsBase;
$tdatatbl_sale_terms[".hasEvents"] = false;

?>