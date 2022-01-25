<?php
$tdatavw_rfqs = array();
$tdatavw_rfqs[".searchableFields"] = array();
$tdatavw_rfqs[".ShortName"] = "vw_rfqs";
$tdatavw_rfqs[".OwnerID"] = "";
$tdatavw_rfqs[".OriginalTable"] = "tbl_rfqs";


$tdatavw_rfqs[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatavw_rfqs[".originalPagesByType"] = $tdatavw_rfqs[".pagesByType"];
$tdatavw_rfqs[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatavw_rfqs[".originalPages"] = $tdatavw_rfqs[".pages"];
$tdatavw_rfqs[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatavw_rfqs[".originalDefaultPages"] = $tdatavw_rfqs[".defaultPages"];

//	field labels
$fieldLabelsvw_rfqs = array();
$fieldToolTipsvw_rfqs = array();
$pageTitlesvw_rfqs = array();
$placeHoldersvw_rfqs = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_rfqs["English"] = array();
	$fieldToolTipsvw_rfqs["English"] = array();
	$placeHoldersvw_rfqs["English"] = array();
	$pageTitlesvw_rfqs["English"] = array();
	$fieldLabelsvw_rfqs["English"]["ID"] = "ID";
	$fieldToolTipsvw_rfqs["English"]["ID"] = "";
	$placeHoldersvw_rfqs["English"]["ID"] = "";
	$fieldLabelsvw_rfqs["English"]["companyID"] = "Company";
	$fieldToolTipsvw_rfqs["English"]["companyID"] = "";
	$placeHoldersvw_rfqs["English"]["companyID"] = "";
	$fieldLabelsvw_rfqs["English"]["Routing"] = "Routing";
	$fieldToolTipsvw_rfqs["English"]["Routing"] = "";
	$placeHoldersvw_rfqs["English"]["Routing"] = "";
	$fieldLabelsvw_rfqs["English"]["Instructions"] = "Instructions";
	$fieldToolTipsvw_rfqs["English"]["Instructions"] = "";
	$placeHoldersvw_rfqs["English"]["Instructions"] = "";
	$fieldLabelsvw_rfqs["English"]["RFQStatusID"] = "RFQ Status";
	$fieldToolTipsvw_rfqs["English"]["RFQStatusID"] = "";
	$placeHoldersvw_rfqs["English"]["RFQStatusID"] = "";
	$fieldLabelsvw_rfqs["English"]["RFQResponseDate"] = "RFQResponse Date";
	$fieldToolTipsvw_rfqs["English"]["RFQResponseDate"] = "";
	$placeHoldersvw_rfqs["English"]["RFQResponseDate"] = "";
	$fieldLabelsvw_rfqs["English"]["ShipperInstructions"] = "Instructions";
	$fieldToolTipsvw_rfqs["English"]["ShipperInstructions"] = "";
	$placeHoldersvw_rfqs["English"]["ShipperInstructions"] = "";
	$fieldLabelsvw_rfqs["English"]["ConsigneeInstructions"] = "Instructions";
	$fieldToolTipsvw_rfqs["English"]["ConsigneeInstructions"] = "";
	$placeHoldersvw_rfqs["English"]["ConsigneeInstructions"] = "";
	$fieldLabelsvw_rfqs["English"]["ShipperDirections"] = "Shipper Directions";
	$fieldToolTipsvw_rfqs["English"]["ShipperDirections"] = "";
	$placeHoldersvw_rfqs["English"]["ShipperDirections"] = "";
	$fieldLabelsvw_rfqs["English"]["ConsigneeDirections"] = "Directions";
	$fieldToolTipsvw_rfqs["English"]["ConsigneeDirections"] = "";
	$placeHoldersvw_rfqs["English"]["ConsigneeDirections"] = "";
	$fieldLabelsvw_rfqs["English"]["ShipperAddress"] = "Shipper Address";
	$fieldToolTipsvw_rfqs["English"]["ShipperAddress"] = "";
	$placeHoldersvw_rfqs["English"]["ShipperAddress"] = "";
	$fieldLabelsvw_rfqs["English"]["ConsigneeAddress"] = "Consignee Address";
	$fieldToolTipsvw_rfqs["English"]["ConsigneeAddress"] = "";
	$placeHoldersvw_rfqs["English"]["ConsigneeAddress"] = "";
	if (count($fieldToolTipsvw_rfqs["English"]))
		$tdatavw_rfqs[".isUseToolTips"] = true;
}


	$tdatavw_rfqs[".NCSearch"] = true;



$tdatavw_rfqs[".shortTableName"] = "vw_rfqs";
$tdatavw_rfqs[".nSecOptions"] = 0;

$tdatavw_rfqs[".mainTableOwnerID"] = "";
$tdatavw_rfqs[".entityType"] = 1;
$tdatavw_rfqs[".connId"] = "logistics_at_localhost";


$tdatavw_rfqs[".strOriginalTableName"] = "tbl_rfqs";

	



$tdatavw_rfqs[".showAddInPopup"] = false;

$tdatavw_rfqs[".showEditInPopup"] = false;

$tdatavw_rfqs[".showViewInPopup"] = false;

$tdatavw_rfqs[".listAjax"] = false;
//	temporary
//$tdatavw_rfqs[".listAjax"] = false;

	$tdatavw_rfqs[".audit"] = false;

	$tdatavw_rfqs[".locking"] = false;


$pages = $tdatavw_rfqs[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavw_rfqs[".edit"] = true;
	$tdatavw_rfqs[".afterEditAction"] = 1;
	$tdatavw_rfqs[".closePopupAfterEdit"] = 1;
	$tdatavw_rfqs[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavw_rfqs[".add"] = true;
$tdatavw_rfqs[".afterAddAction"] = 1;
$tdatavw_rfqs[".closePopupAfterAdd"] = 1;
$tdatavw_rfqs[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavw_rfqs[".list"] = true;
}



$tdatavw_rfqs[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavw_rfqs[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavw_rfqs[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavw_rfqs[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavw_rfqs[".printFriendly"] = true;
}



$tdatavw_rfqs[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavw_rfqs[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavw_rfqs[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavw_rfqs[".isUseAjaxSuggest"] = true;

$tdatavw_rfqs[".rowHighlite"] = true;



																																										

$tdatavw_rfqs[".ajaxCodeSnippetAdded"] = false;

$tdatavw_rfqs[".buttonsAdded"] = false;

$tdatavw_rfqs[".addPageEvents"] = true;

// use timepicker for search panel
$tdatavw_rfqs[".isUseTimeForSearch"] = false;


$tdatavw_rfqs[".badgeColor"] = "6b8e23";


$tdatavw_rfqs[".allSearchFields"] = array();
$tdatavw_rfqs[".filterFields"] = array();
$tdatavw_rfqs[".requiredSearchFields"] = array();

$tdatavw_rfqs[".googleLikeFields"] = array();
$tdatavw_rfqs[".googleLikeFields"][] = "ID";
$tdatavw_rfqs[".googleLikeFields"][] = "companyID";
$tdatavw_rfqs[".googleLikeFields"][] = "RFQStatusID";
$tdatavw_rfqs[".googleLikeFields"][] = "ShipperAddress";
$tdatavw_rfqs[".googleLikeFields"][] = "ShipperInstructions";
$tdatavw_rfqs[".googleLikeFields"][] = "ShipperDirections";
$tdatavw_rfqs[".googleLikeFields"][] = "ConsigneeAddress";
$tdatavw_rfqs[".googleLikeFields"][] = "ConsigneeInstructions";
$tdatavw_rfqs[".googleLikeFields"][] = "ConsigneeDirections";
$tdatavw_rfqs[".googleLikeFields"][] = "RFQResponseDate";
$tdatavw_rfqs[".googleLikeFields"][] = "Instructions";
$tdatavw_rfqs[".googleLikeFields"][] = "Routing";



$tdatavw_rfqs[".tableType"] = "list";

$tdatavw_rfqs[".printerPageOrientation"] = 0;
$tdatavw_rfqs[".nPrinterPageScale"] = 100;

$tdatavw_rfqs[".nPrinterSplitRecords"] = 40;

$tdatavw_rfqs[".geocodingEnabled"] = false;










$tdatavw_rfqs[".pageSize"] = 20;

$tdatavw_rfqs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_rfqs[".strOrderBy"] = $tstrOrderBy;

$tdatavw_rfqs[".orderindexes"] = array();


$tdatavw_rfqs[".sqlHead"] = "SELECT ID,  companyID,  RFQStatusID,  ShipperAddress,  ShipperInstructions,  ShipperDirections,  ConsigneeAddress,  ConsigneeInstructions,  ConsigneeDirections,  RFQResponseDate,  Instructions,  Routing";
$tdatavw_rfqs[".sqlFrom"] = "FROM tbl_rfqs";
$tdatavw_rfqs[".sqlWhereExpr"] = "";
$tdatavw_rfqs[".sqlTail"] = "";

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
$tdatavw_rfqs[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_rfqs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_rfqs[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_rfqs[".highlightSearchResults"] = true;

$tableKeysvw_rfqs = array();
$tableKeysvw_rfqs[] = "ID";
$tdatavw_rfqs[".Keys"] = $tableKeysvw_rfqs;


$tdatavw_rfqs[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("vw_rfqs","ID");
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


	$tdatavw_rfqs["ID"] = $fdata;
		$tdatavw_rfqs[".searchableFields"][] = "ID";
//	companyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "companyID";
	$fdata["GoodName"] = "companyID";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("vw_rfqs","companyID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "companyID";

		$fdata["sourceSingle"] = "companyID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "companyID";

	
	
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

				$edata["LookupWhere"] = "Type='Customer'";


	
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatavw_rfqs["companyID"] = $fdata;
		$tdatavw_rfqs[".searchableFields"][] = "companyID";
//	RFQStatusID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "RFQStatusID";
	$fdata["GoodName"] = "RFQStatusID";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("vw_rfqs","RFQStatusID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "RFQStatusID";

		$fdata["sourceSingle"] = "RFQStatusID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RFQStatusID";

	
	
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
	$edata["LookupTable"] = "tbl_rfq_status";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Status";

	

	
	$edata["LookupOrderBy"] = "ID";

	
	
	
	

	
	
	
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


	$tdatavw_rfqs["RFQStatusID"] = $fdata;
		$tdatavw_rfqs[".searchableFields"][] = "RFQStatusID";
//	ShipperAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ShipperAddress";
	$fdata["GoodName"] = "ShipperAddress";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("vw_rfqs","ShipperAddress");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperAddress";

		$fdata["sourceSingle"] = "ShipperAddress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperAddress";

	
	
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


	$tdatavw_rfqs["ShipperAddress"] = $fdata;
		$tdatavw_rfqs[".searchableFields"][] = "ShipperAddress";
//	ShipperInstructions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ShipperInstructions";
	$fdata["GoodName"] = "ShipperInstructions";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("vw_rfqs","ShipperInstructions");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "ShipperInstructions";

		$fdata["sourceSingle"] = "ShipperInstructions";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperInstructions";

	
	
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


	$tdatavw_rfqs["ShipperInstructions"] = $fdata;
		$tdatavw_rfqs[".searchableFields"][] = "ShipperInstructions";
//	ShipperDirections
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ShipperDirections";
	$fdata["GoodName"] = "ShipperDirections";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("vw_rfqs","ShipperDirections");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "ShipperDirections";

		$fdata["sourceSingle"] = "ShipperDirections";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperDirections";

	
	
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


	$tdatavw_rfqs["ShipperDirections"] = $fdata;
		$tdatavw_rfqs[".searchableFields"][] = "ShipperDirections";
//	ConsigneeAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ConsigneeAddress";
	$fdata["GoodName"] = "ConsigneeAddress";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("vw_rfqs","ConsigneeAddress");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeAddress";

		$fdata["sourceSingle"] = "ConsigneeAddress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeAddress";

	
	
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


	$tdatavw_rfqs["ConsigneeAddress"] = $fdata;
		$tdatavw_rfqs[".searchableFields"][] = "ConsigneeAddress";
//	ConsigneeInstructions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ConsigneeInstructions";
	$fdata["GoodName"] = "ConsigneeInstructions";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("vw_rfqs","ConsigneeInstructions");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "ConsigneeInstructions";

		$fdata["sourceSingle"] = "ConsigneeInstructions";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeInstructions";

	
	
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


	$tdatavw_rfqs["ConsigneeInstructions"] = $fdata;
		$tdatavw_rfqs[".searchableFields"][] = "ConsigneeInstructions";
//	ConsigneeDirections
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ConsigneeDirections";
	$fdata["GoodName"] = "ConsigneeDirections";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("vw_rfqs","ConsigneeDirections");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "ConsigneeDirections";

		$fdata["sourceSingle"] = "ConsigneeDirections";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeDirections";

	
	
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


	$tdatavw_rfqs["ConsigneeDirections"] = $fdata;
		$tdatavw_rfqs[".searchableFields"][] = "ConsigneeDirections";
//	RFQResponseDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "RFQResponseDate";
	$fdata["GoodName"] = "RFQResponseDate";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("vw_rfqs","RFQResponseDate");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
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


	$tdatavw_rfqs["RFQResponseDate"] = $fdata;
		$tdatavw_rfqs[".searchableFields"][] = "RFQResponseDate";
//	Instructions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Instructions";
	$fdata["GoodName"] = "Instructions";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("vw_rfqs","Instructions");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Instructions";

		$fdata["sourceSingle"] = "Instructions";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Instructions";

	
	
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


	$tdatavw_rfqs["Instructions"] = $fdata;
		$tdatavw_rfqs[".searchableFields"][] = "Instructions";
//	Routing
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Routing";
	$fdata["GoodName"] = "Routing";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("vw_rfqs","Routing");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Routing";

		$fdata["sourceSingle"] = "Routing";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Routing";

	
	
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


	$tdatavw_rfqs["Routing"] = $fdata;
		$tdatavw_rfqs[".searchableFields"][] = "Routing";


$tables_data["vw_rfqs"]=&$tdatavw_rfqs;
$field_labels["vw_rfqs"] = &$fieldLabelsvw_rfqs;
$fieldToolTips["vw_rfqs"] = &$fieldToolTipsvw_rfqs;
$placeHolders["vw_rfqs"] = &$placeHoldersvw_rfqs;
$page_titles["vw_rfqs"] = &$pageTitlesvw_rfqs;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["vw_rfqs"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["vw_rfqs"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tbl_rfq_carrier_quote";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_rfq_carrier_quote";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_rfq_carrier_quote";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["vw_rfqs"][0] = $masterParams;
				$masterTablesData["vw_rfqs"][0]["masterKeys"] = array();
	$masterTablesData["vw_rfqs"][0]["masterKeys"][]="RFQID";
				$masterTablesData["vw_rfqs"][0]["detailKeys"] = array();
	$masterTablesData["vw_rfqs"][0]["detailKeys"][]="ID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vw_rfqs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  companyID,  RFQStatusID,  ShipperAddress,  ShipperInstructions,  ShipperDirections,  ConsigneeAddress,  ConsigneeInstructions,  ConsigneeDirections,  RFQResponseDate,  Instructions,  Routing";
$proto0["m_strFrom"] = "FROM tbl_rfqs";
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
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "vw_rfqs"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "vw_rfqs";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "companyID",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "vw_rfqs"
));

$proto8["m_sql"] = "companyID";
$proto8["m_srcTableName"] = "vw_rfqs";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "RFQStatusID",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "vw_rfqs"
));

$proto10["m_sql"] = "RFQStatusID";
$proto10["m_srcTableName"] = "vw_rfqs";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperAddress",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "vw_rfqs"
));

$proto12["m_sql"] = "ShipperAddress";
$proto12["m_srcTableName"] = "vw_rfqs";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperInstructions",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "vw_rfqs"
));

$proto14["m_sql"] = "ShipperInstructions";
$proto14["m_srcTableName"] = "vw_rfqs";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperDirections",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "vw_rfqs"
));

$proto16["m_sql"] = "ShipperDirections";
$proto16["m_srcTableName"] = "vw_rfqs";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeAddress",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "vw_rfqs"
));

$proto18["m_sql"] = "ConsigneeAddress";
$proto18["m_srcTableName"] = "vw_rfqs";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeInstructions",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "vw_rfqs"
));

$proto20["m_sql"] = "ConsigneeInstructions";
$proto20["m_srcTableName"] = "vw_rfqs";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeDirections",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "vw_rfqs"
));

$proto22["m_sql"] = "ConsigneeDirections";
$proto22["m_srcTableName"] = "vw_rfqs";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "RFQResponseDate",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "vw_rfqs"
));

