<?php
$tdatatbl_rfq_assesorial = array();
$tdatatbl_rfq_assesorial[".searchableFields"] = array();
$tdatatbl_rfq_assesorial[".ShortName"] = "tbl_rfq_assesorial";
$tdatatbl_rfq_assesorial[".OwnerID"] = "";
$tdatatbl_rfq_assesorial[".OriginalTable"] = "tbl_rfq_assesorial";


$tdatatbl_rfq_assesorial[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_rfq_assesorial[".originalPagesByType"] = $tdatatbl_rfq_assesorial[".pagesByType"];
$tdatatbl_rfq_assesorial[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_rfq_assesorial[".originalPages"] = $tdatatbl_rfq_assesorial[".pages"];
$tdatatbl_rfq_assesorial[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_rfq_assesorial[".originalDefaultPages"] = $tdatatbl_rfq_assesorial[".defaultPages"];

//	field labels
$fieldLabelstbl_rfq_assesorial = array();
$fieldToolTipstbl_rfq_assesorial = array();
$pageTitlestbl_rfq_assesorial = array();
$placeHolderstbl_rfq_assesorial = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_rfq_assesorial["English"] = array();
	$fieldToolTipstbl_rfq_assesorial["English"] = array();
	$placeHolderstbl_rfq_assesorial["English"] = array();
	$pageTitlestbl_rfq_assesorial["English"] = array();
	$fieldLabelstbl_rfq_assesorial["English"]["ID"] = "ID";
	$fieldToolTipstbl_rfq_assesorial["English"]["ID"] = "";
	$placeHolderstbl_rfq_assesorial["English"]["ID"] = "";
	$fieldLabelstbl_rfq_assesorial["English"]["Description"] = "Description";
	$fieldToolTipstbl_rfq_assesorial["English"]["Description"] = "";
	$placeHolderstbl_rfq_assesorial["English"]["Description"] = "";
	$fieldLabelstbl_rfq_assesorial["English"]["Amount"] = "Amount";
	$fieldToolTipstbl_rfq_assesorial["English"]["Amount"] = "";
	$placeHolderstbl_rfq_assesorial["English"]["Amount"] = "";
	$fieldLabelstbl_rfq_assesorial["English"]["CarrierCompanyID"] = "Carrier Company";
	$fieldToolTipstbl_rfq_assesorial["English"]["CarrierCompanyID"] = "";
	$placeHolderstbl_rfq_assesorial["English"]["CarrierCompanyID"] = "";
	$fieldLabelstbl_rfq_assesorial["English"]["QuotationID"] = "Quotation";
	$fieldToolTipstbl_rfq_assesorial["English"]["QuotationID"] = "";
	$placeHolderstbl_rfq_assesorial["English"]["QuotationID"] = "";
	$fieldLabelstbl_rfq_assesorial["English"]["Type"] = "Type";
	$fieldToolTipstbl_rfq_assesorial["English"]["Type"] = "";
	$placeHolderstbl_rfq_assesorial["English"]["Type"] = "";
	if (count($fieldToolTipstbl_rfq_assesorial["English"]))
		$tdatatbl_rfq_assesorial[".isUseToolTips"] = true;
}


	$tdatatbl_rfq_assesorial[".NCSearch"] = true;



$tdatatbl_rfq_assesorial[".shortTableName"] = "tbl_rfq_assesorial";
$tdatatbl_rfq_assesorial[".nSecOptions"] = 0;

$tdatatbl_rfq_assesorial[".mainTableOwnerID"] = "";
$tdatatbl_rfq_assesorial[".entityType"] = 0;
$tdatatbl_rfq_assesorial[".connId"] = "logistics_at_localhost";


$tdatatbl_rfq_assesorial[".strOriginalTableName"] = "tbl_rfq_assesorial";

	



$tdatatbl_rfq_assesorial[".showAddInPopup"] = false;

$tdatatbl_rfq_assesorial[".showEditInPopup"] = false;

$tdatatbl_rfq_assesorial[".showViewInPopup"] = false;

$tdatatbl_rfq_assesorial[".listAjax"] = false;
//	temporary
//$tdatatbl_rfq_assesorial[".listAjax"] = false;

	$tdatatbl_rfq_assesorial[".audit"] = false;

	$tdatatbl_rfq_assesorial[".locking"] = false;


$pages = $tdatatbl_rfq_assesorial[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_rfq_assesorial[".edit"] = true;
	$tdatatbl_rfq_assesorial[".afterEditAction"] = 1;
	$tdatatbl_rfq_assesorial[".closePopupAfterEdit"] = 1;
	$tdatatbl_rfq_assesorial[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_rfq_assesorial[".add"] = true;
$tdatatbl_rfq_assesorial[".afterAddAction"] = 1;
$tdatatbl_rfq_assesorial[".closePopupAfterAdd"] = 1;
$tdatatbl_rfq_assesorial[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_rfq_assesorial[".list"] = true;
}



$tdatatbl_rfq_assesorial[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_rfq_assesorial[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_rfq_assesorial[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_rfq_assesorial[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_rfq_assesorial[".printFriendly"] = true;
}



$tdatatbl_rfq_assesorial[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_rfq_assesorial[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_rfq_assesorial[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_rfq_assesorial[".isUseAjaxSuggest"] = true;

$tdatatbl_rfq_assesorial[".rowHighlite"] = true;



																																
											

$tdatatbl_rfq_assesorial[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_rfq_assesorial[".buttonsAdded"] = true;

$tdatatbl_rfq_assesorial[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatbl_rfq_assesorial[".isUseTimeForSearch"] = false;


$tdatatbl_rfq_assesorial[".badgeColor"] = "d2691e";


$tdatatbl_rfq_assesorial[".allSearchFields"] = array();
$tdatatbl_rfq_assesorial[".filterFields"] = array();
$tdatatbl_rfq_assesorial[".requiredSearchFields"] = array();

$tdatatbl_rfq_assesorial[".googleLikeFields"] = array();
$tdatatbl_rfq_assesorial[".googleLikeFields"][] = "ID";
$tdatatbl_rfq_assesorial[".googleLikeFields"][] = "QuotationID";
$tdatatbl_rfq_assesorial[".googleLikeFields"][] = "CarrierCompanyID";
$tdatatbl_rfq_assesorial[".googleLikeFields"][] = "Type";
$tdatatbl_rfq_assesorial[".googleLikeFields"][] = "Description";
$tdatatbl_rfq_assesorial[".googleLikeFields"][] = "Amount";



$tdatatbl_rfq_assesorial[".tableType"] = "list";

$tdatatbl_rfq_assesorial[".printerPageOrientation"] = 0;
$tdatatbl_rfq_assesorial[".nPrinterPageScale"] = 100;

$tdatatbl_rfq_assesorial[".nPrinterSplitRecords"] = 40;

$tdatatbl_rfq_assesorial[".geocodingEnabled"] = false;










$tdatatbl_rfq_assesorial[".pageSize"] = 20;

$tdatatbl_rfq_assesorial[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_rfq_assesorial[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_rfq_assesorial[".orderindexes"] = array();


$tdatatbl_rfq_assesorial[".sqlHead"] = "SELECT ID,  	QuotationID,  	CarrierCompanyID,  	`Type`,  	Description,  	Amount";
$tdatatbl_rfq_assesorial[".sqlFrom"] = "FROM tbl_rfq_assesorial";
$tdatatbl_rfq_assesorial[".sqlWhereExpr"] = "";
$tdatatbl_rfq_assesorial[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_rfq_assesorial[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_rfq_assesorial[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_rfq_assesorial[".highlightSearchResults"] = true;

$tableKeystbl_rfq_assesorial = array();
$tableKeystbl_rfq_assesorial[] = "ID";
$tdatatbl_rfq_assesorial[".Keys"] = $tableKeystbl_rfq_assesorial;


$tdatatbl_rfq_assesorial[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_rfq_assesorial";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_assesorial","ID");
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


	$tdatatbl_rfq_assesorial["ID"] = $fdata;
		$tdatatbl_rfq_assesorial[".searchableFields"][] = "ID";
//	QuotationID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "QuotationID";
	$fdata["GoodName"] = "QuotationID";
	$fdata["ownerTable"] = "tbl_rfq_assesorial";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_assesorial","QuotationID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "QuotationID";

		$fdata["sourceSingle"] = "QuotationID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "QuotationID";

	
	
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


	$tdatatbl_rfq_assesorial["QuotationID"] = $fdata;
		$tdatatbl_rfq_assesorial[".searchableFields"][] = "QuotationID";
//	CarrierCompanyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CarrierCompanyID";
	$fdata["GoodName"] = "CarrierCompanyID";
	$fdata["ownerTable"] = "tbl_rfq_assesorial";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_assesorial","CarrierCompanyID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CarrierCompanyID";

		$fdata["sourceSingle"] = "CarrierCompanyID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierCompanyID";

	
	
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

				$edata["LookupWhere"] = "Type = 'Vendor'";


	
	$edata["LookupOrderBy"] = "Name";

	
	
	
	

	
	
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


	$tdatatbl_rfq_assesorial["CarrierCompanyID"] = $fdata;
		$tdatatbl_rfq_assesorial[".searchableFields"][] = "CarrierCompanyID";
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "tbl_rfq_assesorial";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_assesorial","Type");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "Type";

		$fdata["sourceSingle"] = "Type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Type`";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Base";
	$edata["LookupValues"][] = "Assessorial";
	$edata["LookupValues"][] = "Tax";
	$edata["LookupValues"][] = "";

	
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


	$tdatatbl_rfq_assesorial["Type"] = $fdata;
		$tdatatbl_rfq_assesorial[".searchableFields"][] = "Type";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "tbl_rfq_assesorial";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_assesorial","Description");
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatbl_rfq_assesorial["Description"] = $fdata;
		$tdatatbl_rfq_assesorial[".searchableFields"][] = "Description";
//	Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Amount";
	$fdata["GoodName"] = "Amount";
	$fdata["ownerTable"] = "tbl_rfq_assesorial";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_assesorial","Amount");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Amount";

		$fdata["sourceSingle"] = "Amount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Amount";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "Amount_event", "type" => "click" );
	$edata["fieldEvents"] = $eventsData;




	
	
	
	
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


	$tdatatbl_rfq_assesorial["Amount"] = $fdata;
		$tdatatbl_rfq_assesorial[".searchableFields"][] = "Amount";


$tables_data["tbl_rfq_assesorial"]=&$tdatatbl_rfq_assesorial;
$field_labels["tbl_rfq_assesorial"] = &$fieldLabelstbl_rfq_assesorial;
$fieldToolTips["tbl_rfq_assesorial"] = &$fieldToolTipstbl_rfq_assesorial;
$placeHolders["tbl_rfq_assesorial"] = &$placeHolderstbl_rfq_assesorial;
$page_titles["tbl_rfq_assesorial"] = &$pageTitlestbl_rfq_assesorial;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_rfq_assesorial"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_rfq_assesorial"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tbl_rfq_carrier_quote";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_rfq_carrier_quote";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_rfq_carrier_quote";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_rfq_assesorial"][0] = $masterParams;
				$masterTablesData["tbl_rfq_assesorial"][0]["masterKeys"] = array();
	$masterTablesData["tbl_rfq_assesorial"][0]["masterKeys"][]="ID";
				$masterTablesData["tbl_rfq_assesorial"][0]["masterKeys"][]="CarrierCompanyID";
				$masterTablesData["tbl_rfq_assesorial"][0]["detailKeys"] = array();
	$masterTablesData["tbl_rfq_assesorial"][0]["detailKeys"][]="QuotationID";
				$masterTablesData["tbl_rfq_assesorial"][0]["detailKeys"][]="CarrierCompanyID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_rfq_assesorial()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	QuotationID,  	CarrierCompanyID,  	`Type`,  	Description,  	Amount";
$proto0["m_strFrom"] = "FROM tbl_rfq_assesorial";
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
	"m_strTable" => "tbl_rfq_assesorial",
	"m_srcTableName" => "tbl_rfq_assesorial"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_rfq_assesorial";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "QuotationID",
	"m_strTable" => "tbl_rfq_assesorial",
	"m_srcTableName" => "tbl_rfq_assesorial"
));

$proto8["m_sql"] = "QuotationID";
$proto8["m_srcTableName"] = "tbl_rfq_assesorial";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierCompanyID",
	"m_strTable" => "tbl_rfq_assesorial",
	"m_srcTableName" => "tbl_rfq_assesorial"
));

$proto10["m_sql"] = "CarrierCompanyID";
$proto10["m_srcTableName"] = "tbl_rfq_assesorial";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "tbl_rfq_assesorial",
	"m_srcTableName" => "tbl_rfq_assesorial"
));

$proto12["m_sql"] = "`Type`";
$proto12["m_srcTableName"] = "tbl_rfq_assesorial";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "tbl_rfq_assesorial",
	"m_srcTableName" => "tbl_rfq_assesorial"
));

$proto14["m_sql"] = "Description";
$proto14["m_srcTableName"] = "tbl_rfq_assesorial";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount",
	"m_strTable" => "tbl_rfq_assesorial",
	"m_srcTableName" => "tbl_rfq_assesorial"
));

$proto16["m_sql"] = "Amount";
$proto16["m_srcTableName"] = "tbl_rfq_assesorial";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "tbl_rfq_assesorial";
$proto19["m_srcTableName"] = "tbl_rfq_assesorial";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ID";
$proto19["m_columns"][] = "QuotationID";
$proto19["m_columns"][] = "CarrierCompanyID";
$proto19["m_columns"][] = "Type";
$proto19["m_columns"][] = "Description";
$proto19["m_columns"][] = "Amount";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "tbl_rfq_assesorial";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "tbl_rfq_assesorial";
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
$proto0["m_srcTableName"]="tbl_rfq_assesorial";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_rfq_assesorial = createSqlQuery_tbl_rfq_assesorial();


	
		;

						

$tdatatbl_rfq_assesorial[".sqlquery"] = $queryData_tbl_rfq_assesorial;



include_once(getabspath("include/tbl_rfq_assesorial_events.php"));
$tableEvents["tbl_rfq_assesorial"] = new eventclass_tbl_rfq_assesorial;
$tdatatbl_rfq_assesorial[".hasEvents"] = true;

?>