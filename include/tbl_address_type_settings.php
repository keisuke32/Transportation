<?php
$tdatatbl_address_type = array();
$tdatatbl_address_type[".searchableFields"] = array();
$tdatatbl_address_type[".ShortName"] = "tbl_address_type";
$tdatatbl_address_type[".OwnerID"] = "";
$tdatatbl_address_type[".OriginalTable"] = "tbl_address_type";


$tdatatbl_address_type[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_address_type[".originalPagesByType"] = $tdatatbl_address_type[".pagesByType"];
$tdatatbl_address_type[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_address_type[".originalPages"] = $tdatatbl_address_type[".pages"];
$tdatatbl_address_type[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_address_type[".originalDefaultPages"] = $tdatatbl_address_type[".defaultPages"];

//	field labels
$fieldLabelstbl_address_type = array();
$fieldToolTipstbl_address_type = array();
$pageTitlestbl_address_type = array();
$placeHolderstbl_address_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_address_type["English"] = array();
	$fieldToolTipstbl_address_type["English"] = array();
	$placeHolderstbl_address_type["English"] = array();
	$pageTitlestbl_address_type["English"] = array();
	$fieldLabelstbl_address_type["English"]["ID"] = "ID";
	$fieldToolTipstbl_address_type["English"]["ID"] = "";
	$placeHolderstbl_address_type["English"]["ID"] = "";
	$fieldLabelstbl_address_type["English"]["AddressTypeDescription"] = "Address Type Description";
	$fieldToolTipstbl_address_type["English"]["AddressTypeDescription"] = "";
	$placeHolderstbl_address_type["English"]["AddressTypeDescription"] = "";
	if (count($fieldToolTipstbl_address_type["English"]))
		$tdatatbl_address_type[".isUseToolTips"] = true;
}


	$tdatatbl_address_type[".NCSearch"] = true;



$tdatatbl_address_type[".shortTableName"] = "tbl_address_type";
$tdatatbl_address_type[".nSecOptions"] = 0;

$tdatatbl_address_type[".mainTableOwnerID"] = "";
$tdatatbl_address_type[".entityType"] = 0;
$tdatatbl_address_type[".connId"] = "logistics_at_localhost";


$tdatatbl_address_type[".strOriginalTableName"] = "tbl_address_type";

	



$tdatatbl_address_type[".showAddInPopup"] = false;

$tdatatbl_address_type[".showEditInPopup"] = false;

$tdatatbl_address_type[".showViewInPopup"] = false;

	$tdatatbl_address_type[".listAjax"] = true;
//	temporary
//$tdatatbl_address_type[".listAjax"] = false;

	$tdatatbl_address_type[".audit"] = true;

	$tdatatbl_address_type[".locking"] = false;


$pages = $tdatatbl_address_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_address_type[".edit"] = true;
	$tdatatbl_address_type[".afterEditAction"] = 1;
	$tdatatbl_address_type[".closePopupAfterEdit"] = 1;
	$tdatatbl_address_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_address_type[".add"] = true;
$tdatatbl_address_type[".afterAddAction"] = 1;
$tdatatbl_address_type[".closePopupAfterAdd"] = 1;
$tdatatbl_address_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_address_type[".list"] = true;
}



$tdatatbl_address_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_address_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_address_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_address_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_address_type[".printFriendly"] = true;
}



$tdatatbl_address_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_address_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_address_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_address_type[".isUseAjaxSuggest"] = true;

$tdatatbl_address_type[".rowHighlite"] = true;



																					

