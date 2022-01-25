<?php
$tdatavw_company_addressbook = array();
$tdatavw_company_addressbook[".searchableFields"] = array();
$tdatavw_company_addressbook[".ShortName"] = "vw_company_addressbook";
$tdatavw_company_addressbook[".OwnerID"] = "";
$tdatavw_company_addressbook[".OriginalTable"] = "vw_company_addressbook";


$tdatavw_company_addressbook[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatavw_company_addressbook[".originalPagesByType"] = $tdatavw_company_addressbook[".pagesByType"];
$tdatavw_company_addressbook[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatavw_company_addressbook[".originalPages"] = $tdatavw_company_addressbook[".pages"];
$tdatavw_company_addressbook[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatavw_company_addressbook[".originalDefaultPages"] = $tdatavw_company_addressbook[".defaultPages"];

//	field labels
$fieldLabelsvw_company_addressbook = array();
$fieldToolTipsvw_company_addressbook = array();
$pageTitlesvw_company_addressbook = array();
$placeHoldersvw_company_addressbook = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_company_addressbook["English"] = array();
	$fieldToolTipsvw_company_addressbook["English"] = array();
	$placeHoldersvw_company_addressbook["English"] = array();
	$pageTitlesvw_company_addressbook["English"] = array();
	$fieldLabelsvw_company_addressbook["English"]["AddressID"] = "Address ID";
	$fieldToolTipsvw_company_addressbook["English"]["AddressID"] = "";
	$placeHoldersvw_company_addressbook["English"]["AddressID"] = "";
	$fieldLabelsvw_company_addressbook["English"]["CompanyID"] = "Company ID";
	$fieldToolTipsvw_company_addressbook["English"]["CompanyID"] = "";
	$placeHoldersvw_company_addressbook["English"]["CompanyID"] = "";
	$fieldLabelsvw_company_addressbook["English"]["Name"] = "Name";
	$fieldToolTipsvw_company_addressbook["English"]["Name"] = "";
	$placeHoldersvw_company_addressbook["English"]["Name"] = "";
	$fieldLabelsvw_company_addressbook["English"]["AddressType"] = "Address Type";
	$fieldToolTipsvw_company_addressbook["English"]["AddressType"] = "";
	$placeHoldersvw_company_addressbook["English"]["AddressType"] = "";
	$fieldLabelsvw_company_addressbook["English"]["Description"] = "Description";
	$fieldToolTipsvw_company_addressbook["English"]["Description"] = "";
	$placeHoldersvw_company_addressbook["English"]["Description"] = "";
	$fieldLabelsvw_company_addressbook["English"]["Address1"] = "Address1";
	$fieldToolTipsvw_company_addressbook["English"]["Address1"] = "";
	$placeHoldersvw_company_addressbook["English"]["Address1"] = "";
	$fieldLabelsvw_company_addressbook["English"]["City"] = "City";
	$fieldToolTipsvw_company_addressbook["English"]["City"] = "";
	$placeHoldersvw_company_addressbook["English"]["City"] = "";
	$fieldLabelsvw_company_addressbook["English"]["countryname"] = "Countryname";
	$fieldToolTipsvw_company_addressbook["English"]["countryname"] = "";
	$placeHoldersvw_company_addressbook["English"]["countryname"] = "";
	$fieldLabelsvw_company_addressbook["English"]["provincename"] = "Provincename";
	$fieldToolTipsvw_company_addressbook["English"]["provincename"] = "";
	$placeHoldersvw_company_addressbook["English"]["provincename"] = "";
	$fieldLabelsvw_company_addressbook["English"]["PostalCode"] = "Postal Code";
	$fieldToolTipsvw_company_addressbook["English"]["PostalCode"] = "";
	$placeHoldersvw_company_addressbook["English"]["PostalCode"] = "";
	$fieldLabelsvw_company_addressbook["English"]["Address2"] = "Address2";
	$fieldToolTipsvw_company_addressbook["English"]["Address2"] = "";
	$placeHoldersvw_company_addressbook["English"]["Address2"] = "";
	if (count($fieldToolTipsvw_company_addressbook["English"]))
		$tdatavw_company_addressbook[".isUseToolTips"] = true;
}


	$tdatavw_company_addressbook[".NCSearch"] = true;



$tdatavw_company_addressbook[".shortTableName"] = "vw_company_addressbook";
$tdatavw_company_addressbook[".nSecOptions"] = 0;

$tdatavw_company_addressbook[".mainTableOwnerID"] = "";
$tdatavw_company_addressbook[".entityType"] = 0;
$tdatavw_company_addressbook[".connId"] = "logistics_at_localhost";


$tdatavw_company_addressbook[".strOriginalTableName"] = "vw_company_addressbook";

	



$tdatavw_company_addressbook[".showAddInPopup"] = false;

$tdatavw_company_addressbook[".showEditInPopup"] = false;

$tdatavw_company_addressbook[".showViewInPopup"] = false;

$tdatavw_company_addressbook[".listAjax"] = false;
//	temporary
//$tdatavw_company_addressbook[".listAjax"] = false;

	$tdatavw_company_addressbook[".audit"] = false;

	$tdatavw_company_addressbook[".locking"] = false;


$pages = $tdatavw_company_addressbook[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavw_company_addressbook[".edit"] = true;
	$tdatavw_company_addressbook[".afterEditAction"] = 1;
	$tdatavw_company_addressbook[".closePopupAfterEdit"] = 1;
	$tdatavw_company_addressbook[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavw_company_addressbook[".add"] = true;
$tdatavw_company_addressbook[".afterAddAction"] = 1;
$tdatavw_company_addressbook[".closePopupAfterAdd"] = 1;
$tdatavw_company_addressbook[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavw_company_addressbook[".list"] = true;
}



$tdatavw_company_addressbook[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavw_company_addressbook[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavw_company_addressbook[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavw_company_addressbook[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavw_company_addressbook[".printFriendly"] = true;
}



$tdatavw_company_addressbook[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavw_company_addressbook[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavw_company_addressbook[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavw_company_addressbook[".isUseAjaxSuggest"] = true;

$tdatavw_company_addressbook[".rowHighlite"] = true;



																					

$tdatavw_company_addressbook[".ajaxCodeSnippetAdded"] = false;

$tdatavw_company_addressbook[".buttonsAdded"] = false;

$tdatavw_company_addressbook[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_company_addressbook[".isUseTimeForSearch"] = false;


$tdatavw_company_addressbook[".badgeColor"] = "00C2C5";


$tdatavw_company_addressbook[".allSearchFields"] = array();
$tdatavw_company_addressbook[".filterFields"] = array();
$tdatavw_company_addressbook[".requiredSearchFields"] = array();

$tdatavw_company_addressbook[".googleLikeFields"] = array();
$tdatavw_company_addressbook[".googleLikeFields"][] = "AddressID";
$tdatavw_company_addressbook[".googleLikeFields"][] = "CompanyID";
$tdatavw_company_addressbook[".googleLikeFields"][] = "Name";
$tdatavw_company_addressbook[".googleLikeFields"][] = "AddressType";
$tdatavw_company_addressbook[".googleLikeFields"][] = "Description";
$tdatavw_company_addressbook[".googleLikeFields"][] = "Address1";
$tdatavw_company_addressbook[".googleLikeFields"][] = "Address2";
$tdatavw_company_addressbook[".googleLikeFields"][] = "City";
$tdatavw_company_addressbook[".googleLikeFields"][] = "countryname";
$tdatavw_company_addressbook[".googleLikeFields"][] = "provincename";
$tdatavw_company_addressbook[".googleLikeFields"][] = "PostalCode";



$tdatavw_company_addressbook[".tableType"] = "list";

$tdatavw_company_addressbook[".printerPageOrientation"] = 0;
$tdatavw_company_addressbook[".nPrinterPageScale"] = 100;

$tdatavw_company_addressbook[".nPrinterSplitRecords"] = 40;

$tdatavw_company_addressbook[".geocodingEnabled"] = false;










$tdatavw_company_addressbook[".pageSize"] = 20;

$tdatavw_company_addressbook[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_company_addressbook[".strOrderBy"] = $tstrOrderBy;

$tdatavw_company_addressbook[".orderindexes"] = array();


$tdatavw_company_addressbook[".sqlHead"] = "SELECT AddressID,  	CompanyID,  	Name,  	AddressType,  	Description,  	Address1,  	Address2,  	City,  	countryname,  	provincename,  	PostalCode";
$tdatavw_company_addressbook[".sqlFrom"] = "FROM vw_company_addressbook";
$tdatavw_company_addressbook[".sqlWhereExpr"] = "";
$tdatavw_company_addressbook[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_company_addressbook[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_company_addressbook[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_company_addressbook[".highlightSearchResults"] = true;

$tableKeysvw_company_addressbook = array();
$tableKeysvw_company_addressbook[] = "AddressID";
$tdatavw_company_addressbook[".Keys"] = $tableKeysvw_company_addressbook;


$tdatavw_company_addressbook[".hideMobileList"] = array();




//	AddressID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AddressID";
	$fdata["GoodName"] = "AddressID";
	$fdata["ownerTable"] = "vw_company_addressbook";
	$fdata["Label"] = GetFieldLabel("vw_company_addressbook","AddressID");
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


	$tdatavw_company_addressbook["AddressID"] = $fdata;
		$tdatavw_company_addressbook[".searchableFields"][] = "AddressID";
//	CompanyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CompanyID";
	$fdata["GoodName"] = "CompanyID";
	$fdata["ownerTable"] = "vw_company_addressbook";
	$fdata["Label"] = GetFieldLabel("vw_company_addressbook","CompanyID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CompanyID";

		$fdata["sourceSingle"] = "CompanyID";

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


	$tdatavw_company_addressbook["CompanyID"] = $fdata;
		$tdatavw_company_addressbook[".searchableFields"][] = "CompanyID";
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "vw_company_addressbook";
	$fdata["Label"] = GetFieldLabel("vw_company_addressbook","Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Name";

		$fdata["sourceSingle"] = "Name";

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


	$tdatavw_company_addressbook["Name"] = $fdata;
		$tdatavw_company_addressbook[".searchableFields"][] = "Name";
//	AddressType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AddressType";
	$fdata["GoodName"] = "AddressType";
	$fdata["ownerTable"] = "vw_company_addressbook";
	$fdata["Label"] = GetFieldLabel("vw_company_addressbook","AddressType");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AddressType";

		$fdata["sourceSingle"] = "AddressType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AddressType";

	
	
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


	$tdatavw_company_addressbook["AddressType"] = $fdata;
		$tdatavw_company_addressbook[".searchableFields"][] = "AddressType";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "vw_company_addressbook";
	$fdata["Label"] = GetFieldLabel("vw_company_addressbook","Description");
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


	$tdatavw_company_addressbook["Description"] = $fdata;
		$tdatavw_company_addressbook[".searchableFields"][] = "Description";
//	Address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Address1";
	$fdata["GoodName"] = "Address1";
	$fdata["ownerTable"] = "vw_company_addressbook";
	$fdata["Label"] = GetFieldLabel("vw_company_addressbook","Address1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Address1";

		$fdata["sourceSingle"] = "Address1";

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


	$tdatavw_company_addressbook["Address1"] = $fdata;
		$tdatavw_company_addressbook[".searchableFields"][] = "Address1";
//	Address2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Address2";
	$fdata["GoodName"] = "Address2";
	$fdata["ownerTable"] = "vw_company_addressbook";
	$fdata["Label"] = GetFieldLabel("vw_company_addressbook","Address2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Address2";

		$fdata["sourceSingle"] = "Address2";

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


	$tdatavw_company_addressbook["Address2"] = $fdata;
		$tdatavw_company_addressbook[".searchableFields"][] = "Address2";
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "vw_company_addressbook";
	$fdata["Label"] = GetFieldLabel("vw_company_addressbook","City");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "City";

		$fdata["sourceSingle"] = "City";

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


	$tdatavw_company_addressbook["City"] = $fdata;
		$tdatavw_company_addressbook[".searchableFields"][] = "City";
//	countryname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "countryname";
	$fdata["GoodName"] = "countryname";
	$fdata["ownerTable"] = "vw_company_addressbook";
	$fdata["Label"] = GetFieldLabel("vw_company_addressbook","countryname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "countryname";

		$fdata["sourceSingle"] = "countryname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "countryname";

	
	
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
			$edata["EditParams"].= " maxlength=35";

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


	$tdatavw_company_addressbook["countryname"] = $fdata;
		$tdatavw_company_addressbook[".searchableFields"][] = "countryname";
//	provincename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "provincename";
	$fdata["GoodName"] = "provincename";
	$fdata["ownerTable"] = "vw_company_addressbook";
	$fdata["Label"] = GetFieldLabel("vw_company_addressbook","provincename");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "provincename";

		$fdata["sourceSingle"] = "provincename";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "provincename";

	
	
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


	$tdatavw_company_addressbook["provincename"] = $fdata;
		$tdatavw_company_addressbook[".searchableFields"][] = "provincename";
//	PostalCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "PostalCode";
	$fdata["GoodName"] = "PostalCode";
	$fdata["ownerTable"] = "vw_company_addressbook";
	$fdata["Label"] = GetFieldLabel("vw_company_addressbook","PostalCode");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PostalCode";

		$fdata["sourceSingle"] = "PostalCode";

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


	$tdatavw_company_addressbook["PostalCode"] = $fdata;
		$tdatavw_company_addressbook[".searchableFields"][] = "PostalCode";


$tables_data["vw_company_addressbook"]=&$tdatavw_company_addressbook;
$field_labels["vw_company_addressbook"] = &$fieldLabelsvw_company_addressbook;
$fieldToolTips["vw_company_addressbook"] = &$fieldToolTipsvw_company_addressbook;
$placeHolders["vw_company_addressbook"] = &$placeHoldersvw_company_addressbook;
$page_titles["vw_company_addressbook"] = &$pageTitlesvw_company_addressbook;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["vw_company_addressbook"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["vw_company_addressbook"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vw_company_addressbook()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AddressID,  	CompanyID,  	Name,  	AddressType,  	Description,  	Address1,  	Address2,  	City,  	countryname,  	provincename,  	PostalCode";
$proto0["m_strFrom"] = "FROM vw_company_addressbook";
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
	"m_strName" => "AddressID",
	"m_strTable" => "vw_company_addressbook",
	"m_srcTableName" => "vw_company_addressbook"
));

$proto6["m_sql"] = "AddressID";
$proto6["m_srcTableName"] = "vw_company_addressbook";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CompanyID",
	"m_strTable" => "vw_company_addressbook",
	"m_srcTableName" => "vw_company_addressbook"
));

$proto8["m_sql"] = "CompanyID";
$proto8["m_srcTableName"] = "vw_company_addressbook";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "vw_company_addressbook",
	"m_srcTableName" => "vw_company_addressbook"
));

$proto10["m_sql"] = "Name";
$proto10["m_srcTableName"] = "vw_company_addressbook";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AddressType",
	"m_strTable" => "vw_company_addressbook",
	"m_srcTableName" => "vw_company_addressbook"
));

$proto12["m_sql"] = "AddressType";
$proto12["m_srcTableName"] = "vw_company_addressbook";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "vw_company_addressbook",
	"m_srcTableName" => "vw_company_addressbook"
));

$proto14["m_sql"] = "Description";
$proto14["m_srcTableName"] = "vw_company_addressbook";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Address1",
	"m_strTable" => "vw_company_addressbook",
	"m_srcTableName" => "vw_company_addressbook"
));

$proto16["m_sql"] = "Address1";
$proto16["m_srcTableName"] = "vw_company_addressbook";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Address2",
	"m_strTable" => "vw_company_addressbook",
	"m_srcTableName" => "vw_company_addressbook"
));

$proto18["m_sql"] = "Address2";
$proto18["m_srcTableName"] = "vw_company_addressbook";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "vw_company_addressbook",
	"m_srcTableName" => "vw_company_addressbook"
));

$proto20["m_sql"] = "City";
$proto20["m_srcTableName"] = "vw_company_addressbook";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "countryname",
	"m_strTable" => "vw_company_addressbook",
	"m_srcTableName" => "vw_company_addressbook"
));

$proto22["m_sql"] = "countryname";
$proto22["m_srcTableName"] = "vw_company_addressbook";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "provincename",
	"m_strTable" => "vw_company_addressbook",
	"m_srcTableName" => "vw_company_addressbook"
));

$proto24["m_sql"] = "provincename";
$proto24["m_srcTableName"] = "vw_company_addressbook";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "PostalCode",
	"m_strTable" => "vw_company_addressbook",
	"m_srcTableName" => "vw_company_addressbook"
));

$proto26["m_sql"] = "PostalCode";
$proto26["m_srcTableName"] = "vw_company_addressbook";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "vw_company_addressbook";
$proto29["m_srcTableName"] = "vw_company_addressbook";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "AddressID";
$proto29["m_columns"][] = "CompanyID";
$proto29["m_columns"][] = "Name";
$proto29["m_columns"][] = "AddressType";
$proto29["m_columns"][] = "Description";
$proto29["m_columns"][] = "Address1";
$proto29["m_columns"][] = "Address2";
$proto29["m_columns"][] = "City";
$proto29["m_columns"][] = "countryname";
$proto29["m_columns"][] = "provincename";
$proto29["m_columns"][] = "PostalCode";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "vw_company_addressbook";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "vw_company_addressbook";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vw_company_addressbook";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_company_addressbook = createSqlQuery_vw_company_addressbook();


	
		;

											

$tdatavw_company_addressbook[".sqlquery"] = $queryData_vw_company_addressbook;



$tableEvents["vw_company_addressbook"] = new eventsBase;
$tdatavw_company_addressbook[".hasEvents"] = false;

?>