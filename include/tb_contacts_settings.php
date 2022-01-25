<?php
$tdatatb_contacts = array();
$tdatatb_contacts[".searchableFields"] = array();
$tdatatb_contacts[".ShortName"] = "tb_contacts";
$tdatatb_contacts[".OwnerID"] = "";
$tdatatb_contacts[".OriginalTable"] = "tb_contacts";


$tdatatb_contacts[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatb_contacts[".originalPagesByType"] = $tdatatb_contacts[".pagesByType"];
$tdatatb_contacts[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatb_contacts[".originalPages"] = $tdatatb_contacts[".pages"];
$tdatatb_contacts[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatb_contacts[".originalDefaultPages"] = $tdatatb_contacts[".defaultPages"];

//	field labels
$fieldLabelstb_contacts = array();
$fieldToolTipstb_contacts = array();
$pageTitlestb_contacts = array();
$placeHolderstb_contacts = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_contacts["English"] = array();
	$fieldToolTipstb_contacts["English"] = array();
	$placeHolderstb_contacts["English"] = array();
	$pageTitlestb_contacts["English"] = array();
	$fieldLabelstb_contacts["English"]["ID"] = "ID";
	$fieldToolTipstb_contacts["English"]["ID"] = "";
	$placeHolderstb_contacts["English"]["ID"] = "";
	$fieldLabelstb_contacts["English"]["CompanyID"] = "Company";
	$fieldToolTipstb_contacts["English"]["CompanyID"] = "";
	$placeHolderstb_contacts["English"]["CompanyID"] = "";
	$fieldLabelstb_contacts["English"]["ContactName"] = "Contact Name";
	$fieldToolTipstb_contacts["English"]["ContactName"] = "";
	$placeHolderstb_contacts["English"]["ContactName"] = "";
	$fieldLabelstb_contacts["English"]["ContactTitle"] = "Contact Title";
	$fieldToolTipstb_contacts["English"]["ContactTitle"] = "";
	$placeHolderstb_contacts["English"]["ContactTitle"] = "";
	$fieldLabelstb_contacts["English"]["ContactPrimaryEmail"] = "Contact Primary Email";
	$fieldToolTipstb_contacts["English"]["ContactPrimaryEmail"] = "";
	$placeHolderstb_contacts["English"]["ContactPrimaryEmail"] = "";
	$fieldLabelstb_contacts["English"]["ContactPrimaryPhone"] = "Contact Primary Phone";
	$fieldToolTipstb_contacts["English"]["ContactPrimaryPhone"] = "";
	$placeHolderstb_contacts["English"]["ContactPrimaryPhone"] = "";
	$fieldLabelstb_contacts["English"]["LeadSourceID"] = "Lead Source";
	$fieldToolTipstb_contacts["English"]["LeadSourceID"] = "";
	$placeHolderstb_contacts["English"]["LeadSourceID"] = "";
	$fieldLabelstb_contacts["English"]["UserID"] = "User ID";
	$fieldToolTipstb_contacts["English"]["UserID"] = "";
	$placeHolderstb_contacts["English"]["UserID"] = "";
	$fieldLabelstb_contacts["English"]["AddressID"] = "Address";
	$fieldToolTipstb_contacts["English"]["AddressID"] = "";
	$placeHolderstb_contacts["English"]["AddressID"] = "";
	if (count($fieldToolTipstb_contacts["English"]))
		$tdatatb_contacts[".isUseToolTips"] = true;
}


	$tdatatb_contacts[".NCSearch"] = true;



$tdatatb_contacts[".shortTableName"] = "tb_contacts";
$tdatatb_contacts[".nSecOptions"] = 0;

$tdatatb_contacts[".mainTableOwnerID"] = "";
$tdatatb_contacts[".entityType"] = 0;
$tdatatb_contacts[".connId"] = "logistics_at_localhost";


$tdatatb_contacts[".strOriginalTableName"] = "tb_contacts";

	



$tdatatb_contacts[".showAddInPopup"] = false;

$tdatatb_contacts[".showEditInPopup"] = false;

$tdatatb_contacts[".showViewInPopup"] = false;

	$tdatatb_contacts[".listAjax"] = true;
//	temporary
//$tdatatb_contacts[".listAjax"] = false;

	$tdatatb_contacts[".audit"] = true;

	$tdatatb_contacts[".locking"] = false;


$pages = $tdatatb_contacts[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_contacts[".edit"] = true;
	$tdatatb_contacts[".afterEditAction"] = 1;
	$tdatatb_contacts[".closePopupAfterEdit"] = 1;
	$tdatatb_contacts[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_contacts[".add"] = true;
$tdatatb_contacts[".afterAddAction"] = 1;
$tdatatb_contacts[".closePopupAfterAdd"] = 1;
$tdatatb_contacts[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_contacts[".list"] = true;
}



$tdatatb_contacts[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_contacts[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_contacts[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_contacts[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_contacts[".printFriendly"] = true;
}



$tdatatb_contacts[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_contacts[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_contacts[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_contacts[".isUseAjaxSuggest"] = true;

$tdatatb_contacts[".rowHighlite"] = true;



																																										

$tdatatb_contacts[".ajaxCodeSnippetAdded"] = false;

$tdatatb_contacts[".buttonsAdded"] = false;

$tdatatb_contacts[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_contacts[".isUseTimeForSearch"] = false;


$tdatatb_contacts[".badgeColor"] = "7b68ee";


$tdatatb_contacts[".allSearchFields"] = array();
$tdatatb_contacts[".filterFields"] = array();
$tdatatb_contacts[".requiredSearchFields"] = array();

$tdatatb_contacts[".googleLikeFields"] = array();
$tdatatb_contacts[".googleLikeFields"][] = "ID";
$tdatatb_contacts[".googleLikeFields"][] = "CompanyID";
$tdatatb_contacts[".googleLikeFields"][] = "AddressID";
$tdatatb_contacts[".googleLikeFields"][] = "UserID";
$tdatatb_contacts[".googleLikeFields"][] = "ContactName";
$tdatatb_contacts[".googleLikeFields"][] = "ContactTitle";
$tdatatb_contacts[".googleLikeFields"][] = "ContactPrimaryEmail";
$tdatatb_contacts[".googleLikeFields"][] = "ContactPrimaryPhone";
$tdatatb_contacts[".googleLikeFields"][] = "LeadSourceID";



$tdatatb_contacts[".tableType"] = "list";

$tdatatb_contacts[".printerPageOrientation"] = 0;
$tdatatb_contacts[".nPrinterPageScale"] = 100;

$tdatatb_contacts[".nPrinterSplitRecords"] = 40;

$tdatatb_contacts[".geocodingEnabled"] = false;










$tdatatb_contacts[".pageSize"] = 20;

$tdatatb_contacts[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_contacts[".strOrderBy"] = $tstrOrderBy;

$tdatatb_contacts[".orderindexes"] = array();


$tdatatb_contacts[".sqlHead"] = "SELECT ID,  	CompanyID,  	AddressID,  	UserID,  	ContactName,  	ContactTitle,  	ContactPrimaryEmail,  	ContactPrimaryPhone,  	LeadSourceID";
$tdatatb_contacts[".sqlFrom"] = "FROM tb_contacts";
$tdatatb_contacts[".sqlWhereExpr"] = "";
$tdatatb_contacts[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_contacts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_contacts[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_contacts[".highlightSearchResults"] = true;

$tableKeystb_contacts = array();
$tableKeystb_contacts[] = "ID";
$tdatatb_contacts[".Keys"] = $tableKeystb_contacts;


$tdatatb_contacts[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tb_contacts";
	$fdata["Label"] = GetFieldLabel("tb_contacts","ID");
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


	$tdatatb_contacts["ID"] = $fdata;
		$tdatatb_contacts[".searchableFields"][] = "ID";
//	CompanyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CompanyID";
	$fdata["GoodName"] = "CompanyID";
	$fdata["ownerTable"] = "tb_contacts";
	$fdata["Label"] = GetFieldLabel("tb_contacts","CompanyID");
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

	

	
	$edata["LookupOrderBy"] = "Name";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "AddressID";

	
	
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


	$tdatatb_contacts["CompanyID"] = $fdata;
		$tdatatb_contacts[".searchableFields"][] = "CompanyID";
//	AddressID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AddressID";
	$fdata["GoodName"] = "AddressID";
	$fdata["ownerTable"] = "tb_contacts";
	$fdata["Label"] = GetFieldLabel("tb_contacts","AddressID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AddressID";

		$fdata["sourceSingle"] = "AddressID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AddressID";

	
	
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
	$edata["LookupTable"] = "tbl_address1";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "address";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "CompanyID", "lookup" => "CompanyID" );

	
	

	
	
	
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


	$tdatatb_contacts["AddressID"] = $fdata;
		$tdatatb_contacts[".searchableFields"][] = "AddressID";
//	UserID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "UserID";
	$fdata["GoodName"] = "UserID";
	$fdata["ownerTable"] = "tb_contacts";
	$fdata["Label"] = GetFieldLabel("tb_contacts","UserID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "UserID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserID";

	
	
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


	$tdatatb_contacts["UserID"] = $fdata;
		$tdatatb_contacts[".searchableFields"][] = "UserID";
//	ContactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ContactName";
	$fdata["GoodName"] = "ContactName";
	$fdata["ownerTable"] = "tb_contacts";
	$fdata["Label"] = GetFieldLabel("tb_contacts","ContactName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ContactName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ContactName";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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
		$fdata["filterTotalFields"] = "ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_contacts["ContactName"] = $fdata;
		$tdatatb_contacts[".searchableFields"][] = "ContactName";
//	ContactTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ContactTitle";
	$fdata["GoodName"] = "ContactTitle";
	$fdata["ownerTable"] = "tb_contacts";
	$fdata["Label"] = GetFieldLabel("tb_contacts","ContactTitle");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ContactTitle";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ContactTitle";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdatatb_contacts["ContactTitle"] = $fdata;
		$tdatatb_contacts[".searchableFields"][] = "ContactTitle";
//	ContactPrimaryEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ContactPrimaryEmail";
	$fdata["GoodName"] = "ContactPrimaryEmail";
	$fdata["ownerTable"] = "tb_contacts";
	$fdata["Label"] = GetFieldLabel("tb_contacts","ContactPrimaryEmail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ContactPrimaryEmail";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ContactPrimaryEmail";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Email Hyperlink");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
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
		$fdata["filterTotalFields"] = "ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_contacts["ContactPrimaryEmail"] = $fdata;
		$tdatatb_contacts[".searchableFields"][] = "ContactPrimaryEmail";
//	ContactPrimaryPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ContactPrimaryPhone";
	$fdata["GoodName"] = "ContactPrimaryPhone";
	$fdata["ownerTable"] = "tb_contacts";
	$fdata["Label"] = GetFieldLabel("tb_contacts","ContactPrimaryPhone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ContactPrimaryPhone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ContactPrimaryPhone";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Phone Number");

	
	
	
	
	
	
	
	
	
	
	
		
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatb_contacts["ContactPrimaryPhone"] = $fdata;
		$tdatatb_contacts[".searchableFields"][] = "ContactPrimaryPhone";
//	LeadSourceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "LeadSourceID";
	$fdata["GoodName"] = "LeadSourceID";
	$fdata["ownerTable"] = "tb_contacts";
	$fdata["Label"] = GetFieldLabel("tb_contacts","LeadSourceID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "LeadSourceID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LeadSourceID";

	
	
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


	$tdatatb_contacts["LeadSourceID"] = $fdata;
		$tdatatb_contacts[".searchableFields"][] = "LeadSourceID";


$tables_data["tb_contacts"]=&$tdatatb_contacts;
$field_labels["tb_contacts"] = &$fieldLabelstb_contacts;
$fieldToolTips["tb_contacts"] = &$fieldToolTipstb_contacts;
$placeHolders["tb_contacts"] = &$placeHolderstb_contacts;
$page_titles["tb_contacts"] = &$pageTitlestb_contacts;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tb_contacts"] = array();
//	tb_contacts_emails
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tb_contacts_emails";
		$detailsParam["dOriginalTable"] = "tb_contacts_emails";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tb_contacts_emails";
	$detailsParam["dCaptionTable"] = GetTableCaption("tb_contacts_emails");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tb_contacts"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tb_contacts"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tb_contacts"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["tb_contacts"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tb_contacts"][$dIndex]["detailKeys"][]="ContactID";
//	tb_contacts_phones
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tb_contacts_phones";
		$detailsParam["dOriginalTable"] = "tb_contacts_phones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tb_contacts_phones";
	$detailsParam["dCaptionTable"] = GetTableCaption("tb_contacts_phones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tb_contacts"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tb_contacts"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tb_contacts"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["tb_contacts"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tb_contacts"][$dIndex]["detailKeys"][]="ContactID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tb_contacts"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tbl_company";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_company";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_company";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tb_contacts"][0] = $masterParams;
				$masterTablesData["tb_contacts"][0]["masterKeys"] = array();
	$masterTablesData["tb_contacts"][0]["masterKeys"][]="ID";
				$masterTablesData["tb_contacts"][0]["detailKeys"] = array();
	$masterTablesData["tb_contacts"][0]["detailKeys"][]="CompanyID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tb_contacts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	CompanyID,  	AddressID,  	UserID,  	ContactName,  	ContactTitle,  	ContactPrimaryEmail,  	ContactPrimaryPhone,  	LeadSourceID";
$proto0["m_strFrom"] = "FROM tb_contacts";
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
	"m_strTable" => "tb_contacts",
	"m_srcTableName" => "tb_contacts"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tb_contacts";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CompanyID",
	"m_strTable" => "tb_contacts",
	"m_srcTableName" => "tb_contacts"
));

$proto8["m_sql"] = "CompanyID";
$proto8["m_srcTableName"] = "tb_contacts";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AddressID",
	"m_strTable" => "tb_contacts",
	"m_srcTableName" => "tb_contacts"
));

$proto10["m_sql"] = "AddressID";
$proto10["m_srcTableName"] = "tb_contacts";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "UserID",
	"m_strTable" => "tb_contacts",
	"m_srcTableName" => "tb_contacts"
));

$proto12["m_sql"] = "UserID";
$proto12["m_srcTableName"] = "tb_contacts";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ContactName",
	"m_strTable" => "tb_contacts",
	"m_srcTableName" => "tb_contacts"
));

$proto14["m_sql"] = "ContactName";
$proto14["m_srcTableName"] = "tb_contacts";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ContactTitle",
	"m_strTable" => "tb_contacts",
	"m_srcTableName" => "tb_contacts"
));

$proto16["m_sql"] = "ContactTitle";
$proto16["m_srcTableName"] = "tb_contacts";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ContactPrimaryEmail",
	"m_strTable" => "tb_contacts",
	"m_srcTableName" => "tb_contacts"
));

$proto18["m_sql"] = "ContactPrimaryEmail";
$proto18["m_srcTableName"] = "tb_contacts";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ContactPrimaryPhone",
	"m_strTable" => "tb_contacts",
	"m_srcTableName" => "tb_contacts"
));

$proto20["m_sql"] = "ContactPrimaryPhone";
$proto20["m_srcTableName"] = "tb_contacts";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "LeadSourceID",
	"m_strTable" => "tb_contacts",
	"m_srcTableName" => "tb_contacts"
));

$proto22["m_sql"] = "LeadSourceID";
$proto22["m_srcTableName"] = "tb_contacts";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "tb_contacts";
$proto25["m_srcTableName"] = "tb_contacts";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "ID";
$proto25["m_columns"][] = "CompanyID";
$proto25["m_columns"][] = "AddressID";
$proto25["m_columns"][] = "UserID";
$proto25["m_columns"][] = "ContactName";
$proto25["m_columns"][] = "ContactTitle";
$proto25["m_columns"][] = "ContactPrimaryEmail";
$proto25["m_columns"][] = "ContactPrimaryPhone";
$proto25["m_columns"][] = "LeadSourceID";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "tb_contacts";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "tb_contacts";
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
$proto0["m_srcTableName"]="tb_contacts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_contacts = createSqlQuery_tb_contacts();


	
		;

									

$tdatatb_contacts[".sqlquery"] = $queryData_tb_contacts;



$tableEvents["tb_contacts"] = new eventsBase;
$tdatatb_contacts[".hasEvents"] = false;

?>