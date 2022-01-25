<?php
$tdatatb_lead_source = array();
$tdatatb_lead_source[".searchableFields"] = array();
$tdatatb_lead_source[".ShortName"] = "tb_lead_source";
$tdatatb_lead_source[".OwnerID"] = "";
$tdatatb_lead_source[".OriginalTable"] = "tb_lead_source";


$tdatatb_lead_source[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatb_lead_source[".originalPagesByType"] = $tdatatb_lead_source[".pagesByType"];
$tdatatb_lead_source[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatb_lead_source[".originalPages"] = $tdatatb_lead_source[".pages"];
$tdatatb_lead_source[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatb_lead_source[".originalDefaultPages"] = $tdatatb_lead_source[".defaultPages"];

//	field labels
$fieldLabelstb_lead_source = array();
$fieldToolTipstb_lead_source = array();
$pageTitlestb_lead_source = array();
$placeHolderstb_lead_source = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_lead_source["English"] = array();
	$fieldToolTipstb_lead_source["English"] = array();
	$placeHolderstb_lead_source["English"] = array();
	$pageTitlestb_lead_source["English"] = array();
	$fieldLabelstb_lead_source["English"]["ID"] = "ID";
	$fieldToolTipstb_lead_source["English"]["ID"] = "";
	$placeHolderstb_lead_source["English"]["ID"] = "";
	$fieldLabelstb_lead_source["English"]["LeadSourceDescription"] = "Lead Source Description";
	$fieldToolTipstb_lead_source["English"]["LeadSourceDescription"] = "";
	$placeHolderstb_lead_source["English"]["LeadSourceDescription"] = "";
	if (count($fieldToolTipstb_lead_source["English"]))
		$tdatatb_lead_source[".isUseToolTips"] = true;
}


	$tdatatb_lead_source[".NCSearch"] = true;



$tdatatb_lead_source[".shortTableName"] = "tb_lead_source";
$tdatatb_lead_source[".nSecOptions"] = 0;

$tdatatb_lead_source[".mainTableOwnerID"] = "";
$tdatatb_lead_source[".entityType"] = 0;
$tdatatb_lead_source[".connId"] = "logistics_at_localhost";


$tdatatb_lead_source[".strOriginalTableName"] = "tb_lead_source";

	



$tdatatb_lead_source[".showAddInPopup"] = false;

$tdatatb_lead_source[".showEditInPopup"] = false;

$tdatatb_lead_source[".showViewInPopup"] = false;

$tdatatb_lead_source[".listAjax"] = false;
//	temporary
//$tdatatb_lead_source[".listAjax"] = false;

	$tdatatb_lead_source[".audit"] = true;

	$tdatatb_lead_source[".locking"] = false;


$pages = $tdatatb_lead_source[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_lead_source[".edit"] = true;
	$tdatatb_lead_source[".afterEditAction"] = 1;
	$tdatatb_lead_source[".closePopupAfterEdit"] = 1;
	$tdatatb_lead_source[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_lead_source[".add"] = true;
$tdatatb_lead_source[".afterAddAction"] = 1;
$tdatatb_lead_source[".closePopupAfterAdd"] = 1;
$tdatatb_lead_source[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_lead_source[".list"] = true;
}



$tdatatb_lead_source[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_lead_source[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_lead_source[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_lead_source[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_lead_source[".printFriendly"] = true;
}



$tdatatb_lead_source[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_lead_source[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_lead_source[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_lead_source[".isUseAjaxSuggest"] = true;

$tdatatb_lead_source[".rowHighlite"] = true;



																					

$tdatatb_lead_source[".ajaxCodeSnippetAdded"] = false;

$tdatatb_lead_source[".buttonsAdded"] = false;

$tdatatb_lead_source[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_lead_source[".isUseTimeForSearch"] = false;


$tdatatb_lead_source[".badgeColor"] = "CD5C5C";


$tdatatb_lead_source[".allSearchFields"] = array();
$tdatatb_lead_source[".filterFields"] = array();
$tdatatb_lead_source[".requiredSearchFields"] = array();

$tdatatb_lead_source[".googleLikeFields"] = array();
$tdatatb_lead_source[".googleLikeFields"][] = "ID";
$tdatatb_lead_source[".googleLikeFields"][] = "LeadSourceDescription";



$tdatatb_lead_source[".tableType"] = "list";

$tdatatb_lead_source[".printerPageOrientation"] = 0;
$tdatatb_lead_source[".nPrinterPageScale"] = 100;

$tdatatb_lead_source[".nPrinterSplitRecords"] = 40;

$tdatatb_lead_source[".geocodingEnabled"] = false;










$tdatatb_lead_source[".pageSize"] = 20;

$tdatatb_lead_source[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_lead_source[".strOrderBy"] = $tstrOrderBy;

$tdatatb_lead_source[".orderindexes"] = array();


$tdatatb_lead_source[".sqlHead"] = "SELECT ID,  	LeadSourceDescription";
$tdatatb_lead_source[".sqlFrom"] = "FROM tb_lead_source";
$tdatatb_lead_source[".sqlWhereExpr"] = "";
$tdatatb_lead_source[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_lead_source[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_lead_source[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_lead_source[".highlightSearchResults"] = true;

$tableKeystb_lead_source = array();
$tdatatb_lead_source[".Keys"] = $tableKeystb_lead_source;


$tdatatb_lead_source[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tb_lead_source";
	$fdata["Label"] = GetFieldLabel("tb_lead_source","ID");
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


	$tdatatb_lead_source["ID"] = $fdata;
		$tdatatb_lead_source[".searchableFields"][] = "ID";
//	LeadSourceDescription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "LeadSourceDescription";
	$fdata["GoodName"] = "LeadSourceDescription";
	$fdata["ownerTable"] = "tb_lead_source";
	$fdata["Label"] = GetFieldLabel("tb_lead_source","LeadSourceDescription");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "LeadSourceDescription";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LeadSourceDescription";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdatatb_lead_source["LeadSourceDescription"] = $fdata;
		$tdatatb_lead_source[".searchableFields"][] = "LeadSourceDescription";


$tables_data["tb_lead_source"]=&$tdatatb_lead_source;
$field_labels["tb_lead_source"] = &$fieldLabelstb_lead_source;
$fieldToolTips["tb_lead_source"] = &$fieldToolTipstb_lead_source;
$placeHolders["tb_lead_source"] = &$placeHolderstb_lead_source;
$page_titles["tb_lead_source"] = &$pageTitlestb_lead_source;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tb_lead_source"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tb_lead_source"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tb_lead_source()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	LeadSourceDescription";
$proto0["m_strFrom"] = "FROM tb_lead_source";
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
	"m_strTable" => "tb_lead_source",
	"m_srcTableName" => "tb_lead_source"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tb_lead_source";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "LeadSourceDescription",
	"m_strTable" => "tb_lead_source",
	"m_srcTableName" => "tb_lead_source"
));

$proto8["m_sql"] = "LeadSourceDescription";
$proto8["m_srcTableName"] = "tb_lead_source";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tb_lead_source";
$proto11["m_srcTableName"] = "tb_lead_source";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID";
$proto11["m_columns"][] = "LeadSourceDescription";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tb_lead_source";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tb_lead_source";
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
$proto0["m_srcTableName"]="tb_lead_source";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_lead_source = createSqlQuery_tb_lead_source();


	
		;

		

$tdatatb_lead_source[".sqlquery"] = $queryData_tb_lead_source;



$tableEvents["tb_lead_source"] = new eventsBase;
$tdatatb_lead_source[".hasEvents"] = false;

?>