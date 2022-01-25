<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers("tbl_users");
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tbllogistics_at_localhost__formfields;
	var $tbllogistics_at_localhost__formoptions;
	var $tbllogistics_at_localhost__forms;
	var $tbllogistics_at_localhost__sqlfields;
	var $tbllogistics_at_localhost__targettransportation104_v1_audit;
	var $tbllogistics_at_localhost__TargetTransportation_settings;
	var $tbllogistics_at_localhost__targettransportation_uggroups;
	var $tbllogistics_at_localhost__targettransportation_ugmembers;
	var $tbllogistics_at_localhost__targettransportation_ugrights;
	var $tbllogistics_at_localhost__tb_activities_type;
	var $tbllogistics_at_localhost__tb_contacts;
	var $tbllogistics_at_localhost__tb_contacts_emails;
	var $tbllogistics_at_localhost__tb_contacts_phones;
	var $tbllogistics_at_localhost__tb_lead_source;
	var $tbllogistics_at_localhost__tbl_address;
	var $tbllogistics_at_localhost__tbl_address_type;
	var $tbllogistics_at_localhost__tbl_city;
	var $tbllogistics_at_localhost__tbl_company;
	var $tbllogistics_at_localhost__tbl_company_areas;
	var $tbllogistics_at_localhost__tbl_company_equipment;
	var $tbllogistics_at_localhost__tbl_country;
	var $tbllogistics_at_localhost__tbl_county;
	var $tbllogistics_at_localhost__tbl_credit_approval_Status;
	var $tbllogistics_at_localhost__tbl_currency;
	var $tbllogistics_at_localhost__tbl_currency_daily_rate;
	var $tbllogistics_at_localhost__tbl_documents;
	var $tbllogistics_at_localhost__tbl_equipment;
	var $tbllogistics_at_localhost__tbl_equipment_assignment;
	var $tbllogistics_at_localhost__tbl_equipment_type;
	var $tbllogistics_at_localhost__tbl_invoice_payments;
	var $tbllogistics_at_localhost__tbl_invoices;
	var $tbllogistics_at_localhost__tbl_lane;
	var $tbllogistics_at_localhost__tbl_order_assesorial;
	var $tbllogistics_at_localhost__tbl_order_items;
	var $tbllogistics_at_localhost__tbl_order_status;
	var $tbllogistics_at_localhost__tbl_orders;
	var $tbllogistics_at_localhost__tbl_pallet_type;
	var $tbllogistics_at_localhost__tbl_payment_terms;
	var $tbllogistics_at_localhost__tbl_province;
	var $tbllogistics_at_localhost__tbl_rfq_assesorial;
	var $tbllogistics_at_localhost__tbl_rfq_carrier_quote;
	var $tbllogistics_at_localhost__tbl_rfq_items;
	var $tbllogistics_at_localhost__tbl_rfq_status;
	var $tbllogistics_at_localhost__tbl_rfqs;
	var $tbllogistics_at_localhost__tbl_sale_terms;
	var $tbllogistics_at_localhost__tbl_uom;
	var $tbllogistics_at_localhost__tbl_uom_type;
	var $tbllogistics_at_localhost__tbl_users;
	var $tbllogistics_at_localhost__test;
	var $tbllogistics_at_localhost__vw_company_addressbook;
	var $tbllogistics_at_localhost__vw_rfqs_pdf;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "formfields", "varname" => "logistics_at_localhost__formfields", "altvarname" => "formfields", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "formoptions", "varname" => "logistics_at_localhost__formoptions", "altvarname" => "formoptions", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "forms", "varname" => "logistics_at_localhost__forms", "altvarname" => "forms", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "sqlfields", "varname" => "logistics_at_localhost__sqlfields", "altvarname" => "sqlfields", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "targettransportation104_v1_audit", "varname" => "logistics_at_localhost__targettransportation104_v1_audit", "altvarname" => "targettransportation104_v1_audit", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "TargetTransportation_settings", "varname" => "logistics_at_localhost__TargetTransportation_settings", "altvarname" => "TargetTransportation_settings", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "targettransportation_uggroups", "varname" => "logistics_at_localhost__targettransportation_uggroups", "altvarname" => "targettransportation_uggroups", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "targettransportation_ugmembers", "varname" => "logistics_at_localhost__targettransportation_ugmembers", "altvarname" => "targettransportation_ugmembers", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "targettransportation_ugrights", "varname" => "logistics_at_localhost__targettransportation_ugrights", "altvarname" => "targettransportation_ugrights", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tb_activities_type", "varname" => "logistics_at_localhost__tb_activities_type", "altvarname" => "tb_activities_type", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tb_contacts", "varname" => "logistics_at_localhost__tb_contacts", "altvarname" => "tb_contacts", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tb_contacts_emails", "varname" => "logistics_at_localhost__tb_contacts_emails", "altvarname" => "tb_contacts_emails", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tb_contacts_phones", "varname" => "logistics_at_localhost__tb_contacts_phones", "altvarname" => "tb_contacts_phones", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tb_lead_source", "varname" => "logistics_at_localhost__tb_lead_source", "altvarname" => "tb_lead_source", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_address", "varname" => "logistics_at_localhost__tbl_address", "altvarname" => "tbl_address", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_address_type", "varname" => "logistics_at_localhost__tbl_address_type", "altvarname" => "tbl_address_type", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_city", "varname" => "logistics_at_localhost__tbl_city", "altvarname" => "tbl_city", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_company", "varname" => "logistics_at_localhost__tbl_company", "altvarname" => "tbl_company", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_company_areas", "varname" => "logistics_at_localhost__tbl_company_areas", "altvarname" => "tbl_company_areas", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_company_equipment", "varname" => "logistics_at_localhost__tbl_company_equipment", "altvarname" => "tbl_company_equipment", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_country", "varname" => "logistics_at_localhost__tbl_country", "altvarname" => "tbl_country", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_county", "varname" => "logistics_at_localhost__tbl_county", "altvarname" => "tbl_county", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_credit_approval_Status", "varname" => "logistics_at_localhost__tbl_credit_approval_Status", "altvarname" => "tbl_credit_approval_Status", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_currency", "varname" => "logistics_at_localhost__tbl_currency", "altvarname" => "tbl_currency", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_currency_daily_rate", "varname" => "logistics_at_localhost__tbl_currency_daily_rate", "altvarname" => "tbl_currency_daily_rate", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_documents", "varname" => "logistics_at_localhost__tbl_documents", "altvarname" => "tbl_documents", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_equipment", "varname" => "logistics_at_localhost__tbl_equipment", "altvarname" => "tbl_equipment", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_equipment_assignment", "varname" => "logistics_at_localhost__tbl_equipment_assignment", "altvarname" => "tbl_equipment_assignment", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_equipment_type", "varname" => "logistics_at_localhost__tbl_equipment_type", "altvarname" => "tbl_equipment_type", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_invoice_payments", "varname" => "logistics_at_localhost__tbl_invoice_payments", "altvarname" => "tbl_invoice_payments", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_invoices", "varname" => "logistics_at_localhost__tbl_invoices", "altvarname" => "tbl_invoices", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_lane", "varname" => "logistics_at_localhost__tbl_lane", "altvarname" => "tbl_lane", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_order_assesorial", "varname" => "logistics_at_localhost__tbl_order_assesorial", "altvarname" => "tbl_order_assesorial", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_order_items", "varname" => "logistics_at_localhost__tbl_order_items", "altvarname" => "tbl_order_items", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_order_status", "varname" => "logistics_at_localhost__tbl_order_status", "altvarname" => "tbl_order_status", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_orders", "varname" => "logistics_at_localhost__tbl_orders", "altvarname" => "tbl_orders", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_pallet_type", "varname" => "logistics_at_localhost__tbl_pallet_type", "altvarname" => "tbl_pallet_type", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_payment_terms", "varname" => "logistics_at_localhost__tbl_payment_terms", "altvarname" => "tbl_payment_terms", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_province", "varname" => "logistics_at_localhost__tbl_province", "altvarname" => "tbl_province", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_rfq_assesorial", "varname" => "logistics_at_localhost__tbl_rfq_assesorial", "altvarname" => "tbl_rfq_assesorial", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_rfq_carrier_quote", "varname" => "logistics_at_localhost__tbl_rfq_carrier_quote", "altvarname" => "tbl_rfq_carrier_quote", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_rfq_items", "varname" => "logistics_at_localhost__tbl_rfq_items", "altvarname" => "tbl_rfq_items", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_rfq_status", "varname" => "logistics_at_localhost__tbl_rfq_status", "altvarname" => "tbl_rfq_status", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_rfqs", "varname" => "logistics_at_localhost__tbl_rfqs", "altvarname" => "tbl_rfqs", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_sale_terms", "varname" => "logistics_at_localhost__tbl_sale_terms", "altvarname" => "tbl_sale_terms", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_uom", "varname" => "logistics_at_localhost__tbl_uom", "altvarname" => "tbl_uom", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_uom_type", "varname" => "logistics_at_localhost__tbl_uom_type", "altvarname" => "tbl_uom_type", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "tbl_users", "varname" => "logistics_at_localhost__tbl_users", "altvarname" => "tbl_users", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "test", "varname" => "logistics_at_localhost__test", "altvarname" => "test", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "vw_company_addressbook", "varname" => "logistics_at_localhost__vw_company_addressbook", "altvarname" => "vw_company_addressbook", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
		$this->lstTables[] = array("name" => "vw_rfqs_pdf", "varname" => "logistics_at_localhost__vw_rfqs_pdf", "altvarname" => "vw_rfqs_pdf", "connId" => "logistics_at_localhost", "schema" => "", "connName" => "target_transportation at 192.186.240.193");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( $schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>