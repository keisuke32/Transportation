<?php
$tdataforms1 = array();
$tdataforms1[".searchableFields"] = array();
$tdataforms1[".ShortName"] = "forms1";
$tdataforms1[".OwnerID"] = "";
$tdataforms1[".OriginalTable"] = "forms";


$tdataforms1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataforms1[".originalPagesByType"] = $tdataforms1[".pagesByType"];
$tdataforms1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataforms1[".originalPages"] = $tdataforms1[".pages"];
$tdataforms1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdataforms1[".originalDefaultPages"] = $tdataforms1[".defaultPages"];

//	field labels
$fieldLabelsforms1 = array();
$fieldToolTipsforms1 = array();
$pageTitlesforms1 = array();
$placeHoldersforms1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsforms1["English"] = array();
	$fieldToolTipsforms1["English"] = array();
	$placeHoldersforms1["English"] = array();
	$pageTitlesforms1["English"] = array();
	$fieldLabelsforms1["English"]["id"] = "Id";
	$fieldToolTipsforms1["English"]["id"] = "";
	$placeHoldersforms1["English"]["id"] = "";
	$fieldLabelsforms1["English"]["formname"] = "Form Name";
	$fieldToolTipsforms1["English"]["formname"] = "";
	$placeHoldersforms1["English"]["formname"] = "";
	$fieldLabelsforms1["English"]["formfile"] = "PDF Form File";
	$fieldToolTipsforms1["English"]["formfile"] = "";
	$placeHoldersforms1["English"]["formfile"] = "";
	$fieldLabelsforms1["English"]["sqlquery"] = "Sql Query";
	$fieldToolTipsforms1["English"]["sqlquery"] = "";
	$placeHoldersforms1["English"]["sqlquery"] = "";
	$fieldLabelsforms1["English"]["pdffile"] = "Completed PDF Form";
	$fieldToolTipsforms1["English"]["pdffile"] = "";
	$placeHoldersforms1["English"]["pdffile"] = "";
	$fieldLabelsforms1["English"]["multifields"] = "Allow using field more than once";
	$fieldToolTipsforms1["English"]["multifields"] = "";
	$placeHoldersforms1["English"]["multifields"] = "";
	$pageTitlesforms1["English"]["add"] = "Add PDF Form";
	if (count($fieldToolTipsforms1["English"]))
		$tdataforms1[".isUseToolTips"] = true;
}


	$tdataforms1[".NCSearch"] = true;



$tdataforms1[".shortTableName"] = "forms1";
$tdataforms1[".nSecOptions"] = 0;

$tdataforms1[".mainTableOwnerID"] = "";
$tdataforms1[".entityType"] = 0;
$tdataforms1[".connId"] = "logistics_at_localhost";


$tdataforms1[".strOriginalTableName"] = "forms";

	



$tdataforms1[".showAddInPopup"] = false;

$tdataforms1[".showEditInPopup"] = false;

$tdataforms1[".showViewInPopup"] = false;

$tdataforms1[".listAjax"] = false;
//	temporary
//$tdataforms1[".listAjax"] = false;

	$tdataforms1[".audit"] = false;

	$tdataforms1[".locking"] = false;


$pages = $tdataforms1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataforms1[".edit"] = true;
	$tdataforms1[".afterEditAction"] = 1;
	$tdataforms1[".closePopupAfterEdit"] = 1;
	$tdataforms1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataforms1[".add"] = true;
$tdataforms1[".afterAddAction"] = 1;
$tdataforms1[".closePopupAfterAdd"] = 1;
$tdataforms1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataforms1[".list"] = true;
}



$tdataforms1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataforms1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataforms1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataforms1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataforms1[".printFriendly"] = true;
}



$tdataforms1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataforms1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataforms1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataforms1[".isUseAjaxSuggest"] = true;

$tdataforms1[".rowHighlite"] = true;



											
											

$tdataforms1[".ajaxCodeSnippetAdded"] = false;

$tdataforms1[".buttonsAdded"] = true;

$tdataforms1[".addPageEvents"] = true;

// use timepicker for search panel
$tdataforms1[".isUseTimeForSearch"] = false;


$tdataforms1[".badgeColor"] = "E8926F";


$tdataforms1[".allSearchFields"] = array();
$tdataforms1[".filterFields"] = array();
$tdataforms1[".requiredSearchFields"] = array();

$tdataforms1[".googleLikeFields"] = array();
$tdataforms1[".googleLikeFields"][] = "id";
$tdataforms1[".googleLikeFields"][] = "formname";
$tdataforms1[".googleLikeFields"][] = "sqlquery";
$tdataforms1[".googleLikeFields"][] = "formfile";
$tdataforms1[".googleLikeFields"][] = "pdffile";
$tdataforms1[".googleLikeFields"][] = "multifields";



$tdataforms1[".tableType"] = "list";

$tdataforms1[".printerPageOrientation"] = 0;
$tdataforms1[".nPrinterPageScale"] = 100;

$tdataforms1[".nPrinterSplitRecords"] = 40;

$tdataforms1[".geocodingEnabled"] = false;










$tdataforms1[".pageSize"] = 20;

$tdataforms1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataforms1[".strOrderBy"] = $tstrOrderBy;

$tdataforms1[".orderindexes"] = array();


