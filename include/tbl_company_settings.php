<?php
$tdatatbl_company = array();
$tdatatbl_company[".searchableFields"] = array();
$tdatatbl_company[".ShortName"] = "tbl_company";
$tdatatbl_company[".OwnerID"] = "";
$tdatatbl_company[".OriginalTable"] = "tbl_company";


$tdatatbl_company[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatbl_company[".originalPagesByType"] = $tdatatbl_company[".pagesByType"];
$tdatatbl_company[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatbl_company[".originalPages"] = $tdatatbl_company[".pages"];
$tdatatbl_company[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatbl_company[".originalDefaultPages"] = $tdatatbl_company[".defaultPages"];

//	field labels
$fieldLabelstbl_company = array();
$fieldToolTipstbl_company = array();
$pageTitlestbl_company = array();
$placeHolderstbl_company = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_company["English"] = array();
	$fieldToolTipstbl_company["English"] = array();
	$placeHolderstbl_company["English"] = array();
	$pageTitlestbl_company["English"] = array();
	$fieldLabelstbl_company["English"]["ID"] = "ID";
	$fieldToolTipstbl_company["English"]["ID"] = "";
	$placeHolderstbl_company["English"]["ID"] = "";
	$fieldLabelstbl_company["English"]["ReferenceNumber"] = "Reference Number";
	$fieldToolTipstbl_company["English"]["ReferenceNumber"] = "";
	$placeHolderstbl_company["English"]["ReferenceNumber"] = "";
	$fieldLabelstbl_company["English"]["Name"] = "Name";
	$fieldToolTipstbl_company["English"]["Name"] = "";
	$placeHolderstbl_company["English"]["Name"] = "";
	$fieldLabelstbl_company["English"]["BusinessNumber"] = "Business Number";
	$fieldToolTipstbl_company["English"]["BusinessNumber"] = "";
	$placeHolderstbl_company["English"]["BusinessNumber"] = "";
	$fieldLabelstbl_company["English"]["Comments"] = "Comments";
	$fieldToolTipstbl_company["English"]["Comments"] = "";
	$placeHolderstbl_company["English"]["Comments"] = "";
	$fieldLabelstbl_company["English"]["CustomerNumber"] = "Customer Number";
	$fieldToolTipstbl_company["English"]["CustomerNumber"] = "";
	$placeHolderstbl_company["English"]["CustomerNumber"] = "";
	$fieldLabelstbl_company["English"]["SalesRepID"] = "Sales Rep ID";
	$fieldToolTipstbl_company["English"]["SalesRepID"] = "";
	$placeHolderstbl_company["English"]["SalesRepID"] = "";
	$fieldLabelstbl_company["English"]["CreditApprovalStatus"] = "Credit Approval Status";
	$fieldToolTipstbl_company["English"]["CreditApprovalStatus"] = "";
	$placeHolderstbl_company["English"]["CreditApprovalStatus"] = "";
	$fieldLabelstbl_company["English"]["Insurance"] = "Insurance";
	$fieldToolTipstbl_company["English"]["Insurance"] = "";
	$placeHolderstbl_company["English"]["Insurance"] = "";
	$fieldLabelstbl_company["English"]["CADBankInstitutionNumber"] = "CAD Bank Institution Number";
	$fieldToolTipstbl_company["English"]["CADBankInstitutionNumber"] = "";
	$placeHolderstbl_company["English"]["CADBankInstitutionNumber"] = "";
	$fieldLabelstbl_company["English"]["CADBankroutingNumber"] = "CAD Bank Routing Number";
	$fieldToolTipstbl_company["English"]["CADBankroutingNumber"] = "";
	$placeHolderstbl_company["English"]["CADBankroutingNumber"] = "";
	$fieldLabelstbl_company["English"]["CADBankAccountNumber"] = "CAD Bank Account Number";
	$fieldToolTipstbl_company["English"]["CADBankAccountNumber"] = "";
	$placeHolderstbl_company["English"]["CADBankAccountNumber"] = "";
	$fieldLabelstbl_company["English"]["INCOTermsID"] = "INCO Terms";
	$fieldToolTipstbl_company["English"]["INCOTermsID"] = "";
	$placeHolderstbl_company["English"]["INCOTermsID"] = "";
	$fieldLabelstbl_company["English"]["INCOTermsDescription"] = "INCO Terms Description";
	$fieldToolTipstbl_company["English"]["INCOTermsDescription"] = "";
	$placeHolderstbl_company["English"]["INCOTermsDescription"] = "";
	$fieldLabelstbl_company["English"]["PaymentTermsID"] = "Payment Terms";
	$fieldToolTipstbl_company["English"]["PaymentTermsID"] = "";
	$placeHolderstbl_company["English"]["PaymentTermsID"] = "";
	$fieldLabelstbl_company["English"]["PrimaryAddress1"] = "Address 1";
	$fieldToolTipstbl_company["English"]["PrimaryAddress1"] = "";
	$placeHolderstbl_company["English"]["PrimaryAddress1"] = "";
	$fieldLabelstbl_company["English"]["PrimaryAddress2"] = "Address 2";
	$fieldToolTipstbl_company["English"]["PrimaryAddress2"] = "";
	$placeHolderstbl_company["English"]["PrimaryAddress2"] = "";
	$fieldLabelstbl_company["English"]["PrimaryCity"] = "City";
	$fieldToolTipstbl_company["English"]["PrimaryCity"] = "";
	$placeHolderstbl_company["English"]["PrimaryCity"] = "";
	$fieldLabelstbl_company["English"]["PrimaryPostalCode"] = "Postal Code";
	$fieldToolTipstbl_company["English"]["PrimaryPostalCode"] = "";
	$placeHolderstbl_company["English"]["PrimaryPostalCode"] = "";
	$fieldLabelstbl_company["English"]["PrimaryProvince"] = "Province";
	$fieldToolTipstbl_company["English"]["PrimaryProvince"] = "";
	$placeHolderstbl_company["English"]["PrimaryProvince"] = "";
	$fieldLabelstbl_company["English"]["PrimaryCountry"] = "Country";
	$fieldToolTipstbl_company["English"]["PrimaryCountry"] = "";
	$placeHolderstbl_company["English"]["PrimaryCountry"] = "";
	$fieldLabelstbl_company["English"]["PrimaryPhone"] = "Phone";
	$fieldToolTipstbl_company["English"]["PrimaryPhone"] = "";
	$placeHolderstbl_company["English"]["PrimaryPhone"] = "";
	$fieldLabelstbl_company["English"]["PrimaryFax"] = "Fax";
	$fieldToolTipstbl_company["English"]["PrimaryFax"] = "";
	$placeHolderstbl_company["English"]["PrimaryFax"] = "";
	$fieldLabelstbl_company["English"]["Type"] = "Type";
	$fieldToolTipstbl_company["English"]["Type"] = "";
	$placeHolderstbl_company["English"]["Type"] = "";
	$fieldLabelstbl_company["English"]["CarrierSCAC_Number"] = "CarrierSCAC Number";
	$fieldToolTipstbl_company["English"]["CarrierSCAC_Number"] = "";
	$placeHolderstbl_company["English"]["CarrierSCAC_Number"] = "";
	$fieldLabelstbl_company["English"]["CarrierDOT_Number"] = "CarrierDOT Number";
	$fieldToolTipstbl_company["English"]["CarrierDOT_Number"] = "";
	$placeHolderstbl_company["English"]["CarrierDOT_Number"] = "";
	$fieldLabelstbl_company["English"]["CarrierMC_Number"] = "CarrierMC Number";
	$fieldToolTipstbl_company["English"]["CarrierMC_Number"] = "";
	$placeHolderstbl_company["English"]["CarrierMC_Number"] = "";
	$fieldLabelstbl_company["English"]["CarrierDunns_Number"] = "CarrierDunns Number";
	$fieldToolTipstbl_company["English"]["CarrierDunns_Number"] = "";
	$placeHolderstbl_company["English"]["CarrierDunns_Number"] = "";
	$fieldLabelstbl_company["English"]["CarrierInsuranceCargoPolicyNumber"] = "Cargo Policy Number";
	$fieldToolTipstbl_company["English"]["CarrierInsuranceCargoPolicyNumber"] = "";
	$placeHolderstbl_company["English"]["CarrierInsuranceCargoPolicyNumber"] = "";
	$fieldLabelstbl_company["English"]["CarrierInsuranceCargoAmount"] = "Cargo Amount";
	$fieldToolTipstbl_company["English"]["CarrierInsuranceCargoAmount"] = "";
	$placeHolderstbl_company["English"]["CarrierInsuranceCargoAmount"] = "";
	$fieldLabelstbl_company["English"]["CarrierInsuranceCargoStartDate"] = "Cargo Start Date";
	$fieldToolTipstbl_company["English"]["CarrierInsuranceCargoStartDate"] = "";
	$placeHolderstbl_company["English"]["CarrierInsuranceCargoStartDate"] = "";
	$fieldLabelstbl_company["English"]["CarrierInsuranceCargoExpiryDate"] = "Cargo Expiry Date";
	$fieldToolTipstbl_company["English"]["CarrierInsuranceCargoExpiryDate"] = "";
	$placeHolderstbl_company["English"]["CarrierInsuranceCargoExpiryDate"] = "";
	$fieldLabelstbl_company["English"]["CarrierInsuranceLiabilityPolicyNumber"] = "Liability Policy Number";
	$fieldToolTipstbl_company["English"]["CarrierInsuranceLiabilityPolicyNumber"] = "";
	$placeHolderstbl_company["English"]["CarrierInsuranceLiabilityPolicyNumber"] = "";
	$fieldLabelstbl_company["English"]["CarrierInsuranceLiabilityAmount"] = "Liability Amount";
	$fieldToolTipstbl_company["English"]["CarrierInsuranceLiabilityAmount"] = "";
	$placeHolderstbl_company["English"]["CarrierInsuranceLiabilityAmount"] = "";
	$fieldLabelstbl_company["English"]["CarrierInsuranceLiabilityStartDate"] = "Liability Start Date";
	$fieldToolTipstbl_company["English"]["CarrierInsuranceLiabilityStartDate"] = "";
	$placeHolderstbl_company["English"]["CarrierInsuranceLiabilityStartDate"] = "";
	$fieldLabelstbl_company["English"]["CarrierInsuranceLiabilityExpiryDate"] = "Liability Expiry Date";
	$fieldToolTipstbl_company["English"]["CarrierInsuranceLiabilityExpiryDate"] = "";
	$placeHolderstbl_company["English"]["CarrierInsuranceLiabilityExpiryDate"] = "";
	$pageTitlestbl_company["English"]["edit"] = "Company, Edit [{%Name}]";
	$pageTitlestbl_company["English"]["view"] = "Company: {%Name}";
	if (count($fieldToolTipstbl_company["English"]))
		$tdatatbl_company[".isUseToolTips"] = true;
}


	$tdatatbl_company[".NCSearch"] = true;



$tdatatbl_company[".shortTableName"] = "tbl_company";
$tdatatbl_company[".nSecOptions"] = 0;

$tdatatbl_company[".mainTableOwnerID"] = "";
$tdatatbl_company[".entityType"] = 0;
$tdatatbl_company[".connId"] = "logistics_at_localhost";


$tdatatbl_company[".strOriginalTableName"] = "tbl_company";

	



$tdatatbl_company[".showAddInPopup"] = false;

$tdatatbl_company[".showEditInPopup"] = false;

$tdatatbl_company[".showViewInPopup"] = false;

	$tdatatbl_company[".listAjax"] = true;
//	temporary
//$tdatatbl_company[".listAjax"] = false;

	$tdatatbl_company[".audit"] = true;

	$tdatatbl_company[".locking"] = false;


$pages = $tdatatbl_company[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_company[".edit"] = true;
	$tdatatbl_company[".afterEditAction"] = 0;
	$tdatatbl_company[".closePopupAfterEdit"] = 1;
	$tdatatbl_company[".afterEditActionDetTable"] = "tbl_address";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_company[".add"] = true;
$tdatatbl_company[".afterAddAction"] = 3;
$tdatatbl_company[".closePopupAfterAdd"] = 1;
$tdatatbl_company[".afterAddActionDetTable"] = "tbl_address";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_company[".list"] = true;
}



$tdatatbl_company[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_company[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_company[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_company[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_company[".printFriendly"] = true;
}



$tdatatbl_company[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_company[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_company[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_company[".isUseAjaxSuggest"] = true;

$tdatatbl_company[".rowHighlite"] = true;



																					

$tdatatbl_company[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_company[".buttonsAdded"] = false;

$tdatatbl_company[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatbl_company[".isUseTimeForSearch"] = false;


$tdatatbl_company[".badgeColor"] = "2F4F4F";


$tdatatbl_company[".allSearchFields"] = array();
$tdatatbl_company[".filterFields"] = array();
$tdatatbl_company[".requiredSearchFields"] = array();

$tdatatbl_company[".googleLikeFields"] = array();
$tdatatbl_company[".googleLikeFields"][] = "ID";
$tdatatbl_company[".googleLikeFields"][] = "Name";
$tdatatbl_company[".googleLikeFields"][] = "CustomerNumber";
$tdatatbl_company[".googleLikeFields"][] = "SalesRepID";
$tdatatbl_company[".googleLikeFields"][] = "BusinessNumber";
$tdatatbl_company[".googleLikeFields"][] = "ReferenceNumber";
$tdatatbl_company[".googleLikeFields"][] = "CreditApprovalStatus";
$tdatatbl_company[".googleLikeFields"][] = "Insurance";
$tdatatbl_company[".googleLikeFields"][] = "CADBankInstitutionNumber";
$tdatatbl_company[".googleLikeFields"][] = "CADBankroutingNumber";
$tdatatbl_company[".googleLikeFields"][] = "CADBankAccountNumber";
$tdatatbl_company[".googleLikeFields"][] = "INCOTermsID";
$tdatatbl_company[".googleLikeFields"][] = "INCOTermsDescription";
$tdatatbl_company[".googleLikeFields"][] = "PaymentTermsID";
$tdatatbl_company[".googleLikeFields"][] = "Comments";
$tdatatbl_company[".googleLikeFields"][] = "PrimaryAddress1";
$tdatatbl_company[".googleLikeFields"][] = "PrimaryAddress2";
$tdatatbl_company[".googleLikeFields"][] = "PrimaryCity";
$tdatatbl_company[".googleLikeFields"][] = "PrimaryPostalCode";
$tdatatbl_company[".googleLikeFields"][] = "PrimaryProvince";
$tdatatbl_company[".googleLikeFields"][] = "PrimaryCountry";
$tdatatbl_company[".googleLikeFields"][] = "PrimaryPhone";
$tdatatbl_company[".googleLikeFields"][] = "PrimaryFax";
$tdatatbl_company[".googleLikeFields"][] = "Type";
$tdatatbl_company[".googleLikeFields"][] = "CarrierSCAC_Number";
$tdatatbl_company[".googleLikeFields"][] = "CarrierDOT_Number";
$tdatatbl_company[".googleLikeFields"][] = "CarrierMC_Number";
$tdatatbl_company[".googleLikeFields"][] = "CarrierDunns_Number";
$tdatatbl_company[".googleLikeFields"][] = "CarrierInsuranceCargoPolicyNumber";
$tdatatbl_company[".googleLikeFields"][] = "CarrierInsuranceCargoAmount";
$tdatatbl_company[".googleLikeFields"][] = "CarrierInsuranceCargoStartDate";
$tdatatbl_company[".googleLikeFields"][] = "CarrierInsuranceCargoExpiryDate";
$tdatatbl_company[".googleLikeFields"][] = "CarrierInsuranceLiabilityPolicyNumber";
$tdatatbl_company[".googleLikeFields"][] = "CarrierInsuranceLiabilityAmount";
$tdatatbl_company[".googleLikeFields"][] = "CarrierInsuranceLiabilityStartDate";
$tdatatbl_company[".googleLikeFields"][] = "CarrierInsuranceLiabilityExpiryDate";



$tdatatbl_company[".tableType"] = "list";

$tdatatbl_company[".printerPageOrientation"] = 0;
$tdatatbl_company[".nPrinterPageScale"] = 100;

$tdatatbl_company[".nPrinterSplitRecords"] = 40;

$tdatatbl_company[".geocodingEnabled"] = false;





$tdatatbl_company[".isResizeColumns"] = true;





$tdatatbl_company[".pageSize"] = 20;

$tdatatbl_company[".warnLeavingPages"] = true;

$tdatatbl_company[".hideEmptyFieldsOnView"] = true;


$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_company[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_company[".orderindexes"] = array();


$tdatatbl_company[".sqlHead"] = "SELECT ID,  Name,  CustomerNumber,  SalesRepID,  BusinessNumber,  ReferenceNumber,  CreditApprovalStatus,  Insurance,  CADBankInstitutionNumber,  CADBankroutingNumber,  CADBankAccountNumber,  INCOTermsID,  INCOTermsDescription,  PaymentTermsID,  Comments,  PrimaryAddress1,  PrimaryAddress2,  PrimaryCity,  PrimaryPostalCode,  PrimaryProvince,  PrimaryCountry,  PrimaryPhone,  PrimaryFax,  `Type`,  CarrierSCAC_Number,  CarrierDOT_Number,  CarrierMC_Number,  CarrierDunns_Number,  CarrierInsuranceCargoPolicyNumber,  CarrierInsuranceCargoAmount,  CarrierInsuranceCargoStartDate,  CarrierInsuranceCargoExpiryDate,  CarrierInsuranceLiabilityPolicyNumber,  CarrierInsuranceLiabilityAmount,  CarrierInsuranceLiabilityStartDate,  CarrierInsuranceLiabilityExpiryDate";
$tdatatbl_company[".sqlFrom"] = "FROM tbl_company";
$tdatatbl_company[".sqlWhereExpr"] = "";
$tdatatbl_company[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_company[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_company[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_company[".highlightSearchResults"] = true;

$tableKeystbl_company = array();
$tableKeystbl_company[] = "ID";
$tdatatbl_company[".Keys"] = $tableKeystbl_company;


$tdatatbl_company[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","ID");
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


	$tdatatbl_company["ID"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "ID";
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Name";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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


	$tdatatbl_company["Name"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "Name";
//	CustomerNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CustomerNumber";
	$fdata["GoodName"] = "CustomerNumber";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","CustomerNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CustomerNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CustomerNumber";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdatatbl_company["CustomerNumber"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "CustomerNumber";
//	SalesRepID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SalesRepID";
	$fdata["GoodName"] = "SalesRepID";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","SalesRepID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SalesRepID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SalesRepID";

	
	
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
	$edata["LookupTable"] = "tbl_users";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	

	
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


	$tdatatbl_company["SalesRepID"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "SalesRepID";
//	BusinessNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "BusinessNumber";
	$fdata["GoodName"] = "BusinessNumber";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","BusinessNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BusinessNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BusinessNumber";

	
	
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


	$tdatatbl_company["BusinessNumber"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "BusinessNumber";
//	ReferenceNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ReferenceNumber";
	$fdata["GoodName"] = "ReferenceNumber";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","ReferenceNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ReferenceNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ReferenceNumber";

	
	
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


	$tdatatbl_company["ReferenceNumber"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "ReferenceNumber";
//	CreditApprovalStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CreditApprovalStatus";
	$fdata["GoodName"] = "CreditApprovalStatus";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","CreditApprovalStatus");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "CreditApprovalStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CreditApprovalStatus";

	
	
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
	$edata["LookupTable"] = "tbl_credit_approval_Status";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "StatusName";

	

	
	$edata["LookupOrderBy"] = "StatusName";

	
	
	
	

	
	
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


	$tdatatbl_company["CreditApprovalStatus"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "CreditApprovalStatus";
//	Insurance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Insurance";
	$fdata["GoodName"] = "Insurance";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","Insurance");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "Insurance";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Insurance";

	
	
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


	$tdatatbl_company["Insurance"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "Insurance";
//	CADBankInstitutionNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CADBankInstitutionNumber";
	$fdata["GoodName"] = "CADBankInstitutionNumber";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","CADBankInstitutionNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CADBankInstitutionNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CADBankInstitutionNumber";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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


	$tdatatbl_company["CADBankInstitutionNumber"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "CADBankInstitutionNumber";
//	CADBankroutingNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CADBankroutingNumber";
	$fdata["GoodName"] = "CADBankroutingNumber";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","CADBankroutingNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CADBankroutingNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CADBankroutingNumber";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdatatbl_company["CADBankroutingNumber"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "CADBankroutingNumber";
//	CADBankAccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "CADBankAccountNumber";
	$fdata["GoodName"] = "CADBankAccountNumber";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","CADBankAccountNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CADBankAccountNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CADBankAccountNumber";

	
	
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
			$edata["EditParams"].= " maxlength=7";

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


	$tdatatbl_company["CADBankAccountNumber"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "CADBankAccountNumber";
//	INCOTermsID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "INCOTermsID";
	$fdata["GoodName"] = "INCOTermsID";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","INCOTermsID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "INCOTermsID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "INCOTermsID";

	
	
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
	$edata["LookupTable"] = "tbl_sale_terms";
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


	$tdatatbl_company["INCOTermsID"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "INCOTermsID";
//	INCOTermsDescription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "INCOTermsDescription";
	$fdata["GoodName"] = "INCOTermsDescription";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","INCOTermsDescription");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "INCOTermsDescription";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "INCOTermsDescription";

	
	
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
			$edata["EditParams"].= " maxlength=124";

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


	$tdatatbl_company["INCOTermsDescription"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "INCOTermsDescription";
//	PaymentTermsID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "PaymentTermsID";
	$fdata["GoodName"] = "PaymentTermsID";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","PaymentTermsID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "PaymentTermsID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PaymentTermsID";

	
	
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
	$edata["LookupTable"] = "tbl_payment_terms";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Description";

	

	
	$edata["LookupOrderBy"] = "Description";

	
	
	
	

	
	
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


	$tdatatbl_company["PaymentTermsID"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "PaymentTermsID";
//	Comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Comments";
	$fdata["GoodName"] = "Comments";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","Comments");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Comments";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Comments";

	
	
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


	
	



	
	
		$edata["UseRTE"] = true;

	
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


	$tdatatbl_company["Comments"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "Comments";
//	PrimaryAddress1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "PrimaryAddress1";
	$fdata["GoodName"] = "PrimaryAddress1";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","PrimaryAddress1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PrimaryAddress1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PrimaryAddress1";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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


	$tdatatbl_company["PrimaryAddress1"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "PrimaryAddress1";
//	PrimaryAddress2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "PrimaryAddress2";
	$fdata["GoodName"] = "PrimaryAddress2";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","PrimaryAddress2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PrimaryAddress2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PrimaryAddress2";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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


	$tdatatbl_company["PrimaryAddress2"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "PrimaryAddress2";
//	PrimaryCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "PrimaryCity";
	$fdata["GoodName"] = "PrimaryCity";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","PrimaryCity");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PrimaryCity";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PrimaryCity";

	
	
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
	$edata["LookupTable"] = "tbl_city";
			$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "CityName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CityName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatatbl_company["PrimaryCity"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "PrimaryCity";
//	PrimaryPostalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "PrimaryPostalCode";
	$fdata["GoodName"] = "PrimaryPostalCode";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","PrimaryPostalCode");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PrimaryPostalCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PrimaryPostalCode";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatbl_company["PrimaryPostalCode"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "PrimaryPostalCode";
//	PrimaryProvince
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "PrimaryProvince";
	$fdata["GoodName"] = "PrimaryProvince";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","PrimaryProvince");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "PrimaryProvince";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PrimaryProvince";

	
	
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
	$edata["LookupTable"] = "tbl_province";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "ProvinceID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Code";

	

	
	$edata["LookupOrderBy"] = "Code";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "PrimaryCountry", "lookup" => "CountryID" );

	
	

	
	
	
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


	$tdatatbl_company["PrimaryProvince"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "PrimaryProvince";
//	PrimaryCountry
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "PrimaryCountry";
	$fdata["GoodName"] = "PrimaryCountry";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","PrimaryCountry");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "PrimaryCountry";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PrimaryCountry";

	
	
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
	$edata["LookupTable"] = "tbl_country";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	

	
	$edata["LookupOrderBy"] = "Name";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "PrimaryProvince";

	
	
	
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


	$tdatatbl_company["PrimaryCountry"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "PrimaryCountry";
//	PrimaryPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "PrimaryPhone";
	$fdata["GoodName"] = "PrimaryPhone";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","PrimaryPhone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PrimaryPhone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PrimaryPhone";

	
	
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


		$edata["strEditMask"] = "999-999-9999";

	



		$edata["IsRequired"] = true;

	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("US Phone Number");
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


	$tdatatbl_company["PrimaryPhone"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "PrimaryPhone";
//	PrimaryFax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "PrimaryFax";
	$fdata["GoodName"] = "PrimaryFax";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","PrimaryFax");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PrimaryFax";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PrimaryFax";

	
	
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


		$edata["strEditMask"] = "999-999-9999";

	



	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("US Phone Number");
							
	
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


	$tdatatbl_company["PrimaryFax"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "PrimaryFax";
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","Type");
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
	$edata["LookupValues"][] = "Customer";
	$edata["LookupValues"][] = "Vendor";
	$edata["LookupValues"][] = "Broker";

	
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


	$tdatatbl_company["Type"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "Type";
//	CarrierSCAC_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "CarrierSCAC_Number";
	$fdata["GoodName"] = "CarrierSCAC_Number";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","CarrierSCAC_Number");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierSCAC_Number";

		$fdata["sourceSingle"] = "CarrierSCAC_Number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierSCAC_Number";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatatbl_company["CarrierSCAC_Number"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "CarrierSCAC_Number";
//	CarrierDOT_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "CarrierDOT_Number";
	$fdata["GoodName"] = "CarrierDOT_Number";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","CarrierDOT_Number");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierDOT_Number";

		$fdata["sourceSingle"] = "CarrierDOT_Number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierDOT_Number";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatatbl_company["CarrierDOT_Number"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "CarrierDOT_Number";
//	CarrierMC_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "CarrierMC_Number";
	$fdata["GoodName"] = "CarrierMC_Number";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","CarrierMC_Number");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierMC_Number";

		$fdata["sourceSingle"] = "CarrierMC_Number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierMC_Number";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatatbl_company["CarrierMC_Number"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "CarrierMC_Number";
//	CarrierDunns_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "CarrierDunns_Number";
	$fdata["GoodName"] = "CarrierDunns_Number";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","CarrierDunns_Number");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierDunns_Number";

		$fdata["sourceSingle"] = "CarrierDunns_Number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierDunns_Number";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatatbl_company["CarrierDunns_Number"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "CarrierDunns_Number";
//	CarrierInsuranceCargoPolicyNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "CarrierInsuranceCargoPolicyNumber";
	$fdata["GoodName"] = "CarrierInsuranceCargoPolicyNumber";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","CarrierInsuranceCargoPolicyNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierInsuranceCargoPolicyNumber";

		$fdata["sourceSingle"] = "CarrierInsuranceCargoPolicyNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierInsuranceCargoPolicyNumber";

	
	
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


	$tdatatbl_company["CarrierInsuranceCargoPolicyNumber"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "CarrierInsuranceCargoPolicyNumber";
//	CarrierInsuranceCargoAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "CarrierInsuranceCargoAmount";
	$fdata["GoodName"] = "CarrierInsuranceCargoAmount";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","CarrierInsuranceCargoAmount");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CarrierInsuranceCargoAmount";

		$fdata["sourceSingle"] = "CarrierInsuranceCargoAmount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierInsuranceCargoAmount";

	
	
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


	$tdatatbl_company["CarrierInsuranceCargoAmount"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "CarrierInsuranceCargoAmount";
//	CarrierInsuranceCargoStartDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "CarrierInsuranceCargoStartDate";
	$fdata["GoodName"] = "CarrierInsuranceCargoStartDate";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","CarrierInsuranceCargoStartDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "CarrierInsuranceCargoStartDate";

		$fdata["sourceSingle"] = "CarrierInsuranceCargoStartDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierInsuranceCargoStartDate";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatatbl_company["CarrierInsuranceCargoStartDate"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "CarrierInsuranceCargoStartDate";
//	CarrierInsuranceCargoExpiryDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "CarrierInsuranceCargoExpiryDate";
	$fdata["GoodName"] = "CarrierInsuranceCargoExpiryDate";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","CarrierInsuranceCargoExpiryDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "CarrierInsuranceCargoExpiryDate";

		$fdata["sourceSingle"] = "CarrierInsuranceCargoExpiryDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierInsuranceCargoExpiryDate";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatatbl_company["CarrierInsuranceCargoExpiryDate"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "CarrierInsuranceCargoExpiryDate";
//	CarrierInsuranceLiabilityPolicyNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "CarrierInsuranceLiabilityPolicyNumber";
	$fdata["GoodName"] = "CarrierInsuranceLiabilityPolicyNumber";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","CarrierInsuranceLiabilityPolicyNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierInsuranceLiabilityPolicyNumber";

		$fdata["sourceSingle"] = "CarrierInsuranceLiabilityPolicyNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierInsuranceLiabilityPolicyNumber";

	
	
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


	$tdatatbl_company["CarrierInsuranceLiabilityPolicyNumber"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "CarrierInsuranceLiabilityPolicyNumber";
//	CarrierInsuranceLiabilityAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "CarrierInsuranceLiabilityAmount";
	$fdata["GoodName"] = "CarrierInsuranceLiabilityAmount";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","CarrierInsuranceLiabilityAmount");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CarrierInsuranceLiabilityAmount";

		$fdata["sourceSingle"] = "CarrierInsuranceLiabilityAmount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierInsuranceLiabilityAmount";

	
	
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


	$tdatatbl_company["CarrierInsuranceLiabilityAmount"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "CarrierInsuranceLiabilityAmount";
//	CarrierInsuranceLiabilityStartDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "CarrierInsuranceLiabilityStartDate";
	$fdata["GoodName"] = "CarrierInsuranceLiabilityStartDate";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","CarrierInsuranceLiabilityStartDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "CarrierInsuranceLiabilityStartDate";

		$fdata["sourceSingle"] = "CarrierInsuranceLiabilityStartDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierInsuranceLiabilityStartDate";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatatbl_company["CarrierInsuranceLiabilityStartDate"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "CarrierInsuranceLiabilityStartDate";
//	CarrierInsuranceLiabilityExpiryDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "CarrierInsuranceLiabilityExpiryDate";
	$fdata["GoodName"] = "CarrierInsuranceLiabilityExpiryDate";
	$fdata["ownerTable"] = "tbl_company";
	$fdata["Label"] = GetFieldLabel("tbl_company","CarrierInsuranceLiabilityExpiryDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "CarrierInsuranceLiabilityExpiryDate";

		$fdata["sourceSingle"] = "CarrierInsuranceLiabilityExpiryDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierInsuranceLiabilityExpiryDate";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatatbl_company["CarrierInsuranceLiabilityExpiryDate"] = $fdata;
		$tdatatbl_company[".searchableFields"][] = "CarrierInsuranceLiabilityExpiryDate";


$tables_data["tbl_company"]=&$tdatatbl_company;
$field_labels["tbl_company"] = &$fieldLabelstbl_company;
$fieldToolTips["tbl_company"] = &$fieldToolTipstbl_company;
$placeHolders["tbl_company"] = &$placeHolderstbl_company;
$page_titles["tbl_company"] = &$pageTitlestbl_company;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_company"] = array();
//	tbl_address
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_address";
		$detailsParam["dOriginalTable"] = "tbl_address";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_address";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_address");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_company"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_company"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_company"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["tbl_company"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_company"][$dIndex]["detailKeys"][]="CompanyID";
//	tbl_documents
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_documents";
		$detailsParam["dOriginalTable"] = "tbl_documents";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_documents";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_documents");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_company"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_company"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_company"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["tbl_company"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_company"][$dIndex]["detailKeys"][]="CompanyID";
//	tb_contacts
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tb_contacts";
		$detailsParam["dOriginalTable"] = "tb_contacts";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tb_contacts";
	$detailsParam["dCaptionTable"] = GetTableCaption("tb_contacts");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_company"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_company"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_company"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["tbl_company"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_company"][$dIndex]["detailKeys"][]="CompanyID";
//	tbl_company_equipment
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_company_equipment";
		$detailsParam["dOriginalTable"] = "tbl_company_equipment";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_company_equipment";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_company_equipment");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_company"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_company"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_company"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["tbl_company"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_company"][$dIndex]["detailKeys"][]="CompanyID";
//	tbl_company_areas
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_company_areas";
		$detailsParam["dOriginalTable"] = "tbl_company_areas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_company_areas1";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_company_areas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_company"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_company"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_company"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["tbl_company"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_company"][$dIndex]["detailKeys"][]="CompanyID";
//	tbl_users
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_users";
		$detailsParam["dOriginalTable"] = "tbl_users";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_users";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_users");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_company"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_company"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_company"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["tbl_company"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_company"][$dIndex]["detailKeys"][]="CompanyID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_company"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_company()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  Name,  CustomerNumber,  SalesRepID,  BusinessNumber,  ReferenceNumber,  CreditApprovalStatus,  Insurance,  CADBankInstitutionNumber,  CADBankroutingNumber,  CADBankAccountNumber,  INCOTermsID,  INCOTermsDescription,  PaymentTermsID,  Comments,  PrimaryAddress1,  PrimaryAddress2,  PrimaryCity,  PrimaryPostalCode,  PrimaryProvince,  PrimaryCountry,  PrimaryPhone,  PrimaryFax,  `Type`,  CarrierSCAC_Number,  CarrierDOT_Number,  CarrierMC_Number,  CarrierDunns_Number,  CarrierInsuranceCargoPolicyNumber,  CarrierInsuranceCargoAmount,  CarrierInsuranceCargoStartDate,  CarrierInsuranceCargoExpiryDate,  CarrierInsuranceLiabilityPolicyNumber,  CarrierInsuranceLiabilityAmount,  CarrierInsuranceLiabilityStartDate,  CarrierInsuranceLiabilityExpiryDate";
$proto0["m_strFrom"] = "FROM tbl_company";
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
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_company";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto8["m_sql"] = "Name";
$proto8["m_srcTableName"] = "tbl_company";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomerNumber",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto10["m_sql"] = "CustomerNumber";
$proto10["m_srcTableName"] = "tbl_company";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SalesRepID",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto12["m_sql"] = "SalesRepID";
$proto12["m_srcTableName"] = "tbl_company";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "BusinessNumber",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto14["m_sql"] = "BusinessNumber";
$proto14["m_srcTableName"] = "tbl_company";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ReferenceNumber",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto16["m_sql"] = "ReferenceNumber";
$proto16["m_srcTableName"] = "tbl_company";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CreditApprovalStatus",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto18["m_sql"] = "CreditApprovalStatus";
$proto18["m_srcTableName"] = "tbl_company";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Insurance",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto20["m_sql"] = "Insurance";
$proto20["m_srcTableName"] = "tbl_company";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CADBankInstitutionNumber",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto22["m_sql"] = "CADBankInstitutionNumber";
$proto22["m_srcTableName"] = "tbl_company";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CADBankroutingNumber",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto24["m_sql"] = "CADBankroutingNumber";
$proto24["m_srcTableName"] = "tbl_company";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "CADBankAccountNumber",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto26["m_sql"] = "CADBankAccountNumber";
$proto26["m_srcTableName"] = "tbl_company";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "INCOTermsID",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto28["m_sql"] = "INCOTermsID";
$proto28["m_srcTableName"] = "tbl_company";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "INCOTermsDescription",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto30["m_sql"] = "INCOTermsDescription";
$proto30["m_srcTableName"] = "tbl_company";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentTermsID",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto32["m_sql"] = "PaymentTermsID";
$proto32["m_srcTableName"] = "tbl_company";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Comments",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto34["m_sql"] = "Comments";
$proto34["m_srcTableName"] = "tbl_company";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "PrimaryAddress1",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto36["m_sql"] = "PrimaryAddress1";
$proto36["m_srcTableName"] = "tbl_company";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "PrimaryAddress2",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto38["m_sql"] = "PrimaryAddress2";
$proto38["m_srcTableName"] = "tbl_company";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "PrimaryCity",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto40["m_sql"] = "PrimaryCity";
$proto40["m_srcTableName"] = "tbl_company";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "PrimaryPostalCode",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto42["m_sql"] = "PrimaryPostalCode";
$proto42["m_srcTableName"] = "tbl_company";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "PrimaryProvince",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto44["m_sql"] = "PrimaryProvince";
$proto44["m_srcTableName"] = "tbl_company";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "PrimaryCountry",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto46["m_sql"] = "PrimaryCountry";
$proto46["m_srcTableName"] = "tbl_company";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "PrimaryPhone",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto48["m_sql"] = "PrimaryPhone";
$proto48["m_srcTableName"] = "tbl_company";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "PrimaryFax",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto50["m_sql"] = "PrimaryFax";
$proto50["m_srcTableName"] = "tbl_company";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto52["m_sql"] = "`Type`";
$proto52["m_srcTableName"] = "tbl_company";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierSCAC_Number",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto54["m_sql"] = "CarrierSCAC_Number";
$proto54["m_srcTableName"] = "tbl_company";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierDOT_Number",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto56["m_sql"] = "CarrierDOT_Number";
$proto56["m_srcTableName"] = "tbl_company";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierMC_Number",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto58["m_sql"] = "CarrierMC_Number";
$proto58["m_srcTableName"] = "tbl_company";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierDunns_Number",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto60["m_sql"] = "CarrierDunns_Number";
$proto60["m_srcTableName"] = "tbl_company";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierInsuranceCargoPolicyNumber",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto62["m_sql"] = "CarrierInsuranceCargoPolicyNumber";
$proto62["m_srcTableName"] = "tbl_company";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierInsuranceCargoAmount",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto64["m_sql"] = "CarrierInsuranceCargoAmount";
$proto64["m_srcTableName"] = "tbl_company";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierInsuranceCargoStartDate",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto66["m_sql"] = "CarrierInsuranceCargoStartDate";
$proto66["m_srcTableName"] = "tbl_company";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierInsuranceCargoExpiryDate",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto68["m_sql"] = "CarrierInsuranceCargoExpiryDate";
$proto68["m_srcTableName"] = "tbl_company";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierInsuranceLiabilityPolicyNumber",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto70["m_sql"] = "CarrierInsuranceLiabilityPolicyNumber";
$proto70["m_srcTableName"] = "tbl_company";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierInsuranceLiabilityAmount",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto72["m_sql"] = "CarrierInsuranceLiabilityAmount";
$proto72["m_srcTableName"] = "tbl_company";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierInsuranceLiabilityStartDate",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto74["m_sql"] = "CarrierInsuranceLiabilityStartDate";
$proto74["m_srcTableName"] = "tbl_company";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierInsuranceLiabilityExpiryDate",
	"m_strTable" => "tbl_company",
	"m_srcTableName" => "tbl_company"
));

$proto76["m_sql"] = "CarrierInsuranceLiabilityExpiryDate";
$proto76["m_srcTableName"] = "tbl_company";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto78=array();
$proto78["m_link"] = "SQLL_MAIN";
			$proto79=array();
$proto79["m_strName"] = "tbl_company";
$proto79["m_srcTableName"] = "tbl_company";
$proto79["m_columns"] = array();
$proto79["m_columns"][] = "ID";
$proto79["m_columns"][] = "Type";
$proto79["m_columns"][] = "StageID";
$proto79["m_columns"][] = "Name";
$proto79["m_columns"][] = "CustomerNumber";
$proto79["m_columns"][] = "SalesRepID";
$proto79["m_columns"][] = "BusinessNumber";
$proto79["m_columns"][] = "ReferenceNumber";
$proto79["m_columns"][] = "CreditApprovalStatus";
$proto79["m_columns"][] = "Insurance";
$proto79["m_columns"][] = "CADBankInstitutionNumber";
$proto79["m_columns"][] = "CADBankroutingNumber";
$proto79["m_columns"][] = "CADBankAccountNumber";
$proto79["m_columns"][] = "INCOTermsID";
$proto79["m_columns"][] = "INCOTermsDescription";
$proto79["m_columns"][] = "PaymentTermsID";
$proto79["m_columns"][] = "PrimaryAddress1";
$proto79["m_columns"][] = "PrimaryAddress2";
$proto79["m_columns"][] = "PrimaryCity";
$proto79["m_columns"][] = "PrimaryPostalCode";
$proto79["m_columns"][] = "PrimaryProvince";
$proto79["m_columns"][] = "PrimaryCountry";
$proto79["m_columns"][] = "PrimaryPhone";
$proto79["m_columns"][] = "PrimaryFax";
$proto79["m_columns"][] = "Probability";
$proto79["m_columns"][] = "CloseDate";
$proto79["m_columns"][] = "Pipeline";
$proto79["m_columns"][] = "value";
$proto79["m_columns"][] = "Comments";
$proto79["m_columns"][] = "CarrierSCAC_Number";
$proto79["m_columns"][] = "CarrierDOT_Number";
$proto79["m_columns"][] = "CarrierMC_Number";
$proto79["m_columns"][] = "CarrierDunns_Number";
$proto79["m_columns"][] = "CompanyTimeStamp";
$proto79["m_columns"][] = "CarrierInsuranceCargoPolicyNumber";
$proto79["m_columns"][] = "CarrierInsuranceCargoAmount";
$proto79["m_columns"][] = "CarrierInsuranceCargoStartDate";
$proto79["m_columns"][] = "CarrierInsuranceCargoExpiryDate";
$proto79["m_columns"][] = "CarrierInsuranceLiabilityPolicyNumber";
$proto79["m_columns"][] = "CarrierInsuranceLiabilityAmount";
$proto79["m_columns"][] = "CarrierInsuranceLiabilityStartDate";
$proto79["m_columns"][] = "CarrierInsuranceLiabilityExpiryDate";
$obj = new SQLTable($proto79);

$proto78["m_table"] = $obj;
$proto78["m_sql"] = "tbl_company";
$proto78["m_alias"] = "";
$proto78["m_srcTableName"] = "tbl_company";
$proto80=array();
$proto80["m_sql"] = "";
$proto80["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto80["m_column"]=$obj;
$proto80["m_contained"] = array();
$proto80["m_strCase"] = "";
$proto80["m_havingmode"] = false;
$proto80["m_inBrackets"] = false;
$proto80["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto80);

$proto78["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto78);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_company";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_company = createSqlQuery_tbl_company();


	
		;

																																				

$tdatatbl_company[".sqlquery"] = $queryData_tbl_company;



include_once(getabspath("include/tbl_company_events.php"));
$tableEvents["tbl_company"] = new eventclass_tbl_company;
$tdatatbl_company[".hasEvents"] = true;

?>