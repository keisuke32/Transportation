<?php
$tdatatbl_order_assesorial = array();
$tdatatbl_order_assesorial[".searchableFields"] = array();
$tdatatbl_order_assesorial[".ShortName"] = "tbl_order_assesorial";
$tdatatbl_order_assesorial[".OwnerID"] = "";
$tdatatbl_order_assesorial[".OriginalTable"] = "tbl_order_assesorial";


$tdatatbl_order_assesorial[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_order_assesorial[".originalPagesByType"] = $tdatatbl_order_assesorial[".pagesByType"];
$tdatatbl_order_assesorial[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_order_assesorial[".originalPages"] = $tdatatbl_order_assesorial[".pages"];
$tdatatbl_order_assesorial[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_order_assesorial[".originalDefaultPages"] = $tdatatbl_order_assesorial[".defaultPages"];

//	field labels
$fieldLabelstbl_order_assesorial = array();
$fieldToolTipstbl_order_assesorial = array();
$pageTitlestbl_order_assesorial = array();
$placeHolderstbl_order_assesorial = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_order_assesorial["English"] = array();
	$fieldToolTipstbl_order_assesorial["English"] = array();
	$placeHolderstbl_order_assesorial["English"] = array();
	$pageTitlestbl_order_assesorial["English"] = array();
	$fieldLabelstbl_order_assesorial["English"]["ID"] = "ID";
	$fieldToolTipstbl_order_assesorial["English"]["ID"] = "";
	$placeHolderstbl_order_assesorial["English"]["ID"] = "";
	$fieldLabelstbl_order_assesorial["English"]["OrderID"] = "Order";
	$fieldToolTipstbl_order_assesorial["English"]["OrderID"] = "";
	$placeHolderstbl_order_assesorial["English"]["OrderID"] = "";
	$fieldLabelstbl_order_assesorial["English"]["Description"] = "Description";
	$fieldToolTipstbl_order_assesorial["English"]["Description"] = "";
	$placeHolderstbl_order_assesorial["English"]["Description"] = "";
	$fieldLabelstbl_order_assesorial["English"]["Amount"] = "Amount";
	$fieldToolTipstbl_order_assesorial["English"]["Amount"] = "";
	$placeHolderstbl_order_assesorial["English"]["Amount"] = "";
	if (count($fieldToolTipstbl_order_assesorial["English"]))
		$tdatatbl_order_assesorial[".isUseToolTips"] = true;
}


	$tdatatbl_order_assesorial[".NCSearch"] = true;



$tdatatbl_order_assesorial[".shortTableName"] = "tbl_order_assesorial";
$tdatatbl_order_assesorial[".nSecOptions"] = 0;

$tdatatbl_order_assesorial[".mainTableOwnerID"] = "";
$tdatatbl_order_assesorial[".entityType"] = 0;
$tdatatbl_order_assesorial[".connId"] = "logistics_at_localhost";


$tdatatbl_order_assesorial[".strOriginalTableName"] = "tbl_order_assesorial";

	



$tdatatbl_order_assesorial[".showAddInPopup"] = false;

$tdatatbl_order_assesorial[".showEditInPopup"] = false;

$tdatatbl_order_assesorial[".showViewInPopup"] = false;

$tdatatbl_order_assesorial[".listAjax"] = false;
//	temporary
//$tdatatbl_order_assesorial[".listAjax"] = false;

	$tdatatbl_order_assesorial[".audit"] = true;

	$tdatatbl_order_assesorial[".locking"] = false;


$pages = $tdatatbl_order_assesorial[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_order_assesorial[".edit"] = true;
	$tdatatbl_order_assesorial[".afterEditAction"] = 1;
	$tdatatbl_order_assesorial[".closePopupAfterEdit"] = 1;
	$tdatatbl_order_assesorial[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_order_assesorial[".add"] = true;
$tdatatbl_order_assesorial[".afterAddAction"] = 1;
$tdatatbl_order_assesorial[".closePopupAfterAdd"] = 1;
$tdatatbl_order_assesorial[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_order_assesorial[".list"] = true;
}



$tdatatbl_order_assesorial[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_order_assesorial[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_order_assesorial[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_order_assesorial[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_order_assesorial[".printFriendly"] = true;
}



$tdatatbl_order_assesorial[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_order_assesorial[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_order_assesorial[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_order_assesorial[".isUseAjaxSuggest"] = true;

$tdatatbl_order_assesorial[".rowHighlite"] = true;



																																										

$tdatatbl_order_assesorial[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_order_assesorial[".buttonsAdded"] = false;

$tdatatbl_order_assesorial[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_order_assesorial[".isUseTimeForSearch"] = false;


$tdatatbl_order_assesorial[".badgeColor"] = "8fbc8b";


$tdatatbl_order_assesorial[".allSearchFields"] = array();
$tdatatbl_order_assesorial[".filterFields"] = array();
$tdatatbl_order_assesorial[".requiredSearchFields"] = array();

$tdatatbl_order_assesorial[".googleLikeFields"] = array();
$tdatatbl_order_assesorial[".googleLikeFields"][] = "ID";
$tdatatbl_order_assesorial[".googleLikeFields"][] = "OrderID";
$tdatatbl_order_assesorial[".googleLikeFields"][] = "Description";
$tdatatbl_order_assesorial[".googleLikeFields"][] = "Amount";



$tdatatbl_order_assesorial[".tableType"] = "list";

$tdatatbl_order_assesorial[".printerPageOrientation"] = 0;
$tdatatbl_order_assesorial[".nPrinterPageScale"] = 100;

$tdatatbl_order_assesorial[".nPrinterSplitRecords"] = 40;

$tdatatbl_order_assesorial[".geocodingEnabled"] = false;










$tdatatbl_order_assesorial[".pageSize"] = 20;

$tdatatbl_order_assesorial[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_order_assesorial[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_order_assesorial[".orderindexes"] = array();


$tdatatbl_order_assesorial[".sqlHead"] = "SELECT ID,  	OrderID,  	Description,  	Amount";
$tdatatbl_order_assesorial[".sqlFrom"] = "FROM tbl_order_assesorial";
$tdatatbl_order_assesorial[".sqlWhereExpr"] = "";
$tdatatbl_order_assesorial[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_order_assesorial[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_order_assesorial[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_order_assesorial[".highlightSearchResults"] = true;

$tableKeystbl_order_assesorial = array();
$tableKeystbl_order_assesorial[] = "ID";
$tdatatbl_order_assesorial[".Keys"] = $tableKeystbl_order_assesorial;


$tdatatbl_order_assesorial[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_order_assesorial";
	$fdata["Label"] = GetFieldLabel("tbl_order_assesorial","ID");
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


	$tdatatbl_order_assesorial["ID"] = $fdata;
		$tdatatbl_order_assesorial[".searchableFields"][] = "ID";
//	OrderID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "OrderID";
	$fdata["GoodName"] = "OrderID";
	$fdata["ownerTable"] = "tbl_order_assesorial";
	$fdata["Label"] = GetFieldLabel("tbl_order_assesorial","OrderID");
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


	$tdatatbl_order_assesorial["OrderID"] = $fdata;
		$tdatatbl_order_assesorial[".searchableFields"][] = "OrderID";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "tbl_order_assesorial";
	$fdata["Label"] = GetFieldLabel("tbl_order_assesorial","Description");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Description";

	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatbl_order_assesorial["Description"] = $fdata;
		$tdatatbl_order_assesorial[".searchableFields"][] = "Description";
//	Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Amount";
	$fdata["GoodName"] = "Amount";
	$fdata["ownerTable"] = "tbl_order_assesorial";
	$fdata["Label"] = GetFieldLabel("tbl_order_assesorial","Amount");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Amount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Amount";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
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


	$tdatatbl_order_assesorial["Amount"] = $fdata;
		$tdatatbl_order_assesorial[".searchableFields"][] = "Amount";


$tables_data["tbl_order_assesorial"]=&$tdatatbl_order_assesorial;
$field_labels["tbl_order_assesorial"] = &$fieldLabelstbl_order_assesorial;
$fieldToolTips["tbl_order_assesorial"] = &$fieldToolTipstbl_order_assesorial;
$placeHolders["tbl_order_assesorial"] = &$placeHolderstbl_order_assesorial;
$page_titles["tbl_order_assesorial"] = &$pageTitlestbl_order_assesorial;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_order_assesorial"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_order_assesorial"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tbl_orders";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_orders";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_orders";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_order_assesorial"][0] = $masterParams;
				$masterTablesData["tbl_order_assesorial"][0]["masterKeys"] = array();
	$masterTablesData["tbl_order_assesorial"][0]["masterKeys"][]="ID";
				$masterTablesData["tbl_order_assesorial"][0]["detailKeys"] = array();
	$masterTablesData["tbl_order_assesorial"][0]["detailKeys"][]="OrderID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_order_assesorial()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	OrderID,  	Description,  	Amount";
$proto0["m_strFrom"] = "FROM tbl_order_assesorial";
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
	"m_strTable" => "tbl_order_assesorial",
	"m_srcTableName" => "tbl_order_assesorial"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_order_assesorial";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "OrderID",
	"m_strTable" => "tbl_order_assesorial",
	"m_srcTableName" => "tbl_order_assesorial"
));

$proto8["m_sql"] = "OrderID";
$proto8["m_srcTableName"] = "tbl_order_assesorial";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "tbl_order_assesorial",
	"m_srcTableName" => "tbl_order_assesorial"
));

$proto10["m_sql"] = "Description";
$proto10["m_srcTableName"] = "tbl_order_assesorial";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount",
	"m_strTable" => "tbl_order_assesorial",
	"m_srcTableName" => "tbl_order_assesorial"
));

$proto12["m_sql"] = "Amount";
$proto12["m_srcTableName"] = "tbl_order_assesorial";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tbl_order_assesorial";
$proto15["m_srcTableName"] = "tbl_order_assesorial";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "ID";
$proto15["m_columns"][] = "OrderID";
$proto15["m_columns"][] = "Description";
$proto15["m_columns"][] = "Amount";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "tbl_order_assesorial";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tbl_order_assesorial";
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
$proto0["m_srcTableName"]="tbl_order_assesorial";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_order_assesorial = createSqlQuery_tbl_order_assesorial();


	
		;

				

$tdatatbl_order_assesorial[".sqlquery"] = $queryData_tbl_order_assesorial;



$tableEvents["tbl_order_assesorial"] = new eventsBase;
$tdatatbl_order_assesorial[".hasEvents"] = false;

?>