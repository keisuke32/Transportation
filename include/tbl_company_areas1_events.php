<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_tbl_company_areas1  extends eventsBase
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

		//echo(print_r($values["ProvinceID"]));
if ($values["ProvinceID"])
{
$provinceIDs = explode(",",$values["ProvinceID"]);
foreach($provinceIDs as $provinceID)
{
  $sql = "select ID from tbl_company_areas WHERE `CompanyID`=".$values['CompanyID'] ." AND `CountryID`=".$values['CountryID'] ." AND `ProvinceID`=".$provinceID;
	$ID = DBLookup($sql);
//	echo($sql." ID: ".$ID);
  if(is_null($ID)) {
	  $sql_insert="insert into tbl_company_areas (`CompanyID`, `CountryID`, `ProvinceID`) values (" . $values['CompanyID'] . ", " . $values['CountryID'] . ", " . $provinceID . ")";
  	db_exec($sql_insert);
  }
}
return false;
}
;		
} // function CustomAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
