<?php
$tdatatbl_address = array();
$tdatatbl_address[".searchableFields"] = array();
$tdatatbl_address[".ShortName"] = "tbl_address";
$tdatatbl_address[".OwnerID"] = "";
$tdatatbl_address[".OriginalTable"] = "tbl_address";


$tdatatbl_address[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_address[".originalPagesByType"] = $tdatatbl_address[".pagesByType"];
$tdatatbl_address[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_address[".originalPages"] = $tdatatbl_address[".pages"];
$tdatatbl_address[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_address[".originalDefaultPages"] = $tdatatbl_address[".defaultPages"];

//	field labels
$fieldLabelstbl_address = array();
$fieldToolTipstbl_address = array();
$pageTitlestbl_address = array();
$placeHolderstbl_address = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_address["English"] = array();
	$fieldToolTipstbl_address["English"] = array();
	$placeHolderstbl_address["English"] = array();
	$pageTitlestbl_address["English"] = array();
	$fieldLabelstbl_address["English"]["ID"] = "ID";
	$fieldToolTipstbl_address["English"]["ID"] = "";
	$placeHolderstbl_address["English"]["ID"] = "";
	$fieldLabelstbl_address["English"]["Description"] = "Description";
	$fieldToolTipstbl_address["English"]["Description"] = "";
	$placeHolderstbl_address["English"]["Description"] = "";
	$fieldLabelstbl_address["English"]["Address1"] = "Address1";
	$fieldToolTipstbl_address["English"]["Address1"] = "";
	$placeHolderstbl_address["English"]["Address1"] = "";
	$fieldLabelstbl_address["English"]["Address2"] = "Address2";
	$fieldToolTipstbl_address["English"]["Address2"] = "";
	$placeHolderstbl_address["English"]["Address2"] = "";
	$fieldLabelstbl_address["English"]["City"] = "City";
	$fieldToolTipstbl_address["English"]["City"] = "";
	$placeHolderstbl_address["English"]["City"] = "";
	$fieldLabelstbl_address["English"]["County"] = "County";
	$fieldToolTipstbl_address["English"]["County"] = "";
	$placeHolderstbl_address["English"]["County"] = "";
	$fieldLabelstbl_address["English"]["Longitude"] = "Longitude";
	$fieldToolTipstbl_address["English"]["Longitude"] = "";
	$placeHolderstbl_address["English"]["Longitude"] = "";
	$fieldLabelstbl_address["English"]["Latitude"] = "Latitude";
	$fieldToolTipstbl_address["English"]["Latitude"] = "";
	$placeHolderstbl_address["English"]["Latitude"] = "";
	$fieldLabelstbl_address["English"]["ProvinceID"] = "Province/State";
	$fieldToolTipstbl_address["English"]["ProvinceID"] = "";
	$placeHolderstbl_address["English"]["ProvinceID"] = "";
	$fieldLabelstbl_address["English"]["CountryID"] = "Country";
	$fieldToolTipstbl_address["English"]["CountryID"] = "";
	$placeHolderstbl_address["English"]["CountryID"] = "";
	$fieldLabelstbl_address["English"]["PostalCode"] = "Postal Code";
	$fieldToolTipstbl_address["English"]["PostalCode"] = "";
	$placeHolderstbl_address["English"]["PostalCode"] = "";
	$fieldLabelstbl_address["English"]["Comments"] = "Comments";
	$fieldToolTipstbl_address["English"]["Comments"] = "";
	$placeHolderstbl_address["English"]["Comments"] = "";
	$fieldLabelstbl_address["English"]["CompanyID"] = "Company";
	$fieldToolTipstbl_address["English"]["CompanyID"] = "";
	$placeHolderstbl_address["English"]["CompanyID"] = "";
	$fieldLabelstbl_address["English"]["AddressTypeID"] = "Address Type";
	$fieldToolTipstbl_address["English"]["AddressTypeID"] = "";
	$placeHolderstbl_address["English"]["AddressTypeID"] = "";
	$fieldLabelstbl_address["English"]["HoursOpen"] = "Open";
	$fieldToolTipstbl_address["English"]["HoursOpen"] = "";
	$placeHolderstbl_address["English"]["HoursOpen"] = "";
	$fieldLabelstbl_address["English"]["HoursClose"] = "Close";
	$fieldToolTipstbl_address["English"]["HoursClose"] = "";
	$placeHolderstbl_address["English"]["HoursClose"] = "";
	if (count($fieldToolTipstbl_address["English"]))
		$tdatatbl_address[".isUseToolTips"] = true;
}


	$tdatatbl_address[".NCSearch"] = true;



$tdatatbl_address[".shortTableName"] = "tbl_address";
$tdatatbl_address[".nSecOptions"] = 0;

$tdatatbl_address[".mainTableOwnerID"] = "";
$tdatatbl_address[".entityType"] = 0;
$tdatatbl_address[".connId"] = "logistics_at_localhost";


$tdatatbl_address[".strOriginalTableName"] = "tbl_address";

	



$tdatatbl_address[".showAddInPopup"] = false;

$tdatatbl_address[".showEditInPopup"] = false;

$tdatatbl_address[".showViewInPopup"] = false;

$tdatatbl_address[".listAjax"] = false;
//	temporary
//$tdatatbl_address[".listAjax"] = false;

	$tdatatbl_address[".audit"] = true;

	$tdatatbl_address[".locking"] = false;


$pages = $tdatatbl_address[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_address[".edit"] = true;
	$tdatatbl_address[".afterEditAction"] = 1;
	$tdatatbl_address[".closePopupAfterEdit"] = 1;
	$tdatatbl_address[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_address[".add"] = true;
$tdatatbl_address[".afterAddAction"] = 1;
$tdatatbl_address[".closePopupAfterAdd"] = 1;
$tdatatbl_address[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_address[".list"] = true;
}



$tdatatbl_address[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_address[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_address[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_address[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_address[".printFriendly"] = true;
}



$tdatatbl_address[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_address[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_address[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_address[".isUseAjaxSuggest"] = true;

$tdatatbl_address[".rowHighlite"] = true;



																																										

$tdatatbl_address[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_address[".buttonsAdded"] = false;

$tdatatbl_address[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_address[".isUseTimeForSearch"] = false;


$tdatatbl_address[".badgeColor"] = "8fbc8b";


$tdatatbl_address[".allSearchFields"] = array();
$tdatatbl_address[".filterFields"] = array();
$tdatatbl_address[".requiredSearchFields"] = array();

$tdatatbl_address[".googleLikeFields"] = array();
$tdatatbl_address[".googleLikeFields"][] = "ID";
$tdatatbl_address[".googleLikeFields"][] = "CompanyID";
$tdatatbl_address[".googleLikeFields"][] = "AddressTypeID";
$tdatatbl_address[".googleLikeFields"][] = "Description";
$tdatatbl_address[".googleLikeFields"][] = "Address1";
$tdatatbl_address[".googleLikeFields"][] = "Address2";
$tdatatbl_address[".googleLikeFields"][] = "City";
$tdatatbl_address[".googleLikeFields"][] = "County";
$tdatatbl_address[".googleLikeFields"][] = "Longitude";
$tdatatbl_address[".googleLikeFields"][] = "Latitude";
$tdatatbl_address[".googleLikeFields"][] = "ProvinceID";
$tdatatbl_address[".googleLikeFields"][] = "CountryID";
$tdatatbl_address[".googleLikeFields"][] = "PostalCode";
$tdatatbl_address[".googleLikeFields"][] = "HoursOpen";
$tdatatbl_address[".googleLikeFields"][] = "HoursClose";
$tdatatbl_address[".googleLikeFields"][] = "Comments";



$tdatatbl_address[".tableType"] = "list";

$tdatatbl_address[".printerPageOrientation"] = 0;
$tdatatbl_address[".nPrinterPageScale"] = 100;

$tdatatbl_address[".nPrinterSplitRecords"] = 40;

$tdatatbl_address[".geocodingEnabled"] = false;










$tdatatbl_address[".pageSize"] = 20;

$tdatatbl_address[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_address[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_address[".orderindexes"] = array();


$tdatatbl_address[".sqlHead"] = "SELECT ID,  	CompanyID,  	AddressTypeID,  	Description,  	Address1,  	Address2,  	City,  	County,  	Longitude,  	Latitude,  	ProvinceID,  	CountryID,  	PostalCode,  	HoursOpen,  	HoursClose,  	Comments";
$tdatatbl_address[".sqlFrom"] = "FROM tbl_address";
$tdatatbl_address[".sqlWhereExpr"] = "";
$tdatatbl_address[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_address[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_address[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_address[".highlightSearchResults"] = true;

$tableKeystbl_address = array();
$tableKeystbl_address[] = "ID";
$tdatatbl_address[".Keys"] = $tableKeystbl_address;


$tdatatbl_address[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_address";
	$fdata["Label"] = GetFieldLabel("tbl_address","ID");
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


	$tdatatbl_address["ID"] = $fdata;
		$tdatatbl_address[".searchableFields"][] = "ID";
//	CompanyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CompanyID";
	$fdata["GoodName"] = "CompanyID";
	$fdata["ownerTable"] = "tbl_address";
	$fdata["Label"] = GetFieldLabel("tbl_address","CompanyID");
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


	$tdatatbl_address["CompanyID"] = $fdata;
		$tdatatbl_address[".searchableFields"][] = "CompanyID";
//	AddressTypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AddressTypeID";
	$fdata["GoodName"] = "AddressTypeID";
	$fdata["ownerTable"] = "tbl_address";
	$fdata["Label"] = GetFieldLabel("tbl_address","AddressTypeID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AddressTypeID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AddressTypeID";

	
	
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
	$edata["LookupTable"] = "tbl_address_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "AddressTypeDescription";

	

	
	$edata["LookupOrderBy"] = "ID";

	
	
	
	

	
	
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


	$tdatatbl_address["AddressTypeID"] = $fdata;
		$tdatatbl_address[".searchableFields"][] = "AddressTypeID";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "tbl_address";
	$fdata["Label"] = GetFieldLabel("tbl_address","Description");
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


	$tdatatbl_address["Description"] = $fdata;
		$tdatatbl_address[".searchableFields"][] = "Description";
//	Address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Address1";
	$fdata["GoodName"] = "Address1";
	$fdata["ownerTable"] = "tbl_address";
	$fdata["Label"] = GetFieldLabel("tbl_address","Address1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Address1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Address1";

	
	
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


	$tdatatbl_address["Address1"] = $fdata;
		$tdatatbl_address[".searchableFields"][] = "Address1";
//	Address2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Address2";
	$fdata["GoodName"] = "Address2";
	$fdata["ownerTable"] = "tbl_address";
	$fdata["Label"] = GetFieldLabel("tbl_address","Address2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Address2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Address2";

	
	
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


	$tdatatbl_address["Address2"] = $fdata;
		$tdatatbl_address[".searchableFields"][] = "Address2";
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "tbl_address";
	$fdata["Label"] = GetFieldLabel("tbl_address","City");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "City";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "City";

	
	
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


	$tdatatbl_address["City"] = $fdata;
		$tdatatbl_address[".searchableFields"][] = "City";
//	County
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "County";
	$fdata["GoodName"] = "County";
	$fdata["ownerTable"] = "tbl_address";
	$fdata["Label"] = GetFieldLabel("tbl_address","County");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "County";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "County";

	
	
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
	$edata["LookupTable"] = "tbl_county";
			$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "CountyName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CountyName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatatbl_address["County"] = $fdata;
		$tdatatbl_address[".searchableFields"][] = "County";
//	Longitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Longitude";
	$fdata["GoodName"] = "Longitude";
	$fdata["ownerTable"] = "tbl_address";
	$fdata["Label"] = GetFieldLabel("tbl_address","Longitude");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Longitude";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Longitude";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 8;

	
	
	
	
		
	
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


	$tdatatbl_address["Longitude"] = $fdata;
		$tdatatbl_address[".searchableFields"][] = "Longitude";
//	Latitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Latitude";
	$fdata["GoodName"] = "Latitude";
	$fdata["ownerTable"] = "tbl_address";
	$fdata["Label"] = GetFieldLabel("tbl_address","Latitude");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Latitude";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Latitude";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 8;

	
	
	
	
		
	
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


	$tdatatbl_address["Latitude"] = $fdata;
		$tdatatbl_address[".searchableFields"][] = "Latitude";
//	ProvinceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ProvinceID";
	$fdata["GoodName"] = "ProvinceID";
	$fdata["ownerTable"] = "tbl_address";
	$fdata["Label"] = GetFieldLabel("tbl_address","ProvinceID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ProvinceID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProvinceID";

	
	
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ProvinceID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	

	
	$edata["LookupOrderBy"] = "Name";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "CountryID", "lookup" => "CountryID" );

	
	

	
	
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


	$tdatatbl_address["ProvinceID"] = $fdata;
		$tdatatbl_address[".searchableFields"][] = "ProvinceID";
//	CountryID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "CountryID";
	$fdata["GoodName"] = "CountryID";
	$fdata["ownerTable"] = "tbl_address";
	$fdata["Label"] = GetFieldLabel("tbl_address","CountryID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CountryID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CountryID";

	
	
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	

	
	$edata["LookupOrderBy"] = "Name";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "ProvinceID";

	
	
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


	$tdatatbl_address["CountryID"] = $fdata;
		$tdatatbl_address[".searchableFields"][] = "CountryID";
//	PostalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PostalCode";
	$fdata["GoodName"] = "PostalCode";
	$fdata["ownerTable"] = "tbl_address";
	$fdata["Label"] = GetFieldLabel("tbl_address","PostalCode");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PostalCode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PostalCode";

	
	
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


	$tdatatbl_address["PostalCode"] = $fdata;
		$tdatatbl_address[".searchableFields"][] = "PostalCode";
//	HoursOpen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "HoursOpen";
	$fdata["GoodName"] = "HoursOpen";
	$fdata["ownerTable"] = "tbl_address";
	$fdata["Label"] = GetFieldLabel("tbl_address","HoursOpen");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "HoursOpen";

		$fdata["sourceSingle"] = "HoursOpen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HoursOpen";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatatbl_address["HoursOpen"] = $fdata;
		$tdatatbl_address[".searchableFields"][] = "HoursOpen";
//	HoursClose
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "HoursClose";
	$fdata["GoodName"] = "HoursClose";
	$fdata["ownerTable"] = "tbl_address";
	$fdata["Label"] = GetFieldLabel("tbl_address","HoursClose");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "HoursClose";

		$fdata["sourceSingle"] = "HoursClose";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HoursClose";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatatbl_address["HoursClose"] = $fdata;
		$tdatatbl_address[".searchableFields"][] = "HoursClose";
//	Comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Comments";
	$fdata["GoodName"] = "Comments";
	$fdata["ownerTable"] = "tbl_address";
	$fdata["Label"] = GetFieldLabel("tbl_address","Comments");
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
		$fdata["defaultSearchOption"] = "NOT Empty";

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


	$tdatatbl_address["Comments"] = $fdata;
		$tdatatbl_address[".searchableFields"][] = "Comments";


$tables_data["tbl_address"]=&$tdatatbl_address;
$field_labels["tbl_address"] = &$fieldLabelstbl_address;
$fieldToolTips["tbl_address"] = &$fieldToolTipstbl_address;
$placeHolders["tbl_address"] = &$placeHolderstbl_address;
$page_titles["tbl_address"] = &$pageTitlestbl_address;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_address"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_address"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tbl_company";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_company";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_company";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_address"][0] = $masterParams;
				$masterTablesData["tbl_address"][0]["masterKeys"] = array();
	$masterTablesData["tbl_address"][0]["masterKeys"][]="ID";
				$masterTablesData["tbl_address"][0]["detailKeys"] = array();
	$masterTablesData["tbl_address"][0]["detailKeys"][]="CompanyID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_address()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	CompanyID,  	AddressTypeID,  	Description,  	Address1,  	Address2,  	City,  	County,  	Longitude,  	Latitude,  	ProvinceID,  	CountryID,  	PostalCode,  	HoursOpen,  	HoursClose,  	Comments";
$proto0["m_strFrom"] = "FROM tbl_address";
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
	"m_strTable" => "tbl_address",
	"m_srcTableName" => "tbl_address"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_address";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CompanyID",
	"m_strTable" => "tbl_address",
	"m_srcTableName" => "tbl_address"
));

$proto8["m_sql"] = "CompanyID";
$proto8["m_srcTableName"] = "tbl_address";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AddressTypeID",
	"m_strTable" => "tbl_address",
	"m_srcTableName" => "tbl_address"
));

$proto10["m_sql"] = "AddressTypeID";
$proto10["m_srcTableName"] = "tbl_address";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "tbl_address",
	"m_srcTableName" => "tbl_address"
));

$proto12["m_sql"] = "Description";
$proto12["m_srcTableName"] = "tbl_address";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Address1",
	"m_strTable" => "tbl_address",
	"m_srcTableName" => "tbl_address"
));

$proto14["m_sql"] = "Address1";
$proto14["m_srcTableName"] = "tbl_address";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Address2",
	"m_strTable" => "tbl_address",
	"m_srcTableName" => "tbl_address"
));

$proto16["m_sql"] = "Address2";
$proto16["m_srcTableName"] = "tbl_address";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "tbl_address",
	"m_srcTableName" => "tbl_address"
));

$proto18["m_sql"] = "City";
$proto18["m_srcTableName"] = "tbl_address";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "County",
	"m_strTable" => "tbl_address",
	"m_srcTableName" => "tbl_address"
));

$proto20["m_sql"] = "County";
$proto20["m_srcTableName"] = "tbl_address";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Longitude",
	"m_strTable" => "tbl_address",
	"m_srcTableName" => "tbl_address"
));

$proto22["m_sql"] = "Longitude";
$proto22["m_srcTableName"] = "tbl_address";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Latitude",
	"m_strTable" => "tbl_address",
	"m_srcTableName" => "tbl_address"
));

$proto24["m_sql"] = "Latitude";
$proto24["m_srcTableName"] = "tbl_address";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ProvinceID",
	"m_strTable" => "tbl_address",
	"m_srcTableName" => "tbl_address"
));

$proto26["m_sql"] = "ProvinceID";
$proto26["m_srcTableName"] = "tbl_address";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "CountryID",
	"m_strTable" => "tbl_address",
	"m_srcTableName" => "tbl_address"
));

