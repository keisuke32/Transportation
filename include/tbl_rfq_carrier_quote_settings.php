<?php
$tdatatbl_rfq_carrier_quote = array();
$tdatatbl_rfq_carrier_quote[".searchableFields"] = array();
$tdatatbl_rfq_carrier_quote[".ShortName"] = "tbl_rfq_carrier_quote";
$tdatatbl_rfq_carrier_quote[".OwnerID"] = "";
$tdatatbl_rfq_carrier_quote[".OriginalTable"] = "tbl_rfq_carrier_quote";


$tdatatbl_rfq_carrier_quote[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatbl_rfq_carrier_quote[".originalPagesByType"] = $tdatatbl_rfq_carrier_quote[".pagesByType"];
$tdatatbl_rfq_carrier_quote[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatbl_rfq_carrier_quote[".originalPages"] = $tdatatbl_rfq_carrier_quote[".pages"];
$tdatatbl_rfq_carrier_quote[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatbl_rfq_carrier_quote[".originalDefaultPages"] = $tdatatbl_rfq_carrier_quote[".defaultPages"];

//	field labels
$fieldLabelstbl_rfq_carrier_quote = array();
$fieldToolTipstbl_rfq_carrier_quote = array();
$pageTitlestbl_rfq_carrier_quote = array();
$placeHolderstbl_rfq_carrier_quote = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_rfq_carrier_quote["English"] = array();
	$fieldToolTipstbl_rfq_carrier_quote["English"] = array();
	$placeHolderstbl_rfq_carrier_quote["English"] = array();
	$pageTitlestbl_rfq_carrier_quote["English"] = array();
	$fieldLabelstbl_rfq_carrier_quote["English"]["ID"] = "ID";
	$fieldToolTipstbl_rfq_carrier_quote["English"]["ID"] = "";
	$placeHolderstbl_rfq_carrier_quote["English"]["ID"] = "";
	$fieldLabelstbl_rfq_carrier_quote["English"]["RFQID"] = "RFQ";
	$fieldToolTipstbl_rfq_carrier_quote["English"]["RFQID"] = "";
	$placeHolderstbl_rfq_carrier_quote["English"]["RFQID"] = "";
	$fieldLabelstbl_rfq_carrier_quote["English"]["CarrierCompanyID"] = "Carrier Company";
	$fieldToolTipstbl_rfq_carrier_quote["English"]["CarrierCompanyID"] = "";
	$placeHolderstbl_rfq_carrier_quote["English"]["CarrierCompanyID"] = "";
	$fieldLabelstbl_rfq_carrier_quote["English"]["CarrierQuoteRefNumber"] = "Carrier Quote Ref Number";
	$fieldToolTipstbl_rfq_carrier_quote["English"]["CarrierQuoteRefNumber"] = "";
	$placeHolderstbl_rfq_carrier_quote["English"]["CarrierQuoteRefNumber"] = "";
	$fieldLabelstbl_rfq_carrier_quote["English"]["Terms"] = "Terms";
	$fieldToolTipstbl_rfq_carrier_quote["English"]["Terms"] = "";
	$placeHolderstbl_rfq_carrier_quote["English"]["Terms"] = "";
	$fieldLabelstbl_rfq_carrier_quote["English"]["TotalCost"] = "Total Cost";
	$fieldToolTipstbl_rfq_carrier_quote["English"]["TotalCost"] = "";
	$placeHolderstbl_rfq_carrier_quote["English"]["TotalCost"] = "";
	$fieldLabelstbl_rfq_carrier_quote["English"]["Accepted"] = "Accepted";
	$fieldToolTipstbl_rfq_carrier_quote["English"]["Accepted"] = "";
	$placeHolderstbl_rfq_carrier_quote["English"]["Accepted"] = "";
	$fieldLabelstbl_rfq_carrier_quote["English"]["CarrierContactID"] = "Carrier Contact ID";
	$fieldToolTipstbl_rfq_carrier_quote["English"]["CarrierContactID"] = "";
	$placeHolderstbl_rfq_carrier_quote["English"]["CarrierContactID"] = "";
	$fieldLabelstbl_rfq_carrier_quote["English"]["ContactDetails"] = "Contact Details";
	$fieldToolTipstbl_rfq_carrier_quote["English"]["ContactDetails"] = "";
	$placeHolderstbl_rfq_carrier_quote["English"]["ContactDetails"] = "";
	if (count($fieldToolTipstbl_rfq_carrier_quote["English"]))
		$tdatatbl_rfq_carrier_quote[".isUseToolTips"] = true;
}


	$tdatatbl_rfq_carrier_quote[".NCSearch"] = true;



$tdatatbl_rfq_carrier_quote[".shortTableName"] = "tbl_rfq_carrier_quote";
$tdatatbl_rfq_carrier_quote[".nSecOptions"] = 0;

$tdatatbl_rfq_carrier_quote[".mainTableOwnerID"] = "";
$tdatatbl_rfq_carrier_quote[".entityType"] = 0;
$tdatatbl_rfq_carrier_quote[".connId"] = "logistics_at_localhost";


$tdatatbl_rfq_carrier_quote[".strOriginalTableName"] = "tbl_rfq_carrier_quote";

	



$tdatatbl_rfq_carrier_quote[".showAddInPopup"] = false;

$tdatatbl_rfq_carrier_quote[".showEditInPopup"] = false;

$tdatatbl_rfq_carrier_quote[".showViewInPopup"] = false;

$tdatatbl_rfq_carrier_quote[".listAjax"] = false;
//	temporary
//$tdatatbl_rfq_carrier_quote[".listAjax"] = false;

	$tdatatbl_rfq_carrier_quote[".audit"] = false;

	$tdatatbl_rfq_carrier_quote[".locking"] = false;


$pages = $tdatatbl_rfq_carrier_quote[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_rfq_carrier_quote[".edit"] = true;
	$tdatatbl_rfq_carrier_quote[".afterEditAction"] = 0;
	$tdatatbl_rfq_carrier_quote[".closePopupAfterEdit"] = 1;
	$tdatatbl_rfq_carrier_quote[".afterEditActionDetTable"] = "tbl_rfq_assesorial";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_rfq_carrier_quote[".add"] = true;
$tdatatbl_rfq_carrier_quote[".afterAddAction"] = 1;
$tdatatbl_rfq_carrier_quote[".closePopupAfterAdd"] = 1;
$tdatatbl_rfq_carrier_quote[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_rfq_carrier_quote[".list"] = true;
}



$tdatatbl_rfq_carrier_quote[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_rfq_carrier_quote[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_rfq_carrier_quote[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_rfq_carrier_quote[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_rfq_carrier_quote[".printFriendly"] = true;
}



$tdatatbl_rfq_carrier_quote[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_rfq_carrier_quote[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_rfq_carrier_quote[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_rfq_carrier_quote[".isUseAjaxSuggest"] = true;

$tdatatbl_rfq_carrier_quote[".rowHighlite"] = true;



																																										

$tdatatbl_rfq_carrier_quote[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_rfq_carrier_quote[".buttonsAdded"] = false;

$tdatatbl_rfq_carrier_quote[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatbl_rfq_carrier_quote[".isUseTimeForSearch"] = false;


$tdatatbl_rfq_carrier_quote[".badgeColor"] = "7b68ee";


$tdatatbl_rfq_carrier_quote[".allSearchFields"] = array();
$tdatatbl_rfq_carrier_quote[".filterFields"] = array();
$tdatatbl_rfq_carrier_quote[".requiredSearchFields"] = array();

$tdatatbl_rfq_carrier_quote[".googleLikeFields"] = array();
$tdatatbl_rfq_carrier_quote[".googleLikeFields"][] = "ID";
$tdatatbl_rfq_carrier_quote[".googleLikeFields"][] = "RFQID";
$tdatatbl_rfq_carrier_quote[".googleLikeFields"][] = "CarrierCompanyID";
$tdatatbl_rfq_carrier_quote[".googleLikeFields"][] = "CarrierQuoteRefNumber";
$tdatatbl_rfq_carrier_quote[".googleLikeFields"][] = "Terms";
$tdatatbl_rfq_carrier_quote[".googleLikeFields"][] = "TotalCost";
$tdatatbl_rfq_carrier_quote[".googleLikeFields"][] = "Accepted";
$tdatatbl_rfq_carrier_quote[".googleLikeFields"][] = "CarrierContactID";
$tdatatbl_rfq_carrier_quote[".googleLikeFields"][] = "ContactDetails";



$tdatatbl_rfq_carrier_quote[".tableType"] = "list";

$tdatatbl_rfq_carrier_quote[".printerPageOrientation"] = 0;
$tdatatbl_rfq_carrier_quote[".nPrinterPageScale"] = 100;

$tdatatbl_rfq_carrier_quote[".nPrinterSplitRecords"] = 40;

$tdatatbl_rfq_carrier_quote[".geocodingEnabled"] = false;










$tdatatbl_rfq_carrier_quote[".pageSize"] = 20;

$tdatatbl_rfq_carrier_quote[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_rfq_carrier_quote[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_rfq_carrier_quote[".orderindexes"] = array();


$tdatatbl_rfq_carrier_quote[".sqlHead"] = "SELECT ID,  	RFQID,  	CarrierCompanyID,  	CarrierQuoteRefNumber,  	Terms,  	TotalCost,  	Accepted,  	CarrierContactID,  	ContactDetails";
$tdatatbl_rfq_carrier_quote[".sqlFrom"] = "FROM tbl_rfq_carrier_quote";
$tdatatbl_rfq_carrier_quote[".sqlWhereExpr"] = "";
$tdatatbl_rfq_carrier_quote[".sqlTail"] = "";

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
$tdatatbl_rfq_carrier_quote[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_rfq_carrier_quote[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_rfq_carrier_quote[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_rfq_carrier_quote[".highlightSearchResults"] = true;

$tableKeystbl_rfq_carrier_quote = array();
$tableKeystbl_rfq_carrier_quote[] = "ID";
$tdatatbl_rfq_carrier_quote[".Keys"] = $tableKeystbl_rfq_carrier_quote;


$tdatatbl_rfq_carrier_quote[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_rfq_carrier_quote";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_carrier_quote","ID");
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


	$tdatatbl_rfq_carrier_quote["ID"] = $fdata;
		$tdatatbl_rfq_carrier_quote[".searchableFields"][] = "ID";
//	RFQID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RFQID";
	$fdata["GoodName"] = "RFQID";
	$fdata["ownerTable"] = "tbl_rfq_carrier_quote";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_carrier_quote","RFQID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "RFQID";

		$fdata["sourceSingle"] = "RFQID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RFQID";

	
	
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


	$tdatatbl_rfq_carrier_quote["RFQID"] = $fdata;
		$tdatatbl_rfq_carrier_quote[".searchableFields"][] = "RFQID";
//	CarrierCompanyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CarrierCompanyID";
	$fdata["GoodName"] = "CarrierCompanyID";
	$fdata["ownerTable"] = "tbl_rfq_carrier_quote";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_carrier_quote","CarrierCompanyID");
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
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

				$edata["LookupWhere"] = "Type = 'Vendor'";


	
	$edata["LookupOrderBy"] = "Name";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "CarrierContactID";

	
	
	
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


	$tdatatbl_rfq_carrier_quote["CarrierCompanyID"] = $fdata;
		$tdatatbl_rfq_carrier_quote[".searchableFields"][] = "CarrierCompanyID";
//	CarrierQuoteRefNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CarrierQuoteRefNumber";
	$fdata["GoodName"] = "CarrierQuoteRefNumber";
	$fdata["ownerTable"] = "tbl_rfq_carrier_quote";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_carrier_quote","CarrierQuoteRefNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierQuoteRefNumber";

		$fdata["sourceSingle"] = "CarrierQuoteRefNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierQuoteRefNumber";

	
	
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


	$tdatatbl_rfq_carrier_quote["CarrierQuoteRefNumber"] = $fdata;
		$tdatatbl_rfq_carrier_quote[".searchableFields"][] = "CarrierQuoteRefNumber";
//	Terms
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Terms";
	$fdata["GoodName"] = "Terms";
	$fdata["ownerTable"] = "tbl_rfq_carrier_quote";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_carrier_quote","Terms");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Terms";

		$fdata["sourceSingle"] = "Terms";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Terms";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
		$edata["insertNull"] = true;

		$edata["UseRTE"] = true;

	
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


	$tdatatbl_rfq_carrier_quote["Terms"] = $fdata;
		$tdatatbl_rfq_carrier_quote[".searchableFields"][] = "Terms";
//	TotalCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TotalCost";
	$fdata["GoodName"] = "TotalCost";
	$fdata["ownerTable"] = "tbl_rfq_carrier_quote";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_carrier_quote","TotalCost");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "TotalCost";

		$fdata["sourceSingle"] = "TotalCost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TotalCost";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
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


	$tdatatbl_rfq_carrier_quote["TotalCost"] = $fdata;
		$tdatatbl_rfq_carrier_quote[".searchableFields"][] = "TotalCost";
//	Accepted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Accepted";
	$fdata["GoodName"] = "Accepted";
	$fdata["ownerTable"] = "tbl_rfq_carrier_quote";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_carrier_quote","Accepted");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "Accepted";

		$fdata["sourceSingle"] = "Accepted";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Accepted";

	
	
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
	$edata["LookupValues"][] = "Yes";
	$edata["LookupValues"][] = "No";

	
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


	$tdatatbl_rfq_carrier_quote["Accepted"] = $fdata;
		$tdatatbl_rfq_carrier_quote[".searchableFields"][] = "Accepted";
//	CarrierContactID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CarrierContactID";
	$fdata["GoodName"] = "CarrierContactID";
	$fdata["ownerTable"] = "tbl_rfq_carrier_quote";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_carrier_quote","CarrierContactID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CarrierContactID";

		$fdata["sourceSingle"] = "CarrierContactID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierContactID";

	
	
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
	$edata["LookupTable"] = "vw_contacts";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"ContactDetails", 'lookupF'=>"contact_details");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CompanyID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ContactName";

	

	
	$edata["LookupOrderBy"] = "ContactName";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "CarrierCompanyID", "lookup" => "CompanyID" );

	
	

	
	
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


	$tdatatbl_rfq_carrier_quote["CarrierContactID"] = $fdata;
		$tdatatbl_rfq_carrier_quote[".searchableFields"][] = "CarrierContactID";
//	ContactDetails
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ContactDetails";
	$fdata["GoodName"] = "ContactDetails";
	$fdata["ownerTable"] = "tbl_rfq_carrier_quote";
	$fdata["Label"] = GetFieldLabel("tbl_rfq_carrier_quote","ContactDetails");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ContactDetails";

		$fdata["sourceSingle"] = "ContactDetails";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ContactDetails";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatatbl_rfq_carrier_quote["ContactDetails"] = $fdata;
		$tdatatbl_rfq_carrier_quote[".searchableFields"][] = "ContactDetails";


$tables_data["tbl_rfq_carrier_quote"]=&$tdatatbl_rfq_carrier_quote;
$field_labels["tbl_rfq_carrier_quote"] = &$fieldLabelstbl_rfq_carrier_quote;
$fieldToolTips["tbl_rfq_carrier_quote"] = &$fieldToolTipstbl_rfq_carrier_quote;
$placeHolders["tbl_rfq_carrier_quote"] = &$placeHolderstbl_rfq_carrier_quote;
$page_titles["tbl_rfq_carrier_quote"] = &$pageTitlestbl_rfq_carrier_quote;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_rfq_carrier_quote"] = array();
//	tbl_rfq_assesorial
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_rfq_assesorial";
		$detailsParam["dOriginalTable"] = "tbl_rfq_assesorial";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_rfq_assesorial";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_rfq_assesorial");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_rfq_carrier_quote"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_rfq_carrier_quote"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_rfq_carrier_quote"][$dIndex]["masterKeys"][]="ID";

	$detailsTablesData["tbl_rfq_carrier_quote"][$dIndex]["masterKeys"][]="CarrierCompanyID";

				$detailsTablesData["tbl_rfq_carrier_quote"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_rfq_carrier_quote"][$dIndex]["detailKeys"][]="QuotationID";

		
	$detailsTablesData["tbl_rfq_carrier_quote"][$dIndex]["detailKeys"][]="CarrierCompanyID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_rfq_carrier_quote"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tbl_rfqs";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_rfqs";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_rfqs";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_rfq_carrier_quote"][0] = $masterParams;
				$masterTablesData["tbl_rfq_carrier_quote"][0]["masterKeys"] = array();
	$masterTablesData["tbl_rfq_carrier_quote"][0]["masterKeys"][]="ID";
				$masterTablesData["tbl_rfq_carrier_quote"][0]["detailKeys"] = array();
	$masterTablesData["tbl_rfq_carrier_quote"][0]["detailKeys"][]="RFQID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_rfq_carrier_quote()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	RFQID,  	CarrierCompanyID,  	CarrierQuoteRefNumber,  	Terms,  	TotalCost,  	Accepted,  	CarrierContactID,  	ContactDetails";
$proto0["m_strFrom"] = "FROM tbl_rfq_carrier_quote";
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
	"m_strTable" => "tbl_rfq_carrier_quote",
	"m_srcTableName" => "tbl_rfq_carrier_quote"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_rfq_carrier_quote";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "RFQID",
	"m_strTable" => "tbl_rfq_carrier_quote",
	"m_srcTableName" => "tbl_rfq_carrier_quote"
));

$proto8["m_sql"] = "RFQID";
$proto8["m_srcTableName"] = "tbl_rfq_carrier_quote";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierCompanyID",
	"m_strTable" => "tbl_rfq_carrier_quote",
	"m_srcTableName" => "tbl_rfq_carrier_quote"
));

$proto10["m_sql"] = "CarrierCompanyID";
$proto10["m_srcTableName"] = "tbl_rfq_carrier_quote";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierQuoteRefNumber",
	"m_strTable" => "tbl_rfq_carrier_quote",
	"m_srcTableName" => "tbl_rfq_carrier_quote"
));

$proto12["m_sql"] = "CarrierQuoteRefNumber";
$proto12["m_srcTableName"] = "tbl_rfq_carrier_quote";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Terms",
	"m_strTable" => "tbl_rfq_carrier_quote",
	"m_srcTableName" => "tbl_rfq_carrier_quote"
));

$proto14["m_sql"] = "Terms";
$proto14["m_srcTableName"] = "tbl_rfq_carrier_quote";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalCost",
	"m_strTable" => "tbl_rfq_carrier_quote",
	"m_srcTableName" => "tbl_rfq_carrier_quote"
));

$proto16["m_sql"] = "TotalCost";
$proto16["m_srcTableName"] = "tbl_rfq_carrier_quote";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Accepted",
	"m_strTable" => "tbl_rfq_carrier_quote",
	"m_srcTableName" => "tbl_rfq_carrier_quote"
));

$proto18["m_sql"] = "Accepted";
$proto18["m_srcTableName"] = "tbl_rfq_carrier_quote";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierContactID",
	"m_strTable" => "tbl_rfq_carrier_quote",
	"m_srcTableName" => "tbl_rfq_carrier_quote"
));

