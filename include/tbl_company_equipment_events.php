<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_tbl_company_equipment  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["CustomAdd"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Custom add
function CustomAdd(&$values, &$keys, &$error, $inline, $pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.

//echo("array: ".print_r($values["EquipmentTypeID"])."<BR>/n/r");
if ($values["EquipmentTypeID"])
{
  $EquipmentTypeIDs = explode(",",$values["EquipmentTypeID"]);
  foreach($EquipmentTypeIDs as $EquipmentTypeID)
  {
    $sql = "select ID from tbl_company_equipment WHERE `CompanyID`=".$values['CompanyID'] ." AND `EquipmentTypeID`=".$EquipmentTypeID;
  	$ID = DBLookup($sql);
	  //echo("SQL: ".$sql." ID: ".$ID."<BR>/n/r");
    if(is_null($ID)) {
	    $sql_insert="insert into tbl_company_equipment (`CompanyID`, `EquipmentTypeID`) values (" . $values['CompanyID'] . ", " . $EquipmentTypeID . ")";
	    //echo("SQL Insert: ".$sql_insert." ID: ".$ID."<BR>/n/r");
    	db_exec($sql_insert);
    }
  }
  return false;
} else {
  return true;
}
;		
} // function CustomAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
