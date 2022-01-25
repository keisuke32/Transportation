<?php
$tdatatb_activities_type = array();
$tdatatb_activities_type[".searchableFields"] = array();
$tdatatb_activities_type[".ShortName"] = "tb_activities_type";
$tdatatb_activities_type[".OwnerID"] = "";
$tdatatb_activities_type[".OriginalTable"] = "tb_activities_type";


$tdatatb_activities_type[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatb_activities_type[".originalPagesByType"] = $tdatatb_activities_type[".pagesByType"];
$tdatatb_activities_type[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatb_activities_type[".originalPages"] = $tdatatb_activities_type[".pages"];
$tdatatb_activities_type[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatb_activities_type[".originalDefaultPages"] = $tdatatb_activities_type[".defaultPages"];

//	field labels
$fieldLabelstb_activities_type = array();
$fieldToolTipstb_activities_type = array();
$pageTitlestb_activities_type = array();
$placeHolderstb_activities_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_activities_type["English"] = array();
	$fieldToolTipstb_activities_type["English"] = array();
	$placeHolderstb_activities_type["English"] = array();
	$pageTitlestb_activities_type["English"] = array();
	$fieldLabelstb_activities_type["English"]["ActivitiesTypeID"] = "ID";
	$fieldToolTipstb_activities_type["English"]["ActivitiesTypeID"] = "";
	$placeHolderstb_activities_type["English"]["ActivitiesTypeID"] = "";
	$fieldLabelstb_activities_type["English"]["ActivitiesTypeDescription"] = "Description";
	$fieldToolTipstb_activities_type["English"]["ActivitiesTypeDescription"] = "";
	$placeHolderstb_activities_type["English"]["ActivitiesTypeDescription"] = "";
	$fieldLabelstb_activities_type["English"]["ActivitiesTypeLanguage"] = "Language";
	$fieldToolTipstb_activities_type["English"]["ActivitiesTypeLanguage"] = "";
	$placeHolderstb_activities_type["English"]["ActivitiesTypeLanguage"] = "";
	if (count($fieldToolTipstb_activities_type["English"]))
		$tdatatb_activities_type[".isUseToolTips"] = true;
}


	$tdatatb_activities_type[".NCSearch"] = true;



$tdatatb_activities_type[".shortTableName"] = "tb_activities_type";
$tdatatb_activities_type[".nSecOptions"] = 0;

$tdatatb_activities_type[".mainTableOwnerID"] = "";
$tdatatb_activities_type[".entityType"] = 0;
$tdatatb_activities_type[".connId"] = "logistics_at_localhost";


$tdatatb_activities_type[".strOriginalTableName"] = "tb_activities_type";

	



$tdatatb_activities_type[".showAddInPopup"] = false;

$tdatatb_activities_type[".showEditInPopup"] = false;

$tdatatb_activities_type[".showViewInPopup"] = false;

$tdatatb_activities_type[".listAjax"] = false;
//	temporary
//$tdatatb_activities_type[".listAjax"] = false;

	$tdatatb_activities_type[".audit"] = true;

	$tdatatb_activities_type[".locking"] = false;


$pages = $tdatatb_activities_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_activities_type[".edit"] = true;
	$tdatatb_activities_type[".afterEditAction"] = 1;
	$tdatatb_activities_type[".closePopupAfterEdit"] = 1;
	$tdatatb_activities_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_activities_type[".add"] = true;
$tdatatb_activities_type[".afterAddAction"] = 1;
$tdatatb_activities_type[".closePopupAfterAdd"] = 1;
$tdatatb_activities_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_activities_type[".list"] = true;
}



$tdatatb_activities_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_activities_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_activities_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_activities_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_activities_type[".printFriendly"] = true;
}



$tdatatb_activities_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_activities_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_activities_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_activities_type[".isUseAjaxSuggest"] = true;

$tdatatb_activities_type[".rowHighlite"] = true;



																					

$tdatatb_activities_type[".ajaxCodeSnippetAdded"] = false;

$tdatatb_activities_type[".buttonsAdded"] = false;

$tdatatb_activities_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_activities_type[".isUseTimeForSearch"] = false;


$tdatatb_activities_type[".badgeColor"] = "B22222";


$tdatatb_activities_type[".allSearchFields"] = array();
$tdatatb_activities_type[".filterFields"] = array();
$tdatatb_activities_type[".requiredSearchFields"] = array();

$tdatatb_activities_type[".googleLikeFields"] = array();
$tdatatb_activities_type[".googleLikeFields"][] = "ActivitiesTypeID";
$tdatatb_activities_type[".googleLikeFields"][] = "ActivitiesTypeDescription";
$tdatatb_activities_type[".googleLikeFields"][] = "ActivitiesTypeLanguage";



$tdatatb_activities_type[".tableType"] = "list";

$tdatatb_activities_type[".printerPageOrientation"] = 0;
$tdatatb_activities_type[".nPrinterPageScale"] = 100;

