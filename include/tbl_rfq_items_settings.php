<?php
$tdatatbl_rfq_items = array();
$tdatatbl_rfq_items[".searchableFields"] = array();
$tdatatbl_rfq_items[".ShortName"] = "tbl_rfq_items";
$tdatatbl_rfq_items[".OwnerID"] = "";
$tdatatbl_rfq_items[".OriginalTable"] = "tbl_rfq_items";


$tdatatbl_rfq_items[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_rfq_items[".originalPagesByType"] = $tdatatbl_rfq_items[".pagesByType"];
$tdatatbl_rfq_items[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_rfq_items[".originalPages"] = $tdatatbl_rfq_items[".pages"];
$tdatatbl_rfq_items[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_rfq_items[".originalDefaultPages"] = $tdatatbl_rfq_items[".defaultPages"];

//	field labels
$fieldLabelstbl_rfq_items = array();
$fieldToolTipstbl_rfq_items = array();
$pageTitlestbl_rfq_items = array();
$placeHolderstbl_rfq_items = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_rfq_items["English"] = array();
	$fieldToolTipstbl_rfq_items["English"] = array();
	$placeHolderstbl_rfq_items["English"] = array();
	$pageTitlestbl_rfq_items["English"] = array();
	$fieldLabelstbl_rfq_items["English"]["ID"] = "ID";
	$fieldToolTipstbl_rfq_items["English"]["ID"] = "";
	$placeHolderstbl_rfq_items["English"]["ID"] = "";
	$fieldLabelstbl_rfq_items["English"]["Description"] = "Description";
	$fieldToolTipstbl_rfq_items["English"]["Description"] = "";
	$placeHolderstbl_rfq_items["English"]["Description"] = "";
	$fieldLabelstbl_rfq_items["English"]["Weight"] = "Weight";
	$fieldToolTipstbl_rfq_items["English"]["Weight"] = "";
	$placeHolderstbl_rfq_items["English"]["Weight"] = "";
	$fieldLabelstbl_rfq_items["English"]["WeightUOMID"] = "Weight UOM";
	$fieldToolTipstbl_rfq_items["English"]["WeightUOMID"] = "";
	$placeHolderstbl_rfq_items["English"]["WeightUOMID"] = "";
	$fieldLabelstbl_rfq_items["English"]["PackageQuantitiy"] = "Package Quantitiy";
	$fieldToolTipstbl_rfq_items["English"]["PackageQuantitiy"] = "";
	$placeHolderstbl_rfq_items["English"]["PackageQuantitiy"] = "";
	$fieldLabelstbl_rfq_items["English"]["PackageTypeID"] = "Package Type";
	$fieldToolTipstbl_rfq_items["English"]["PackageTypeID"] = "";
	$placeHolderstbl_rfq_items["English"]["PackageTypeID"] = "";
	$fieldLabelstbl_rfq_items["English"]["HndlingQuantitiy"] = "Hndling Quantitiy";
	$fieldToolTipstbl_rfq_items["English"]["HndlingQuantitiy"] = "";
	$placeHolderstbl_rfq_items["English"]["HndlingQuantitiy"] = "";
	$fieldLabelstbl_rfq_items["English"]["HandlingTypeID"] = "Handling Type";
	$fieldToolTipstbl_rfq_items["English"]["HandlingTypeID"] = "";
	$placeHolderstbl_rfq_items["English"]["HandlingTypeID"] = "";
	$fieldLabelstbl_rfq_items["English"]["CreateDate"] = "Create Date";
	$fieldToolTipstbl_rfq_items["English"]["CreateDate"] = "";
	$placeHolderstbl_rfq_items["English"]["CreateDate"] = "";
	$fieldLabelstbl_rfq_items["English"]["RfqID"] = "RFQ ID";
	$fieldToolTipstbl_rfq_items["English"]["RfqID"] = "";
	$placeHolderstbl_rfq_items["English"]["RfqID"] = "";
	$fieldLabelstbl_rfq_items["English"]["HS_Code"] = "HS Code";
	$fieldToolTipstbl_rfq_items["English"]["HS_Code"] = "";
	$placeHolderstbl_rfq_items["English"]["HS_Code"] = "";
	$fieldLabelstbl_rfq_items["English"]["TarifClass"] = "Tarif Class";
	$fieldToolTipstbl_rfq_items["English"]["TarifClass"] = "";
	$placeHolderstbl_rfq_items["English"]["TarifClass"] = "";
	$fieldLabelstbl_rfq_items["English"]["NMFC_Code"] = "NMFC Code";
	$fieldToolTipstbl_rfq_items["English"]["NMFC_Code"] = "";
	$placeHolderstbl_rfq_items["English"]["NMFC_Code"] = "";
	$fieldLabelstbl_rfq_items["English"]["Dimensions"] = "Dimensions";
	$fieldToolTipstbl_rfq_items["English"]["Dimensions"] = "";
	$placeHolderstbl_rfq_items["English"]["Dimensions"] = "";
	$fieldLabelstbl_rfq_items["English"]["DimUOMID"] = "Dim UOMID";
	$fieldToolTipstbl_rfq_items["English"]["DimUOMID"] = "";
	$placeHolderstbl_rfq_items["English"]["DimUOMID"] = "";
	if (count($fieldToolTipstbl_rfq_items["English"]))
		$tdatatbl_rfq_items[".isUseToolTips"] = true;
}


	$tdatatbl_rfq_items[".NCSearch"] = true;



$tdatatbl_rfq_items[".shortTableName"] = "tbl_rfq_items";
$tdatatbl_rfq_items[".nSecOptions"] = 0;

$tdatatbl_rfq_items[".mainTableOwnerID"] = "";
$tdatatbl_rfq_items[".entityType"] = 0;
$tdatatbl_rfq_items[".connId"] = "logistics_at_localhost";


$tdatatbl_rfq_items[".strOriginalTableName"] = "tbl_rfq_items";

	



$tdatatbl_rfq_items[".showAddInPopup"] = false;

$tdatatbl_rfq_items[".showEditInPopup"] = false;

$tdatatbl_rfq_items[".showViewInPopup"] = false;

$tdatatbl_rfq_items[".listAjax"] = false;
//	temporary
//$tdatatbl_rfq_items[".listAjax"] = false;

	$tdatatbl_rfq_items[".audit"] = false;

	$tdatatbl_rfq_items[".locking"] = false;


$pages = $tdatatbl_rfq_items[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_rfq_items[".edit"] = true;
	$tdatatbl_rfq_items[".afterEditAction"] = 1;
	$tdatatbl_rfq_items[".closePopupAfterEdit"] = 1;
	$tdatatbl_rfq_items[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_rfq_items[".add"] = true;
$tdatatbl_rfq_items[".afterAddAction"] = 1;
$tdatatbl_rfq_items[".closePopupAfterAdd"] = 1;
$tdatatbl_rfq_items[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_rfq_items[".list"] = true;
}



$tdatatbl_rfq_items[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_rfq_items[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_rfq_items[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_rfq_items[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_rfq_items[".printFriendly"] = true;
}



$tdatatbl_rfq_items[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_rfq_items[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_rfq_items[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_rfq_items[".isUseAjaxSuggest"] = true;

$tdatatbl_rfq_items[".rowHighlite"] = true;



																																										

$tdatatbl_rfq_items[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_rfq_items[".buttonsAdded"] = false;

$tdatatbl_rfq_items[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_rfq_items[".isUseTimeForSearch"] = false;


$tdatatbl_rfq_items[".badgeColor"] = "1e90ff";


$tdatatbl_rfq_items[".allSearchFields"] = array();
$tdatatbl_rfq_items[".filterFields"] = array();
$tdatatbl_rfq_items[".requiredSearchFields"] = array();

$tdatatbl_rfq_items[".googleLikeFields"] = array();
$tdatatbl_rfq_items[".googleLikeFields"][] = "ID";
$tdatatbl_rfq_items[".googleLikeFields"][] = "RfqID";
$tdatatbl_rfq_items[".googleLikeFields"][] = "Description";
$tdatatbl_rfq_items[".googleLikeFields"][] = "Dimensions";
$tdatatbl_rfq_items[".googleLikeFields"][] = "DimUOMID";
$tdatatbl_rfq_items[".googleLikeFields"][] = "Weight";
$tdatatbl_rfq_items[".googleLikeFields"][] = "WeightUOMID";
$tdatatbl_rfq_items[".googleLikeFields"][] = "PackageQuantitiy";
$tdatatbl_rfq_items[".googleLikeFields"][] = "PackageTypeID";
$tdatatbl_rfq_items[".googleLikeFields"][] = "HndlingQuantitiy";
$tdatatbl_rfq_items[".googleLikeFields"][] = "HandlingTypeID";
$tdatatbl_rfq_items[".googleLikeFields"][] = "CreateDate";
$tdatatbl_rfq_items[".googleLikeFields"][] = "HS_Code";
$tdatatbl_rfq_items[".googleLikeFields"][] = "TarifClass";
$tdatatbl_rfq_items[".googleLikeFields"][] = "NMFC_Code";



$tdatatbl_rfq_items[".tableType"] = "list";

$tdatatbl_rfq_items[".printerPageOrientation"] = 0;
$tdatatbl_rfq_items[".nPrinterPageScale"] = 100;

$tdatatbl_rfq_items[".nPrinterSplitRecords"] = 40;

$tdatatbl_rfq_items[".geocodingEnabled"] = false;










$tdatatbl_rfq_items[".pageSize"] = 20;

$tdatatbl_rfq_items[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_rfq_items[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_rfq_items[".orderindexes"] = array();


$tdatatbl_rfq_items[".sqlHead"] = "SELECT ID,  	RfqID,  	Description,  	Dimensions,  	DimUOMID,  	Weight,  	WeightUOMID,  	PackageQuantitiy,  	PackageTypeID,  	HndlingQuantitiy,  	HandlingTypeID,  	CreateDate,  	HS_Code,  	TarifClass,  	NMFC_Code";
$tdatatbl_rfq_items[".sqlFrom"] = "FROM tbl_rfq_items";
$tdatatbl_rfq_items[".sqlWhereExpr"] = "";
$tdatatbl_rfq_items[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_rfq_items[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_rfq_items[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_rfq_items[".highlightSearchResults"] = true;

$tableKeystbl_rfq_items = array();
$tableKeystbl_rfq_items[] = "ID";
$tdatatbl_rfq_items[".Keys"] = $tableKeystbl_rfq_items;


$tdatatbl_rfq_items[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_rfq_items";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_items","ID");
	$fdata["FieldType"] = 3;


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


	$tdatatbl_rfq_items["ID"] = $fdata;
		$tdatatbl_rfq_items[".searchableFields"][] = "ID";
//	RfqID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RfqID";
	$fdata["GoodName"] = "RfqID";
	$fdata["ownerTable"] = "tbl_rfq_items";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_items","RfqID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "RfqID";

		$fdata["sourceSingle"] = "RfqID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RfqID";

	
	
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


	$tdatatbl_rfq_items["RfqID"] = $fdata;
		$tdatatbl_rfq_items[".searchableFields"][] = "RfqID";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "tbl_rfq_items";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_items","Description");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Description";

		$fdata["sourceSingle"] = "Description";

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
			$edata["EditParams"].= " maxlength=80";

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


	$tdatatbl_rfq_items["Description"] = $fdata;
		$tdatatbl_rfq_items[".searchableFields"][] = "Description";
//	Dimensions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Dimensions";
	$fdata["GoodName"] = "Dimensions";
	$fdata["ownerTable"] = "tbl_rfq_items";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_items","Dimensions");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Dimensions";

		$fdata["sourceSingle"] = "Dimensions";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dimensions";

	
	
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
			$edata["EditParams"].= " maxlength=128";

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


	$tdatatbl_rfq_items["Dimensions"] = $fdata;
		$tdatatbl_rfq_items[".searchableFields"][] = "Dimensions";
//	DimUOMID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DimUOMID";
	$fdata["GoodName"] = "DimUOMID";
	$fdata["ownerTable"] = "tbl_rfq_items";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_items","DimUOMID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DimUOMID";

		$fdata["sourceSingle"] = "DimUOMID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DimUOMID";

	
	
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
	$edata["LookupTable"] = "tbl_uomDim";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Code";

	

	
	$edata["LookupOrderBy"] = "Code";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdatatbl_rfq_items["DimUOMID"] = $fdata;
		$tdatatbl_rfq_items[".searchableFields"][] = "DimUOMID";
//	Weight
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Weight";
	$fdata["GoodName"] = "Weight";
	$fdata["ownerTable"] = "tbl_rfq_items";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_items","Weight");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Weight";

		$fdata["sourceSingle"] = "Weight";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Weight";

	
	
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


	$tdatatbl_rfq_items["Weight"] = $fdata;
		$tdatatbl_rfq_items[".searchableFields"][] = "Weight";
//	WeightUOMID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "WeightUOMID";
	$fdata["GoodName"] = "WeightUOMID";
	$fdata["ownerTable"] = "tbl_rfq_items";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_items","WeightUOMID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "WeightUOMID";

		$fdata["sourceSingle"] = "WeightUOMID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WeightUOMID";

	
	
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
	$edata["LookupTable"] = "tbl_uomWeight";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Code";

	

	
	$edata["LookupOrderBy"] = "Code";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdatatbl_rfq_items["WeightUOMID"] = $fdata;
		$tdatatbl_rfq_items[".searchableFields"][] = "WeightUOMID";
//	PackageQuantitiy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PackageQuantitiy";
	$fdata["GoodName"] = "PackageQuantitiy";
	$fdata["ownerTable"] = "tbl_rfq_items";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_items","PackageQuantitiy");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "PackageQuantitiy";

		$fdata["sourceSingle"] = "PackageQuantitiy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PackageQuantitiy";

	
	
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


	$tdatatbl_rfq_items["PackageQuantitiy"] = $fdata;
		$tdatatbl_rfq_items[".searchableFields"][] = "PackageQuantitiy";
//	PackageTypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PackageTypeID";
	$fdata["GoodName"] = "PackageTypeID";
	$fdata["ownerTable"] = "tbl_rfq_items";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_items","PackageTypeID");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "PackageTypeID";

		$fdata["sourceSingle"] = "PackageTypeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PackageTypeID";

	
	
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
	$edata["LookupTable"] = "tbl_uomPackaging";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CodeName";

	

	
	$edata["LookupOrderBy"] = "CodeName";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdatatbl_rfq_items["PackageTypeID"] = $fdata;
		$tdatatbl_rfq_items[".searchableFields"][] = "PackageTypeID";
//	HndlingQuantitiy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "HndlingQuantitiy";
	$fdata["GoodName"] = "HndlingQuantitiy";
	$fdata["ownerTable"] = "tbl_rfq_items";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_items","HndlingQuantitiy");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "HndlingQuantitiy";

		$fdata["sourceSingle"] = "HndlingQuantitiy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HndlingQuantitiy";

	
	
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


	$tdatatbl_rfq_items["HndlingQuantitiy"] = $fdata;
		$tdatatbl_rfq_items[".searchableFields"][] = "HndlingQuantitiy";
//	HandlingTypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "HandlingTypeID";
	$fdata["GoodName"] = "HandlingTypeID";
	$fdata["ownerTable"] = "tbl_rfq_items";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_items","HandlingTypeID");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "HandlingTypeID";

		$fdata["sourceSingle"] = "HandlingTypeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HandlingTypeID";

	
	
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
	$edata["LookupTable"] = "tbl_uomHandling";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CodeName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdatatbl_rfq_items["HandlingTypeID"] = $fdata;
		$tdatatbl_rfq_items[".searchableFields"][] = "HandlingTypeID";
//	CreateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "CreateDate";
	$fdata["GoodName"] = "CreateDate";
	$fdata["ownerTable"] = "tbl_rfq_items";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_items","CreateDate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "CreateDate";

		$fdata["sourceSingle"] = "CreateDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CreateDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatatbl_rfq_items["CreateDate"] = $fdata;
		$tdatatbl_rfq_items[".searchableFields"][] = "CreateDate";
//	HS_Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "HS_Code";
	$fdata["GoodName"] = "HS_Code";
	$fdata["ownerTable"] = "tbl_rfq_items";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_items","HS_Code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "HS_Code";

		$fdata["sourceSingle"] = "HS_Code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HS_Code";

	
	
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


	$tdatatbl_rfq_items["HS_Code"] = $fdata;
		$tdatatbl_rfq_items[".searchableFields"][] = "HS_Code";
//	TarifClass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "TarifClass";
	$fdata["GoodName"] = "TarifClass";
	$fdata["ownerTable"] = "tbl_rfq_items";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_items","TarifClass");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TarifClass";

		$fdata["sourceSingle"] = "TarifClass";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TarifClass";

	
	
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


	$tdatatbl_rfq_items["TarifClass"] = $fdata;
		$tdatatbl_rfq_items[".searchableFields"][] = "TarifClass";
//	NMFC_Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "NMFC_Code";
	$fdata["GoodName"] = "NMFC_Code";
	$fdata["ownerTable"] = "tbl_rfq_items";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_items","NMFC_Code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NMFC_Code";

		$fdata["sourceSingle"] = "NMFC_Code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NMFC_Code";

	
	
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


	$tdatatbl_rfq_items["NMFC_Code"] = $fdata;
		$tdatatbl_rfq_items[".searchableFields"][] = "NMFC_Code";


$tables_data["tbl_rfq_items"]=&$tdatatbl_rfq_items;
$field_labels["tbl_rfq_items"] = &$fieldLabelstbl_rfq_items;
$fieldToolTips["tbl_rfq_items"] = &$fieldToolTipstbl_rfq_items;
$placeHolders["tbl_rfq_items"] = &$placeHolderstbl_rfq_items;
$page_titles["tbl_rfq_items"] = &$pageTitlestbl_rfq_items;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_rfq_items"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_rfq_items"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tbl_rfqs";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_rfqs";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_rfqs";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_rfq_items"][0] = $masterParams;
				$masterTablesData["tbl_rfq_items"][0]["masterKeys"] = array();
	$masterTablesData["tbl_rfq_items"][0]["masterKeys"][]="ID";
				$masterTablesData["tbl_rfq_items"][0]["detailKeys"] = array();
	$masterTablesData["tbl_rfq_items"][0]["detailKeys"][]="RfqID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_rfq_items()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	RfqID,  	Description,  	Dimensions,  	DimUOMID,  	Weight,  	WeightUOMID,  	PackageQuantitiy,  	PackageTypeID,  	HndlingQuantitiy,  	HandlingTypeID,  	CreateDate,  	HS_Code,  	TarifClass,  	NMFC_Code";
$proto0["m_strFrom"] = "FROM tbl_rfq_items";
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
	"m_strTable" => "tbl_rfq_items",
	"m_srcTableName" => "tbl_rfq_items"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_rfq_items";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "RfqID",
	"m_strTable" => "tbl_rfq_items",
	"m_srcTableName" => "tbl_rfq_items"
));

$proto8["m_sql"] = "RfqID";
$proto8["m_srcTableName"] = "tbl_rfq_items";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "tbl_rfq_items",
	"m_srcTableName" => "tbl_rfq_items"
));

$proto10["m_sql"] = "Description";
$proto10["m_srcTableName"] = "tbl_rfq_items";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Dimensions",
	"m_strTable" => "tbl_rfq_items",
	"m_srcTableName" => "tbl_rfq_items"
));

$proto12["m_sql"] = "Dimensions";
$proto12["m_srcTableName"] = "tbl_rfq_items";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DimUOMID",
	"m_strTable" => "tbl_rfq_items",
	"m_srcTableName" => "tbl_rfq_items"
));

$proto14["m_sql"] = "DimUOMID";
$proto14["m_srcTableName"] = "tbl_rfq_items";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Weight",
	"m_strTable" => "tbl_rfq_items",
	"m_srcTableName" => "tbl_rfq_items"
));

$proto16["m_sql"] = "Weight";
$proto16["m_srcTableName"] = "tbl_rfq_items";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "WeightUOMID",
	"m_strTable" => "tbl_rfq_items",
	"m_srcTableName" => "tbl_rfq_items"
));

$proto18["m_sql"] = "WeightUOMID";
$proto18["m_srcTableName"] = "tbl_rfq_items";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PackageQuantitiy",
	"m_strTable" => "tbl_rfq_items",
	"m_srcTableName" => "tbl_rfq_items"
));

$proto20["m_sql"] = "PackageQuantitiy";
$proto20["m_srcTableName"] = "tbl_rfq_items";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PackageTypeID",
	"m_strTable" => "tbl_rfq_items",
	"m_srcTableName" => "tbl_rfq_items"
));

