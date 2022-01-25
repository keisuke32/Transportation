<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");
require_once('classes/menupage.php');


Security::processLogoutRequest();
if( !isLogged() || Security::isGuest() ) 
{
	Security::tryRelogin();
}

if( !isLogged() )
{
	HeaderRedirect("login");
	return;
}


if (($_SESSION["MyURL"] == "") || (!Security::isGuest())) {
	Security::saveRedirectURL();
}


require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/tbl_users_events.php"));
$tableEvents["tbl_users"] = new eventclass_tbl_users;
include_once(getabspath("include/tbl_order_status_events.php"));
$tableEvents["tbl_order_status"] = new eventclass_tbl_order_status;
include_once(getabspath("include/tbl_orders_events.php"));
$tableEvents["tbl_orders"] = new eventclass_tbl_orders;
include_once(getabspath("include/tbl_company_events.php"));
$tableEvents["tbl_company"] = new eventclass_tbl_company;
include_once(getabspath("include/tbl_company_equipment_events.php"));
$tableEvents["tbl_company_equipment"] = new eventclass_tbl_company_equipment;
include_once(getabspath("include/tbl_company_areas1_events.php"));
$tableEvents["tbl_company_areas"] = new eventclass_tbl_company_areas1;
include_once(getabspath("include/tbl_rfqs_events.php"));
$tableEvents["tbl_rfqs"] = new eventclass_tbl_rfqs;
include_once(getabspath("include/tbl_rfq_assesorial_events.php"));
$tableEvents["tbl_rfq_assesorial"] = new eventclass_tbl_rfq_assesorial;
include_once(getabspath("include/tbl_rfq_carrier_quote_events.php"));
$tableEvents["tbl_rfq_carrier_quote"] = new eventclass_tbl_rfq_carrier_quote;
include_once(getabspath("include/formfields1_events.php"));
$tableEvents["formfields"] = new eventclass_formfields1;
include_once(getabspath("include/forms1_events.php"));
$tableEvents["forms"] = new eventclass_forms1;

$xt = new Xtempl();

//array of params for classes
$params = array();
$params["id"] = postvalue_number("id"); 
$params["xt"] = &$xt;
$params["tName"] = GLOBAL_PAGES;
$params["pageType"] = PAGE_MENU;
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$params["pageName"] = postvalue("page"); 

$pageObject = new MenuPage($params);
$pageObject->init();

$pageObject->process();
?>