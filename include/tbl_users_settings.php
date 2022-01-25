<?php
$tdatatbl_users = array();
$tdatatbl_users[".searchableFields"] = array();
$tdatatbl_users[".ShortName"] = "tbl_users";
$tdatatbl_users[".OwnerID"] = "";
$tdatatbl_users[".OriginalTable"] = "tbl_users";


$tdatatbl_users[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_users[".originalPagesByType"] = $tdatatbl_users[".pagesByType"];
$tdatatbl_users[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_users[".originalPages"] = $tdatatbl_users[".pages"];
$tdatatbl_users[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_users[".originalDefaultPages"] = $tdatatbl_users[".defaultPages"];

//	field labels
$fieldLabelstbl_users = array();
$fieldToolTipstbl_users = array();
$pageTitlestbl_users = array();
$placeHolderstbl_users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_users["English"] = array();
	$fieldToolTipstbl_users["English"] = array();
	$placeHolderstbl_users["English"] = array();
	$pageTitlestbl_users["English"] = array();
	$fieldLabelstbl_users["English"]["ID"] = "ID";
	$fieldToolTipstbl_users["English"]["ID"] = "";
	$placeHolderstbl_users["English"]["ID"] = "";
	$fieldLabelstbl_users["English"]["CompanyID"] = "Company";
	$fieldToolTipstbl_users["English"]["CompanyID"] = "";
	$placeHolderstbl_users["English"]["CompanyID"] = "";
	$fieldLabelstbl_users["English"]["AddressID"] = "Address";
	$fieldToolTipstbl_users["English"]["AddressID"] = "";
	$placeHolderstbl_users["English"]["AddressID"] = "";
	$fieldLabelstbl_users["English"]["Login"] = "Login";
	$fieldToolTipstbl_users["English"]["Login"] = "";
	$placeHolderstbl_users["English"]["Login"] = "";
	$fieldLabelstbl_users["English"]["Password"] = "Password";
	$fieldToolTipstbl_users["English"]["Password"] = "";
	$placeHolderstbl_users["English"]["Password"] = "";
	$fieldLabelstbl_users["English"]["Email"] = "Email";
	$fieldToolTipstbl_users["English"]["Email"] = "";
	$placeHolderstbl_users["English"]["Email"] = "";
	$fieldLabelstbl_users["English"]["PasswordHint"] = "Password Hint";
	$fieldToolTipstbl_users["English"]["PasswordHint"] = "Enter a hint that can be used to remind you what your password is. DO NOT ENTER YOUR PASSWORD";
	$placeHolderstbl_users["English"]["PasswordHint"] = "";
	$fieldLabelstbl_users["English"]["Active"] = "Active";
	$fieldToolTipstbl_users["English"]["Active"] = "";
	$placeHolderstbl_users["English"]["Active"] = "";
	$fieldLabelstbl_users["English"]["TimeStamp"] = "Time Stamp";
	$fieldToolTipstbl_users["English"]["TimeStamp"] = "";
	$placeHolderstbl_users["English"]["TimeStamp"] = "";
	$fieldLabelstbl_users["English"]["Name"] = "Name";
	$fieldToolTipstbl_users["English"]["Name"] = "";
	$placeHolderstbl_users["English"]["Name"] = "";
	$fieldLabelstbl_users["English"]["PrimaryCell"] = "Primary Cell";
	$fieldToolTipstbl_users["English"]["PrimaryCell"] = "If you enter a cell phone number here this will be used for two factor authentication.";
	$placeHolderstbl_users["English"]["PrimaryCell"] = "";
	$fieldLabelstbl_users["English"]["PrimaryPhone"] = "Primary Phone";
	$fieldToolTipstbl_users["English"]["PrimaryPhone"] = "";
	$placeHolderstbl_users["English"]["PrimaryPhone"] = "";
	$fieldLabelstbl_users["English"]["Picture"] = "Picture";
	$fieldToolTipstbl_users["English"]["Picture"] = "";
	$placeHolderstbl_users["English"]["Picture"] = "";
	if (count($fieldToolTipstbl_users["English"]))
		$tdatatbl_users[".isUseToolTips"] = true;
}


	$tdatatbl_users[".NCSearch"] = true;



$tdatatbl_users[".shortTableName"] = "tbl_users";
$tdatatbl_users[".nSecOptions"] = 0;

$tdatatbl_users[".mainTableOwnerID"] = "";
$tdatatbl_users[".entityType"] = 0;
$tdatatbl_users[".connId"] = "logistics_at_localhost";


$tdatatbl_users[".strOriginalTableName"] = "tbl_users";

	



$tdatatbl_users[".showAddInPopup"] = false;

$tdatatbl_users[".showEditInPopup"] = false;

$tdatatbl_users[".showViewInPopup"] = false;

$tdatatbl_users[".listAjax"] = false;
//	temporary
//$tdatatbl_users[".listAjax"] = false;

	$tdatatbl_users[".audit"] = true;

	$tdatatbl_users[".locking"] = false;


$pages = $tdatatbl_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_users[".edit"] = true;
	$tdatatbl_users[".afterEditAction"] = 1;
	$tdatatbl_users[".closePopupAfterEdit"] = 1;
	$tdatatbl_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_users[".add"] = true;
$tdatatbl_users[".afterAddAction"] = 1;
$tdatatbl_users[".closePopupAfterAdd"] = 1;
$tdatatbl_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_users[".list"] = true;
}



$tdatatbl_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_users[".printFriendly"] = true;
}