$proto28["m_sql"] = "CountryID";
$proto28["m_srcTableName"] = "tbl_address";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "PostalCode",
	"m_strTable" => "tbl_address",
	"m_srcTableName" => "tbl_address"
));

$proto30["m_sql"] = "PostalCode";
$proto30["m_srcTableName"] = "tbl_address";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "HoursOpen",
	"m_strTable" => "tbl_address",
	"m_srcTableName" => "tbl_address"
));

$proto32["m_sql"] = "HoursOpen";
$proto32["m_srcTableName"] = "tbl_address";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "HoursClose",
	"m_strTable" => "tbl_address",
	"m_srcTableName" => "tbl_address"
));

$proto34["m_sql"] = "HoursClose";
$proto34["m_srcTableName"] = "tbl_address";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Comments",
	"m_strTable" => "tbl_address",
	"m_srcTableName" => "tbl_address"
));

$proto36["m_sql"] = "Comments";
$proto36["m_srcTableName"] = "tbl_address";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "tbl_address";
$proto39["m_srcTableName"] = "tbl_address";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "ID";
$proto39["m_columns"][] = "CompanyID";
$proto39["m_columns"][] = "AddressTypeID";
$proto39["m_columns"][] = "Description";
$proto39["m_columns"][] = "Address1";
$proto39["m_columns"][] = "Address2";
$proto39["m_columns"][] = "City";
$proto39["m_columns"][] = "County";
$proto39["m_columns"][] = "Longitude";
$proto39["m_columns"][] = "Latitude";
$proto39["m_columns"][] = "ProvinceID";
$proto39["m_columns"][] = "CountryID";
$proto39["m_columns"][] = "PostalCode";
$proto39["m_columns"][] = "HoursOpen";
$proto39["m_columns"][] = "HoursClose";
$proto39["m_columns"][] = "Comments";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "tbl_address";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "tbl_address";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_address";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_address = createSqlQuery_tbl_address();


	
		;

																

$tdatatbl_address[".sqlquery"] = $queryData_tbl_address;



$tableEvents["tbl_address"] = new eventsBase;
$tdatatbl_address[".hasEvents"] = false;

?>