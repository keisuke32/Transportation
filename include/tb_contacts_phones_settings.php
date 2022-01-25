<?php
$tdatatb_contacts_phones = array();
$tdatatb_contacts_phones[".searchableFields"] = array();
$tdatatb_contacts_phones[".ShortName"] = "tb_contacts_phones";
$tdatatb_contacts_phones[".OwnerID"] = "";
$tdatatb_contacts_phones[".OriginalTable"] = "tb_contacts_phones";


$tdatatb_contacts_phones[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatb_contacts_phones[".originalPagesByType"] = $tdatatb_contacts_phones[".pagesByType"];
$tdatatb_contacts_phones[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatb_contacts_phones[".originalPages"] = $tdatatb_contacts_phones[".pages"];
$tdatatb_contacts_phones[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatb_contacts_phones[".originalDefaultPages"] = $tdatatb_contacts_phones[".defaultPages"];

//	field labels
$fieldLabelstb_contacts_phones = array();
$fieldToolTipstb_contacts_phones = array();
$pageTitlestb_contacts_phones = array();
$placeHolderstb_contacts_phones = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_contacts_phones["English"] = array();
	$fieldToolTipstb_contacts_phones["English"] = array();
	$placeHolderstb_contacts_phones["English"] = array();
	$pageTitlestb_contacts_phones["English"] = array();
	$fieldLabelstb_contacts_phones["English"]["ID"] = "ID";
	$fieldToolTipstb_contacts_phones["English"]["ID"] = "";
	$placeHolderstb_contacts_phones["English"]["ID"] = "";
	$fieldLabelstb_contacts_phones["English"]["PhoneNumber"] = "Phone Number";
	$fieldToolTipstb_contacts_phones["English"]["PhoneNumber"] = "";
	$placeHolderstb_contacts_phones["English"]["PhoneNumber"] = "";
	$fieldLabelstb_contacts_phones["English"]["ContactID"] = "Contact";
	$fieldToolTipstb_contacts_phones["English"]["ContactID"] = "";
	$placeHolderstb_contacts_phones["English"]["ContactID"] = "";
	if (count($fieldToolTipstb_contacts_phones["English"]))
		$tdatatb_contacts_phones[".isUseToolTips"] = true;
}


	$tdatatb_contacts_phones[".NCSearch"] = true;



$tdatatb_contacts_phones[".shortTableName"] = "tb_contacts_phones";
$tdatatb_contacts_phones[".nSecOptions"] = 0;

$tdatatb_contacts_phones[".mainTableOwnerID"] = "";
$tdatatb_contacts_phones[".entityType"] = 0;
$tdatatb_contacts_phones[".connId"] = "logistics_at_localhost";


$tdatatb_contacts_phones[".strOriginalTableName"] = "tb_contacts_phones";

	



$tdatatb_contacts_phones[".showAddInPopup"] = false;

$tdatatb_contacts_phones[".showEditInPopup"] = false;

$tdatatb_contacts_phones[".showViewInPopup"] = false;

$tdatatb_contacts_phones[".listAjax"] = false;
//	temporary
//$tdatatb_contacts_phones[".listAjax"] = false;

	$tdatatb_contacts_phones[".audit"] = true;

	$tdatatb_contacts_phones[".locking"] = false;


$pages = $tdatatb_contacts_phones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_contacts_phones[".edit"] = true;
	$tdatatb_contacts_phones[".afterEditAction"] = 1;
	$tdatatb_contacts_phones[".closePopupAfterEdit"] = 1;
	$tdatatb_contacts_phones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_contacts_phones[".add"] = true;
$tdatatb_contacts_phones[".afterAddAction"] = 1;
$tdatatb_contacts_phones[".closePopupAfterAdd"] = 1;
$tdatatb_contacts_phones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_contacts_phones[".list"] = true;
}



$tdatatb_contacts_phones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_contacts_phones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_contacts_phones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_contacts_phones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_contacts_phones[".printFriendly"] = true;
}



$tdatatb_contacts_phones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_contacts_phones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_contacts_phones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_contacts_phones[".isUseAjaxSuggest"] = true;

$tdatatb_contacts_phones[".rowHighlite"] = true;



																																										

$tdatatb_contacts_phones[".ajaxCodeSnippetAdded"] = false;

$tdatatb_contacts_phones[".buttonsAdded"] = false;

$tdatatb_contacts_phones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_contacts_phones[".isUseTimeForSearch"] = false;


$tdatatb_contacts_phones[".badgeColor"] = "6b8e23";


$tdatatb_contacts_phones[".allSearchFields"] = array();
$tdatatb_contacts_phones[".filterFields"] = array();
$tdatatb_contacts_phones[".requiredSearchFields"] = array();

$tdatatb_contacts_phones[".googleLikeFields"] = array();
$tdatatb_contacts_phones[".googleLikeFields"][] = "ID";
$tdatatb_contacts_phones[".googleLikeFields"][] = "PhoneNumber";
$tdatatb_contacts_phones[".googleLikeFields"][] = "ContactID";