$tdatatbl_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_users[".isUseAjaxSuggest"] = true;

$tdatatbl_users[".rowHighlite"] = true;



																																										

$tdatatbl_users[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_users[".buttonsAdded"] = false;

$tdatatbl_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_users[".isUseTimeForSearch"] = false;


$tdatatbl_users[".badgeColor"] = "6493ea";


$tdatatbl_users[".allSearchFields"] = array();
$tdatatbl_users[".filterFields"] = array();
$tdatatbl_users[".requiredSearchFields"] = array();

$tdatatbl_users[".googleLikeFields"] = array();
$tdatatbl_users[".googleLikeFields"][] = "ID";
$tdatatbl_users[".googleLikeFields"][] = "CompanyID";
$tdatatbl_users[".googleLikeFields"][] = "AddressID";
$tdatatbl_users[".googleLikeFields"][] = "Login";
$tdatatbl_users[".googleLikeFields"][] = "Password";
$tdatatbl_users[".googleLikeFields"][] = "Email";
$tdatatbl_users[".googleLikeFields"][] = "Name";
$tdatatbl_users[".googleLikeFields"][] = "PasswordHint";
$tdatatbl_users[".googleLikeFields"][] = "Active";
$tdatatbl_users[".googleLikeFields"][] = "TimeStamp";
$tdatatbl_users[".googleLikeFields"][] = "PrimaryCell";
$tdatatbl_users[".googleLikeFields"][] = "PrimaryPhone";



$tdatatbl_users[".tableType"] = "list";

$tdatatbl_users[".printerPageOrientation"] = 0;
$tdatatbl_users[".nPrinterPageScale"] = 100;

$tdatatbl_users[".nPrinterSplitRecords"] = 40;

$tdatatbl_users[".geocodingEnabled"] = false;










$tdatatbl_users[".pageSize"] = 20;

$tdatatbl_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_users[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_users[".orderindexes"] = array();


$tdatatbl_users[".sqlHead"] = "SELECT ID,  CompanyID,  AddressID,  Login,  Password,  Email,  Name,  PasswordHint,  Active,  `TimeStamp`,  PrimaryCell,  PrimaryPhone,  Picture";
$tdatatbl_users[".sqlFrom"] = "FROM tbl_users";
$tdatatbl_users[".sqlWhereExpr"] = "";
$tdatatbl_users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_users[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_users[".highlightSearchResults"] = true;

$tableKeystbl_users = array();
$tableKeystbl_users[] = "ID";
$tdatatbl_users[".Keys"] = $tableKeystbl_users;


$tdatatbl_users[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_users";
	$fdata["Label"] = GetFieldLabel("tbl_users","ID");
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


	$tdatatbl_users["ID"] = $fdata;
		$tdatatbl_users[".searchableFields"][] = "ID";
//	CompanyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CompanyID";
	$fdata["GoodName"] = "CompanyID";
	$fdata["ownerTable"] = "tbl_users";
	$fdata["Label"] = GetFieldLabel("tbl_users","CompanyID");
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


	$tdatatbl_users["CompanyID"] = $fdata;
		$tdatatbl_users[".searchableFields"][] = "CompanyID";
//	AddressID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AddressID";
	$fdata["GoodName"] = "AddressID";
	$fdata["ownerTable"] = "tbl_users";
	$fdata["Label"] = GetFieldLabel("tbl_users","AddressID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AddressID";

	
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "address";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "CompanyID", "lookup" => "CompanyID" );

	
	

	
	
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


	$tdatatbl_users["AddressID"] = $fdata;
		$tdatatbl_users[".searchableFields"][] = "AddressID";
//	Login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Login";
	$fdata["GoodName"] = "Login";
	$fdata["ownerTable"] = "tbl_users";
	$fdata["Label"] = GetFieldLabel("tbl_users","Login");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Login";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Login";

	
	
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
			$edata["EditParams"].= " maxlength=18";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Username %value% already exists. Please select another", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatatbl_users["Login"] = $fdata;
		$tdatatbl_users[".searchableFields"][] = "Login";
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "tbl_users";
	$fdata["Label"] = GetFieldLabel("tbl_users","Password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Password";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Password";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Password");
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


	$tdatatbl_users["Password"] = $fdata;
		$tdatatbl_users[".searchableFields"][] = "Password";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "tbl_users";
	$fdata["Label"] = GetFieldLabel("tbl_users","Email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Email";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
							
	
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


	$tdatatbl_users["Email"] = $fdata;
		$tdatatbl_users[".searchableFields"][] = "Email";
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "tbl_users";
	$fdata["Label"] = GetFieldLabel("tbl_users","Name");
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


	$tdatatbl_users["Name"] = $fdata;
		$tdatatbl_users[".searchableFields"][] = "Name";
//	PasswordHint
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PasswordHint";
	$fdata["GoodName"] = "PasswordHint";
	$fdata["ownerTable"] = "tbl_users";
	$fdata["Label"] = GetFieldLabel("tbl_users","PasswordHint");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PasswordHint";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PasswordHint";

	
	
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


	$tdatatbl_users["PasswordHint"] = $fdata;
		$tdatatbl_users[".searchableFields"][] = "PasswordHint";
//	Active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Active";
	$fdata["GoodName"] = "Active";
	$fdata["ownerTable"] = "tbl_users";
	$fdata["Label"] = GetFieldLabel("tbl_users","Active");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "Active";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Active";

	
	
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


	$tdatatbl_users["Active"] = $fdata;
		$tdatatbl_users[".searchableFields"][] = "Active";
//	TimeStamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "TimeStamp";
	$fdata["GoodName"] = "TimeStamp";
	$fdata["ownerTable"] = "tbl_users";
	$fdata["Label"] = GetFieldLabel("tbl_users","TimeStamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "TimeStamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`TimeStamp`";

	
	
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


	$tdatatbl_users["TimeStamp"] = $fdata;
		$tdatatbl_users[".searchableFields"][] = "TimeStamp";
//	PrimaryCell
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "PrimaryCell";
	$fdata["GoodName"] = "PrimaryCell";
	$fdata["ownerTable"] = "tbl_users";
	$fdata["Label"] = GetFieldLabel("tbl_users","PrimaryCell");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PrimaryCell";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PrimaryCell";

	
	
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


	$tdatatbl_users["PrimaryCell"] = $fdata;
		$tdatatbl_users[".searchableFields"][] = "PrimaryCell";
//	PrimaryPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PrimaryPhone";
	$fdata["GoodName"] = "PrimaryPhone";
	$fdata["ownerTable"] = "tbl_users";
	$fdata["Label"] = GetFieldLabel("tbl_users","PrimaryPhone");
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


	$tdatatbl_users["PrimaryPhone"] = $fdata;
		$tdatatbl_users[".searchableFields"][] = "PrimaryPhone";
//	Picture
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Picture";
	$fdata["GoodName"] = "Picture";
	$fdata["ownerTable"] = "tbl_users";
	$fdata["Label"] = GetFieldLabel("tbl_users","Picture");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "Picture";

		$fdata["sourceSingle"] = "Picture";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Picture";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 150;
	$vdata["ImageHeight"] = 200;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 3;
	$vdata["captionField"] = "Name";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
							$edata["acceptFileTypes"] = "bmp";
			$edata["acceptFileTypesHtml"] = ".bmp";
						$edata["acceptFileTypes"] .= "|gif";
			$edata["acceptFileTypesHtml"] .= ",.gif";
						$edata["acceptFileTypes"] .= "|jpg";
			$edata["acceptFileTypesHtml"] .= ",.jpg";
						$edata["acceptFileTypes"] .= "|png";
			$edata["acceptFileTypesHtml"] .= ",.png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

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


	$tdatatbl_users["Picture"] = $fdata;
	

$tables_data["tbl_users"]=&$tdatatbl_users;
$field_labels["tbl_users"] = &$fieldLabelstbl_users;
$fieldToolTips["tbl_users"] = &$fieldToolTipstbl_users;
$placeHolders["tbl_users"] = &$placeHolderstbl_users;
$page_titles["tbl_users"] = &$pageTitlestbl_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_users"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_users"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tbl_company";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_company";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_company";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_users"][0] = $masterParams;
				$masterTablesData["tbl_users"][0]["masterKeys"] = array();
	$masterTablesData["tbl_users"][0]["masterKeys"][]="ID";
				$masterTablesData["tbl_users"][0]["detailKeys"] = array();
	$masterTablesData["tbl_users"][0]["detailKeys"][]="CompanyID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  CompanyID,  AddressID,  Login,  Password,  Email,  Name,  PasswordHint,  Active,  `TimeStamp`,  PrimaryCell,  PrimaryPhone,  Picture";
$proto0["m_strFrom"] = "FROM tbl_users";
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
	"m_strTable" => "tbl_users",
	"m_srcTableName" => "tbl_users"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CompanyID",
	"m_strTable" => "tbl_users",
	"m_srcTableName" => "tbl_users"
));

$proto8["m_sql"] = "CompanyID";
$proto8["m_srcTableName"] = "tbl_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AddressID",
	"m_strTable" => "tbl_users",
	"m_srcTableName" => "tbl_users"
));

$proto10["m_sql"] = "AddressID";
$proto10["m_srcTableName"] = "tbl_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Login",
	"m_strTable" => "tbl_users",
	"m_srcTableName" => "tbl_users"
));

