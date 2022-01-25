<?php
$tdatatbl_rfqs = array();
$tdatatbl_rfqs[".searchableFields"] = array();
$tdatatbl_rfqs[".ShortName"] = "tbl_rfqs";
$tdatatbl_rfqs[".OwnerID"] = "";
$tdatatbl_rfqs[".OriginalTable"] = "tbl_rfqs";


$tdatatbl_rfqs[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"CarrierQuote\",\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatbl_rfqs[".originalPagesByType"] = $tdatatbl_rfqs[".pagesByType"];
$tdatatbl_rfqs[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"CarrierQuote\",\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatbl_rfqs[".originalPages"] = $tdatatbl_rfqs[".pages"];
$tdatatbl_rfqs[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"CarrierQuote\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatbl_rfqs[".originalDefaultPages"] = $tdatatbl_rfqs[".defaultPages"];

//	field labels
$fieldLabelstbl_rfqs = array();
$fieldToolTipstbl_rfqs = array();
$pageTitlestbl_rfqs = array();
$placeHolderstbl_rfqs = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_rfqs["English"] = array();
	$fieldToolTipstbl_rfqs["English"] = array();
	$placeHolderstbl_rfqs["English"] = array();
	$pageTitlestbl_rfqs["English"] = array();
	$fieldLabelstbl_rfqs["English"]["ID"] = "ID";
	$fieldToolTipstbl_rfqs["English"]["ID"] = "";
	$placeHolderstbl_rfqs["English"]["ID"] = "";
	$fieldLabelstbl_rfqs["English"]["companyID"] = "Company";
	$fieldToolTipstbl_rfqs["English"]["companyID"] = "";
	$placeHolderstbl_rfqs["English"]["companyID"] = "";
	$fieldLabelstbl_rfqs["English"]["Inbound"] = "Inbound";
	$fieldToolTipstbl_rfqs["English"]["Inbound"] = "";
	$placeHolderstbl_rfqs["English"]["Inbound"] = "";
	$fieldLabelstbl_rfqs["English"]["PONumber"] = "PO Number";
	$fieldToolTipstbl_rfqs["English"]["PONumber"] = "";
	$placeHolderstbl_rfqs["English"]["PONumber"] = "";
	$fieldLabelstbl_rfqs["English"]["BOLNumber"] = "BOL Number";
	$fieldToolTipstbl_rfqs["English"]["BOLNumber"] = "";
	$placeHolderstbl_rfqs["English"]["BOLNumber"] = "";
	$fieldLabelstbl_rfqs["English"]["ShipperID"] = "Shipper";
	$fieldToolTipstbl_rfqs["English"]["ShipperID"] = "";
	$placeHolderstbl_rfqs["English"]["ShipperID"] = "";
	$fieldLabelstbl_rfqs["English"]["ShipperReferenceNo"] = "Reference No";
	$fieldToolTipstbl_rfqs["English"]["ShipperReferenceNo"] = "";
	$placeHolderstbl_rfqs["English"]["ShipperReferenceNo"] = "";
	$fieldLabelstbl_rfqs["English"]["ShipperName"] = "Name";
	$fieldToolTipstbl_rfqs["English"]["ShipperName"] = "";
	$placeHolderstbl_rfqs["English"]["ShipperName"] = "";
	$fieldLabelstbl_rfqs["English"]["ShipperAddress1"] = "Address1";
	$fieldToolTipstbl_rfqs["English"]["ShipperAddress1"] = "";
	$placeHolderstbl_rfqs["English"]["ShipperAddress1"] = "";
	$fieldLabelstbl_rfqs["English"]["ShipperAddress2"] = "Address2";
	$fieldToolTipstbl_rfqs["English"]["ShipperAddress2"] = "";
	$placeHolderstbl_rfqs["English"]["ShipperAddress2"] = "";
	$fieldLabelstbl_rfqs["English"]["ShipperCity"] = "City";
	$fieldToolTipstbl_rfqs["English"]["ShipperCity"] = "";
	$placeHolderstbl_rfqs["English"]["ShipperCity"] = "";
	$fieldLabelstbl_rfqs["English"]["ShipperProvinceID"] = "Province";
	$fieldToolTipstbl_rfqs["English"]["ShipperProvinceID"] = "";
	$placeHolderstbl_rfqs["English"]["ShipperProvinceID"] = "";
	$fieldLabelstbl_rfqs["English"]["ShipperCountryID"] = "Country";
	$fieldToolTipstbl_rfqs["English"]["ShipperCountryID"] = "";
	$placeHolderstbl_rfqs["English"]["ShipperCountryID"] = "";
	$fieldLabelstbl_rfqs["English"]["ShipperCountyName"] = "County Name";
	$fieldToolTipstbl_rfqs["English"]["ShipperCountyName"] = "";
	$placeHolderstbl_rfqs["English"]["ShipperCountyName"] = "";
	$fieldLabelstbl_rfqs["English"]["ShipperPostal"] = "Postal";
	$fieldToolTipstbl_rfqs["English"]["ShipperPostal"] = "";
	$placeHolderstbl_rfqs["English"]["ShipperPostal"] = "";
	$fieldLabelstbl_rfqs["English"]["ShipperLongitude"] = "Longitude";
	$fieldToolTipstbl_rfqs["English"]["ShipperLongitude"] = "";
	$placeHolderstbl_rfqs["English"]["ShipperLongitude"] = "";
	$fieldLabelstbl_rfqs["English"]["ShipperLatitude"] = "Latitude";
	$fieldToolTipstbl_rfqs["English"]["ShipperLatitude"] = "";
	$placeHolderstbl_rfqs["English"]["ShipperLatitude"] = "";
	$fieldLabelstbl_rfqs["English"]["ShipperContactName"] = "Contact Name";
	$fieldToolTipstbl_rfqs["English"]["ShipperContactName"] = "";
	$placeHolderstbl_rfqs["English"]["ShipperContactName"] = "";
	$fieldLabelstbl_rfqs["English"]["ShipperContactTel"] = "Contact Tel";
	$fieldToolTipstbl_rfqs["English"]["ShipperContactTel"] = "";
	$placeHolderstbl_rfqs["English"]["ShipperContactTel"] = "";
	$fieldLabelstbl_rfqs["English"]["ShipperContactFax"] = "Contact Fax";
	$fieldToolTipstbl_rfqs["English"]["ShipperContactFax"] = "";
	$placeHolderstbl_rfqs["English"]["ShipperContactFax"] = "";
	$fieldLabelstbl_rfqs["English"]["ShipperContactEmail"] = "Contact Email";
	$fieldToolTipstbl_rfqs["English"]["ShipperContactEmail"] = "";
	$placeHolderstbl_rfqs["English"]["ShipperContactEmail"] = "";
	$fieldLabelstbl_rfqs["English"]["ConsigneeID"] = "Consignee";
	$fieldToolTipstbl_rfqs["English"]["ConsigneeID"] = "";
	$placeHolderstbl_rfqs["English"]["ConsigneeID"] = "";
	$fieldLabelstbl_rfqs["English"]["ConsigneeReferenceNo"] = "Reference No";
	$fieldToolTipstbl_rfqs["English"]["ConsigneeReferenceNo"] = "";
	$placeHolderstbl_rfqs["English"]["ConsigneeReferenceNo"] = "";
	$fieldLabelstbl_rfqs["English"]["ConsigneeName"] = "Name";
	$fieldToolTipstbl_rfqs["English"]["ConsigneeName"] = "";
	$placeHolderstbl_rfqs["English"]["ConsigneeName"] = "";
	$fieldLabelstbl_rfqs["English"]["ConsigneeAddress1"] = "Address1";
	$fieldToolTipstbl_rfqs["English"]["ConsigneeAddress1"] = "";
	$placeHolderstbl_rfqs["English"]["ConsigneeAddress1"] = "";
	$fieldLabelstbl_rfqs["English"]["ConsigneeAddress2"] = "Address2";
	$fieldToolTipstbl_rfqs["English"]["ConsigneeAddress2"] = "";
	$placeHolderstbl_rfqs["English"]["ConsigneeAddress2"] = "";
	$fieldLabelstbl_rfqs["English"]["ConsigneeCity"] = "City";
	$fieldToolTipstbl_rfqs["English"]["ConsigneeCity"] = "";
	$placeHolderstbl_rfqs["English"]["ConsigneeCity"] = "";
	$fieldLabelstbl_rfqs["English"]["ConsigneeProvinceID"] = "Province";
	$fieldToolTipstbl_rfqs["English"]["ConsigneeProvinceID"] = "";
	$placeHolderstbl_rfqs["English"]["ConsigneeProvinceID"] = "";
	$fieldLabelstbl_rfqs["English"]["ConsigneeCountryID"] = "Country";
	$fieldToolTipstbl_rfqs["English"]["ConsigneeCountryID"] = "";
	$placeHolderstbl_rfqs["English"]["ConsigneeCountryID"] = "";
	$fieldLabelstbl_rfqs["English"]["ConsigneeCountyName"] = "County Name";
	$fieldToolTipstbl_rfqs["English"]["ConsigneeCountyName"] = "";
	$placeHolderstbl_rfqs["English"]["ConsigneeCountyName"] = "";
	$fieldLabelstbl_rfqs["English"]["ConsigneePostal"] = "Postal";
	$fieldToolTipstbl_rfqs["English"]["ConsigneePostal"] = "";
	$placeHolderstbl_rfqs["English"]["ConsigneePostal"] = "";
	$fieldLabelstbl_rfqs["English"]["ConsigneeLongitude"] = "Longitude";
	$fieldToolTipstbl_rfqs["English"]["ConsigneeLongitude"] = "";
	$placeHolderstbl_rfqs["English"]["ConsigneeLongitude"] = "";
	$fieldLabelstbl_rfqs["English"]["ConsigneeLatitude"] = "Latitude";
	$fieldToolTipstbl_rfqs["English"]["ConsigneeLatitude"] = "";
	$placeHolderstbl_rfqs["English"]["ConsigneeLatitude"] = "";
	$fieldLabelstbl_rfqs["English"]["ConsigneeContactName"] = "Name";
	$fieldToolTipstbl_rfqs["English"]["ConsigneeContactName"] = "";
	$placeHolderstbl_rfqs["English"]["ConsigneeContactName"] = "";
	$fieldLabelstbl_rfqs["English"]["ConsigneeContactTel"] = "Tel";
	$fieldToolTipstbl_rfqs["English"]["ConsigneeContactTel"] = "";
	$placeHolderstbl_rfqs["English"]["ConsigneeContactTel"] = "";
	$fieldLabelstbl_rfqs["English"]["ConsigneeContactFax"] = "Fax";
	$fieldToolTipstbl_rfqs["English"]["ConsigneeContactFax"] = "";
	$placeHolderstbl_rfqs["English"]["ConsigneeContactFax"] = "";
	$fieldLabelstbl_rfqs["English"]["ConsigneeContactEmail"] = "Email";
	$fieldToolTipstbl_rfqs["English"]["ConsigneeContactEmail"] = "";
	$placeHolderstbl_rfqs["English"]["ConsigneeContactEmail"] = "";
	$fieldLabelstbl_rfqs["English"]["CarrierID"] = "Carrier";
	$fieldToolTipstbl_rfqs["English"]["CarrierID"] = "";
	$placeHolderstbl_rfqs["English"]["CarrierID"] = "";
	$fieldLabelstbl_rfqs["English"]["CarrierReferenceNo"] = "Reference No";
	$fieldToolTipstbl_rfqs["English"]["CarrierReferenceNo"] = "";
	$placeHolderstbl_rfqs["English"]["CarrierReferenceNo"] = "";
	$fieldLabelstbl_rfqs["English"]["CarrierName"] = "Name";
	$fieldToolTipstbl_rfqs["English"]["CarrierName"] = "";
	$placeHolderstbl_rfqs["English"]["CarrierName"] = "";
	$fieldLabelstbl_rfqs["English"]["CarrierContactName"] = "Name";
	$fieldToolTipstbl_rfqs["English"]["CarrierContactName"] = "";
	$placeHolderstbl_rfqs["English"]["CarrierContactName"] = "";
	$fieldLabelstbl_rfqs["English"]["CarrierContactTel"] = "Tel";
	$fieldToolTipstbl_rfqs["English"]["CarrierContactTel"] = "";
	$placeHolderstbl_rfqs["English"]["CarrierContactTel"] = "";
	$fieldLabelstbl_rfqs["English"]["CarrierContactFax"] = "Fax";
	$fieldToolTipstbl_rfqs["English"]["CarrierContactFax"] = "";
	$placeHolderstbl_rfqs["English"]["CarrierContactFax"] = "";
	$fieldLabelstbl_rfqs["English"]["CarrierContactEmail"] = "Email";
	$fieldToolTipstbl_rfqs["English"]["CarrierContactEmail"] = "";
	$placeHolderstbl_rfqs["English"]["CarrierContactEmail"] = "";
	$fieldLabelstbl_rfqs["English"]["CarrierDriver"] = "Driver";
	$fieldToolTipstbl_rfqs["English"]["CarrierDriver"] = "";
	$placeHolderstbl_rfqs["English"]["CarrierDriver"] = "";
	$fieldLabelstbl_rfqs["English"]["CustomsBrokerID"] = "Customs Broker";
	$fieldToolTipstbl_rfqs["English"]["CustomsBrokerID"] = "";
	$placeHolderstbl_rfqs["English"]["CustomsBrokerID"] = "";
	$fieldLabelstbl_rfqs["English"]["CustomsBrokerName"] = "Broker Name";
	$fieldToolTipstbl_rfqs["English"]["CustomsBrokerName"] = "";
	$placeHolderstbl_rfqs["English"]["CustomsBrokerName"] = "";
	$fieldLabelstbl_rfqs["English"]["CustomsBrokerContactName"] = "Contact Name";
	$fieldToolTipstbl_rfqs["English"]["CustomsBrokerContactName"] = "";
	$placeHolderstbl_rfqs["English"]["CustomsBrokerContactName"] = "";
	$fieldLabelstbl_rfqs["English"]["CustomsBrokerContactTel"] = "Tel";
	$fieldToolTipstbl_rfqs["English"]["CustomsBrokerContactTel"] = "";
	$placeHolderstbl_rfqs["English"]["CustomsBrokerContactTel"] = "";
	$fieldLabelstbl_rfqs["English"]["CustomsBrokerContactFax"] = "Fax";
	$fieldToolTipstbl_rfqs["English"]["CustomsBrokerContactFax"] = "";
	$placeHolderstbl_rfqs["English"]["CustomsBrokerContactFax"] = "";
	$fieldLabelstbl_rfqs["English"]["CustomsBrokerContactEmail"] = "Email";
	$fieldToolTipstbl_rfqs["English"]["CustomsBrokerContactEmail"] = "";
	$placeHolderstbl_rfqs["English"]["CustomsBrokerContactEmail"] = "";
	$fieldLabelstbl_rfqs["English"]["PickupDateExpected"] = "Expected Pickup Date ";
	$fieldToolTipstbl_rfqs["English"]["PickupDateExpected"] = "";
	$placeHolderstbl_rfqs["English"]["PickupDateExpected"] = "";
	$fieldLabelstbl_rfqs["English"]["DeliveryDateExpected"] = "Expected Delivery Date ";
	$fieldToolTipstbl_rfqs["English"]["DeliveryDateExpected"] = "";
	$placeHolderstbl_rfqs["English"]["DeliveryDateExpected"] = "";
	$fieldLabelstbl_rfqs["English"]["PaymentTerms"] = "Payment Terms";
	$fieldToolTipstbl_rfqs["English"]["PaymentTerms"] = "";
	$placeHolderstbl_rfqs["English"]["PaymentTerms"] = "";
	$fieldLabelstbl_rfqs["English"]["EquipmentType"] = "Equipment Type";
	$fieldToolTipstbl_rfqs["English"]["EquipmentType"] = "";
	$placeHolderstbl_rfqs["English"]["EquipmentType"] = "";
	$fieldLabelstbl_rfqs["English"]["Routing"] = "Routing";
	$fieldToolTipstbl_rfqs["English"]["Routing"] = "";
	$placeHolderstbl_rfqs["English"]["Routing"] = "";
	$fieldLabelstbl_rfqs["English"]["Instructions"] = "Instructions";
	$fieldToolTipstbl_rfqs["English"]["Instructions"] = "";
	$placeHolderstbl_rfqs["English"]["Instructions"] = "";
	$fieldLabelstbl_rfqs["English"]["Price"] = "Price";
	$fieldToolTipstbl_rfqs["English"]["Price"] = "";
	$placeHolderstbl_rfqs["English"]["Price"] = "";
	$fieldLabelstbl_rfqs["English"]["Cost"] = "Cost";
	$fieldToolTipstbl_rfqs["English"]["Cost"] = "";
	$placeHolderstbl_rfqs["English"]["Cost"] = "";
	$fieldLabelstbl_rfqs["English"]["Created"] = "Created";
	$fieldToolTipstbl_rfqs["English"]["Created"] = "";
	$placeHolderstbl_rfqs["English"]["Created"] = "";
	$fieldLabelstbl_rfqs["English"]["BillToPartyID"] = "Bill To Party";
	$fieldToolTipstbl_rfqs["English"]["BillToPartyID"] = "";
	$placeHolderstbl_rfqs["English"]["BillToPartyID"] = "";
	$fieldLabelstbl_rfqs["English"]["BillToPartyReferenceNo"] = "Reference No";
	$fieldToolTipstbl_rfqs["English"]["BillToPartyReferenceNo"] = "";
	$placeHolderstbl_rfqs["English"]["BillToPartyReferenceNo"] = "";
	$fieldLabelstbl_rfqs["English"]["BillToPartyName"] = "Name";
	$fieldToolTipstbl_rfqs["English"]["BillToPartyName"] = "";
	$placeHolderstbl_rfqs["English"]["BillToPartyName"] = "";
	$fieldLabelstbl_rfqs["English"]["BillToPartyAddress1"] = "Address1";
	$fieldToolTipstbl_rfqs["English"]["BillToPartyAddress1"] = "";
	$placeHolderstbl_rfqs["English"]["BillToPartyAddress1"] = "";
	$fieldLabelstbl_rfqs["English"]["BillToPartyAddress2"] = "Address2";
	$fieldToolTipstbl_rfqs["English"]["BillToPartyAddress2"] = "";
	$placeHolderstbl_rfqs["English"]["BillToPartyAddress2"] = "";
	$fieldLabelstbl_rfqs["English"]["BillToPartyCity"] = "City";
	$fieldToolTipstbl_rfqs["English"]["BillToPartyCity"] = "";
	$placeHolderstbl_rfqs["English"]["BillToPartyCity"] = "";
	$fieldLabelstbl_rfqs["English"]["BillToPartyProvinceID"] = "Province";
	$fieldToolTipstbl_rfqs["English"]["BillToPartyProvinceID"] = "";
	$placeHolderstbl_rfqs["English"]["BillToPartyProvinceID"] = "";
	$fieldLabelstbl_rfqs["English"]["BillToPartyCountryID"] = "Country";
	$fieldToolTipstbl_rfqs["English"]["BillToPartyCountryID"] = "";
	$placeHolderstbl_rfqs["English"]["BillToPartyCountryID"] = "";
	$fieldLabelstbl_rfqs["English"]["BillToPartyPostal"] = "Postal";
	$fieldToolTipstbl_rfqs["English"]["BillToPartyPostal"] = "";
	$placeHolderstbl_rfqs["English"]["BillToPartyPostal"] = "";
	$fieldLabelstbl_rfqs["English"]["BillToPartyContactName"] = "Contact Name";
	$fieldToolTipstbl_rfqs["English"]["BillToPartyContactName"] = "";
	$placeHolderstbl_rfqs["English"]["BillToPartyContactName"] = "";
	$fieldLabelstbl_rfqs["English"]["BillToPartyContactTel"] = "Contact Tel";
	$fieldToolTipstbl_rfqs["English"]["BillToPartyContactTel"] = "";
	$placeHolderstbl_rfqs["English"]["BillToPartyContactTel"] = "";
	$fieldLabelstbl_rfqs["English"]["BillToPartyContactFax"] = "Fax";
	$fieldToolTipstbl_rfqs["English"]["BillToPartyContactFax"] = "";
	$placeHolderstbl_rfqs["English"]["BillToPartyContactFax"] = "";
	$fieldLabelstbl_rfqs["English"]["BillToPartyContactEmail"] = "Email";
	$fieldToolTipstbl_rfqs["English"]["BillToPartyContactEmail"] = "";
	$placeHolderstbl_rfqs["English"]["BillToPartyContactEmail"] = "";
	$fieldLabelstbl_rfqs["English"]["Terms"] = "Terms";
	$fieldToolTipstbl_rfqs["English"]["Terms"] = "";
	$placeHolderstbl_rfqs["English"]["Terms"] = "";
	$fieldLabelstbl_rfqs["English"]["Modified"] = "Modified";
	$fieldToolTipstbl_rfqs["English"]["Modified"] = "";
	$placeHolderstbl_rfqs["English"]["Modified"] = "";
	$fieldLabelstbl_rfqs["English"]["Status"] = "Status";
	$fieldToolTipstbl_rfqs["English"]["Status"] = "";
	$placeHolderstbl_rfqs["English"]["Status"] = "";
	$fieldLabelstbl_rfqs["English"]["RFQStatusID"] = "RFQ Status";
	$fieldToolTipstbl_rfqs["English"]["RFQStatusID"] = "";
	$placeHolderstbl_rfqs["English"]["RFQStatusID"] = "";
	$fieldLabelstbl_rfqs["English"]["RFQNumber"] = "RFQNumber";
	$fieldToolTipstbl_rfqs["English"]["RFQNumber"] = "";
	$placeHolderstbl_rfqs["English"]["RFQNumber"] = "";
	$fieldLabelstbl_rfqs["English"]["NewRFQ"] = "New RFQ";
	$fieldToolTipstbl_rfqs["English"]["NewRFQ"] = "";
	$placeHolderstbl_rfqs["English"]["NewRFQ"] = "";
	$fieldLabelstbl_rfqs["English"]["RFQResponseDate"] = "RFQResponse Date";
	$fieldToolTipstbl_rfqs["English"]["RFQResponseDate"] = "";
	$placeHolderstbl_rfqs["English"]["RFQResponseDate"] = "";
	$fieldLabelstbl_rfqs["English"]["ShipperContactID"] = "Shipper Contact";
	$fieldToolTipstbl_rfqs["English"]["ShipperContactID"] = "";
	$placeHolderstbl_rfqs["English"]["ShipperContactID"] = "";
	$fieldLabelstbl_rfqs["English"]["ConsigneeContactID"] = "Contact";
	$fieldToolTipstbl_rfqs["English"]["ConsigneeContactID"] = "";
	$placeHolderstbl_rfqs["English"]["ConsigneeContactID"] = "";
	$fieldLabelstbl_rfqs["English"]["CarrierContactID"] = "Contact";
	$fieldToolTipstbl_rfqs["English"]["CarrierContactID"] = "";
	$placeHolderstbl_rfqs["English"]["CarrierContactID"] = "";
	$fieldLabelstbl_rfqs["English"]["BillToContactID"] = "Bill To Contact";
	$fieldToolTipstbl_rfqs["English"]["BillToContactID"] = "";
	$placeHolderstbl_rfqs["English"]["BillToContactID"] = "";
	$fieldLabelstbl_rfqs["English"]["CustomsContactID"] = "Customs Contact";
	$fieldToolTipstbl_rfqs["English"]["CustomsContactID"] = "";
	$placeHolderstbl_rfqs["English"]["CustomsContactID"] = "";
	$fieldLabelstbl_rfqs["English"]["ShipperInstructions"] = "Instructions";
	$fieldToolTipstbl_rfqs["English"]["ShipperInstructions"] = "";
	$placeHolderstbl_rfqs["English"]["ShipperInstructions"] = "";
	$fieldLabelstbl_rfqs["English"]["ConsigneeInstructions"] = "Instructions";
	$fieldToolTipstbl_rfqs["English"]["ConsigneeInstructions"] = "";
	$placeHolderstbl_rfqs["English"]["ConsigneeInstructions"] = "";
	$fieldLabelstbl_rfqs["English"]["ShipperHoursOpen"] = "Open";
	$fieldToolTipstbl_rfqs["English"]["ShipperHoursOpen"] = "";
	$placeHolderstbl_rfqs["English"]["ShipperHoursOpen"] = "";
	$fieldLabelstbl_rfqs["English"]["ShipperHoursClose"] = "Close";
	$fieldToolTipstbl_rfqs["English"]["ShipperHoursClose"] = "";
	$placeHolderstbl_rfqs["English"]["ShipperHoursClose"] = "";
	$fieldLabelstbl_rfqs["English"]["ShipperDirections"] = "Shipper Directions";
	$fieldToolTipstbl_rfqs["English"]["ShipperDirections"] = "";
	$placeHolderstbl_rfqs["English"]["ShipperDirections"] = "";
	$fieldLabelstbl_rfqs["English"]["ConsigneeHoursOpen"] = "Open";
	$fieldToolTipstbl_rfqs["English"]["ConsigneeHoursOpen"] = "";
	$placeHolderstbl_rfqs["English"]["ConsigneeHoursOpen"] = "";
	$fieldLabelstbl_rfqs["English"]["ConsigneeHoursClose"] = "Close";
	$fieldToolTipstbl_rfqs["English"]["ConsigneeHoursClose"] = "";
	$placeHolderstbl_rfqs["English"]["ConsigneeHoursClose"] = "";
	$fieldLabelstbl_rfqs["English"]["ConsigneeDirections"] = "Directions";
	$fieldToolTipstbl_rfqs["English"]["ConsigneeDirections"] = "";
	$placeHolderstbl_rfqs["English"]["ConsigneeDirections"] = "";
	$fieldLabelstbl_rfqs["English"]["ShipperPrimaryContactDetails"] = "Contact Details";
	$fieldToolTipstbl_rfqs["English"]["ShipperPrimaryContactDetails"] = "";
	$placeHolderstbl_rfqs["English"]["ShipperPrimaryContactDetails"] = "";
	$fieldLabelstbl_rfqs["English"]["ShipperAddress"] = "Shipper Address";
	$fieldToolTipstbl_rfqs["English"]["ShipperAddress"] = "";
	$placeHolderstbl_rfqs["English"]["ShipperAddress"] = "";
	$fieldLabelstbl_rfqs["English"]["ConsigneeAddress"] = "Consignee Address";
	$fieldToolTipstbl_rfqs["English"]["ConsigneeAddress"] = "";
	$placeHolderstbl_rfqs["English"]["ConsigneeAddress"] = "";
	$fieldLabelstbl_rfqs["English"]["ConsigneeContactDetails"] = "Contact Details";
	$fieldToolTipstbl_rfqs["English"]["ConsigneeContactDetails"] = "";
	$placeHolderstbl_rfqs["English"]["ConsigneeContactDetails"] = "";
	$fieldLabelstbl_rfqs["English"]["CarrierContactDetails"] = "Contact Details";
	$fieldToolTipstbl_rfqs["English"]["CarrierContactDetails"] = "";
	$placeHolderstbl_rfqs["English"]["CarrierContactDetails"] = "";
	$fieldLabelstbl_rfqs["English"]["CustomsBrokerContactDetails"] = "Contact Details";
	$fieldToolTipstbl_rfqs["English"]["CustomsBrokerContactDetails"] = "";
	$placeHolderstbl_rfqs["English"]["CustomsBrokerContactDetails"] = "";
	$fieldLabelstbl_rfqs["English"]["BillToAddress"] = "Bill To Address";
	$fieldToolTipstbl_rfqs["English"]["BillToAddress"] = "";
	$placeHolderstbl_rfqs["English"]["BillToAddress"] = "";
	$fieldLabelstbl_rfqs["English"]["BillToContactDetails"] = "Bill To Contact Details";
	$fieldToolTipstbl_rfqs["English"]["BillToContactDetails"] = "";
	$placeHolderstbl_rfqs["English"]["BillToContactDetails"] = "";
	$fieldLabelstbl_rfqs["English"]["OrderID"] = "Order ID";
	$fieldToolTipstbl_rfqs["English"]["OrderID"] = "";
	$placeHolderstbl_rfqs["English"]["OrderID"] = "";
	if (count($fieldToolTipstbl_rfqs["English"]))
		$tdatatbl_rfqs[".isUseToolTips"] = true;
}


	$tdatatbl_rfqs[".NCSearch"] = true;



$tdatatbl_rfqs[".shortTableName"] = "tbl_rfqs";
$tdatatbl_rfqs[".nSecOptions"] = 0;

$tdatatbl_rfqs[".mainTableOwnerID"] = "";
$tdatatbl_rfqs[".entityType"] = 0;
$tdatatbl_rfqs[".connId"] = "logistics_at_localhost";


$tdatatbl_rfqs[".strOriginalTableName"] = "tbl_rfqs";

	



$tdatatbl_rfqs[".showAddInPopup"] = false;

$tdatatbl_rfqs[".showEditInPopup"] = false;

$tdatatbl_rfqs[".showViewInPopup"] = false;

$tdatatbl_rfqs[".listAjax"] = false;
//	temporary
//$tdatatbl_rfqs[".listAjax"] = false;

	$tdatatbl_rfqs[".audit"] = false;

	$tdatatbl_rfqs[".locking"] = false;


$pages = $tdatatbl_rfqs[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_rfqs[".edit"] = true;
	$tdatatbl_rfqs[".afterEditAction"] = 1;
	$tdatatbl_rfqs[".closePopupAfterEdit"] = 1;
	$tdatatbl_rfqs[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_rfqs[".add"] = true;
$tdatatbl_rfqs[".afterAddAction"] = 1;
$tdatatbl_rfqs[".closePopupAfterAdd"] = 1;
$tdatatbl_rfqs[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_rfqs[".list"] = true;
}



$tdatatbl_rfqs[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_rfqs[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_rfqs[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_rfqs[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_rfqs[".printFriendly"] = true;
}



$tdatatbl_rfqs[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_rfqs[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_rfqs[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_rfqs[".isUseAjaxSuggest"] = true;

$tdatatbl_rfqs[".rowHighlite"] = true;



																					

$tdatatbl_rfqs[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_rfqs[".buttonsAdded"] = false;

$tdatatbl_rfqs[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatbl_rfqs[".isUseTimeForSearch"] = true;


$tdatatbl_rfqs[".badgeColor"] = "5F9EA0";


$tdatatbl_rfqs[".allSearchFields"] = array();
$tdatatbl_rfqs[".filterFields"] = array();
$tdatatbl_rfqs[".requiredSearchFields"] = array();

$tdatatbl_rfqs[".googleLikeFields"] = array();
$tdatatbl_rfqs[".googleLikeFields"][] = "ID";
$tdatatbl_rfqs[".googleLikeFields"][] = "companyID";
$tdatatbl_rfqs[".googleLikeFields"][] = "RFQStatusID";
$tdatatbl_rfqs[".googleLikeFields"][] = "Inbound";
$tdatatbl_rfqs[".googleLikeFields"][] = "PONumber";
$tdatatbl_rfqs[".googleLikeFields"][] = "BOLNumber";
$tdatatbl_rfqs[".googleLikeFields"][] = "ShipperID";
$tdatatbl_rfqs[".googleLikeFields"][] = "ShipperReferenceNo";
$tdatatbl_rfqs[".googleLikeFields"][] = "ShipperName";
$tdatatbl_rfqs[".googleLikeFields"][] = "ShipperAddress";
$tdatatbl_rfqs[".googleLikeFields"][] = "ShipperAddress1";
$tdatatbl_rfqs[".googleLikeFields"][] = "ShipperAddress2";
$tdatatbl_rfqs[".googleLikeFields"][] = "ShipperCity";
$tdatatbl_rfqs[".googleLikeFields"][] = "ShipperProvinceID";
$tdatatbl_rfqs[".googleLikeFields"][] = "ShipperCountryID";
$tdatatbl_rfqs[".googleLikeFields"][] = "ShipperCountyName";
$tdatatbl_rfqs[".googleLikeFields"][] = "ShipperPostal";
$tdatatbl_rfqs[".googleLikeFields"][] = "ShipperLongitude";
$tdatatbl_rfqs[".googleLikeFields"][] = "ShipperLatitude";
$tdatatbl_rfqs[".googleLikeFields"][] = "ShipperContactID";
$tdatatbl_rfqs[".googleLikeFields"][] = "ShipperContactName";
$tdatatbl_rfqs[".googleLikeFields"][] = "ShipperPrimaryContactDetails";
$tdatatbl_rfqs[".googleLikeFields"][] = "ShipperContactTel";
$tdatatbl_rfqs[".googleLikeFields"][] = "ShipperContactFax";
$tdatatbl_rfqs[".googleLikeFields"][] = "ShipperContactEmail";
$tdatatbl_rfqs[".googleLikeFields"][] = "ShipperHoursOpen";
$tdatatbl_rfqs[".googleLikeFields"][] = "ShipperHoursClose";
$tdatatbl_rfqs[".googleLikeFields"][] = "ShipperInstructions";
$tdatatbl_rfqs[".googleLikeFields"][] = "ShipperDirections";
$tdatatbl_rfqs[".googleLikeFields"][] = "ConsigneeID";
$tdatatbl_rfqs[".googleLikeFields"][] = "ConsigneeReferenceNo";
$tdatatbl_rfqs[".googleLikeFields"][] = "ConsigneeName";
$tdatatbl_rfqs[".googleLikeFields"][] = "ConsigneeAddress";
$tdatatbl_rfqs[".googleLikeFields"][] = "ConsigneeAddress1";
$tdatatbl_rfqs[".googleLikeFields"][] = "ConsigneeAddress2";
$tdatatbl_rfqs[".googleLikeFields"][] = "ConsigneeCity";
$tdatatbl_rfqs[".googleLikeFields"][] = "ConsigneeProvinceID";
$tdatatbl_rfqs[".googleLikeFields"][] = "ConsigneeCountryID";
$tdatatbl_rfqs[".googleLikeFields"][] = "ConsigneeCountyName";
$tdatatbl_rfqs[".googleLikeFields"][] = "ConsigneePostal";
$tdatatbl_rfqs[".googleLikeFields"][] = "ConsigneeLongitude";
$tdatatbl_rfqs[".googleLikeFields"][] = "ConsigneeLatitude";
$tdatatbl_rfqs[".googleLikeFields"][] = "ConsigneeContactID";
$tdatatbl_rfqs[".googleLikeFields"][] = "ConsigneeContactDetails";
$tdatatbl_rfqs[".googleLikeFields"][] = "ConsigneeContactName";
$tdatatbl_rfqs[".googleLikeFields"][] = "ConsigneeContactTel";
$tdatatbl_rfqs[".googleLikeFields"][] = "ConsigneeContactFax";
$tdatatbl_rfqs[".googleLikeFields"][] = "ConsigneeContactEmail";
$tdatatbl_rfqs[".googleLikeFields"][] = "ConsigneeHoursOpen";
$tdatatbl_rfqs[".googleLikeFields"][] = "ConsigneeHoursClose";
$tdatatbl_rfqs[".googleLikeFields"][] = "ConsigneeInstructions";
$tdatatbl_rfqs[".googleLikeFields"][] = "ConsigneeDirections";
$tdatatbl_rfqs[".googleLikeFields"][] = "CarrierID";
$tdatatbl_rfqs[".googleLikeFields"][] = "CarrierReferenceNo";
$tdatatbl_rfqs[".googleLikeFields"][] = "CarrierName";
$tdatatbl_rfqs[".googleLikeFields"][] = "CarrierContactID";
$tdatatbl_rfqs[".googleLikeFields"][] = "CarrierContactDetails";
$tdatatbl_rfqs[".googleLikeFields"][] = "CarrierContactName";
$tdatatbl_rfqs[".googleLikeFields"][] = "CarrierContactTel";
$tdatatbl_rfqs[".googleLikeFields"][] = "CarrierContactFax";
$tdatatbl_rfqs[".googleLikeFields"][] = "CarrierContactEmail";
$tdatatbl_rfqs[".googleLikeFields"][] = "CarrierDriver";
$tdatatbl_rfqs[".googleLikeFields"][] = "CustomsBrokerID";
$tdatatbl_rfqs[".googleLikeFields"][] = "CustomsBrokerName";
$tdatatbl_rfqs[".googleLikeFields"][] = "CustomsContactID";
$tdatatbl_rfqs[".googleLikeFields"][] = "CustomsBrokerContactDetails";
$tdatatbl_rfqs[".googleLikeFields"][] = "CustomsBrokerContactName";
$tdatatbl_rfqs[".googleLikeFields"][] = "CustomsBrokerContactTel";
$tdatatbl_rfqs[".googleLikeFields"][] = "CustomsBrokerContactFax";
$tdatatbl_rfqs[".googleLikeFields"][] = "CustomsBrokerContactEmail";
$tdatatbl_rfqs[".googleLikeFields"][] = "PickupDateExpected";
$tdatatbl_rfqs[".googleLikeFields"][] = "DeliveryDateExpected";
$tdatatbl_rfqs[".googleLikeFields"][] = "PaymentTerms";
$tdatatbl_rfqs[".googleLikeFields"][] = "EquipmentType";
$tdatatbl_rfqs[".googleLikeFields"][] = "Routing";
$tdatatbl_rfqs[".googleLikeFields"][] = "Instructions";
$tdatatbl_rfqs[".googleLikeFields"][] = "Price";
$tdatatbl_rfqs[".googleLikeFields"][] = "Cost";
$tdatatbl_rfqs[".googleLikeFields"][] = "Created";
$tdatatbl_rfqs[".googleLikeFields"][] = "RFQNumber";
$tdatatbl_rfqs[".googleLikeFields"][] = "BillToPartyID";
$tdatatbl_rfqs[".googleLikeFields"][] = "BillToPartyReferenceNo";
$tdatatbl_rfqs[".googleLikeFields"][] = "BillToPartyName";
$tdatatbl_rfqs[".googleLikeFields"][] = "BillToAddress";
$tdatatbl_rfqs[".googleLikeFields"][] = "BillToPartyAddress1";
$tdatatbl_rfqs[".googleLikeFields"][] = "BillToPartyAddress2";
$tdatatbl_rfqs[".googleLikeFields"][] = "BillToPartyCity";
$tdatatbl_rfqs[".googleLikeFields"][] = "BillToPartyProvinceID";
$tdatatbl_rfqs[".googleLikeFields"][] = "BillToPartyCountryID";
$tdatatbl_rfqs[".googleLikeFields"][] = "BillToPartyPostal";
$tdatatbl_rfqs[".googleLikeFields"][] = "BillToContactID";
$tdatatbl_rfqs[".googleLikeFields"][] = "BillToContactDetails";
$tdatatbl_rfqs[".googleLikeFields"][] = "BillToPartyContactName";
$tdatatbl_rfqs[".googleLikeFields"][] = "BillToPartyContactTel";
$tdatatbl_rfqs[".googleLikeFields"][] = "BillToPartyContactFax";
$tdatatbl_rfqs[".googleLikeFields"][] = "BillToPartyContactEmail";
$tdatatbl_rfqs[".googleLikeFields"][] = "Terms";
$tdatatbl_rfqs[".googleLikeFields"][] = "Modified";
$tdatatbl_rfqs[".googleLikeFields"][] = "Status";
$tdatatbl_rfqs[".googleLikeFields"][] = "NewRFQ";
$tdatatbl_rfqs[".googleLikeFields"][] = "RFQResponseDate";
$tdatatbl_rfqs[".googleLikeFields"][] = "OrderID";



$tdatatbl_rfqs[".tableType"] = "list";

$tdatatbl_rfqs[".printerPageOrientation"] = 0;
$tdatatbl_rfqs[".nPrinterPageScale"] = 100;

$tdatatbl_rfqs[".nPrinterSplitRecords"] = 40;

$tdatatbl_rfqs[".geocodingEnabled"] = false;










$tdatatbl_rfqs[".pageSize"] = 20;

$tdatatbl_rfqs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_rfqs[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_rfqs[".orderindexes"] = array();


$tdatatbl_rfqs[".sqlHead"] = "SELECT ID,  	companyID,  	RFQStatusID,  	Inbound,  	PONumber,  	BOLNumber,  	ShipperID,  	ShipperReferenceNo,  	ShipperName,  	ShipperAddress,  	ShipperAddress1,  	ShipperAddress2,  	ShipperCity,  	ShipperProvinceID,  	ShipperCountryID,  	ShipperCountyName,  	ShipperPostal,  	ShipperLongitude,  	ShipperLatitude,  	ShipperContactID,  	ShipperContactName,  	ShipperPrimaryContactDetails,  	ShipperContactTel,  	ShipperContactFax,  	ShipperContactEmail,  	ShipperHoursOpen,  	ShipperHoursClose,  	ShipperInstructions,  	ShipperDirections,  	ConsigneeID,  	ConsigneeReferenceNo,  	ConsigneeName,  	ConsigneeAddress,  	ConsigneeAddress1,  	ConsigneeAddress2,  	ConsigneeCity,  	ConsigneeProvinceID,  	ConsigneeCountryID,  	ConsigneeCountyName,  	ConsigneePostal,  	ConsigneeLongitude,  	ConsigneeLatitude,  	ConsigneeContactID,  	ConsigneeContactDetails,  	ConsigneeContactName,  	ConsigneeContactTel,  	ConsigneeContactFax,  	ConsigneeContactEmail,  	ConsigneeHoursOpen,  	ConsigneeHoursClose,  	ConsigneeInstructions,  	ConsigneeDirections,  	CarrierID,  	CarrierReferenceNo,  	CarrierName,  	CarrierContactID,  	CarrierContactDetails,  	CarrierContactName,  	CarrierContactTel,  	CarrierContactFax,  	CarrierContactEmail,  	CarrierDriver,  	CustomsBrokerID,  	CustomsBrokerName,  	CustomsContactID,  	CustomsBrokerContactDetails,  	CustomsBrokerContactName,  	CustomsBrokerContactTel,  	CustomsBrokerContactFax,  	CustomsBrokerContactEmail,  	PickupDateExpected,  	DeliveryDateExpected,  	PaymentTerms,  	EquipmentType,  	Routing,  	Instructions,  	Price,  	Cost,  	Created,  	RFQNumber,  	BillToPartyID,  	BillToPartyReferenceNo,  	BillToPartyName,  	BillToAddress,  	BillToPartyAddress1,  	BillToPartyAddress2,  	BillToPartyCity,  	BillToPartyProvinceID,  	BillToPartyCountryID,  	BillToPartyPostal,  	BillToContactID,  	BillToContactDetails,  	BillToPartyContactName,  	BillToPartyContactTel,  	BillToPartyContactFax,  	BillToPartyContactEmail,  	Terms,  	Modified,  	Status,  	NewRFQ,  	RFQResponseDate,  	OrderID";
$tdatatbl_rfqs[".sqlFrom"] = "FROM tbl_rfqs";
$tdatatbl_rfqs[".sqlWhereExpr"] = "";
$tdatatbl_rfqs[".sqlTail"] = "";

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
$arrGridTabs[] = array(
	'tabId' => "New",
	'name' => "New RFQ's",
	'nameType' => 'Text',
	'where' => "RFQStatusID = 1",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "Submitted",
	'name' => "Submitted RFQ's",
	'nameType' => 'Text',
	'where' => "RFQStatusID = 2",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "Closed",
	'name' => "Closed RFQ's",
	'nameType' => 'Text',
	'where' => "RFQStatusID = 3",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "Converted",
	'name' => "Converted RFQ's",
	'nameType' => 'Text',
	'where' => "RFQStatusID =3 AND OrderID IS NOT NULL",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatatbl_rfqs[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_rfqs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_rfqs[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_rfqs[".highlightSearchResults"] = true;

$tableKeystbl_rfqs = array();
$tableKeystbl_rfqs[] = "ID";
$tdatatbl_rfqs[".Keys"] = $tableKeystbl_rfqs;


$tdatatbl_rfqs[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ID");
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


	$tdatatbl_rfqs["ID"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ID";
//	companyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "companyID";
	$fdata["GoodName"] = "companyID";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","companyID");
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

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "ShipperID";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "ConsigneeID";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "CarrierContactID";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "CustomsContactID";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "BillToPartyID";

	
	
	
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


	$tdatatbl_rfqs["companyID"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "companyID";
//	RFQStatusID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "RFQStatusID";
	$fdata["GoodName"] = "RFQStatusID";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","RFQStatusID");
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


	$tdatatbl_rfqs["RFQStatusID"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "RFQStatusID";
//	Inbound
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Inbound";
	$fdata["GoodName"] = "Inbound";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","Inbound");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "Inbound";

		$fdata["sourceSingle"] = "Inbound";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Inbound";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Inbound";
	$edata["LookupValues"][] = "Outbound";

	
	
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


	$tdatatbl_rfqs["Inbound"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "Inbound";
//	PONumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PONumber";
	$fdata["GoodName"] = "PONumber";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","PONumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PONumber";

		$fdata["sourceSingle"] = "PONumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PONumber";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatbl_rfqs["PONumber"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "PONumber";
//	BOLNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "BOLNumber";
	$fdata["GoodName"] = "BOLNumber";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","BOLNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BOLNumber";

		$fdata["sourceSingle"] = "BOLNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BOLNumber";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatbl_rfqs["BOLNumber"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "BOLNumber";
//	ShipperID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ShipperID";
	$fdata["GoodName"] = "ShipperID";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ShipperID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ShipperID";

		$fdata["sourceSingle"] = "ShipperID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperID";

	
	
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
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"ShipperName", 'lookupF'=>"companyname");
	$edata["autoCompleteFields"][] = array('masterF'=>"ShipperAddress", 'lookupF'=>"FullAddress");
	$edata["autoCompleteFields"][] = array('masterF'=>"ShipperAddress1", 'lookupF'=>"Address1");
	$edata["autoCompleteFields"][] = array('masterF'=>"ShipperAddress2", 'lookupF'=>"Address2");
	$edata["autoCompleteFields"][] = array('masterF'=>"ShipperCity", 'lookupF'=>"City");
	$edata["autoCompleteFields"][] = array('masterF'=>"ShipperProvinceID", 'lookupF'=>"ProvinceID");
	$edata["autoCompleteFields"][] = array('masterF'=>"ShipperCountryID", 'lookupF'=>"CountryID");
	$edata["autoCompleteFields"][] = array('masterF'=>"ShipperCountyName", 'lookupF'=>"County");
	$edata["autoCompleteFields"][] = array('masterF'=>"ShipperPostal", 'lookupF'=>"PostalCode");
	$edata["autoCompleteFields"][] = array('masterF'=>"ShipperLongitude", 'lookupF'=>"Longitude");
	$edata["autoCompleteFields"][] = array('masterF'=>"ShipperLatitude", 'lookupF'=>"Latitude");
	$edata["autoCompleteFields"][] = array('masterF'=>"ShipperHoursOpen", 'lookupF'=>"HoursOpen");
	$edata["autoCompleteFields"][] = array('masterF'=>"ShipperHoursClose", 'lookupF'=>"HoursClose");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "address";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "companyID", "lookup" => "CompanyID" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "ShipperContactID";

	
	
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


	$tdatatbl_rfqs["ShipperID"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ShipperID";
//	ShipperReferenceNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ShipperReferenceNo";
	$fdata["GoodName"] = "ShipperReferenceNo";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ShipperReferenceNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperReferenceNo";

		$fdata["sourceSingle"] = "ShipperReferenceNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperReferenceNo";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatbl_rfqs["ShipperReferenceNo"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ShipperReferenceNo";
//	ShipperName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ShipperName";
	$fdata["GoodName"] = "ShipperName";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ShipperName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperName";

		$fdata["sourceSingle"] = "ShipperName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperName";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_rfqs["ShipperName"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ShipperName";
//	ShipperAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ShipperAddress";
	$fdata["GoodName"] = "ShipperAddress";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ShipperAddress");
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


	$tdatatbl_rfqs["ShipperAddress"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ShipperAddress";
//	ShipperAddress1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ShipperAddress1";
	$fdata["GoodName"] = "ShipperAddress1";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ShipperAddress1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperAddress1";

		$fdata["sourceSingle"] = "ShipperAddress1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperAddress1";

	
	
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


	$tdatatbl_rfqs["ShipperAddress1"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ShipperAddress1";
//	ShipperAddress2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ShipperAddress2";
	$fdata["GoodName"] = "ShipperAddress2";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ShipperAddress2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperAddress2";

		$fdata["sourceSingle"] = "ShipperAddress2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperAddress2";

	
	
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


	$tdatatbl_rfqs["ShipperAddress2"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ShipperAddress2";
//	ShipperCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ShipperCity";
	$fdata["GoodName"] = "ShipperCity";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ShipperCity");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperCity";

		$fdata["sourceSingle"] = "ShipperCity";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperCity";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_rfqs["ShipperCity"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ShipperCity";
//	ShipperProvinceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ShipperProvinceID";
	$fdata["GoodName"] = "ShipperProvinceID";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ShipperProvinceID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ShipperProvinceID";

		$fdata["sourceSingle"] = "ShipperProvinceID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperProvinceID";

	
	
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
	$edata["LookupTable"] = "tbl_province";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ProvinceID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Code";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "ShipperCountryID", "lookup" => "CountryID" );

	
	

	
	
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


	$tdatatbl_rfqs["ShipperProvinceID"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ShipperProvinceID";
//	ShipperCountryID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ShipperCountryID";
	$fdata["GoodName"] = "ShipperCountryID";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ShipperCountryID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ShipperCountryID";

		$fdata["sourceSingle"] = "ShipperCountryID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperCountryID";

	
	
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
	$edata["LookupTable"] = "tbl_country";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "ShipperProvinceID";

	
	
	
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


	$tdatatbl_rfqs["ShipperCountryID"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ShipperCountryID";
//	ShipperCountyName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ShipperCountyName";
	$fdata["GoodName"] = "ShipperCountyName";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ShipperCountyName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperCountyName";

		$fdata["sourceSingle"] = "ShipperCountyName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperCountyName";

	
	
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


	$tdatatbl_rfqs["ShipperCountyName"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ShipperCountyName";
//	ShipperPostal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "ShipperPostal";
	$fdata["GoodName"] = "ShipperPostal";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ShipperPostal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperPostal";

		$fdata["sourceSingle"] = "ShipperPostal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperPostal";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatbl_rfqs["ShipperPostal"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ShipperPostal";
//	ShipperLongitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "ShipperLongitude";
	$fdata["GoodName"] = "ShipperLongitude";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ShipperLongitude");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "ShipperLongitude";

		$fdata["sourceSingle"] = "ShipperLongitude";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperLongitude";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 8;

	
	
	
	
		
	
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


	$tdatatbl_rfqs["ShipperLongitude"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ShipperLongitude";
//	ShipperLatitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "ShipperLatitude";
	$fdata["GoodName"] = "ShipperLatitude";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ShipperLatitude");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "ShipperLatitude";

		$fdata["sourceSingle"] = "ShipperLatitude";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperLatitude";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 8;

	
	
	
	
		
	
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


	$tdatatbl_rfqs["ShipperLatitude"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ShipperLatitude";
//	ShipperContactID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "ShipperContactID";
	$fdata["GoodName"] = "ShipperContactID";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ShipperContactID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ShipperContactID";

		$fdata["sourceSingle"] = "ShipperContactID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperContactID";

	
	
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
	$edata["LookupTable"] = "vw_contacts";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"ShipperContactName", 'lookupF'=>"ContactName");
	$edata["autoCompleteFields"][] = array('masterF'=>"ShipperPrimaryContactDetails", 'lookupF'=>"contact_details");
	$edata["autoCompleteFields"][] = array('masterF'=>"ShipperContactTel", 'lookupF'=>"ContactPrimaryPhone");
	$edata["autoCompleteFields"][] = array('masterF'=>"ShipperContactEmail", 'lookupF'=>"ContactPrimaryEmail");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ContactName";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "ShipperID", "lookup" => "AddressID" );

	
	

	
	
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


	$tdatatbl_rfqs["ShipperContactID"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ShipperContactID";
//	ShipperContactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "ShipperContactName";
	$fdata["GoodName"] = "ShipperContactName";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ShipperContactName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperContactName";

		$fdata["sourceSingle"] = "ShipperContactName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperContactName";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_rfqs["ShipperContactName"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ShipperContactName";
//	ShipperPrimaryContactDetails
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "ShipperPrimaryContactDetails";
	$fdata["GoodName"] = "ShipperPrimaryContactDetails";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ShipperPrimaryContactDetails");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "ShipperPrimaryContactDetails";

		$fdata["sourceSingle"] = "ShipperPrimaryContactDetails";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperPrimaryContactDetails";

	
	
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


	$tdatatbl_rfqs["ShipperPrimaryContactDetails"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ShipperPrimaryContactDetails";
//	ShipperContactTel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "ShipperContactTel";
	$fdata["GoodName"] = "ShipperContactTel";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ShipperContactTel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperContactTel";

		$fdata["sourceSingle"] = "ShipperContactTel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperContactTel";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatbl_rfqs["ShipperContactTel"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ShipperContactTel";
//	ShipperContactFax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "ShipperContactFax";
	$fdata["GoodName"] = "ShipperContactFax";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ShipperContactFax");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperContactFax";

		$fdata["sourceSingle"] = "ShipperContactFax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperContactFax";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_rfqs["ShipperContactFax"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ShipperContactFax";
//	ShipperContactEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "ShipperContactEmail";
	$fdata["GoodName"] = "ShipperContactEmail";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ShipperContactEmail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperContactEmail";

		$fdata["sourceSingle"] = "ShipperContactEmail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperContactEmail";

	
	
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


	$tdatatbl_rfqs["ShipperContactEmail"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ShipperContactEmail";
//	ShipperHoursOpen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "ShipperHoursOpen";
	$fdata["GoodName"] = "ShipperHoursOpen";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ShipperHoursOpen");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "ShipperHoursOpen";

		$fdata["sourceSingle"] = "ShipperHoursOpen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperHoursOpen";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatatbl_rfqs["ShipperHoursOpen"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ShipperHoursOpen";
//	ShipperHoursClose
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "ShipperHoursClose";
	$fdata["GoodName"] = "ShipperHoursClose";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ShipperHoursClose");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "ShipperHoursClose";

		$fdata["sourceSingle"] = "ShipperHoursClose";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperHoursClose";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatatbl_rfqs["ShipperHoursClose"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ShipperHoursClose";
//	ShipperInstructions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "ShipperInstructions";
	$fdata["GoodName"] = "ShipperInstructions";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ShipperInstructions");
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


	$tdatatbl_rfqs["ShipperInstructions"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ShipperInstructions";
//	ShipperDirections
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "ShipperDirections";
	$fdata["GoodName"] = "ShipperDirections";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ShipperDirections");
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


	$tdatatbl_rfqs["ShipperDirections"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ShipperDirections";
//	ConsigneeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "ConsigneeID";
	$fdata["GoodName"] = "ConsigneeID";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ConsigneeID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ConsigneeID";

		$fdata["sourceSingle"] = "ConsigneeID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeID";

	
	
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
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"ConsigneeName", 'lookupF'=>"companyname");
	$edata["autoCompleteFields"][] = array('masterF'=>"ConsigneeAddress", 'lookupF'=>"FullAddress");
	$edata["autoCompleteFields"][] = array('masterF'=>"ConsigneeAddress1", 'lookupF'=>"Address1");
	$edata["autoCompleteFields"][] = array('masterF'=>"ConsigneeAddress2", 'lookupF'=>"Address2");
	$edata["autoCompleteFields"][] = array('masterF'=>"ConsigneeCity", 'lookupF'=>"City");
	$edata["autoCompleteFields"][] = array('masterF'=>"ConsigneeProvinceID", 'lookupF'=>"ProvinceID");
	$edata["autoCompleteFields"][] = array('masterF'=>"ConsigneeCountryID", 'lookupF'=>"CountryID");
	$edata["autoCompleteFields"][] = array('masterF'=>"ConsigneePostal", 'lookupF'=>"PostalCode");
	$edata["autoCompleteFields"][] = array('masterF'=>"ConsigneeLongitude", 'lookupF'=>"Longitude");
	$edata["autoCompleteFields"][] = array('masterF'=>"ConsigneeLatitude", 'lookupF'=>"Latitude");
	$edata["autoCompleteFields"][] = array('masterF'=>"ConsigneeHoursOpen", 'lookupF'=>"HoursOpen");
	$edata["autoCompleteFields"][] = array('masterF'=>"ConsigneeHoursClose", 'lookupF'=>"HoursClose");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "address";

	

	
	$edata["LookupOrderBy"] = "address";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "companyID", "lookup" => "CompanyID" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "ConsigneeContactID";

	
	
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


	$tdatatbl_rfqs["ConsigneeID"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ConsigneeID";
//	ConsigneeReferenceNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "ConsigneeReferenceNo";
	$fdata["GoodName"] = "ConsigneeReferenceNo";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ConsigneeReferenceNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeReferenceNo";

		$fdata["sourceSingle"] = "ConsigneeReferenceNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeReferenceNo";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatbl_rfqs["ConsigneeReferenceNo"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ConsigneeReferenceNo";
//	ConsigneeName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "ConsigneeName";
	$fdata["GoodName"] = "ConsigneeName";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ConsigneeName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeName";

		$fdata["sourceSingle"] = "ConsigneeName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeName";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_rfqs["ConsigneeName"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ConsigneeName";
//	ConsigneeAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "ConsigneeAddress";
	$fdata["GoodName"] = "ConsigneeAddress";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ConsigneeAddress");
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


	$tdatatbl_rfqs["ConsigneeAddress"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ConsigneeAddress";
//	ConsigneeAddress1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "ConsigneeAddress1";
	$fdata["GoodName"] = "ConsigneeAddress1";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ConsigneeAddress1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeAddress1";

		$fdata["sourceSingle"] = "ConsigneeAddress1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeAddress1";

	
	
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


	$tdatatbl_rfqs["ConsigneeAddress1"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ConsigneeAddress1";
//	ConsigneeAddress2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "ConsigneeAddress2";
	$fdata["GoodName"] = "ConsigneeAddress2";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ConsigneeAddress2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeAddress2";

		$fdata["sourceSingle"] = "ConsigneeAddress2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeAddress2";

	
	
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


	$tdatatbl_rfqs["ConsigneeAddress2"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ConsigneeAddress2";
//	ConsigneeCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "ConsigneeCity";
	$fdata["GoodName"] = "ConsigneeCity";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ConsigneeCity");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeCity";

		$fdata["sourceSingle"] = "ConsigneeCity";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeCity";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_rfqs["ConsigneeCity"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ConsigneeCity";
//	ConsigneeProvinceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "ConsigneeProvinceID";
	$fdata["GoodName"] = "ConsigneeProvinceID";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ConsigneeProvinceID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ConsigneeProvinceID";

		$fdata["sourceSingle"] = "ConsigneeProvinceID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeProvinceID";

	
	
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
	$edata["LookupTable"] = "tbl_province";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "ProvinceID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Code";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "ConsigneeCountryID", "lookup" => "CountryID" );

	
	

	
	
	
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


	$tdatatbl_rfqs["ConsigneeProvinceID"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ConsigneeProvinceID";
//	ConsigneeCountryID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "ConsigneeCountryID";
	$fdata["GoodName"] = "ConsigneeCountryID";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ConsigneeCountryID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ConsigneeCountryID";

		$fdata["sourceSingle"] = "ConsigneeCountryID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeCountryID";

	
	
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
	$edata["LookupTable"] = "tbl_country";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "ConsigneeProvinceID";

	
	
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


	$tdatatbl_rfqs["ConsigneeCountryID"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ConsigneeCountryID";
//	ConsigneeCountyName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "ConsigneeCountyName";
	$fdata["GoodName"] = "ConsigneeCountyName";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ConsigneeCountyName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeCountyName";

		$fdata["sourceSingle"] = "ConsigneeCountyName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeCountyName";

	
	
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


	$tdatatbl_rfqs["ConsigneeCountyName"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ConsigneeCountyName";
//	ConsigneePostal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "ConsigneePostal";
	$fdata["GoodName"] = "ConsigneePostal";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ConsigneePostal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneePostal";

		$fdata["sourceSingle"] = "ConsigneePostal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneePostal";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatbl_rfqs["ConsigneePostal"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ConsigneePostal";
//	ConsigneeLongitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "ConsigneeLongitude";
	$fdata["GoodName"] = "ConsigneeLongitude";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ConsigneeLongitude");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "ConsigneeLongitude";

		$fdata["sourceSingle"] = "ConsigneeLongitude";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeLongitude";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 8;

	
	
	
	
		
	
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


	$tdatatbl_rfqs["ConsigneeLongitude"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ConsigneeLongitude";
//	ConsigneeLatitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "ConsigneeLatitude";
	$fdata["GoodName"] = "ConsigneeLatitude";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ConsigneeLatitude");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "ConsigneeLatitude";

		$fdata["sourceSingle"] = "ConsigneeLatitude";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeLatitude";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 8;

	
	
	
	
		
	
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


	$tdatatbl_rfqs["ConsigneeLatitude"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ConsigneeLatitude";
//	ConsigneeContactID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "ConsigneeContactID";
	$fdata["GoodName"] = "ConsigneeContactID";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ConsigneeContactID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ConsigneeContactID";

		$fdata["sourceSingle"] = "ConsigneeContactID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeContactID";

	
	
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
	$edata["LookupTable"] = "vw_contacts";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ContactName";

	

	
	$edata["LookupOrderBy"] = "ContactName";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "ConsigneeID", "lookup" => "AddressID" );

	
	

	
	
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


	$tdatatbl_rfqs["ConsigneeContactID"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ConsigneeContactID";
//	ConsigneeContactDetails
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "ConsigneeContactDetails";
	$fdata["GoodName"] = "ConsigneeContactDetails";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ConsigneeContactDetails");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeContactDetails";

		$fdata["sourceSingle"] = "ConsigneeContactDetails";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeContactDetails";

	
	
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


	$tdatatbl_rfqs["ConsigneeContactDetails"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ConsigneeContactDetails";
//	ConsigneeContactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "ConsigneeContactName";
	$fdata["GoodName"] = "ConsigneeContactName";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ConsigneeContactName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeContactName";

		$fdata["sourceSingle"] = "ConsigneeContactName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeContactName";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_rfqs["ConsigneeContactName"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ConsigneeContactName";
//	ConsigneeContactTel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "ConsigneeContactTel";
	$fdata["GoodName"] = "ConsigneeContactTel";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ConsigneeContactTel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeContactTel";

		$fdata["sourceSingle"] = "ConsigneeContactTel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeContactTel";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_rfqs["ConsigneeContactTel"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ConsigneeContactTel";
//	ConsigneeContactFax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "ConsigneeContactFax";
	$fdata["GoodName"] = "ConsigneeContactFax";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ConsigneeContactFax");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeContactFax";

		$fdata["sourceSingle"] = "ConsigneeContactFax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeContactFax";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_rfqs["ConsigneeContactFax"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ConsigneeContactFax";
//	ConsigneeContactEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "ConsigneeContactEmail";
	$fdata["GoodName"] = "ConsigneeContactEmail";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ConsigneeContactEmail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeContactEmail";

		$fdata["sourceSingle"] = "ConsigneeContactEmail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeContactEmail";

	
	
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


	$tdatatbl_rfqs["ConsigneeContactEmail"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ConsigneeContactEmail";
//	ConsigneeHoursOpen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "ConsigneeHoursOpen";
	$fdata["GoodName"] = "ConsigneeHoursOpen";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ConsigneeHoursOpen");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "ConsigneeHoursOpen";

		$fdata["sourceSingle"] = "ConsigneeHoursOpen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeHoursOpen";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatatbl_rfqs["ConsigneeHoursOpen"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ConsigneeHoursOpen";
//	ConsigneeHoursClose
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "ConsigneeHoursClose";
	$fdata["GoodName"] = "ConsigneeHoursClose";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ConsigneeHoursClose");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "ConsigneeHoursClose";

		$fdata["sourceSingle"] = "ConsigneeHoursClose";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeHoursClose";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatatbl_rfqs["ConsigneeHoursClose"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ConsigneeHoursClose";
//	ConsigneeInstructions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "ConsigneeInstructions";
	$fdata["GoodName"] = "ConsigneeInstructions";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ConsigneeInstructions");
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


	$tdatatbl_rfqs["ConsigneeInstructions"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ConsigneeInstructions";
//	ConsigneeDirections
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "ConsigneeDirections";
	$fdata["GoodName"] = "ConsigneeDirections";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","ConsigneeDirections");
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


	$tdatatbl_rfqs["ConsigneeDirections"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "ConsigneeDirections";
//	CarrierID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "CarrierID";
	$fdata["GoodName"] = "CarrierID";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","CarrierID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CarrierID";

		$fdata["sourceSingle"] = "CarrierID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierID";

	
	
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
		$edata["autoCompleteFields"][] = array('masterF'=>"CarrierReferenceNo", 'lookupF'=>"ReferenceNumber");
	$edata["autoCompleteFields"][] = array('masterF'=>"CarrierName", 'lookupF'=>"Name");
	$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

				$edata["LookupWhere"] = "Type = 'Vendor'";


	
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


	$tdatatbl_rfqs["CarrierID"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "CarrierID";
//	CarrierReferenceNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "CarrierReferenceNo";
	$fdata["GoodName"] = "CarrierReferenceNo";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","CarrierReferenceNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierReferenceNo";

		$fdata["sourceSingle"] = "CarrierReferenceNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierReferenceNo";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatbl_rfqs["CarrierReferenceNo"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "CarrierReferenceNo";
//	CarrierName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "CarrierName";
	$fdata["GoodName"] = "CarrierName";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","CarrierName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierName";

		$fdata["sourceSingle"] = "CarrierName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierName";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_rfqs["CarrierName"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "CarrierName";
//	CarrierContactID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "CarrierContactID";
	$fdata["GoodName"] = "CarrierContactID";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","CarrierContactID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CarrierContactID";

		$fdata["sourceSingle"] = "CarrierContactID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierContactID";

	
	
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
	$edata["LookupTable"] = "vw_contacts";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"CarrierContactDetails", 'lookupF'=>"contact_details");
	$edata["autoCompleteFields"][] = array('masterF'=>"CarrierContactName", 'lookupF'=>"ContactName");
	$edata["autoCompleteFields"][] = array('masterF'=>"CarrierContactTel", 'lookupF'=>"ContactPrimaryPhone");
	$edata["autoCompleteFields"][] = array('masterF'=>"CarrierContactEmail", 'lookupF'=>"ContactPrimaryEmail");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ContactName";

	

	
	$edata["LookupOrderBy"] = "ContactName";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "companyID", "lookup" => "CompanyID" );

	
	

	
	
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


	$tdatatbl_rfqs["CarrierContactID"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "CarrierContactID";
//	CarrierContactDetails
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "CarrierContactDetails";
	$fdata["GoodName"] = "CarrierContactDetails";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","CarrierContactDetails");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierContactDetails";

		$fdata["sourceSingle"] = "CarrierContactDetails";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierContactDetails";

	
	
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


	$tdatatbl_rfqs["CarrierContactDetails"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "CarrierContactDetails";
//	CarrierContactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "CarrierContactName";
	$fdata["GoodName"] = "CarrierContactName";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","CarrierContactName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierContactName";

		$fdata["sourceSingle"] = "CarrierContactName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierContactName";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_rfqs["CarrierContactName"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "CarrierContactName";
//	CarrierContactTel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "CarrierContactTel";
	$fdata["GoodName"] = "CarrierContactTel";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","CarrierContactTel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierContactTel";

		$fdata["sourceSingle"] = "CarrierContactTel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierContactTel";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatbl_rfqs["CarrierContactTel"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "CarrierContactTel";
//	CarrierContactFax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "CarrierContactFax";
	$fdata["GoodName"] = "CarrierContactFax";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","CarrierContactFax");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierContactFax";

		$fdata["sourceSingle"] = "CarrierContactFax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierContactFax";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatbl_rfqs["CarrierContactFax"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "CarrierContactFax";
//	CarrierContactEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "CarrierContactEmail";
	$fdata["GoodName"] = "CarrierContactEmail";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","CarrierContactEmail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierContactEmail";

		$fdata["sourceSingle"] = "CarrierContactEmail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierContactEmail";

	
	
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


	$tdatatbl_rfqs["CarrierContactEmail"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "CarrierContactEmail";
//	CarrierDriver
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "CarrierDriver";
	$fdata["GoodName"] = "CarrierDriver";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","CarrierDriver");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierDriver";

		$fdata["sourceSingle"] = "CarrierDriver";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierDriver";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_rfqs["CarrierDriver"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "CarrierDriver";
//	CustomsBrokerID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "CustomsBrokerID";
	$fdata["GoodName"] = "CustomsBrokerID";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","CustomsBrokerID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CustomsBrokerID";

		$fdata["sourceSingle"] = "CustomsBrokerID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CustomsBrokerID";

	
	
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
		$edata["autoCompleteFields"][] = array('masterF'=>"CustomsBrokerName", 'lookupF'=>"Name");
	$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

				$edata["LookupWhere"] = "Type = 'Vendor'";


	
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


	$tdatatbl_rfqs["CustomsBrokerID"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "CustomsBrokerID";
//	CustomsBrokerName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "CustomsBrokerName";
	$fdata["GoodName"] = "CustomsBrokerName";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","CustomsBrokerName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CustomsBrokerName";

		$fdata["sourceSingle"] = "CustomsBrokerName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CustomsBrokerName";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_rfqs["CustomsBrokerName"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "CustomsBrokerName";
//	CustomsContactID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "CustomsContactID";
	$fdata["GoodName"] = "CustomsContactID";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","CustomsContactID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CustomsContactID";

		$fdata["sourceSingle"] = "CustomsContactID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CustomsContactID";

	
	
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
	$edata["LookupTable"] = "vw_contacts";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"CustomsBrokerContactDetails", 'lookupF'=>"contact_details");
	$edata["autoCompleteFields"][] = array('masterF'=>"CustomsBrokerContactName", 'lookupF'=>"ContactName");
	$edata["autoCompleteFields"][] = array('masterF'=>"CustomsBrokerContactTel", 'lookupF'=>"ContactPrimaryPhone");
	$edata["autoCompleteFields"][] = array('masterF'=>"CustomsBrokerContactEmail", 'lookupF'=>"ContactPrimaryEmail");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ContactName";

	

	
	$edata["LookupOrderBy"] = "ContactName";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "companyID", "lookup" => "CompanyID" );

	
	

	
	
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


	$tdatatbl_rfqs["CustomsContactID"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "CustomsContactID";
//	CustomsBrokerContactDetails
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "CustomsBrokerContactDetails";
	$fdata["GoodName"] = "CustomsBrokerContactDetails";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","CustomsBrokerContactDetails");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CustomsBrokerContactDetails";

		$fdata["sourceSingle"] = "CustomsBrokerContactDetails";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CustomsBrokerContactDetails";

	
	
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


	$tdatatbl_rfqs["CustomsBrokerContactDetails"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "CustomsBrokerContactDetails";
//	CustomsBrokerContactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "CustomsBrokerContactName";
	$fdata["GoodName"] = "CustomsBrokerContactName";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","CustomsBrokerContactName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CustomsBrokerContactName";

		$fdata["sourceSingle"] = "CustomsBrokerContactName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CustomsBrokerContactName";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_rfqs["CustomsBrokerContactName"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "CustomsBrokerContactName";
//	CustomsBrokerContactTel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "CustomsBrokerContactTel";
	$fdata["GoodName"] = "CustomsBrokerContactTel";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","CustomsBrokerContactTel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CustomsBrokerContactTel";

		$fdata["sourceSingle"] = "CustomsBrokerContactTel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CustomsBrokerContactTel";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_rfqs["CustomsBrokerContactTel"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "CustomsBrokerContactTel";
//	CustomsBrokerContactFax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "CustomsBrokerContactFax";
	$fdata["GoodName"] = "CustomsBrokerContactFax";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","CustomsBrokerContactFax");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CustomsBrokerContactFax";

		$fdata["sourceSingle"] = "CustomsBrokerContactFax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CustomsBrokerContactFax";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_rfqs["CustomsBrokerContactFax"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "CustomsBrokerContactFax";
//	CustomsBrokerContactEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "CustomsBrokerContactEmail";
	$fdata["GoodName"] = "CustomsBrokerContactEmail";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","CustomsBrokerContactEmail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CustomsBrokerContactEmail";

		$fdata["sourceSingle"] = "CustomsBrokerContactEmail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CustomsBrokerContactEmail";

	
	
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


	$tdatatbl_rfqs["CustomsBrokerContactEmail"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "CustomsBrokerContactEmail";
//	PickupDateExpected
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "PickupDateExpected";
	$fdata["GoodName"] = "PickupDateExpected";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","PickupDateExpected");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "PickupDateExpected";

		$fdata["sourceSingle"] = "PickupDateExpected";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PickupDateExpected";

	
	
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


	$tdatatbl_rfqs["PickupDateExpected"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "PickupDateExpected";
//	DeliveryDateExpected
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "DeliveryDateExpected";
	$fdata["GoodName"] = "DeliveryDateExpected";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","DeliveryDateExpected");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "DeliveryDateExpected";

		$fdata["sourceSingle"] = "DeliveryDateExpected";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DeliveryDateExpected";

	
	
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


	$tdatatbl_rfqs["DeliveryDateExpected"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "DeliveryDateExpected";
//	PaymentTerms
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "PaymentTerms";
	$fdata["GoodName"] = "PaymentTerms";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","PaymentTerms");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "PaymentTerms";

		$fdata["sourceSingle"] = "PaymentTerms";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PaymentTerms";

	
	
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
	$edata["LookupTable"] = "tbl_payment_terms";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Description";

	

	
	$edata["LookupOrderBy"] = "Description";

	
	
	
	

	
	
	
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


	$tdatatbl_rfqs["PaymentTerms"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "PaymentTerms";
//	EquipmentType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "EquipmentType";
	$fdata["GoodName"] = "EquipmentType";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","EquipmentType");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "EquipmentType";

		$fdata["sourceSingle"] = "EquipmentType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EquipmentType";

	
	
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
	$edata["LookupTable"] = "tbl_equipment_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Description";

	

	
	$edata["LookupOrderBy"] = "Description";

	
	
	
	

	
	
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


	$tdatatbl_rfqs["EquipmentType"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "EquipmentType";
//	Routing
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "Routing";
	$fdata["GoodName"] = "Routing";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","Routing");
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


	$tdatatbl_rfqs["Routing"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "Routing";
//	Instructions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "Instructions";
	$fdata["GoodName"] = "Instructions";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","Instructions");
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


	$tdatatbl_rfqs["Instructions"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "Instructions";
//	Price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "Price";
	$fdata["GoodName"] = "Price";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","Price");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Price";

		$fdata["sourceSingle"] = "Price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Price";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
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


	$tdatatbl_rfqs["Price"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "Price";
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","Cost");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Cost";

		$fdata["sourceSingle"] = "Cost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cost";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
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


	$tdatatbl_rfqs["Cost"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "Cost";
//	Created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "Created";
	$fdata["GoodName"] = "Created";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","Created");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Created";

		$fdata["sourceSingle"] = "Created";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Created";

	
	
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


	$tdatatbl_rfqs["Created"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "Created";
//	RFQNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "RFQNumber";
	$fdata["GoodName"] = "RFQNumber";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","RFQNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RFQNumber";

		$fdata["sourceSingle"] = "RFQNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RFQNumber";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatbl_rfqs["RFQNumber"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "RFQNumber";
//	BillToPartyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "BillToPartyID";
	$fdata["GoodName"] = "BillToPartyID";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","BillToPartyID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "BillToPartyID";

		$fdata["sourceSingle"] = "BillToPartyID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BillToPartyID";

	
	
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
		$edata["autoCompleteFields"][] = array('masterF'=>"BillToPartyName", 'lookupF'=>"companyname");
	$edata["autoCompleteFields"][] = array('masterF'=>"BillToAddress", 'lookupF'=>"address");
	$edata["autoCompleteFields"][] = array('masterF'=>"BillToPartyAddress1", 'lookupF'=>"Address1");
	$edata["autoCompleteFields"][] = array('masterF'=>"BillToPartyAddress2", 'lookupF'=>"Address2");
	$edata["autoCompleteFields"][] = array('masterF'=>"BillToPartyCity", 'lookupF'=>"City");
	$edata["autoCompleteFields"][] = array('masterF'=>"BillToPartyProvinceID", 'lookupF'=>"ProvinceID");
	$edata["autoCompleteFields"][] = array('masterF'=>"BillToPartyCountryID", 'lookupF'=>"CountryID");
	$edata["autoCompleteFields"][] = array('masterF'=>"BillToPartyPostal", 'lookupF'=>"PostalCode");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "address";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "companyID", "lookup" => "CompanyID" );

	
	

	
	
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


	$tdatatbl_rfqs["BillToPartyID"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "BillToPartyID";
//	BillToPartyReferenceNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "BillToPartyReferenceNo";
	$fdata["GoodName"] = "BillToPartyReferenceNo";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","BillToPartyReferenceNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillToPartyReferenceNo";

		$fdata["sourceSingle"] = "BillToPartyReferenceNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BillToPartyReferenceNo";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatbl_rfqs["BillToPartyReferenceNo"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "BillToPartyReferenceNo";
//	BillToPartyName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "BillToPartyName";
	$fdata["GoodName"] = "BillToPartyName";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","BillToPartyName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillToPartyName";

		$fdata["sourceSingle"] = "BillToPartyName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BillToPartyName";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_rfqs["BillToPartyName"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "BillToPartyName";
//	BillToAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "BillToAddress";
	$fdata["GoodName"] = "BillToAddress";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","BillToAddress");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillToAddress";

		$fdata["sourceSingle"] = "BillToAddress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BillToAddress";

	
	
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


	$tdatatbl_rfqs["BillToAddress"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "BillToAddress";
//	BillToPartyAddress1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "BillToPartyAddress1";
	$fdata["GoodName"] = "BillToPartyAddress1";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","BillToPartyAddress1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillToPartyAddress1";

		$fdata["sourceSingle"] = "BillToPartyAddress1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BillToPartyAddress1";

	
	
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


	$tdatatbl_rfqs["BillToPartyAddress1"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "BillToPartyAddress1";
//	BillToPartyAddress2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "BillToPartyAddress2";
	$fdata["GoodName"] = "BillToPartyAddress2";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","BillToPartyAddress2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillToPartyAddress2";

		$fdata["sourceSingle"] = "BillToPartyAddress2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BillToPartyAddress2";

	
	
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


	$tdatatbl_rfqs["BillToPartyAddress2"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "BillToPartyAddress2";
//	BillToPartyCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "BillToPartyCity";
	$fdata["GoodName"] = "BillToPartyCity";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","BillToPartyCity");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillToPartyCity";

		$fdata["sourceSingle"] = "BillToPartyCity";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BillToPartyCity";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_rfqs["BillToPartyCity"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "BillToPartyCity";
//	BillToPartyProvinceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "BillToPartyProvinceID";
	$fdata["GoodName"] = "BillToPartyProvinceID";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","BillToPartyProvinceID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "BillToPartyProvinceID";

		$fdata["sourceSingle"] = "BillToPartyProvinceID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BillToPartyProvinceID";

	
	
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


	$tdatatbl_rfqs["BillToPartyProvinceID"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "BillToPartyProvinceID";
//	BillToPartyCountryID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "BillToPartyCountryID";
	$fdata["GoodName"] = "BillToPartyCountryID";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","BillToPartyCountryID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "BillToPartyCountryID";

		$fdata["sourceSingle"] = "BillToPartyCountryID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BillToPartyCountryID";

	
	
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


	$tdatatbl_rfqs["BillToPartyCountryID"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "BillToPartyCountryID";
//	BillToPartyPostal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "BillToPartyPostal";
	$fdata["GoodName"] = "BillToPartyPostal";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","BillToPartyPostal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillToPartyPostal";

		$fdata["sourceSingle"] = "BillToPartyPostal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BillToPartyPostal";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatbl_rfqs["BillToPartyPostal"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "BillToPartyPostal";
//	BillToContactID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "BillToContactID";
	$fdata["GoodName"] = "BillToContactID";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","BillToContactID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "BillToContactID";

		$fdata["sourceSingle"] = "BillToContactID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BillToContactID";

	
	
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
	$edata["LookupTable"] = "vw_contacts";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"BillToContactDetails", 'lookupF'=>"contact_details");
	$edata["autoCompleteFields"][] = array('masterF'=>"BillToPartyContactName", 'lookupF'=>"ContactName");
	$edata["autoCompleteFields"][] = array('masterF'=>"BillToPartyContactTel", 'lookupF'=>"ContactTitle");
	$edata["autoCompleteFields"][] = array('masterF'=>"BillToPartyContactEmail", 'lookupF'=>"ContactPrimaryEmail");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ContactName";

	

	
	$edata["LookupOrderBy"] = "ContactName";

	
	
	
	

	
	
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


	$tdatatbl_rfqs["BillToContactID"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "BillToContactID";
//	BillToContactDetails
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "BillToContactDetails";
	$fdata["GoodName"] = "BillToContactDetails";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","BillToContactDetails");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillToContactDetails";

		$fdata["sourceSingle"] = "BillToContactDetails";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BillToContactDetails";

	
	
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


	$tdatatbl_rfqs["BillToContactDetails"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "BillToContactDetails";
//	BillToPartyContactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "BillToPartyContactName";
	$fdata["GoodName"] = "BillToPartyContactName";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","BillToPartyContactName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillToPartyContactName";

		$fdata["sourceSingle"] = "BillToPartyContactName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BillToPartyContactName";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_rfqs["BillToPartyContactName"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "BillToPartyContactName";
//	BillToPartyContactTel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "BillToPartyContactTel";
	$fdata["GoodName"] = "BillToPartyContactTel";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","BillToPartyContactTel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillToPartyContactTel";

		$fdata["sourceSingle"] = "BillToPartyContactTel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BillToPartyContactTel";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_rfqs["BillToPartyContactTel"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "BillToPartyContactTel";
//	BillToPartyContactFax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "BillToPartyContactFax";
	$fdata["GoodName"] = "BillToPartyContactFax";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","BillToPartyContactFax");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillToPartyContactFax";

		$fdata["sourceSingle"] = "BillToPartyContactFax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BillToPartyContactFax";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_rfqs["BillToPartyContactFax"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "BillToPartyContactFax";
//	BillToPartyContactEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 96;
	$fdata["strName"] = "BillToPartyContactEmail";
	$fdata["GoodName"] = "BillToPartyContactEmail";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","BillToPartyContactEmail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillToPartyContactEmail";

		$fdata["sourceSingle"] = "BillToPartyContactEmail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BillToPartyContactEmail";

	
	
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


	$tdatatbl_rfqs["BillToPartyContactEmail"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "BillToPartyContactEmail";
//	Terms
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 97;
	$fdata["strName"] = "Terms";
	$fdata["GoodName"] = "Terms";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","Terms");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "Terms";

		$fdata["sourceSingle"] = "Terms";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Terms";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Prepaid";
	$edata["LookupValues"][] = "Collect";

	
	
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


	$tdatatbl_rfqs["Terms"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "Terms";
//	Modified
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 98;
	$fdata["strName"] = "Modified";
	$fdata["GoodName"] = "Modified";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","Modified");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Modified";

		$fdata["sourceSingle"] = "Modified";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Modified";

	
	
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


	$tdatatbl_rfqs["Modified"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "Modified";
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 99;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","Status");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Status";

		$fdata["sourceSingle"] = "Status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatatbl_rfqs["Status"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "Status";
//	NewRFQ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "NewRFQ";
	$fdata["GoodName"] = "NewRFQ";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","NewRFQ");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "NewRFQ";

		$fdata["sourceSingle"] = "NewRFQ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NewRFQ";

	
	
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


	$tdatatbl_rfqs["NewRFQ"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "NewRFQ";
//	RFQResponseDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 101;
	$fdata["strName"] = "RFQResponseDate";
	$fdata["GoodName"] = "RFQResponseDate";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","RFQResponseDate");
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


	$tdatatbl_rfqs["RFQResponseDate"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "RFQResponseDate";
//	OrderID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 102;
	$fdata["strName"] = "OrderID";
	$fdata["GoodName"] = "OrderID";
	$fdata["ownerTable"] = "tbl_rfqs";
	$fdata["Label"] = GetFieldLabel("tbl_rfqs","OrderID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "OrderID";

		$fdata["sourceSingle"] = "OrderID";

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


	$tdatatbl_rfqs["OrderID"] = $fdata;
		$tdatatbl_rfqs[".searchableFields"][] = "OrderID";


$tables_data["tbl_rfqs"]=&$tdatatbl_rfqs;
$field_labels["tbl_rfqs"] = &$fieldLabelstbl_rfqs;
$fieldToolTips["tbl_rfqs"] = &$fieldToolTipstbl_rfqs;
$placeHolders["tbl_rfqs"] = &$placeHolderstbl_rfqs;
$page_titles["tbl_rfqs"] = &$pageTitlestbl_rfqs;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_rfqs"] = array();
//	tbl_rfq_items
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_rfq_items";
		$detailsParam["dOriginalTable"] = "tbl_rfq_items";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_rfq_items";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_rfq_items");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_rfqs"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_rfqs"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_rfqs"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["tbl_rfqs"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_rfqs"][$dIndex]["detailKeys"][]="RfqID";
//	tbl_rfq_carrier_quote
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_rfq_carrier_quote";
		$detailsParam["dOriginalTable"] = "tbl_rfq_carrier_quote";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_rfq_carrier_quote";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_rfq_carrier_quote");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_rfqs"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_rfqs"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_rfqs"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["tbl_rfqs"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_rfqs"][$dIndex]["detailKeys"][]="RFQID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_rfqs"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_rfqs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	companyID,  	RFQStatusID,  	Inbound,  	PONumber,  	BOLNumber,  	ShipperID,  	ShipperReferenceNo,  	ShipperName,  	ShipperAddress,  	ShipperAddress1,  	ShipperAddress2,  	ShipperCity,  	ShipperProvinceID,  	ShipperCountryID,  	ShipperCountyName,  	ShipperPostal,  	ShipperLongitude,  	ShipperLatitude,  	ShipperContactID,  	ShipperContactName,  	ShipperPrimaryContactDetails,  	ShipperContactTel,  	ShipperContactFax,  	ShipperContactEmail,  	ShipperHoursOpen,  	ShipperHoursClose,  	ShipperInstructions,  	ShipperDirections,  	ConsigneeID,  	ConsigneeReferenceNo,  	ConsigneeName,  	ConsigneeAddress,  	ConsigneeAddress1,  	ConsigneeAddress2,  	ConsigneeCity,  	ConsigneeProvinceID,  	ConsigneeCountryID,  	ConsigneeCountyName,  	ConsigneePostal,  	ConsigneeLongitude,  	ConsigneeLatitude,  	ConsigneeContactID,  	ConsigneeContactDetails,  	ConsigneeContactName,  	ConsigneeContactTel,  	ConsigneeContactFax,  	ConsigneeContactEmail,  	ConsigneeHoursOpen,  	ConsigneeHoursClose,  	ConsigneeInstructions,  	ConsigneeDirections,  	CarrierID,  	CarrierReferenceNo,  	CarrierName,  	CarrierContactID,  	CarrierContactDetails,  	CarrierContactName,  	CarrierContactTel,  	CarrierContactFax,  	CarrierContactEmail,  	CarrierDriver,  	CustomsBrokerID,  	CustomsBrokerName,  	CustomsContactID,  	CustomsBrokerContactDetails,  	CustomsBrokerContactName,  	CustomsBrokerContactTel,  	CustomsBrokerContactFax,  	CustomsBrokerContactEmail,  	PickupDateExpected,  	DeliveryDateExpected,  	PaymentTerms,  	EquipmentType,  	Routing,  	Instructions,  	Price,  	Cost,  	Created,  	RFQNumber,  	BillToPartyID,  	BillToPartyReferenceNo,  	BillToPartyName,  	BillToAddress,  	BillToPartyAddress1,  	BillToPartyAddress2,  	BillToPartyCity,  	BillToPartyProvinceID,  	BillToPartyCountryID,  	BillToPartyPostal,  	BillToContactID,  	BillToContactDetails,  	BillToPartyContactName,  	BillToPartyContactTel,  	BillToPartyContactFax,  	BillToPartyContactEmail,  	Terms,  	Modified,  	Status,  	NewRFQ,  	RFQResponseDate,  	OrderID";
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
	"m_srcTableName" => "tbl_rfqs"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_rfqs";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "companyID",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto8["m_sql"] = "companyID";
$proto8["m_srcTableName"] = "tbl_rfqs";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "RFQStatusID",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto10["m_sql"] = "RFQStatusID";
$proto10["m_srcTableName"] = "tbl_rfqs";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Inbound",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto12["m_sql"] = "Inbound";
$proto12["m_srcTableName"] = "tbl_rfqs";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PONumber",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto14["m_sql"] = "PONumber";
$proto14["m_srcTableName"] = "tbl_rfqs";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "BOLNumber",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto16["m_sql"] = "BOLNumber";
$proto16["m_srcTableName"] = "tbl_rfqs";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperID",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto18["m_sql"] = "ShipperID";
$proto18["m_srcTableName"] = "tbl_rfqs";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperReferenceNo",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto20["m_sql"] = "ShipperReferenceNo";
$proto20["m_srcTableName"] = "tbl_rfqs";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperName",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto22["m_sql"] = "ShipperName";
$proto22["m_srcTableName"] = "tbl_rfqs";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperAddress",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto24["m_sql"] = "ShipperAddress";
$proto24["m_srcTableName"] = "tbl_rfqs";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperAddress1",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto26["m_sql"] = "ShipperAddress1";
$proto26["m_srcTableName"] = "tbl_rfqs";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperAddress2",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto28["m_sql"] = "ShipperAddress2";
$proto28["m_srcTableName"] = "tbl_rfqs";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperCity",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto30["m_sql"] = "ShipperCity";
$proto30["m_srcTableName"] = "tbl_rfqs";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperProvinceID",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto32["m_sql"] = "ShipperProvinceID";
$proto32["m_srcTableName"] = "tbl_rfqs";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperCountryID",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto34["m_sql"] = "ShipperCountryID";
$proto34["m_srcTableName"] = "tbl_rfqs";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperCountyName",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto36["m_sql"] = "ShipperCountyName";
$proto36["m_srcTableName"] = "tbl_rfqs";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperPostal",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto38["m_sql"] = "ShipperPostal";
$proto38["m_srcTableName"] = "tbl_rfqs";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperLongitude",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto40["m_sql"] = "ShipperLongitude";
$proto40["m_srcTableName"] = "tbl_rfqs";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperLatitude",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto42["m_sql"] = "ShipperLatitude";
$proto42["m_srcTableName"] = "tbl_rfqs";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperContactID",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto44["m_sql"] = "ShipperContactID";
$proto44["m_srcTableName"] = "tbl_rfqs";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperContactName",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto46["m_sql"] = "ShipperContactName";
$proto46["m_srcTableName"] = "tbl_rfqs";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperPrimaryContactDetails",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto48["m_sql"] = "ShipperPrimaryContactDetails";
$proto48["m_srcTableName"] = "tbl_rfqs";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperContactTel",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto50["m_sql"] = "ShipperContactTel";
$proto50["m_srcTableName"] = "tbl_rfqs";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperContactFax",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto52["m_sql"] = "ShipperContactFax";
$proto52["m_srcTableName"] = "tbl_rfqs";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperContactEmail",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto54["m_sql"] = "ShipperContactEmail";
$proto54["m_srcTableName"] = "tbl_rfqs";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperHoursOpen",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto56["m_sql"] = "ShipperHoursOpen";
$proto56["m_srcTableName"] = "tbl_rfqs";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperHoursClose",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto58["m_sql"] = "ShipperHoursClose";
$proto58["m_srcTableName"] = "tbl_rfqs";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperInstructions",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto60["m_sql"] = "ShipperInstructions";
$proto60["m_srcTableName"] = "tbl_rfqs";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperDirections",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto62["m_sql"] = "ShipperDirections";
$proto62["m_srcTableName"] = "tbl_rfqs";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeID",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto64["m_sql"] = "ConsigneeID";
$proto64["m_srcTableName"] = "tbl_rfqs";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeReferenceNo",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto66["m_sql"] = "ConsigneeReferenceNo";
$proto66["m_srcTableName"] = "tbl_rfqs";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeName",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto68["m_sql"] = "ConsigneeName";
$proto68["m_srcTableName"] = "tbl_rfqs";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeAddress",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto70["m_sql"] = "ConsigneeAddress";
$proto70["m_srcTableName"] = "tbl_rfqs";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeAddress1",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto72["m_sql"] = "ConsigneeAddress1";
$proto72["m_srcTableName"] = "tbl_rfqs";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeAddress2",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto74["m_sql"] = "ConsigneeAddress2";
$proto74["m_srcTableName"] = "tbl_rfqs";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeCity",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto76["m_sql"] = "ConsigneeCity";
$proto76["m_srcTableName"] = "tbl_rfqs";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeProvinceID",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto78["m_sql"] = "ConsigneeProvinceID";
$proto78["m_srcTableName"] = "tbl_rfqs";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeCountryID",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto80["m_sql"] = "ConsigneeCountryID";
$proto80["m_srcTableName"] = "tbl_rfqs";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeCountyName",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto82["m_sql"] = "ConsigneeCountyName";
$proto82["m_srcTableName"] = "tbl_rfqs";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneePostal",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto84["m_sql"] = "ConsigneePostal";
$proto84["m_srcTableName"] = "tbl_rfqs";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeLongitude",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto86["m_sql"] = "ConsigneeLongitude";
$proto86["m_srcTableName"] = "tbl_rfqs";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeLatitude",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto88["m_sql"] = "ConsigneeLatitude";
$proto88["m_srcTableName"] = "tbl_rfqs";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeContactID",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto90["m_sql"] = "ConsigneeContactID";
$proto90["m_srcTableName"] = "tbl_rfqs";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeContactDetails",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto92["m_sql"] = "ConsigneeContactDetails";
$proto92["m_srcTableName"] = "tbl_rfqs";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeContactName",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto94["m_sql"] = "ConsigneeContactName";
$proto94["m_srcTableName"] = "tbl_rfqs";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeContactTel",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto96["m_sql"] = "ConsigneeContactTel";
$proto96["m_srcTableName"] = "tbl_rfqs";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeContactFax",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto98["m_sql"] = "ConsigneeContactFax";
$proto98["m_srcTableName"] = "tbl_rfqs";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeContactEmail",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto100["m_sql"] = "ConsigneeContactEmail";
$proto100["m_srcTableName"] = "tbl_rfqs";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeHoursOpen",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto102["m_sql"] = "ConsigneeHoursOpen";
$proto102["m_srcTableName"] = "tbl_rfqs";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeHoursClose",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto104["m_sql"] = "ConsigneeHoursClose";
$proto104["m_srcTableName"] = "tbl_rfqs";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeInstructions",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto106["m_sql"] = "ConsigneeInstructions";
$proto106["m_srcTableName"] = "tbl_rfqs";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeDirections",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto108["m_sql"] = "ConsigneeDirections";
$proto108["m_srcTableName"] = "tbl_rfqs";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierID",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto110["m_sql"] = "CarrierID";
$proto110["m_srcTableName"] = "tbl_rfqs";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierReferenceNo",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto112["m_sql"] = "CarrierReferenceNo";
$proto112["m_srcTableName"] = "tbl_rfqs";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierName",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto114["m_sql"] = "CarrierName";
$proto114["m_srcTableName"] = "tbl_rfqs";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierContactID",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto116["m_sql"] = "CarrierContactID";
$proto116["m_srcTableName"] = "tbl_rfqs";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierContactDetails",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto118["m_sql"] = "CarrierContactDetails";
$proto118["m_srcTableName"] = "tbl_rfqs";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierContactName",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto120["m_sql"] = "CarrierContactName";
$proto120["m_srcTableName"] = "tbl_rfqs";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierContactTel",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto122["m_sql"] = "CarrierContactTel";
$proto122["m_srcTableName"] = "tbl_rfqs";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierContactFax",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto124["m_sql"] = "CarrierContactFax";
$proto124["m_srcTableName"] = "tbl_rfqs";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierContactEmail",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto126["m_sql"] = "CarrierContactEmail";
$proto126["m_srcTableName"] = "tbl_rfqs";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierDriver",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto128["m_sql"] = "CarrierDriver";
$proto128["m_srcTableName"] = "tbl_rfqs";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomsBrokerID",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto130["m_sql"] = "CustomsBrokerID";
$proto130["m_srcTableName"] = "tbl_rfqs";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomsBrokerName",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto132["m_sql"] = "CustomsBrokerName";
$proto132["m_srcTableName"] = "tbl_rfqs";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomsContactID",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto134["m_sql"] = "CustomsContactID";
$proto134["m_srcTableName"] = "tbl_rfqs";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomsBrokerContactDetails",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto136["m_sql"] = "CustomsBrokerContactDetails";
$proto136["m_srcTableName"] = "tbl_rfqs";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomsBrokerContactName",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto138["m_sql"] = "CustomsBrokerContactName";
$proto138["m_srcTableName"] = "tbl_rfqs";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomsBrokerContactTel",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto140["m_sql"] = "CustomsBrokerContactTel";
$proto140["m_srcTableName"] = "tbl_rfqs";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomsBrokerContactFax",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto142["m_sql"] = "CustomsBrokerContactFax";
$proto142["m_srcTableName"] = "tbl_rfqs";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomsBrokerContactEmail",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto144["m_sql"] = "CustomsBrokerContactEmail";
$proto144["m_srcTableName"] = "tbl_rfqs";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "PickupDateExpected",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto146["m_sql"] = "PickupDateExpected";
$proto146["m_srcTableName"] = "tbl_rfqs";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "DeliveryDateExpected",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto148["m_sql"] = "DeliveryDateExpected";
$proto148["m_srcTableName"] = "tbl_rfqs";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentTerms",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto150["m_sql"] = "PaymentTerms";
$proto150["m_srcTableName"] = "tbl_rfqs";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "EquipmentType",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto152["m_sql"] = "EquipmentType";
$proto152["m_srcTableName"] = "tbl_rfqs";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "Routing",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto154["m_sql"] = "Routing";
$proto154["m_srcTableName"] = "tbl_rfqs";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "Instructions",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto156["m_sql"] = "Instructions";
$proto156["m_srcTableName"] = "tbl_rfqs";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "Price",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto158["m_sql"] = "Price";
$proto158["m_srcTableName"] = "tbl_rfqs";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto160["m_sql"] = "Cost";
$proto160["m_srcTableName"] = "tbl_rfqs";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "Created",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto162["m_sql"] = "Created";
$proto162["m_srcTableName"] = "tbl_rfqs";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "RFQNumber",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto164["m_sql"] = "RFQNumber";
$proto164["m_srcTableName"] = "tbl_rfqs";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyID",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto166["m_sql"] = "BillToPartyID";
$proto166["m_srcTableName"] = "tbl_rfqs";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyReferenceNo",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto168["m_sql"] = "BillToPartyReferenceNo";
$proto168["m_srcTableName"] = "tbl_rfqs";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyName",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto170["m_sql"] = "BillToPartyName";
$proto170["m_srcTableName"] = "tbl_rfqs";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToAddress",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto172["m_sql"] = "BillToAddress";
$proto172["m_srcTableName"] = "tbl_rfqs";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyAddress1",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto174["m_sql"] = "BillToPartyAddress1";
$proto174["m_srcTableName"] = "tbl_rfqs";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyAddress2",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto176["m_sql"] = "BillToPartyAddress2";
$proto176["m_srcTableName"] = "tbl_rfqs";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyCity",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto178["m_sql"] = "BillToPartyCity";
$proto178["m_srcTableName"] = "tbl_rfqs";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyProvinceID",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto180["m_sql"] = "BillToPartyProvinceID";
$proto180["m_srcTableName"] = "tbl_rfqs";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyCountryID",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto182["m_sql"] = "BillToPartyCountryID";
$proto182["m_srcTableName"] = "tbl_rfqs";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyPostal",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto184["m_sql"] = "BillToPartyPostal";
$proto184["m_srcTableName"] = "tbl_rfqs";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToContactID",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto186["m_sql"] = "BillToContactID";
$proto186["m_srcTableName"] = "tbl_rfqs";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToContactDetails",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto188["m_sql"] = "BillToContactDetails";
$proto188["m_srcTableName"] = "tbl_rfqs";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyContactName",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto190["m_sql"] = "BillToPartyContactName";
$proto190["m_srcTableName"] = "tbl_rfqs";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyContactTel",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto192["m_sql"] = "BillToPartyContactTel";
$proto192["m_srcTableName"] = "tbl_rfqs";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyContactFax",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto194["m_sql"] = "BillToPartyContactFax";
$proto194["m_srcTableName"] = "tbl_rfqs";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyContactEmail",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto196["m_sql"] = "BillToPartyContactEmail";
$proto196["m_srcTableName"] = "tbl_rfqs";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
						$proto198=array();
			$obj = new SQLField(array(
	"m_strName" => "Terms",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto198["m_sql"] = "Terms";
$proto198["m_srcTableName"] = "tbl_rfqs";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "";
$obj = new SQLFieldListItem($proto198);

$proto0["m_fieldlist"][]=$obj;
						$proto200=array();
			$obj = new SQLField(array(
	"m_strName" => "Modified",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto200["m_sql"] = "Modified";
$proto200["m_srcTableName"] = "tbl_rfqs";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "";
$obj = new SQLFieldListItem($proto200);

$proto0["m_fieldlist"][]=$obj;
						$proto202=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto202["m_sql"] = "Status";
$proto202["m_srcTableName"] = "tbl_rfqs";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "";
$obj = new SQLFieldListItem($proto202);

$proto0["m_fieldlist"][]=$obj;
						$proto204=array();
			$obj = new SQLField(array(
	"m_strName" => "NewRFQ",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto204["m_sql"] = "NewRFQ";
$proto204["m_srcTableName"] = "tbl_rfqs";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "";
$obj = new SQLFieldListItem($proto204);

$proto0["m_fieldlist"][]=$obj;
						$proto206=array();
			$obj = new SQLField(array(
	"m_strName" => "RFQResponseDate",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto206["m_sql"] = "RFQResponseDate";
$proto206["m_srcTableName"] = "tbl_rfqs";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "";
$obj = new SQLFieldListItem($proto206);

$proto0["m_fieldlist"][]=$obj;
						$proto208=array();
			$obj = new SQLField(array(
	"m_strName" => "OrderID",
	"m_strTable" => "tbl_rfqs",
	"m_srcTableName" => "tbl_rfqs"
));

$proto208["m_sql"] = "OrderID";
$proto208["m_srcTableName"] = "tbl_rfqs";
$proto208["m_expr"]=$obj;
$proto208["m_alias"] = "";
$obj = new SQLFieldListItem($proto208);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto210=array();
$proto210["m_link"] = "SQLL_MAIN";
			$proto211=array();
$proto211["m_strName"] = "tbl_rfqs";
$proto211["m_srcTableName"] = "tbl_rfqs";
$proto211["m_columns"] = array();
$proto211["m_columns"][] = "ID";
$proto211["m_columns"][] = "companyID";
$proto211["m_columns"][] = "RFQStatusID";
$proto211["m_columns"][] = "Inbound";
$proto211["m_columns"][] = "PONumber";
$proto211["m_columns"][] = "BOLNumber";
$proto211["m_columns"][] = "ShipperID";
$proto211["m_columns"][] = "ShipperReferenceNo";
$proto211["m_columns"][] = "ShipperName";
$proto211["m_columns"][] = "ShipperAddress";
$proto211["m_columns"][] = "ShipperAddress1";
$proto211["m_columns"][] = "ShipperAddress2";
$proto211["m_columns"][] = "ShipperCity";
$proto211["m_columns"][] = "ShipperProvinceID";
$proto211["m_columns"][] = "ShipperCountryID";
$proto211["m_columns"][] = "ShipperCountyName";
$proto211["m_columns"][] = "ShipperPostal";
$proto211["m_columns"][] = "ShipperLongitude";
$proto211["m_columns"][] = "ShipperLatitude";
$proto211["m_columns"][] = "ShipperContactID";
$proto211["m_columns"][] = "ShipperContactName";
$proto211["m_columns"][] = "ShipperPrimaryContactDetails";
$proto211["m_columns"][] = "ShipperContactTel";
$proto211["m_columns"][] = "ShipperContactFax";
$proto211["m_columns"][] = "ShipperContactEmail";
$proto211["m_columns"][] = "ShipperHoursOpen";
$proto211["m_columns"][] = "ShipperHoursClose";
$proto211["m_columns"][] = "ShipperInstructions";
$proto211["m_columns"][] = "ShipperDirections";
$proto211["m_columns"][] = "ConsigneeID";
$proto211["m_columns"][] = "ConsigneeReferenceNo";
$proto211["m_columns"][] = "ConsigneeName";
$proto211["m_columns"][] = "ConsigneeAddress";
$proto211["m_columns"][] = "ConsigneeAddress1";
$proto211["m_columns"][] = "ConsigneeAddress2";
$proto211["m_columns"][] = "ConsigneeCity";
$proto211["m_columns"][] = "ConsigneeProvinceID";
$proto211["m_columns"][] = "ConsigneeCountryID";
$proto211["m_columns"][] = "ConsigneeCountyName";
$proto211["m_columns"][] = "ConsigneePostal";
$proto211["m_columns"][] = "ConsigneeLongitude";
$proto211["m_columns"][] = "ConsigneeLatitude";
$proto211["m_columns"][] = "ConsigneeContactID";
$proto211["m_columns"][] = "ConsigneeContactDetails";
$proto211["m_columns"][] = "ConsigneeContactName";
$proto211["m_columns"][] = "ConsigneeContactTel";
$proto211["m_columns"][] = "ConsigneeContactFax";
$proto211["m_columns"][] = "ConsigneeContactEmail";
$proto211["m_columns"][] = "ConsigneeHoursOpen";
$proto211["m_columns"][] = "ConsigneeHoursClose";
$proto211["m_columns"][] = "ConsigneeInstructions";
$proto211["m_columns"][] = "ConsigneeDirections";
$proto211["m_columns"][] = "CarrierID";
$proto211["m_columns"][] = "CarrierReferenceNo";
$proto211["m_columns"][] = "CarrierName";
$proto211["m_columns"][] = "CarrierContactID";
$proto211["m_columns"][] = "CarrierContactDetails";
$proto211["m_columns"][] = "CarrierContactName";
$proto211["m_columns"][] = "CarrierContactTel";
$proto211["m_columns"][] = "CarrierContactFax";
$proto211["m_columns"][] = "CarrierContactEmail";
$proto211["m_columns"][] = "CarrierDriver";
$proto211["m_columns"][] = "CustomsBrokerID";
$proto211["m_columns"][] = "CustomsBrokerName";
$proto211["m_columns"][] = "CustomsContactID";
$proto211["m_columns"][] = "CustomsBrokerContactDetails";
$proto211["m_columns"][] = "CustomsBrokerContactName";
$proto211["m_columns"][] = "CustomsBrokerContactTel";
$proto211["m_columns"][] = "CustomsBrokerContactFax";
$proto211["m_columns"][] = "CustomsBrokerContactEmail";
$proto211["m_columns"][] = "PickupDateExpected";
$proto211["m_columns"][] = "DeliveryDateExpected";
$proto211["m_columns"][] = "PaymentTerms";
$proto211["m_columns"][] = "EquipmentType";
$proto211["m_columns"][] = "Routing";
$proto211["m_columns"][] = "Instructions";
$proto211["m_columns"][] = "Price";
$proto211["m_columns"][] = "Cost";
$proto211["m_columns"][] = "Created";
$proto211["m_columns"][] = "RFQNumber";
$proto211["m_columns"][] = "BillToPartyID";
$proto211["m_columns"][] = "BillToPartyReferenceNo";
$proto211["m_columns"][] = "BillToPartyName";
$proto211["m_columns"][] = "BillToAddress";
$proto211["m_columns"][] = "BillToPartyAddress1";
$proto211["m_columns"][] = "BillToPartyAddress2";
$proto211["m_columns"][] = "BillToPartyCity";
$proto211["m_columns"][] = "BillToPartyProvinceID";
$proto211["m_columns"][] = "BillToPartyCountryID";
$proto211["m_columns"][] = "BillToPartyPostal";
$proto211["m_columns"][] = "BillToContactID";
$proto211["m_columns"][] = "BillToContactDetails";
$proto211["m_columns"][] = "BillToPartyContactName";
$proto211["m_columns"][] = "BillToPartyContactTel";
$proto211["m_columns"][] = "BillToPartyContactFax";
$proto211["m_columns"][] = "BillToPartyContactEmail";
$proto211["m_columns"][] = "Terms";
$proto211["m_columns"][] = "Modified";
$proto211["m_columns"][] = "Status";
$proto211["m_columns"][] = "NewRFQ";
$proto211["m_columns"][] = "RFQResponseDate";
$proto211["m_columns"][] = "OrderID";
$obj = new SQLTable($proto211);

$proto210["m_table"] = $obj;
$proto210["m_sql"] = "tbl_rfqs";
$proto210["m_alias"] = "";
$proto210["m_srcTableName"] = "tbl_rfqs";
$proto212=array();
$proto212["m_sql"] = "";
$proto212["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto212["m_column"]=$obj;
$proto212["m_contained"] = array();
$proto212["m_strCase"] = "";
$proto212["m_havingmode"] = false;
$proto212["m_inBrackets"] = false;
$proto212["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto212);

$proto210["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto210);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_rfqs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_rfqs = createSqlQuery_tbl_rfqs();


	
		;

																																																																																																						

$tdatatbl_rfqs[".sqlquery"] = $queryData_tbl_rfqs;



include_once(getabspath("include/tbl_rfqs_events.php"));
$tableEvents["tbl_rfqs"] = new eventclass_tbl_rfqs;
$tdatatbl_rfqs[".hasEvents"] = true;

?>