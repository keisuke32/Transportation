<?php
$tdatatbl_order_items = array();
$tdatatbl_order_items[".searchableFields"] = array();
$tdatatbl_order_items[".ShortName"] = "tbl_order_items";
$tdatatbl_order_items[".OwnerID"] = "";
$tdatatbl_order_items[".OriginalTable"] = "tbl_order_items";


$tdatatbl_order_items[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_order_items[".originalPagesByType"] = $tdatatbl_order_items[".pagesByType"];
$tdatatbl_order_items[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_order_items[".originalPages"] = $tdatatbl_order_items[".pages"];
$tdatatbl_order_items[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_order_items[".originalDefaultPages"] = $tdatatbl_order_items[".defaultPages"];

//	field labels
$fieldLabelstbl_order_items = array();
$fieldToolTipstbl_order_items = array();
$pageTitlestbl_order_items = array();
$placeHolderstbl_order_items = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_order_items["English"] = array();
	$fieldToolTipstbl_order_items["English"] = array();
	$placeHolderstbl_order_items["English"] = array();
	$pageTitlestbl_order_items["English"] = array();
	$fieldLabelstbl_order_items["English"]["ID"] = "ID";
	$fieldToolTipstbl_order_items["English"]["ID"] = "";
	$placeHolderstbl_order_items["English"]["ID"] = "";
	$fieldLabelstbl_order_items["English"]["OrderID"] = "Order";
	$fieldToolTipstbl_order_items["English"]["OrderID"] = "";
	$placeHolderstbl_order_items["English"]["OrderID"] = "";
	$fieldLabelstbl_order_items["English"]["Description"] = "Description";
	$fieldToolTipstbl_order_items["English"]["Description"] = "";
	$placeHolderstbl_order_items["English"]["Description"] = "";
	$fieldLabelstbl_order_items["English"]["Weight"] = "Weight";
	$fieldToolTipstbl_order_items["English"]["Weight"] = "";
	$placeHolderstbl_order_items["English"]["Weight"] = "";
	$fieldLabelstbl_order_items["English"]["WeightUOMID"] = "Weight UOM";
	$fieldToolTipstbl_order_items["English"]["WeightUOMID"] = "";
	$placeHolderstbl_order_items["English"]["WeightUOMID"] = "";
	$fieldLabelstbl_order_items["English"]["PackageQuantitiy"] = "Package Quantitiy";
	$fieldToolTipstbl_order_items["English"]["PackageQuantitiy"] = "";
	$placeHolderstbl_order_items["English"]["PackageQuantitiy"] = "";
	$fieldLabelstbl_order_items["English"]["HndlingQuantitiy"] = "Hndling Quantitiy";
	$fieldToolTipstbl_order_items["English"]["HndlingQuantitiy"] = "";
	$placeHolderstbl_order_items["English"]["HndlingQuantitiy"] = "";
	$fieldLabelstbl_order_items["English"]["CreateDate"] = "Create Date";
	$fieldToolTipstbl_order_items["English"]["CreateDate"] = "";
	$placeHolderstbl_order_items["English"]["CreateDate"] = "";
	$fieldLabelstbl_order_items["English"]["PackageTypeID"] = "Package Type";
	$fieldToolTipstbl_order_items["English"]["PackageTypeID"] = "";
	$placeHolderstbl_order_items["English"]["PackageTypeID"] = "";
	$fieldLabelstbl_order_items["English"]["HandlingTypeID"] = "Handling Type";
	$fieldToolTipstbl_order_items["English"]["HandlingTypeID"] = "";
	$placeHolderstbl_order_items["English"]["HandlingTypeID"] = "";
	$fieldLabelstbl_order_items["English"]["HS_Code"] = "HS Code";
	$fieldToolTipstbl_order_items["English"]["HS_Code"] = "";
	$placeHolderstbl_order_items["English"]["HS_Code"] = "";
	$fieldLabelstbl_order_items["English"]["TarifClass"] = "Tarif Class";
	$fieldToolTipstbl_order_items["English"]["TarifClass"] = "";
	$placeHolderstbl_order_items["English"]["TarifClass"] = "";
	$fieldLabelstbl_order_items["English"]["NMFC_Code"] = "NMFC Code";
	$fieldToolTipstbl_order_items["English"]["NMFC_Code"] = "";
	$placeHolderstbl_order_items["English"]["NMFC_Code"] = "";
	if (count($fieldToolTipstbl_order_items["English"]))
		$tdatatbl_order_items[".isUseToolTips"] = true;
}


	$tdatatbl_order_items[".NCSearch"] = true;



$tdatatbl_order_items[".shortTableName"] = "tbl_order_items";
$tdatatbl_order_items[".nSecOptions"] = 0;

$tdatatbl_order_items[".mainTableOwnerID"] = "";
$tdatatbl_order_items[".entityType"] = 0;
$tdatatbl_order_items[".connId"] = "logistics_at_localhost";


$tdatatbl_order_items[".strOriginalTableName"] = "tbl_order_items";

	



$tdatatbl_order_items[".showAddInPopup"] = false;

$tdatatbl_order_items[".showEditInPopup"] = false;

$tdatatbl_order_items[".showViewInPopup"] = false;

$tdatatbl_order_items[".listAjax"] = false;
//	temporary
//$tdatatbl_order_items[".listAjax"] = false;

	$tdatatbl_order_items[".audit"] = true;

	$tdatatbl_order_items[".locking"] = false;


$pages = $tdatatbl_order_items[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_order_items[".edit"] = true;
	$tdatatbl_order_items[".afterEditAction"] = 1;
	$tdatatbl_order_items[".closePopupAfterEdit"] = 1;
	$tdatatbl_order_items[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_order_items[".add"] = true;
$tdatatbl_order_items[".afterAddAction"] = 1;
$tdatatbl_order_items[".closePopupAfterAdd"] = 1;
$tdatatbl_order_items[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_order_items[".list"] = true;
}



$tdatatbl_order_items[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_order_items[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_order_items[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_order_items[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_order_items[".printFriendly"] = true;
}



$tdatatbl_order_items[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_order_items[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_order_items[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_order_items[".isUseAjaxSuggest"] = true;

$tdatatbl_order_items[".rowHighlite"] = true;



																																										

$tdatatbl_order_items[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_order_items[".buttonsAdded"] = false;

$tdatatbl_order_items[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_order_items[".isUseTimeForSearch"] = false;


$tdatatbl_order_items[".badgeColor"] = "d2af80";


$tdatatbl_order_items[".allSearchFields"] = array();
$tdatatbl_order_items[".filterFields"] = array();
$tdatatbl_order_items[".requiredSearchFields"] = array();

$tdatatbl_order_items[".googleLikeFields"] = array();
$tdatatbl_order_items[".googleLikeFields"][] = "ID";
$tdatatbl_order_items[".googleLikeFields"][] = "OrderID";
$tdatatbl_order_items[".googleLikeFields"][] = "Description";
$tdatatbl_order_items[".googleLikeFields"][] = "Weight";
$tdatatbl_order_items[".googleLikeFields"][] = "WeightUOMID";
$tdatatbl_order_items[".googleLikeFields"][] = "PackageQuantitiy";
$tdatatbl_order_items[".googleLikeFields"][] = "PackageTypeID";
$tdatatbl_order_items[".googleLikeFields"][] = "HndlingQuantitiy";
$tdatatbl_order_items[".googleLikeFields"][] = "HandlingTypeID";
$tdatatbl_order_items[".googleLikeFields"][] = "CreateDate";
$tdatatbl_order_items[".googleLikeFields"][] = "HS_Code";
$tdatatbl_order_items[".googleLikeFields"][] = "TarifClass";
$tdatatbl_order_items[".googleLikeFields"][] = "NMFC_Code";



$tdatatbl_order_items[".tableType"] = "list";

$tdatatbl_order_items[".printerPageOrientation"] = 0;
$tdatatbl_order_items[".nPrinterPageScale"] = 100;

$tdatatbl_order_items[".nPrinterSplitRecords"] = 40;

$tdatatbl_order_items[".geocodingEnabled"] = false;










$tdatatbl_order_items[".pageSize"] = 20;

$tdatatbl_order_items[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_order_items[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_order_items[".orderindexes"] = array();


$tdatatbl_order_items[".sqlHead"] = "SELECT ID,  	OrderID,  	Description,  	Weight,  	WeightUOMID,  	PackageQuantitiy,  	PackageTypeID,  	HndlingQuantitiy,  	HandlingTypeID,  	CreateDate,  	HS_Code,  	TarifClass,  	NMFC_Code";
$tdatatbl_order_items[".sqlFrom"] = "FROM tbl_order_items";
$tdatatbl_order_items[".sqlWhereExpr"] = "";
$tdatatbl_order_items[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_order_items[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_order_items[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_order_items[".highlightSearchResults"] = true;

$tableKeystbl_order_items = array();
$tableKeystbl_order_items[] = "ID";
$tdatatbl_order_items[".Keys"] = $tableKeystbl_order_items;


$tdatatbl_order_items[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_order_items";
	$fdata["Label"] = GetFieldLabel("tbl_order_items","ID");
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


	$tdatatbl_order_items["ID"] = $fdata;
		$tdatatbl_order_items[".searchableFields"][] = "ID";
//	OrderID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "OrderID";
	$fdata["GoodName"] = "OrderID";
	$fdata["ownerTable"] = "tbl_order_items";
	$fdata["Label"] = GetFieldLabel("tbl_order_items","OrderID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "OrderID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OrderID";

	
	
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


	$tdatatbl_order_items["OrderID"] = $fdata;
		$tdatatbl_order_items[".searchableFields"][] = "OrderID";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "tbl_order_items";
	$fdata["Label"] = GetFieldLabel("tbl_order_items","Description");
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


	$tdatatbl_order_items["Description"] = $fdata;
		$tdatatbl_order_items[".searchableFields"][] = "Description";
//	Weight
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Weight";
	$fdata["GoodName"] = "Weight";
	$fdata["ownerTable"] = "tbl_order_items";
	$fdata["Label"] = GetFieldLabel("tbl_order_items","Weight");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Weight";

	
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


	$tdatatbl_order_items["Weight"] = $fdata;
		$tdatatbl_order_items[".searchableFields"][] = "Weight";
//	WeightUOMID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "WeightUOMID";
	$fdata["GoodName"] = "WeightUOMID";
	$fdata["ownerTable"] = "tbl_order_items";
	$fdata["Label"] = GetFieldLabel("tbl_order_items","WeightUOMID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "WeightUOMID";

	
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


	$tdatatbl_order_items["WeightUOMID"] = $fdata;
		$tdatatbl_order_items[".searchableFields"][] = "WeightUOMID";
//	PackageQuantitiy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PackageQuantitiy";
	$fdata["GoodName"] = "PackageQuantitiy";
	$fdata["ownerTable"] = "tbl_order_items";
	$fdata["Label"] = GetFieldLabel("tbl_order_items","PackageQuantitiy");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "PackageQuantitiy";

	
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


	$tdatatbl_order_items["PackageQuantitiy"] = $fdata;
		$tdatatbl_order_items[".searchableFields"][] = "PackageQuantitiy";
//	PackageTypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PackageTypeID";
	$fdata["GoodName"] = "PackageTypeID";
	$fdata["ownerTable"] = "tbl_order_items";
	$fdata["Label"] = GetFieldLabel("tbl_order_items","PackageTypeID");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "PackageTypeID";

	
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


	$tdatatbl_order_items["PackageTypeID"] = $fdata;
		$tdatatbl_order_items[".searchableFields"][] = "PackageTypeID";
//	HndlingQuantitiy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "HndlingQuantitiy";
	$fdata["GoodName"] = "HndlingQuantitiy";
	$fdata["ownerTable"] = "tbl_order_items";
	$fdata["Label"] = GetFieldLabel("tbl_order_items","HndlingQuantitiy");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "HndlingQuantitiy";

	
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


	$tdatatbl_order_items["HndlingQuantitiy"] = $fdata;
		$tdatatbl_order_items[".searchableFields"][] = "HndlingQuantitiy";
//	HandlingTypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "HandlingTypeID";
	$fdata["GoodName"] = "HandlingTypeID";
	$fdata["ownerTable"] = "tbl_order_items";
	$fdata["Label"] = GetFieldLabel("tbl_order_items","HandlingTypeID");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "HandlingTypeID";

	
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


	$tdatatbl_order_items["HandlingTypeID"] = $fdata;
		$tdatatbl_order_items[".searchableFields"][] = "HandlingTypeID";
//	CreateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CreateDate";
	$fdata["GoodName"] = "CreateDate";
	$fdata["ownerTable"] = "tbl_order_items";
	$fdata["Label"] = GetFieldLabel("tbl_order_items","CreateDate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "CreateDate";

	
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


	$tdatatbl_order_items["CreateDate"] = $fdata;
		$tdatatbl_order_items[".searchableFields"][] = "CreateDate";
//	HS_Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "HS_Code";
	$fdata["GoodName"] = "HS_Code";
	$fdata["ownerTable"] = "tbl_order_items";
	$fdata["Label"] = GetFieldLabel("tbl_order_items","HS_Code");
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


	$tdatatbl_order_items["HS_Code"] = $fdata;
		$tdatatbl_order_items[".searchableFields"][] = "HS_Code";
//	TarifClass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "TarifClass";
	$fdata["GoodName"] = "TarifClass";
	$fdata["ownerTable"] = "tbl_order_items";
	$fdata["Label"] = GetFieldLabel("tbl_order_items","TarifClass");
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


	$tdatatbl_order_items["TarifClass"] = $fdata;
		$tdatatbl_order_items[".searchableFields"][] = "TarifClass";
//	NMFC_Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "NMFC_Code";
	$fdata["GoodName"] = "NMFC_Code";
	$fdata["ownerTable"] = "tbl_order_items";
	$fdata["Label"] = GetFieldLabel("tbl_order_items","NMFC_Code");
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


	$tdatatbl_order_items["NMFC_Code"] = $fdata;
		$tdatatbl_order_items[".searchableFields"][] = "NMFC_Code";


$tables_data["tbl_order_items"]=&$tdatatbl_order_items;
$field_labels["tbl_order_items"] = &$fieldLabelstbl_order_items;
$fieldToolTips["tbl_order_items"] = &$fieldToolTipstbl_order_items;
$placeHolders["tbl_order_items"] = &$placeHolderstbl_order_items;
$page_titles["tbl_order_items"] = &$pageTitlestbl_order_items;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_order_items"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_order_items"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tbl_orders";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_orders";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_orders";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_order_items"][0] = $masterParams;
				$masterTablesData["tbl_order_items"][0]["masterKeys"] = array();
	$masterTablesData["tbl_order_items"][0]["masterKeys"][]="ID";
				$masterTablesData["tbl_order_items"][0]["detailKeys"] = array();
	$masterTablesData["tbl_order_items"][0]["detailKeys"][]="OrderID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_order_items()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	OrderID,  	Description,  	Weight,  	WeightUOMID,  	PackageQuantitiy,  	PackageTypeID,  	HndlingQuantitiy,  	HandlingTypeID,  	CreateDate,  	HS_Code,  	TarifClass,  	NMFC_Code";
$proto0["m_strFrom"] = "FROM tbl_order_items";
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
	"m_strTable" => "tbl_order_items",
	"m_srcTableName" => "tbl_order_items"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_order_items";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "OrderID",
	"m_strTable" => "tbl_order_items",
	"m_srcTableName" => "tbl_order_items"
));

$proto8["m_sql"] = "OrderID";
$proto8["m_srcTableName"] = "tbl_order_items";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "tbl_order_items",
	"m_srcTableName" => "tbl_order_items"
));

$proto10["m_sql"] = "Description";
$proto10["m_srcTableName"] = "tbl_order_items";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Weight",
	"m_strTable" => "tbl_order_items",
	"m_srcTableName" => "tbl_order_items"
));

$proto12["m_sql"] = "Weight";
$proto12["m_srcTableName"] = "tbl_order_items";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "WeightUOMID",
	"m_strTable" => "tbl_order_items",
	"m_srcTableName" => "tbl_order_items"
));

$proto14["m_sql"] = "WeightUOMID";
$proto14["m_srcTableName"] = "tbl_order_items";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PackageQuantitiy",
	"m_strTable" => "tbl_order_items",
	"m_srcTableName" => "tbl_order_items"
));

$proto16["m_sql"] = "PackageQuantitiy";
$proto16["m_srcTableName"] = "tbl_order_items";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PackageTypeID",
	"m_strTable" => "tbl_order_items",
	"m_srcTableName" => "tbl_order_items"
));

$proto18["m_sql"] = "PackageTypeID";
$proto18["m_srcTableName"] = "tbl_order_items";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "HndlingQuantitiy",
	"m_strTable" => "tbl_order_items",
	"m_srcTableName" => "tbl_order_items"
));

$proto20["m_sql"] = "HndlingQuantitiy";
$proto20["m_srcTableName"] = "tbl_order_items";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "HandlingTypeID",
	"m_strTable" => "tbl_order_items",
	"m_srcTableName" => "tbl_order_items"
));

$proto22["m_sql"] = "HandlingTypeID";
$proto22["m_srcTableName"] = "tbl_order_items";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateDate",
	"m_strTable" => "tbl_order_items",
	"m_srcTableName" => "tbl_order_items"
));

$proto24["m_sql"] = "CreateDate";
$proto24["m_srcTableName"] = "tbl_order_items";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "HS_Code",
	"m_strTable" => "tbl_order_items",
	"m_srcTableName" => "tbl_order_items"
));