$proto20["m_sql"] = "CarrierContactID";
$proto20["m_srcTableName"] = "tbl_rfq_carrier_quote";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ContactDetails",
	"m_strTable" => "tbl_rfq_carrier_quote",
	"m_srcTableName" => "tbl_rfq_carrier_quote"
));

$proto22["m_sql"] = "ContactDetails";
$proto22["m_srcTableName"] = "tbl_rfq_carrier_quote";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "tbl_rfq_carrier_quote";
$proto25["m_srcTableName"] = "tbl_rfq_carrier_quote";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "ID";
$proto25["m_columns"][] = "RFQID";
$proto25["m_columns"][] = "CarrierCompanyID";
$proto25["m_columns"][] = "CarrierQuoteRefNumber";
$proto25["m_columns"][] = "Terms";
$proto25["m_columns"][] = "TotalCost";
$proto25["m_columns"][] = "Accepted";
$proto25["m_columns"][] = "CarrierContactID";
$proto25["m_columns"][] = "ContactDetails";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "tbl_rfq_carrier_quote";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "tbl_rfq_carrier_quote";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_rfq_carrier_quote";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_rfq_carrier_quote = createSqlQuery_tbl_rfq_carrier_quote();


	
		;

									

$tdatatbl_rfq_carrier_quote[".sqlquery"] = $queryData_tbl_rfq_carrier_quote;



include_once(getabspath("include/tbl_rfq_carrier_quote_events.php"));
$tableEvents["tbl_rfq_carrier_quote"] = new eventclass_tbl_rfq_carrier_quote;
$tdatatbl_rfq_carrier_quote[".hasEvents"] = true;

?>