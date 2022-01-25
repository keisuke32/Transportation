<?php
$tdatavw_rfqs_pdf = array();
$tdatavw_rfqs_pdf[".searchableFields"] = array();
$tdatavw_rfqs_pdf[".ShortName"] = "vw_rfqs_pdf";
$tdatavw_rfqs_pdf[".OwnerID"] = "";
$tdatavw_rfqs_pdf[".OriginalTable"] = "vw_rfqs_pdf";


$tdatavw_rfqs_pdf[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatavw_rfqs_pdf[".originalPagesByType"] = $tdatavw_rfqs_pdf[".pagesByType"];
$tdatavw_rfqs_pdf[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatavw_rfqs_pdf[".originalPages"] = $tdatavw_rfqs_pdf[".pages"];
$tdatavw_rfqs_pdf[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatavw_rfqs_pdf[".originalDefaultPages"] = $tdatavw_rfqs_pdf[".defaultPages"];

//	field labels
$fieldLabelsvw_rfqs_pdf = array();
$fieldToolTipsvw_rfqs_pdf = array();
$pageTitlesvw_rfqs_pdf = array();
$placeHoldersvw_rfqs_pdf = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_rfqs_pdf["English"] = array();
	$fieldToolTipsvw_rfqs_pdf["English"] = array();
	$placeHoldersvw_rfqs_pdf["English"] = array();
	$pageTitlesvw_rfqs_pdf["English"] = array();
	$fieldLabelsvw_rfqs_pdf["English"]["ID"] = "ID";
	$fieldToolTipsvw_rfqs_pdf["English"]["ID"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["ID"] = "";
	$fieldLabelsvw_rfqs_pdf["English"]["CustomerID"] = "Customer ID";
	$fieldToolTipsvw_rfqs_pdf["English"]["CustomerID"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["CustomerID"] = "";
	$fieldLabelsvw_rfqs_pdf["English"]["EffectiveDate"] = "Effective Date";
	$fieldToolTipsvw_rfqs_pdf["English"]["EffectiveDate"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["EffectiveDate"] = "";
	$fieldLabelsvw_rfqs_pdf["English"]["ExpiryDate"] = "Expiry Date";
	$fieldToolTipsvw_rfqs_pdf["English"]["ExpiryDate"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["ExpiryDate"] = "";
	$fieldLabelsvw_rfqs_pdf["English"]["IssueDate"] = "Issue Date";
	$fieldToolTipsvw_rfqs_pdf["English"]["IssueDate"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["IssueDate"] = "";
	$fieldLabelsvw_rfqs_pdf["English"]["ShipperName"] = "Shipper Name";
	$fieldToolTipsvw_rfqs_pdf["English"]["ShipperName"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["ShipperName"] = "";
	$fieldLabelsvw_rfqs_pdf["English"]["ShipperAddress"] = "Shipper Address";
	$fieldToolTipsvw_rfqs_pdf["English"]["ShipperAddress"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["ShipperAddress"] = "";
	$fieldLabelsvw_rfqs_pdf["English"]["ConsigneeName"] = "Consignee Name";
	$fieldToolTipsvw_rfqs_pdf["English"]["ConsigneeName"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["ConsigneeName"] = "";
	$fieldLabelsvw_rfqs_pdf["English"]["ConsigneeAddress"] = "Consignee Address";
	$fieldToolTipsvw_rfqs_pdf["English"]["ConsigneeAddress"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["ConsigneeAddress"] = "";
	$fieldLabelsvw_rfqs_pdf["English"]["CarrierID"] = "Carrier ID";
	$fieldToolTipsvw_rfqs_pdf["English"]["CarrierID"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["CarrierID"] = "";
	$fieldLabelsvw_rfqs_pdf["English"]["Instructions"] = "Instructions";
	$fieldToolTipsvw_rfqs_pdf["English"]["Instructions"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["Instructions"] = "";
	$fieldLabelsvw_rfqs_pdf["English"]["RFQResponseDate"] = "RFQResponse Date";
	$fieldToolTipsvw_rfqs_pdf["English"]["RFQResponseDate"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["RFQResponseDate"] = "";
	$fieldLabelsvw_rfqs_pdf["English"]["Description"] = "Description";
	$fieldToolTipsvw_rfqs_pdf["English"]["Description"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["Description"] = "";
	$fieldLabelsvw_rfqs_pdf["English"]["CarrierCompanyID"] = "Carrier Company ID";
	$fieldToolTipsvw_rfqs_pdf["English"]["CarrierCompanyID"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["CarrierCompanyID"] = "";
	$fieldLabelsvw_rfqs_pdf["English"]["CarrierAddress"] = "Carrier Address";
	$fieldToolTipsvw_rfqs_pdf["English"]["CarrierAddress"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["CarrierAddress"] = "";
	$fieldLabelsvw_rfqs_pdf["English"]["CarrierPhone"] = "Carrier Phone";
	$fieldToolTipsvw_rfqs_pdf["English"]["CarrierPhone"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["CarrierPhone"] = "";
	$fieldLabelsvw_rfqs_pdf["English"]["CarrierFax"] = "Carrier Fax";
	$fieldToolTipsvw_rfqs_pdf["English"]["CarrierFax"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["CarrierFax"] = "";
	$fieldLabelsvw_rfqs_pdf["English"]["EquipmentType"] = "Equipment Type";
	$fieldToolTipsvw_rfqs_pdf["English"]["EquipmentType"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["EquipmentType"] = "";
	$fieldLabelsvw_rfqs_pdf["English"]["ContactDetails"] = "Contact Details";
	$fieldToolTipsvw_rfqs_pdf["English"]["ContactDetails"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["ContactDetails"] = "";
	$fieldLabelsvw_rfqs_pdf["English"]["PickupDate"] = "Pickup Date";
	$fieldToolTipsvw_rfqs_pdf["English"]["PickupDate"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["PickupDate"] = "";
	$fieldLabelsvw_rfqs_pdf["English"]["DeliveryDate"] = "Delivery Date";
	$fieldToolTipsvw_rfqs_pdf["English"]["DeliveryDate"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["DeliveryDate"] = "";
	$fieldLabelsvw_rfqs_pdf["English"]["SalesRepName"] = "Sales Rep Name";
	$fieldToolTipsvw_rfqs_pdf["English"]["SalesRepName"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["SalesRepName"] = "";
	$fieldLabelsvw_rfqs_pdf["English"]["SalesRepEmail"] = "Sales Rep Email";
	$fieldToolTipsvw_rfqs_pdf["English"]["SalesRepEmail"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["SalesRepEmail"] = "";
	$fieldLabelsvw_rfqs_pdf["English"]["SalesRepPrimaryPhone"] = "Sales Rep Primary Phone";
	$fieldToolTipsvw_rfqs_pdf["English"]["SalesRepPrimaryPhone"] = "";
	$placeHoldersvw_rfqs_pdf["English"]["SalesRepPrimaryPhone"] = "";
	if (count($fieldToolTipsvw_rfqs_pdf["English"]))
		$tdatavw_rfqs_pdf[".isUseToolTips"] = true;
}


	$tdatavw_rfqs_pdf[".NCSearch"] = true;



$tdatavw_rfqs_pdf[".shortTableName"] = "vw_rfqs_pdf";
$tdatavw_rfqs_pdf[".nSecOptions"] = 0;

$tdatavw_rfqs_pdf[".mainTableOwnerID"] = "";
$tdatavw_rfqs_pdf[".entityType"] = 0;
$tdatavw_rfqs_pdf[".connId"] = "logistics_at_localhost";


$tdatavw_rfqs_pdf[".strOriginalTableName"] = "vw_rfqs_pdf";

	



$tdatavw_rfqs_pdf[".showAddInPopup"] = false;

$tdatavw_rfqs_pdf[".showEditInPopup"] = false;

$tdatavw_rfqs_pdf[".showViewInPopup"] = false;

$tdatavw_rfqs_pdf[".listAjax"] = false;
//	temporary
//$tdatavw_rfqs_pdf[".listAjax"] = false;

	$tdatavw_rfqs_pdf[".audit"] = false;

	$tdatavw_rfqs_pdf[".locking"] = false;


$pages = $tdatavw_rfqs_pdf[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavw_rfqs_pdf[".edit"] = true;
	$tdatavw_rfqs_pdf[".afterEditAction"] = 1;
	$tdatavw_rfqs_pdf[".closePopupAfterEdit"] = 1;
	$tdatavw_rfqs_pdf[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavw_rfqs_pdf[".add"] = true;
$tdatavw_rfqs_pdf[".afterAddAction"] = 1;
$tdatavw_rfqs_pdf[".closePopupAfterAdd"] = 1;
$tdatavw_rfqs_pdf[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavw_rfqs_pdf[".list"] = true;
}



$tdatavw_rfqs_pdf[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavw_rfqs_pdf[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavw_rfqs_pdf[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavw_rfqs_pdf[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavw_rfqs_pdf[".printFriendly"] = true;
}



$tdatavw_rfqs_pdf[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavw_rfqs_pdf[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavw_rfqs_pdf[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavw_rfqs_pdf[".isUseAjaxSuggest"] = true;

$tdatavw_rfqs_pdf[".rowHighlite"] = true;



																					

$tdatavw_rfqs_pdf[".ajaxCodeSnippetAdded"] = false;

$tdatavw_rfqs_pdf[".buttonsAdded"] = false;

$tdatavw_rfqs_pdf[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_rfqs_pdf[".isUseTimeForSearch"] = false;


$tdatavw_rfqs_pdf[".badgeColor"] = "1E90FF";


$tdatavw_rfqs_pdf[".allSearchFields"] = array();
$tdatavw_rfqs_pdf[".filterFields"] = array();
$tdatavw_rfqs_pdf[".requiredSearchFields"] = array();

$tdatavw_rfqs_pdf[".googleLikeFields"] = array();
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "ID";
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "CustomerID";
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "EffectiveDate";
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "ExpiryDate";
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "IssueDate";
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "ShipperName";
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "PickupDate";
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "DeliveryDate";
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "ShipperAddress";
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "ConsigneeName";
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "ConsigneeAddress";
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "CarrierID";
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "Instructions";
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "RFQResponseDate";
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "Description";
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "CarrierCompanyID";
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "CarrierAddress";
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "CarrierPhone";
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "CarrierFax";
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "EquipmentType";
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "ContactDetails";
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "SalesRepName";
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "SalesRepEmail";
$tdatavw_rfqs_pdf[".googleLikeFields"][] = "SalesRepPrimaryPhone";



$tdatavw_rfqs_pdf[".tableType"] = "list";

$tdatavw_rfqs_pdf[".printerPageOrientation"] = 0;
$tdatavw_rfqs_pdf[".nPrinterPageScale"] = 100;

$tdatavw_rfqs_pdf[".nPrinterSplitRecords"] = 40;

$tdatavw_rfqs_pdf[".geocodingEnabled"] = false;










$tdatavw_rfqs_pdf[".pageSize"] = 20;

$tdatavw_rfqs_pdf[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_rfqs_pdf[".strOrderBy"] = $tstrOrderBy;

$tdatavw_rfqs_pdf[".orderindexes"] = array();


$tdatavw_rfqs_pdf[".sqlHead"] = "SELECT ID,  	CustomerID,  	EffectiveDate,  	ExpiryDate,  	IssueDate,  	ShipperName,  	PickupDate,  	DeliveryDate,  	ShipperAddress,  	ConsigneeName,  	ConsigneeAddress,  	CarrierID,  	Instructions,  	RFQResponseDate,  	Description,  	CarrierCompanyID,  	CarrierAddress,  	CarrierPhone,  	CarrierFax,  	EquipmentType,  	ContactDetails,  	SalesRepName,  	SalesRepEmail,  	SalesRepPrimaryPhone";
$tdatavw_rfqs_pdf[".sqlFrom"] = "FROM vw_rfqs_pdf";
$tdatavw_rfqs_pdf[".sqlWhereExpr"] = "";
$tdatavw_rfqs_pdf[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_rfqs_pdf[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_rfqs_pdf[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_rfqs_pdf[".highlightSearchResults"] = true;

$tableKeysvw_rfqs_pdf = array();
$tableKeysvw_rfqs_pdf[] = "ID";
$tableKeysvw_rfqs_pdf[] = "CarrierID";
$tdatavw_rfqs_pdf[".Keys"] = $tableKeysvw_rfqs_pdf;


$tdatavw_rfqs_pdf[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","ID");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatavw_rfqs_pdf["ID"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "ID";
//	CustomerID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CustomerID";
	$fdata["GoodName"] = "CustomerID";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","CustomerID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CustomerID";

		$fdata["sourceSingle"] = "CustomerID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CustomerID";

	
	
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


	$tdatavw_rfqs_pdf["CustomerID"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "CustomerID";
//	EffectiveDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EffectiveDate";
	$fdata["GoodName"] = "EffectiveDate";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","EffectiveDate");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "EffectiveDate";

		$fdata["sourceSingle"] = "EffectiveDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EffectiveDate";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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


	$tdatavw_rfqs_pdf["EffectiveDate"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "EffectiveDate";
//	ExpiryDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ExpiryDate";
	$fdata["GoodName"] = "ExpiryDate";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","ExpiryDate");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ExpiryDate";

		$fdata["sourceSingle"] = "ExpiryDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ExpiryDate";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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


	$tdatavw_rfqs_pdf["ExpiryDate"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "ExpiryDate";
//	IssueDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IssueDate";
	$fdata["GoodName"] = "IssueDate";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","IssueDate");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "IssueDate";

		$fdata["sourceSingle"] = "IssueDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IssueDate";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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


	$tdatavw_rfqs_pdf["IssueDate"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "IssueDate";
//	ShipperName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ShipperName";
	$fdata["GoodName"] = "ShipperName";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","ShipperName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperName";

		$fdata["sourceSingle"] = "ShipperName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperName";

	
	
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


	$tdatavw_rfqs_pdf["ShipperName"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "ShipperName";
//	PickupDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PickupDate";
	$fdata["GoodName"] = "PickupDate";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","PickupDate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "PickupDate";

		$fdata["sourceSingle"] = "PickupDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PickupDate";

	
	
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


	$tdatavw_rfqs_pdf["PickupDate"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "PickupDate";
//	DeliveryDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DeliveryDate";
	$fdata["GoodName"] = "DeliveryDate";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","DeliveryDate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "DeliveryDate";

		$fdata["sourceSingle"] = "DeliveryDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DeliveryDate";

	
	
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


	$tdatavw_rfqs_pdf["DeliveryDate"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "DeliveryDate";
//	ShipperAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ShipperAddress";
	$fdata["GoodName"] = "ShipperAddress";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","ShipperAddress");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperAddress";

		$fdata["sourceSingle"] = "ShipperAddress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperAddress";

	
	
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


	$tdatavw_rfqs_pdf["ShipperAddress"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "ShipperAddress";
//	ConsigneeName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ConsigneeName";
	$fdata["GoodName"] = "ConsigneeName";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","ConsigneeName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeName";

		$fdata["sourceSingle"] = "ConsigneeName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeName";

	
	
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


	$tdatavw_rfqs_pdf["ConsigneeName"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "ConsigneeName";
//	ConsigneeAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ConsigneeAddress";
	$fdata["GoodName"] = "ConsigneeAddress";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","ConsigneeAddress");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeAddress";

		$fdata["sourceSingle"] = "ConsigneeAddress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeAddress";

	
	
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


	$tdatavw_rfqs_pdf["ConsigneeAddress"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "ConsigneeAddress";
//	CarrierID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "CarrierID";
	$fdata["GoodName"] = "CarrierID";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","CarrierID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CarrierID";

		$fdata["sourceSingle"] = "CarrierID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierID";

	
	
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


	$tdatavw_rfqs_pdf["CarrierID"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "CarrierID";
//	Instructions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Instructions";
	$fdata["GoodName"] = "Instructions";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","Instructions");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Instructions";

		$fdata["sourceSingle"] = "Instructions";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Instructions";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatavw_rfqs_pdf["Instructions"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "Instructions";
//	RFQResponseDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RFQResponseDate";
	$fdata["GoodName"] = "RFQResponseDate";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","RFQResponseDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "RFQResponseDate";

		$fdata["sourceSingle"] = "RFQResponseDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RFQResponseDate";

	
	
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


	$tdatavw_rfqs_pdf["RFQResponseDate"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "RFQResponseDate";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","Description");
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


	$tdatavw_rfqs_pdf["Description"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "Description";
//	CarrierCompanyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "CarrierCompanyID";
	$fdata["GoodName"] = "CarrierCompanyID";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","CarrierCompanyID");
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


	$tdatavw_rfqs_pdf["CarrierCompanyID"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "CarrierCompanyID";
//	CarrierAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "CarrierAddress";
	$fdata["GoodName"] = "CarrierAddress";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","CarrierAddress");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierAddress";

		$fdata["sourceSingle"] = "CarrierAddress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierAddress";

	
	
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
			$edata["EditParams"].= " maxlength=338";

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


	$tdatavw_rfqs_pdf["CarrierAddress"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "CarrierAddress";
//	CarrierPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "CarrierPhone";
	$fdata["GoodName"] = "CarrierPhone";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","CarrierPhone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierPhone";

		$fdata["sourceSingle"] = "CarrierPhone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierPhone";

	
	
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
			$edata["EditParams"].= " maxlength=12";

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


	$tdatavw_rfqs_pdf["CarrierPhone"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "CarrierPhone";
//	CarrierFax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "CarrierFax";
	$fdata["GoodName"] = "CarrierFax";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","CarrierFax");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierFax";

		$fdata["sourceSingle"] = "CarrierFax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierFax";

	
	
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
			$edata["EditParams"].= " maxlength=12";

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


	$tdatavw_rfqs_pdf["CarrierFax"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "CarrierFax";
//	EquipmentType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "EquipmentType";
	$fdata["GoodName"] = "EquipmentType";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","EquipmentType");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "EquipmentType";

		$fdata["sourceSingle"] = "EquipmentType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EquipmentType";

	
	
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


	$tdatavw_rfqs_pdf["EquipmentType"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "EquipmentType";
//	ContactDetails
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "ContactDetails";
	$fdata["GoodName"] = "ContactDetails";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","ContactDetails");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ContactDetails";

		$fdata["sourceSingle"] = "ContactDetails";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ContactDetails";

	
	
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


	$tdatavw_rfqs_pdf["ContactDetails"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "ContactDetails";
//	SalesRepName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "SalesRepName";
	$fdata["GoodName"] = "SalesRepName";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","SalesRepName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SalesRepName";

		$fdata["sourceSingle"] = "SalesRepName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SalesRepName";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatavw_rfqs_pdf["SalesRepName"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "SalesRepName";
//	SalesRepEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "SalesRepEmail";
	$fdata["GoodName"] = "SalesRepEmail";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","SalesRepEmail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SalesRepEmail";

		$fdata["sourceSingle"] = "SalesRepEmail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SalesRepEmail";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatavw_rfqs_pdf["SalesRepEmail"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "SalesRepEmail";
//	SalesRepPrimaryPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "SalesRepPrimaryPhone";
	$fdata["GoodName"] = "SalesRepPrimaryPhone";
	$fdata["ownerTable"] = "vw_rfqs_pdf";
	$fdata["Label"] = GetFieldLabel("vw_rfqs_pdf","SalesRepPrimaryPhone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SalesRepPrimaryPhone";

		$fdata["sourceSingle"] = "SalesRepPrimaryPhone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SalesRepPrimaryPhone";

	
	
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


	$tdatavw_rfqs_pdf["SalesRepPrimaryPhone"] = $fdata;
		$tdatavw_rfqs_pdf[".searchableFields"][] = "SalesRepPrimaryPhone";


$tables_data["vw_rfqs_pdf"]=&$tdatavw_rfqs_pdf;
$field_labels["vw_rfqs_pdf"] = &$fieldLabelsvw_rfqs_pdf;
$fieldToolTips["vw_rfqs_pdf"] = &$fieldToolTipsvw_rfqs_pdf;
$placeHolders["vw_rfqs_pdf"] = &$placeHoldersvw_rfqs_pdf;
$page_titles["vw_rfqs_pdf"] = &$pageTitlesvw_rfqs_pdf;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["vw_rfqs_pdf"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["vw_rfqs_pdf"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vw_rfqs_pdf()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	CustomerID,  	EffectiveDate,  	ExpiryDate,  	IssueDate,  	ShipperName,  	PickupDate,  	DeliveryDate,  	ShipperAddress,  	ConsigneeName,  	ConsigneeAddress,  	CarrierID,  	Instructions,  	RFQResponseDate,  	Description,  	CarrierCompanyID,  	CarrierAddress,  	CarrierPhone,  	CarrierFax,  	EquipmentType,  	ContactDetails,  	SalesRepName,  	SalesRepEmail,  	SalesRepPrimaryPhone";
$proto0["m_strFrom"] = "FROM vw_rfqs_pdf";
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
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "vw_rfqs_pdf";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomerID",
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto8["m_sql"] = "CustomerID";
$proto8["m_srcTableName"] = "vw_rfqs_pdf";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EffectiveDate",
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto10["m_sql"] = "EffectiveDate";
$proto10["m_srcTableName"] = "vw_rfqs_pdf";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ExpiryDate",
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto12["m_sql"] = "ExpiryDate";
$proto12["m_srcTableName"] = "vw_rfqs_pdf";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IssueDate",
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto14["m_sql"] = "IssueDate";
$proto14["m_srcTableName"] = "vw_rfqs_pdf";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperName",
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto16["m_sql"] = "ShipperName";
$proto16["m_srcTableName"] = "vw_rfqs_pdf";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PickupDate",
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto18["m_sql"] = "PickupDate";
$proto18["m_srcTableName"] = "vw_rfqs_pdf";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DeliveryDate",
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto20["m_sql"] = "DeliveryDate";
$proto20["m_srcTableName"] = "vw_rfqs_pdf";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperAddress",
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto22["m_sql"] = "ShipperAddress";
$proto22["m_srcTableName"] = "vw_rfqs_pdf";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeName",
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto24["m_sql"] = "ConsigneeName";
$proto24["m_srcTableName"] = "vw_rfqs_pdf";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeAddress",
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto26["m_sql"] = "ConsigneeAddress";
$proto26["m_srcTableName"] = "vw_rfqs_pdf";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierID",
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto28["m_sql"] = "CarrierID";
$proto28["m_srcTableName"] = "vw_rfqs_pdf";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Instructions",
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto30["m_sql"] = "Instructions";
$proto30["m_srcTableName"] = "vw_rfqs_pdf";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "RFQResponseDate",
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto32["m_sql"] = "RFQResponseDate";
$proto32["m_srcTableName"] = "vw_rfqs_pdf";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto34["m_sql"] = "Description";
$proto34["m_srcTableName"] = "vw_rfqs_pdf";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierCompanyID",
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto36["m_sql"] = "CarrierCompanyID";
$proto36["m_srcTableName"] = "vw_rfqs_pdf";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierAddress",
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto38["m_sql"] = "CarrierAddress";
$proto38["m_srcTableName"] = "vw_rfqs_pdf";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierPhone",
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto40["m_sql"] = "CarrierPhone";
$proto40["m_srcTableName"] = "vw_rfqs_pdf";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierFax",
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto42["m_sql"] = "CarrierFax";
$proto42["m_srcTableName"] = "vw_rfqs_pdf";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "EquipmentType",
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto44["m_sql"] = "EquipmentType";
$proto44["m_srcTableName"] = "vw_rfqs_pdf";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "ContactDetails",
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto46["m_sql"] = "ContactDetails";
$proto46["m_srcTableName"] = "vw_rfqs_pdf";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "SalesRepName",
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto48["m_sql"] = "SalesRepName";
$proto48["m_srcTableName"] = "vw_rfqs_pdf";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "SalesRepEmail",
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto50["m_sql"] = "SalesRepEmail";
$proto50["m_srcTableName"] = "vw_rfqs_pdf";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "SalesRepPrimaryPhone",
	"m_strTable" => "vw_rfqs_pdf",
	"m_srcTableName" => "vw_rfqs_pdf"
));

$proto52["m_sql"] = "SalesRepPrimaryPhone";
$proto52["m_srcTableName"] = "vw_rfqs_pdf";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
			$proto55=array();
$proto55["m_strName"] = "vw_rfqs_pdf";
$proto55["m_srcTableName"] = "vw_rfqs_pdf";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "ID";
$proto55["m_columns"][] = "CustomerID";
$proto55["m_columns"][] = "EffectiveDate";
$proto55["m_columns"][] = "ExpiryDate";
$proto55["m_columns"][] = "IssueDate";
$proto55["m_columns"][] = "ShipperName";
$proto55["m_columns"][] = "PickupDate";
$proto55["m_columns"][] = "DeliveryDate";
$proto55["m_columns"][] = "ShipperAddress";
$proto55["m_columns"][] = "ConsigneeName";
$proto55["m_columns"][] = "ConsigneeAddress";
$proto55["m_columns"][] = "CarrierID";
$proto55["m_columns"][] = "Instructions";
$proto55["m_columns"][] = "RFQResponseDate";
$proto55["m_columns"][] = "Description";
$proto55["m_columns"][] = "CarrierCompanyID";
$proto55["m_columns"][] = "CarrierAddress";
$proto55["m_columns"][] = "CarrierPhone";
$proto55["m_columns"][] = "CarrierFax";
$proto55["m_columns"][] = "EquipmentType";
$proto55["m_columns"][] = "ContactDetails";
$proto55["m_columns"][] = "SalesRepName";
$proto55["m_columns"][] = "SalesRepEmail";
$proto55["m_columns"][] = "SalesRepPrimaryPhone";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "vw_rfqs_pdf";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "vw_rfqs_pdf";
$proto56=array();
$proto56["m_sql"] = "";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vw_rfqs_pdf";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_rfqs_pdf = createSqlQuery_vw_rfqs_pdf();


	
		;

																								

$tdatavw_rfqs_pdf[".sqlquery"] = $queryData_vw_rfqs_pdf;



$tableEvents["vw_rfqs_pdf"] = new eventsBase;
$tdatavw_rfqs_pdf[".hasEvents"] = false;

?>