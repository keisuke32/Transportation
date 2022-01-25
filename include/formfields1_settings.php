<?php
$tdataformfields1 = array();
$tdataformfields1[".searchableFields"] = array();
$tdataformfields1[".ShortName"] = "formfields1";
$tdataformfields1[".OwnerID"] = "";
$tdataformfields1[".OriginalTable"] = "formfields";


$tdataformfields1[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataformfields1[".originalPagesByType"] = $tdataformfields1[".pagesByType"];
$tdataformfields1[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataformfields1[".originalPages"] = $tdataformfields1[".pages"];
$tdataformfields1[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdataformfields1[".originalDefaultPages"] = $tdataformfields1[".defaultPages"];

//	field labels
$fieldLabelsformfields1 = array();
$fieldToolTipsformfields1 = array();
$pageTitlesformfields1 = array();
$placeHoldersformfields1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsformfields1["English"] = array();
	$fieldToolTipsformfields1["English"] = array();
	$placeHoldersformfields1["English"] = array();
	$pageTitlesformfields1["English"] = array();
	$fieldLabelsformfields1["English"]["id"] = "Id";
	$fieldToolTipsformfields1["English"]["id"] = "";
	$placeHoldersformfields1["English"]["id"] = "";
	$fieldLabelsformfields1["English"]["formid"] = "Formid";
	$fieldToolTipsformfields1["English"]["formid"] = "";
	$placeHoldersformfields1["English"]["formid"] = "";
	$fieldLabelsformfields1["English"]["fieldform"] = "Fieldform";
	$fieldToolTipsformfields1["English"]["fieldform"] = "";
	$placeHoldersformfields1["English"]["fieldform"] = "";
	$fieldLabelsformfields1["English"]["fieldsql"] = "";
	$fieldToolTipsformfields1["English"]["fieldsql"] = "";
	$placeHoldersformfields1["English"]["fieldsql"] = "";
	$fieldLabelsformfields1["English"]["fieldformalt"] = "PDF Form Field Name";
	$fieldToolTipsformfields1["English"]["fieldformalt"] = "";
	$placeHoldersformfields1["English"]["fieldformalt"] = "";
	if (count($fieldToolTipsformfields1["English"]))
		$tdataformfields1[".isUseToolTips"] = true;
}


	$tdataformfields1[".NCSearch"] = true;



$tdataformfields1[".shortTableName"] = "formfields1";
$tdataformfields1[".nSecOptions"] = 0;

$tdataformfields1[".mainTableOwnerID"] = "";
$tdataformfields1[".entityType"] = 0;
$tdataformfields1[".connId"] = "logistics_at_localhost";


$tdataformfields1[".strOriginalTableName"] = "formfields";

	



$tdataformfields1[".showAddInPopup"] = false;

$tdataformfields1[".showEditInPopup"] = false;

$tdataformfields1[".showViewInPopup"] = false;

$tdataformfields1[".listAjax"] = false;
//	temporary
//$tdataformfields1[".listAjax"] = false;

	$tdataformfields1[".audit"] = false;

	$tdataformfields1[".locking"] = false;


$pages = $tdataformfields1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataformfields1[".edit"] = true;
	$tdataformfields1[".afterEditAction"] = 1;
	$tdataformfields1[".closePopupAfterEdit"] = 1;
	$tdataformfields1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataformfields1[".add"] = true;
$tdataformfields1[".afterAddAction"] = 1;
$tdataformfields1[".closePopupAfterAdd"] = 1;
$tdataformfields1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataformfields1[".list"] = true;
}



$tdataformfields1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataformfields1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataformfields1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataformfields1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataformfields1[".printFriendly"] = true;
}



$tdataformfields1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataformfields1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataformfields1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataformfields1[".isUseAjaxSuggest"] = true;

$tdataformfields1[".rowHighlite"] = true;



																																										

$tdataformfields1[".ajaxCodeSnippetAdded"] = false;

$tdataformfields1[".buttonsAdded"] = false;

$tdataformfields1[".addPageEvents"] = true;

// use timepicker for search panel
$tdataformfields1[".isUseTimeForSearch"] = false;


$tdataformfields1[".badgeColor"] = "2f4f4f";


$tdataformfields1[".allSearchFields"] = array();
$tdataformfields1[".filterFields"] = array();
$tdataformfields1[".requiredSearchFields"] = array();

$tdataformfields1[".googleLikeFields"] = array();
$tdataformfields1[".googleLikeFields"][] = "id";
$tdataformfields1[".googleLikeFields"][] = "formid";
$tdataformfields1[".googleLikeFields"][] = "fieldform";
$tdataformfields1[".googleLikeFields"][] = "fieldsql";
$tdataformfields1[".googleLikeFields"][] = "fieldformalt";



$tdataformfields1[".tableType"] = "list";

$tdataformfields1[".printerPageOrientation"] = 0;
$tdataformfields1[".nPrinterPageScale"] = 100;

$tdataformfields1[".nPrinterSplitRecords"] = 40;

$tdataformfields1[".geocodingEnabled"] = false;










$tdataformfields1[".pageSize"] = 50;

