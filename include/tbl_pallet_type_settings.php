<?php
$tdatatbl_pallet_type = array();
$tdatatbl_pallet_type[".searchableFields"] = array();
$tdatatbl_pallet_type[".ShortName"] = "tbl_pallet_type";
$tdatatbl_pallet_type[".OwnerID"] = "";
$tdatatbl_pallet_type[".OriginalTable"] = "tbl_pallet_type";


$tdatatbl_pallet_type[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_pallet_type[".originalPagesByType"] = $tdatatbl_pallet_type[".pagesByType"];
$tdatatbl_pallet_type[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_pallet_type[".originalPages"] = $tdatatbl_pallet_type[".pages"];
$tdatatbl_pallet_type[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_pallet_type[".originalDefaultPages"] = $tdatatbl_pallet_type[".defaultPages"];

//	field labels
$fieldLabelstbl_pallet_type = array();
$fieldToolTipstbl_pallet_type = array();
$pageTitlestbl_pallet_type = array();
$placeHolderstbl_pallet_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_pallet_type["English"] = array();
	$fieldToolTipstbl_pallet_type["English"] = array();
	$placeHolderstbl_pallet_type["English"] = array();
	$pageTitlestbl_pallet_type["English"] = array();
	$fieldLabelstbl_pallet_type["English"]["PalletID"] = "ID";
	$fieldToolTipstbl_pallet_type["English"]["PalletID"] = "";
	$placeHolderstbl_pallet_type["English"]["PalletID"] = "";
	$fieldLabelstbl_pallet_type["English"]["PalletType"] = "Pallet Type";
	$fieldToolTipstbl_pallet_type["English"]["PalletType"] = "";
	$placeHolderstbl_pallet_type["English"]["PalletType"] = "";
	if (count($fieldToolTipstbl_pallet_type["English"]))
		$tdatatbl_pallet_type[".isUseToolTips"] = true;
}


	$tdatatbl_pallet_type[".NCSearch"] = true;



$tdatatbl_pallet_type[".shortTableName"] = "tbl_pallet_type";
$tdatatbl_pallet_type[".nSecOptions"] = 0;

$tdatatbl_pallet_type[".mainTableOwnerID"] = "";
$tdatatbl_pallet_type[".entityType"] = 0;
$tdatatbl_pallet_type[".connId"] = "logistics_at_localhost";


$tdatatbl_pallet_type[".strOriginalTableName"] = "tbl_pallet_type";

	



$tdatatbl_pallet_type[".showAddInPopup"] = false;

$tdatatbl_pallet_type[".showEditInPopup"] = false;

$tdatatbl_pallet_type[".showViewInPopup"] = false;

	$tdatatbl_pallet_type[".listAjax"] = true;
//	temporary
//$tdatatbl_pallet_type[".listAjax"] = false;

	$tdatatbl_pallet_type[".audit"] = true;

	$tdatatbl_pallet_type[".locking"] = false;


$pages = $tdatatbl_pallet_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_pallet_type[".edit"] = true;
	$tdatatbl_pallet_type[".afterEditAction"] = 1;
	$tdatatbl_pallet_type[".closePopupAfterEdit"] = 1;
	$tdatatbl_pallet_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_pallet_type[".add"] = true;
$tdatatbl_pallet_type[".afterAddAction"] = 1;
$tdatatbl_pallet_type[".closePopupAfterAdd"] = 1;
$tdatatbl_pallet_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_pallet_type[".list"] = true;
}



$tdatatbl_pallet_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_pallet_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_pallet_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_pallet_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_pallet_type[".printFriendly"] = true;
}



$tdatatbl_pallet_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_pallet_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_pallet_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_pallet_type[".isUseAjaxSuggest"] = true;

$tdatatbl_pallet_type[".rowHighlite"] = true;



																					

