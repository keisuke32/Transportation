<?php
$tdatatbl_uom_type = array();
$tdatatbl_uom_type[".searchableFields"] = array();
$tdatatbl_uom_type[".ShortName"] = "tbl_uom_type";
$tdatatbl_uom_type[".OwnerID"] = "";
$tdatatbl_uom_type[".OriginalTable"] = "tbl_uom_type";


$tdatatbl_uom_type[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatatbl_uom_type[".originalPagesByType"] = $tdatatbl_uom_type[".pagesByType"];
$tdatatbl_uom_type[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatatbl_uom_type[".originalPages"] = $tdatatbl_uom_type[".pages"];
$tdatatbl_uom_type[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatatbl_uom_type[".originalDefaultPages"] = $tdatatbl_uom_type[".defaultPages"];

//	field labels
$fieldLabelstbl_uom_type = array();
$fieldToolTipstbl_uom_type = array();
$pageTitlestbl_uom_type = array();
$placeHolderstbl_uom_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_uom_type["English"] = array();
	$fieldToolTipstbl_uom_type["English"] = array();
	$placeHolderstbl_uom_type["English"] = array();
	$pageTitlestbl_uom_type["English"] = array();
	$fieldLabelstbl_uom_type["English"]["ID"] = "ID";
	$fieldToolTipstbl_uom_type["English"]["ID"] = "";
	$placeHolderstbl_uom_type["English"]["ID"] = "";
	$fieldLabelstbl_uom_type["English"]["Description"] = "Description";
	$fieldToolTipstbl_uom_type["English"]["Description"] = "";
	$placeHolderstbl_uom_type["English"]["Description"] = "";
	if (count($fieldToolTipstbl_uom_type["English"]))
		$tdatatbl_uom_type[".isUseToolTips"] = true;
}


	$tdatatbl_uom_type[".NCSearch"] = true;



$tdatatbl_uom_type[".shortTableName"] = "tbl_uom_type";
$tdatatbl_uom_type[".nSecOptions"] = 0;

$tdatatbl_uom_type[".mainTableOwnerID"] = "";
$tdatatbl_uom_type[".entityType"] = 0;
$tdatatbl_uom_type[".connId"] = "logistics_at_localhost";


$tdatatbl_uom_type[".strOriginalTableName"] = "tbl_uom_type";

	



$tdatatbl_uom_type[".showAddInPopup"] = false;

$tdatatbl_uom_type[".showEditInPopup"] = false;

$tdatatbl_uom_type[".showViewInPopup"] = false;

	$tdatatbl_uom_type[".listAjax"] = true;
//	temporary
//$tdatatbl_uom_type[".listAjax"] = false;

	$tdatatbl_uom_type[".audit"] = true;

	$tdatatbl_uom_type[".locking"] = false;


$pages = $tdatatbl_uom_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_uom_type[".edit"] = true;
	$tdatatbl_uom_type[".afterEditAction"] = 1;
	$tdatatbl_uom_type[".closePopupAfterEdit"] = 1;
	$tdatatbl_uom_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_uom_type[".add"] = true;
$tdatatbl_uom_type[".afterAddAction"] = 1;
$tdatatbl_uom_type[".closePopupAfterAdd"] = 1;
$tdatatbl_uom_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_uom_type[".list"] = true;
}



$tdatatbl_uom_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_uom_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_uom_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_uom_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_uom_type[".printFriendly"] = true;
}



$tdatatbl_uom_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_uom_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_uom_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_uom_type[".isUseAjaxSuggest"] = true;

$tdatatbl_uom_type[".rowHighlite"] = true;



																					