$proto12["m_sql"] = "Login";
$proto12["m_srcTableName"] = "tbl_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "tbl_users",
	"m_srcTableName" => "tbl_users"
));

$proto14["m_sql"] = "Password";
$proto14["m_srcTableName"] = "tbl_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "tbl_users",
	"m_srcTableName" => "tbl_users"
));

$proto16["m_sql"] = "Email";
$proto16["m_srcTableName"] = "tbl_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "tbl_users",
	"m_srcTableName" => "tbl_users"
));

$proto18["m_sql"] = "Name";
$proto18["m_srcTableName"] = "tbl_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PasswordHint",
	"m_strTable" => "tbl_users",
	"m_srcTableName" => "tbl_users"
));

$proto20["m_sql"] = "PasswordHint";
$proto20["m_srcTableName"] = "tbl_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Active",
	"m_strTable" => "tbl_users",
	"m_srcTableName" => "tbl_users"
));

$proto22["m_sql"] = "Active";
$proto22["m_srcTableName"] = "tbl_users";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeStamp",
	"m_strTable" => "tbl_users",
	"m_srcTableName" => "tbl_users"
));

$proto24["m_sql"] = "`TimeStamp`";
$proto24["m_srcTableName"] = "tbl_users";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "PrimaryCell",
	"m_strTable" => "tbl_users",
	"m_srcTableName" => "tbl_users"
));

