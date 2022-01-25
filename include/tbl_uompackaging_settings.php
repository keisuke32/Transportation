<?php
$tdatatbl_uompackaging = array();
$tdatatbl_uompackaging[".searchableFields"] = array();
$tdatatbl_uompackaging[".ShortName"] = "tbl_uompackaging";
$tdatatbl_uompackaging[".OwnerID"] = "";
$tdatatbl_uompackaging[".OriginalTable"] = "tbl_uom";


$tdatatbl_uompackaging[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_uompackaging[".originalPagesByType"] = $tdatatbl_uompackaging[".pagesByType"];
$tdatatbl_uompackaging[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_uompackaging[".originalPages"] = $tdatatbl_uompackaging[".pages"];
$tdatatbl_uompackaging[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_uompackaging[".originalDefaultPages"] = $tdatatbl_uompackaging[".defaultPages"];

//	field labels
$fieldLabelstbl_uompackaging = array();
$fieldToolTipstbl_uompackaging = array();
$pageTitlestbl_uompackaging = array();
$placeHolderstbl_uompackaging = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_uompackaging["English"] = array();
	$fieldToolTipstbl_uompackaging["English"] = array();
	$placeHolderstbl_uompackaging["English"] = array();
	$pageTitlestbl_uompackaging["English"] = array();
	$fieldLabelstbl_uompackaging["English"]["ID"] = "ID";
	$fieldToolTipstbl_uompackaging["English"]["ID"] = "";
	$placeHolderstbl_uompackaging["English"]["ID"] = "";
	$fieldLabelstbl_uompackaging["English"]["CodeName"] = "Code Name";
	$fieldToolTipstbl_uompackaging["English"]["CodeName"] = "";
	$placeHolderstbl_uompackaging["English"]["CodeName"] = "";
	if (count($fieldToolTipstbl_uompackaging["English"]))
		$tdatatbl_uompackaging[".isUseToolTips"] = true;
}


	$tdatatbl_uompackaging[".NCSearch"] = true;



$tdatatbl_uompackaging[".shortTableName"] = "tbl_uompackaging";
$tdatatbl_uompackaging[".nSecOptions"] = 0;

$tdatatbl_uompackaging[".mainTableOwnerID"] = "";
$tdatatbl_uompackaging[".entityType"] = 1;
$tdatatbl_uompackaging[".connId"] = "logistics_at_localhost";


$tdatatbl_uompackaging[".strOriginalTableName"] = "tbl_uom";

	



$tdatatbl_uompackaging[".showAddInPopup"] = false;

$tdatatbl_uompackaging[".showEditInPopup"] = false;

$tdatatbl_uompackaging[".showViewInPopup"] = false;

	$tdatatbl_uompackaging[".listAjax"] = true;
//	temporary
//$tdatatbl_uompackaging[".listAjax"] = false;

	$tdatatbl_uompackaging[".audit"] = true;

	$tdatatbl_uompackaging[".locking"] = false;


$pages = $tdatatbl_uompackaging[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_uompackaging[".edit"] = true;
	$tdatatbl_uompackaging[".afterEditAction"] = 1;
	$tdatatbl_uompackaging[".closePopupAfterEdit"] = 1;
	$tdatatbl_uompackaging[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_uompackaging[".add"] = true;
$tdatatbl_uompackaging[".afterAddAction"] = 1;
$tdatatbl_uompackaging[".closePopupAfterAdd"] = 1;
$tdatatbl_uompackaging[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_uompackaging[".list"] = true;
}



$tdatatbl_uompackaging[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_uompackaging[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_uompackaging[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_uompackaging[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_uompackaging[".printFriendly"] = true;
}



$tdatatbl_uompackaging[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_uompackaging[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_uompackaging[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_uompackaging[".isUseAjaxSuggest"] = true;

$tdatatbl_uompackaging[".rowHighlite"] = true;



																					

$tdatatbl_uompackaging[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_uompackaging[".buttonsAdded"] = false;

$tdatatbl_uompackaging[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_uompackaging[".isUseTimeForSearch"] = false;


$tdatatbl_uompackaging[".badgeColor"] = "D2AF80";


$tdatatbl_uompackaging[".allSearchFields"] = array();
$tdatatbl_uompackaging[".filterFields"] = array();
$tdatatbl_uompackaging[".requiredSearchFields"] = array();

$tdatatbl_uompackaging[".googleLikeFields"] = array();
$tdatatbl_uompackaging[".googleLikeFields"][] = "ID";
$tdatatbl_uompackaging[".googleLikeFields"][] = "CodeName";



$tdatatbl_uompackaging[".tableType"] = "list";

$tdatatbl_uompackaging[".printerPageOrientation"] = 0;
$tdatatbl_uompackaging[".nPrinterPageScale"] = 100;

$tdatatbl_uompackaging[".nPrinterSplitRecords"] = 40;

$tdatatbl_uompackaging[".geocodingEnabled"] = false;





$tdatatbl_uompackaging[".isResizeColumns"] = true;





$tdatatbl_uompackaging[".pageSize"] = 20;

$tdatatbl_uompackaging[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_uompackaging[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_uompackaging[".orderindexes"] = array();


$tdatatbl_uompackaging[".sqlHead"] = "SELECT tbl_uom.ID,  CONCAT(tbl_uom.Code, \" - \", tbl_uom.Name) AS CodeName";
$tdatatbl_uompackaging[".sqlFrom"] = "FROM tbl_uom";
$tdatatbl_uompackaging[".sqlWhereExpr"] = "(UOMTypeID = 4)";
$tdatatbl_uompackaging[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_uompackaging[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_uompackaging[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_uompackaging[".highlightSearchResults"] = true;

$tableKeystbl_uompackaging = array();
$tableKeystbl_uompackaging[] = "ID";
$tdatatbl_uompackaging[".Keys"] = $tableKeystbl_uompackaging;


$tdatatbl_uompackaging[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_uom";
	$fdata["Label"] = GetFieldLabel("tbl_uomPackaging","ID");
	$fdata["FieldType"] = 16;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

		$fdata["sourceSingle"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_uom.ID";

	
	
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


	$tdatatbl_uompackaging["ID"] = $fdata;
		$tdatatbl_uompackaging[".searchableFields"][] = "ID";
//	CodeName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CodeName";
	$fdata["GoodName"] = "CodeName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tbl_uomPackaging","CodeName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CodeName";

	
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


	$tdatatbl_uompackaging["CodeName"] = $fdata;
		$tdatatbl_uompackaging[".searchableFields"][] = "CodeName";


$tables_data["tbl_uomPackaging"]=&$tdatatbl_uompackaging;
$field_labels["tbl_uomPackaging"] = &$fieldLabelstbl_uompackaging;
$fieldToolTips["tbl_uomPackaging"] = &$fieldToolTipstbl_uompackaging;
$placeHolders["tbl_uomPackaging"] = &$placeHolderstbl_uompackaging;
$page_titles["tbl_uomPackaging"] = &$pageTitlestbl_uompackaging;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_uomPackaging"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_uomPackaging"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_uompackaging()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tbl_uom.ID,  CONCAT(tbl_uom.Code, \" - \", tbl_uom.Name) AS CodeName";
$proto0["m_strFrom"] = "FROM tbl_uom";
$proto0["m_strWhere"] = "(UOMTypeID = 4)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "UOMTypeID = 4";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "UOMTypeID",
	"m_strTable" => "tbl_uom",
	"m_srcTableName" => "tbl_uomPackaging"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 4";
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
	"m_srcTableName" => "tbl_uomPackaging"
));

$proto6["m_sql"] = "tbl_uom.ID";
$proto6["m_srcTableName"] = "tbl_uomPackaging";
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
$proto8["m_srcTableName"] = "tbl_uomPackaging";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "CodeName";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "tbl_uom";
$proto14["m_srcTableName"] = "tbl_uomPackaging";
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
$proto13["m_srcTableName"] = "tbl_uomPackaging";
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
$proto0["m_srcTableName"]="tbl_uomPackaging";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_uompackaging = createSqlQuery_tbl_uompackaging();


	
		;

		

$tdatatbl_uompackaging[".sqlquery"] = $queryData_tbl_uompackaging;



$tableEvents["tbl_uomPackaging"] = new eventsBase;
$tdatatbl_uompackaging[".hasEvents"] = false;

?>