$proto24["m_sql"] = "RFQResponseDate";
$proto24["m_srcTableName"] = "vw_rfqs";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Instructions",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "vw_rfqs"
));

$proto26["m_sql"] = "Instructions";
$proto26["m_srcTableName"] = "vw_rfqs";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Routing",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "vw_rfqs"
));

$proto28["m_sql"] = "Routing";
$proto28["m_srcTableName"] = "vw_rfqs";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "tbl_rfqs";
$proto31["m_srcTableName"] = "vw_rfqs";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "ID";
$proto31["m_columns"][] = "companyID";
$proto31["m_columns"][] = "RFQStatusID";
$proto31["m_columns"][] = "Inbound";
$proto31["m_columns"][] = "PONumber";
$proto31["m_columns"][] = "BOLNumber";
$proto31["m_columns"][] = "ShipperID";
$proto31["m_columns"][] = "ShipperReferenceNo";
$proto31["m_columns"][] = "ShipperName";
$proto31["m_columns"][] = "ShipperAddress";
$proto31["m_columns"][] = "ShipperAddress1";
$proto31["m_columns"][] = "ShipperAddress2";
$proto31["m_columns"][] = "ShipperCity";
$proto31["m_columns"][] = "ShipperProvinceID";
$proto31["m_columns"][] = "ShipperCountryID";
$proto31["m_columns"][] = "ShipperCountyName";
$proto31["m_columns"][] = "ShipperPostal";
$proto31["m_columns"][] = "ShipperLongitude";
$proto31["m_columns"][] = "ShipperLatitude";
$proto31["m_columns"][] = "ShipperContactID";
$proto31["m_columns"][] = "ShipperContactName";
$proto31["m_columns"][] = "ShipperPrimaryContactDetails";
$proto31["m_columns"][] = "ShipperContactTel";
$proto31["m_columns"][] = "ShipperContactFax";
$proto31["m_columns"][] = "ShipperContactEmail";
$proto31["m_columns"][] = "ShipperHoursOpen";
$proto31["m_columns"][] = "ShipperHoursClose";
$proto31["m_columns"][] = "ShipperInstructions";
$proto31["m_columns"][] = "ShipperDirections";
$proto31["m_columns"][] = "ConsigneeID";
$proto31["m_columns"][] = "ConsigneeReferenceNo";
$proto31["m_columns"][] = "ConsigneeName";
$proto31["m_columns"][] = "ConsigneeAddress";
$proto31["m_columns"][] = "ConsigneeAddress1";
$proto31["m_columns"][] = "ConsigneeAddress2";
$proto31["m_columns"][] = "ConsigneeCity";
$proto31["m_columns"][] = "ConsigneeProvinceID";
$proto31["m_columns"][] = "ConsigneeCountryID";
$proto31["m_columns"][] = "ConsigneeCountyName";
$proto31["m_columns"][] = "ConsigneePostal";
$proto31["m_columns"][] = "ConsigneeLongitude";
$proto31["m_columns"][] = "ConsigneeLatitude";
$proto31["m_columns"][] = "ConsigneeContactID";
$proto31["m_columns"][] = "ConsigneeContactDetails";
$proto31["m_columns"][] = "ConsigneeContactName";
$proto31["m_columns"][] = "ConsigneeContactTel";
$proto31["m_columns"][] = "ConsigneeContactFax";
$proto31["m_columns"][] = "ConsigneeContactEmail";
$proto31["m_columns"][] = "ConsigneeHoursOpen";
$proto31["m_columns"][] = "ConsigneeHoursClose";
$proto31["m_columns"][] = "ConsigneeInstructions";
$proto31["m_columns"][] = "ConsigneeDirections";
$proto31["m_columns"][] = "CarrierID";
$proto31["m_columns"][] = "CarrierReferenceNo";
$proto31["m_columns"][] = "CarrierName";
$proto31["m_columns"][] = "CarrierContactID";
$proto31["m_columns"][] = "CarrierContactDetails";
$proto31["m_columns"][] = "CarrierContactName";
$proto31["m_columns"][] = "CarrierContactTel";
$proto31["m_columns"][] = "CarrierContactFax";
$proto31["m_columns"][] = "CarrierContactEmail";
$proto31["m_columns"][] = "CarrierDriver";
$proto31["m_columns"][] = "CustomsBrokerID";
$proto31["m_columns"][] = "CustomsBrokerName";
$proto31["m_columns"][] = "CustomsContactID";
$proto31["m_columns"][] = "CustomsBrokerContactDetails";
$proto31["m_columns"][] = "CustomsBrokerContactName";
$proto31["m_columns"][] = "CustomsBrokerContactTel";
$proto31["m_columns"][] = "CustomsBrokerContactFax";
$proto31["m_columns"][] = "CustomsBrokerContactEmail";
$proto31["m_columns"][] = "PickupDateExpected";
$proto31["m_columns"][] = "DeliveryDateExpected";
$proto31["m_columns"][] = "PaymentTerms";
$proto31["m_columns"][] = "EquipmentType";
$proto31["m_columns"][] = "Routing";
$proto31["m_columns"][] = "Instructions";
$proto31["m_columns"][] = "Price";
$proto31["m_columns"][] = "Cost";
$proto31["m_columns"][] = "Created";
$proto31["m_columns"][] = "RFQNumber";
$proto31["m_columns"][] = "BillToPartyID";
$proto31["m_columns"][] = "BillToPartyReferenceNo";
$proto31["m_columns"][] = "BillToPartyName";
$proto31["m_columns"][] = "BillToAddress";
$proto31["m_columns"][] = "BillToPartyAddress1";
$proto31["m_columns"][] = "BillToPartyAddress2";
$proto31["m_columns"][] = "BillToPartyCity";
$proto31["m_columns"][] = "BillToPartyProvinceID";
$proto31["m_columns"][] = "BillToPartyCountryID";
$proto31["m_columns"][] = "BillToPartyPostal";
$proto31["m_columns"][] = "BillToContactID";
$proto31["m_columns"][] = "BillToContactDetails";
$proto31["m_columns"][] = "BillToPartyContactName";
$proto31["m_columns"][] = "BillToPartyContactTel";
$proto31["m_columns"][] = "BillToPartyContactFax";
$proto31["m_columns"][] = "BillToPartyContactEmail";
$proto31["m_columns"][] = "Terms";
$proto31["m_columns"][] = "Modified";
$proto31["m_columns"][] = "Status";
$proto31["m_columns"][] = "NewRFQ";
$proto31["m_columns"][] = "RFQResponseDate";
$proto31["m_columns"][] = "OrderID";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "tbl_rfqs";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "vw_rfqs";
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
$proto0["m_srcTableName"]="vw_rfqs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_rfqs = createSqlQuery_vw_rfqs();


	
		;

												

$tdatavw_rfqs[".sqlquery"] = $queryData_vw_rfqs;



include_once(getabspath("include/vw_rfqs_events.php"));
$tableEvents["vw_rfqs"] = new eventclass_vw_rfqs;
$tdatavw_rfqs[".hasEvents"] = true;

?>