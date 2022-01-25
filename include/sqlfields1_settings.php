<?php
$tdatasqlfields1 = array();
$tdatasqlfields1[".searchableFields"] = array();
$tdatasqlfields1[".ShortName"] = "sqlfields1";
$tdatasqlfields1[".OwnerID"] = "";
$tdatasqlfields1[".OriginalTable"] = "sqlfields";


$tdatasqlfields1[".pagesByType"] = my_json_decode( "{}" );
$tdatasqlfields1[".originalPagesByType"] = $tdatasqlfields1[".pagesByType"];
$tdatasqlfields1[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatasqlfields1[".originalPages"] = $tdatasqlfields1[".pages"];
$tdatasqlfields1[".defaultPages"] = my_json_decode( "{}" );
$tdatasqlfields1[".originalDefaultPages"] = $tdatasqlfields1[".defaultPages"];

//	field labels
$fieldLabelssqlfields1 = array();
$fieldToolTipssqlfields1 = array();
$pageTitlessqlfields1 = array();
$placeHolderssqlfields1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssqlfields1["English"] = array();
	$fieldToolTipssqlfields1["English"] = array();
	$placeHolderssqlfields1["English"] = array();
	$pageTitlessqlfields1["English"] = array();
	$fieldLabelssqlfields1["English"]["id"] = "Id";
	$fieldToolTipssqlfields1["English"]["id"] = "";
	$placeHolderssqlfields1["English"]["id"] = "";
	$fieldLabelssqlfields1["English"]["formid"] = "Formid";
	$fieldToolTipssqlfields1["English"]["formid"] = "";
	$placeHolderssqlfields1["English"]["formid"] = "";
	$fieldLabelssqlfields1["English"]["sqlfield"] = "Sqlfield";
	$fieldToolTipssqlfields1["English"]["sqlfield"] = "";
	$placeHolderssqlfields1["English"]["sqlfield"] = "";
	if (count($fieldToolTipssqlfields1["English"]))
		$tdatasqlfields1[".isUseToolTips"] = true;
}


	$tdatasqlfields1[".NCSearch"] = true;



$tdatasqlfields1[".shortTableName"] = "sqlfields1";
$tdatasqlfields1[".nSecOptions"] = 0;

$tdatasqlfields1[".mainTableOwnerID"] = "";
$tdatasqlfields1[".entityType"] = 0;
$tdatasqlfields1[".connId"] = "logistics_at_localhost";


$tdatasqlfields1[".strOriginalTableName"] = "sqlfields";

	



$tdatasqlfields1[".showAddInPopup"] = false;

$tdatasqlfields1[".showEditInPopup"] = false;

$tdatasqlfields1[".showViewInPopup"] = false;

$tdatasqlfields1[".listAjax"] = false;
//	temporary
//$tdatasqlfields1[".listAjax"] = false;

	$tdatasqlfields1[".audit"] = false;

	$tdatasqlfields1[".locking"] = false;


$pages = $tdatasqlfields1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasqlfields1[".edit"] = true;
	$tdatasqlfields1[".afterEditAction"] = 1;
	$tdatasqlfields1[".closePopupAfterEdit"] = 1;
	$tdatasqlfields1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasqlfields1[".add"] = true;
$tdatasqlfields1[".afterAddAction"] = 1;
$tdatasqlfields1[".closePopupAfterAdd"] = 1;
$tdatasqlfields1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasqlfields1[".list"] = true;
}



$tdatasqlfields1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasqlfields1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasqlfields1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasqlfields1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasqlfields1[".printFriendly"] = true;
}



$tdatasqlfields1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasqlfields1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasqlfields1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasqlfields1[".isUseAjaxSuggest"] = true;

$tdatasqlfields1[".rowHighlite"] = true;



																					

$tdatasqlfields1[".ajaxCodeSnippetAdded"] = false;

$tdatasqlfields1[".buttonsAdded"] = false;

$tdatasqlfields1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasqlfields1[".isUseTimeForSearch"] = false;


$tdatasqlfields1[".badgeColor"] = "E07878";


$tdatasqlfields1[".allSearchFields"] = array();
$tdatasqlfields1[".filterFields"] = array();
$tdatasqlfields1[".requiredSearchFields"] = array();