$tdatatb_contacts_phones[".tableType"] = "list";

$tdatatb_contacts_phones[".printerPageOrientation"] = 0;
$tdatatb_contacts_phones[".nPrinterPageScale"] = 100;

$tdatatb_contacts_phones[".nPrinterSplitRecords"] = 40;

$tdatatb_contacts_phones[".geocodingEnabled"] = false;










$tdatatb_contacts_phones[".pageSize"] = 20;

$tdatatb_contacts_phones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_contacts_phones[".strOrderBy"] = $tstrOrderBy;

$tdatatb_contacts_phones[".orderindexes"] = array();


$tdatatb_contacts_phones[".sqlHead"] = "SELECT ID,  	PhoneNumber,  	ContactID";
$tdatatb_contacts_phones[".sqlFrom"] = "FROM tb_contacts_phones";
$tdatatb_contacts_phones[".sqlWhereExpr"] = "";
$tdatatb_contacts_phones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_contacts_phones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_contacts_phones[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_contacts_phones[".highlightSearchResults"] = true;

$tableKeystb_contacts_phones = array();
$tableKeystb_contacts_phones[] = "ID";
$tdatatb_contacts_phones[".Keys"] = $tableKeystb_contacts_phones;


$tdatatb_contacts_phones[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tb_contacts_phones";
	$fdata["Label"] = GetFieldLabel("tb_contacts_phones","ID");
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


	$tdatatb_contacts_phones["ID"] = $fdata;
		$tdatatb_contacts_phones[".searchableFields"][] = "ID";
//	PhoneNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PhoneNumber";
	$fdata["GoodName"] = "PhoneNumber";
	$fdata["ownerTable"] = "tb_contacts_phones";
	$fdata["Label"] = GetFieldLabel("tb_contacts_phones","PhoneNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PhoneNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PhoneNumber";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatatb_contacts_phones["PhoneNumber"] = $fdata;
		$tdatatb_contacts_phones[".searchableFields"][] = "PhoneNumber";
//	ContactID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ContactID";
	$fdata["GoodName"] = "ContactID";
	$fdata["ownerTable"] = "tb_contacts_phones";
	$fdata["Label"] = GetFieldLabel("tb_contacts_phones","ContactID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ContactID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ContactID";

	
	
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
	$edata["LookupTable"] = "tb_contacts";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ContactName";

	

	
	$edata["LookupOrderBy"] = "ContactName";

	
	
	
	

	
	
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


	$tdatatb_contacts_phones["ContactID"] = $fdata;
		$tdatatb_contacts_phones[".searchableFields"][] = "ContactID";


$tables_data["tb_contacts_phones"]=&$tdatatb_contacts_phones;
$field_labels["tb_contacts_phones"] = &$fieldLabelstb_contacts_phones;
$fieldToolTips["tb_contacts_phones"] = &$fieldToolTipstb_contacts_phones;
$placeHolders["tb_contacts_phones"] = &$placeHolderstb_contacts_phones;
$page_titles["tb_contacts_phones"] = &$pageTitlestb_contacts_phones;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tb_contacts_phones"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tb_contacts_phones"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tb_contacts";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tb_contacts";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tb_contacts";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tb_contacts_phones"][0] = $masterParams;
				$masterTablesData["tb_contacts_phones"][0]["masterKeys"] = array();
	$masterTablesData["tb_contacts_phones"][0]["masterKeys"][]="ID";
				$masterTablesData["tb_contacts_phones"][0]["detailKeys"] = array();
	$masterTablesData["tb_contacts_phones"][0]["detailKeys"][]="ContactID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tb_contacts_phones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	PhoneNumber,  	ContactID";
$proto0["m_strFrom"] = "FROM tb_contacts_phones";
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
	"m_strTable" => "tb_contacts_phones",
	"m_srcTableName" => "tb_contacts_phones"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tb_contacts_phones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PhoneNumber",
	"m_strTable" => "tb_contacts_phones",
	"m_srcTableName" => "tb_contacts_phones"
));

$proto8["m_sql"] = "PhoneNumber";
$proto8["m_srcTableName"] = "tb_contacts_phones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ContactID",
	"m_strTable" => "tb_contacts_phones",
	"m_srcTableName" => "tb_contacts_phones"
));

$proto10["m_sql"] = "ContactID";
$proto10["m_srcTableName"] = "tb_contacts_phones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tb_contacts_phones";
$proto13["m_srcTableName"] = "tb_contacts_phones";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ID";
$proto13["m_columns"][] = "PhoneNumber";
$proto13["m_columns"][] = "ContactID";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tb_contacts_phones";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tb_contacts_phones";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tb_contacts_phones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_contacts_phones = createSqlQuery_tb_contacts_phones();


	
		;

			

$tdatatb_contacts_phones[".sqlquery"] = $queryData_tb_contacts_phones;



$tableEvents["tb_contacts_phones"] = new eventsBase;
$tdatatb_contacts_phones[".hasEvents"] = false;

?>