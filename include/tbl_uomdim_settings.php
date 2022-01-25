<?php
$tdatatbl_uomdim = array();
$tdatatbl_uomdim[".searchableFields"] = array();
$tdatatbl_uomdim[".ShortName"] = "tbl_uomdim";
$tdatatbl_uomdim[".OwnerID"] = "";
$tdatatbl_uomdim[".OriginalTable"] = "tbl_uom";


$tdatatbl_uomdim[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_uomdim[".originalPagesByType"] = $tdatatbl_uomdim[".pagesByType"];
$tdatatbl_uomdim[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_uomdim[".originalPages"] = $tdatatbl_uomdim[".pages"];
$tdatatbl_uomdim[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_uomdim[".originalDefaultPages"] = $tdatatbl_uomdim[".defaultPages"];

//	field labels
$fieldLabelstbl_uomdim = array();
$fieldToolTipstbl_uomdim = array();
$pageTitlestbl_uomdim = array();
$placeHolderstbl_uomdim = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_uomdim["English"] = array();
	$fieldToolTipstbl_uomdim["English"] = array();
	$placeHolderstbl_uomdim["English"] = array();
	$pageTitlestbl_uomdim["English"] = array();
	$fieldLabelstbl_uomdim["English"]["ID"] = "ID";
	$fieldToolTipstbl_uomdim["English"]["ID"] = "";
	$placeHolderstbl_uomdim["English"]["ID"] = "";
	$fieldLabelstbl_uomdim["English"]["UOMTypeID"] = "UOM Type";
	$fieldToolTipstbl_uomdim["English"]["UOMTypeID"] = "";
	$placeHolderstbl_uomdim["English"]["UOMTypeID"] = "";
	$fieldLabelstbl_uomdim["English"]["Code"] = "Code";
	$fieldToolTipstbl_uomdim["English"]["Code"] = "";
	$placeHolderstbl_uomdim["English"]["Code"] = "";
	$fieldLabelstbl_uomdim["English"]["Name"] = "Name";
	$fieldToolTipstbl_uomdim["English"]["Name"] = "";
	$placeHolderstbl_uomdim["English"]["Name"] = "";
	$fieldLabelstbl_uomdim["English"]["OffCode"] = "Off Code";
	$fieldToolTipstbl_uomdim["English"]["OffCode"] = "";
	$placeHolderstbl_uomdim["English"]["OffCode"] = "";
	if (count($fieldToolTipstbl_uomdim["English"]))
		$tdatatbl_uomdim[".isUseToolTips"] = true;
}


	$tdatatbl_uomdim[".NCSearch"] = true;



$tdatatbl_uomdim[".shortTableName"] = "tbl_uomdim";
$tdatatbl_uomdim[".nSecOptions"] = 0;

$tdatatbl_uomdim[".mainTableOwnerID"] = "";
$tdatatbl_uomdim[".entityType"] = 1;
$tdatatbl_uomdim[".connId"] = "logistics_at_localhost";


$tdatatbl_uomdim[".strOriginalTableName"] = "tbl_uom";

	



$tdatatbl_uomdim[".showAddInPopup"] = false;

$tdatatbl_uomdim[".showEditInPopup"] = false;

$tdatatbl_uomdim[".showViewInPopup"] = false;

	$tdatatbl_uomdim[".listAjax"] = true;
//	temporary
//$tdatatbl_uomdim[".listAjax"] = false;

	$tdatatbl_uomdim[".audit"] = true;

	$tdatatbl_uomdim[".locking"] = false;


$pages = $tdatatbl_uomdim[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_uomdim[".edit"] = true;
	$tdatatbl_uomdim[".afterEditAction"] = 1;
	$tdatatbl_uomdim[".closePopupAfterEdit"] = 1;
	$tdatatbl_uomdim[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_uomdim[".add"] = true;
$tdatatbl_uomdim[".afterAddAction"] = 1;
$tdatatbl_uomdim[".closePopupAfterAdd"] = 1;
$tdatatbl_uomdim[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_uomdim[".list"] = true;
}



$tdatatbl_uomdim[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_uomdim[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_uomdim[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_uomdim[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_uomdim[".printFriendly"] = true;
}



$tdatatbl_uomdim[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_uomdim[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_uomdim[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_uomdim[".isUseAjaxSuggest"] = true;

$tdatatbl_uomdim[".rowHighlite"] = true;



																					

$tdatatbl_uomdim[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_uomdim[".buttonsAdded"] = false;

$tdatatbl_uomdim[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_uomdim[".isUseTimeForSearch"] = false;


$tdatatbl_uomdim[".badgeColor"] = "9ACD32";


$tdatatbl_uomdim[".allSearchFields"] = array();
$tdatatbl_uomdim[".filterFields"] = array();
$tdatatbl_uomdim[".requiredSearchFields"] = array();

$tdatatbl_uomdim[".googleLikeFields"] = array();
$tdatatbl_uomdim[".googleLikeFields"][] = "ID";
$tdatatbl_uomdim[".googleLikeFields"][] = "UOMTypeID";
$tdatatbl_uomdim[".googleLikeFields"][] = "Code";
$tdatatbl_uomdim[".googleLikeFields"][] = "Name";
$tdatatbl_uomdim[".googleLikeFields"][] = "OffCode";



$tdatatbl_uomdim[".tableType"] = "list";

$tdatatbl_uomdim[".printerPageOrientation"] = 0;
$tdatatbl_uomdim[".nPrinterPageScale"] = 100;

$tdatatbl_uomdim[".nPrinterSplitRecords"] = 40;

$tdatatbl_uomdim[".geocodingEnabled"] = false;





$tdatatbl_uomdim[".isResizeColumns"] = true;





$tdatatbl_uomdim[".pageSize"] = 20;

$tdatatbl_uomdim[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_uomdim[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_uomdim[".orderindexes"] = array();
	$tdatatbl_uomdim[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "Name");



$tdatatbl_uomdim[".sqlHead"] = "SELECT ID,  UOMTypeID,  Code,  Name,  OffCode";
$tdatatbl_uomdim[".sqlFrom"] = "FROM tbl_uom";
$tdatatbl_uomdim[".sqlWhereExpr"] = "(UOMTypeID =1)";
$tdatatbl_uomdim[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_uomdim[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_uomdim[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_uomdim[".highlightSearchResults"] = true;

$tableKeystbl_uomdim = array();
$tableKeystbl_uomdim[] = "ID";
$tdatatbl_uomdim[".Keys"] = $tableKeystbl_uomdim;


$tdatatbl_uomdim[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_uom";
	$fdata["Label"] = GetFieldLabel("tbl_uomDim","ID");
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


	$tdatatbl_uomdim["ID"] = $fdata;
		$tdatatbl_uomdim[".searchableFields"][] = "ID";
//	UOMTypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UOMTypeID";
	$fdata["GoodName"] = "UOMTypeID";
	$fdata["ownerTable"] = "tbl_uom";
	$fdata["Label"] = GetFieldLabel("tbl_uomDim","UOMTypeID");
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


	$tdatatbl_uomdim["UOMTypeID"] = $fdata;
		$tdatatbl_uomdim[".searchableFields"][] = "UOMTypeID";
//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "tbl_uom";
	$fdata["Label"] = GetFieldLabel("tbl_uomDim","Code");
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


	$tdatatbl_uomdim["Code"] = $fdata;
		$tdatatbl_uomdim[".searchableFields"][] = "Code";
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "tbl_uom";
	$fdata["Label"] = GetFieldLabel("tbl_uomDim","Name");
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


	$tdatatbl_uomdim["Name"] = $fdata;
		$tdatatbl_uomdim[".searchableFields"][] = "Name";
//	OffCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "OffCode";
	$fdata["GoodName"] = "OffCode";
	$fdata["ownerTable"] = "tbl_uom";
	$fdata["Label"] = GetFieldLabel("tbl_uomDim","OffCode");
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


	$tdatatbl_uomdim["OffCode"] = $fdata;
		$tdatatbl_uomdim[".searchableFields"][] = "OffCode";


$tables_data["tbl_uomDim"]=&$tdatatbl_uomdim;
$field_labels["tbl_uomDim"] = &$fieldLabelstbl_uomdim;
$fieldToolTips["tbl_uomDim"] = &$fieldToolTipstbl_uomdim;
$placeHolders["tbl_uomDim"] = &$placeHolderstbl_uomdim;
$page_titles["tbl_uomDim"] = &$pageTitlestbl_uomdim;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_uomDim"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_uomDim"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_uomdim()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  UOMTypeID,  Code,  Name,  OffCode";
$proto0["m_strFrom"] = "FROM tbl_uom";
$proto0["m_strWhere"] = "(UOMTypeID =1)";
$proto0["m_strOrderBy"] = "ORDER BY Name";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "UOMTypeID =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "UOMTypeID",
	"m_strTable" => "tbl_uom",
	"m_srcTableName" => "tbl_uomDim"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=1";
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
	"m_srcTableName" => "tbl_uomDim"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_uomDim";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UOMTypeID",
	"m_strTable" => "tbl_uom",
	"m_srcTableName" => "tbl_uomDim"
));

$proto8["m_sql"] = "UOMTypeID";
$proto8["m_srcTableName"] = "tbl_uomDim";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Code",
	"m_strTable" => "tbl_uom",
	"m_srcTableName" => "tbl_uomDim"
));

$proto10["m_sql"] = "Code";
$proto10["m_srcTableName"] = "tbl_uomDim";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "tbl_uom",
	"m_srcTableName" => "tbl_uomDim"
));

$proto12["m_sql"] = "Name";
$proto12["m_srcTableName"] = "tbl_uomDim";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "OffCode",
	"m_strTable" => "tbl_uom",
	"m_srcTableName" => "tbl_uomDim"
));

$proto14["m_sql"] = "OffCode";
$proto14["m_srcTableName"] = "tbl_uomDim";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "tbl_uom";
$proto17["m_srcTableName"] = "tbl_uomDim";
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
$proto16["m_srcTableName"] = "tbl_uomDim";
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
	"m_srcTableName" => "tbl_uomDim"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 1;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tbl_uomDim";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_uomdim = createSqlQuery_tbl_uomdim();


	
		;

					

$tdatatbl_uomdim[".sqlquery"] = $queryData_tbl_uomdim;



$tableEvents["tbl_uomDim"] = new eventsBase;
$tdatatbl_uomdim[".hasEvents"] = false;

?>