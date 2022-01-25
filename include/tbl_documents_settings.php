<?php
$tdatatbl_documents = array();
$tdatatbl_documents[".searchableFields"] = array();
$tdatatbl_documents[".ShortName"] = "tbl_documents";
$tdatatbl_documents[".OwnerID"] = "";
$tdatatbl_documents[".OriginalTable"] = "tbl_documents";


$tdatatbl_documents[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatbl_documents[".originalPagesByType"] = $tdatatbl_documents[".pagesByType"];
$tdatatbl_documents[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatbl_documents[".originalPages"] = $tdatatbl_documents[".pages"];
$tdatatbl_documents[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatbl_documents[".originalDefaultPages"] = $tdatatbl_documents[".defaultPages"];

//	field labels
$fieldLabelstbl_documents = array();
$fieldToolTipstbl_documents = array();
$pageTitlestbl_documents = array();
$placeHolderstbl_documents = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_documents["English"] = array();
	$fieldToolTipstbl_documents["English"] = array();
	$placeHolderstbl_documents["English"] = array();
	$pageTitlestbl_documents["English"] = array();
	$fieldLabelstbl_documents["English"]["ID"] = "ID";
	$fieldToolTipstbl_documents["English"]["ID"] = "";
	$placeHolderstbl_documents["English"]["ID"] = "";
	$fieldLabelstbl_documents["English"]["Document"] = "Document";
	$fieldToolTipstbl_documents["English"]["Document"] = "";
	$placeHolderstbl_documents["English"]["Document"] = "";
	$fieldLabelstbl_documents["English"]["CompanyID"] = "Company ID";
	$fieldToolTipstbl_documents["English"]["CompanyID"] = "";
	$placeHolderstbl_documents["English"]["CompanyID"] = "";
	$fieldLabelstbl_documents["English"]["OrderID"] = "Order ID";
	$fieldToolTipstbl_documents["English"]["OrderID"] = "";
	$placeHolderstbl_documents["English"]["OrderID"] = "";
	$fieldLabelstbl_documents["English"]["Title"] = "Title";
	$fieldToolTipstbl_documents["English"]["Title"] = "";
	$placeHolderstbl_documents["English"]["Title"] = "";
	$fieldLabelstbl_documents["English"]["Keywords"] = "Keywords";
	$fieldToolTipstbl_documents["English"]["Keywords"] = "";
	$placeHolderstbl_documents["English"]["Keywords"] = "";
	$fieldLabelstbl_documents["English"]["FileName"] = "File Name";
	$fieldToolTipstbl_documents["English"]["FileName"] = "";
	$placeHolderstbl_documents["English"]["FileName"] = "";
	if (count($fieldToolTipstbl_documents["English"]))
		$tdatatbl_documents[".isUseToolTips"] = true;
}


	$tdatatbl_documents[".NCSearch"] = true;



$tdatatbl_documents[".shortTableName"] = "tbl_documents";
$tdatatbl_documents[".nSecOptions"] = 0;

$tdatatbl_documents[".mainTableOwnerID"] = "";
$tdatatbl_documents[".entityType"] = 0;
$tdatatbl_documents[".connId"] = "logistics_at_localhost";


$tdatatbl_documents[".strOriginalTableName"] = "tbl_documents";

	



$tdatatbl_documents[".showAddInPopup"] = false;

$tdatatbl_documents[".showEditInPopup"] = false;

$tdatatbl_documents[".showViewInPopup"] = false;

	$tdatatbl_documents[".listAjax"] = true;
//	temporary
//$tdatatbl_documents[".listAjax"] = false;

	$tdatatbl_documents[".audit"] = true;

	$tdatatbl_documents[".locking"] = false;


$pages = $tdatatbl_documents[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_documents[".edit"] = true;
	$tdatatbl_documents[".afterEditAction"] = 1;
	$tdatatbl_documents[".closePopupAfterEdit"] = 1;
	$tdatatbl_documents[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_documents[".add"] = true;
$tdatatbl_documents[".afterAddAction"] = 1;
$tdatatbl_documents[".closePopupAfterAdd"] = 1;
$tdatatbl_documents[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_documents[".list"] = true;
}



$tdatatbl_documents[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_documents[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_documents[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_documents[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_documents[".printFriendly"] = true;
}



$tdatatbl_documents[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_documents[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_documents[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_documents[".isUseAjaxSuggest"] = true;

$tdatatbl_documents[".rowHighlite"] = true;



																																										

$tdatatbl_documents[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_documents[".buttonsAdded"] = false;

$tdatatbl_documents[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_documents[".isUseTimeForSearch"] = false;


$tdatatbl_documents[".badgeColor"] = "e8926f";


$tdatatbl_documents[".allSearchFields"] = array();
$tdatatbl_documents[".filterFields"] = array();
$tdatatbl_documents[".requiredSearchFields"] = array();

$tdatatbl_documents[".googleLikeFields"] = array();
$tdatatbl_documents[".googleLikeFields"][] = "ID";
$tdatatbl_documents[".googleLikeFields"][] = "CompanyID";
$tdatatbl_documents[".googleLikeFields"][] = "OrderID";
$tdatatbl_documents[".googleLikeFields"][] = "Title";
$tdatatbl_documents[".googleLikeFields"][] = "Keywords";
$tdatatbl_documents[".googleLikeFields"][] = "FileName";



$tdatatbl_documents[".tableType"] = "list";

$tdatatbl_documents[".printerPageOrientation"] = 0;
$tdatatbl_documents[".nPrinterPageScale"] = 100;

$tdatatbl_documents[".nPrinterSplitRecords"] = 40;

$tdatatbl_documents[".geocodingEnabled"] = false;










$tdatatbl_documents[".pageSize"] = 20;

$tdatatbl_documents[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_documents[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_documents[".orderindexes"] = array();


$tdatatbl_documents[".sqlHead"] = "SELECT ID,  	CompanyID,  	OrderID,  	Title,  	Keywords,  	FileName,  	Document";
$tdatatbl_documents[".sqlFrom"] = "FROM tbl_documents";
$tdatatbl_documents[".sqlWhereExpr"] = "";
$tdatatbl_documents[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_documents[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_documents[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_documents[".highlightSearchResults"] = true;

$tableKeystbl_documents = array();
$tableKeystbl_documents[] = "ID";
$tdatatbl_documents[".Keys"] = $tableKeystbl_documents;


$tdatatbl_documents[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_documents";
	$fdata["Label"] = GetFieldLabel("tbl_documents","ID");
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


	$tdatatbl_documents["ID"] = $fdata;
		$tdatatbl_documents[".searchableFields"][] = "ID";
//	CompanyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CompanyID";
	$fdata["GoodName"] = "CompanyID";
	$fdata["ownerTable"] = "tbl_documents";
	$fdata["Label"] = GetFieldLabel("tbl_documents","CompanyID");
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
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	

	
	$edata["LookupOrderBy"] = "Name";

	
	
	
	

	
	
	
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
		$fdata["filterTotalFields"] = "ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatbl_documents["CompanyID"] = $fdata;
		$tdatatbl_documents[".searchableFields"][] = "CompanyID";
//	OrderID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "OrderID";
	$fdata["GoodName"] = "OrderID";
	$fdata["ownerTable"] = "tbl_documents";
	$fdata["Label"] = GetFieldLabel("tbl_documents","OrderID");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_orders";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ID";

	

	
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


	$tdatatbl_documents["OrderID"] = $fdata;
		$tdatatbl_documents[".searchableFields"][] = "OrderID";
//	Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Title";
	$fdata["GoodName"] = "Title";
	$fdata["ownerTable"] = "tbl_documents";
	$fdata["Label"] = GetFieldLabel("tbl_documents","Title");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Title";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Title";

	
	
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
			$edata["EditParams"].= " maxlength=128";

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


	$tdatatbl_documents["Title"] = $fdata;
		$tdatatbl_documents[".searchableFields"][] = "Title";
//	Keywords
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Keywords";
	$fdata["GoodName"] = "Keywords";
	$fdata["ownerTable"] = "tbl_documents";
	$fdata["Label"] = GetFieldLabel("tbl_documents","Keywords");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Keywords";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Keywords";

	
	
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


	$tdatatbl_documents["Keywords"] = $fdata;
		$tdatatbl_documents[".searchableFields"][] = "Keywords";
//	FileName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "FileName";
	$fdata["GoodName"] = "FileName";
	$fdata["ownerTable"] = "tbl_documents";
	$fdata["Label"] = GetFieldLabel("tbl_documents","FileName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "FileName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FileName";

	
	
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


	$tdatatbl_documents["FileName"] = $fdata;
		$tdatatbl_documents[".searchableFields"][] = "FileName";
//	Document
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Document";
	$fdata["GoodName"] = "Document";
	$fdata["ownerTable"] = "tbl_documents";
	$fdata["Label"] = GetFieldLabel("tbl_documents","Document");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "Document";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Document";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database File");

		$vdata["Filename"] = "FileName";

	
	
	
	
		$vdata["strFilename"] = "FileName";

	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database file");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
							$edata["acceptFileTypes"] = "doc";
			$edata["acceptFileTypesHtml"] = ".doc";
						$edata["acceptFileTypes"] .= "|docx";
			$edata["acceptFileTypesHtml"] .= ",.docx";
						$edata["acceptFileTypes"] .= "|pdf";
			$edata["acceptFileTypesHtml"] .= ",.pdf";
						$edata["acceptFileTypes"] .= "|ppt";
			$edata["acceptFileTypesHtml"] .= ",.ppt";
						$edata["acceptFileTypes"] .= "|pptx";
			$edata["acceptFileTypesHtml"] .= ",.pptx";
						$edata["acceptFileTypes"] .= "|rtf";
			$edata["acceptFileTypesHtml"] .= ",.rtf";
						$edata["acceptFileTypes"] .= "|txt";
			$edata["acceptFileTypesHtml"] .= ",.txt";
						$edata["acceptFileTypes"] .= "|xls";
			$edata["acceptFileTypesHtml"] .= ",.xls";
						$edata["acceptFileTypes"] .= "|xlsx";
			$edata["acceptFileTypesHtml"] .= ",.xlsx";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

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


	$tdatatbl_documents["Document"] = $fdata;
	

$tables_data["tbl_documents"]=&$tdatatbl_documents;
$field_labels["tbl_documents"] = &$fieldLabelstbl_documents;
$fieldToolTips["tbl_documents"] = &$fieldToolTipstbl_documents;
$placeHolders["tbl_documents"] = &$placeHolderstbl_documents;
$page_titles["tbl_documents"] = &$pageTitlestbl_documents;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_documents"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_documents"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tbl_company";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_company";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_company";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_documents"][0] = $masterParams;
				$masterTablesData["tbl_documents"][0]["masterKeys"] = array();
	$masterTablesData["tbl_documents"][0]["masterKeys"][]="ID";
				$masterTablesData["tbl_documents"][0]["detailKeys"] = array();
	$masterTablesData["tbl_documents"][0]["detailKeys"][]="CompanyID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_documents()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	CompanyID,  	OrderID,  	Title,  	Keywords,  	FileName,  	Document";
$proto0["m_strFrom"] = "FROM tbl_documents";
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
	"m_strTable" => "tbl_documents",
	"m_srcTableName" => "tbl_documents"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_documents";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CompanyID",
	"m_strTable" => "tbl_documents",
	"m_srcTableName" => "tbl_documents"
));

$proto8["m_sql"] = "CompanyID";
$proto8["m_srcTableName"] = "tbl_documents";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "OrderID",
	"m_strTable" => "tbl_documents",
	"m_srcTableName" => "tbl_documents"
));

$proto10["m_sql"] = "OrderID";
$proto10["m_srcTableName"] = "tbl_documents";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Title",
	"m_strTable" => "tbl_documents",
	"m_srcTableName" => "tbl_documents"
));

$proto12["m_sql"] = "Title";
$proto12["m_srcTableName"] = "tbl_documents";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Keywords",
	"m_strTable" => "tbl_documents",
	"m_srcTableName" => "tbl_documents"
));

$proto14["m_sql"] = "Keywords";
$proto14["m_srcTableName"] = "tbl_documents";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "FileName",
	"m_strTable" => "tbl_documents",
	"m_srcTableName" => "tbl_documents"
));

$proto16["m_sql"] = "FileName";
$proto16["m_srcTableName"] = "tbl_documents";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Document",
	"m_strTable" => "tbl_documents",
	"m_srcTableName" => "tbl_documents"
));

$proto18["m_sql"] = "Document";
$proto18["m_srcTableName"] = "tbl_documents";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "tbl_documents";
$proto21["m_srcTableName"] = "tbl_documents";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ID";
$proto21["m_columns"][] = "CompanyID";
$proto21["m_columns"][] = "OrderID";
$proto21["m_columns"][] = "Title";
$proto21["m_columns"][] = "Keywords";
$proto21["m_columns"][] = "FileName";
$proto21["m_columns"][] = "Document";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "tbl_documents";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "tbl_documents";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_documents";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_documents = createSqlQuery_tbl_documents();


	
		;

							

$tdatatbl_documents[".sqlquery"] = $queryData_tbl_documents;



$tableEvents["tbl_documents"] = new eventsBase;
$tdatatbl_documents[".hasEvents"] = false;

?>