$tdatatbl_uom_type[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_uom_type[".buttonsAdded"] = false;

$tdatatbl_uom_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_uom_type[".isUseTimeForSearch"] = false;


$tdatatbl_uom_type[".badgeColor"] = "E07878";


$tdatatbl_uom_type[".allSearchFields"] = array();
$tdatatbl_uom_type[".filterFields"] = array();
$tdatatbl_uom_type[".requiredSearchFields"] = array();

$tdatatbl_uom_type[".googleLikeFields"] = array();
$tdatatbl_uom_type[".googleLikeFields"][] = "ID";
$tdatatbl_uom_type[".googleLikeFields"][] = "Description";



$tdatatbl_uom_type[".tableType"] = "list";

$tdatatbl_uom_type[".printerPageOrientation"] = 0;
$tdatatbl_uom_type[".nPrinterPageScale"] = 100;

$tdatatbl_uom_type[".nPrinterSplitRecords"] = 40;

$tdatatbl_uom_type[".geocodingEnabled"] = false;




$tdatatbl_uom_type[".isDisplayLoading"] = true;

$tdatatbl_uom_type[".isResizeColumns"] = true;





$tdatatbl_uom_type[".pageSize"] = 20;

$tdatatbl_uom_type[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Description";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_uom_type[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_uom_type[".orderindexes"] = array();
	$tdatatbl_uom_type[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "Description");



$tdatatbl_uom_type[".sqlHead"] = "SELECT ID,  Description";
$tdatatbl_uom_type[".sqlFrom"] = "FROM tbl_uom_type";
$tdatatbl_uom_type[".sqlWhereExpr"] = "";
$tdatatbl_uom_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_uom_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_uom_type[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_uom_type[".highlightSearchResults"] = true;

$tableKeystbl_uom_type = array();
$tableKeystbl_uom_type[] = "ID";
$tdatatbl_uom_type[".Keys"] = $tableKeystbl_uom_type;


$tdatatbl_uom_type[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_uom_type";
	$fdata["Label"] = GetFieldLabel("tbl_uom_type","ID");
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


	$tdatatbl_uom_type["ID"] = $fdata;
		$tdatatbl_uom_type[".searchableFields"][] = "ID";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "tbl_uom_type";
	$fdata["Label"] = GetFieldLabel("tbl_uom_type","Description");
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


	$tdatatbl_uom_type["Description"] = $fdata;
		$tdatatbl_uom_type[".searchableFields"][] = "Description";


$tables_data["tbl_uom_type"]=&$tdatatbl_uom_type;
$field_labels["tbl_uom_type"] = &$fieldLabelstbl_uom_type;
$fieldToolTips["tbl_uom_type"] = &$fieldToolTipstbl_uom_type;
$placeHolders["tbl_uom_type"] = &$placeHolderstbl_uom_type;
$page_titles["tbl_uom_type"] = &$pageTitlestbl_uom_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_uom_type"] = array();
//	tbl_uom
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_uom";
		$detailsParam["dOriginalTable"] = "tbl_uom";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_uom";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_uom");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_uom_type"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_uom_type"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_uom_type"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["tbl_uom_type"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_uom_type"][$dIndex]["detailKeys"][]="UOMTypeID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_uom_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_uom_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  Description";
$proto0["m_strFrom"] = "FROM tbl_uom_type";
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
	"m_strTable" => "tbl_uom_type",
	"m_srcTableName" => "tbl_uom_type"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_uom_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "tbl_uom_type",
	"m_srcTableName" => "tbl_uom_type"
));

$proto8["m_sql"] = "Description";
$proto8["m_srcTableName"] = "tbl_uom_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tbl_uom_type";
$proto11["m_srcTableName"] = "tbl_uom_type";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID";
$proto11["m_columns"][] = "Description";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tbl_uom_type";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tbl_uom_type";
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
	"m_strTable" => "tbl_uom_type",
	"m_srcTableName" => "tbl_uom_type"
));

$proto14["m_column"]=$obj;
$proto14["m_bAsc"] = 1;
$proto14["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto14);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tbl_uom_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_uom_type = createSqlQuery_tbl_uom_type();


	
		;

		

$tdatatbl_uom_type[".sqlquery"] = $queryData_tbl_uom_type;



$tableEvents["tbl_uom_type"] = new eventsBase;
$tdatatbl_uom_type[".hasEvents"] = false;

?>