<?php
$tdataformoptions1 = array();
$tdataformoptions1[".searchableFields"] = array();
$tdataformoptions1[".ShortName"] = "formoptions1";
$tdataformoptions1[".OwnerID"] = "";
$tdataformoptions1[".OriginalTable"] = "formoptions";


$tdataformoptions1[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" );
$tdataformoptions1[".originalPagesByType"] = $tdataformoptions1[".pagesByType"];
$tdataformoptions1[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"search\":[\"search\"]}" ) );
$tdataformoptions1[".originalPages"] = $tdataformoptions1[".pages"];
$tdataformoptions1[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"search\":\"search\"}" );
$tdataformoptions1[".originalDefaultPages"] = $tdataformoptions1[".defaultPages"];

//	field labels
$fieldLabelsformoptions1 = array();
$fieldToolTipsformoptions1 = array();
$pageTitlesformoptions1 = array();
$placeHoldersformoptions1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsformoptions1["English"] = array();
	$fieldToolTipsformoptions1["English"] = array();
	$placeHoldersformoptions1["English"] = array();
	$pageTitlesformoptions1["English"] = array();
	$fieldLabelsformoptions1["English"]["id"] = "Id";
	$fieldToolTipsformoptions1["English"]["id"] = "";
	$placeHoldersformoptions1["English"]["id"] = "";
	$fieldLabelsformoptions1["English"]["pdfpath"] = "Path to PDFtk";
	$fieldToolTipsformoptions1["English"]["pdfpath"] = "";
	$placeHoldersformoptions1["English"]["pdfpath"] = "";
	$pageTitlesformoptions1["English"]["edit"] = "Settings";
	if (count($fieldToolTipsformoptions1["English"]))
		$tdataformoptions1[".isUseToolTips"] = true;
}


	$tdataformoptions1[".NCSearch"] = true;



$tdataformoptions1[".shortTableName"] = "formoptions1";
$tdataformoptions1[".nSecOptions"] = 0;

$tdataformoptions1[".mainTableOwnerID"] = "";
$tdataformoptions1[".entityType"] = 0;
$tdataformoptions1[".connId"] = "logistics_at_localhost";


$tdataformoptions1[".strOriginalTableName"] = "formoptions";

	



$tdataformoptions1[".showAddInPopup"] = false;

$tdataformoptions1[".showEditInPopup"] = false;

$tdataformoptions1[".showViewInPopup"] = false;

$tdataformoptions1[".listAjax"] = false;
//	temporary
//$tdataformoptions1[".listAjax"] = false;

	$tdataformoptions1[".audit"] = false;

	$tdataformoptions1[".locking"] = false;


$pages = $tdataformoptions1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataformoptions1[".edit"] = true;
	$tdataformoptions1[".afterEditAction"] = 1;
	$tdataformoptions1[".closePopupAfterEdit"] = 1;
	$tdataformoptions1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataformoptions1[".add"] = true;
$tdataformoptions1[".afterAddAction"] = 1;
$tdataformoptions1[".closePopupAfterAdd"] = 1;
$tdataformoptions1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataformoptions1[".list"] = true;
}



$tdataformoptions1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataformoptions1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataformoptions1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataformoptions1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataformoptions1[".printFriendly"] = true;
}



$tdataformoptions1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataformoptions1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataformoptions1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataformoptions1[".isUseAjaxSuggest"] = true;

$tdataformoptions1[".rowHighlite"] = true;



																					

$tdataformoptions1[".ajaxCodeSnippetAdded"] = false;

$tdataformoptions1[".buttonsAdded"] = false;

$tdataformoptions1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataformoptions1[".isUseTimeForSearch"] = false;


$tdataformoptions1[".badgeColor"] = "778899";


$tdataformoptions1[".allSearchFields"] = array();
$tdataformoptions1[".filterFields"] = array();
$tdataformoptions1[".requiredSearchFields"] = array();

$tdataformoptions1[".googleLikeFields"] = array();
$tdataformoptions1[".googleLikeFields"][] = "id";
$tdataformoptions1[".googleLikeFields"][] = "pdfpath";



$tdataformoptions1[".tableType"] = "list";

$tdataformoptions1[".printerPageOrientation"] = 0;
$tdataformoptions1[".nPrinterPageScale"] = 100;

$tdataformoptions1[".nPrinterSplitRecords"] = 40;

$tdataformoptions1[".geocodingEnabled"] = false;










$tdataformoptions1[".pageSize"] = 20;

$tdataformoptions1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataformoptions1[".strOrderBy"] = $tstrOrderBy;

$tdataformoptions1[".orderindexes"] = array();


$tdataformoptions1[".sqlHead"] = "SELECT id,  	pdfpath";
$tdataformoptions1[".sqlFrom"] = "FROM formoptions";
$tdataformoptions1[".sqlWhereExpr"] = "";
$tdataformoptions1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataformoptions1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataformoptions1[".arrGroupsPerPage"] = $arrGPP;

$tdataformoptions1[".highlightSearchResults"] = true;

$tableKeysformoptions1 = array();
$tableKeysformoptions1[] = "id";
$tdataformoptions1[".Keys"] = $tableKeysformoptions1;


$tdataformoptions1[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "formoptions";
	$fdata["Label"] = GetFieldLabel("formoptions","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdataformoptions1["id"] = $fdata;
		$tdataformoptions1[".searchableFields"][] = "id";
//	pdfpath
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pdfpath";
	$fdata["GoodName"] = "pdfpath";
	$fdata["ownerTable"] = "formoptions";
	$fdata["Label"] = GetFieldLabel("formoptions","pdfpath");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pdfpath";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdfpath";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdataformoptions1["pdfpath"] = $fdata;
		$tdataformoptions1[".searchableFields"][] = "pdfpath";


$tables_data["formoptions"]=&$tdataformoptions1;
$field_labels["formoptions"] = &$fieldLabelsformoptions1;
$fieldToolTips["formoptions"] = &$fieldToolTipsformoptions1;
$placeHolders["formoptions"] = &$placeHoldersformoptions1;
$page_titles["formoptions"] = &$pageTitlesformoptions1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["formoptions"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["formoptions"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_formoptions1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	pdfpath";
$proto0["m_strFrom"] = "FROM formoptions";
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
	"m_strName" => "id",
	"m_strTable" => "formoptions",
	"m_srcTableName" => "formoptions"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "formoptions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "pdfpath",
	"m_strTable" => "formoptions",
	"m_srcTableName" => "formoptions"
));

$proto8["m_sql"] = "pdfpath";
$proto8["m_srcTableName"] = "formoptions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "formoptions";
$proto11["m_srcTableName"] = "formoptions";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "pdfpath";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "formoptions";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "formoptions";
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
$proto0["m_srcTableName"]="formoptions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_formoptions1 = createSqlQuery_formoptions1();


	
		;

		

$tdataformoptions1[".sqlquery"] = $queryData_formoptions1;



$tableEvents["formoptions"] = new eventsBase;
$tdataformoptions1[".hasEvents"] = false;

?>