<?php
$tdatatbl_county = array();
$tdatatbl_county[".searchableFields"] = array();
$tdatatbl_county[".ShortName"] = "tbl_county";
$tdatatbl_county[".OwnerID"] = "";
$tdatatbl_county[".OriginalTable"] = "tbl_county";


$tdatatbl_county[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatbl_county[".originalPagesByType"] = $tdatatbl_county[".pagesByType"];
$tdatatbl_county[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatbl_county[".originalPages"] = $tdatatbl_county[".pages"];
$tdatatbl_county[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatbl_county[".originalDefaultPages"] = $tdatatbl_county[".defaultPages"];

//	field labels
$fieldLabelstbl_county = array();
$fieldToolTipstbl_county = array();
$pageTitlestbl_county = array();
$placeHolderstbl_county = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_county["English"] = array();
	$fieldToolTipstbl_county["English"] = array();
	$placeHolderstbl_county["English"] = array();
	$pageTitlestbl_county["English"] = array();
	$fieldLabelstbl_county["English"]["ID"] = "ID";
	$fieldToolTipstbl_county["English"]["ID"] = "";
	$placeHolderstbl_county["English"]["ID"] = "";
	$fieldLabelstbl_county["English"]["ProvinceID"] = "Province/State";
	$fieldToolTipstbl_county["English"]["ProvinceID"] = "";
	$placeHolderstbl_county["English"]["ProvinceID"] = "";
	$fieldLabelstbl_county["English"]["CountyName"] = "County Name";
	$fieldToolTipstbl_county["English"]["CountyName"] = "";
	$placeHolderstbl_county["English"]["CountyName"] = "";
	$fieldLabelstbl_county["English"]["Name"] = "Name";
	$fieldToolTipstbl_county["English"]["Name"] = "";
	$placeHolderstbl_county["English"]["Name"] = "";
	if (count($fieldToolTipstbl_county["English"]))
		$tdatatbl_county[".isUseToolTips"] = true;
}


	$tdatatbl_county[".NCSearch"] = true;



$tdatatbl_county[".shortTableName"] = "tbl_county";
$tdatatbl_county[".nSecOptions"] = 0;

$tdatatbl_county[".mainTableOwnerID"] = "";
$tdatatbl_county[".entityType"] = 0;
$tdatatbl_county[".connId"] = "logistics_at_localhost";


$tdatatbl_county[".strOriginalTableName"] = "tbl_county";

	



$tdatatbl_county[".showAddInPopup"] = false;

$tdatatbl_county[".showEditInPopup"] = false;

$tdatatbl_county[".showViewInPopup"] = false;

$tdatatbl_county[".listAjax"] = false;
//	temporary
//$tdatatbl_county[".listAjax"] = false;

	$tdatatbl_county[".audit"] = false;

	$tdatatbl_county[".locking"] = false;


$pages = $tdatatbl_county[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_county[".edit"] = true;
	$tdatatbl_county[".afterEditAction"] = 1;
	$tdatatbl_county[".closePopupAfterEdit"] = 1;
	$tdatatbl_county[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_county[".add"] = true;
$tdatatbl_county[".afterAddAction"] = 1;
$tdatatbl_county[".closePopupAfterAdd"] = 1;
$tdatatbl_county[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_county[".list"] = true;
}



$tdatatbl_county[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_county[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_county[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_county[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_county[".printFriendly"] = true;
}



$tdatatbl_county[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_county[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_county[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_county[".isUseAjaxSuggest"] = true;

$tdatatbl_county[".rowHighlite"] = true;



																					

$tdatatbl_county[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_county[".buttonsAdded"] = false;

$tdatatbl_county[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_county[".isUseTimeForSearch"] = false;


$tdatatbl_county[".badgeColor"] = "00C2C5";


$tdatatbl_county[".allSearchFields"] = array();
$tdatatbl_county[".filterFields"] = array();
$tdatatbl_county[".requiredSearchFields"] = array();

$tdatatbl_county[".googleLikeFields"] = array();
$tdatatbl_county[".googleLikeFields"][] = "ID";
$tdatatbl_county[".googleLikeFields"][] = "ProvinceID";
$tdatatbl_county[".googleLikeFields"][] = "CountyName";
$tdatatbl_county[".googleLikeFields"][] = "Name";



$tdatatbl_county[".tableType"] = "list";

$tdatatbl_county[".printerPageOrientation"] = 0;
$tdatatbl_county[".nPrinterPageScale"] = 100;

$tdatatbl_county[".nPrinterSplitRecords"] = 40;

$tdatatbl_county[".geocodingEnabled"] = false;










$tdatatbl_county[".pageSize"] = 20;

$tdatatbl_county[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY tbl_province.Name, tbl_county.CountyName";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_county[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_county[".orderindexes"] = array();
	$tdatatbl_county[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "tbl_province.Name");

	$tdatatbl_county[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "tbl_county.CountyName");



$tdatatbl_county[".sqlHead"] = "SELECT tbl_county.ID,  tbl_county.ProvinceID,  tbl_county.CountyName,  tbl_province.Name";
$tdatatbl_county[".sqlFrom"] = "FROM tbl_county  INNER JOIN tbl_province ON tbl_county.ProvinceID = tbl_province.ProvinceID";
$tdatatbl_county[".sqlWhereExpr"] = "";
$tdatatbl_county[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_county[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_county[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_county[".highlightSearchResults"] = true;

$tableKeystbl_county = array();
$tableKeystbl_county[] = "ID";
$tdatatbl_county[".Keys"] = $tableKeystbl_county;


$tdatatbl_county[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_county";
	$fdata["Label"] = GetFieldLabel("tbl_county","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_county.ID";

	
	
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


	$tdatatbl_county["ID"] = $fdata;
		$tdatatbl_county[".searchableFields"][] = "ID";
//	ProvinceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProvinceID";
	$fdata["GoodName"] = "ProvinceID";
	$fdata["ownerTable"] = "tbl_county";
	$fdata["Label"] = GetFieldLabel("tbl_county","ProvinceID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProvinceID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_county.ProvinceID";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_province";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "ProvinceID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	

	
	$edata["LookupOrderBy"] = "Name";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatatbl_county["ProvinceID"] = $fdata;
		$tdatatbl_county[".searchableFields"][] = "ProvinceID";
//	CountyName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CountyName";
	$fdata["GoodName"] = "CountyName";
	$fdata["ownerTable"] = "tbl_county";
	$fdata["Label"] = GetFieldLabel("tbl_county","CountyName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CountyName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_county.CountyName";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatatbl_county["CountyName"] = $fdata;
		$tdatatbl_county[".searchableFields"][] = "CountyName";
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "tbl_province";
	$fdata["Label"] = GetFieldLabel("tbl_county","Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_province.Name";

	
	
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


	$tdatatbl_county["Name"] = $fdata;
		$tdatatbl_county[".searchableFields"][] = "Name";


$tables_data["tbl_county"]=&$tdatatbl_county;
$field_labels["tbl_county"] = &$fieldLabelstbl_county;
$fieldToolTips["tbl_county"] = &$fieldToolTipstbl_county;
$placeHolders["tbl_county"] = &$placeHolderstbl_county;
$page_titles["tbl_county"] = &$pageTitlestbl_county;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_county"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_county"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_county()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tbl_county.ID,  tbl_county.ProvinceID,  tbl_county.CountyName,  tbl_province.Name";
$proto0["m_strFrom"] = "FROM tbl_county  INNER JOIN tbl_province ON tbl_county.ProvinceID = tbl_province.ProvinceID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY tbl_province.Name, tbl_county.CountyName";
	
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
	"m_strTable" => "tbl_county",
	"m_srcTableName" => "tbl_county"
));

$proto6["m_sql"] = "tbl_county.ID";
$proto6["m_srcTableName"] = "tbl_county";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ProvinceID",
	"m_strTable" => "tbl_county",
	"m_srcTableName" => "tbl_county"
));

$proto8["m_sql"] = "tbl_county.ProvinceID";
$proto8["m_srcTableName"] = "tbl_county";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CountyName",
	"m_strTable" => "tbl_county",
	"m_srcTableName" => "tbl_county"
));

$proto10["m_sql"] = "tbl_county.CountyName";
$proto10["m_srcTableName"] = "tbl_county";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "tbl_province",
	"m_srcTableName" => "tbl_county"
));

$proto12["m_sql"] = "tbl_province.Name";
$proto12["m_srcTableName"] = "tbl_county";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tbl_county";
$proto15["m_srcTableName"] = "tbl_county";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "ID";
$proto15["m_columns"][] = "ProvinceID";
$proto15["m_columns"][] = "CountyName";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "tbl_county";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tbl_county";
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
												$proto18=array();
$proto18["m_link"] = "SQLL_INNERJOIN";
			$proto19=array();
$proto19["m_strName"] = "tbl_province";
$proto19["m_srcTableName"] = "tbl_county";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ProvinceID";
$proto19["m_columns"][] = "CountryID";
$proto19["m_columns"][] = "Code";
$proto19["m_columns"][] = "Name";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "INNER JOIN tbl_province ON tbl_county.ProvinceID = tbl_province.ProvinceID";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "tbl_county";
$proto20=array();
$proto20["m_sql"] = "tbl_county.ProvinceID = tbl_province.ProvinceID";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProvinceID",
	"m_strTable" => "tbl_county",
	"m_srcTableName" => "tbl_county"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "= tbl_province.ProvinceID";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "tbl_province",
	"m_srcTableName" => "tbl_county"
));

$proto22["m_column"]=$obj;
$proto22["m_bAsc"] = 1;
$proto22["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto22);

$proto0["m_orderby"][]=$obj;					
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "CountyName",
	"m_strTable" => "tbl_county",
	"m_srcTableName" => "tbl_county"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tbl_county";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_county = createSqlQuery_tbl_county();


	
		;

				

$tdatatbl_county[".sqlquery"] = $queryData_tbl_county;



$tableEvents["tbl_county"] = new eventsBase;
$tdatatbl_county[".hasEvents"] = false;

?>