$tdataforms1[".sqlHead"] = "SELECT id,  	formname,  	sqlquery,  	formfile,  	pdffile,  	multifields";
$tdataforms1[".sqlFrom"] = "FROM forms";
$tdataforms1[".sqlWhereExpr"] = "";
$tdataforms1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataforms1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataforms1[".arrGroupsPerPage"] = $arrGPP;

$tdataforms1[".highlightSearchResults"] = true;

$tableKeysforms1 = array();
$tableKeysforms1[] = "id";
$tdataforms1[".Keys"] = $tableKeysforms1;


$tdataforms1[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "forms";
	$fdata["Label"] = GetFieldLabel("forms","id");
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


	$tdataforms1["id"] = $fdata;
		$tdataforms1[".searchableFields"][] = "id";
//	formname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "formname";
	$fdata["GoodName"] = "formname";
	$fdata["ownerTable"] = "forms";
	$fdata["Label"] = GetFieldLabel("forms","formname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "formname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "formname";

	
	
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


	$tdataforms1["formname"] = $fdata;
		$tdataforms1[".searchableFields"][] = "formname";
//	sqlquery
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sqlquery";
	$fdata["GoodName"] = "sqlquery";
	$fdata["ownerTable"] = "forms";
	$fdata["Label"] = GetFieldLabel("forms","sqlquery");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sqlquery";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sqlquery";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
		$eventsData = array();
	$eventsData[] = array( "name" => "editing_sql_query", "type" => "editing" );
	$edata["fieldEvents"] = $eventsData;




	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataforms1["sqlquery"] = $fdata;
		$tdataforms1[".searchableFields"][] = "sqlquery";
//	formfile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "formfile";
	$fdata["GoodName"] = "formfile";
	$fdata["ownerTable"] = "forms";
	$fdata["Label"] = GetFieldLabel("forms","formfile");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "formfile";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "formfile";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataforms1["formfile"] = $fdata;
		$tdataforms1[".searchableFields"][] = "formfile";
//	pdffile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "pdffile";
	$fdata["GoodName"] = "pdffile";
	$fdata["ownerTable"] = "forms";
	$fdata["Label"] = GetFieldLabel("forms","pdffile");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pdffile";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdffile";

		$fdata["DeleteAssociatedFile"] = true;

		$fdata["CompatibilityMode"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
		
	
	
	
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataforms1["pdffile"] = $fdata;
		$tdataforms1[".searchableFields"][] = "pdffile";
//	multifields
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "multifields";
	$fdata["GoodName"] = "multifields";
	$fdata["ownerTable"] = "forms";
	$fdata["Label"] = GetFieldLabel("forms","multifields");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "multifields";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "multifields";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
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


	$tdataforms1["multifields"] = $fdata;
		$tdataforms1[".searchableFields"][] = "multifields";


$tables_data["forms"]=&$tdataforms1;
$field_labels["forms"] = &$fieldLabelsforms1;
$fieldToolTips["forms"] = &$fieldToolTipsforms1;
$placeHolders["forms"] = &$placeHoldersforms1;
$page_titles["forms"] = &$pageTitlesforms1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["forms"] = array();
//	formfields
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="formfields";
		$detailsParam["dOriginalTable"] = "formfields";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "formfields1";
	$detailsParam["dCaptionTable"] = GetTableCaption("formfields");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["forms"][$dIndex] = $detailsParam;

	
		$detailsTablesData["forms"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["forms"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["forms"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["forms"][$dIndex]["detailKeys"][]="formid";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["forms"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_forms1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	formname,  	sqlquery,  	formfile,  	pdffile,  	multifields";
$proto0["m_strFrom"] = "FROM forms";
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
	"m_strTable" => "forms",
	"m_srcTableName" => "forms"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "forms";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "formname",
	"m_strTable" => "forms",
	"m_srcTableName" => "forms"
));

$proto8["m_sql"] = "formname";
$proto8["m_srcTableName"] = "forms";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sqlquery",
	"m_strTable" => "forms",
	"m_srcTableName" => "forms"
));

$proto10["m_sql"] = "sqlquery";
$proto10["m_srcTableName"] = "forms";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "formfile",
	"m_strTable" => "forms",
	"m_srcTableName" => "forms"
));

$proto12["m_sql"] = "formfile";
$proto12["m_srcTableName"] = "forms";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "pdffile",
	"m_strTable" => "forms",
	"m_srcTableName" => "forms"
));

$proto14["m_sql"] = "pdffile";
$proto14["m_srcTableName"] = "forms";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "multifields",
	"m_strTable" => "forms",
	"m_srcTableName" => "forms"
));

$proto16["m_sql"] = "multifields";
$proto16["m_srcTableName"] = "forms";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "forms";
$proto19["m_srcTableName"] = "forms";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "formname";
$proto19["m_columns"][] = "sqlquery";
$proto19["m_columns"][] = "formfile";
$proto19["m_columns"][] = "pdffile";
$proto19["m_columns"][] = "multifields";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "forms";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "forms";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="forms";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_forms1 = createSqlQuery_forms1();


	
		;

						

$tdataforms1[".sqlquery"] = $queryData_forms1;



include_once(getabspath("include/forms1_events.php"));
$tableEvents["forms"] = new eventclass_forms1;
$tdataforms1[".hasEvents"] = true;

?>