$proto22["m_sql"] = "PackageTypeID";
$proto22["m_srcTableName"] = "tbl_rfq_items";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "HndlingQuantitiy",
	"m_strTable" => "tbl_rfq_items",
	"m_srcTableName" => "tbl_rfq_items"
));

$proto24["m_sql"] = "HndlingQuantitiy";
$proto24["m_srcTableName"] = "tbl_rfq_items";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "HandlingTypeID",
	"m_strTable" => "tbl_rfq_items",
	"m_srcTableName" => "tbl_rfq_items"
));

$proto26["m_sql"] = "HandlingTypeID";
$proto26["m_srcTableName"] = "tbl_rfq_items";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateDate",
	"m_strTable" => "tbl_rfq_items",
	"m_srcTableName" => "tbl_rfq_items"
));

$proto28["m_sql"] = "CreateDate";
$proto28["m_srcTableName"] = "tbl_rfq_items";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "HS_Code",
	"m_strTable" => "tbl_rfq_items",
	"m_srcTableName" => "tbl_rfq_items"
));

$proto30["m_sql"] = "HS_Code";
$proto30["m_srcTableName"] = "tbl_rfq_items";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "TarifClass",
	"m_strTable" => "tbl_rfq_items",
	"m_srcTableName" => "tbl_rfq_items"
));