$proto26["m_sql"] = "PrimaryCell";
$proto26["m_srcTableName"] = "tbl_users";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "PrimaryPhone",
	"m_strTable" => "tbl_users",
	"m_srcTableName" => "tbl_users"
));

$proto28["m_sql"] = "PrimaryPhone";
$proto28["m_srcTableName"] = "tbl_users";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Picture",
	"m_strTable" => "tbl_users",
	"m_srcTableName" => "tbl_users"
));

$proto30["m_sql"] = "Picture";
$proto30["m_srcTableName"] = "tbl_users";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "tbl_users";
$proto33["m_srcTableName"] = "tbl_users";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "ID";
$proto33["m_columns"][] = "CompanyID";
$proto33["m_columns"][] = "AddressID";
$proto33["m_columns"][] = "Login";
$proto33["m_columns"][] = "Password";
$proto33["m_columns"][] = "PasswordHint";
$proto33["m_columns"][] = "Name";
$proto33["m_columns"][] = "Email";
$proto33["m_columns"][] = "PrimaryPhone";
$proto33["m_columns"][] = "PrimaryCell";
$proto33["m_columns"][] = "Active";
$proto33["m_columns"][] = "TimeStamp";
$proto33["m_columns"][] = "reset_token";
$proto33["m_columns"][] = "reset_date";
$proto33["m_columns"][] = "two_factor";
$proto33["m_columns"][] = "totp_secret";
$proto33["m_columns"][] = "two_factor1";
$proto33["m_columns"][] = "totp_secret1";
$proto33["m_columns"][] = "Picture";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "tbl_users";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "tbl_users";
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
$proto0["m_srcTableName"]="tbl_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_users = createSqlQuery_tbl_users();


	
		;

													

$tdatatbl_users[".sqlquery"] = $queryData_tbl_users;



include_once(getabspath("include/tbl_users_events.php"));
$tableEvents["tbl_users"] = new eventclass_tbl_users;
$tdatatbl_users[".hasEvents"] = true;

?>