$tdatatbl_pallet_type[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_pallet_type[".buttonsAdded"] = false;

$tdatatbl_pallet_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_pallet_type[".isUseTimeForSearch"] = false;


$tdatatbl_pallet_type[".badgeColor"] = "E07878";


$tdatatbl_pallet_type[".allSearchFields"] = array();
$tdatatbl_pallet_type[".filterFields"] = array();
$tdatatbl_pallet_type[".requiredSearchFields"] = array();

$tdatatbl_pallet_type[".googleLikeFields"] = array();
$tdatatbl_pallet_type[".googleLikeFields"][] = "PalletID";
$tdatatbl_pallet_type[".googleLikeFields"][] = "PalletType";



$tdatatbl_pallet_type[".tableType"] = "list";

$tdatatbl_pallet_type[".printerPageOrientation"] = 0;
$tdatatbl_pallet_type[".nPrinterPageScale"] = 100;

$tdatatbl_pallet_type[".nPrinterSplitRecords"] = 40;

$tdatatbl_pallet_type[".geocodingEnabled"] = false;





$tdatatbl_pallet_type[".isResizeColumns"] = true;





$tdatatbl_pallet_type[".pageSize"] = 20;

$tdatatbl_pallet_type[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY PalletType";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_pallet_type[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_pallet_type[".orderindexes"] = array();
	$tdatatbl_pallet_type[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "PalletType");



$tdatatbl_pallet_type[".sqlHead"] = "SELECT PalletID,  PalletType";
$tdatatbl_pallet_type[".sqlFrom"] = "FROM tbl_pallet_type";
$tdatatbl_pallet_type[".sqlWhereExpr"] = "";
$tdatatbl_pallet_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_pallet_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_pallet_type[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_pallet_type[".highlightSearchResults"] = true;

$tableKeystbl_pallet_type = array();
$tableKeystbl_pallet_type[] = "PalletID";
$tdatatbl_pallet_type[".Keys"] = $tableKeystbl_pallet_type;


$tdatatbl_pallet_type[".hideMobileList"] = array();




//	PalletID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PalletID";
	$fdata["GoodName"] = "PalletID";
	$fdata["ownerTable"] = "tbl_pallet_type";
	$fdata["Label"] = GetFieldLabel("tbl_pallet_type","PalletID");
	$fdata["FieldType"] = 16;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "PalletID";

		$fdata["sourceSingle"] = "PalletID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PalletID";

	
	
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


	$tdatatbl_pallet_type["PalletID"] = $fdata;
		$tdatatbl_pallet_type[".searchableFields"][] = "PalletID";
//	PalletType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PalletType";
	$fdata["GoodName"] = "PalletType";
	$fdata["ownerTable"] = "tbl_pallet_type";
	$fdata["Label"] = GetFieldLabel("tbl_pallet_type","PalletType");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PalletType";

		$fdata["sourceSingle"] = "PalletType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PalletType";

	
	
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


	$tdatatbl_pallet_type["PalletType"] = $fdata;
		$tdatatbl_pallet_type[".searchableFields"][] = "PalletType";


$tables_data["tbl_pallet_type"]=&$tdatatbl_pallet_type;
$field_labels["tbl_pallet_type"] = &$fieldLabelstbl_pallet_type;
$fieldToolTips["tbl_pallet_type"] = &$fieldToolTipstbl_pallet_type;
$placeHolders["tbl_pallet_type"] = &$placeHolderstbl_pallet_type;
$page_titles["tbl_pallet_type"] = &$pageTitlestbl_pallet_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_pallet_type"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_pallet_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_pallet_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PalletID,  PalletType";
$proto0["m_strFrom"] = "FROM tbl_pallet_type";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY PalletType";
	
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
	"m_strName" => "PalletID",
	"m_strTable" => "tbl_pallet_type",
	"m_srcTableName" => "tbl_pallet_type"
));

$proto6["m_sql"] = "PalletID";
$proto6["m_srcTableName"] = "tbl_pallet_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PalletType",
	"m_strTable" => "tbl_pallet_type",
	"m_srcTableName" => "tbl_pallet_type"
));

$proto8["m_sql"] = "PalletType";
$proto8["m_srcTableName"] = "tbl_pallet_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tbl_pallet_type";
$proto11["m_srcTableName"] = "tbl_pallet_type";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "PalletID";
$proto11["m_columns"][] = "PalletType";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tbl_pallet_type";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tbl_pallet_type";
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
	"m_strName" => "PalletType",
	"m_strTable" => "tbl_pallet_type",
	"m_srcTableName" => "tbl_pallet_type"
));

$proto14["m_column"]=$obj;
$proto14["m_bAsc"] = 1;
$proto14["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto14);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tbl_pallet_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_pallet_type = createSqlQuery_tbl_pallet_type();


	
		;

		

$tdatatbl_pallet_type[".sqlquery"] = $queryData_tbl_pallet_type;



$tableEvents["tbl_pallet_type"] = new eventsBase;
$tdatatbl_pallet_type[".hasEvents"] = false;

?>