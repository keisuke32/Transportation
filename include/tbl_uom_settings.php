<?php
$tdatatbl_uom = array();
$tdatatbl_uom[".searchableFields"] = array();
$tdatatbl_uom[".ShortName"] = "tbl_uom";
$tdatatbl_uom[".OwnerID"] = "";
$tdatatbl_uom[".OriginalTable"] = "tbl_uom";


$tdatatbl_uom[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_uom[".originalPagesByType"] = $tdatatbl_uom[".pagesByType"];
$tdatatbl_uom[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_uom[".originalPages"] = $tdatatbl_uom[".pages"];
$tdatatbl_uom[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_uom[".originalDefaultPages"] = $tdatatbl_uom[".defaultPages"];

//	field labels
$fieldLabelstbl_uom = array();
$fieldToolTipstbl_uom = array();
$pageTitlestbl_uom = array();
$placeHolderstbl_uom = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_uom["English"] = array();
	$fieldToolTipstbl_uom["English"] = array();
	$placeHolderstbl_uom["English"] = array();
	$pageTitlestbl_uom["English"] = array();
	$fieldLabelstbl_uom["English"]["ID"] = "ID";
	$fieldToolTipstbl_uom["English"]["ID"] = "";
	$placeHolderstbl_uom["English"]["ID"] = "";
	$fieldLabelstbl_uom["English"]["UOMTypeID"] = "UOM Type";
	$fieldToolTipstbl_uom["English"]["UOMTypeID"] = "";
	$placeHolderstbl_uom["English"]["UOMTypeID"] = "";
	$fieldLabelstbl_uom["English"]["Code"] = "Code";
	$fieldToolTipstbl_uom["English"]["Code"] = "";
	$placeHolderstbl_uom["English"]["Code"] = "";
	$fieldLabelstbl_uom["English"]["Name"] = "Name";
	$fieldToolTipstbl_uom["English"]["Name"] = "";
	$placeHolderstbl_uom["English"]["Name"] = "";
	$fieldLabelstbl_uom["English"]["OffCode"] = "Off Code";
	$fieldToolTipstbl_uom["English"]["OffCode"] = "";
	$placeHolderstbl_uom["English"]["OffCode"] = "";
	if (count($fieldToolTipstbl_uom["English"]))
		$tdatatbl_uom[".isUseToolTips"] = true;
}


	$tdatatbl_uom[".NCSearch"] = true;



$tdatatbl_uom[".shortTableName"] = "tbl_uom";
$tdatatbl_uom[".nSecOptions"] = 0;

$tdatatbl_uom[".mainTableOwnerID"] = "";
$tdatatbl_uom[".entityType"] = 0;
$tdatatbl_uom[".connId"] = "logistics_at_localhost";


$tdatatbl_uom[".strOriginalTableName"] = "tbl_uom";

	



$tdatatbl_uom[".showAddInPopup"] = false;

$tdatatbl_uom[".showEditInPopup"] = false;

$tdatatbl_uom[".showViewInPopup"] = false;

	$tdatatbl_uom[".listAjax"] = true;
//	temporary
//$tdatatbl_uom[".listAjax"] = false;

	$tdatatbl_uom[".audit"] = true;

	$tdatatbl_uom[".locking"] = false;


$pages = $tdatatbl_uom[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_uom[".edit"] = true;
	$tdatatbl_uom[".afterEditAction"] = 1;
	$tdatatbl_uom[".closePopupAfterEdit"] = 1;
	$tdatatbl_uom[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_uom[".add"] = true;
$tdatatbl_uom[".afterAddAction"] = 1;
$tdatatbl_uom[".closePopupAfterAdd"] = 1;
$tdatatbl_uom[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_uom[".list"] = true;
}



$tdatatbl_uom[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_uom[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_uom[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_uom[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_uom[".printFriendly"] = true;
}



$tdatatbl_uom[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_uom[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_uom[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_uom[".isUseAjaxSuggest"] = true;

$tdatatbl_uom[".rowHighlite"] = true;



																																										

$tdatatbl_uom[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_uom[".buttonsAdded"] = false;

$tdatatbl_uom[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_uom[".isUseTimeForSearch"] = false;


$tdatatbl_uom[".badgeColor"] = "3cb371";


$tdatatbl_uom[".allSearchFields"] = array();
$tdatatbl_uom[".filterFields"] = array();
$tdatatbl_uom[".requiredSearchFields"] = array();

$tdatatbl_uom[".googleLikeFields"] = array();
$tdatatbl_uom[".googleLikeFields"][] = "ID";
$tdatatbl_uom[".googleLikeFields"][] = "UOMTypeID";
$tdatatbl_uom[".googleLikeFields"][] = "Code";
$tdatatbl_uom[".googleLikeFields"][] = "Name";
$tdatatbl_uom[".googleLikeFields"][] = "OffCode";



$tdatatbl_uom[".tableType"] = "list";

$tdatatbl_uom[".printerPageOrientation"] = 0;
$tdatatbl_uom[".nPrinterPageScale"] = 100;

$tdatatbl_uom[".nPrinterSplitRecords"] = 40;

$tdatatbl_uom[".geocodingEnabled"] = false;





$tdatatbl_uom[".isResizeColumns"] = true;





$tdatatbl_uom[".pageSize"] = 20;

$tdatatbl_uom[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_uom[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_uom[".orderindexes"] = array();
	$tdatatbl_uom[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "Name");



$tdatatbl_uom[".sqlHead"] = "SELECT ID,  UOMTypeID,  Code,  Name,  OffCode";
$tdatatbl_uom[".sqlFrom"] = "FROM tbl_uom";
$tdatatbl_uom[".sqlWhereExpr"] = "";
$tdatatbl_uom[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_uom[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_uom[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_uom[".highlightSearchResults"] = true;

$tableKeystbl_uom = array();
$tableKeystbl_uom[] = "ID";
$tdatatbl_uom[".Keys"] = $tableKeystbl_uom;


$tdatatbl_uom[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_uom";
	$fdata["Label"] = GetFieldLabel("tbl_uom","ID");
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


	$tdatatbl_uom["ID"] = $fdata;
		$tdatatbl_uom[".searchableFields"][] = "ID";
//	UOMTypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UOMTypeID";
	$fdata["GoodName"] = "UOMTypeID";
	$fdata["ownerTable"] = "tbl_uom";
	$fdata["Label"] = GetFieldLabel("tbl_uom","UOMTypeID");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "UOMTypeID";

		$fdata["sourceSingle"] = "UOMTypeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UOMTypeID";

	
	
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


	$tdatatbl_uom["UOMTypeID"] = $fdata;
		$tdatatbl_uom[".searchableFields"][] = "UOMTypeID";
//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "tbl_uom";
	$fdata["Label"] = GetFieldLabel("tbl_uom","Code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Code";

		$fdata["sourceSingle"] = "Code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Code";

	
	
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
			$edata["EditParams"].= " maxlength=4";

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


	$tdatatbl_uom["Code"] = $fdata;
		$tdatatbl_uom[".searchableFields"][] = "Code";
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "tbl_uom";
	$fdata["Label"] = GetFieldLabel("tbl_uom","Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Name";

		$fdata["sourceSingle"] = "Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Name";

	
	
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


	$tdatatbl_uom["Name"] = $fdata;
		$tdatatbl_uom[".searchableFields"][] = "Name";
//	OffCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "OffCode";
	$fdata["GoodName"] = "OffCode";
	$fdata["ownerTable"] = "tbl_uom";
	$fdata["Label"] = GetFieldLabel("tbl_uom","OffCode");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "OffCode";

		$fdata["sourceSingle"] = "OffCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OffCode";

	
	
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


	$tdatatbl_uom["OffCode"] = $fdata;
		$tdatatbl_uom[".searchableFields"][] = "OffCode";


$tables_data["tbl_uom"]=&$tdatatbl_uom;
$field_labels["tbl_uom"] = &$fieldLabelstbl_uom;
$fieldToolTips["tbl_uom"] = &$fieldToolTipstbl_uom;
$placeHolders["tbl_uom"] = &$placeHolderstbl_uom;
$page_titles["tbl_uom"] = &$pageTitlestbl_uom;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_uom"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_uom"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tbl_uom_type";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_uom_type";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_uom_type";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_uom"][0] = $masterParams;
				$masterTablesData["tbl_uom"][0]["masterKeys"] = array();
	$masterTablesData["tbl_uom"][0]["masterKeys"][]="ID";
				$masterTablesData["tbl_uom"][0]["detailKeys"] = array();
	$masterTablesData["tbl_uom"][0]["detailKeys"][]="UOMTypeID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_uom()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  UOMTypeID,  Code,  Name,  OffCode";
$proto0["m_strFrom"] = "FROM tbl_uom";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Name";
	
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
	"m_strTable" => "tbl_uom",
	"m_srcTableName" => "tbl_uom"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_uom";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UOMTypeID",
	"m_strTable" => "tbl_uom",
	"m_srcTableName" => "tbl_uom"
));

$proto8["m_sql"] = "UOMTypeID";
$proto8["m_srcTableName"] = "tbl_uom";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Code",
	"m_strTable" => "tbl_uom",
	"m_srcTableName" => "tbl_uom"
));

$proto10["m_sql"] = "Code";
$proto10["m_srcTableName"] = "tbl_uom";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "tbl_uom",
	"m_srcTableName" => "tbl_uom"
));

$proto12["m_sql"] = "Name";
$proto12["m_srcTableName"] = "tbl_uom";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "OffCode",
	"m_strTable" => "tbl_uom",
	"m_srcTableName" => "tbl_uom"
));

$proto14["m_sql"] = "OffCode";
$proto14["m_srcTableName"] = "tbl_uom";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "tbl_uom";
$proto17["m_srcTableName"] = "tbl_uom";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ID";
$proto17["m_columns"][] = "UOMTypeID";
$proto17["m_columns"][] = "Code";
$proto17["m_columns"][] = "Name";
$proto17["m_columns"][] = "OffCode";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "tbl_uom";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "tbl_uom";
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
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "tbl_uom",
	"m_srcTableName" => "tbl_uom"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 1;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tbl_uom";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_uom = createSqlQuery_tbl_uom();


	
		;

					

$tdatatbl_uom[".sqlquery"] = $queryData_tbl_uom;



$tableEvents["tbl_uom"] = new eventsBase;
$tdatatbl_uom[".hasEvents"] = false;

?>