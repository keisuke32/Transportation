<?php
$tdatatbl_uomhandling = array();
$tdatatbl_uomhandling[".searchableFields"] = array();
$tdatatbl_uomhandling[".ShortName"] = "tbl_uomhandling";
$tdatatbl_uomhandling[".OwnerID"] = "";
$tdatatbl_uomhandling[".OriginalTable"] = "tbl_uom";


$tdatatbl_uomhandling[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_uomhandling[".originalPagesByType"] = $tdatatbl_uomhandling[".pagesByType"];
$tdatatbl_uomhandling[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_uomhandling[".originalPages"] = $tdatatbl_uomhandling[".pages"];
$tdatatbl_uomhandling[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_uomhandling[".originalDefaultPages"] = $tdatatbl_uomhandling[".defaultPages"];

//	field labels
$fieldLabelstbl_uomhandling = array();
$fieldToolTipstbl_uomhandling = array();
$pageTitlestbl_uomhandling = array();
$placeHolderstbl_uomhandling = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_uomhandling["English"] = array();
	$fieldToolTipstbl_uomhandling["English"] = array();
	$placeHolderstbl_uomhandling["English"] = array();
	$pageTitlestbl_uomhandling["English"] = array();
	$fieldLabelstbl_uomhandling["English"]["ID"] = "ID";
	$fieldToolTipstbl_uomhandling["English"]["ID"] = "";
	$placeHolderstbl_uomhandling["English"]["ID"] = "";
	$fieldLabelstbl_uomhandling["English"]["CodeName"] = "Codename";
	$fieldToolTipstbl_uomhandling["English"]["CodeName"] = "";
	$placeHolderstbl_uomhandling["English"]["CodeName"] = "";
	if (count($fieldToolTipstbl_uomhandling["English"]))
		$tdatatbl_uomhandling[".isUseToolTips"] = true;
}


	$tdatatbl_uomhandling[".NCSearch"] = true;



$tdatatbl_uomhandling[".shortTableName"] = "tbl_uomhandling";
$tdatatbl_uomhandling[".nSecOptions"] = 0;

$tdatatbl_uomhandling[".mainTableOwnerID"] = "";
$tdatatbl_uomhandling[".entityType"] = 1;
$tdatatbl_uomhandling[".connId"] = "logistics_at_localhost";


$tdatatbl_uomhandling[".strOriginalTableName"] = "tbl_uom";

	



$tdatatbl_uomhandling[".showAddInPopup"] = false;

$tdatatbl_uomhandling[".showEditInPopup"] = false;

$tdatatbl_uomhandling[".showViewInPopup"] = false;

	$tdatatbl_uomhandling[".listAjax"] = true;
//	temporary
//$tdatatbl_uomhandling[".listAjax"] = false;

	$tdatatbl_uomhandling[".audit"] = true;

	$tdatatbl_uomhandling[".locking"] = false;


$pages = $tdatatbl_uomhandling[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_uomhandling[".edit"] = true;
	$tdatatbl_uomhandling[".afterEditAction"] = 1;
	$tdatatbl_uomhandling[".closePopupAfterEdit"] = 1;
	$tdatatbl_uomhandling[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_uomhandling[".add"] = true;
$tdatatbl_uomhandling[".afterAddAction"] = 1;
$tdatatbl_uomhandling[".closePopupAfterAdd"] = 1;
$tdatatbl_uomhandling[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_uomhandling[".list"] = true;
}



$tdatatbl_uomhandling[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_uomhandling[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_uomhandling[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_uomhandling[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_uomhandling[".printFriendly"] = true;
}



$tdatatbl_uomhandling[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_uomhandling[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_uomhandling[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_uomhandling[".isUseAjaxSuggest"] = true;

$tdatatbl_uomhandling[".rowHighlite"] = true;



																					

$tdatatbl_uomhandling[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_uomhandling[".buttonsAdded"] = false;

$tdatatbl_uomhandling[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_uomhandling[".isUseTimeForSearch"] = false;


$tdatatbl_uomhandling[".badgeColor"] = "6493EA";


$tdatatbl_uomhandling[".allSearchFields"] = array();
$tdatatbl_uomhandling[".filterFields"] = array();
$tdatatbl_uomhandling[".requiredSearchFields"] = array();

$tdatatbl_uomhandling[".googleLikeFields"] = array();
$tdatatbl_uomhandling[".googleLikeFields"][] = "ID";
$tdatatbl_uomhandling[".googleLikeFields"][] = "CodeName";



$tdatatbl_uomhandling[".tableType"] = "list";

$tdatatbl_uomhandling[".printerPageOrientation"] = 0;
$tdatatbl_uomhandling[".nPrinterPageScale"] = 100;

$tdatatbl_uomhandling[".nPrinterSplitRecords"] = 40;

$tdatatbl_uomhandling[".geocodingEnabled"] = false;





$tdatatbl_uomhandling[".isResizeColumns"] = true;





$tdatatbl_uomhandling[".pageSize"] = 20;

$tdatatbl_uomhandling[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_uomhandling[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_uomhandling[".orderindexes"] = array();


$tdatatbl_uomhandling[".sqlHead"] = "SELECT ID,  CONCAT(tbl_uom.Code, \" - \", tbl_uom.Name) AS CodeName";
$tdatatbl_uomhandling[".sqlFrom"] = "FROM tbl_uom";
$tdatatbl_uomhandling[".sqlWhereExpr"] = "(UOMTypeID = 3)";
$tdatatbl_uomhandling[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_uomhandling[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_uomhandling[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_uomhandling[".highlightSearchResults"] = true;

$tableKeystbl_uomhandling = array();
$tableKeystbl_uomhandling[] = "ID";
$tdatatbl_uomhandling[".Keys"] = $tableKeystbl_uomhandling;


$tdatatbl_uomhandling[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_uom";
	$fdata["Label"] = GetFieldLabel("tbl_uomHandling","ID");
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


	$tdatatbl_uomhandling["ID"] = $fdata;
		$tdatatbl_uomhandling[".searchableFields"][] = "ID";
//	CodeName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CodeName";
	$fdata["GoodName"] = "CodeName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tbl_uomHandling","CodeName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "codename";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(tbl_uom.Code, \" - \", tbl_uom.Name)";

	
	
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


	$tdatatbl_uomhandling["CodeName"] = $fdata;
		$tdatatbl_uomhandling[".searchableFields"][] = "CodeName";


$tables_data["tbl_uomHandling"]=&$tdatatbl_uomhandling;
$field_labels["tbl_uomHandling"] = &$fieldLabelstbl_uomhandling;
$fieldToolTips["tbl_uomHandling"] = &$fieldToolTipstbl_uomhandling;
$placeHolders["tbl_uomHandling"] = &$placeHolderstbl_uomhandling;
$page_titles["tbl_uomHandling"] = &$pageTitlestbl_uomhandling;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_uomHandling"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_uomHandling"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_uomhandling()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  CONCAT(tbl_uom.Code, \" - \", tbl_uom.Name) AS CodeName";
$proto0["m_strFrom"] = "FROM tbl_uom";
$proto0["m_strWhere"] = "(UOMTypeID = 3)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "UOMTypeID = 3";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "UOMTypeID",
	"m_strTable" => "tbl_uom",
	"m_srcTableName" => "tbl_uomHandling"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 3";
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
	"m_srcTableName" => "tbl_uomHandling"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_uomHandling";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "tbl_uom.Code"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\" - \""
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "tbl_uom.Name"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "CONCAT(tbl_uom.Code, \" - \", tbl_uom.Name)";
$proto8["m_srcTableName"] = "tbl_uomHandling";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "CodeName";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "tbl_uom";
$proto14["m_srcTableName"] = "tbl_uomHandling";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "ID";
$proto14["m_columns"][] = "UOMTypeID";
$proto14["m_columns"][] = "Code";
$proto14["m_columns"][] = "Name";
$proto14["m_columns"][] = "OffCode";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "tbl_uom";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "tbl_uomHandling";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_uomHandling";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_uomhandling = createSqlQuery_tbl_uomhandling();


	
		;

		

$tdatatbl_uomhandling[".sqlquery"] = $queryData_tbl_uomhandling;



$tableEvents["tbl_uomHandling"] = new eventsBase;
$tdatatbl_uomhandling[".hasEvents"] = false;

?>