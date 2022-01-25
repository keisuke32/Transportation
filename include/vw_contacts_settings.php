<?php
$tdatavw_contacts = array();
$tdatavw_contacts[".searchableFields"] = array();
$tdatavw_contacts[".ShortName"] = "vw_contacts";
$tdatavw_contacts[".OwnerID"] = "";
$tdatavw_contacts[".OriginalTable"] = "tb_contacts";


$tdatavw_contacts[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatavw_contacts[".originalPagesByType"] = $tdatavw_contacts[".pagesByType"];
$tdatavw_contacts[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatavw_contacts[".originalPages"] = $tdatavw_contacts[".pages"];
$tdatavw_contacts[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatavw_contacts[".originalDefaultPages"] = $tdatavw_contacts[".defaultPages"];

//	field labels
$fieldLabelsvw_contacts = array();
$fieldToolTipsvw_contacts = array();
$pageTitlesvw_contacts = array();
$placeHoldersvw_contacts = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_contacts["English"] = array();
	$fieldToolTipsvw_contacts["English"] = array();
	$placeHoldersvw_contacts["English"] = array();
	$pageTitlesvw_contacts["English"] = array();
	$fieldLabelsvw_contacts["English"]["ID"] = "ID";
	$fieldToolTipsvw_contacts["English"]["ID"] = "";
	$placeHoldersvw_contacts["English"]["ID"] = "";
	$fieldLabelsvw_contacts["English"]["CompanyID"] = "Company";
	$fieldToolTipsvw_contacts["English"]["CompanyID"] = "";
	$placeHoldersvw_contacts["English"]["CompanyID"] = "";
	$fieldLabelsvw_contacts["English"]["ContactName"] = "Contact Name";
	$fieldToolTipsvw_contacts["English"]["ContactName"] = "";
	$placeHoldersvw_contacts["English"]["ContactName"] = "";
	$fieldLabelsvw_contacts["English"]["ContactTitle"] = "Contact Title";
	$fieldToolTipsvw_contacts["English"]["ContactTitle"] = "";
	$placeHoldersvw_contacts["English"]["ContactTitle"] = "";
	$fieldLabelsvw_contacts["English"]["ContactPrimaryEmail"] = "Contact Primary Email";
	$fieldToolTipsvw_contacts["English"]["ContactPrimaryEmail"] = "";
	$placeHoldersvw_contacts["English"]["ContactPrimaryEmail"] = "";
	$fieldLabelsvw_contacts["English"]["ContactPrimaryPhone"] = "Contact Primary Phone";
	$fieldToolTipsvw_contacts["English"]["ContactPrimaryPhone"] = "";
	$placeHoldersvw_contacts["English"]["ContactPrimaryPhone"] = "";
	$fieldLabelsvw_contacts["English"]["LeadSourceID"] = "Lead Source";
	$fieldToolTipsvw_contacts["English"]["LeadSourceID"] = "";
	$placeHoldersvw_contacts["English"]["LeadSourceID"] = "";
	$fieldLabelsvw_contacts["English"]["UserID"] = "User ID";
	$fieldToolTipsvw_contacts["English"]["UserID"] = "";
	$placeHoldersvw_contacts["English"]["UserID"] = "";
	$fieldLabelsvw_contacts["English"]["contact_details"] = "Contact Details";
	$fieldToolTipsvw_contacts["English"]["contact_details"] = "";
	$placeHoldersvw_contacts["English"]["contact_details"] = "";
	$fieldLabelsvw_contacts["English"]["AddressID"] = "Address ID";
	$fieldToolTipsvw_contacts["English"]["AddressID"] = "";
	$placeHoldersvw_contacts["English"]["AddressID"] = "";
	if (count($fieldToolTipsvw_contacts["English"]))
		$tdatavw_contacts[".isUseToolTips"] = true;
}


	$tdatavw_contacts[".NCSearch"] = true;



$tdatavw_contacts[".shortTableName"] = "vw_contacts";
$tdatavw_contacts[".nSecOptions"] = 0;

$tdatavw_contacts[".mainTableOwnerID"] = "";
$tdatavw_contacts[".entityType"] = 1;
$tdatavw_contacts[".connId"] = "logistics_at_localhost";


$tdatavw_contacts[".strOriginalTableName"] = "tb_contacts";

	



$tdatavw_contacts[".showAddInPopup"] = false;

$tdatavw_contacts[".showEditInPopup"] = false;

$tdatavw_contacts[".showViewInPopup"] = false;

	$tdatavw_contacts[".listAjax"] = true;
//	temporary
//$tdatavw_contacts[".listAjax"] = false;

	$tdatavw_contacts[".audit"] = true;

	$tdatavw_contacts[".locking"] = false;


$pages = $tdatavw_contacts[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavw_contacts[".edit"] = true;
	$tdatavw_contacts[".afterEditAction"] = 1;
	$tdatavw_contacts[".closePopupAfterEdit"] = 1;
	$tdatavw_contacts[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavw_contacts[".add"] = true;
$tdatavw_contacts[".afterAddAction"] = 1;
$tdatavw_contacts[".closePopupAfterAdd"] = 1;
$tdatavw_contacts[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavw_contacts[".list"] = true;
}



$tdatavw_contacts[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavw_contacts[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavw_contacts[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavw_contacts[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavw_contacts[".printFriendly"] = true;
}



$tdatavw_contacts[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavw_contacts[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavw_contacts[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavw_contacts[".isUseAjaxSuggest"] = true;

$tdatavw_contacts[".rowHighlite"] = true;



																					

$tdatavw_contacts[".ajaxCodeSnippetAdded"] = false;

$tdatavw_contacts[".buttonsAdded"] = false;

$tdatavw_contacts[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_contacts[".isUseTimeForSearch"] = false;


$tdatavw_contacts[".badgeColor"] = "2F4F4F";


$tdatavw_contacts[".allSearchFields"] = array();
$tdatavw_contacts[".filterFields"] = array();
$tdatavw_contacts[".requiredSearchFields"] = array();

$tdatavw_contacts[".googleLikeFields"] = array();
$tdatavw_contacts[".googleLikeFields"][] = "ID";
$tdatavw_contacts[".googleLikeFields"][] = "CompanyID";
$tdatavw_contacts[".googleLikeFields"][] = "UserID";
$tdatavw_contacts[".googleLikeFields"][] = "ContactName";
$tdatavw_contacts[".googleLikeFields"][] = "ContactTitle";
$tdatavw_contacts[".googleLikeFields"][] = "ContactPrimaryEmail";
$tdatavw_contacts[".googleLikeFields"][] = "ContactPrimaryPhone";
$tdatavw_contacts[".googleLikeFields"][] = "LeadSourceID";
$tdatavw_contacts[".googleLikeFields"][] = "contact_details";
$tdatavw_contacts[".googleLikeFields"][] = "AddressID";



$tdatavw_contacts[".tableType"] = "list";

$tdatavw_contacts[".printerPageOrientation"] = 0;
$tdatavw_contacts[".nPrinterPageScale"] = 100;

$tdatavw_contacts[".nPrinterSplitRecords"] = 40;

$tdatavw_contacts[".geocodingEnabled"] = false;










$tdatavw_contacts[".pageSize"] = 20;

$tdatavw_contacts[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_contacts[".strOrderBy"] = $tstrOrderBy;

$tdatavw_contacts[".orderindexes"] = array();


$tdatavw_contacts[".sqlHead"] = "SELECT ID,  CompanyID,  UserID,  ContactName,  ContactTitle,  ContactPrimaryEmail,  ContactPrimaryPhone,  LeadSourceID,  CONCAT(    IFNULL(CONCAT('<b>Name: </b>', ContactName), ''),     IFNULL(CONCAT('<br><b>Phone: </b>', ContactPrimaryPhone), ''),     IFNULL(CONCAT('<br><b>Title: </b>', ContactTitle), ''),     IFNULL(CONCAT('<br><b>Email: </b>', ContactPrimaryEmail), '')    ) AS contact_details,  AddressID";
$tdatavw_contacts[".sqlFrom"] = "FROM tb_contacts";
$tdatavw_contacts[".sqlWhereExpr"] = "";
$tdatavw_contacts[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_contacts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_contacts[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_contacts[".highlightSearchResults"] = true;

$tableKeysvw_contacts = array();
$tableKeysvw_contacts[] = "ID";
$tdatavw_contacts[".Keys"] = $tableKeysvw_contacts;


$tdatavw_contacts[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tb_contacts";
	$fdata["Label"] = GetFieldLabel("vw_contacts","ID");
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


	$tdatavw_contacts["ID"] = $fdata;
		$tdatavw_contacts[".searchableFields"][] = "ID";
//	CompanyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CompanyID";
	$fdata["GoodName"] = "CompanyID";
	$fdata["ownerTable"] = "tb_contacts";
	$fdata["Label"] = GetFieldLabel("vw_contacts","CompanyID");
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


	$tdatavw_contacts["CompanyID"] = $fdata;
		$tdatavw_contacts[".searchableFields"][] = "CompanyID";
//	UserID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "UserID";
	$fdata["GoodName"] = "UserID";
	$fdata["ownerTable"] = "tb_contacts";
	$fdata["Label"] = GetFieldLabel("vw_contacts","UserID");
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


	$tdatavw_contacts["UserID"] = $fdata;
		$tdatavw_contacts[".searchableFields"][] = "UserID";
//	ContactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ContactName";
	$fdata["GoodName"] = "ContactName";
	$fdata["ownerTable"] = "tb_contacts";
	$fdata["Label"] = GetFieldLabel("vw_contacts","ContactName");
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


	$tdatavw_contacts["ContactName"] = $fdata;
		$tdatavw_contacts[".searchableFields"][] = "ContactName";
//	ContactTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ContactTitle";
	$fdata["GoodName"] = "ContactTitle";
	$fdata["ownerTable"] = "tb_contacts";
	$fdata["Label"] = GetFieldLabel("vw_contacts","ContactTitle");
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


	$tdatavw_contacts["ContactTitle"] = $fdata;
		$tdatavw_contacts[".searchableFields"][] = "ContactTitle";
//	ContactPrimaryEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ContactPrimaryEmail";
	$fdata["GoodName"] = "ContactPrimaryEmail";
	$fdata["ownerTable"] = "tb_contacts";
	$fdata["Label"] = GetFieldLabel("vw_contacts","ContactPrimaryEmail");
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


	$tdatavw_contacts["ContactPrimaryEmail"] = $fdata;
		$tdatavw_contacts[".searchableFields"][] = "ContactPrimaryEmail";
//	ContactPrimaryPhone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ContactPrimaryPhone";
	$fdata["GoodName"] = "ContactPrimaryPhone";
	$fdata["ownerTable"] = "tb_contacts";
	$fdata["Label"] = GetFieldLabel("vw_contacts","ContactPrimaryPhone");
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


	$tdatavw_contacts["ContactPrimaryPhone"] = $fdata;
		$tdatavw_contacts[".searchableFields"][] = "ContactPrimaryPhone";
//	LeadSourceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "LeadSourceID";
	$fdata["GoodName"] = "LeadSourceID";
	$fdata["ownerTable"] = "tb_contacts";
	$fdata["Label"] = GetFieldLabel("vw_contacts","LeadSourceID");
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


	$tdatavw_contacts["LeadSourceID"] = $fdata;
		$tdatavw_contacts[".searchableFields"][] = "LeadSourceID";
//	contact_details
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "contact_details";
	$fdata["GoodName"] = "contact_details";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vw_contacts","contact_details");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contact_details";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(    IFNULL(CONCAT('<b>Name: </b>', ContactName), ''),     IFNULL(CONCAT('<br><b>Phone: </b>', ContactPrimaryPhone), ''),     IFNULL(CONCAT('<br><b>Title: </b>', ContactTitle), ''),     IFNULL(CONCAT('<br><b>Email: </b>', ContactPrimaryEmail), '')    )";

	
	
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


	$tdatavw_contacts["contact_details"] = $fdata;
		$tdatavw_contacts[".searchableFields"][] = "contact_details";
//	AddressID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "AddressID";
	$fdata["GoodName"] = "AddressID";
	$fdata["ownerTable"] = "tb_contacts";
	$fdata["Label"] = GetFieldLabel("vw_contacts","AddressID");
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


	$tdatavw_contacts["AddressID"] = $fdata;
		$tdatavw_contacts[".searchableFields"][] = "AddressID";


$tables_data["vw_contacts"]=&$tdatavw_contacts;
$field_labels["vw_contacts"] = &$fieldLabelsvw_contacts;
$fieldToolTips["vw_contacts"] = &$fieldToolTipsvw_contacts;
$placeHolders["vw_contacts"] = &$placeHoldersvw_contacts;
$page_titles["vw_contacts"] = &$pageTitlesvw_contacts;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["vw_contacts"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["vw_contacts"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vw_contacts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  CompanyID,  UserID,  ContactName,  ContactTitle,  ContactPrimaryEmail,  ContactPrimaryPhone,  LeadSourceID,  CONCAT(    IFNULL(CONCAT('<b>Name: </b>', ContactName), ''),     IFNULL(CONCAT('<br><b>Phone: </b>', ContactPrimaryPhone), ''),     IFNULL(CONCAT('<br><b>Title: </b>', ContactTitle), ''),     IFNULL(CONCAT('<br><b>Email: </b>', ContactPrimaryEmail), '')    ) AS contact_details,  AddressID";
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
	"m_srcTableName" => "vw_contacts"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "vw_contacts";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CompanyID",
	"m_strTable" => "tb_contacts",
	"m_srcTableName" => "vw_contacts"
));

$proto8["m_sql"] = "CompanyID";
$proto8["m_srcTableName"] = "vw_contacts";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "UserID",
	"m_strTable" => "tb_contacts",
	"m_srcTableName" => "vw_contacts"
));

$proto10["m_sql"] = "UserID";
$proto10["m_srcTableName"] = "vw_contacts";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ContactName",
	"m_strTable" => "tb_contacts",
	"m_srcTableName" => "vw_contacts"
));

$proto12["m_sql"] = "ContactName";
$proto12["m_srcTableName"] = "vw_contacts";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ContactTitle",
	"m_strTable" => "tb_contacts",
	"m_srcTableName" => "vw_contacts"
));

$proto14["m_sql"] = "ContactTitle";
$proto14["m_srcTableName"] = "vw_contacts";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ContactPrimaryEmail",
	"m_strTable" => "tb_contacts",
	"m_srcTableName" => "vw_contacts"
));

$proto16["m_sql"] = "ContactPrimaryEmail";
$proto16["m_srcTableName"] = "vw_contacts";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ContactPrimaryPhone",
	"m_strTable" => "tb_contacts",
	"m_srcTableName" => "vw_contacts"
));

$proto18["m_sql"] = "ContactPrimaryPhone";
$proto18["m_srcTableName"] = "vw_contacts";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "LeadSourceID",
	"m_strTable" => "tb_contacts",
	"m_srcTableName" => "vw_contacts"
));

$proto20["m_sql"] = "LeadSourceID";
$proto20["m_srcTableName"] = "vw_contacts";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$proto23=array();
$proto23["m_functiontype"] = "SQLF_CUSTOM";
$proto23["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(CONCAT('<b>Name: </b>', ContactName), '')"
));

$proto23["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(CONCAT('<br><b>Phone: </b>', ContactPrimaryPhone), '')"
));

$proto23["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(CONCAT('<br><b>Title: </b>', ContactTitle), '')"
));

