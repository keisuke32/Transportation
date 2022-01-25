<?php
$tdatatbl_equipment_type = array();
$tdatatbl_equipment_type[".searchableFields"] = array();
$tdatatbl_equipment_type[".ShortName"] = "tbl_equipment_type";
$tdatatbl_equipment_type[".OwnerID"] = "";
$tdatatbl_equipment_type[".OriginalTable"] = "tbl_equipment_type";


$tdatatbl_equipment_type[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_equipment_type[".originalPagesByType"] = $tdatatbl_equipment_type[".pagesByType"];
$tdatatbl_equipment_type[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_equipment_type[".originalPages"] = $tdatatbl_equipment_type[".pages"];
$tdatatbl_equipment_type[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_equipment_type[".originalDefaultPages"] = $tdatatbl_equipment_type[".defaultPages"];

//	field labels
$fieldLabelstbl_equipment_type = array();
$fieldToolTipstbl_equipment_type = array();
$pageTitlestbl_equipment_type = array();
$placeHolderstbl_equipment_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_equipment_type["English"] = array();
	$fieldToolTipstbl_equipment_type["English"] = array();
	$placeHolderstbl_equipment_type["English"] = array();
	$pageTitlestbl_equipment_type["English"] = array();
	$fieldLabelstbl_equipment_type["English"]["ID"] = "ID";
	$fieldToolTipstbl_equipment_type["English"]["ID"] = "";
	$placeHolderstbl_equipment_type["English"]["ID"] = "";
	$fieldLabelstbl_equipment_type["English"]["Description"] = "Description";
	$fieldToolTipstbl_equipment_type["English"]["Description"] = "";
	$placeHolderstbl_equipment_type["English"]["Description"] = "";
	$fieldLabelstbl_equipment_type["English"]["Length"] = "Length";
	$fieldToolTipstbl_equipment_type["English"]["Length"] = "";
	$placeHolderstbl_equipment_type["English"]["Length"] = "";
	$fieldLabelstbl_equipment_type["English"]["Width"] = "Width";
	$fieldToolTipstbl_equipment_type["English"]["Width"] = "";
	$placeHolderstbl_equipment_type["English"]["Width"] = "";
	$fieldLabelstbl_equipment_type["English"]["Height"] = "Height";
	$fieldToolTipstbl_equipment_type["English"]["Height"] = "";
	$placeHolderstbl_equipment_type["English"]["Height"] = "";
	if (count($fieldToolTipstbl_equipment_type["English"]))
		$tdatatbl_equipment_type[".isUseToolTips"] = true;
}


	$tdatatbl_equipment_type[".NCSearch"] = true;



$tdatatbl_equipment_type[".shortTableName"] = "tbl_equipment_type";
$tdatatbl_equipment_type[".nSecOptions"] = 0;

$tdatatbl_equipment_type[".mainTableOwnerID"] = "";
$tdatatbl_equipment_type[".entityType"] = 0;
$tdatatbl_equipment_type[".connId"] = "logistics_at_localhost";


$tdatatbl_equipment_type[".strOriginalTableName"] = "tbl_equipment_type";

	



$tdatatbl_equipment_type[".showAddInPopup"] = false;

$tdatatbl_equipment_type[".showEditInPopup"] = false;

$tdatatbl_equipment_type[".showViewInPopup"] = false;

$tdatatbl_equipment_type[".listAjax"] = false;
//	temporary
//$tdatatbl_equipment_type[".listAjax"] = false;

	$tdatatbl_equipment_type[".audit"] = true;

	$tdatatbl_equipment_type[".locking"] = false;


$pages = $tdatatbl_equipment_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_equipment_type[".edit"] = true;
	$tdatatbl_equipment_type[".afterEditAction"] = 1;
	$tdatatbl_equipment_type[".closePopupAfterEdit"] = 1;
	$tdatatbl_equipment_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_equipment_type[".add"] = true;
$tdatatbl_equipment_type[".afterAddAction"] = 1;
$tdatatbl_equipment_type[".closePopupAfterAdd"] = 1;
$tdatatbl_equipment_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_equipment_type[".list"] = true;
}



$tdatatbl_equipment_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_equipment_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_equipment_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_equipment_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_equipment_type[".printFriendly"] = true;
}



$tdatatbl_equipment_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_equipment_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_equipment_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_equipment_type[".isUseAjaxSuggest"] = true;

$tdatatbl_equipment_type[".rowHighlite"] = true;



																					

