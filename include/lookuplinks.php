<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["tbl_currency"] ) ) {
			$lookupTableLinks["tbl_currency"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_currency"]["tbl_country.CurrencyID"] )) {
			$lookupTableLinks["tbl_currency"]["tbl_country.CurrencyID"] = array();
		}
		$lookupTableLinks["tbl_currency"]["tbl_country.CurrencyID"]["edit"] = array("table" => "tbl_country", "field" => "CurrencyID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_country"] ) ) {
			$lookupTableLinks["tbl_country"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_country"]["tbl_province.CountryID"] )) {
			$lookupTableLinks["tbl_country"]["tbl_province.CountryID"] = array();
		}
		$lookupTableLinks["tbl_country"]["tbl_province.CountryID"]["edit"] = array("table" => "tbl_province", "field" => "CountryID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_currency"] ) ) {
			$lookupTableLinks["tbl_currency"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_currency"]["tbl_currency_daily_rate.BaseCurrency"] )) {
			$lookupTableLinks["tbl_currency"]["tbl_currency_daily_rate.BaseCurrency"] = array();
		}
		$lookupTableLinks["tbl_currency"]["tbl_currency_daily_rate.BaseCurrency"]["edit"] = array("table" => "tbl_currency_daily_rate", "field" => "BaseCurrency", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_currency"] ) ) {
			$lookupTableLinks["tbl_currency"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_currency"]["tbl_currency_daily_rate.TargetCurrency"] )) {
			$lookupTableLinks["tbl_currency"]["tbl_currency_daily_rate.TargetCurrency"] = array();
		}
		$lookupTableLinks["tbl_currency"]["tbl_currency_daily_rate.TargetCurrency"]["edit"] = array("table" => "tbl_currency_daily_rate", "field" => "TargetCurrency", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_company"] ) ) {
			$lookupTableLinks["tbl_company"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_company"]["tbl_users.CompanyID"] )) {
			$lookupTableLinks["tbl_company"]["tbl_users.CompanyID"] = array();
		}
		$lookupTableLinks["tbl_company"]["tbl_users.CompanyID"]["edit"] = array("table" => "tbl_users", "field" => "CompanyID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_address1"] ) ) {
			$lookupTableLinks["tbl_address1"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_address1"]["tbl_users.AddressID"] )) {
			$lookupTableLinks["tbl_address1"]["tbl_users.AddressID"] = array();
		}
		$lookupTableLinks["tbl_address1"]["tbl_users.AddressID"]["edit"] = array("table" => "tbl_users", "field" => "AddressID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_company"] ) ) {
			$lookupTableLinks["tbl_company"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_company"]["tbl_address.CompanyID"] )) {
			$lookupTableLinks["tbl_company"]["tbl_address.CompanyID"] = array();
		}
		$lookupTableLinks["tbl_company"]["tbl_address.CompanyID"]["edit"] = array("table" => "tbl_address", "field" => "CompanyID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_address_type"] ) ) {
			$lookupTableLinks["tbl_address_type"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_address_type"]["tbl_address.AddressTypeID"] )) {
			$lookupTableLinks["tbl_address_type"]["tbl_address.AddressTypeID"] = array();
		}
		$lookupTableLinks["tbl_address_type"]["tbl_address.AddressTypeID"]["edit"] = array("table" => "tbl_address", "field" => "AddressTypeID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_city"] ) ) {
			$lookupTableLinks["tbl_city"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_city"]["tbl_address.City"] )) {
			$lookupTableLinks["tbl_city"]["tbl_address.City"] = array();
		}
		$lookupTableLinks["tbl_city"]["tbl_address.City"]["edit"] = array("table" => "tbl_address", "field" => "City", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_county"] ) ) {
			$lookupTableLinks["tbl_county"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_county"]["tbl_address.County"] )) {
			$lookupTableLinks["tbl_county"]["tbl_address.County"] = array();
		}
		$lookupTableLinks["tbl_county"]["tbl_address.County"]["edit"] = array("table" => "tbl_address", "field" => "County", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_province"] ) ) {
			$lookupTableLinks["tbl_province"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_province"]["tbl_address.ProvinceID"] )) {
			$lookupTableLinks["tbl_province"]["tbl_address.ProvinceID"] = array();
		}
		$lookupTableLinks["tbl_province"]["tbl_address.ProvinceID"]["edit"] = array("table" => "tbl_address", "field" => "ProvinceID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_country"] ) ) {
			$lookupTableLinks["tbl_country"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_country"]["tbl_address.CountryID"] )) {
			$lookupTableLinks["tbl_country"]["tbl_address.CountryID"] = array();
		}
		$lookupTableLinks["tbl_country"]["tbl_address.CountryID"]["edit"] = array("table" => "tbl_address", "field" => "CountryID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_company"] ) ) {
			$lookupTableLinks["tbl_company"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_company"]["tbl_documents.CompanyID"] )) {
			$lookupTableLinks["tbl_company"]["tbl_documents.CompanyID"] = array();
		}
		$lookupTableLinks["tbl_company"]["tbl_documents.CompanyID"]["edit"] = array("table" => "tbl_documents", "field" => "CompanyID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_orders"] ) ) {
			$lookupTableLinks["tbl_orders"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_orders"]["tbl_documents.OrderID"] )) {
			$lookupTableLinks["tbl_orders"]["tbl_documents.OrderID"] = array();
		}
		$lookupTableLinks["tbl_orders"]["tbl_documents.OrderID"]["edit"] = array("table" => "tbl_documents", "field" => "OrderID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_uomWeight"] ) ) {
			$lookupTableLinks["tbl_uomWeight"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_uomWeight"]["tbl_order_items.WeightUOMID"] )) {
			$lookupTableLinks["tbl_uomWeight"]["tbl_order_items.WeightUOMID"] = array();
		}
		$lookupTableLinks["tbl_uomWeight"]["tbl_order_items.WeightUOMID"]["edit"] = array("table" => "tbl_order_items", "field" => "WeightUOMID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_uomPackaging"] ) ) {
			$lookupTableLinks["tbl_uomPackaging"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_uomPackaging"]["tbl_order_items.PackageTypeID"] )) {
			$lookupTableLinks["tbl_uomPackaging"]["tbl_order_items.PackageTypeID"] = array();
		}
		$lookupTableLinks["tbl_uomPackaging"]["tbl_order_items.PackageTypeID"]["edit"] = array("table" => "tbl_order_items", "field" => "PackageTypeID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_uomHandling"] ) ) {
			$lookupTableLinks["tbl_uomHandling"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_uomHandling"]["tbl_order_items.HandlingTypeID"] )) {
			$lookupTableLinks["tbl_uomHandling"]["tbl_order_items.HandlingTypeID"] = array();
		}
		$lookupTableLinks["tbl_uomHandling"]["tbl_order_items.HandlingTypeID"]["edit"] = array("table" => "tbl_order_items", "field" => "HandlingTypeID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_orders"] ) ) {
			$lookupTableLinks["tbl_orders"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_orders"]["tbl_order_status.OrderID"] )) {
			$lookupTableLinks["tbl_orders"]["tbl_order_status.OrderID"] = array();
		}
		$lookupTableLinks["tbl_orders"]["tbl_order_status.OrderID"]["edit"] = array("table" => "tbl_order_status", "field" => "OrderID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_users"] ) ) {
			$lookupTableLinks["tbl_users"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_users"]["tbl_order_status.UserID"] )) {
			$lookupTableLinks["tbl_users"]["tbl_order_status.UserID"] = array();
		}
		$lookupTableLinks["tbl_users"]["tbl_order_status.UserID"]["edit"] = array("table" => "tbl_order_status", "field" => "UserID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_company"] ) ) {
			$lookupTableLinks["tbl_company"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_company"]["tbl_orders.companyID"] )) {
			$lookupTableLinks["tbl_company"]["tbl_orders.companyID"] = array();
		}
		$lookupTableLinks["tbl_company"]["tbl_orders.companyID"]["edit"] = array("table" => "tbl_orders", "field" => "companyID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_address1"] ) ) {
			$lookupTableLinks["tbl_address1"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_address1"]["tbl_orders.ShipperID"] )) {
			$lookupTableLinks["tbl_address1"]["tbl_orders.ShipperID"] = array();
		}
		$lookupTableLinks["tbl_address1"]["tbl_orders.ShipperID"]["edit"] = array("table" => "tbl_orders", "field" => "ShipperID", "page" => "edit");
		if( !isset( $lookupTableLinks["vw_company_addressbook"] ) ) {
			$lookupTableLinks["vw_company_addressbook"] = array();
		}
		if( !isset( $lookupTableLinks["vw_company_addressbook"]["tbl_orders.ConsigneeID"] )) {
			$lookupTableLinks["vw_company_addressbook"]["tbl_orders.ConsigneeID"] = array();
		}
		$lookupTableLinks["vw_company_addressbook"]["tbl_orders.ConsigneeID"]["edit"] = array("table" => "tbl_orders", "field" => "ConsigneeID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_company"] ) ) {
			$lookupTableLinks["tbl_company"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_company"]["tbl_orders.CarrierID"] )) {
			$lookupTableLinks["tbl_company"]["tbl_orders.CarrierID"] = array();
		}
		$lookupTableLinks["tbl_company"]["tbl_orders.CarrierID"]["edit"] = array("table" => "tbl_orders", "field" => "CarrierID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_company"] ) ) {
			$lookupTableLinks["tbl_company"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_company"]["tbl_orders.CustomsBrokerID"] )) {
			$lookupTableLinks["tbl_company"]["tbl_orders.CustomsBrokerID"] = array();
		}
		$lookupTableLinks["tbl_company"]["tbl_orders.CustomsBrokerID"]["edit"] = array("table" => "tbl_orders", "field" => "CustomsBrokerID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_payment_terms"] ) ) {
			$lookupTableLinks["tbl_payment_terms"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_payment_terms"]["tbl_orders.PaymentTerms"] )) {
			$lookupTableLinks["tbl_payment_terms"]["tbl_orders.PaymentTerms"] = array();
		}
		$lookupTableLinks["tbl_payment_terms"]["tbl_orders.PaymentTerms"]["edit"] = array("table" => "tbl_orders", "field" => "PaymentTerms", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_equipment_type"] ) ) {
			$lookupTableLinks["tbl_equipment_type"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_equipment_type"]["tbl_orders.EquipmentType"] )) {
			$lookupTableLinks["tbl_equipment_type"]["tbl_orders.EquipmentType"] = array();
		}
		$lookupTableLinks["tbl_equipment_type"]["tbl_orders.EquipmentType"]["edit"] = array("table" => "tbl_orders", "field" => "EquipmentType", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_company"] ) ) {
			$lookupTableLinks["tbl_company"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_company"]["tbl_orders.BillToPartyID"] )) {
			$lookupTableLinks["tbl_company"]["tbl_orders.BillToPartyID"] = array();
		}
		$lookupTableLinks["tbl_company"]["tbl_orders.BillToPartyID"]["edit"] = array("table" => "tbl_orders", "field" => "BillToPartyID", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_contacts"] ) ) {
			$lookupTableLinks["tb_contacts"] = array();
		}
		if( !isset( $lookupTableLinks["tb_contacts"]["tb_contacts_emails.ContactID"] )) {
			$lookupTableLinks["tb_contacts"]["tb_contacts_emails.ContactID"] = array();
		}
		$lookupTableLinks["tb_contacts"]["tb_contacts_emails.ContactID"]["edit"] = array("table" => "tb_contacts_emails", "field" => "ContactID", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_contacts"] ) ) {
			$lookupTableLinks["tb_contacts"] = array();
		}
		if( !isset( $lookupTableLinks["tb_contacts"]["tb_contacts_phones.ContactID"] )) {
			$lookupTableLinks["tb_contacts"]["tb_contacts_phones.ContactID"] = array();
		}
		$lookupTableLinks["tb_contacts"]["tb_contacts_phones.ContactID"]["edit"] = array("table" => "tb_contacts_phones", "field" => "ContactID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_users"] ) ) {
			$lookupTableLinks["tbl_users"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_users"]["tbl_company.SalesRepID"] )) {
			$lookupTableLinks["tbl_users"]["tbl_company.SalesRepID"] = array();
		}
		$lookupTableLinks["tbl_users"]["tbl_company.SalesRepID"]["edit"] = array("table" => "tbl_company", "field" => "SalesRepID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_credit_approval_Status"] ) ) {
			$lookupTableLinks["tbl_credit_approval_Status"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_credit_approval_Status"]["tbl_company.CreditApprovalStatus"] )) {
			$lookupTableLinks["tbl_credit_approval_Status"]["tbl_company.CreditApprovalStatus"] = array();
		}
		$lookupTableLinks["tbl_credit_approval_Status"]["tbl_company.CreditApprovalStatus"]["edit"] = array("table" => "tbl_company", "field" => "CreditApprovalStatus", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_sale_terms"] ) ) {
			$lookupTableLinks["tbl_sale_terms"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_sale_terms"]["tbl_company.INCOTermsID"] )) {
			$lookupTableLinks["tbl_sale_terms"]["tbl_company.INCOTermsID"] = array();
		}
		$lookupTableLinks["tbl_sale_terms"]["tbl_company.INCOTermsID"]["edit"] = array("table" => "tbl_company", "field" => "INCOTermsID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_payment_terms"] ) ) {
			$lookupTableLinks["tbl_payment_terms"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_payment_terms"]["tbl_company.PaymentTermsID"] )) {
			$lookupTableLinks["tbl_payment_terms"]["tbl_company.PaymentTermsID"] = array();
		}
		$lookupTableLinks["tbl_payment_terms"]["tbl_company.PaymentTermsID"]["edit"] = array("table" => "tbl_company", "field" => "PaymentTermsID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_city"] ) ) {
			$lookupTableLinks["tbl_city"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_city"]["tbl_company.PrimaryCity"] )) {
			$lookupTableLinks["tbl_city"]["tbl_company.PrimaryCity"] = array();
		}
		$lookupTableLinks["tbl_city"]["tbl_company.PrimaryCity"]["edit"] = array("table" => "tbl_company", "field" => "PrimaryCity", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_province"] ) ) {
			$lookupTableLinks["tbl_province"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_province"]["tbl_company.PrimaryProvince"] )) {
			$lookupTableLinks["tbl_province"]["tbl_company.PrimaryProvince"] = array();
		}
		$lookupTableLinks["tbl_province"]["tbl_company.PrimaryProvince"]["edit"] = array("table" => "tbl_company", "field" => "PrimaryProvince", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_country"] ) ) {
			$lookupTableLinks["tbl_country"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_country"]["tbl_company.PrimaryCountry"] )) {
			$lookupTableLinks["tbl_country"]["tbl_company.PrimaryCountry"] = array();
		}
		$lookupTableLinks["tbl_country"]["tbl_company.PrimaryCountry"]["edit"] = array("table" => "tbl_company", "field" => "PrimaryCountry", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_company"] ) ) {
			$lookupTableLinks["tbl_company"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_company"]["tb_contacts.CompanyID"] )) {
			$lookupTableLinks["tbl_company"]["tb_contacts.CompanyID"] = array();
		}
		$lookupTableLinks["tbl_company"]["tb_contacts.CompanyID"]["edit"] = array("table" => "tb_contacts", "field" => "CompanyID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_address1"] ) ) {
			$lookupTableLinks["tbl_address1"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_address1"]["tb_contacts.AddressID"] )) {
			$lookupTableLinks["tbl_address1"]["tb_contacts.AddressID"] = array();
		}
		$lookupTableLinks["tbl_address1"]["tb_contacts.AddressID"]["edit"] = array("table" => "tb_contacts", "field" => "AddressID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_province"] ) ) {
			$lookupTableLinks["tbl_province"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_province"]["tbl_city.ProvinceID"] )) {
			$lookupTableLinks["tbl_province"]["tbl_city.ProvinceID"] = array();
		}
		$lookupTableLinks["tbl_province"]["tbl_city.ProvinceID"]["edit"] = array("table" => "tbl_city", "field" => "ProvinceID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_province"] ) ) {
			$lookupTableLinks["tbl_province"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_province"]["tbl_county.ProvinceID"] )) {
			$lookupTableLinks["tbl_province"]["tbl_county.ProvinceID"] = array();
		}
		$lookupTableLinks["tbl_province"]["tbl_county.ProvinceID"]["edit"] = array("table" => "tbl_county", "field" => "ProvinceID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_company"] ) ) {
			$lookupTableLinks["tbl_company"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_company"]["admin_users.CompanyID"] )) {
			$lookupTableLinks["tbl_company"]["admin_users.CompanyID"] = array();
		}
		$lookupTableLinks["tbl_company"]["admin_users.CompanyID"]["edit"] = array("table" => "admin_users", "field" => "CompanyID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_address"] ) ) {
			$lookupTableLinks["tbl_address"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_address"]["admin_users.AddressID"] )) {
			$lookupTableLinks["tbl_address"]["admin_users.AddressID"] = array();
		}
		$lookupTableLinks["tbl_address"]["admin_users.AddressID"]["edit"] = array("table" => "admin_users", "field" => "AddressID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_company"] ) ) {
			$lookupTableLinks["tbl_company"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_company"]["tbl_company_equipment.CompanyID"] )) {
			$lookupTableLinks["tbl_company"]["tbl_company_equipment.CompanyID"] = array();
		}
		$lookupTableLinks["tbl_company"]["tbl_company_equipment.CompanyID"]["edit"] = array("table" => "tbl_company_equipment", "field" => "CompanyID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_equipment_type"] ) ) {
			$lookupTableLinks["tbl_equipment_type"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_equipment_type"]["tbl_company_equipment.EquipmentTypeID"] )) {
			$lookupTableLinks["tbl_equipment_type"]["tbl_company_equipment.EquipmentTypeID"] = array();
		}
		$lookupTableLinks["tbl_equipment_type"]["tbl_company_equipment.EquipmentTypeID"]["edit"] = array("table" => "tbl_company_equipment", "field" => "EquipmentTypeID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_equipment_type"] ) ) {
			$lookupTableLinks["tbl_equipment_type"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_equipment_type"]["tbl_company_equipment.EquipmentTypeID"] )) {
			$lookupTableLinks["tbl_equipment_type"]["tbl_company_equipment.EquipmentTypeID"] = array();
		}
		$lookupTableLinks["tbl_equipment_type"]["tbl_company_equipment.EquipmentTypeID"]["add"] = array("table" => "tbl_company_equipment", "field" => "EquipmentTypeID", "page" => "add");
		if( !isset( $lookupTableLinks["tbl_equipment_type"] ) ) {
			$lookupTableLinks["tbl_equipment_type"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_equipment_type"]["tbl_company_equipment.EquipmentTypeID"] )) {
			$lookupTableLinks["tbl_equipment_type"]["tbl_company_equipment.EquipmentTypeID"] = array();
		}
		$lookupTableLinks["tbl_equipment_type"]["tbl_company_equipment.EquipmentTypeID"]["search"] = array("table" => "tbl_company_equipment", "field" => "EquipmentTypeID", "page" => "search");
		if( !isset( $lookupTableLinks["tbl_company"] ) ) {
			$lookupTableLinks["tbl_company"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_company"]["tbl_company_areas1.CompanyID"] )) {
			$lookupTableLinks["tbl_company"]["tbl_company_areas1.CompanyID"] = array();
		}
		$lookupTableLinks["tbl_company"]["tbl_company_areas1.CompanyID"]["edit"] = array("table" => "tbl_company_areas", "field" => "CompanyID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_country"] ) ) {
			$lookupTableLinks["tbl_country"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_country"]["tbl_company_areas1.CountryID"] )) {
			$lookupTableLinks["tbl_country"]["tbl_company_areas1.CountryID"] = array();
		}
		$lookupTableLinks["tbl_country"]["tbl_company_areas1.CountryID"]["edit"] = array("table" => "tbl_company_areas", "field" => "CountryID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_province"] ) ) {
			$lookupTableLinks["tbl_province"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_province"]["tbl_company_areas1.ProvinceID"] )) {
			$lookupTableLinks["tbl_province"]["tbl_company_areas1.ProvinceID"] = array();
		}
		$lookupTableLinks["tbl_province"]["tbl_company_areas1.ProvinceID"]["edit"] = array("table" => "tbl_company_areas", "field" => "ProvinceID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_province"] ) ) {
			$lookupTableLinks["tbl_province"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_province"]["tbl_company_areas1.ProvinceID"] )) {
			$lookupTableLinks["tbl_province"]["tbl_company_areas1.ProvinceID"] = array();
		}
		$lookupTableLinks["tbl_province"]["tbl_company_areas1.ProvinceID"]["add"] = array("table" => "tbl_company_areas", "field" => "ProvinceID", "page" => "add");
		if( !isset( $lookupTableLinks["tbl_province"] ) ) {
			$lookupTableLinks["tbl_province"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_province"]["tbl_company_areas1.ProvinceID"] )) {
			$lookupTableLinks["tbl_province"]["tbl_company_areas1.ProvinceID"] = array();
		}
		$lookupTableLinks["tbl_province"]["tbl_company_areas1.ProvinceID"]["search"] = array("table" => "tbl_company_areas", "field" => "ProvinceID", "page" => "search");
		if( !isset( $lookupTableLinks["tbl_company"] ) ) {
			$lookupTableLinks["tbl_company"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_company"]["tbl_rfqs.companyID"] )) {
			$lookupTableLinks["tbl_company"]["tbl_rfqs.companyID"] = array();
		}
		$lookupTableLinks["tbl_company"]["tbl_rfqs.companyID"]["edit"] = array("table" => "tbl_rfqs", "field" => "companyID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_rfq_status"] ) ) {
			$lookupTableLinks["tbl_rfq_status"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_rfq_status"]["tbl_rfqs.RFQStatusID"] )) {
			$lookupTableLinks["tbl_rfq_status"]["tbl_rfqs.RFQStatusID"] = array();
		}
		$lookupTableLinks["tbl_rfq_status"]["tbl_rfqs.RFQStatusID"]["edit"] = array("table" => "tbl_rfqs", "field" => "RFQStatusID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_address1"] ) ) {
			$lookupTableLinks["tbl_address1"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_address1"]["tbl_rfqs.ShipperID"] )) {
			$lookupTableLinks["tbl_address1"]["tbl_rfqs.ShipperID"] = array();
		}
		$lookupTableLinks["tbl_address1"]["tbl_rfqs.ShipperID"]["edit"] = array("table" => "tbl_rfqs", "field" => "ShipperID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_province"] ) ) {
			$lookupTableLinks["tbl_province"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_province"]["tbl_rfqs.ShipperProvinceID"] )) {
			$lookupTableLinks["tbl_province"]["tbl_rfqs.ShipperProvinceID"] = array();
		}
		$lookupTableLinks["tbl_province"]["tbl_rfqs.ShipperProvinceID"]["edit"] = array("table" => "tbl_rfqs", "field" => "ShipperProvinceID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_country"] ) ) {
			$lookupTableLinks["tbl_country"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_country"]["tbl_rfqs.ShipperCountryID"] )) {
			$lookupTableLinks["tbl_country"]["tbl_rfqs.ShipperCountryID"] = array();
		}
		$lookupTableLinks["tbl_country"]["tbl_rfqs.ShipperCountryID"]["edit"] = array("table" => "tbl_rfqs", "field" => "ShipperCountryID", "page" => "edit");
		if( !isset( $lookupTableLinks["vw_contacts"] ) ) {
			$lookupTableLinks["vw_contacts"] = array();
		}
		if( !isset( $lookupTableLinks["vw_contacts"]["tbl_rfqs.ShipperContactID"] )) {
			$lookupTableLinks["vw_contacts"]["tbl_rfqs.ShipperContactID"] = array();
		}
		$lookupTableLinks["vw_contacts"]["tbl_rfqs.ShipperContactID"]["edit"] = array("table" => "tbl_rfqs", "field" => "ShipperContactID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_address1"] ) ) {
			$lookupTableLinks["tbl_address1"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_address1"]["tbl_rfqs.ConsigneeID"] )) {
			$lookupTableLinks["tbl_address1"]["tbl_rfqs.ConsigneeID"] = array();
		}
		$lookupTableLinks["tbl_address1"]["tbl_rfqs.ConsigneeID"]["edit"] = array("table" => "tbl_rfqs", "field" => "ConsigneeID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_province"] ) ) {
			$lookupTableLinks["tbl_province"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_province"]["tbl_rfqs.ConsigneeProvinceID"] )) {
			$lookupTableLinks["tbl_province"]["tbl_rfqs.ConsigneeProvinceID"] = array();
		}
		$lookupTableLinks["tbl_province"]["tbl_rfqs.ConsigneeProvinceID"]["edit"] = array("table" => "tbl_rfqs", "field" => "ConsigneeProvinceID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_country"] ) ) {
			$lookupTableLinks["tbl_country"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_country"]["tbl_rfqs.ConsigneeCountryID"] )) {
			$lookupTableLinks["tbl_country"]["tbl_rfqs.ConsigneeCountryID"] = array();
		}
		$lookupTableLinks["tbl_country"]["tbl_rfqs.ConsigneeCountryID"]["edit"] = array("table" => "tbl_rfqs", "field" => "ConsigneeCountryID", "page" => "edit");
		if( !isset( $lookupTableLinks["vw_contacts"] ) ) {
			$lookupTableLinks["vw_contacts"] = array();
		}
		if( !isset( $lookupTableLinks["vw_contacts"]["tbl_rfqs.ConsigneeContactID"] )) {
			$lookupTableLinks["vw_contacts"]["tbl_rfqs.ConsigneeContactID"] = array();
		}
		$lookupTableLinks["vw_contacts"]["tbl_rfqs.ConsigneeContactID"]["edit"] = array("table" => "tbl_rfqs", "field" => "ConsigneeContactID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_company"] ) ) {
			$lookupTableLinks["tbl_company"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_company"]["tbl_rfqs.CarrierID"] )) {
			$lookupTableLinks["tbl_company"]["tbl_rfqs.CarrierID"] = array();
		}
		$lookupTableLinks["tbl_company"]["tbl_rfqs.CarrierID"]["edit"] = array("table" => "tbl_rfqs", "field" => "CarrierID", "page" => "edit");
		if( !isset( $lookupTableLinks["vw_contacts"] ) ) {
			$lookupTableLinks["vw_contacts"] = array();
		}
		if( !isset( $lookupTableLinks["vw_contacts"]["tbl_rfqs.CarrierContactID"] )) {
			$lookupTableLinks["vw_contacts"]["tbl_rfqs.CarrierContactID"] = array();
		}
		$lookupTableLinks["vw_contacts"]["tbl_rfqs.CarrierContactID"]["edit"] = array("table" => "tbl_rfqs", "field" => "CarrierContactID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_company"] ) ) {
			$lookupTableLinks["tbl_company"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_company"]["tbl_rfqs.CustomsBrokerID"] )) {
			$lookupTableLinks["tbl_company"]["tbl_rfqs.CustomsBrokerID"] = array();
		}
		$lookupTableLinks["tbl_company"]["tbl_rfqs.CustomsBrokerID"]["edit"] = array("table" => "tbl_rfqs", "field" => "CustomsBrokerID", "page" => "edit");
		if( !isset( $lookupTableLinks["vw_contacts"] ) ) {
			$lookupTableLinks["vw_contacts"] = array();
		}
		if( !isset( $lookupTableLinks["vw_contacts"]["tbl_rfqs.CustomsContactID"] )) {
			$lookupTableLinks["vw_contacts"]["tbl_rfqs.CustomsContactID"] = array();
		}
		$lookupTableLinks["vw_contacts"]["tbl_rfqs.CustomsContactID"]["edit"] = array("table" => "tbl_rfqs", "field" => "CustomsContactID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_payment_terms"] ) ) {
			$lookupTableLinks["tbl_payment_terms"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_payment_terms"]["tbl_rfqs.PaymentTerms"] )) {
			$lookupTableLinks["tbl_payment_terms"]["tbl_rfqs.PaymentTerms"] = array();
		}
		$lookupTableLinks["tbl_payment_terms"]["tbl_rfqs.PaymentTerms"]["edit"] = array("table" => "tbl_rfqs", "field" => "PaymentTerms", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_equipment_type"] ) ) {
			$lookupTableLinks["tbl_equipment_type"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_equipment_type"]["tbl_rfqs.EquipmentType"] )) {
			$lookupTableLinks["tbl_equipment_type"]["tbl_rfqs.EquipmentType"] = array();
		}
		$lookupTableLinks["tbl_equipment_type"]["tbl_rfqs.EquipmentType"]["edit"] = array("table" => "tbl_rfqs", "field" => "EquipmentType", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_address1"] ) ) {
			$lookupTableLinks["tbl_address1"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_address1"]["tbl_rfqs.BillToPartyID"] )) {
			$lookupTableLinks["tbl_address1"]["tbl_rfqs.BillToPartyID"] = array();
		}
		$lookupTableLinks["tbl_address1"]["tbl_rfqs.BillToPartyID"]["edit"] = array("table" => "tbl_rfqs", "field" => "BillToPartyID", "page" => "edit");
		if( !isset( $lookupTableLinks["vw_contacts"] ) ) {
			$lookupTableLinks["vw_contacts"] = array();
		}
		if( !isset( $lookupTableLinks["vw_contacts"]["tbl_rfqs.BillToContactID"] )) {
			$lookupTableLinks["vw_contacts"]["tbl_rfqs.BillToContactID"] = array();
		}
		$lookupTableLinks["vw_contacts"]["tbl_rfqs.BillToContactID"]["edit"] = array("table" => "tbl_rfqs", "field" => "BillToContactID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_uomDim"] ) ) {
			$lookupTableLinks["tbl_uomDim"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_uomDim"]["tbl_rfq_items.DimUOMID"] )) {
			$lookupTableLinks["tbl_uomDim"]["tbl_rfq_items.DimUOMID"] = array();
		}
		$lookupTableLinks["tbl_uomDim"]["tbl_rfq_items.DimUOMID"]["edit"] = array("table" => "tbl_rfq_items", "field" => "DimUOMID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_uomWeight"] ) ) {
			$lookupTableLinks["tbl_uomWeight"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_uomWeight"]["tbl_rfq_items.WeightUOMID"] )) {
			$lookupTableLinks["tbl_uomWeight"]["tbl_rfq_items.WeightUOMID"] = array();
		}
		$lookupTableLinks["tbl_uomWeight"]["tbl_rfq_items.WeightUOMID"]["edit"] = array("table" => "tbl_rfq_items", "field" => "WeightUOMID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_uomPackaging"] ) ) {
			$lookupTableLinks["tbl_uomPackaging"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_uomPackaging"]["tbl_rfq_items.PackageTypeID"] )) {
			$lookupTableLinks["tbl_uomPackaging"]["tbl_rfq_items.PackageTypeID"] = array();
		}
		$lookupTableLinks["tbl_uomPackaging"]["tbl_rfq_items.PackageTypeID"]["edit"] = array("table" => "tbl_rfq_items", "field" => "PackageTypeID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_uomHandling"] ) ) {
			$lookupTableLinks["tbl_uomHandling"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_uomHandling"]["tbl_rfq_items.HandlingTypeID"] )) {
			$lookupTableLinks["tbl_uomHandling"]["tbl_rfq_items.HandlingTypeID"] = array();
		}
		$lookupTableLinks["tbl_uomHandling"]["tbl_rfq_items.HandlingTypeID"]["edit"] = array("table" => "tbl_rfq_items", "field" => "HandlingTypeID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_company"] ) ) {
			$lookupTableLinks["tbl_company"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_company"]["tbl_rfq_assesorial.CarrierCompanyID"] )) {
			$lookupTableLinks["tbl_company"]["tbl_rfq_assesorial.CarrierCompanyID"] = array();
		}
		$lookupTableLinks["tbl_company"]["tbl_rfq_assesorial.CarrierCompanyID"]["edit"] = array("table" => "tbl_rfq_assesorial", "field" => "CarrierCompanyID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_company"] ) ) {
			$lookupTableLinks["tbl_company"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_company"]["tbl_address1.CompanyID"] )) {
			$lookupTableLinks["tbl_company"]["tbl_address1.CompanyID"] = array();
		}
		$lookupTableLinks["tbl_company"]["tbl_address1.CompanyID"]["edit"] = array("table" => "tbl_address1", "field" => "CompanyID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_address_type"] ) ) {
			$lookupTableLinks["tbl_address_type"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_address_type"]["tbl_address1.AddressTypeID"] )) {
			$lookupTableLinks["tbl_address_type"]["tbl_address1.AddressTypeID"] = array();
		}
		$lookupTableLinks["tbl_address_type"]["tbl_address1.AddressTypeID"]["edit"] = array("table" => "tbl_address1", "field" => "AddressTypeID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_city"] ) ) {
			$lookupTableLinks["tbl_city"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_city"]["tbl_address1.City"] )) {
			$lookupTableLinks["tbl_city"]["tbl_address1.City"] = array();
		}
		$lookupTableLinks["tbl_city"]["tbl_address1.City"]["edit"] = array("table" => "tbl_address1", "field" => "City", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_county"] ) ) {
			$lookupTableLinks["tbl_county"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_county"]["tbl_address1.County"] )) {
			$lookupTableLinks["tbl_county"]["tbl_address1.County"] = array();
		}
		$lookupTableLinks["tbl_county"]["tbl_address1.County"]["edit"] = array("table" => "tbl_address1", "field" => "County", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_province"] ) ) {
			$lookupTableLinks["tbl_province"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_province"]["tbl_address1.ProvinceID"] )) {
			$lookupTableLinks["tbl_province"]["tbl_address1.ProvinceID"] = array();
		}
		$lookupTableLinks["tbl_province"]["tbl_address1.ProvinceID"]["edit"] = array("table" => "tbl_address1", "field" => "ProvinceID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_country"] ) ) {
			$lookupTableLinks["tbl_country"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_country"]["tbl_address1.CountryID"] )) {
			$lookupTableLinks["tbl_country"]["tbl_address1.CountryID"] = array();
		}
		$lookupTableLinks["tbl_country"]["tbl_address1.CountryID"]["edit"] = array("table" => "tbl_address1", "field" => "CountryID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_company"] ) ) {
			$lookupTableLinks["tbl_company"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_company"]["tbl_rfq_carrier_quote.CarrierCompanyID"] )) {
			$lookupTableLinks["tbl_company"]["tbl_rfq_carrier_quote.CarrierCompanyID"] = array();
		}
		$lookupTableLinks["tbl_company"]["tbl_rfq_carrier_quote.CarrierCompanyID"]["edit"] = array("table" => "tbl_rfq_carrier_quote", "field" => "CarrierCompanyID", "page" => "edit");
		if( !isset( $lookupTableLinks["vw_contacts"] ) ) {
			$lookupTableLinks["vw_contacts"] = array();
		}
		if( !isset( $lookupTableLinks["vw_contacts"]["tbl_rfq_carrier_quote.CarrierContactID"] )) {
			$lookupTableLinks["vw_contacts"]["tbl_rfq_carrier_quote.CarrierContactID"] = array();
		}
		$lookupTableLinks["vw_contacts"]["tbl_rfq_carrier_quote.CarrierContactID"]["edit"] = array("table" => "tbl_rfq_carrier_quote", "field" => "CarrierContactID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_company"] ) ) {
			$lookupTableLinks["tbl_company"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_company"]["vw_contacts.CompanyID"] )) {
			$lookupTableLinks["tbl_company"]["vw_contacts.CompanyID"] = array();
		}
		$lookupTableLinks["tbl_company"]["vw_contacts.CompanyID"]["edit"] = array("table" => "vw_contacts", "field" => "CompanyID", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_address1"] ) ) {
			$lookupTableLinks["tbl_address1"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_address1"]["vw_contacts.AddressID"] )) {
			$lookupTableLinks["tbl_address1"]["vw_contacts.AddressID"] = array();
		}
		$lookupTableLinks["tbl_address1"]["vw_contacts.AddressID"]["edit"] = array("table" => "vw_contacts", "field" => "AddressID", "page" => "edit");
}

?>