$tdataformfields1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataformfields1[".strOrderBy"] = $tstrOrderBy;

$tdataformfields1[".orderindexes"] = array();
	$tdataformfields1[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "id");



$tdataformfields1[".sqlHead"] = "SELECT id, formid, fieldform, fieldsql, fieldformalt";
$tdataformfields1[".sqlFrom"] = "FROM formfields";
$tdataformfields1[".sqlWhereExpr"] = "";
$tdataformfields1[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdataformfields1[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataformfields1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataformfields1[".arrGroupsPerPage"] = $arrGPP;

$tdataformfields1[".highlightSearchResults"] = true;

$tableKeysformfields1 = array();
$tableKeysformfields1[] = "id";
$tdataformfields1[".Keys"] = $tableKeysformfields1;


$tdataformfields1[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "formfields";
	$fdata["Label"] = GetFieldLabel("formfields","id");
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


	$tdataformfields1["id"] = $fdata;
		$tdataformfields1[".searchableFields"][] = "id";
//	formid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "formid";
	$fdata["GoodName"] = "formid";
	$fdata["ownerTable"] = "formfields";
	$fdata["Label"] = GetFieldLabel("formfields","formid");
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


	$tdataformfields1["formid"] = $fdata;
		$tdataformfields1[".searchableFields"][] = "formid";
//	fieldform
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fieldform";
	$fdata["GoodName"] = "fieldform";
	$fdata["ownerTable"] = "formfields";
	$fdata["Label"] = GetFieldLabel("formfields","fieldform");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fieldform";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fieldform";

	
	
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


	$tdataformfields1["fieldform"] = $fdata;
		$tdataformfields1[".searchableFields"][] = "fieldform";
//	fieldsql
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fieldsql";
	$fdata["GoodName"] = "fieldsql";
	$fdata["ownerTable"] = "formfields";
	$fdata["Label"] = GetFieldLabel("formfields","fieldsql");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fieldsql";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fieldsql";

	
	
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


	$tdataformfields1["fieldsql"] = $fdata;
		$tdataformfields1[".searchableFields"][] = "fieldsql";
//	fieldformalt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fieldformalt";
	$fdata["GoodName"] = "fieldformalt";
	$fdata["ownerTable"] = "formfields";
	$fdata["Label"] = GetFieldLabel("formfields","fieldformalt");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fieldformalt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fieldformalt";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataformfields1["fieldformalt"] = $fdata;
		$tdataformfields1[".searchableFields"][] = "fieldformalt";


$tables_data["formfields"]=&$tdataformfields1;
$field_labels["formfields"] = &$fieldLabelsformfields1;
$fieldToolTips["formfields"] = &$fieldToolTipsformfields1;
$placeHolders["formfields"] = &$placeHoldersformfields1;
$page_titles["formfields"] = &$pageTitlesformfields1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["formfields"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["formfields"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="forms";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="forms";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "forms1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["formfields"][0] = $masterParams;
				$masterTablesData["formfields"][0]["masterKeys"] = array();
	$masterTablesData["formfields"][0]["masterKeys"][]="id";
				$masterTablesData["formfields"][0]["detailKeys"] = array();
	$masterTablesData["formfields"][0]["detailKeys"][]="formid";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_formfields1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id, formid, fieldform, fieldsql, fieldformalt";
$proto0["m_strFrom"] = "FROM formfields";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY id";
	
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
	"m_strTable" => "formfields",
	"m_srcTableName" => "formfields"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "formfields";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "formid",
	"m_strTable" => "formfields",
	"m_srcTableName" => "formfields"
));

$proto8["m_sql"] = "formid";
$proto8["m_srcTableName"] = "formfields";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fieldform",
	"m_strTable" => "formfields",
	"m_srcTableName" => "formfields"
));

$proto10["m_sql"] = "fieldform";
$proto10["m_srcTableName"] = "formfields";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fieldsql",
	"m_strTable" => "formfields",
	"m_srcTableName" => "formfields"
));

$proto12["m_sql"] = "fieldsql";
$proto12["m_srcTableName"] = "formfields";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fieldformalt",
	"m_strTable" => "formfields",
	"m_srcTableName" => "formfields"
));

$proto14["m_sql"] = "fieldformalt";
$proto14["m_srcTableName"] = "formfields";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "formfields";
$proto17["m_srcTableName"] = "formfields";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "formid";
$proto17["m_columns"][] = "fieldform";
$proto17["m_columns"][] = "fieldsql";
$proto17["m_columns"][] = "fieldformalt";
$proto17["m_columns"][] = "cboxon";
$proto17["m_columns"][] = "cboxoff";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "formfields";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "formfields";
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
	"m_strName" => "id",
	"m_strTable" => "formfields",
	"m_srcTableName" => "formfields"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 1;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="formfields";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_formfields1 = createSqlQuery_formfields1();


	
		;

					

$tdataformfields1[".sqlquery"] = $queryData_formfields1;



include_once(getabspath("include/formfields1_events.php"));
$tableEvents["formfields"] = new eventclass_formfields1;
$tdataformfields1[".hasEvents"] = true;

?>