$proto23["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(CONCAT('<br><b>Email: </b>', ContactPrimaryEmail), '')"
));

$proto23["m_arguments"][]=$obj;
$proto23["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto23);

$proto22["m_sql"] = "CONCAT(    IFNULL(CONCAT('<b>Name: </b>', ContactName), ''),     IFNULL(CONCAT('<br><b>Phone: </b>', ContactPrimaryPhone), ''),     IFNULL(CONCAT('<br><b>Title: </b>', ContactTitle), ''),     IFNULL(CONCAT('<br><b>Email: </b>', ContactPrimaryEmail), '')    )";
$proto22["m_srcTableName"] = "vw_contacts";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "contact_details";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "AddressID",
	"m_strTable" => "tb_contacts",
	"m_srcTableName" => "vw_contacts"
));

$proto28["m_sql"] = "AddressID";
$proto28["m_srcTableName"] = "vw_contacts";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "tb_contacts";
$proto31["m_srcTableName"] = "vw_contacts";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "ID";
$proto31["m_columns"][] = "CompanyID";
$proto31["m_columns"][] = "AddressID";
$proto31["m_columns"][] = "UserID";
$proto31["m_columns"][] = "ContactName";
$proto31["m_columns"][] = "ContactTitle";
$proto31["m_columns"][] = "ContactPrimaryEmail";
$proto31["m_columns"][] = "ContactPrimaryPhone";
$proto31["m_columns"][] = "LeadSourceID";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "tb_contacts";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "vw_contacts";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vw_contacts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_contacts = createSqlQuery_vw_contacts();


	
		;

										

$tdatavw_contacts[".sqlquery"] = $queryData_vw_contacts;



$tableEvents["vw_contacts"] = new eventsBase;
$tdatavw_contacts[".hasEvents"] = false;

?>