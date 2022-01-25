<?php
$tdatatbl_company_equipment = array();
$tdatatbl_company_equipment[".searchableFields"] = array();
$tdatatbl_company_equipment[".ShortName"] = "tbl_company_equipment";
$tdatatbl_company_equipment[".OwnerID"] = "";
$tdatatbl_company_equipment[".OriginalTable"] = "tbl_company_equipment";


$tdatatbl_company_equipment[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatbl_company_equipment[".originalPagesByType"] = $tdatatbl_company_equipment[".pagesByType"];
$tdatatbl_company_equipment[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatbl_company_equipment[".originalPages"] = $tdatatbl_company_equipment[".pages"];
$tdatatbl_company_equipment[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatbl_company_equipment[".originalDefaultPages"] = $tdatatbl_company_equipment[".defaultPages"];

//	field labels
$fieldLabelstbl_company_equipment = array();
$fieldToolTipstbl_company_equipment = array();
$pageTitlestbl_company_equipment = array();
$placeHolderstbl_company_equipment = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_company_equipment["English"] = array();
	$fieldToolTipstbl_company_equipment["English"] = array();
	$placeHolderstbl_company_equipment["English"] = array();
	$pageTitlestbl_company_equipment["English"] = array();
	$fieldLabelstbl_company_equipment["English"]["ID"] = "ID";
	$fieldToolTipstbl_company_equipment["English"]["ID"] = "";
	$placeHolderstbl_company_equipment["English"]["ID"] = "";
	$fieldLabelstbl_company_equipment["English"]["CompanyID"] = "Company";
	$fieldToolTipstbl_company_equipment["English"]["CompanyID"] = "";
	$placeHolderstbl_company_equipment["English"]["CompanyID"] = "";
	$fieldLabelstbl_company_equipment["English"]["EquipmentTypeID"] = "Equipment Type";
	$fieldToolTipstbl_company_equipment["English"]["EquipmentTypeID"] = "";
	$placeHolderstbl_company_equipment["English"]["EquipmentTypeID"] = "";
	$fieldLabelstbl_company_equipment["English"]["EquipmentNumber"] = "Equipment Number";
	$fieldToolTipstbl_company_equipment["English"]["EquipmentNumber"] = "";
	$placeHolderstbl_company_equipment["English"]["EquipmentNumber"] = "";
	if (count($fieldToolTipstbl_company_equipment["English"]))
		$tdatatbl_company_equipment[".isUseToolTips"] = true;
}


	$tdatatbl_company_equipment[".NCSearch"] = true;



$tdatatbl_company_equipment[".shortTableName"] = "tbl_company_equipment";
$tdatatbl_company_equipment[".nSecOptions"] = 0;

$tdatatbl_company_equipment[".mainTableOwnerID"] = "";
$tdatatbl_company_equipment[".entityType"] = 0;
$tdatatbl_company_equipment[".connId"] = "logistics_at_localhost";


$tdatatbl_company_equipment[".strOriginalTableName"] = "tbl_company_equipment";

	



$tdatatbl_company_equipment[".showAddInPopup"] = false;

$tdatatbl_company_equipment[".showEditInPopup"] = false;

$tdatatbl_company_equipment[".showViewInPopup"] = false;

	$tdatatbl_company_equipment[".listAjax"] = true;
//	temporary
//$tdatatbl_company_equipment[".listAjax"] = false;

	$tdatatbl_company_equipment[".audit"] = false;

	$tdatatbl_company_equipment[".locking"] = false;


$pages = $tdatatbl_company_equipment[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_company_equipment[".edit"] = true;
	$tdatatbl_company_equipment[".afterEditAction"] = 1;
	$tdatatbl_company_equipment[".closePopupAfterEdit"] = 1;
	$tdatatbl_company_equipment[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_company_equipment[".add"] = true;
$tdatatbl_company_equipment[".afterAddAction"] = 1;
$tdatatbl_company_equipment[".closePopupAfterAdd"] = 1;
$tdatatbl_company_equipment[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_company_equipment[".list"] = true;
}



$tdatatbl_company_equipment[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_company_equipment[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_company_equipment[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_company_equipment[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_company_equipment[".printFriendly"] = true;
}



$tdatatbl_company_equipment[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_company_equipment[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_company_equipment[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_company_equipment[".isUseAjaxSuggest"] = true;

$tdatatbl_company_equipment[".rowHighlite"] = true;



																																										

$tdatatbl_company_equipment[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_company_equipment[".buttonsAdded"] = false;

$tdatatbl_company_equipment[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_company_equipment[".isUseTimeForSearch"] = false;


$tdatatbl_company_equipment[".badgeColor"] = "d2691e";


$tdatatbl_company_equipment[".allSearchFields"] = array();
$tdatatbl_company_equipment[".filterFields"] = array();
$tdatatbl_company_equipment[".requiredSearchFields"] = array();

$tdatatbl_company_equipment[".googleLikeFields"] = array();
$tdatatbl_company_equipment[".googleLikeFields"][] = "ID";
$tdatatbl_company_equipment[".googleLikeFields"][] = "CompanyID";
$tdatatbl_company_equipment[".googleLikeFields"][] = "EquipmentTypeID";
$tdatatbl_company_equipment[".googleLikeFields"][] = "EquipmentNumber";



$tdatatbl_company_equipment[".tableType"] = "list";

$tdatatbl_company_equipment[".printerPageOrientation"] = 0;
$tdatatbl_company_equipment[".nPrinterPageScale"] = 100;

$tdatatbl_company_equipment[".nPrinterSplitRecords"] = 40;

$tdatatbl_company_equipment[".geocodingEnabled"] = false;










$tdatatbl_company_equipment[".pageSize"] = 20;

$tdatatbl_company_equipment[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_company_equipment[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_company_equipment[".orderindexes"] = array();


$tdatatbl_company_equipment[".sqlHead"] = "SELECT ID,  	CompanyID,  	EquipmentTypeID,  	EquipmentNumber";
$tdatatbl_company_equipment[".sqlFrom"] = "FROM tbl_company_equipment";
$tdatatbl_company_equipment[".sqlWhereExpr"] = "";
$tdatatbl_company_equipment[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_company_equipment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_company_equipment[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_company_equipment[".highlightSearchResults"] = true;

$tableKeystbl_company_equipment = array();
$tableKeystbl_company_equipment[] = "ID";
$tdatatbl_company_equipment[".Keys"] = $tableKeystbl_company_equipment;


$tdatatbl_company_equipment[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_company_equipment";
	$fdata["Label"] = GetFieldLabel("tbl_company_equipment","ID");
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


	$tdatatbl_company_equipment["ID"] = $fdata;
		$tdatatbl_company_equipment[".searchableFields"][] = "ID";
//	CompanyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CompanyID";
	$fdata["GoodName"] = "CompanyID";
	$fdata["ownerTable"] = "tbl_company_equipment";
	$fdata["Label"] = GetFieldLabel("tbl_company_equipment","CompanyID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CompanyID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CompanyID";

	
	
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
	$edata["LookupTable"] = "tbl_company";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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


	$tdatatbl_company_equipment["CompanyID"] = $fdata;
		$tdatatbl_company_equipment[".searchableFields"][] = "CompanyID";
//	EquipmentTypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EquipmentTypeID";
	$fdata["GoodName"] = "EquipmentTypeID";
	$fdata["ownerTable"] = "tbl_company_equipment";
	$fdata["Label"] = GetFieldLabel("tbl_company_equipment","EquipmentTypeID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "EquipmentTypeID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EquipmentTypeID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_equipment_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Description";

	

	
	$edata["LookupOrderBy"] = "Description";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_equipment_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Description";

	

	
	$edata["LookupOrderBy"] = "Description";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_equipment_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Description";

	

	
	$edata["LookupOrderBy"] = "Description";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatatbl_company_equipment["EquipmentTypeID"] = $fdata;
		$tdatatbl_company_equipment[".searchableFields"][] = "EquipmentTypeID";
//	EquipmentNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "EquipmentNumber";
	$fdata["GoodName"] = "EquipmentNumber";
	$fdata["ownerTable"] = "tbl_company_equipment";
	$fdata["Label"] = GetFieldLabel("tbl_company_equipment","EquipmentNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "EquipmentNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EquipmentNumber";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatbl_company_equipment["EquipmentNumber"] = $fdata;
		$tdatatbl_company_equipment[".searchableFields"][] = "EquipmentNumber";


$tables_data["tbl_company_equipment"]=&$tdatatbl_company_equipment;
$field_labels["tbl_company_equipment"] = &$fieldLabelstbl_company_equipment;
$fieldToolTips["tbl_company_equipment"] = &$fieldToolTipstbl_company_equipment;
$placeHolders["tbl_company_equipment"] = &$placeHolderstbl_company_equipment;
$page_titles["tbl_company_equipment"] = &$pageTitlestbl_company_equipment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_company_equipment"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_company_equipment"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tbl_company";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_company";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_company";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_company_equipment"][0] = $masterParams;
				$masterTablesData["tbl_company_equipment"][0]["masterKeys"] = array();
	$masterTablesData["tbl_company_equipment"][0]["masterKeys"][]="ID";
				$masterTablesData["tbl_company_equipment"][0]["detailKeys"] = array();
	$masterTablesData["tbl_company_equipment"][0]["detailKeys"][]="CompanyID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_company_equipment()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	CompanyID,  	EquipmentTypeID,  	EquipmentNumber";
$proto0["m_strFrom"] = "FROM tbl_company_equipment";
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
	"m_strTable" => "tbl_company_equipment",
	"m_srcTableName" => "tbl_company_equipment"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_company_equipment";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CompanyID",
	"m_strTable" => "tbl_company_equipment",
	"m_srcTableName" => "tbl_company_equipment"
));

$proto8["m_sql"] = "CompanyID";
$proto8["m_srcTableName"] = "tbl_company_equipment";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EquipmentTypeID",
	"m_strTable" => "tbl_company_equipment",
	"m_srcTableName" => "tbl_company_equipment"
));

$proto10["m_sql"] = "EquipmentTypeID";
$proto10["m_srcTableName"] = "tbl_company_equipment";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "EquipmentNumber",
	"m_strTable" => "tbl_company_equipment",
	"m_srcTableName" => "tbl_company_equipment"
));

$proto12["m_sql"] = "EquipmentNumber";
$proto12["m_srcTableName"] = "tbl_company_equipment";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tbl_company_equipment";
$proto15["m_srcTableName"] = "tbl_company_equipment";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "ID";
$proto15["m_columns"][] = "CompanyID";
$proto15["m_columns"][] = "EquipmentTypeID";
$proto15["m_columns"][] = "EquipmentNumber";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "tbl_company_equipment";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tbl_company_equipment";
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
$proto0["m_srcTableName"]="tbl_company_equipment";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_company_equipment = createSqlQuery_tbl_company_equipment();


	
		;

				

$tdatatbl_company_equipment[".sqlquery"] = $queryData_tbl_company_equipment;



include_once(getabspath("include/tbl_company_equipment_events.php"));
$tableEvents["tbl_company_equipment"] = new eventclass_tbl_company_equipment;
$tdatatbl_company_equipment[".hasEvents"] = true;

?>