<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_tbl_rfq_carrier_quote  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeQueryList"]=true;

		$this->events["BeforeShowList"]=true;

		$this->events["AfterEdit"]=true;


		$this->events["ProcessValuesEdit"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before SQL query
function BeforeQueryList(&$strSQL, &$strWhereClause, &$strOrderBy, $pageObject)
{

		
// If the user belongs to the "Carrier" group then modify the where clause to only display the company record for the users company
$groups = Security::getUserGroups();
if( $groups["Carrier"] ) {
  $strWhereClause = whereAdd($strWhereClause, "CarrierCompanyID = '" . $_SESSION["CompanyID"] . "'");
}



// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeQueryList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, $pageObject)
{

		
$groups = Security::getUserGroups();
if( $groups["Carrier"] ) $pageObject->hideItem("accept_button", $recordId);
$pageObject->hideField("ContactDetails");

// if the RFQStatusID = 3 AND the record TotalCost is NOT Null 
//if (DBLookup("SELECT RFQStatusID FROM `tbl_rfq_carrier_quote` WHERE RFQID = ")==3 || );
//$pageObject->hideItem("accept_button", $recordId);

//$pageObject->showItem("accept_button", $recordId);


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, $pageObject)
{

		
$TotalAmount = DBLookup("SELECT SUM(Amount) AS TotalAmount FROM `tbl_rfq_assesorial` WHERE QuotationID = ".$values['ID']." GROUP BY QuotationID");
DB::Exec("UPDATE `tbl_rfq_carrier_quote` SET `TotalCost` = ".$TotalAmount." WHERE `tbl_rfq_carrier_quote`.`ID` = ".$values['ID'])


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesEdit(&$values, $pageObject)
{

		
$TotalAmount = DBLookup("SELECT SUM(Amount) AS TotalAmount FROM `tbl_rfq_assesorial` WHERE QuotationID = ".$values['ID']." GROUP BY QuotationID");
DB::Exec("UPDATE `tbl_rfq_carrier_quote` SET `TotalCost` = ".$TotalAmount." WHERE `tbl_rfq_carrier_quote`.`ID` = ".$values['ID']);
$values['TotalCost'] = $TotalAmount;


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function ProcessValuesEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>