$tdatatb_activities_type[".nPrinterSplitRecords"] = 40;

$tdatatb_activities_type[".geocodingEnabled"] = false;










$tdatatb_activities_type[".pageSize"] = 20;

$tdatatb_activities_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_activities_type[".strOrderBy"] = $tstrOrderBy;

$tdatatb_activities_type[".orderindexes"] = array();


$tdatatb_activities_type[".sqlHead"] = "SELECT ActivitiesTypeID,  	ActivitiesTypeDescription,  	ActivitiesTypeLanguage";
$tdatatb_activities_type[".sqlFrom"] = "FROM tb_activities_type";
$tdatatb_activities_type[".sqlWhereExpr"] = "";
$tdatatb_activities_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_activities_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_activities_type[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_activities_type[".highlightSearchResults"] = true;

$tableKeystb_activities_type = array();
$tableKeystb_activities_type[] = "ActivitiesTypeID";
$tdatatb_activities_type[".Keys"] = $tableKeystb_activities_type;


$tdatatb_activities_type[".hideMobileList"] = array();




//	ActivitiesTypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ActivitiesTypeID";
	$fdata["GoodName"] = "ActivitiesTypeID";
	$fdata["ownerTable"] = "tb_activities_type";
	$fdata["Label"] = GetFieldLabel("tb_activities_type","ActivitiesTypeID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ActivitiesTypeID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ActivitiesTypeID";

	
	
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


	$tdatatb_activities_type["ActivitiesTypeID"] = $fdata;
		$tdatatb_activities_type[".searchableFields"][] = "ActivitiesTypeID";
//	ActivitiesTypeDescription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ActivitiesTypeDescription";
	$fdata["GoodName"] = "ActivitiesTypeDescription";
	$fdata["ownerTable"] = "tb_activities_type";
	$fdata["Label"] = GetFieldLabel("tb_activities_type","ActivitiesTypeDescription");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ActivitiesTypeDescription";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ActivitiesTypeDescription";

	
	
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


	$tdatatb_activities_type["ActivitiesTypeDescription"] = $fdata;
		$tdatatb_activities_type[".searchableFields"][] = "ActivitiesTypeDescription";
//	ActivitiesTypeLanguage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ActivitiesTypeLanguage";
	$fdata["GoodName"] = "ActivitiesTypeLanguage";
	$fdata["ownerTable"] = "tb_activities_type";
	$fdata["Label"] = GetFieldLabel("tb_activities_type","ActivitiesTypeLanguage");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ActivitiesTypeLanguage";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ActivitiesTypeLanguage";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdatatb_activities_type["ActivitiesTypeLanguage"] = $fdata;
		$tdatatb_activities_type[".searchableFields"][] = "ActivitiesTypeLanguage";


$tables_data["tb_activities_type"]=&$tdatatb_activities_type;
$field_labels["tb_activities_type"] = &$fieldLabelstb_activities_type;
$fieldToolTips["tb_activities_type"] = &$fieldToolTipstb_activities_type;
$placeHolders["tb_activities_type"] = &$placeHolderstb_activities_type;
$page_titles["tb_activities_type"] = &$pageTitlestb_activities_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tb_activities_type"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tb_activities_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tb_activities_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ActivitiesTypeID,  	ActivitiesTypeDescription,  	ActivitiesTypeLanguage";
$proto0["m_strFrom"] = "FROM tb_activities_type";
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
	"m_strName" => "ActivitiesTypeID",
	"m_strTable" => "tb_activities_type",
	"m_srcTableName" => "tb_activities_type"
));

$proto6["m_sql"] = "ActivitiesTypeID";
$proto6["m_srcTableName"] = "tb_activities_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ActivitiesTypeDescription",
	"m_strTable" => "tb_activities_type",
	"m_srcTableName" => "tb_activities_type"
));

$proto8["m_sql"] = "ActivitiesTypeDescription";
$proto8["m_srcTableName"] = "tb_activities_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ActivitiesTypeLanguage",
	"m_strTable" => "tb_activities_type",
	"m_srcTableName" => "tb_activities_type"
));

$proto10["m_sql"] = "ActivitiesTypeLanguage";
$proto10["m_srcTableName"] = "tb_activities_type";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tb_activities_type";
$proto13["m_srcTableName"] = "tb_activities_type";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ActivitiesTypeID";
$proto13["m_columns"][] = "ActivitiesTypeDescription";
$proto13["m_columns"][] = "ActivitiesTypeLanguage";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tb_activities_type";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tb_activities_type";
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
$proto0["m_srcTableName"]="tb_activities_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_activities_type = createSqlQuery_tb_activities_type();


	
		;

			

$tdatatb_activities_type[".sqlquery"] = $queryData_tb_activities_type;



$tableEvents["tb_activities_type"] = new eventsBase;
$tdatatb_activities_type[".hasEvents"] = false;

?>