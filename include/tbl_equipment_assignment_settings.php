<?php
$tdatatbl_equipment_assignment = array();
$tdatatbl_equipment_assignment[".searchableFields"] = array();
$tdatatbl_equipment_assignment[".ShortName"] = "tbl_equipment_assignment";
$tdatatbl_equipment_assignment[".OwnerID"] = "";
$tdatatbl_equipment_assignment[".OriginalTable"] = "tbl_equipment_assignment";


$tdatatbl_equipment_assignment[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_equipment_assignment[".originalPagesByType"] = $tdatatbl_equipment_assignment[".pagesByType"];
$tdatatbl_equipment_assignment[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_equipment_assignment[".originalPages"] = $tdatatbl_equipment_assignment[".pages"];
$tdatatbl_equipment_assignment[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_equipment_assignment[".originalDefaultPages"] = $tdatatbl_equipment_assignment[".defaultPages"];

//	field labels
$fieldLabelstbl_equipment_assignment = array();
$fieldToolTipstbl_equipment_assignment = array();
$pageTitlestbl_equipment_assignment = array();
$placeHolderstbl_equipment_assignment = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_equipment_assignment["English"] = array();
	$fieldToolTipstbl_equipment_assignment["English"] = array();
	$placeHolderstbl_equipment_assignment["English"] = array();
	$pageTitlestbl_equipment_assignment["English"] = array();
	$fieldLabelstbl_equipment_assignment["English"]["ID"] = "ID";
	$fieldToolTipstbl_equipment_assignment["English"]["ID"] = "";
	$placeHolderstbl_equipment_assignment["English"]["ID"] = "";
	$fieldLabelstbl_equipment_assignment["English"]["EquipmentID"] = "Equipment";
	$fieldToolTipstbl_equipment_assignment["English"]["EquipmentID"] = "";
	$placeHolderstbl_equipment_assignment["English"]["EquipmentID"] = "";
	$fieldLabelstbl_equipment_assignment["English"]["StartDate"] = "Start Date";
	$fieldToolTipstbl_equipment_assignment["English"]["StartDate"] = "";
	$placeHolderstbl_equipment_assignment["English"]["StartDate"] = "";
	$fieldLabelstbl_equipment_assignment["English"]["EndDate"] = "End Date";
	$fieldToolTipstbl_equipment_assignment["English"]["EndDate"] = "";
	$placeHolderstbl_equipment_assignment["English"]["EndDate"] = "";
	$fieldLabelstbl_equipment_assignment["English"]["OrderID"] = "Order ID";
	$fieldToolTipstbl_equipment_assignment["English"]["OrderID"] = "";
	$placeHolderstbl_equipment_assignment["English"]["OrderID"] = "";
	if (count($fieldToolTipstbl_equipment_assignment["English"]))
		$tdatatbl_equipment_assignment[".isUseToolTips"] = true;
}


	$tdatatbl_equipment_assignment[".NCSearch"] = true;



$tdatatbl_equipment_assignment[".shortTableName"] = "tbl_equipment_assignment";
$tdatatbl_equipment_assignment[".nSecOptions"] = 0;

$tdatatbl_equipment_assignment[".mainTableOwnerID"] = "";
$tdatatbl_equipment_assignment[".entityType"] = 0;
$tdatatbl_equipment_assignment[".connId"] = "logistics_at_localhost";


$tdatatbl_equipment_assignment[".strOriginalTableName"] = "tbl_equipment_assignment";

	



$tdatatbl_equipment_assignment[".showAddInPopup"] = false;

$tdatatbl_equipment_assignment[".showEditInPopup"] = false;

$tdatatbl_equipment_assignment[".showViewInPopup"] = false;

$tdatatbl_equipment_assignment[".listAjax"] = false;
//	temporary
//$tdatatbl_equipment_assignment[".listAjax"] = false;

	$tdatatbl_equipment_assignment[".audit"] = true;

	$tdatatbl_equipment_assignment[".locking"] = false;


$pages = $tdatatbl_equipment_assignment[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_equipment_assignment[".edit"] = true;
	$tdatatbl_equipment_assignment[".afterEditAction"] = 1;
	$tdatatbl_equipment_assignment[".closePopupAfterEdit"] = 1;
	$tdatatbl_equipment_assignment[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_equipment_assignment[".add"] = true;
$tdatatbl_equipment_assignment[".afterAddAction"] = 1;
$tdatatbl_equipment_assignment[".closePopupAfterAdd"] = 1;
$tdatatbl_equipment_assignment[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_equipment_assignment[".list"] = true;
}



$tdatatbl_equipment_assignment[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_equipment_assignment[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_equipment_assignment[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_equipment_assignment[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_equipment_assignment[".printFriendly"] = true;
}



$tdatatbl_equipment_assignment[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_equipment_assignment[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_equipment_assignment[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_equipment_assignment[".isUseAjaxSuggest"] = true;

$tdatatbl_equipment_assignment[".rowHighlite"] = true;



																					

$tdatatbl_equipment_assignment[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_equipment_assignment[".buttonsAdded"] = false;

$tdatatbl_equipment_assignment[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_equipment_assignment[".isUseTimeForSearch"] = false;


$tdatatbl_equipment_assignment[".badgeColor"] = "4682B4";


$tdatatbl_equipment_assignment[".allSearchFields"] = array();
$tdatatbl_equipment_assignment[".filterFields"] = array();
$tdatatbl_equipment_assignment[".requiredSearchFields"] = array();

$tdatatbl_equipment_assignment[".googleLikeFields"] = array();
$tdatatbl_equipment_assignment[".googleLikeFields"][] = "ID";
$tdatatbl_equipment_assignment[".googleLikeFields"][] = "EquipmentID";
$tdatatbl_equipment_assignment[".googleLikeFields"][] = "StartDate";
$tdatatbl_equipment_assignment[".googleLikeFields"][] = "EndDate";
$tdatatbl_equipment_assignment[".googleLikeFields"][] = "OrderID";



$tdatatbl_equipment_assignment[".tableType"] = "list";

$tdatatbl_equipment_assignment[".printerPageOrientation"] = 0;
$tdatatbl_equipment_assignment[".nPrinterPageScale"] = 100;

$tdatatbl_equipment_assignment[".nPrinterSplitRecords"] = 40;

$tdatatbl_equipment_assignment[".geocodingEnabled"] = false;










$tdatatbl_equipment_assignment[".pageSize"] = 20;

$tdatatbl_equipment_assignment[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_equipment_assignment[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_equipment_assignment[".orderindexes"] = array();


$tdatatbl_equipment_assignment[".sqlHead"] = "SELECT ID,  	EquipmentID,  	StartDate,  	EndDate,  	OrderID";
$tdatatbl_equipment_assignment[".sqlFrom"] = "FROM tbl_equipment_assignment";
$tdatatbl_equipment_assignment[".sqlWhereExpr"] = "";
$tdatatbl_equipment_assignment[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_equipment_assignment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_equipment_assignment[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_equipment_assignment[".highlightSearchResults"] = true;

$tableKeystbl_equipment_assignment = array();
$tableKeystbl_equipment_assignment[] = "ID";
$tdatatbl_equipment_assignment[".Keys"] = $tableKeystbl_equipment_assignment;


$tdatatbl_equipment_assignment[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_equipment_assignment";
	$fdata["Label"] = GetFieldLabel("tbl_equipment_assignment","ID");
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


	$tdatatbl_equipment_assignment["ID"] = $fdata;
		$tdatatbl_equipment_assignment[".searchableFields"][] = "ID";
//	EquipmentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EquipmentID";
	$fdata["GoodName"] = "EquipmentID";
	$fdata["ownerTable"] = "tbl_equipment_assignment";
	$fdata["Label"] = GetFieldLabel("tbl_equipment_assignment","EquipmentID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "EquipmentID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EquipmentID";

	
	
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


	$tdatatbl_equipment_assignment["EquipmentID"] = $fdata;
		$tdatatbl_equipment_assignment[".searchableFields"][] = "EquipmentID";
//	StartDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "StartDate";
	$fdata["GoodName"] = "StartDate";
	$fdata["ownerTable"] = "tbl_equipment_assignment";
	$fdata["Label"] = GetFieldLabel("tbl_equipment_assignment","StartDate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "StartDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "StartDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatatbl_equipment_assignment["StartDate"] = $fdata;
		$tdatatbl_equipment_assignment[".searchableFields"][] = "StartDate";
//	EndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "EndDate";
	$fdata["GoodName"] = "EndDate";
	$fdata["ownerTable"] = "tbl_equipment_assignment";
	$fdata["Label"] = GetFieldLabel("tbl_equipment_assignment","EndDate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "EndDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EndDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatatbl_equipment_assignment["EndDate"] = $fdata;
		$tdatatbl_equipment_assignment[".searchableFields"][] = "EndDate";
//	OrderID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "OrderID";
	$fdata["GoodName"] = "OrderID";
	$fdata["ownerTable"] = "tbl_equipment_assignment";
	$fdata["Label"] = GetFieldLabel("tbl_equipment_assignment","OrderID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "OrderID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OrderID";

	
	
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


	$tdatatbl_equipment_assignment["OrderID"] = $fdata;
		$tdatatbl_equipment_assignment[".searchableFields"][] = "OrderID";


$tables_data["tbl_equipment_assignment"]=&$tdatatbl_equipment_assignment;
$field_labels["tbl_equipment_assignment"] = &$fieldLabelstbl_equipment_assignment;
$fieldToolTips["tbl_equipment_assignment"] = &$fieldToolTipstbl_equipment_assignment;
$placeHolders["tbl_equipment_assignment"] = &$placeHolderstbl_equipment_assignment;
$page_titles["tbl_equipment_assignment"] = &$pageTitlestbl_equipment_assignment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_equipment_assignment"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_equipment_assignment"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_equipment_assignment()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	EquipmentID,  	StartDate,  	EndDate,  	OrderID";
$proto0["m_strFrom"] = "FROM tbl_equipment_assignment";
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
	"m_strTable" => "tbl_equipment_assignment",
	"m_srcTableName" => "tbl_equipment_assignment"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_equipment_assignment";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EquipmentID",
	"m_strTable" => "tbl_equipment_assignment",
	"m_srcTableName" => "tbl_equipment_assignment"
));

$proto8["m_sql"] = "EquipmentID";
$proto8["m_srcTableName"] = "tbl_equipment_assignment";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "StartDate",
	"m_strTable" => "tbl_equipment_assignment",
	"m_srcTableName" => "tbl_equipment_assignment"
));

$proto10["m_sql"] = "StartDate";
$proto10["m_srcTableName"] = "tbl_equipment_assignment";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "EndDate",
	"m_strTable" => "tbl_equipment_assignment",
	"m_srcTableName" => "tbl_equipment_assignment"
));

$proto12["m_sql"] = "EndDate";
$proto12["m_srcTableName"] = "tbl_equipment_assignment";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "OrderID",
	"m_strTable" => "tbl_equipment_assignment",
	"m_srcTableName" => "tbl_equipment_assignment"
));

$proto14["m_sql"] = "OrderID";
$proto14["m_srcTableName"] = "tbl_equipment_assignment";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "tbl_equipment_assignment";
$proto17["m_srcTableName"] = "tbl_equipment_assignment";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ID";
$proto17["m_columns"][] = "EquipmentID";
$proto17["m_columns"][] = "StartDate";
$proto17["m_columns"][] = "EndDate";
$proto17["m_columns"][] = "OrderID";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "tbl_equipment_assignment";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "tbl_equipment_assignment";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_equipment_assignment";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_equipment_assignment = createSqlQuery_tbl_equipment_assignment();


	
		;

					

$tdatatbl_equipment_assignment[".sqlquery"] = $queryData_tbl_equipment_assignment;



$tableEvents["tbl_equipment_assignment"] = new eventsBase;
$tdatatbl_equipment_assignment[".hasEvents"] = false;

?>