$proto32["m_sql"] = "TarifClass";
$proto32["m_srcTableName"] = "tbl_rfq_items";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "NMFC_Code",
	"m_strTable" => "tbl_rfq_items",
	"m_srcTableName" => "tbl_rfq_items"
));

$proto34["m_sql"] = "NMFC_Code";
$proto34["m_srcTableName"] = "tbl_rfq_items";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "tbl_rfq_items";
$proto37["m_srcTableName"] = "tbl_rfq_items";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "ID";
$proto37["m_columns"][] = "RfqID";
$proto37["m_columns"][] = "Description";
$proto37["m_columns"][] = "Dimensions";
$proto37["m_columns"][] = "DimUOMID";
$proto37["m_columns"][] = "Weight";
$proto37["m_columns"][] = "WeightUOMID";
$proto37["m_columns"][] = "PackageQuantitiy";
$proto37["m_columns"][] = "PackageTypeID";
$proto37["m_columns"][] = "HndlingQuantitiy";
$proto37["m_columns"][] = "HandlingTypeID";
$proto37["m_columns"][] = "CreateDate";
$proto37["m_columns"][] = "HS_Code";
$proto37["m_columns"][] = "TarifClass";
$proto37["m_columns"][] = "NMFC_Code";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "tbl_rfq_items";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "tbl_rfq_items";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_rfq_items";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_rfq_items = createSqlQuery_tbl_rfq_items();


	
		;

															

$tdatatbl_rfq_items[".sqlquery"] = $queryData_tbl_rfq_items;



$tableEvents["tbl_rfq_items"] = new eventsBase;
$tdatatbl_rfq_items[".hasEvents"] = false;

?>