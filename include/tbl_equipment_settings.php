<?php
$tdatatbl_equipment = array();
$tdatatbl_equipment[".searchableFields"] = array();
$tdatatbl_equipment[".ShortName"] = "tbl_equipment";
$tdatatbl_equipment[".OwnerID"] = "";
$tdatatbl_equipment[".OriginalTable"] = "tbl_equipment";


$tdatatbl_equipment[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatbl_equipment[".originalPagesByType"] = $tdatatbl_equipment[".pagesByType"];
$tdatatbl_equipment[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatbl_equipment[".originalPages"] = $tdatatbl_equipment[".pages"];
$tdatatbl_equipment[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatbl_equipment[".originalDefaultPages"] = $tdatatbl_equipment[".defaultPages"];

//	field labels
$fieldLabelstbl_equipment = array();
$fieldToolTipstbl_equipment = array();
$pageTitlestbl_equipment = array();
$placeHolderstbl_equipment = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_equipment["English"] = array();
	$fieldToolTipstbl_equipment["English"] = array();
	$placeHolderstbl_equipment["English"] = array();
	$pageTitlestbl_equipment["English"] = array();
	$fieldLabelstbl_equipment["English"]["ID"] = "ID";
	$fieldToolTipstbl_equipment["English"]["ID"] = "";
	$placeHolderstbl_equipment["English"]["ID"] = "";
	$fieldLabelstbl_equipment["English"]["EquipmentNumber"] = "Equipment Number";
	$fieldToolTipstbl_equipment["English"]["EquipmentNumber"] = "";
	$placeHolderstbl_equipment["English"]["EquipmentNumber"] = "";
	$fieldLabelstbl_equipment["English"]["EquipmentDescription"] = "Equipment Description";
	$fieldToolTipstbl_equipment["English"]["EquipmentDescription"] = "";
	$placeHolderstbl_equipment["English"]["EquipmentDescription"] = "";
	$fieldLabelstbl_equipment["English"]["EquipmentTypeID"] = "Equipment Type";
	$fieldToolTipstbl_equipment["English"]["EquipmentTypeID"] = "";
	$placeHolderstbl_equipment["English"]["EquipmentTypeID"] = "";
	if (count($fieldToolTipstbl_equipment["English"]))
		$tdatatbl_equipment[".isUseToolTips"] = true;
}


	$tdatatbl_equipment[".NCSearch"] = true;



$tdatatbl_equipment[".shortTableName"] = "tbl_equipment";
$tdatatbl_equipment[".nSecOptions"] = 0;

$tdatatbl_equipment[".mainTableOwnerID"] = "";
$tdatatbl_equipment[".entityType"] = 0;
$tdatatbl_equipment[".connId"] = "logistics_at_localhost";


$tdatatbl_equipment[".strOriginalTableName"] = "tbl_equipment";

	



$tdatatbl_equipment[".showAddInPopup"] = false;

$tdatatbl_equipment[".showEditInPopup"] = false;

$tdatatbl_equipment[".showViewInPopup"] = false;

$tdatatbl_equipment[".listAjax"] = false;
//	temporary
//$tdatatbl_equipment[".listAjax"] = false;

	$tdatatbl_equipment[".audit"] = true;

	$tdatatbl_equipment[".locking"] = false;


$pages = $tdatatbl_equipment[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_equipment[".edit"] = true;
	$tdatatbl_equipment[".afterEditAction"] = 1;
	$tdatatbl_equipment[".closePopupAfterEdit"] = 1;
	$tdatatbl_equipment[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_equipment[".add"] = true;
$tdatatbl_equipment[".afterAddAction"] = 1;
$tdatatbl_equipment[".closePopupAfterAdd"] = 1;
$tdatatbl_equipment[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_equipment[".list"] = true;
}



$tdatatbl_equipment[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_equipment[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_equipment[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_equipment[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_equipment[".printFriendly"] = true;
}



$tdatatbl_equipment[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_equipment[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_equipment[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_equipment[".isUseAjaxSuggest"] = true;

$tdatatbl_equipment[".rowHighlite"] = true;



																					

$tdatatbl_equipment[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_equipment[".buttonsAdded"] = false;

$tdatatbl_equipment[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_equipment[".isUseTimeForSearch"] = false;


$tdatatbl_equipment[".badgeColor"] = "CD5C5C";


$tdatatbl_equipment[".allSearchFields"] = array();
$tdatatbl_equipment[".filterFields"] = array();
$tdatatbl_equipment[".requiredSearchFields"] = array();

$tdatatbl_equipment[".googleLikeFields"] = array();
$tdatatbl_equipment[".googleLikeFields"][] = "ID";
$tdatatbl_equipment[".googleLikeFields"][] = "EquipmentTypeID";
$tdatatbl_equipment[".googleLikeFields"][] = "EquipmentNumber";
$tdatatbl_equipment[".googleLikeFields"][] = "EquipmentDescription";



$tdatatbl_equipment[".tableType"] = "list";

$tdatatbl_equipment[".printerPageOrientation"] = 0;
$tdatatbl_equipment[".nPrinterPageScale"] = 100;

$tdatatbl_equipment[".nPrinterSplitRecords"] = 40;

$tdatatbl_equipment[".geocodingEnabled"] = false;










$tdatatbl_equipment[".pageSize"] = 20;

$tdatatbl_equipment[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_equipment[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_equipment[".orderindexes"] = array();


$tdatatbl_equipment[".sqlHead"] = "SELECT ID,  	EquipmentTypeID,  	EquipmentNumber,  	EquipmentDescription";
$tdatatbl_equipment[".sqlFrom"] = "FROM tbl_equipment";
$tdatatbl_equipment[".sqlWhereExpr"] = "";
$tdatatbl_equipment[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_equipment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_equipment[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_equipment[".highlightSearchResults"] = true;

$tableKeystbl_equipment = array();
$tableKeystbl_equipment[] = "ID";
$tdatatbl_equipment[".Keys"] = $tableKeystbl_equipment;


$tdatatbl_equipment[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_equipment";
	$fdata["Label"] = GetFieldLabel("tbl_equipment","ID");
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


	$tdatatbl_equipment["ID"] = $fdata;
		$tdatatbl_equipment[".searchableFields"][] = "ID";
//	EquipmentTypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EquipmentTypeID";
	$fdata["GoodName"] = "EquipmentTypeID";
	$fdata["ownerTable"] = "tbl_equipment";
	$fdata["Label"] = GetFieldLabel("tbl_equipment","EquipmentTypeID");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "EquipmentTypeID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EquipmentTypeID";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatatbl_equipment["EquipmentTypeID"] = $fdata;
		$tdatatbl_equipment[".searchableFields"][] = "EquipmentTypeID";
//	EquipmentNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EquipmentNumber";
	$fdata["GoodName"] = "EquipmentNumber";
	$fdata["ownerTable"] = "tbl_equipment";
	$fdata["Label"] = GetFieldLabel("tbl_equipment","EquipmentNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "EquipmentNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EquipmentNumber";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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


	$tdatatbl_equipment["EquipmentNumber"] = $fdata;
		$tdatatbl_equipment[".searchableFields"][] = "EquipmentNumber";
//	EquipmentDescription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "EquipmentDescription";
	$fdata["GoodName"] = "EquipmentDescription";
	$fdata["ownerTable"] = "tbl_equipment";
	$fdata["Label"] = GetFieldLabel("tbl_equipment","EquipmentDescription");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "EquipmentDescription";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EquipmentDescription";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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


	$tdatatbl_equipment["EquipmentDescription"] = $fdata;
		$tdatatbl_equipment[".searchableFields"][] = "EquipmentDescription";


$tables_data["tbl_equipment"]=&$tdatatbl_equipment;
$field_labels["tbl_equipment"] = &$fieldLabelstbl_equipment;
$fieldToolTips["tbl_equipment"] = &$fieldToolTipstbl_equipment;
$placeHolders["tbl_equipment"] = &$placeHolderstbl_equipment;
$page_titles["tbl_equipment"] = &$pageTitlestbl_equipment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_equipment"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_equipment"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_equipment()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	EquipmentTypeID,  	EquipmentNumber,  	EquipmentDescription";
$proto0["m_strFrom"] = "FROM tbl_equipment";
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
	"m_strTable" => "tbl_equipment",
	"m_srcTableName" => "tbl_equipment"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_equipment";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EquipmentTypeID",
	"m_strTable" => "tbl_equipment",
	"m_srcTableName" => "tbl_equipment"
));

$proto8["m_sql"] = "EquipmentTypeID";
$proto8["m_srcTableName"] = "tbl_equipment";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EquipmentNumber",
	"m_strTable" => "tbl_equipment",
	"m_srcTableName" => "tbl_equipment"
));

$proto10["m_sql"] = "EquipmentNumber";
$proto10["m_srcTableName"] = "tbl_equipment";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "EquipmentDescription",
	"m_strTable" => "tbl_equipment",
	"m_srcTableName" => "tbl_equipment"
));

$proto12["m_sql"] = "EquipmentDescription";
$proto12["m_srcTableName"] = "tbl_equipment";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tbl_equipment";
$proto15["m_srcTableName"] = "tbl_equipment";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "ID";
$proto15["m_columns"][] = "EquipmentTypeID";
$proto15["m_columns"][] = "EquipmentNumber";
$proto15["m_columns"][] = "EquipmentDescription";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "tbl_equipment";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tbl_equipment";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_equipment";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_equipment = createSqlQuery_tbl_equipment();


	
		;

				

$tdatatbl_equipment[".sqlquery"] = $queryData_tbl_equipment;



$tableEvents["tbl_equipment"] = new eventsBase;
$tdatatbl_equipment[".hasEvents"] = false;

?>