$tdatatbl_address_type[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_address_type[".buttonsAdded"] = false;

$tdatatbl_address_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_address_type[".isUseTimeForSearch"] = false;


$tdatatbl_address_type[".badgeColor"] = "6B8E23";


$tdatatbl_address_type[".allSearchFields"] = array();
$tdatatbl_address_type[".filterFields"] = array();
$tdatatbl_address_type[".requiredSearchFields"] = array();

$tdatatbl_address_type[".googleLikeFields"] = array();
$tdatatbl_address_type[".googleLikeFields"][] = "ID";
$tdatatbl_address_type[".googleLikeFields"][] = "AddressTypeDescription";



$tdatatbl_address_type[".tableType"] = "list";

$tdatatbl_address_type[".printerPageOrientation"] = 0;
$tdatatbl_address_type[".nPrinterPageScale"] = 100;

$tdatatbl_address_type[".nPrinterSplitRecords"] = 40;

$tdatatbl_address_type[".geocodingEnabled"] = false;





$tdatatbl_address_type[".isResizeColumns"] = true;





$tdatatbl_address_type[".pageSize"] = 20;

$tdatatbl_address_type[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY AddressTypeDescription";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_address_type[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_address_type[".orderindexes"] = array();
	$tdatatbl_address_type[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "AddressTypeDescription");



$tdatatbl_address_type[".sqlHead"] = "SELECT ID,  AddressTypeDescription";
$tdatatbl_address_type[".sqlFrom"] = "FROM tbl_address_type";
$tdatatbl_address_type[".sqlWhereExpr"] = "";
$tdatatbl_address_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_address_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_address_type[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_address_type[".highlightSearchResults"] = true;

$tableKeystbl_address_type = array();
$tableKeystbl_address_type[] = "ID";
$tdatatbl_address_type[".Keys"] = $tableKeystbl_address_type;


$tdatatbl_address_type[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_address_type";
	$fdata["Label"] = GetFieldLabel("tbl_address_type","ID");
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


	$tdatatbl_address_type["ID"] = $fdata;
		$tdatatbl_address_type[".searchableFields"][] = "ID";
//	AddressTypeDescription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AddressTypeDescription";
	$fdata["GoodName"] = "AddressTypeDescription";
	$fdata["ownerTable"] = "tbl_address_type";
	$fdata["Label"] = GetFieldLabel("tbl_address_type","AddressTypeDescription");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AddressTypeDescription";

		$fdata["sourceSingle"] = "AddressTypeDescription";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AddressTypeDescription";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatbl_address_type["AddressTypeDescription"] = $fdata;
		$tdatatbl_address_type[".searchableFields"][] = "AddressTypeDescription";


$tables_data["tbl_address_type"]=&$tdatatbl_address_type;
$field_labels["tbl_address_type"] = &$fieldLabelstbl_address_type;
$fieldToolTips["tbl_address_type"] = &$fieldToolTipstbl_address_type;
$placeHolders["tbl_address_type"] = &$placeHolderstbl_address_type;
$page_titles["tbl_address_type"] = &$pageTitlestbl_address_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_address_type"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_address_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_address_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  AddressTypeDescription";
$proto0["m_strFrom"] = "FROM tbl_address_type";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY AddressTypeDescription";
	
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
	"m_strTable" => "tbl_address_type",
	"m_srcTableName" => "tbl_address_type"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_address_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AddressTypeDescription",
	"m_strTable" => "tbl_address_type",
	"m_srcTableName" => "tbl_address_type"
));

$proto8["m_sql"] = "AddressTypeDescription";
$proto8["m_srcTableName"] = "tbl_address_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tbl_address_type";
$proto11["m_srcTableName"] = "tbl_address_type";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID";
$proto11["m_columns"][] = "AddressTypeDescription";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tbl_address_type";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tbl_address_type";
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
	"m_strName" => "AddressTypeDescription",
	"m_strTable" => "tbl_address_type",
	"m_srcTableName" => "tbl_address_type"
));

$proto14["m_column"]=$obj;
$proto14["m_bAsc"] = 1;
$proto14["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto14);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tbl_address_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_address_type = createSqlQuery_tbl_address_type();


	
		;

		

$tdatatbl_address_type[".sqlquery"] = $queryData_tbl_address_type;



$tableEvents["tbl_address_type"] = new eventsBase;
$tdatatbl_address_type[".hasEvents"] = false;

?>