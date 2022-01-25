<?php
class ConnectionManager_Base
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();


	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */
	protected $_tablesConnectionIds;


	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}

	/**
	 * Get connection id by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function getTableConnId( $tName )
	{
		return $this->_tablesConnectionIds[ $tName ];
	}


	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}

	/**
	 * Get connection object by the connection id
	 * @param String connId
	 * @return Connection
	 */
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) ) {
			$conn = $this->getConnection( $connId );
			if( !$conn ) {
				global $restApis;
				$conn = $restApis->getConnection( $connId );
			}
			if( !$conn ) {
				$conn = $this->getDefault();
			}
			$this->cache[ $connId ] = $conn;
		}

		return $this->cache[ $connId ];
	}

	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "logistics_at_localhost" );
	}

	/**
	 * Get the default db connection id
	 * @return String
	 */
	public function getDefaultConnId()
	{
		return "logistics_at_localhost";
	}



	/**
	 * Get the users table db connection
	 * @return Connection
	 */
	public function getForLogin() {
		return $this->byId( $this->getLoginConnId() );
	}

	public function getLoginConnId() {
		return "logistics_at_localhost";
	}


	/**
	 * Get the log table db connection
	 * @return Connection
	 */
	public function getForAudit()
	{
		return $this->byId( "logistics_at_localhost" );
	}

	/**
	 * Get the locking table db connection
	 * @return Connection
	 */
	public function getForLocking()
	{
		return $this->getDefault();
	}

	/**
	 * Get the 'ug_groups' table db connection
	 * @return Connection
	 */
	public function getForUserGroups() {
		return $this->byId( $this->getUserGroupsConnId() );
	}

	public function getUserGroupsConnId() {
		return "logistics_at_localhost";
	}

	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getForSavedSearches()
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}
	
	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getSavedSearchesConnId()
	{
		return "logistics_at_localhost";
	}	

	/**
	 * Get the webreports tables db connection
	 * @return Connection
	 */
	public function getForWebReports() 
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}

	/**
	 * Get the webreports tables db connection id
	 * @return String
	 */
	public function getWebReportsConnId() {
		return "logistics_at_localhost";
	}	
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		return false;
	}

	public function getConectionsIds()
	{
		$connectionsIds = array();
		foreach ($this->_connectionsData as $connId => $data) {
			$connectionsIds[] = $connId;
		}

		return $connectionsIds;
	}

	/**
	 * Set the data representing the project's
	 * db connection properties
	 */
	protected function _setConnectionsData()
	{
        return null;
	}

	/**
	 * Set the data representing the correspondence between
	 * the project's table names and db connections
	 */
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["tbl_uom_type"] = "logistics_at_localhost";
		$connectionsIds["tbl_uom"] = "logistics_at_localhost";
		$connectionsIds["tbl_sale_terms"] = "logistics_at_localhost";
		$connectionsIds["tbl_payment_terms"] = "logistics_at_localhost";
		$connectionsIds["tbl_pallet_type"] = "logistics_at_localhost";
		$connectionsIds["tbl_address_type"] = "logistics_at_localhost";
		$connectionsIds["tbl_country"] = "logistics_at_localhost";
		$connectionsIds["tbl_currency"] = "logistics_at_localhost";
		$connectionsIds["tbl_province"] = "logistics_at_localhost";
		$connectionsIds["tbl_currency_daily_rate"] = "logistics_at_localhost";
		$connectionsIds["admin_rights"] = "logistics_at_localhost";
		$connectionsIds["tbl_users"] = "logistics_at_localhost";
		$connectionsIds["tbl_address"] = "logistics_at_localhost";
		$connectionsIds["tbl_invoices"] = "logistics_at_localhost";
		$connectionsIds["tbl_invoice_payments"] = "logistics_at_localhost";
		$connectionsIds["tbl_documents"] = "logistics_at_localhost";
		$connectionsIds["tbl_equipment"] = "logistics_at_localhost";
		$connectionsIds["tbl_equipment_assignment"] = "logistics_at_localhost";
		$connectionsIds["tbl_equipment_type"] = "logistics_at_localhost";
		$connectionsIds["tbl_lane"] = "logistics_at_localhost";
		$connectionsIds["tbl_order_assesorial"] = "logistics_at_localhost";
		$connectionsIds["tbl_order_items"] = "logistics_at_localhost";
		$connectionsIds["tbl_order_status"] = "logistics_at_localhost";
		$connectionsIds["tbl_orders"] = "logistics_at_localhost";
		$connectionsIds["tb_activities_type"] = "logistics_at_localhost";
		$connectionsIds["tb_contacts_emails"] = "logistics_at_localhost";
		$connectionsIds["tb_contacts_phones"] = "logistics_at_localhost";
		$connectionsIds["tb_lead_source"] = "logistics_at_localhost";
		$connectionsIds["tbl_company"] = "logistics_at_localhost";
		$connectionsIds["tbl_credit_approval_Status"] = "logistics_at_localhost";
		$connectionsIds["tb_contacts"] = "logistics_at_localhost";
		$connectionsIds["tbl_city"] = "logistics_at_localhost";
		$connectionsIds["tbl_county"] = "logistics_at_localhost";
		$connectionsIds["admin_members"] = "logistics_at_localhost";
		$connectionsIds["admin_users"] = "logistics_at_localhost";
		$connectionsIds["targettransportation104_v1_audit"] = "logistics_at_localhost";
		$connectionsIds["tbl_company_equipment"] = "logistics_at_localhost";
		$connectionsIds["tbl_company_areas"] = "logistics_at_localhost";
		$connectionsIds["tbl_uomWeight"] = "logistics_at_localhost";
		$connectionsIds["tbl_uomHandling"] = "logistics_at_localhost";
		$connectionsIds["tbl_uomPackaging"] = "logistics_at_localhost";
		$connectionsIds["tbl_rfqs"] = "logistics_at_localhost";
		$connectionsIds["tbl_rfq_items"] = "logistics_at_localhost";
		$connectionsIds["tbl_rfq_assesorial"] = "logistics_at_localhost";
		$connectionsIds["tbl_address1"] = "logistics_at_localhost";
		$connectionsIds["tbl_rfq_carrier_quote"] = "logistics_at_localhost";
		$connectionsIds["tbl_rfq_status"] = "logistics_at_localhost";
		$connectionsIds["vw_company_addressbook"] = "logistics_at_localhost";
		$connectionsIds["vw_contacts"] = "logistics_at_localhost";
		$connectionsIds["formfields"] = "logistics_at_localhost";
		$connectionsIds["forms"] = "logistics_at_localhost";
		$connectionsIds["test"] = "logistics_at_localhost";
		$connectionsIds["sqlfields"] = "logistics_at_localhost";
		$connectionsIds["formoptions"] = "logistics_at_localhost";
		$connectionsIds["vw_rfqs_pdf"] = "logistics_at_localhost";
		$connectionsIds["tbl_uomDim"] = "logistics_at_localhost";

		$this->_tablesConnectionIds = &$connectionsIds;
	}

	/**
	 * Check if It's possible to add to one table's sql query
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];

		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;

		return true;
	}

	/**
	 * Close db connections
    */
	function CloseConnections()
	{
		foreach( $this->cache as $connection )
		{
			if( $connection )
				$connection->close();
		}
	}
}
?>