$proto26["m_sql"] = "HS_Code";
$proto26["m_srcTableName"] = "tbl_order_items";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "TarifClass",
	"m_strTable" => "tbl_order_items",
	"m_srcTableName" => "tbl_order_items"
));

$proto28["m_sql"] = "TarifClass";
$proto28["m_srcTableName"] = "tbl_order_items";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "NMFC_Code",
	"m_strTable" => "tbl_order_items",
	"m_srcTableName" => "tbl_order_items"
));

$proto30["m_sql"] = "NMFC_Code";
$proto30["m_srcTableName"] = "tbl_order_items";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "tbl_order_items";
$proto33["m_srcTableName"] = "tbl_order_items";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "ID";
$proto33["m_columns"][] = "OrderID";
$proto33["m_columns"][] = "Description";
$proto33["m_columns"][] = "Weight";
$proto33["m_columns"][] = "WeightUOMID";
$proto33["m_columns"][] = "PackageQuantitiy";
$proto33["m_columns"][] = "PackageTypeID";
$proto33["m_columns"][] = "HndlingQuantitiy";
$proto33["m_columns"][] = "HandlingTypeID";
$proto33["m_columns"][] = "CreateDate";
$proto33["m_columns"][] = "HS_Code";
$proto33["m_columns"][] = "TarifClass";
$proto33["m_columns"][] = "NMFC_Code";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "tbl_order_items";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "tbl_order_items";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_order_items";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_order_items = createSqlQuery_tbl_order_items();


	
		;

													

$tdatatbl_order_items[".sqlquery"] = $queryData_tbl_order_items;



$tableEvents["tbl_order_items"] = new eventsBase;
$tdatatbl_order_items[".hasEvents"] = false;

?>