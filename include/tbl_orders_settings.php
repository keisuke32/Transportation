<?php
$tdatatbl_orders = array();
$tdatatbl_orders[".searchableFields"] = array();
$tdatatbl_orders[".ShortName"] = "tbl_orders";
$tdatatbl_orders[".OwnerID"] = "";
$tdatatbl_orders[".OriginalTable"] = "tbl_orders";


$tdatatbl_orders[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatatbl_orders[".originalPagesByType"] = $tdatatbl_orders[".pagesByType"];
$tdatatbl_orders[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatatbl_orders[".originalPages"] = $tdatatbl_orders[".pages"];
$tdatatbl_orders[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatatbl_orders[".originalDefaultPages"] = $tdatatbl_orders[".defaultPages"];

//	field labels
$fieldLabelstbl_orders = array();
$fieldToolTipstbl_orders = array();
$pageTitlestbl_orders = array();
$placeHolderstbl_orders = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_orders["English"] = array();
	$fieldToolTipstbl_orders["English"] = array();
	$placeHolderstbl_orders["English"] = array();
	$pageTitlestbl_orders["English"] = array();
	$fieldLabelstbl_orders["English"]["ID"] = "ID";
	$fieldToolTipstbl_orders["English"]["ID"] = "";
	$placeHolderstbl_orders["English"]["ID"] = "";
	$fieldLabelstbl_orders["English"]["companyID"] = "Company";
	$fieldToolTipstbl_orders["English"]["companyID"] = "";
	$placeHolderstbl_orders["English"]["companyID"] = "";
	$fieldLabelstbl_orders["English"]["OrderStatusID"] = "Order Status";
	$fieldToolTipstbl_orders["English"]["OrderStatusID"] = "";
	$placeHolderstbl_orders["English"]["OrderStatusID"] = "";
	$fieldLabelstbl_orders["English"]["Inbound"] = "Inbound";
	$fieldToolTipstbl_orders["English"]["Inbound"] = "";
	$placeHolderstbl_orders["English"]["Inbound"] = "";
	$fieldLabelstbl_orders["English"]["PONumber"] = "PO Number";
	$fieldToolTipstbl_orders["English"]["PONumber"] = "";
	$placeHolderstbl_orders["English"]["PONumber"] = "";
	$fieldLabelstbl_orders["English"]["BOLNumber"] = "BOL Number";
	$fieldToolTipstbl_orders["English"]["BOLNumber"] = "";
	$placeHolderstbl_orders["English"]["BOLNumber"] = "";
	$fieldLabelstbl_orders["English"]["ShipperID"] = "Shipper";
	$fieldToolTipstbl_orders["English"]["ShipperID"] = "";
	$placeHolderstbl_orders["English"]["ShipperID"] = "";
	$fieldLabelstbl_orders["English"]["ShipperReferenceNo"] = "Reference No";
	$fieldToolTipstbl_orders["English"]["ShipperReferenceNo"] = "";
	$placeHolderstbl_orders["English"]["ShipperReferenceNo"] = "";
	$fieldLabelstbl_orders["English"]["ShipperName"] = "Name";
	$fieldToolTipstbl_orders["English"]["ShipperName"] = "";
	$placeHolderstbl_orders["English"]["ShipperName"] = "";
	$fieldLabelstbl_orders["English"]["ShipperAddress1"] = "Address 1";
	$fieldToolTipstbl_orders["English"]["ShipperAddress1"] = "";
	$placeHolderstbl_orders["English"]["ShipperAddress1"] = "";
	$fieldLabelstbl_orders["English"]["ShipperAddress2"] = "Address2";
	$fieldToolTipstbl_orders["English"]["ShipperAddress2"] = "";
	$placeHolderstbl_orders["English"]["ShipperAddress2"] = "";
	$fieldLabelstbl_orders["English"]["ShipperCity"] = "City";
	$fieldToolTipstbl_orders["English"]["ShipperCity"] = "";
	$placeHolderstbl_orders["English"]["ShipperCity"] = "";
	$fieldLabelstbl_orders["English"]["ShipperProvinceID"] = "Province/State";
	$fieldToolTipstbl_orders["English"]["ShipperProvinceID"] = "";
	$placeHolderstbl_orders["English"]["ShipperProvinceID"] = "";
	$fieldLabelstbl_orders["English"]["ShipperCountryID"] = "Country";
	$fieldToolTipstbl_orders["English"]["ShipperCountryID"] = "";
	$placeHolderstbl_orders["English"]["ShipperCountryID"] = "";
	$fieldLabelstbl_orders["English"]["ShipperPostal"] = "Postal";
	$fieldToolTipstbl_orders["English"]["ShipperPostal"] = "";
	$placeHolderstbl_orders["English"]["ShipperPostal"] = "";
	$fieldLabelstbl_orders["English"]["ShipperContactName"] = "Contact Name";
	$fieldToolTipstbl_orders["English"]["ShipperContactName"] = "";
	$placeHolderstbl_orders["English"]["ShipperContactName"] = "";
	$fieldLabelstbl_orders["English"]["ShipperContactTel"] = "Contact Tel";
	$fieldToolTipstbl_orders["English"]["ShipperContactTel"] = "";
	$placeHolderstbl_orders["English"]["ShipperContactTel"] = "";
	$fieldLabelstbl_orders["English"]["ShipperContactFax"] = "Contact Fax";
	$fieldToolTipstbl_orders["English"]["ShipperContactFax"] = "";
	$placeHolderstbl_orders["English"]["ShipperContactFax"] = "";
	$fieldLabelstbl_orders["English"]["ShipperContactEmail"] = "Contact Email";
	$fieldToolTipstbl_orders["English"]["ShipperContactEmail"] = "";
	$placeHolderstbl_orders["English"]["ShipperContactEmail"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneeID"] = "Consignee";
	$fieldToolTipstbl_orders["English"]["ConsigneeID"] = "";
	$placeHolderstbl_orders["English"]["ConsigneeID"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneeReferenceNo"] = "Consignee Reference No";
	$fieldToolTipstbl_orders["English"]["ConsigneeReferenceNo"] = "";
	$placeHolderstbl_orders["English"]["ConsigneeReferenceNo"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneeName"] = "Consignee Name";
	$fieldToolTipstbl_orders["English"]["ConsigneeName"] = "";
	$placeHolderstbl_orders["English"]["ConsigneeName"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneeAddress1"] = "Consignee Address1";
	$fieldToolTipstbl_orders["English"]["ConsigneeAddress1"] = "";
	$placeHolderstbl_orders["English"]["ConsigneeAddress1"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneeAddress2"] = "Consignee Address2";
	$fieldToolTipstbl_orders["English"]["ConsigneeAddress2"] = "";
	$placeHolderstbl_orders["English"]["ConsigneeAddress2"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneeCity"] = "Consignee City";
	$fieldToolTipstbl_orders["English"]["ConsigneeCity"] = "";
	$placeHolderstbl_orders["English"]["ConsigneeCity"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneeProvinceID"] = "Consignee Province/State";
	$fieldToolTipstbl_orders["English"]["ConsigneeProvinceID"] = "";
	$placeHolderstbl_orders["English"]["ConsigneeProvinceID"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneeCountryID"] = "Consignee Country";
	$fieldToolTipstbl_orders["English"]["ConsigneeCountryID"] = "";
	$placeHolderstbl_orders["English"]["ConsigneeCountryID"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneePostal"] = "Consignee Postal";
	$fieldToolTipstbl_orders["English"]["ConsigneePostal"] = "";
	$placeHolderstbl_orders["English"]["ConsigneePostal"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneeContactName"] = "Contact Name";
	$fieldToolTipstbl_orders["English"]["ConsigneeContactName"] = "";
	$placeHolderstbl_orders["English"]["ConsigneeContactName"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneeContactTel"] = "Contact Tel";
	$fieldToolTipstbl_orders["English"]["ConsigneeContactTel"] = "";
	$placeHolderstbl_orders["English"]["ConsigneeContactTel"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneeContactFax"] = "Contact Fax";
	$fieldToolTipstbl_orders["English"]["ConsigneeContactFax"] = "";
	$placeHolderstbl_orders["English"]["ConsigneeContactFax"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneeContactEmail"] = "Contact Email";
	$fieldToolTipstbl_orders["English"]["ConsigneeContactEmail"] = "";
	$placeHolderstbl_orders["English"]["ConsigneeContactEmail"] = "";
	$fieldLabelstbl_orders["English"]["CarrierID"] = "Carrier";
	$fieldToolTipstbl_orders["English"]["CarrierID"] = "";
	$placeHolderstbl_orders["English"]["CarrierID"] = "";
	$fieldLabelstbl_orders["English"]["CarrierReferenceNo"] = "Reference No";
	$fieldToolTipstbl_orders["English"]["CarrierReferenceNo"] = "";
	$placeHolderstbl_orders["English"]["CarrierReferenceNo"] = "";
	$fieldLabelstbl_orders["English"]["CarrierName"] = "Name";
	$fieldToolTipstbl_orders["English"]["CarrierName"] = "";
	$placeHolderstbl_orders["English"]["CarrierName"] = "";
	$fieldLabelstbl_orders["English"]["CarrierContactName"] = "Contact Name";
	$fieldToolTipstbl_orders["English"]["CarrierContactName"] = "";
	$placeHolderstbl_orders["English"]["CarrierContactName"] = "";
	$fieldLabelstbl_orders["English"]["CarrierContactTel"] = "Contact Tel";
	$fieldToolTipstbl_orders["English"]["CarrierContactTel"] = "";
	$placeHolderstbl_orders["English"]["CarrierContactTel"] = "";
	$fieldLabelstbl_orders["English"]["CarrierContactFax"] = "Contact Fax";
	$fieldToolTipstbl_orders["English"]["CarrierContactFax"] = "";
	$placeHolderstbl_orders["English"]["CarrierContactFax"] = "";
	$fieldLabelstbl_orders["English"]["CarrierContactEmail"] = "Email";
	$fieldToolTipstbl_orders["English"]["CarrierContactEmail"] = "";
	$placeHolderstbl_orders["English"]["CarrierContactEmail"] = "";
	$fieldLabelstbl_orders["English"]["CarrierDriver"] = "Driver";
	$fieldToolTipstbl_orders["English"]["CarrierDriver"] = "";
	$placeHolderstbl_orders["English"]["CarrierDriver"] = "";
	$fieldLabelstbl_orders["English"]["CustomsBrokerID"] = "Customs Broker";
	$fieldToolTipstbl_orders["English"]["CustomsBrokerID"] = "";
	$placeHolderstbl_orders["English"]["CustomsBrokerID"] = "";
	$fieldLabelstbl_orders["English"]["CustomsBrokerName"] = "Name";
	$fieldToolTipstbl_orders["English"]["CustomsBrokerName"] = "";
	$placeHolderstbl_orders["English"]["CustomsBrokerName"] = "";
	$fieldLabelstbl_orders["English"]["CustomsBrokerContactName"] = "Contact Name";
	$fieldToolTipstbl_orders["English"]["CustomsBrokerContactName"] = "";
	$placeHolderstbl_orders["English"]["CustomsBrokerContactName"] = "";
	$fieldLabelstbl_orders["English"]["CustomsBrokerContactTel"] = "Contact Tel";
	$fieldToolTipstbl_orders["English"]["CustomsBrokerContactTel"] = "";
	$placeHolderstbl_orders["English"]["CustomsBrokerContactTel"] = "";
	$fieldLabelstbl_orders["English"]["CustomsBrokerContactFax"] = "Contact Fax";
	$fieldToolTipstbl_orders["English"]["CustomsBrokerContactFax"] = "";
	$placeHolderstbl_orders["English"]["CustomsBrokerContactFax"] = "";
	$fieldLabelstbl_orders["English"]["CustomsBrokerContactEmail"] = "Contact Email";
	$fieldToolTipstbl_orders["English"]["CustomsBrokerContactEmail"] = "";
	$placeHolderstbl_orders["English"]["CustomsBrokerContactEmail"] = "";
	$fieldLabelstbl_orders["English"]["PickupDateExpected"] = "Expected Pickup Date";
	$fieldToolTipstbl_orders["English"]["PickupDateExpected"] = "";
	$placeHolderstbl_orders["English"]["PickupDateExpected"] = "";
	$fieldLabelstbl_orders["English"]["PickupDateActual"] = "ActualPickup Date";
	$fieldToolTipstbl_orders["English"]["PickupDateActual"] = "";
	$placeHolderstbl_orders["English"]["PickupDateActual"] = "";
	$fieldLabelstbl_orders["English"]["DeliveryDateExpected"] = "ExpectedDelivery Date ";
	$fieldToolTipstbl_orders["English"]["DeliveryDateExpected"] = "";
	$placeHolderstbl_orders["English"]["DeliveryDateExpected"] = "";
	$fieldLabelstbl_orders["English"]["DeliveryDateActual"] = "Actual Delivery Date";
	$fieldToolTipstbl_orders["English"]["DeliveryDateActual"] = "";
	$placeHolderstbl_orders["English"]["DeliveryDateActual"] = "";
	$fieldLabelstbl_orders["English"]["Delivered"] = "Delivered";
	$fieldToolTipstbl_orders["English"]["Delivered"] = "";
	$placeHolderstbl_orders["English"]["Delivered"] = "";
	$fieldLabelstbl_orders["English"]["POD"] = "POD";
	$fieldToolTipstbl_orders["English"]["POD"] = "";
	$placeHolderstbl_orders["English"]["POD"] = "";
	$fieldLabelstbl_orders["English"]["PaymentTerms"] = "Payment Terms";
	$fieldToolTipstbl_orders["English"]["PaymentTerms"] = "";
	$placeHolderstbl_orders["English"]["PaymentTerms"] = "";
	$fieldLabelstbl_orders["English"]["EquipmentType"] = "Equipment Type";
	$fieldToolTipstbl_orders["English"]["EquipmentType"] = "";
	$placeHolderstbl_orders["English"]["EquipmentType"] = "";
	$fieldLabelstbl_orders["English"]["Routing"] = "Routing";
	$fieldToolTipstbl_orders["English"]["Routing"] = "";
	$placeHolderstbl_orders["English"]["Routing"] = "";
	$fieldLabelstbl_orders["English"]["Instructions"] = "Instructions";
	$fieldToolTipstbl_orders["English"]["Instructions"] = "";
	$placeHolderstbl_orders["English"]["Instructions"] = "";
	$fieldLabelstbl_orders["English"]["Price"] = "Price";
	$fieldToolTipstbl_orders["English"]["Price"] = "";
	$placeHolderstbl_orders["English"]["Price"] = "";
	$fieldLabelstbl_orders["English"]["Invoiced"] = "Invoiced";
	$fieldToolTipstbl_orders["English"]["Invoiced"] = "";
	$placeHolderstbl_orders["English"]["Invoiced"] = "";
	$fieldLabelstbl_orders["English"]["InvoiceID"] = "Invoice";
	$fieldToolTipstbl_orders["English"]["InvoiceID"] = "";
	$placeHolderstbl_orders["English"]["InvoiceID"] = "";
	$fieldLabelstbl_orders["English"]["Paid"] = "Paid";
	$fieldToolTipstbl_orders["English"]["Paid"] = "";
	$placeHolderstbl_orders["English"]["Paid"] = "";
	$fieldLabelstbl_orders["English"]["Cost"] = "Cost";
	$fieldToolTipstbl_orders["English"]["Cost"] = "";
	$placeHolderstbl_orders["English"]["Cost"] = "";
	$fieldLabelstbl_orders["English"]["Created"] = "Created";
	$fieldToolTipstbl_orders["English"]["Created"] = "";
	$placeHolderstbl_orders["English"]["Created"] = "";
	$fieldLabelstbl_orders["English"]["OrderNumber"] = "Order Number";
	$fieldToolTipstbl_orders["English"]["OrderNumber"] = "";
	$placeHolderstbl_orders["English"]["OrderNumber"] = "";
	$fieldLabelstbl_orders["English"]["BillToPartyID"] = "Bill To Party";
	$fieldToolTipstbl_orders["English"]["BillToPartyID"] = "";
	$placeHolderstbl_orders["English"]["BillToPartyID"] = "";
	$fieldLabelstbl_orders["English"]["BillToPartyReferenceNo"] = "Reference No";
	$fieldToolTipstbl_orders["English"]["BillToPartyReferenceNo"] = "";
	$placeHolderstbl_orders["English"]["BillToPartyReferenceNo"] = "";
	$fieldLabelstbl_orders["English"]["BillToPartyName"] = "Name";
	$fieldToolTipstbl_orders["English"]["BillToPartyName"] = "";
	$placeHolderstbl_orders["English"]["BillToPartyName"] = "";
	$fieldLabelstbl_orders["English"]["BillToPartyAddress1"] = "Address";
	$fieldToolTipstbl_orders["English"]["BillToPartyAddress1"] = "";
	$placeHolderstbl_orders["English"]["BillToPartyAddress1"] = "";
	$fieldLabelstbl_orders["English"]["BillToPartyAddress2"] = "Address 2";
	$fieldToolTipstbl_orders["English"]["BillToPartyAddress2"] = "";
	$placeHolderstbl_orders["English"]["BillToPartyAddress2"] = "";
	$fieldLabelstbl_orders["English"]["BillToPartyCity"] = "City";
	$fieldToolTipstbl_orders["English"]["BillToPartyCity"] = "";
	$placeHolderstbl_orders["English"]["BillToPartyCity"] = "";
	$fieldLabelstbl_orders["English"]["BillToPartyProvinceID"] = "Province/State";
	$fieldToolTipstbl_orders["English"]["BillToPartyProvinceID"] = "";
	$placeHolderstbl_orders["English"]["BillToPartyProvinceID"] = "";
	$fieldLabelstbl_orders["English"]["BillToPartyCountryID"] = "Country ID";
	$fieldToolTipstbl_orders["English"]["BillToPartyCountryID"] = "";
	$placeHolderstbl_orders["English"]["BillToPartyCountryID"] = "";
	$fieldLabelstbl_orders["English"]["BillToPartyPostal"] = "Zip/Postal Code";
	$fieldToolTipstbl_orders["English"]["BillToPartyPostal"] = "";
	$placeHolderstbl_orders["English"]["BillToPartyPostal"] = "";
	$fieldLabelstbl_orders["English"]["BillToPartyContactName"] = "Contact Name";
	$fieldToolTipstbl_orders["English"]["BillToPartyContactName"] = "";
	$placeHolderstbl_orders["English"]["BillToPartyContactName"] = "";
	$fieldLabelstbl_orders["English"]["BillToPartyContactTel"] = "Contact Tel";
	$fieldToolTipstbl_orders["English"]["BillToPartyContactTel"] = "";
	$placeHolderstbl_orders["English"]["BillToPartyContactTel"] = "";
	$fieldLabelstbl_orders["English"]["BillToPartyContactFax"] = "Contact Fax";
	$fieldToolTipstbl_orders["English"]["BillToPartyContactFax"] = "";
	$placeHolderstbl_orders["English"]["BillToPartyContactFax"] = "";
	$fieldLabelstbl_orders["English"]["BillToPartyContactEmail"] = "Contact Email";
	$fieldToolTipstbl_orders["English"]["BillToPartyContactEmail"] = "";
	$placeHolderstbl_orders["English"]["BillToPartyContactEmail"] = "";
	$fieldLabelstbl_orders["English"]["Terms"] = "Terms";
	$fieldToolTipstbl_orders["English"]["Terms"] = "";
	$placeHolderstbl_orders["English"]["Terms"] = "";
	$fieldLabelstbl_orders["English"]["QuotationNumber"] = "Quotation Number";
	$fieldToolTipstbl_orders["English"]["QuotationNumber"] = "";
	$placeHolderstbl_orders["English"]["QuotationNumber"] = "";
	$fieldLabelstbl_orders["English"]["Modified"] = "Modified";
	$fieldToolTipstbl_orders["English"]["Modified"] = "";
	$placeHolderstbl_orders["English"]["Modified"] = "";
	$fieldLabelstbl_orders["English"]["ShipperRegionID"] = "Shipper Region";
	$fieldToolTipstbl_orders["English"]["ShipperRegionID"] = "";
	$placeHolderstbl_orders["English"]["ShipperRegionID"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneeRegionID"] = "Consignee Region";
	$fieldToolTipstbl_orders["English"]["ConsigneeRegionID"] = "";
	$placeHolderstbl_orders["English"]["ConsigneeRegionID"] = "";
	$fieldLabelstbl_orders["English"]["TrailerID"] = "Trailer";
	$fieldToolTipstbl_orders["English"]["TrailerID"] = "";
	$placeHolderstbl_orders["English"]["TrailerID"] = "";
	$fieldLabelstbl_orders["English"]["Status"] = "Status";
	$fieldToolTipstbl_orders["English"]["Status"] = "";
	$placeHolderstbl_orders["English"]["Status"] = "";
	$fieldLabelstbl_orders["English"]["NewOrder"] = "New Order";
	$fieldToolTipstbl_orders["English"]["NewOrder"] = "";
	$placeHolderstbl_orders["English"]["NewOrder"] = "";
	$fieldLabelstbl_orders["English"]["PeriodStartDate"] = "Period Start Date";
	$fieldToolTipstbl_orders["English"]["PeriodStartDate"] = "";
	$placeHolderstbl_orders["English"]["PeriodStartDate"] = "";
	$fieldLabelstbl_orders["English"]["PeriodEndDate"] = "Period End Date";
	$fieldToolTipstbl_orders["English"]["PeriodEndDate"] = "";
	$placeHolderstbl_orders["English"]["PeriodEndDate"] = "";
	$fieldLabelstbl_orders["English"]["Frequency"] = "Frequency";
	$fieldToolTipstbl_orders["English"]["Frequency"] = "";
	$placeHolderstbl_orders["English"]["Frequency"] = "";
	$fieldLabelstbl_orders["English"]["ShipperCountyName"] = "County Name";
	$fieldToolTipstbl_orders["English"]["ShipperCountyName"] = "";
	$placeHolderstbl_orders["English"]["ShipperCountyName"] = "";
	$fieldLabelstbl_orders["English"]["ShipperLongitude"] = "Longitude";
	$fieldToolTipstbl_orders["English"]["ShipperLongitude"] = "";
	$placeHolderstbl_orders["English"]["ShipperLongitude"] = "";
	$fieldLabelstbl_orders["English"]["ShipperLatitude"] = "Latitude";
	$fieldToolTipstbl_orders["English"]["ShipperLatitude"] = "";
	$placeHolderstbl_orders["English"]["ShipperLatitude"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneeCountyName"] = "Consignee County Name";
	$fieldToolTipstbl_orders["English"]["ConsigneeCountyName"] = "";
	$placeHolderstbl_orders["English"]["ConsigneeCountyName"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneeLongitude"] = "Consignee Longitude";
	$fieldToolTipstbl_orders["English"]["ConsigneeLongitude"] = "";
	$placeHolderstbl_orders["English"]["ConsigneeLongitude"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneeLatitude"] = "Latitude";
	$fieldToolTipstbl_orders["English"]["ConsigneeLatitude"] = "";
	$placeHolderstbl_orders["English"]["ConsigneeLatitude"] = "";
	$fieldLabelstbl_orders["English"]["ShipperContactID"] = "Shipper Contact ID";
	$fieldToolTipstbl_orders["English"]["ShipperContactID"] = "";
	$placeHolderstbl_orders["English"]["ShipperContactID"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneeContactID"] = "Contact ID";
	$fieldToolTipstbl_orders["English"]["ConsigneeContactID"] = "";
	$placeHolderstbl_orders["English"]["ConsigneeContactID"] = "";
	$fieldLabelstbl_orders["English"]["CarrierContactID"] = "Contact ID";
	$fieldToolTipstbl_orders["English"]["CarrierContactID"] = "";
	$placeHolderstbl_orders["English"]["CarrierContactID"] = "";
	$fieldLabelstbl_orders["English"]["CustomsContactID"] = "Contact ID";
	$fieldToolTipstbl_orders["English"]["CustomsContactID"] = "";
	$placeHolderstbl_orders["English"]["CustomsContactID"] = "";
	$fieldLabelstbl_orders["English"]["BillToContactID"] = "Bill To Contact ID";
	$fieldToolTipstbl_orders["English"]["BillToContactID"] = "";
	$placeHolderstbl_orders["English"]["BillToContactID"] = "";
	$fieldLabelstbl_orders["English"]["ShipperInstructions"] = "Notes/Instructions";
	$fieldToolTipstbl_orders["English"]["ShipperInstructions"] = "";
	$placeHolderstbl_orders["English"]["ShipperInstructions"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneeInstructions"] = "Notes/Instructions";
	$fieldToolTipstbl_orders["English"]["ConsigneeInstructions"] = "";
	$placeHolderstbl_orders["English"]["ConsigneeInstructions"] = "";
	$fieldLabelstbl_orders["English"]["ShipperHoursOpen"] = "Open";
	$fieldToolTipstbl_orders["English"]["ShipperHoursOpen"] = "";
	$placeHolderstbl_orders["English"]["ShipperHoursOpen"] = "";
	$fieldLabelstbl_orders["English"]["ShipperHoursClose"] = "Close";
	$fieldToolTipstbl_orders["English"]["ShipperHoursClose"] = "";
	$placeHolderstbl_orders["English"]["ShipperHoursClose"] = "";
	$fieldLabelstbl_orders["English"]["ShipperDirections"] = "Directions";
	$fieldToolTipstbl_orders["English"]["ShipperDirections"] = "";
	$placeHolderstbl_orders["English"]["ShipperDirections"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneeHoursOpen"] = "Open";
	$fieldToolTipstbl_orders["English"]["ConsigneeHoursOpen"] = "";
	$placeHolderstbl_orders["English"]["ConsigneeHoursOpen"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneeHoursClose"] = "Close";
	$fieldToolTipstbl_orders["English"]["ConsigneeHoursClose"] = "";
	$placeHolderstbl_orders["English"]["ConsigneeHoursClose"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneeDirections"] = "Directions";
	$fieldToolTipstbl_orders["English"]["ConsigneeDirections"] = "";
	$placeHolderstbl_orders["English"]["ConsigneeDirections"] = "";
	$fieldLabelstbl_orders["English"]["ShipperAddress"] = "Shipper Address";
	$fieldToolTipstbl_orders["English"]["ShipperAddress"] = "";
	$placeHolderstbl_orders["English"]["ShipperAddress"] = "";
	$fieldLabelstbl_orders["English"]["ShipperContactDetails"] = "Shipper Contact Details";
	$fieldToolTipstbl_orders["English"]["ShipperContactDetails"] = "";
	$placeHolderstbl_orders["English"]["ShipperContactDetails"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneeAddress"] = "Consignee Address";
	$fieldToolTipstbl_orders["English"]["ConsigneeAddress"] = "";
	$placeHolderstbl_orders["English"]["ConsigneeAddress"] = "";
	$fieldLabelstbl_orders["English"]["ConsigneeContactDetails"] = "Consignee Contact Details";
	$fieldToolTipstbl_orders["English"]["ConsigneeContactDetails"] = "";
	$placeHolderstbl_orders["English"]["ConsigneeContactDetails"] = "";
	$fieldLabelstbl_orders["English"]["CarrierContactDetails"] = "Carrier Contact Details";
	$fieldToolTipstbl_orders["English"]["CarrierContactDetails"] = "";
	$placeHolderstbl_orders["English"]["CarrierContactDetails"] = "";
	$fieldLabelstbl_orders["English"]["CustomsBrokerContactDetails"] = "Customs Broker Contact Details";
	$fieldToolTipstbl_orders["English"]["CustomsBrokerContactDetails"] = "";
	$placeHolderstbl_orders["English"]["CustomsBrokerContactDetails"] = "";
	$fieldLabelstbl_orders["English"]["BillToAddress"] = "Bill To Address";
	$fieldToolTipstbl_orders["English"]["BillToAddress"] = "";
	$placeHolderstbl_orders["English"]["BillToAddress"] = "";
	$fieldLabelstbl_orders["English"]["BillToContactDetails"] = "Bill To Contact Details";
	$fieldToolTipstbl_orders["English"]["BillToContactDetails"] = "";
	$placeHolderstbl_orders["English"]["BillToContactDetails"] = "";
	if (count($fieldToolTipstbl_orders["English"]))
		$tdatatbl_orders[".isUseToolTips"] = true;
}


	$tdatatbl_orders[".NCSearch"] = true;



$tdatatbl_orders[".shortTableName"] = "tbl_orders";
$tdatatbl_orders[".nSecOptions"] = 0;

$tdatatbl_orders[".mainTableOwnerID"] = "";
$tdatatbl_orders[".entityType"] = 0;
$tdatatbl_orders[".connId"] = "logistics_at_localhost";


$tdatatbl_orders[".strOriginalTableName"] = "tbl_orders";

	



$tdatatbl_orders[".showAddInPopup"] = false;

$tdatatbl_orders[".showEditInPopup"] = false;

$tdatatbl_orders[".showViewInPopup"] = false;

$tdatatbl_orders[".listAjax"] = false;
//	temporary
//$tdatatbl_orders[".listAjax"] = false;

	$tdatatbl_orders[".audit"] = true;

	$tdatatbl_orders[".locking"] = false;


$pages = $tdatatbl_orders[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_orders[".edit"] = true;
	$tdatatbl_orders[".afterEditAction"] = 1;
	$tdatatbl_orders[".closePopupAfterEdit"] = 1;
	$tdatatbl_orders[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_orders[".add"] = true;
$tdatatbl_orders[".afterAddAction"] = 1;
$tdatatbl_orders[".closePopupAfterAdd"] = 1;
$tdatatbl_orders[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_orders[".list"] = true;
}



$tdatatbl_orders[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_orders[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_orders[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_orders[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_orders[".printFriendly"] = true;
}



$tdatatbl_orders[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_orders[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_orders[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_orders[".isUseAjaxSuggest"] = true;

$tdatatbl_orders[".rowHighlite"] = true;



																					

$tdatatbl_orders[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_orders[".buttonsAdded"] = false;

$tdatatbl_orders[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatbl_orders[".isUseTimeForSearch"] = false;


$tdatatbl_orders[".badgeColor"] = "5F9EA0";


$tdatatbl_orders[".allSearchFields"] = array();
$tdatatbl_orders[".filterFields"] = array();
$tdatatbl_orders[".requiredSearchFields"] = array();

$tdatatbl_orders[".googleLikeFields"] = array();
$tdatatbl_orders[".googleLikeFields"][] = "ID";
$tdatatbl_orders[".googleLikeFields"][] = "companyID";
$tdatatbl_orders[".googleLikeFields"][] = "OrderStatusID";
$tdatatbl_orders[".googleLikeFields"][] = "Inbound";
$tdatatbl_orders[".googleLikeFields"][] = "PONumber";
$tdatatbl_orders[".googleLikeFields"][] = "BOLNumber";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperID";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperReferenceNo";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperName";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperAddress";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperAddress1";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperAddress2";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperCity";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperProvinceID";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperCountryID";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperCountyName";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperPostal";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperLongitude";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperLatitude";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperContactID";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperContactDetails";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperContactName";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperContactTel";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperContactFax";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperContactEmail";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperHoursOpen";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperHoursClose";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperInstructions";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperDirections";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneeID";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneeReferenceNo";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneeName";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneeAddress";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneeAddress1";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneeAddress2";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneeCity";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneeProvinceID";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneeCountryID";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneeCountyName";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneePostal";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneeLongitude";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneeLatitude";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneeContactID";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneeContactDetails";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneeContactName";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneeContactTel";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneeContactFax";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneeContactEmail";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneeHoursOpen";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneeHoursClose";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneeInstructions";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneeDirections";
$tdatatbl_orders[".googleLikeFields"][] = "CarrierID";
$tdatatbl_orders[".googleLikeFields"][] = "CarrierReferenceNo";
$tdatatbl_orders[".googleLikeFields"][] = "CarrierName";
$tdatatbl_orders[".googleLikeFields"][] = "CarrierContactID";
$tdatatbl_orders[".googleLikeFields"][] = "CarrierContactDetails";
$tdatatbl_orders[".googleLikeFields"][] = "CarrierContactName";
$tdatatbl_orders[".googleLikeFields"][] = "CarrierContactTel";
$tdatatbl_orders[".googleLikeFields"][] = "CarrierContactFax";
$tdatatbl_orders[".googleLikeFields"][] = "CarrierContactEmail";
$tdatatbl_orders[".googleLikeFields"][] = "CarrierDriver";
$tdatatbl_orders[".googleLikeFields"][] = "CustomsBrokerID";
$tdatatbl_orders[".googleLikeFields"][] = "CustomsBrokerName";
$tdatatbl_orders[".googleLikeFields"][] = "CustomsContactID";
$tdatatbl_orders[".googleLikeFields"][] = "CustomsBrokerContactDetails";
$tdatatbl_orders[".googleLikeFields"][] = "CustomsBrokerContactName";
$tdatatbl_orders[".googleLikeFields"][] = "CustomsBrokerContactTel";
$tdatatbl_orders[".googleLikeFields"][] = "CustomsBrokerContactFax";
$tdatatbl_orders[".googleLikeFields"][] = "CustomsBrokerContactEmail";
$tdatatbl_orders[".googleLikeFields"][] = "PickupDateExpected";
$tdatatbl_orders[".googleLikeFields"][] = "PickupDateActual";
$tdatatbl_orders[".googleLikeFields"][] = "DeliveryDateExpected";
$tdatatbl_orders[".googleLikeFields"][] = "DeliveryDateActual";
$tdatatbl_orders[".googleLikeFields"][] = "Delivered";
$tdatatbl_orders[".googleLikeFields"][] = "POD";
$tdatatbl_orders[".googleLikeFields"][] = "PaymentTerms";
$tdatatbl_orders[".googleLikeFields"][] = "EquipmentType";
$tdatatbl_orders[".googleLikeFields"][] = "Routing";
$tdatatbl_orders[".googleLikeFields"][] = "Instructions";
$tdatatbl_orders[".googleLikeFields"][] = "Price";
$tdatatbl_orders[".googleLikeFields"][] = "Invoiced";
$tdatatbl_orders[".googleLikeFields"][] = "InvoiceID";
$tdatatbl_orders[".googleLikeFields"][] = "Paid";
$tdatatbl_orders[".googleLikeFields"][] = "Cost";
$tdatatbl_orders[".googleLikeFields"][] = "Created";
$tdatatbl_orders[".googleLikeFields"][] = "OrderNumber";
$tdatatbl_orders[".googleLikeFields"][] = "BillToPartyID";
$tdatatbl_orders[".googleLikeFields"][] = "BillToPartyReferenceNo";
$tdatatbl_orders[".googleLikeFields"][] = "BillToPartyName";
$tdatatbl_orders[".googleLikeFields"][] = "BillToAddress";
$tdatatbl_orders[".googleLikeFields"][] = "BillToPartyAddress1";
$tdatatbl_orders[".googleLikeFields"][] = "BillToPartyAddress2";
$tdatatbl_orders[".googleLikeFields"][] = "BillToPartyCity";
$tdatatbl_orders[".googleLikeFields"][] = "BillToPartyProvinceID";
$tdatatbl_orders[".googleLikeFields"][] = "BillToPartyCountryID";
$tdatatbl_orders[".googleLikeFields"][] = "BillToPartyPostal";
$tdatatbl_orders[".googleLikeFields"][] = "BillToContactID";
$tdatatbl_orders[".googleLikeFields"][] = "BillToContactDetails";
$tdatatbl_orders[".googleLikeFields"][] = "BillToPartyContactName";
$tdatatbl_orders[".googleLikeFields"][] = "BillToPartyContactTel";
$tdatatbl_orders[".googleLikeFields"][] = "BillToPartyContactFax";
$tdatatbl_orders[".googleLikeFields"][] = "BillToPartyContactEmail";
$tdatatbl_orders[".googleLikeFields"][] = "Terms";
$tdatatbl_orders[".googleLikeFields"][] = "QuotationNumber";
$tdatatbl_orders[".googleLikeFields"][] = "Modified";
$tdatatbl_orders[".googleLikeFields"][] = "ShipperRegionID";
$tdatatbl_orders[".googleLikeFields"][] = "ConsigneeRegionID";
$tdatatbl_orders[".googleLikeFields"][] = "TrailerID";
$tdatatbl_orders[".googleLikeFields"][] = "Status";
$tdatatbl_orders[".googleLikeFields"][] = "NewOrder";
$tdatatbl_orders[".googleLikeFields"][] = "PeriodStartDate";
$tdatatbl_orders[".googleLikeFields"][] = "PeriodEndDate";
$tdatatbl_orders[".googleLikeFields"][] = "Frequency";



$tdatatbl_orders[".tableType"] = "list";

$tdatatbl_orders[".printerPageOrientation"] = 0;
$tdatatbl_orders[".nPrinterPageScale"] = 100;

$tdatatbl_orders[".nPrinterSplitRecords"] = 40;

$tdatatbl_orders[".geocodingEnabled"] = false;










$tdatatbl_orders[".pageSize"] = 20;

$tdatatbl_orders[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_orders[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_orders[".orderindexes"] = array();


$tdatatbl_orders[".sqlHead"] = "SELECT ID,  	companyID,  	OrderStatusID,  	Inbound,  	PONumber,  	BOLNumber,  	ShipperID,  	ShipperReferenceNo,  	ShipperName,  	ShipperAddress,  	ShipperAddress1,  	ShipperAddress2,  	ShipperCity,  	ShipperProvinceID,  	ShipperCountryID,  	ShipperCountyName,  	ShipperPostal,  	ShipperLongitude,  	ShipperLatitude,  	ShipperContactID,  	ShipperContactDetails,  	ShipperContactName,  	ShipperContactTel,  	ShipperContactFax,  	ShipperContactEmail,  	ShipperHoursOpen,  	ShipperHoursClose,  	ShipperInstructions,  	ShipperDirections,  	ConsigneeID,  	ConsigneeReferenceNo,  	ConsigneeName,  	ConsigneeAddress,  	ConsigneeAddress1,  	ConsigneeAddress2,  	ConsigneeCity,  	ConsigneeProvinceID,  	ConsigneeCountryID,  	ConsigneeCountyName,  	ConsigneePostal,  	ConsigneeLongitude,  	ConsigneeLatitude,  	ConsigneeContactID,  	ConsigneeContactDetails,  	ConsigneeContactName,  	ConsigneeContactTel,  	ConsigneeContactFax,  	ConsigneeContactEmail,  	ConsigneeHoursOpen,  	ConsigneeHoursClose,  	ConsigneeInstructions,  	ConsigneeDirections,  	CarrierID,  	CarrierReferenceNo,  	CarrierName,  	CarrierContactID,  	CarrierContactDetails,  	CarrierContactName,  	CarrierContactTel,  	CarrierContactFax,  	CarrierContactEmail,  	CarrierDriver,  	CustomsBrokerID,  	CustomsBrokerName,  	CustomsContactID,  	CustomsBrokerContactDetails,  	CustomsBrokerContactName,  	CustomsBrokerContactTel,  	CustomsBrokerContactFax,  	CustomsBrokerContactEmail,  	PickupDateExpected,  	PickupDateActual,  	DeliveryDateExpected,  	DeliveryDateActual,  	Delivered,  	POD,  	PaymentTerms,  	EquipmentType,  	Routing,  	Instructions,  	Price,  	Invoiced,  	InvoiceID,  	Paid,  	Cost,  	Created,  	OrderNumber,  	BillToPartyID,  	BillToPartyReferenceNo,  	BillToPartyName,  	BillToAddress,  	BillToPartyAddress1,  	BillToPartyAddress2,  	BillToPartyCity,  	BillToPartyProvinceID,  	BillToPartyCountryID,  	BillToPartyPostal,  	BillToContactID,  	BillToContactDetails,  	BillToPartyContactName,  	BillToPartyContactTel,  	BillToPartyContactFax,  	BillToPartyContactEmail,  	Terms,  	QuotationNumber,  	Modified,  	ShipperRegionID,  	ConsigneeRegionID,  	TrailerID,  	Status,  	NewOrder,  	PeriodStartDate,  	PeriodEndDate,  	Frequency";
$tdatatbl_orders[".sqlFrom"] = "FROM tbl_orders";
$tdatatbl_orders[".sqlWhereExpr"] = "";
$tdatatbl_orders[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_orders[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_orders[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_orders[".highlightSearchResults"] = true;

$tableKeystbl_orders = array();
$tableKeystbl_orders[] = "ID";
$tdatatbl_orders[".Keys"] = $tableKeystbl_orders;


$tdatatbl_orders[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ID");
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


	$tdatatbl_orders["ID"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ID";
//	companyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "companyID";
	$fdata["GoodName"] = "companyID";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","companyID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "companyID";

	
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatbl_orders["companyID"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "companyID";
//	OrderStatusID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "OrderStatusID";
	$fdata["GoodName"] = "OrderStatusID";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","OrderStatusID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "OrderStatusID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OrderStatusID";

	
	
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


	$tdatatbl_orders["OrderStatusID"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "OrderStatusID";
//	Inbound
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Inbound";
	$fdata["GoodName"] = "Inbound";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","Inbound");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "Inbound";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Inbound";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
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


	$tdatatbl_orders["Inbound"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "Inbound";
//	PONumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PONumber";
	$fdata["GoodName"] = "PONumber";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","PONumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PONumber";

	
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


	$tdatatbl_orders["PONumber"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "PONumber";
//	BOLNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "BOLNumber";
	$fdata["GoodName"] = "BOLNumber";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","BOLNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BOLNumber";

	
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


	$tdatatbl_orders["BOLNumber"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "BOLNumber";
//	ShipperID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ShipperID";
	$fdata["GoodName"] = "ShipperID";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ShipperID";

	
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "address";

	

	
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


	$tdatatbl_orders["ShipperID"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperID";
//	ShipperReferenceNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ShipperReferenceNo";
	$fdata["GoodName"] = "ShipperReferenceNo";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperReferenceNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperReferenceNo";

	
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


	$tdatatbl_orders["ShipperReferenceNo"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperReferenceNo";
//	ShipperName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ShipperName";
	$fdata["GoodName"] = "ShipperName";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperName";

	
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


	$tdatatbl_orders["ShipperName"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperName";
//	ShipperAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ShipperAddress";
	$fdata["GoodName"] = "ShipperAddress";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperAddress");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperAddress";

		$fdata["sourceSingle"] = "ShipperAddress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperAddress";

	
	
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


	$tdatatbl_orders["ShipperAddress"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperAddress";
//	ShipperAddress1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ShipperAddress1";
	$fdata["GoodName"] = "ShipperAddress1";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperAddress1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperAddress1";

	
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


	$tdatatbl_orders["ShipperAddress1"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperAddress1";
//	ShipperAddress2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ShipperAddress2";
	$fdata["GoodName"] = "ShipperAddress2";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperAddress2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperAddress2";

	
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


	$tdatatbl_orders["ShipperAddress2"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperAddress2";
//	ShipperCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ShipperCity";
	$fdata["GoodName"] = "ShipperCity";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperCity");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperCity";

	
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


	$tdatatbl_orders["ShipperCity"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperCity";
//	ShipperProvinceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ShipperProvinceID";
	$fdata["GoodName"] = "ShipperProvinceID";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperProvinceID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ShipperProvinceID";

	
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


	$tdatatbl_orders["ShipperProvinceID"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperProvinceID";
//	ShipperCountryID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ShipperCountryID";
	$fdata["GoodName"] = "ShipperCountryID";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperCountryID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ShipperCountryID";

	
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


	$tdatatbl_orders["ShipperCountryID"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperCountryID";
//	ShipperCountyName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ShipperCountyName";
	$fdata["GoodName"] = "ShipperCountyName";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperCountyName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperCountyName";

	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatatbl_orders["ShipperCountyName"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperCountyName";
//	ShipperPostal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "ShipperPostal";
	$fdata["GoodName"] = "ShipperPostal";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperPostal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperPostal";

	
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


	$tdatatbl_orders["ShipperPostal"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperPostal";
//	ShipperLongitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "ShipperLongitude";
	$fdata["GoodName"] = "ShipperLongitude";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperLongitude");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "ShipperLongitude";

	
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


	$tdatatbl_orders["ShipperLongitude"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperLongitude";
//	ShipperLatitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "ShipperLatitude";
	$fdata["GoodName"] = "ShipperLatitude";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperLatitude");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "ShipperLatitude";

	
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


	$tdatatbl_orders["ShipperLatitude"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperLatitude";
//	ShipperContactID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "ShipperContactID";
	$fdata["GoodName"] = "ShipperContactID";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperContactID");
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


	$tdatatbl_orders["ShipperContactID"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperContactID";
//	ShipperContactDetails
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "ShipperContactDetails";
	$fdata["GoodName"] = "ShipperContactDetails";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperContactDetails");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperContactDetails";

		$fdata["sourceSingle"] = "ShipperContactDetails";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperContactDetails";

	
	
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


	$tdatatbl_orders["ShipperContactDetails"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperContactDetails";
//	ShipperContactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "ShipperContactName";
	$fdata["GoodName"] = "ShipperContactName";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperContactName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperContactName";

	
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


	$tdatatbl_orders["ShipperContactName"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperContactName";
//	ShipperContactTel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "ShipperContactTel";
	$fdata["GoodName"] = "ShipperContactTel";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperContactTel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperContactTel";

	
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


	$tdatatbl_orders["ShipperContactTel"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperContactTel";
//	ShipperContactFax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "ShipperContactFax";
	$fdata["GoodName"] = "ShipperContactFax";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperContactFax");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperContactFax";

	
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


	$tdatatbl_orders["ShipperContactFax"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperContactFax";
//	ShipperContactEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "ShipperContactEmail";
	$fdata["GoodName"] = "ShipperContactEmail";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperContactEmail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ShipperContactEmail";

	
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


	$tdatatbl_orders["ShipperContactEmail"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperContactEmail";
//	ShipperHoursOpen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "ShipperHoursOpen";
	$fdata["GoodName"] = "ShipperHoursOpen";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperHoursOpen");
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


	$tdatatbl_orders["ShipperHoursOpen"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperHoursOpen";
//	ShipperHoursClose
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "ShipperHoursClose";
	$fdata["GoodName"] = "ShipperHoursClose";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperHoursClose");
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


	$tdatatbl_orders["ShipperHoursClose"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperHoursClose";
//	ShipperInstructions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "ShipperInstructions";
	$fdata["GoodName"] = "ShipperInstructions";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperInstructions");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "ShipperInstructions";

		$fdata["sourceSingle"] = "ShipperInstructions";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperInstructions";

	
	
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


	$tdatatbl_orders["ShipperInstructions"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperInstructions";
//	ShipperDirections
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "ShipperDirections";
	$fdata["GoodName"] = "ShipperDirections";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperDirections");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "ShipperDirections";

		$fdata["sourceSingle"] = "ShipperDirections";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperDirections";

	
	
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


	$tdatatbl_orders["ShipperDirections"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperDirections";
//	ConsigneeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "ConsigneeID";
	$fdata["GoodName"] = "ConsigneeID";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneeID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ConsigneeID";

	
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
	$edata["LookupTable"] = "vw_company_addressbook";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"ConsigneeAddress1", 'lookupF'=>"Address1");
	$edata["autoCompleteFields"][] = array('masterF'=>"ConsigneeCity", 'lookupF'=>"City");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "AddressID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Address1";

	

	
	$edata["LookupOrderBy"] = "Address1";

	
	
	
	

	
	
	
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


	$tdatatbl_orders["ConsigneeID"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneeID";
//	ConsigneeReferenceNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "ConsigneeReferenceNo";
	$fdata["GoodName"] = "ConsigneeReferenceNo";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneeReferenceNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeReferenceNo";

	
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


	$tdatatbl_orders["ConsigneeReferenceNo"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneeReferenceNo";
//	ConsigneeName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "ConsigneeName";
	$fdata["GoodName"] = "ConsigneeName";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneeName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeName";

	
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


	$tdatatbl_orders["ConsigneeName"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneeName";
//	ConsigneeAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "ConsigneeAddress";
	$fdata["GoodName"] = "ConsigneeAddress";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneeAddress");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeAddress";

		$fdata["sourceSingle"] = "ConsigneeAddress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeAddress";

	
	
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


	$tdatatbl_orders["ConsigneeAddress"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneeAddress";
//	ConsigneeAddress1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "ConsigneeAddress1";
	$fdata["GoodName"] = "ConsigneeAddress1";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneeAddress1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeAddress1";

	
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


	$tdatatbl_orders["ConsigneeAddress1"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneeAddress1";
//	ConsigneeAddress2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "ConsigneeAddress2";
	$fdata["GoodName"] = "ConsigneeAddress2";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneeAddress2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeAddress2";

	
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


	$tdatatbl_orders["ConsigneeAddress2"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneeAddress2";
//	ConsigneeCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "ConsigneeCity";
	$fdata["GoodName"] = "ConsigneeCity";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneeCity");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeCity";

	
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


	$tdatatbl_orders["ConsigneeCity"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneeCity";
//	ConsigneeProvinceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "ConsigneeProvinceID";
	$fdata["GoodName"] = "ConsigneeProvinceID";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneeProvinceID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ConsigneeProvinceID";

	
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


	$tdatatbl_orders["ConsigneeProvinceID"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneeProvinceID";
//	ConsigneeCountryID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "ConsigneeCountryID";
	$fdata["GoodName"] = "ConsigneeCountryID";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneeCountryID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ConsigneeCountryID";

	
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


	$tdatatbl_orders["ConsigneeCountryID"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneeCountryID";
//	ConsigneeCountyName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "ConsigneeCountyName";
	$fdata["GoodName"] = "ConsigneeCountyName";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneeCountyName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeCountyName";

	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatatbl_orders["ConsigneeCountyName"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneeCountyName";
//	ConsigneePostal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "ConsigneePostal";
	$fdata["GoodName"] = "ConsigneePostal";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneePostal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneePostal";

	
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


	$tdatatbl_orders["ConsigneePostal"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneePostal";
//	ConsigneeLongitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "ConsigneeLongitude";
	$fdata["GoodName"] = "ConsigneeLongitude";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneeLongitude");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "ConsigneeLongitude";

	
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


	$tdatatbl_orders["ConsigneeLongitude"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneeLongitude";
//	ConsigneeLatitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "ConsigneeLatitude";
	$fdata["GoodName"] = "ConsigneeLatitude";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneeLatitude");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "ConsigneeLatitude";

	
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


	$tdatatbl_orders["ConsigneeLatitude"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneeLatitude";
//	ConsigneeContactID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "ConsigneeContactID";
	$fdata["GoodName"] = "ConsigneeContactID";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneeContactID");
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


	$tdatatbl_orders["ConsigneeContactID"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneeContactID";
//	ConsigneeContactDetails
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "ConsigneeContactDetails";
	$fdata["GoodName"] = "ConsigneeContactDetails";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneeContactDetails");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeContactDetails";

		$fdata["sourceSingle"] = "ConsigneeContactDetails";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeContactDetails";

	
	
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


	$tdatatbl_orders["ConsigneeContactDetails"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneeContactDetails";
//	ConsigneeContactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "ConsigneeContactName";
	$fdata["GoodName"] = "ConsigneeContactName";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneeContactName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeContactName";

	
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


	$tdatatbl_orders["ConsigneeContactName"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneeContactName";
//	ConsigneeContactTel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "ConsigneeContactTel";
	$fdata["GoodName"] = "ConsigneeContactTel";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneeContactTel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeContactTel";

	
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


	$tdatatbl_orders["ConsigneeContactTel"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneeContactTel";
//	ConsigneeContactFax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "ConsigneeContactFax";
	$fdata["GoodName"] = "ConsigneeContactFax";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneeContactFax");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeContactFax";

	
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


	$tdatatbl_orders["ConsigneeContactFax"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneeContactFax";
//	ConsigneeContactEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "ConsigneeContactEmail";
	$fdata["GoodName"] = "ConsigneeContactEmail";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneeContactEmail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConsigneeContactEmail";

	
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


	$tdatatbl_orders["ConsigneeContactEmail"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneeContactEmail";
//	ConsigneeHoursOpen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "ConsigneeHoursOpen";
	$fdata["GoodName"] = "ConsigneeHoursOpen";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneeHoursOpen");
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


	$tdatatbl_orders["ConsigneeHoursOpen"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneeHoursOpen";
//	ConsigneeHoursClose
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "ConsigneeHoursClose";
	$fdata["GoodName"] = "ConsigneeHoursClose";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneeHoursClose");
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


	$tdatatbl_orders["ConsigneeHoursClose"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneeHoursClose";
//	ConsigneeInstructions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "ConsigneeInstructions";
	$fdata["GoodName"] = "ConsigneeInstructions";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneeInstructions");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "ConsigneeInstructions";

		$fdata["sourceSingle"] = "ConsigneeInstructions";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeInstructions";

	
	
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


	$tdatatbl_orders["ConsigneeInstructions"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneeInstructions";
//	ConsigneeDirections
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "ConsigneeDirections";
	$fdata["GoodName"] = "ConsigneeDirections";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneeDirections");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "ConsigneeDirections";

		$fdata["sourceSingle"] = "ConsigneeDirections";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeDirections";

	
	
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


	$tdatatbl_orders["ConsigneeDirections"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneeDirections";
//	CarrierID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "CarrierID";
	$fdata["GoodName"] = "CarrierID";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","CarrierID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CarrierID";

	
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	

	
	$edata["LookupOrderBy"] = "Name";

	
	
	
	

	
	
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


	$tdatatbl_orders["CarrierID"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "CarrierID";
//	CarrierReferenceNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "CarrierReferenceNo";
	$fdata["GoodName"] = "CarrierReferenceNo";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","CarrierReferenceNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierReferenceNo";

	
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


	$tdatatbl_orders["CarrierReferenceNo"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "CarrierReferenceNo";
//	CarrierName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "CarrierName";
	$fdata["GoodName"] = "CarrierName";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","CarrierName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierName";

	
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


	$tdatatbl_orders["CarrierName"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "CarrierName";
//	CarrierContactID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "CarrierContactID";
	$fdata["GoodName"] = "CarrierContactID";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","CarrierContactID");
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


	$tdatatbl_orders["CarrierContactID"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "CarrierContactID";
//	CarrierContactDetails
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "CarrierContactDetails";
	$fdata["GoodName"] = "CarrierContactDetails";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","CarrierContactDetails");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierContactDetails";

		$fdata["sourceSingle"] = "CarrierContactDetails";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CarrierContactDetails";

	
	
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


	$tdatatbl_orders["CarrierContactDetails"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "CarrierContactDetails";
//	CarrierContactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "CarrierContactName";
	$fdata["GoodName"] = "CarrierContactName";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","CarrierContactName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierContactName";

	
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


	$tdatatbl_orders["CarrierContactName"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "CarrierContactName";
//	CarrierContactTel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "CarrierContactTel";
	$fdata["GoodName"] = "CarrierContactTel";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","CarrierContactTel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierContactTel";

	
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


	$tdatatbl_orders["CarrierContactTel"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "CarrierContactTel";
//	CarrierContactFax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "CarrierContactFax";
	$fdata["GoodName"] = "CarrierContactFax";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","CarrierContactFax");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierContactFax";

	
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


	$tdatatbl_orders["CarrierContactFax"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "CarrierContactFax";
//	CarrierContactEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "CarrierContactEmail";
	$fdata["GoodName"] = "CarrierContactEmail";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","CarrierContactEmail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierContactEmail";

	
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


	$tdatatbl_orders["CarrierContactEmail"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "CarrierContactEmail";
//	CarrierDriver
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "CarrierDriver";
	$fdata["GoodName"] = "CarrierDriver";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","CarrierDriver");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CarrierDriver";

	
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


	$tdatatbl_orders["CarrierDriver"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "CarrierDriver";
//	CustomsBrokerID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "CustomsBrokerID";
	$fdata["GoodName"] = "CustomsBrokerID";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","CustomsBrokerID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CustomsBrokerID";

	
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	

	
	$edata["LookupOrderBy"] = "Name";

	
	
	
	

	
	
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


	$tdatatbl_orders["CustomsBrokerID"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "CustomsBrokerID";
//	CustomsBrokerName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "CustomsBrokerName";
	$fdata["GoodName"] = "CustomsBrokerName";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","CustomsBrokerName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CustomsBrokerName";

	
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


	$tdatatbl_orders["CustomsBrokerName"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "CustomsBrokerName";
//	CustomsContactID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "CustomsContactID";
	$fdata["GoodName"] = "CustomsContactID";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","CustomsContactID");
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


	$tdatatbl_orders["CustomsContactID"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "CustomsContactID";
//	CustomsBrokerContactDetails
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "CustomsBrokerContactDetails";
	$fdata["GoodName"] = "CustomsBrokerContactDetails";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","CustomsBrokerContactDetails");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CustomsBrokerContactDetails";

		$fdata["sourceSingle"] = "CustomsBrokerContactDetails";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CustomsBrokerContactDetails";

	
	
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


	$tdatatbl_orders["CustomsBrokerContactDetails"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "CustomsBrokerContactDetails";
//	CustomsBrokerContactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "CustomsBrokerContactName";
	$fdata["GoodName"] = "CustomsBrokerContactName";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","CustomsBrokerContactName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CustomsBrokerContactName";

	
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


	$tdatatbl_orders["CustomsBrokerContactName"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "CustomsBrokerContactName";
//	CustomsBrokerContactTel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "CustomsBrokerContactTel";
	$fdata["GoodName"] = "CustomsBrokerContactTel";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","CustomsBrokerContactTel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CustomsBrokerContactTel";

	
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


	$tdatatbl_orders["CustomsBrokerContactTel"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "CustomsBrokerContactTel";
//	CustomsBrokerContactFax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "CustomsBrokerContactFax";
	$fdata["GoodName"] = "CustomsBrokerContactFax";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","CustomsBrokerContactFax");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CustomsBrokerContactFax";

	
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


	$tdatatbl_orders["CustomsBrokerContactFax"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "CustomsBrokerContactFax";
//	CustomsBrokerContactEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "CustomsBrokerContactEmail";
	$fdata["GoodName"] = "CustomsBrokerContactEmail";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","CustomsBrokerContactEmail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CustomsBrokerContactEmail";

	
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


	$tdatatbl_orders["CustomsBrokerContactEmail"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "CustomsBrokerContactEmail";
//	PickupDateExpected
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "PickupDateExpected";
	$fdata["GoodName"] = "PickupDateExpected";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","PickupDateExpected");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "PickupDateExpected";

	
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


	$tdatatbl_orders["PickupDateExpected"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "PickupDateExpected";
//	PickupDateActual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "PickupDateActual";
	$fdata["GoodName"] = "PickupDateActual";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","PickupDateActual");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "PickupDateActual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PickupDateActual";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatatbl_orders["PickupDateActual"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "PickupDateActual";
//	DeliveryDateExpected
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "DeliveryDateExpected";
	$fdata["GoodName"] = "DeliveryDateExpected";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","DeliveryDateExpected");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "DeliveryDateExpected";

	
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


	$tdatatbl_orders["DeliveryDateExpected"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "DeliveryDateExpected";
//	DeliveryDateActual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "DeliveryDateActual";
	$fdata["GoodName"] = "DeliveryDateActual";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","DeliveryDateActual");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "DeliveryDateActual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DeliveryDateActual";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatatbl_orders["DeliveryDateActual"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "DeliveryDateActual";
//	Delivered
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "Delivered";
	$fdata["GoodName"] = "Delivered";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","Delivered");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "Delivered";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Delivered";

	
	
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


	$tdatatbl_orders["Delivered"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "Delivered";
//	POD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "POD";
	$fdata["GoodName"] = "POD";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","POD");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "POD";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "POD";

	
	
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


	$tdatatbl_orders["POD"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "POD";
//	PaymentTerms
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "PaymentTerms";
	$fdata["GoodName"] = "PaymentTerms";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","PaymentTerms");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "PaymentTerms";

	
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


	$tdatatbl_orders["PaymentTerms"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "PaymentTerms";
//	EquipmentType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "EquipmentType";
	$fdata["GoodName"] = "EquipmentType";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","EquipmentType");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "EquipmentType";

	
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


	$tdatatbl_orders["EquipmentType"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "EquipmentType";
//	Routing
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "Routing";
	$fdata["GoodName"] = "Routing";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","Routing");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Routing";

	
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


	$tdatatbl_orders["Routing"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "Routing";
//	Instructions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "Instructions";
	$fdata["GoodName"] = "Instructions";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","Instructions");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Instructions";

	
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


	$tdatatbl_orders["Instructions"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "Instructions";
//	Price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "Price";
	$fdata["GoodName"] = "Price";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","Price");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Price";

	
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


	$tdatatbl_orders["Price"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "Price";
//	Invoiced
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "Invoiced";
	$fdata["GoodName"] = "Invoiced";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","Invoiced");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "Invoiced";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Invoiced";

	
	
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


	$tdatatbl_orders["Invoiced"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "Invoiced";
//	InvoiceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "InvoiceID";
	$fdata["GoodName"] = "InvoiceID";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","InvoiceID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "InvoiceID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InvoiceID";

	
	
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


	$tdatatbl_orders["InvoiceID"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "InvoiceID";
//	Paid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "Paid";
	$fdata["GoodName"] = "Paid";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","Paid");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "Paid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Paid";

	
	
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


	$tdatatbl_orders["Paid"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "Paid";
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","Cost");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Cost";

	
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


	$tdatatbl_orders["Cost"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "Cost";
//	Created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "Created";
	$fdata["GoodName"] = "Created";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","Created");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Created";

	
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


	$tdatatbl_orders["Created"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "Created";
//	OrderNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "OrderNumber";
	$fdata["GoodName"] = "OrderNumber";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","OrderNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "OrderNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OrderNumber";

	
	
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


	$tdatatbl_orders["OrderNumber"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "OrderNumber";
//	BillToPartyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "BillToPartyID";
	$fdata["GoodName"] = "BillToPartyID";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","BillToPartyID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "BillToPartyID";

	
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
	$edata["LookupTable"] = "tbl_company";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatatbl_orders["BillToPartyID"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "BillToPartyID";
//	BillToPartyReferenceNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "BillToPartyReferenceNo";
	$fdata["GoodName"] = "BillToPartyReferenceNo";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","BillToPartyReferenceNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillToPartyReferenceNo";

	
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


	$tdatatbl_orders["BillToPartyReferenceNo"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "BillToPartyReferenceNo";
//	BillToPartyName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "BillToPartyName";
	$fdata["GoodName"] = "BillToPartyName";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","BillToPartyName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillToPartyName";

	
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


	$tdatatbl_orders["BillToPartyName"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "BillToPartyName";
//	BillToAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "BillToAddress";
	$fdata["GoodName"] = "BillToAddress";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","BillToAddress");
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


	$tdatatbl_orders["BillToAddress"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "BillToAddress";
//	BillToPartyAddress1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "BillToPartyAddress1";
	$fdata["GoodName"] = "BillToPartyAddress1";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","BillToPartyAddress1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillToPartyAddress1";

	
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


	$tdatatbl_orders["BillToPartyAddress1"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "BillToPartyAddress1";
//	BillToPartyAddress2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "BillToPartyAddress2";
	$fdata["GoodName"] = "BillToPartyAddress2";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","BillToPartyAddress2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillToPartyAddress2";

	
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


	$tdatatbl_orders["BillToPartyAddress2"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "BillToPartyAddress2";
//	BillToPartyCity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "BillToPartyCity";
	$fdata["GoodName"] = "BillToPartyCity";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","BillToPartyCity");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillToPartyCity";

	
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


	$tdatatbl_orders["BillToPartyCity"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "BillToPartyCity";
//	BillToPartyProvinceID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "BillToPartyProvinceID";
	$fdata["GoodName"] = "BillToPartyProvinceID";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","BillToPartyProvinceID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "BillToPartyProvinceID";

	
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


	$tdatatbl_orders["BillToPartyProvinceID"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "BillToPartyProvinceID";
//	BillToPartyCountryID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 96;
	$fdata["strName"] = "BillToPartyCountryID";
	$fdata["GoodName"] = "BillToPartyCountryID";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","BillToPartyCountryID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "BillToPartyCountryID";

	
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


	$tdatatbl_orders["BillToPartyCountryID"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "BillToPartyCountryID";
//	BillToPartyPostal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 97;
	$fdata["strName"] = "BillToPartyPostal";
	$fdata["GoodName"] = "BillToPartyPostal";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","BillToPartyPostal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillToPartyPostal";

	
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


	$tdatatbl_orders["BillToPartyPostal"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "BillToPartyPostal";
//	BillToContactID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 98;
	$fdata["strName"] = "BillToContactID";
	$fdata["GoodName"] = "BillToContactID";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","BillToContactID");
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


	$tdatatbl_orders["BillToContactID"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "BillToContactID";
//	BillToContactDetails
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 99;
	$fdata["strName"] = "BillToContactDetails";
	$fdata["GoodName"] = "BillToContactDetails";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","BillToContactDetails");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillToContactDetails";

		$fdata["sourceSingle"] = "BillToContactDetails";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BillToContactDetails";

	
	
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


	$tdatatbl_orders["BillToContactDetails"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "BillToContactDetails";
//	BillToPartyContactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "BillToPartyContactName";
	$fdata["GoodName"] = "BillToPartyContactName";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","BillToPartyContactName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillToPartyContactName";

	
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


	$tdatatbl_orders["BillToPartyContactName"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "BillToPartyContactName";
//	BillToPartyContactTel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 101;
	$fdata["strName"] = "BillToPartyContactTel";
	$fdata["GoodName"] = "BillToPartyContactTel";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","BillToPartyContactTel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillToPartyContactTel";

	
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


	$tdatatbl_orders["BillToPartyContactTel"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "BillToPartyContactTel";
//	BillToPartyContactFax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 102;
	$fdata["strName"] = "BillToPartyContactFax";
	$fdata["GoodName"] = "BillToPartyContactFax";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","BillToPartyContactFax");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillToPartyContactFax";

	
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


	$tdatatbl_orders["BillToPartyContactFax"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "BillToPartyContactFax";
//	BillToPartyContactEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 103;
	$fdata["strName"] = "BillToPartyContactEmail";
	$fdata["GoodName"] = "BillToPartyContactEmail";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","BillToPartyContactEmail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillToPartyContactEmail";

	
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


	$tdatatbl_orders["BillToPartyContactEmail"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "BillToPartyContactEmail";
//	Terms
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 104;
	$fdata["strName"] = "Terms";
	$fdata["GoodName"] = "Terms";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","Terms");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "Terms";

	
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


	$tdatatbl_orders["Terms"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "Terms";
//	QuotationNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 105;
	$fdata["strName"] = "QuotationNumber";
	$fdata["GoodName"] = "QuotationNumber";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","QuotationNumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "QuotationNumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "QuotationNumber";

	
	
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
			$edata["EditParams"].= " maxlength=6";

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


	$tdatatbl_orders["QuotationNumber"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "QuotationNumber";
//	Modified
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 106;
	$fdata["strName"] = "Modified";
	$fdata["GoodName"] = "Modified";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","Modified");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Modified";

	
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


	$tdatatbl_orders["Modified"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "Modified";
//	ShipperRegionID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 107;
	$fdata["strName"] = "ShipperRegionID";
	$fdata["GoodName"] = "ShipperRegionID";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ShipperRegionID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ShipperRegionID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ShipperRegionID";

	
	
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


	$tdatatbl_orders["ShipperRegionID"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ShipperRegionID";
//	ConsigneeRegionID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 108;
	$fdata["strName"] = "ConsigneeRegionID";
	$fdata["GoodName"] = "ConsigneeRegionID";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","ConsigneeRegionID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ConsigneeRegionID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConsigneeRegionID";

	
	
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


	$tdatatbl_orders["ConsigneeRegionID"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "ConsigneeRegionID";
//	TrailerID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 109;
	$fdata["strName"] = "TrailerID";
	$fdata["GoodName"] = "TrailerID";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","TrailerID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TrailerID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TrailerID";

	
	
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
			$edata["EditParams"].= " maxlength=11";

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


	$tdatatbl_orders["TrailerID"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "TrailerID";
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 110;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","Status");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status";

	
	
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


	$tdatatbl_orders["Status"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "Status";
//	NewOrder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 111;
	$fdata["strName"] = "NewOrder";
	$fdata["GoodName"] = "NewOrder";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","NewOrder");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "NewOrder";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NewOrder";

	
	
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


	$tdatatbl_orders["NewOrder"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "NewOrder";
//	PeriodStartDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 112;
	$fdata["strName"] = "PeriodStartDate";
	$fdata["GoodName"] = "PeriodStartDate";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","PeriodStartDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "PeriodStartDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PeriodStartDate";

	
	
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


	$tdatatbl_orders["PeriodStartDate"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "PeriodStartDate";
//	PeriodEndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 113;
	$fdata["strName"] = "PeriodEndDate";
	$fdata["GoodName"] = "PeriodEndDate";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","PeriodEndDate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "PeriodEndDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PeriodEndDate";

	
	
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


	$tdatatbl_orders["PeriodEndDate"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "PeriodEndDate";
//	Frequency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 114;
	$fdata["strName"] = "Frequency";
	$fdata["GoodName"] = "Frequency";
	$fdata["ownerTable"] = "tbl_orders";
	$fdata["Label"] = GetFieldLabel("tbl_orders","Frequency");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "Frequency";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Frequency";

	
	
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


	$tdatatbl_orders["Frequency"] = $fdata;
		$tdatatbl_orders[".searchableFields"][] = "Frequency";


$tables_data["tbl_orders"]=&$tdatatbl_orders;
$field_labels["tbl_orders"] = &$fieldLabelstbl_orders;
$fieldToolTips["tbl_orders"] = &$fieldToolTipstbl_orders;
$placeHolders["tbl_orders"] = &$placeHolderstbl_orders;
$page_titles["tbl_orders"] = &$pageTitlestbl_orders;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_orders"] = array();
//	tbl_order_status
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_order_status";
		$detailsParam["dOriginalTable"] = "tbl_order_status";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_order_status";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_order_status");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_orders"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_orders"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_orders"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["tbl_orders"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_orders"][$dIndex]["detailKeys"][]="OrderID";
//	tbl_order_items
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_order_items";
		$detailsParam["dOriginalTable"] = "tbl_order_items";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_order_items";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_order_items");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_orders"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_orders"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_orders"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["tbl_orders"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_orders"][$dIndex]["detailKeys"][]="OrderID";
//	tbl_order_assesorial
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_order_assesorial";
		$detailsParam["dOriginalTable"] = "tbl_order_assesorial";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_order_assesorial";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_order_assesorial");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_orders"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_orders"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_orders"][$dIndex]["masterKeys"][]="ID";

				$detailsTablesData["tbl_orders"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_orders"][$dIndex]["detailKeys"][]="OrderID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_orders"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_orders()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	companyID,  	OrderStatusID,  	Inbound,  	PONumber,  	BOLNumber,  	ShipperID,  	ShipperReferenceNo,  	ShipperName,  	ShipperAddress,  	ShipperAddress1,  	ShipperAddress2,  	ShipperCity,  	ShipperProvinceID,  	ShipperCountryID,  	ShipperCountyName,  	ShipperPostal,  	ShipperLongitude,  	ShipperLatitude,  	ShipperContactID,  	ShipperContactDetails,  	ShipperContactName,  	ShipperContactTel,  	ShipperContactFax,  	ShipperContactEmail,  	ShipperHoursOpen,  	ShipperHoursClose,  	ShipperInstructions,  	ShipperDirections,  	ConsigneeID,  	ConsigneeReferenceNo,  	ConsigneeName,  	ConsigneeAddress,  	ConsigneeAddress1,  	ConsigneeAddress2,  	ConsigneeCity,  	ConsigneeProvinceID,  	ConsigneeCountryID,  	ConsigneeCountyName,  	ConsigneePostal,  	ConsigneeLongitude,  	ConsigneeLatitude,  	ConsigneeContactID,  	ConsigneeContactDetails,  	ConsigneeContactName,  	ConsigneeContactTel,  	ConsigneeContactFax,  	ConsigneeContactEmail,  	ConsigneeHoursOpen,  	ConsigneeHoursClose,  	ConsigneeInstructions,  	ConsigneeDirections,  	CarrierID,  	CarrierReferenceNo,  	CarrierName,  	CarrierContactID,  	CarrierContactDetails,  	CarrierContactName,  	CarrierContactTel,  	CarrierContactFax,  	CarrierContactEmail,  	CarrierDriver,  	CustomsBrokerID,  	CustomsBrokerName,  	CustomsContactID,  	CustomsBrokerContactDetails,  	CustomsBrokerContactName,  	CustomsBrokerContactTel,  	CustomsBrokerContactFax,  	CustomsBrokerContactEmail,  	PickupDateExpected,  	PickupDateActual,  	DeliveryDateExpected,  	DeliveryDateActual,  	Delivered,  	POD,  	PaymentTerms,  	EquipmentType,  	Routing,  	Instructions,  	Price,  	Invoiced,  	InvoiceID,  	Paid,  	Cost,  	Created,  	OrderNumber,  	BillToPartyID,  	BillToPartyReferenceNo,  	BillToPartyName,  	BillToAddress,  	BillToPartyAddress1,  	BillToPartyAddress2,  	BillToPartyCity,  	BillToPartyProvinceID,  	BillToPartyCountryID,  	BillToPartyPostal,  	BillToContactID,  	BillToContactDetails,  	BillToPartyContactName,  	BillToPartyContactTel,  	BillToPartyContactFax,  	BillToPartyContactEmail,  	Terms,  	QuotationNumber,  	Modified,  	ShipperRegionID,  	ConsigneeRegionID,  	TrailerID,  	Status,  	NewOrder,  	PeriodStartDate,  	PeriodEndDate,  	Frequency";
$proto0["m_strFrom"] = "FROM tbl_orders";
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
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_orders";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "companyID",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto8["m_sql"] = "companyID";
$proto8["m_srcTableName"] = "tbl_orders";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "OrderStatusID",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto10["m_sql"] = "OrderStatusID";
$proto10["m_srcTableName"] = "tbl_orders";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Inbound",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto12["m_sql"] = "Inbound";
$proto12["m_srcTableName"] = "tbl_orders";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PONumber",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto14["m_sql"] = "PONumber";
$proto14["m_srcTableName"] = "tbl_orders";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "BOLNumber",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto16["m_sql"] = "BOLNumber";
$proto16["m_srcTableName"] = "tbl_orders";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperID",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto18["m_sql"] = "ShipperID";
$proto18["m_srcTableName"] = "tbl_orders";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperReferenceNo",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto20["m_sql"] = "ShipperReferenceNo";
$proto20["m_srcTableName"] = "tbl_orders";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperName",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto22["m_sql"] = "ShipperName";
$proto22["m_srcTableName"] = "tbl_orders";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperAddress",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto24["m_sql"] = "ShipperAddress";
$proto24["m_srcTableName"] = "tbl_orders";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperAddress1",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto26["m_sql"] = "ShipperAddress1";
$proto26["m_srcTableName"] = "tbl_orders";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperAddress2",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto28["m_sql"] = "ShipperAddress2";
$proto28["m_srcTableName"] = "tbl_orders";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperCity",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto30["m_sql"] = "ShipperCity";
$proto30["m_srcTableName"] = "tbl_orders";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperProvinceID",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto32["m_sql"] = "ShipperProvinceID";
$proto32["m_srcTableName"] = "tbl_orders";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperCountryID",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto34["m_sql"] = "ShipperCountryID";
$proto34["m_srcTableName"] = "tbl_orders";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperCountyName",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto36["m_sql"] = "ShipperCountyName";
$proto36["m_srcTableName"] = "tbl_orders";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperPostal",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto38["m_sql"] = "ShipperPostal";
$proto38["m_srcTableName"] = "tbl_orders";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperLongitude",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto40["m_sql"] = "ShipperLongitude";
$proto40["m_srcTableName"] = "tbl_orders";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperLatitude",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto42["m_sql"] = "ShipperLatitude";
$proto42["m_srcTableName"] = "tbl_orders";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperContactID",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto44["m_sql"] = "ShipperContactID";
$proto44["m_srcTableName"] = "tbl_orders";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperContactDetails",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto46["m_sql"] = "ShipperContactDetails";
$proto46["m_srcTableName"] = "tbl_orders";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperContactName",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto48["m_sql"] = "ShipperContactName";
$proto48["m_srcTableName"] = "tbl_orders";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperContactTel",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto50["m_sql"] = "ShipperContactTel";
$proto50["m_srcTableName"] = "tbl_orders";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperContactFax",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto52["m_sql"] = "ShipperContactFax";
$proto52["m_srcTableName"] = "tbl_orders";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperContactEmail",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto54["m_sql"] = "ShipperContactEmail";
$proto54["m_srcTableName"] = "tbl_orders";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperHoursOpen",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto56["m_sql"] = "ShipperHoursOpen";
$proto56["m_srcTableName"] = "tbl_orders";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperHoursClose",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto58["m_sql"] = "ShipperHoursClose";
$proto58["m_srcTableName"] = "tbl_orders";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperInstructions",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto60["m_sql"] = "ShipperInstructions";
$proto60["m_srcTableName"] = "tbl_orders";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperDirections",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto62["m_sql"] = "ShipperDirections";
$proto62["m_srcTableName"] = "tbl_orders";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeID",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto64["m_sql"] = "ConsigneeID";
$proto64["m_srcTableName"] = "tbl_orders";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeReferenceNo",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto66["m_sql"] = "ConsigneeReferenceNo";
$proto66["m_srcTableName"] = "tbl_orders";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeName",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto68["m_sql"] = "ConsigneeName";
$proto68["m_srcTableName"] = "tbl_orders";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeAddress",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto70["m_sql"] = "ConsigneeAddress";
$proto70["m_srcTableName"] = "tbl_orders";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeAddress1",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto72["m_sql"] = "ConsigneeAddress1";
$proto72["m_srcTableName"] = "tbl_orders";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeAddress2",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto74["m_sql"] = "ConsigneeAddress2";
$proto74["m_srcTableName"] = "tbl_orders";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeCity",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto76["m_sql"] = "ConsigneeCity";
$proto76["m_srcTableName"] = "tbl_orders";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeProvinceID",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto78["m_sql"] = "ConsigneeProvinceID";
$proto78["m_srcTableName"] = "tbl_orders";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeCountryID",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto80["m_sql"] = "ConsigneeCountryID";
$proto80["m_srcTableName"] = "tbl_orders";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeCountyName",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto82["m_sql"] = "ConsigneeCountyName";
$proto82["m_srcTableName"] = "tbl_orders";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneePostal",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto84["m_sql"] = "ConsigneePostal";
$proto84["m_srcTableName"] = "tbl_orders";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeLongitude",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto86["m_sql"] = "ConsigneeLongitude";
$proto86["m_srcTableName"] = "tbl_orders";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeLatitude",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto88["m_sql"] = "ConsigneeLatitude";
$proto88["m_srcTableName"] = "tbl_orders";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeContactID",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto90["m_sql"] = "ConsigneeContactID";
$proto90["m_srcTableName"] = "tbl_orders";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeContactDetails",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto92["m_sql"] = "ConsigneeContactDetails";
$proto92["m_srcTableName"] = "tbl_orders";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeContactName",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto94["m_sql"] = "ConsigneeContactName";
$proto94["m_srcTableName"] = "tbl_orders";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeContactTel",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto96["m_sql"] = "ConsigneeContactTel";
$proto96["m_srcTableName"] = "tbl_orders";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeContactFax",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto98["m_sql"] = "ConsigneeContactFax";
$proto98["m_srcTableName"] = "tbl_orders";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeContactEmail",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto100["m_sql"] = "ConsigneeContactEmail";
$proto100["m_srcTableName"] = "tbl_orders";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeHoursOpen",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto102["m_sql"] = "ConsigneeHoursOpen";
$proto102["m_srcTableName"] = "tbl_orders";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeHoursClose",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto104["m_sql"] = "ConsigneeHoursClose";
$proto104["m_srcTableName"] = "tbl_orders";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeInstructions",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto106["m_sql"] = "ConsigneeInstructions";
$proto106["m_srcTableName"] = "tbl_orders";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeDirections",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto108["m_sql"] = "ConsigneeDirections";
$proto108["m_srcTableName"] = "tbl_orders";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierID",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto110["m_sql"] = "CarrierID";
$proto110["m_srcTableName"] = "tbl_orders";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierReferenceNo",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto112["m_sql"] = "CarrierReferenceNo";
$proto112["m_srcTableName"] = "tbl_orders";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierName",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto114["m_sql"] = "CarrierName";
$proto114["m_srcTableName"] = "tbl_orders";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierContactID",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto116["m_sql"] = "CarrierContactID";
$proto116["m_srcTableName"] = "tbl_orders";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierContactDetails",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto118["m_sql"] = "CarrierContactDetails";
$proto118["m_srcTableName"] = "tbl_orders";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierContactName",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto120["m_sql"] = "CarrierContactName";
$proto120["m_srcTableName"] = "tbl_orders";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierContactTel",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto122["m_sql"] = "CarrierContactTel";
$proto122["m_srcTableName"] = "tbl_orders";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierContactFax",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto124["m_sql"] = "CarrierContactFax";
$proto124["m_srcTableName"] = "tbl_orders";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierContactEmail",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto126["m_sql"] = "CarrierContactEmail";
$proto126["m_srcTableName"] = "tbl_orders";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "CarrierDriver",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto128["m_sql"] = "CarrierDriver";
$proto128["m_srcTableName"] = "tbl_orders";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomsBrokerID",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto130["m_sql"] = "CustomsBrokerID";
$proto130["m_srcTableName"] = "tbl_orders";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomsBrokerName",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto132["m_sql"] = "CustomsBrokerName";
$proto132["m_srcTableName"] = "tbl_orders";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomsContactID",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto134["m_sql"] = "CustomsContactID";
$proto134["m_srcTableName"] = "tbl_orders";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomsBrokerContactDetails",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto136["m_sql"] = "CustomsBrokerContactDetails";
$proto136["m_srcTableName"] = "tbl_orders";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomsBrokerContactName",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto138["m_sql"] = "CustomsBrokerContactName";
$proto138["m_srcTableName"] = "tbl_orders";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomsBrokerContactTel",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto140["m_sql"] = "CustomsBrokerContactTel";
$proto140["m_srcTableName"] = "tbl_orders";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomsBrokerContactFax",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto142["m_sql"] = "CustomsBrokerContactFax";
$proto142["m_srcTableName"] = "tbl_orders";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomsBrokerContactEmail",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto144["m_sql"] = "CustomsBrokerContactEmail";
$proto144["m_srcTableName"] = "tbl_orders";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "PickupDateExpected",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto146["m_sql"] = "PickupDateExpected";
$proto146["m_srcTableName"] = "tbl_orders";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "PickupDateActual",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto148["m_sql"] = "PickupDateActual";
$proto148["m_srcTableName"] = "tbl_orders";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "DeliveryDateExpected",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto150["m_sql"] = "DeliveryDateExpected";
$proto150["m_srcTableName"] = "tbl_orders";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "DeliveryDateActual",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto152["m_sql"] = "DeliveryDateActual";
$proto152["m_srcTableName"] = "tbl_orders";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "Delivered",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto154["m_sql"] = "Delivered";
$proto154["m_srcTableName"] = "tbl_orders";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "POD",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto156["m_sql"] = "POD";
$proto156["m_srcTableName"] = "tbl_orders";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentTerms",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto158["m_sql"] = "PaymentTerms";
$proto158["m_srcTableName"] = "tbl_orders";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "EquipmentType",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto160["m_sql"] = "EquipmentType";
$proto160["m_srcTableName"] = "tbl_orders";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "Routing",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto162["m_sql"] = "Routing";
$proto162["m_srcTableName"] = "tbl_orders";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "Instructions",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto164["m_sql"] = "Instructions";
$proto164["m_srcTableName"] = "tbl_orders";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "Price",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto166["m_sql"] = "Price";
$proto166["m_srcTableName"] = "tbl_orders";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "Invoiced",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto168["m_sql"] = "Invoiced";
$proto168["m_srcTableName"] = "tbl_orders";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "InvoiceID",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto170["m_sql"] = "InvoiceID";
$proto170["m_srcTableName"] = "tbl_orders";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "Paid",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto172["m_sql"] = "Paid";
$proto172["m_srcTableName"] = "tbl_orders";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto174["m_sql"] = "Cost";
$proto174["m_srcTableName"] = "tbl_orders";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "Created",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto176["m_sql"] = "Created";
$proto176["m_srcTableName"] = "tbl_orders";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "OrderNumber",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto178["m_sql"] = "OrderNumber";
$proto178["m_srcTableName"] = "tbl_orders";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyID",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto180["m_sql"] = "BillToPartyID";
$proto180["m_srcTableName"] = "tbl_orders";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyReferenceNo",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto182["m_sql"] = "BillToPartyReferenceNo";
$proto182["m_srcTableName"] = "tbl_orders";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyName",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto184["m_sql"] = "BillToPartyName";
$proto184["m_srcTableName"] = "tbl_orders";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToAddress",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto186["m_sql"] = "BillToAddress";
$proto186["m_srcTableName"] = "tbl_orders";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyAddress1",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto188["m_sql"] = "BillToPartyAddress1";
$proto188["m_srcTableName"] = "tbl_orders";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyAddress2",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto190["m_sql"] = "BillToPartyAddress2";
$proto190["m_srcTableName"] = "tbl_orders";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyCity",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto192["m_sql"] = "BillToPartyCity";
$proto192["m_srcTableName"] = "tbl_orders";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyProvinceID",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto194["m_sql"] = "BillToPartyProvinceID";
$proto194["m_srcTableName"] = "tbl_orders";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyCountryID",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto196["m_sql"] = "BillToPartyCountryID";
$proto196["m_srcTableName"] = "tbl_orders";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
						$proto198=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyPostal",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto198["m_sql"] = "BillToPartyPostal";
$proto198["m_srcTableName"] = "tbl_orders";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "";
$obj = new SQLFieldListItem($proto198);

$proto0["m_fieldlist"][]=$obj;
						$proto200=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToContactID",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto200["m_sql"] = "BillToContactID";
$proto200["m_srcTableName"] = "tbl_orders";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "";
$obj = new SQLFieldListItem($proto200);

$proto0["m_fieldlist"][]=$obj;
						$proto202=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToContactDetails",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto202["m_sql"] = "BillToContactDetails";
$proto202["m_srcTableName"] = "tbl_orders";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "";
$obj = new SQLFieldListItem($proto202);

$proto0["m_fieldlist"][]=$obj;
						$proto204=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyContactName",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto204["m_sql"] = "BillToPartyContactName";
$proto204["m_srcTableName"] = "tbl_orders";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "";
$obj = new SQLFieldListItem($proto204);

$proto0["m_fieldlist"][]=$obj;
						$proto206=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyContactTel",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto206["m_sql"] = "BillToPartyContactTel";
$proto206["m_srcTableName"] = "tbl_orders";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "";
$obj = new SQLFieldListItem($proto206);

$proto0["m_fieldlist"][]=$obj;
						$proto208=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyContactFax",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto208["m_sql"] = "BillToPartyContactFax";
$proto208["m_srcTableName"] = "tbl_orders";
$proto208["m_expr"]=$obj;
$proto208["m_alias"] = "";
$obj = new SQLFieldListItem($proto208);

$proto0["m_fieldlist"][]=$obj;
						$proto210=array();
			$obj = new SQLField(array(
	"m_strName" => "BillToPartyContactEmail",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto210["m_sql"] = "BillToPartyContactEmail";
$proto210["m_srcTableName"] = "tbl_orders";
$proto210["m_expr"]=$obj;
$proto210["m_alias"] = "";
$obj = new SQLFieldListItem($proto210);

$proto0["m_fieldlist"][]=$obj;
						$proto212=array();
			$obj = new SQLField(array(
	"m_strName" => "Terms",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto212["m_sql"] = "Terms";
$proto212["m_srcTableName"] = "tbl_orders";
$proto212["m_expr"]=$obj;
$proto212["m_alias"] = "";
$obj = new SQLFieldListItem($proto212);

$proto0["m_fieldlist"][]=$obj;
						$proto214=array();
			$obj = new SQLField(array(
	"m_strName" => "QuotationNumber",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto214["m_sql"] = "QuotationNumber";
$proto214["m_srcTableName"] = "tbl_orders";
$proto214["m_expr"]=$obj;
$proto214["m_alias"] = "";
$obj = new SQLFieldListItem($proto214);

$proto0["m_fieldlist"][]=$obj;
						$proto216=array();
			$obj = new SQLField(array(
	"m_strName" => "Modified",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto216["m_sql"] = "Modified";
$proto216["m_srcTableName"] = "tbl_orders";
$proto216["m_expr"]=$obj;
$proto216["m_alias"] = "";
$obj = new SQLFieldListItem($proto216);

$proto0["m_fieldlist"][]=$obj;
						$proto218=array();
			$obj = new SQLField(array(
	"m_strName" => "ShipperRegionID",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto218["m_sql"] = "ShipperRegionID";
$proto218["m_srcTableName"] = "tbl_orders";
$proto218["m_expr"]=$obj;
$proto218["m_alias"] = "";
$obj = new SQLFieldListItem($proto218);

$proto0["m_fieldlist"][]=$obj;
						$proto220=array();
			$obj = new SQLField(array(
	"m_strName" => "ConsigneeRegionID",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto220["m_sql"] = "ConsigneeRegionID";
$proto220["m_srcTableName"] = "tbl_orders";
$proto220["m_expr"]=$obj;
$proto220["m_alias"] = "";
$obj = new SQLFieldListItem($proto220);

$proto0["m_fieldlist"][]=$obj;
						$proto222=array();
			$obj = new SQLField(array(
	"m_strName" => "TrailerID",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto222["m_sql"] = "TrailerID";
$proto222["m_srcTableName"] = "tbl_orders";
$proto222["m_expr"]=$obj;
$proto222["m_alias"] = "";
$obj = new SQLFieldListItem($proto222);

$proto0["m_fieldlist"][]=$obj;
						$proto224=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto224["m_sql"] = "Status";
$proto224["m_srcTableName"] = "tbl_orders";
$proto224["m_expr"]=$obj;
$proto224["m_alias"] = "";
$obj = new SQLFieldListItem($proto224);

$proto0["m_fieldlist"][]=$obj;
						$proto226=array();
			$obj = new SQLField(array(
	"m_strName" => "NewOrder",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto226["m_sql"] = "NewOrder";
$proto226["m_srcTableName"] = "tbl_orders";
$proto226["m_expr"]=$obj;
$proto226["m_alias"] = "";
$obj = new SQLFieldListItem($proto226);

$proto0["m_fieldlist"][]=$obj;
						$proto228=array();
			$obj = new SQLField(array(
	"m_strName" => "PeriodStartDate",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto228["m_sql"] = "PeriodStartDate";
$proto228["m_srcTableName"] = "tbl_orders";
$proto228["m_expr"]=$obj;
$proto228["m_alias"] = "";
$obj = new SQLFieldListItem($proto228);

$proto0["m_fieldlist"][]=$obj;
						$proto230=array();
			$obj = new SQLField(array(
	"m_strName" => "PeriodEndDate",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto230["m_sql"] = "PeriodEndDate";
$proto230["m_srcTableName"] = "tbl_orders";
$proto230["m_expr"]=$obj;
$proto230["m_alias"] = "";
$obj = new SQLFieldListItem($proto230);

$proto0["m_fieldlist"][]=$obj;
						$proto232=array();
			$obj = new SQLField(array(
	"m_strName" => "Frequency",
	"m_strTable" => "tbl_orders",
	"m_srcTableName" => "tbl_orders"
));

$proto232["m_sql"] = "Frequency";
$proto232["m_srcTableName"] = "tbl_orders";
$proto232["m_expr"]=$obj;
$proto232["m_alias"] = "";
$obj = new SQLFieldListItem($proto232);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto234=array();
$proto234["m_link"] = "SQLL_MAIN";
			$proto235=array();
$proto235["m_strName"] = "tbl_orders";
$proto235["m_srcTableName"] = "tbl_orders";
$proto235["m_columns"] = array();
$proto235["m_columns"][] = "ID";
$proto235["m_columns"][] = "companyID";
$proto235["m_columns"][] = "OrderStatusID";
$proto235["m_columns"][] = "Inbound";
$proto235["m_columns"][] = "PONumber";
$proto235["m_columns"][] = "BOLNumber";
$proto235["m_columns"][] = "ShipperID";
$proto235["m_columns"][] = "ShipperReferenceNo";
$proto235["m_columns"][] = "ShipperName";
$proto235["m_columns"][] = "ShipperAddress";
$proto235["m_columns"][] = "ShipperAddress1";
$proto235["m_columns"][] = "ShipperAddress2";
$proto235["m_columns"][] = "ShipperCity";
$proto235["m_columns"][] = "ShipperProvinceID";
$proto235["m_columns"][] = "ShipperCountryID";
$proto235["m_columns"][] = "ShipperCountyName";
$proto235["m_columns"][] = "ShipperPostal";
$proto235["m_columns"][] = "ShipperLongitude";
$proto235["m_columns"][] = "ShipperLatitude";
$proto235["m_columns"][] = "ShipperContactID";
$proto235["m_columns"][] = "ShipperContactDetails";
$proto235["m_columns"][] = "ShipperContactName";
$proto235["m_columns"][] = "ShipperContactTel";
$proto235["m_columns"][] = "ShipperContactFax";
$proto235["m_columns"][] = "ShipperContactEmail";
$proto235["m_columns"][] = "ShipperHoursOpen";
$proto235["m_columns"][] = "ShipperHoursClose";
$proto235["m_columns"][] = "ShipperInstructions";
$proto235["m_columns"][] = "ShipperDirections";
$proto235["m_columns"][] = "ConsigneeID";
$proto235["m_columns"][] = "ConsigneeReferenceNo";
$proto235["m_columns"][] = "ConsigneeName";
$proto235["m_columns"][] = "ConsigneeAddress";
$proto235["m_columns"][] = "ConsigneeAddress1";
$proto235["m_columns"][] = "ConsigneeAddress2";
$proto235["m_columns"][] = "ConsigneeCity";
$proto235["m_columns"][] = "ConsigneeProvinceID";
$proto235["m_columns"][] = "ConsigneeCountryID";
$proto235["m_columns"][] = "ConsigneeCountyName";
$proto235["m_columns"][] = "ConsigneePostal";
$proto235["m_columns"][] = "ConsigneeLongitude";
$proto235["m_columns"][] = "ConsigneeLatitude";
$proto235["m_columns"][] = "ConsigneeContactID";
$proto235["m_columns"][] = "ConsigneeContactDetails";
$proto235["m_columns"][] = "ConsigneeContactName";
$proto235["m_columns"][] = "ConsigneeContactTel";
$proto235["m_columns"][] = "ConsigneeContactFax";
$proto235["m_columns"][] = "ConsigneeContactEmail";
$proto235["m_columns"][] = "ConsigneeHoursOpen";
$proto235["m_columns"][] = "ConsigneeHoursClose";
$proto235["m_columns"][] = "ConsigneeInstructions";
$proto235["m_columns"][] = "ConsigneeDirections";
$proto235["m_columns"][] = "CarrierID";
$proto235["m_columns"][] = "CarrierReferenceNo";
$proto235["m_columns"][] = "CarrierName";
$proto235["m_columns"][] = "CarrierContactID";
$proto235["m_columns"][] = "CarrierContactDetails";
$proto235["m_columns"][] = "CarrierContactName";
$proto235["m_columns"][] = "CarrierContactTel";
$proto235["m_columns"][] = "CarrierContactFax";
$proto235["m_columns"][] = "CarrierContactEmail";
$proto235["m_columns"][] = "CarrierDriver";
$proto235["m_columns"][] = "CustomsBrokerID";
$proto235["m_columns"][] = "CustomsBrokerName";
$proto235["m_columns"][] = "CustomsContactID";
$proto235["m_columns"][] = "CustomsBrokerContactDetails";
$proto235["m_columns"][] = "CustomsBrokerContactName";
$proto235["m_columns"][] = "CustomsBrokerContactTel";
$proto235["m_columns"][] = "CustomsBrokerContactFax";
$proto235["m_columns"][] = "CustomsBrokerContactEmail";
$proto235["m_columns"][] = "PickupDateExpected";
$proto235["m_columns"][] = "PickupDateActual";
$proto235["m_columns"][] = "DeliveryDateExpected";
$proto235["m_columns"][] = "DeliveryDateActual";
$proto235["m_columns"][] = "Delivered";
$proto235["m_columns"][] = "POD";
$proto235["m_columns"][] = "PaymentTerms";
$proto235["m_columns"][] = "EquipmentType";
$proto235["m_columns"][] = "Routing";
$proto235["m_columns"][] = "Instructions";
$proto235["m_columns"][] = "Price";
$proto235["m_columns"][] = "Invoiced";
$proto235["m_columns"][] = "InvoiceID";
$proto235["m_columns"][] = "Paid";
$proto235["m_columns"][] = "Cost";
$proto235["m_columns"][] = "Created";
$proto235["m_columns"][] = "OrderNumber";
$proto235["m_columns"][] = "BillToPartyID";
$proto235["m_columns"][] = "BillToPartyReferenceNo";
$proto235["m_columns"][] = "BillToPartyName";
$proto235["m_columns"][] = "BillToAddress";
$proto235["m_columns"][] = "BillToPartyAddress1";
$proto235["m_columns"][] = "BillToPartyAddress2";
$proto235["m_columns"][] = "BillToPartyCity";
$proto235["m_columns"][] = "BillToPartyProvinceID";
$proto235["m_columns"][] = "BillToPartyCountryID";
$proto235["m_columns"][] = "BillToPartyPostal";
$proto235["m_columns"][] = "BillToContactID";
$proto235["m_columns"][] = "BillToContactDetails";
$proto235["m_columns"][] = "BillToPartyContactName";
$proto235["m_columns"][] = "BillToPartyContactTel";
$proto235["m_columns"][] = "BillToPartyContactFax";
$proto235["m_columns"][] = "BillToPartyContactEmail";
$proto235["m_columns"][] = "Terms";
$proto235["m_columns"][] = "QuotationNumber";
$proto235["m_columns"][] = "Modified";
$proto235["m_columns"][] = "ShipperRegionID";
$proto235["m_columns"][] = "ConsigneeRegionID";
$proto235["m_columns"][] = "TrailerID";
$proto235["m_columns"][] = "Status";
$proto235["m_columns"][] = "NewOrder";
$proto235["m_columns"][] = "PeriodStartDate";
$proto235["m_columns"][] = "PeriodEndDate";
$proto235["m_columns"][] = "Frequency";
$obj = new SQLTable($proto235);

$proto234["m_table"] = $obj;
$proto234["m_sql"] = "tbl_orders";
$proto234["m_alias"] = "";
$proto234["m_srcTableName"] = "tbl_orders";
$proto236=array();
$proto236["m_sql"] = "";
$proto236["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto236["m_column"]=$obj;
$proto236["m_contained"] = array();
$proto236["m_strCase"] = "";
$proto236["m_havingmode"] = false;
$proto236["m_inBrackets"] = false;
$proto236["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto236);

$proto234["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto234);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_orders";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_orders = createSqlQuery_tbl_orders();


	
		;

																																																																																																																		

$tdatatbl_orders[".sqlquery"] = $queryData_tbl_orders;



include_once(getabspath("include/tbl_orders_events.php"));
$tableEvents["tbl_orders"] = new eventclass_tbl_orders;
$tdatatbl_orders[".hasEvents"] = true;

?>