$tdatasqlfields1[".googleLikeFields"] = array();
$tdatasqlfields1[".googleLikeFields"][] = "id";
$tdatasqlfields1[".googleLikeFields"][] = "formid";
$tdatasqlfields1[".googleLikeFields"][] = "sqlfield";



$tdatasqlfields1[".tableType"] = "list";

$tdatasqlfields1[".printerPageOrientation"] = 0;
$tdatasqlfields1[".nPrinterPageScale"] = 100;

$tdatasqlfields1[".nPrinterSplitRecords"] = 40;

$tdatasqlfields1[".geocodingEnabled"] = false;










$tdatasqlfields1[".pageSize"] = 20;

$tdatasqlfields1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasqlfields1[".strOrderBy"] = $tstrOrderBy;

$tdatasqlfields1[".orderindexes"] = array();


$tdatasqlfields1[".sqlHead"] = "SELECT id,  	formid,  	sqlfield";
$tdatasqlfields1[".sqlFrom"] = "FROM sqlfields";
$tdatasqlfields1[".sqlWhereExpr"] = "";
$tdatasqlfields1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasqlfields1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasqlfields1[".arrGroupsPerPage"] = $arrGPP;

$tdatasqlfields1[".highlightSearchResults"] = true;

$tableKeyssqlfields1 = array();
$tableKeyssqlfields1[] = "id";
$tdatasqlfields1[".Keys"] = $tableKeyssqlfields1;


$tdatasqlfields1[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sqlfields";
	$fdata["Label"] = GetFieldLabel("sqlfields","id");
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


	$tdatasqlfields1["id"] = $fdata;
		$tdatasqlfields1[".searchableFields"][] = "id";
//	formid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "formid";
	$fdata["GoodName"] = "formid";
	$fdata["ownerTable"] = "sqlfields";
	$fdata["Label"] = GetFieldLabel("sqlfields","formid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "formid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "formid";

	
	
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


	$tdatasqlfields1["formid"] = $fdata;
		$tdatasqlfields1[".searchableFields"][] = "formid";
//	sqlfield
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sqlfield";
	$fdata["GoodName"] = "sqlfield";
	$fdata["ownerTable"] = "sqlfields";
	$fdata["Label"] = GetFieldLabel("sqlfields","sqlfield");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sqlfield";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sqlfield";

	
	
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


	$tdatasqlfields1["sqlfield"] = $fdata;
		$tdatasqlfields1[".searchableFields"][] = "sqlfield";


$tables_data["sqlfields"]=&$tdatasqlfields1;
$field_labels["sqlfields"] = &$fieldLabelssqlfields1;
$fieldToolTips["sqlfields"] = &$fieldToolTipssqlfields1;
$placeHolders["sqlfields"] = &$placeHolderssqlfields1;
$page_titles["sqlfields"] = &$pageTitlessqlfields1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sqlfields"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sqlfields"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sqlfields1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	formid,  	sqlfield";
$proto0["m_strFrom"] = "FROM sqlfields";
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
	"m_strTable" => "sqlfields",
	"m_srcTableName" => "sqlfields"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sqlfields";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "formid",
	"m_strTable" => "sqlfields",
	"m_srcTableName" => "sqlfields"
));

$proto8["m_sql"] = "formid";
$proto8["m_srcTableName"] = "sqlfields";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sqlfield",
	"m_strTable" => "sqlfields",
	"m_srcTableName" => "sqlfields"
));

$proto10["m_sql"] = "sqlfield";
$proto10["m_srcTableName"] = "sqlfields";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "sqlfields";
$proto13["m_srcTableName"] = "sqlfields";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "formid";
$proto13["m_columns"][] = "sqlfield";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "sqlfields";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "sqlfields";
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
$proto0["m_srcTableName"]="sqlfields";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sqlfields1 = createSqlQuery_sqlfields1();


	
		;

			

$tdatasqlfields1[".sqlquery"] = $queryData_sqlfields1;



$tableEvents["sqlfields"] = new eventsBase;
$tdatasqlfields1[".hasEvents"] = false;

?>