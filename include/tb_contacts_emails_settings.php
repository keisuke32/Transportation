<?php
$tdatatb_contacts_emails = array();
$tdatatb_contacts_emails[".searchableFields"] = array();
$tdatatb_contacts_emails[".ShortName"] = "tb_contacts_emails";
$tdatatb_contacts_emails[".OwnerID"] = "";
$tdatatb_contacts_emails[".OriginalTable"] = "tb_contacts_emails";


$tdatatb_contacts_emails[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdatatb_contacts_emails[".originalPagesByType"] = $tdatatb_contacts_emails[".pagesByType"];
$tdatatb_contacts_emails[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdatatb_contacts_emails[".originalPages"] = $tdatatb_contacts_emails[".pages"];
$tdatatb_contacts_emails[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdatatb_contacts_emails[".originalDefaultPages"] = $tdatatb_contacts_emails[".defaultPages"];

//	field labels
$fieldLabelstb_contacts_emails = array();
$fieldToolTipstb_contacts_emails = array();
$pageTitlestb_contacts_emails = array();
$placeHolderstb_contacts_emails = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_contacts_emails["English"] = array();
	$fieldToolTipstb_contacts_emails["English"] = array();
	$placeHolderstb_contacts_emails["English"] = array();
	$pageTitlestb_contacts_emails["English"] = array();
	$fieldLabelstb_contacts_emails["English"]["ID"] = "ID";
	$fieldToolTipstb_contacts_emails["English"]["ID"] = "";
	$placeHolderstb_contacts_emails["English"]["ID"] = "";
	$fieldLabelstb_contacts_emails["English"]["ContactID"] = "Contact ID";
	$fieldToolTipstb_contacts_emails["English"]["ContactID"] = "";
	$placeHolderstb_contacts_emails["English"]["ContactID"] = "";
	$fieldLabelstb_contacts_emails["English"]["EmailAddress"] = "Email Address";
	$fieldToolTipstb_contacts_emails["English"]["EmailAddress"] = "";
	$placeHolderstb_contacts_emails["English"]["EmailAddress"] = "";
	if (count($fieldToolTipstb_contacts_emails["English"]))
		$tdatatb_contacts_emails[".isUseToolTips"] = true;
}


	$tdatatb_contacts_emails[".NCSearch"] = true;



$tdatatb_contacts_emails[".shortTableName"] = "tb_contacts_emails";
$tdatatb_contacts_emails[".nSecOptions"] = 0;

$tdatatb_contacts_emails[".mainTableOwnerID"] = "";
$tdatatb_contacts_emails[".entityType"] = 0;
$tdatatb_contacts_emails[".connId"] = "logistics_at_localhost";


$tdatatb_contacts_emails[".strOriginalTableName"] = "tb_contacts_emails";

	



$tdatatb_contacts_emails[".showAddInPopup"] = false;

$tdatatb_contacts_emails[".showEditInPopup"] = false;

$tdatatb_contacts_emails[".showViewInPopup"] = false;

$tdatatb_contacts_emails[".listAjax"] = false;
//	temporary
//$tdatatb_contacts_emails[".listAjax"] = false;

	$tdatatb_contacts_emails[".audit"] = true;

	$tdatatb_contacts_emails[".locking"] = false;


$pages = $tdatatb_contacts_emails[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_contacts_emails[".edit"] = true;
	$tdatatb_contacts_emails[".afterEditAction"] = 1;
	$tdatatb_contacts_emails[".closePopupAfterEdit"] = 1;
	$tdatatb_contacts_emails[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_contacts_emails[".add"] = true;
$tdatatb_contacts_emails[".afterAddAction"] = 1;
$tdatatb_contacts_emails[".closePopupAfterAdd"] = 1;
$tdatatb_contacts_emails[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_contacts_emails[".list"] = true;
}



$tdatatb_contacts_emails[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_contacts_emails[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_contacts_emails[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_contacts_emails[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_contacts_emails[".printFriendly"] = true;
}



$tdatatb_contacts_emails[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_contacts_emails[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_contacts_emails[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_contacts_emails[".isUseAjaxSuggest"] = true;

$tdatatb_contacts_emails[".rowHighlite"] = true;



																																										

$tdatatb_contacts_emails[".ajaxCodeSnippetAdded"] = false;

$tdatatb_contacts_emails[".buttonsAdded"] = false;

$tdatatb_contacts_emails[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_contacts_emails[".isUseTimeForSearch"] = false;


$tdatatb_contacts_emails[".badgeColor"] = "00c2c5";


$tdatatb_contacts_emails[".allSearchFields"] = array();
$tdatatb_contacts_emails[".filterFields"] = array();
$tdatatb_contacts_emails[".requiredSearchFields"] = array();

$tdatatb_contacts_emails[".googleLikeFields"] = array();
$tdatatb_contacts_emails[".googleLikeFields"][] = "ID";
$tdatatb_contacts_emails[".googleLikeFields"][] = "ContactID";
$tdatatb_contacts_emails[".googleLikeFields"][] = "EmailAddress";



$tdatatb_contacts_emails[".tableType"] = "list";

$tdatatb_contacts_emails[".printerPageOrientation"] = 0;
$tdatatb_contacts_emails[".nPrinterPageScale"] = 100;

$tdatatb_contacts_emails[".nPrinterSplitRecords"] = 40;

$tdatatb_contacts_emails[".geocodingEnabled"] = false;










$tdatatb_contacts_emails[".pageSize"] = 20;

$tdatatb_contacts_emails[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_contacts_emails[".strOrderBy"] = $tstrOrderBy;

$tdatatb_contacts_emails[".orderindexes"] = array();


$tdatatb_contacts_emails[".sqlHead"] = "SELECT ID,  	ContactID,  	EmailAddress";
$tdatatb_contacts_emails[".sqlFrom"] = "FROM tb_contacts_emails";
$tdatatb_contacts_emails[".sqlWhereExpr"] = "";
$tdatatb_contacts_emails[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_contacts_emails[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_contacts_emails[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_contacts_emails[".highlightSearchResults"] = true;

$tableKeystb_contacts_emails = array();
$tableKeystb_contacts_emails[] = "ID";
$tdatatb_contacts_emails[".Keys"] = $tableKeystb_contacts_emails;


$tdatatb_contacts_emails[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tb_contacts_emails";
	$fdata["Label"] = GetFieldLabel("tb_contacts_emails","ID");
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


	$tdatatb_contacts_emails["ID"] = $fdata;
		$tdatatb_contacts_emails[".searchableFields"][] = "ID";
//	ContactID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ContactID";
	$fdata["GoodName"] = "ContactID";
	$fdata["ownerTable"] = "tb_contacts_emails";
	$fdata["Label"] = GetFieldLabel("tb_contacts_emails","ContactID");
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


	$tdatatb_contacts_emails["ContactID"] = $fdata;
		$tdatatb_contacts_emails[".searchableFields"][] = "ContactID";
//	EmailAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EmailAddress";
	$fdata["GoodName"] = "EmailAddress";
	$fdata["ownerTable"] = "tb_contacts_emails";
	$fdata["Label"] = GetFieldLabel("tb_contacts_emails","EmailAddress");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "EmailAddress";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmailAddress";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdatatb_contacts_emails["EmailAddress"] = $fdata;
		$tdatatb_contacts_emails[".searchableFields"][] = "EmailAddress";


$tables_data["tb_contacts_emails"]=&$tdatatb_contacts_emails;
$field_labels["tb_contacts_emails"] = &$fieldLabelstb_contacts_emails;
$fieldToolTips["tb_contacts_emails"] = &$fieldToolTipstb_contacts_emails;
$placeHolders["tb_contacts_emails"] = &$placeHolderstb_contacts_emails;
$page_titles["tb_contacts_emails"] = &$pageTitlestb_contacts_emails;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tb_contacts_emails"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tb_contacts_emails"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tb_contacts";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tb_contacts";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tb_contacts";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tb_contacts_emails"][0] = $masterParams;
				$masterTablesData["tb_contacts_emails"][0]["masterKeys"] = array();
	$masterTablesData["tb_contacts_emails"][0]["masterKeys"][]="ID";
				$masterTablesData["tb_contacts_emails"][0]["detailKeys"] = array();
	$masterTablesData["tb_contacts_emails"][0]["detailKeys"][]="ContactID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tb_contacts_emails()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	ContactID,  	EmailAddress";
$proto0["m_strFrom"] = "FROM tb_contacts_emails";
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
	"m_strTable" => "tb_contacts_emails",
	"m_srcTableName" => "tb_contacts_emails"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tb_contacts_emails";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ContactID",
	"m_strTable" => "tb_contacts_emails",
	"m_srcTableName" => "tb_contacts_emails"
));

$proto8["m_sql"] = "ContactID";
$proto8["m_srcTableName"] = "tb_contacts_emails";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EmailAddress",
	"m_strTable" => "tb_contacts_emails",
	"m_srcTableName" => "tb_contacts_emails"
));

$proto10["m_sql"] = "EmailAddress";
$proto10["m_srcTableName"] = "tb_contacts_emails";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tb_contacts_emails";
$proto13["m_srcTableName"] = "tb_contacts_emails";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ID";
$proto13["m_columns"][] = "ContactID";
$proto13["m_columns"][] = "EmailAddress";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tb_contacts_emails";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tb_contacts_emails";
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
$proto0["m_srcTableName"]="tb_contacts_emails";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_contacts_emails = createSqlQuery_tb_contacts_emails();


	
		;

			

$tdatatb_contacts_emails[".sqlquery"] = $queryData_tb_contacts_emails;



$tableEvents["tb_contacts_emails"] = new eventsBase;
$tdatatb_contacts_emails[".hasEvents"] = false;

?>