$tdatatbl_equipment_type[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_equipment_type[".buttonsAdded"] = false;

$tdatatbl_equipment_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_equipment_type[".isUseTimeForSearch"] = false;


$tdatatbl_equipment_type[".badgeColor"] = "6DA5C8";


$tdatatbl_equipment_type[".allSearchFields"] = array();
$tdatatbl_equipment_type[".filterFields"] = array();
$tdatatbl_equipment_type[".requiredSearchFields"] = array();

$tdatatbl_equipment_type[".googleLikeFields"] = array();
$tdatatbl_equipment_type[".googleLikeFields"][] = "ID";
$tdatatbl_equipment_type[".googleLikeFields"][] = "Description";
$tdatatbl_equipment_type[".googleLikeFields"][] = "Length";
$tdatatbl_equipment_type[".googleLikeFields"][] = "Width";
$tdatatbl_equipment_type[".googleLikeFields"][] = "Height";



$tdatatbl_equipment_type[".tableType"] = "list";

$tdatatbl_equipment_type[".printerPageOrientation"] = 0;
$tdatatbl_equipment_type[".nPrinterPageScale"] = 100;

$tdatatbl_equipment_type[".nPrinterSplitRecords"] = 40;

$tdatatbl_equipment_type[".geocodingEnabled"] = false;










$tdatatbl_equipment_type[".pageSize"] = 20;

$tdatatbl_equipment_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_equipment_type[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_equipment_type[".orderindexes"] = array();


$tdatatbl_equipment_type[".sqlHead"] = "SELECT ID,  	Description,  	Length,  	Width,  	Height";
$tdatatbl_equipment_type[".sqlFrom"] = "FROM tbl_equipment_type";
$tdatatbl_equipment_type[".sqlWhereExpr"] = "";
$tdatatbl_equipment_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_equipment_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_equipment_type[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_equipment_type[".highlightSearchResults"] = true;

$tableKeystbl_equipment_type = array();
$tableKeystbl_equipment_type[] = "ID";
$tdatatbl_equipment_type[".Keys"] = $tableKeystbl_equipment_type;


$tdatatbl_equipment_type[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_equipment_type";
	$fdata["Label"] = GetFieldLabel("tbl_equipment_type","ID");
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


	$tdatatbl_equipment_type["ID"] = $fdata;
		$tdatatbl_equipment_type[".searchableFields"][] = "ID";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "tbl_equipment_type";
	$fdata["Label"] = GetFieldLabel("tbl_equipment_type","Description");
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


	$tdatatbl_equipment_type["Description"] = $fdata;
		$tdatatbl_equipment_type[".searchableFields"][] = "Description";
//	Length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Length";
	$fdata["GoodName"] = "Length";
	$fdata["ownerTable"] = "tbl_equipment_type";
	$fdata["Label"] = GetFieldLabel("tbl_equipment_type","Length");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "Length";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Length";

	
	
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


	$tdatatbl_equipment_type["Length"] = $fdata;
		$tdatatbl_equipment_type[".searchableFields"][] = "Length";
//	Width
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Width";
	$fdata["GoodName"] = "Width";
	$fdata["ownerTable"] = "tbl_equipment_type";
	$fdata["Label"] = GetFieldLabel("tbl_equipment_type","Width");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "Width";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Width";

	
	
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


	$tdatatbl_equipment_type["Width"] = $fdata;
		$tdatatbl_equipment_type[".searchableFields"][] = "Width";
//	Height
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Height";
	$fdata["GoodName"] = "Height";
	$fdata["ownerTable"] = "tbl_equipment_type";
	$fdata["Label"] = GetFieldLabel("tbl_equipment_type","Height");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "Height";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Height";

	
	
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


	$tdatatbl_equipment_type["Height"] = $fdata;
		$tdatatbl_equipment_type[".searchableFields"][] = "Height";


$tables_data["tbl_equipment_type"]=&$tdatatbl_equipment_type;
$field_labels["tbl_equipment_type"] = &$fieldLabelstbl_equipment_type;
$fieldToolTips["tbl_equipment_type"] = &$fieldToolTipstbl_equipment_type;
$placeHolders["tbl_equipment_type"] = &$placeHolderstbl_equipment_type;
$page_titles["tbl_equipment_type"] = &$pageTitlestbl_equipment_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_equipment_type"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_equipment_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_equipment_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	Description,  	Length,  	Width,  	Height";
$proto0["m_strFrom"] = "FROM tbl_equipment_type";
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
	"m_strTable" => "tbl_equipment_type",
	"m_srcTableName" => "tbl_equipment_type"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_equipment_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "tbl_equipment_type",
	"m_srcTableName" => "tbl_equipment_type"
));

$proto8["m_sql"] = "Description";
$proto8["m_srcTableName"] = "tbl_equipment_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Length",
	"m_strTable" => "tbl_equipment_type",
	"m_srcTableName" => "tbl_equipment_type"
));

$proto10["m_sql"] = "Length";
$proto10["m_srcTableName"] = "tbl_equipment_type";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Width",
	"m_strTable" => "tbl_equipment_type",
	"m_srcTableName" => "tbl_equipment_type"
));

$proto12["m_sql"] = "Width";
$proto12["m_srcTableName"] = "tbl_equipment_type";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Height",
	"m_strTable" => "tbl_equipment_type",
	"m_srcTableName" => "tbl_equipment_type"
));

$proto14["m_sql"] = "Height";
$proto14["m_srcTableName"] = "tbl_equipment_type";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "tbl_equipment_type";
$proto17["m_srcTableName"] = "tbl_equipment_type";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ID";
$proto17["m_columns"][] = "Description";
$proto17["m_columns"][] = "Length";
$proto17["m_columns"][] = "Width";
$proto17["m_columns"][] = "Height";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "tbl_equipment_type";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "tbl_equipment_type";
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
$proto0["m_srcTableName"]="tbl_equipment_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_equipment_type = createSqlQuery_tbl_equipment_type();


	
		;

					

$tdatatbl_equipment_type[".sqlquery"] = $queryData_tbl_equipment_type;



$tableEvents["tbl_equipment_type"] = new eventsBase;
$tdatatbl_equipment_type[".hasEvents"] = false;

?>