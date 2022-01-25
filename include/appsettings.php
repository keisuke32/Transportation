<?php
$dDebug = false;
$dSQL = "";

$tables_data = array();
$page_layouts = array();
$page_options = array();
$pd_pages = array();
$all_pd_layouts = array();
$field_labels = array();
$fieldToolTips = array();
$page_titles = array();
$placeHolders = array();
$all_page_layouts = array();
$all_page_types = null;
$all_pages = null;
$detailsTablesData = array();
$masterTablesData = array();

// .NET convertor needs this
$tdataGLOBAL = array();
$pages = array();
$defaultPages = array();
$topsArray = array();

/**
 * Breadcrumb label templates

 *	Label without master table
 *	$breadcrumb_titles[<language>][<table>][<page>]["."] = "..."

 *	Label with master active
 *	$breadcrumb_titles[<language>][<table>][<page>][<master>] = "..."

 *	Label for the page with no table
 *	$breadcrumb_titles[<language>]["."][<page>]["."] = "..."
 */
$breadcrumb_labels = array();


$lookupTableLinks = array();

$_gmdays = array(0=>31,1=>31,2=>28,3=>31,4=>30,5=>31,6=>30,7=>31,8=>31,9=>30,10=>31,11=>30,12=>31);

include(getabspath('classes/layout.php'));
include(getabspath('classes/pdlayout.php'));


//	custom labels
$custom_labels = array();
$custom_labels["English"] = array();
	$custom_labels["English"]['inline_add'] = "Add";
	$custom_labels["English"]['inlineadd'] = "Add";

define('GLOBAL_PAGES_SHORT', ".global");
define('GLOBAL_PAGES', "<global>");

/**
 *  Define constants of page name
 */
define('PAGE_LIST',"list");
define('PAGE_MASTER_INFO_LIST',"masterlist");
define('PAGE_ADD',"add");
define('PAGE_EDIT',"edit");
define('PAGE_VIEW',"view");
define('PAGE_MENU',"menu");
define('PAGE_LOGIN',"login");
define('PAGE_REGISTER',"register");
define('PAGE_REMIND',"remind");
define('PAGE_REMIND_SUCCESS',"remind_success");
define('PAGE_CHANGEPASS',"changepwd");
define('PAGE_SEARCH',"search");
define('PAGE_REPORT',"report");
define('PAGE_MASTER_INFO_REPORT',"masterreport");
define('PAGE_CHART',"chart");
define('PAGE_PRINT',"print");
define('PAGE_MASTER_INFO_PRINT',"masterprint");
define('PAGE_RPRINT',"rprint");
define('PAGE_MASTER_INFO_RPRINT',"masterrprint");
define('PAGE_EXPORT',"export");
define('PAGE_IMPORT',"import");
define('PAGE_INLINEADD',"inlineadd");
define('PAGE_INLINEEDIT',"inlineedit");
define('PAGE_DASHBOARD',"dashboard");
define('PAGE_DASHMAP', "map");
define('PAGE_ADMIN_RIGHTS', "admin_rights_list");
define('PAGE_ADMIN_MEMBERS', "admin_members_list");
define('PAGE_ADMIN_ADMEMBERS', "admin_admembers_list");
define('PAGE_USERINFO',"userinfo");

define('ADMIN_USERS',"admin_users");


define('FORMAT_VIEW',"ViewFormats");
define('FORMAT_EDIT',"EditFormats");
/**
 *  Define constants of view format
 */
define("FORMAT_NONE","");
define("FORMAT_DATE_SHORT","Short Date");
define("FORMAT_DATE_LONG","Long Date");
define("FORMAT_DATE_TIME","Datetime");
define("FORMAT_TIME","Time");
define("FORMAT_CURRENCY","Currency");
define("FORMAT_PERCENT","Percent");
define("FORMAT_HYPERLINK","Hyperlink");
define("FORMAT_EMAILHYPERLINK","Email Hyperlink");
define("FORMAT_FILE_IMAGE","File-based Image");
define("FORMAT_FILE_IMAGE_OLD","Old file-based Image");
define("FORMAT_DATABASE_IMAGE","Database Image");
define("FORMAT_DATABASE_FILE","Database File");
define("FORMAT_FILE","Document Download");
define("FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("FORMAT_PHONE_NUMBER","Phone Number");
define("FORMAT_NUMBER","Number");
define("FORMAT_HTML","HTML");
define("FORMAT_CHECKBOX","Checkbox");
define("FORMAT_MAP","Map");
define("FORMAT_CUSTOM","Custom");
define("FORMAT_AUDIO", "Audio file");
define("FORMAT_DATABASE_AUDIO", "Database audio");
define("FORMAT_VIDEO", "Video file");
define("FORMAT_VIDEO_HTML5", "Video file HTML5");
define("FORMAT_DATABASE_VIDEO", "Database video");
/**
 *  Define constants of edit format
 */
define("EDIT_FORMAT_NONE","");
define("EDIT_FORMAT_TEXT_FIELD","Text field");
define("EDIT_FORMAT_TEXT_AREA","Text area");
define("EDIT_FORMAT_PASSWORD","Password");
define("EDIT_FORMAT_DATE","Date");
define("EDIT_FORMAT_TIME","Time");
define("EDIT_FORMAT_RADIO","Radio button");
define("EDIT_FORMAT_CHECKBOX","Checkbox");
define("EDIT_FORMAT_DATABASE_IMAGE","Database image");
define("EDIT_FORMAT_DATABASE_FILE","Database file");
define("EDIT_FORMAT_FILE","Document upload");
define("EDIT_FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("EDIT_FORMAT_HIDDEN","Hidden field");
define("EDIT_FORMAT_READONLY","Readonly");

define("EDIT_DATE_SIMPLE",0);
define("EDIT_DATE_SIMPLE_INLINE",2);
define("EDIT_DATE_SIMPLE_DP",11);
define("EDIT_DATE_DD",12);
define("EDIT_DATE_DD_INLINE",5);
define("EDIT_DATE_DD_DP",13);

define("MODE_ADD",0);
define("MODE_EDIT",1);
define("MODE_SEARCH",2);
define("MODE_LIST",3);
define("MODE_PRINT",4);
define("MODE_VIEW",5);
define("MODE_INLINE_ADD",6);
define("MODE_INLINE_EDIT",7);
define("MODE_EXPORT",8);

define("LOGIN_HARDCODED",0);
define("LOGIN_TABLE",1);
define("LOGIN_AD",2);

define("SECURITY_NONE",-1);
define("SECURITY_HARDCODED", 0);
define("SECURITY_TABLE", 1);
define("SECURITY_AD", 2);

define("ADVSECURITY_ALL",0);
define("ADVSECURITY_VIEW_OWN",1);
define("ADVSECURITY_EDIT_OWN",2);
define("ADVSECURITY_NONE",3);

define("ACCESS_LEVEL_ADMIN","Admin");
define("ACCESS_LEVEL_ADMINGROUP","AdminGroup");
define("ACCESS_LEVEL_USER","User");
define("ACCESS_LEVEL_GUEST","Guest");

define("nDATABASE_MySQL",0);
define("nDATABASE_Oracle",1);
define("nDATABASE_MSSQLServer",2);
define("nDATABASE_Access",3);
define("nDATABASE_PostgreSQL",4);
define("nDATABASE_Informix",5);
define("nDATABASE_SQLite3",6);
define("nDATABASE_DB2",7);
define("nDATABASE_Interbase", 16);
define("nDATABASE_REST", 19 );

define("ADD_SIMPLE",0);
define("ADD_INLINE",1);
define("ADD_ONTHEFLY",2);
define("ADD_MASTER",3);
define("ADD_POPUP",4);
define("ADD_DASHBOARD",5);
define("ADD_MASTER_POPUP",6);
define("ADD_MASTER_DASH",7);

//	Edit page modes
define("EDIT_SIMPLE",0); 	//	standalone Edit page
define("EDIT_INLINE",1);	//	inlineEdit
define("EDIT_POPUP",3);		//	edit page in popup
define("EDIT_DASHBOARD",4);	//	edit page in dashboard
define("EDIT_SELECTED_SIMPLE",5);
define("EDIT_SELECTED_POPUP",6);


//	View page modes
define("VIEW_SIMPLE",0); 	//	standalone View page
define("VIEW_POPUP",1); 	//	View page in popup
define("VIEW_DASHBOARD",2); 	//	View page in dashboard
define("VIEW_PDFJSON",3); 	//	prepare json for PDF

define("LOGIN_SIMPLE", 0);
define("LOGIN_POPUP", 1);
define("LOGIN_EMBEDED", 2);

define("REGISTER_SIMPLE", 0);
define("REGISTER_POPUP", 1);

define("REMIND_SIMPLE", 0);
define("REMIND_POPUP", 1);

define("EXPORT_SIMPLE", 0);
define("EXPORT_POPUP", 1);

define("EXPORT_RAW", 0);
define("EXPORT_FORMATTED", 1);
define("EXPORT_BOTH", 2);


define("CHANGEPASS_SIMPLE", 0);
define("CHANGEPASS_POPUP", 1);

define("USERINFO_SIMPLE", 0 );
define("USERINFO_2FACTOR", 1 );

define("titTABLE",0);
define("titVIEW",1);
define("titREPORT",2);
define("titCHART",3);
define("titDASHBOARD",4);
define("titSQL",6);
define("titREST",7);
define("titSQL_REPORT",8);
define("titSQL_CHART",9);
define("titREST_REPORT",10);
define("titREST_CHART",11);

define("TAB_TYPE_TAB", 0);
define("TAB_TYPE_SECTION", 1);
define("TAB_TYPE_STEP", 2);

// for report lib
define("REPORT_STEPPED", 0);
define("REPORT_BLOCK", 1);
define("REPORT_OUTLINE", 2);
define("REPORT_ALIGN", 3);
define("REPORT_TABULAR", 6);

define("TOTAL_NONE", -1);
define("TOTAL_MAX", 0);
define("TOTAL_AVG", 1);
define("TOTAL_SUM", 3);
define("TOTAL_MIN", 4);

define("LIST_SIMPLE",0);
define("LIST_LOOKUP",1);
define("LIST_DETAILS",3);
define("LIST_AJAX",4);
define("RIGHTS_PAGE", 5);
define("MEMBERS_PAGE", 6);
define("LIST_DASHBOARD", 7);
define("LIST_DASHDETAILS", 8);
define("MAP_DASHBOARD", 9);
define("LIST_MASTER",10);
define("PRINT_MASTER",11);
define("LIST_POPUPDETAILS",12);
define("PRINT_SIMPLE",13);
define("PRINT_PDFJSON",14); 	//	prepare json for PDF
define("LIST_PDFJSON",15); 	//	prepare details table json for PDF



define("REPORT_SIMPLE", 0);
define("REPORT_POPUPDETAILS", 1);
define("REPORT_DASHBOARD", 2);
define("REPORT_DETAILS", 3);
define("REPORT_DASHDETAILS", 4);

define("CHART_SIMPLE", 0);
define("CHART_POPUPDETAILS", 1);
define("CHART_DASHBOARD", 2);
define("CHART_DETAILS", 3);
define("CHART_DASHDETAILS", 4);

define("DP_POPUP",0);
define("DP_INLINE",1);
define("DP_NONE",2);

define("DL_SINGLE",0);
define("DL_INDIVIDUAL",1);
define("DL_NONE",2);

define("SEARCH_SIMPLE", 0);
define("SEARCH_LOAD_CONTROL", 1);
define("SEARCH_DASHBOARD", 2);
define("SEARCH_POPUP", 3);

define("LCT_DROPDOWN",0);
define("LCT_AJAX",1);
define("LCT_LIST",2);
define("LCT_CBLIST",3);
define("LCT_RADIO",4);

define("LT_LISTOFVALUES",0);
// lookup table is not added to the project
define("LT_LOOKUPTABLE",1);
define("LT_QUERY", 2);

define("ENCRYPTION_NONE", 0);
define("ENCRYPTION_DB", 1);
define("ENCRYPTION_PHP", 2);
define("ENCRYPTION_ALG_DES", 1);
define("ENCRYPTION_ALG_AES", 128);
define("ENCRYPTION_ALG_AES_256", 256);

define("SETTING_TYPE_GLOBAL", "global");
define("SETTING_TYPE_VIEW", "view");
define("SETTING_TYPE_EDIT", "edit");

define('otNone',0);
define('otUseMobile',1);
define('otUseDesktop',2);


define("CONTAINS", "Contains");
define("EQUALS", "Equals");
define("STARTS_WITH", "Starts with");
define("MORE_THAN", "More than");
define("LESS_THAN", "Less than");
define("BETWEEN", "Between");
define("EMPTY_SEARCH", "Empty");
define("NOT_CONTAINS", "NOT Contains");
define("NOT_EQUALS", "NOT Equals");
define("NOT_STARTS_WITH", "NOT Starts with");
define("NOT_MORE_THAN", "NOT More than");
define("NOT_LESS_THAN", "NOT Less than");
define("NOT_BETWEEN", "NOT Between");
define("NOT_EMPTY", "NOT Empty");

define("SEARCHID_SIMPLE", 1);
define("SEARCHID_PANEL", 10);
define("SEARCHID_ALL", 10000);


/* Define constants for the filters settings */
//fiter totals
define("FT_NONE", 0);
define("FT_COUNT", 1);
define("FT_MIN", 2);
define("FT_MAX", 3);
//filter multiselect
define("FM_NONE", 0);
define("FM_ON_DEMAND", 1);
define("FM_ALWAYS", 2);
//filter format
define("FF_VALUE_LIST", "Values list");
define("FF_BOOLEAN", "Options list");
define("FF_INTERVAL_LIST", "Interval list");
define("FF_INTERVAL_SLIDER", "Interval slider");
//define filter interval limits' constants
define("FIL_NONE", 0);
define("FIL_MORE_THAN", 1);
define("FIL_LESS_THAN", 1);
define("FIL_LESS_THAN_OR_EQUAL", 2);
define("FIL_MORE_THAN_OR_EQUAL", 2);
define("FIL_REMAINDER", 3);
//define slider filter constants
define("FS_BOTH", 0);
define("FS_MIN_ONLY", 1);
define("FS_MAX_ONLY", 2);
//define slider step types
define("FSST_SECONDS", 0);
define("FSST_MINUTES", 1);
define("FSST_HOURS", 2);
define("FSST_DAYS", 3);
define("FSST_MONTHS", 4);
define("FSST_YEARS", 5);
//sorting constants
define('SORT_BY_DISP_VALUE', 0);
define('SORT_BY_DB_VALUE', 1);
define('SORT_BY_GR_VALUE', 2);
/**/


define("gltHORIZONTAL", 0);
define("gltVERTICAL", 1);
define("gltCOLUMNS", 2);
define("gltFLEXIBLE", 3);

/* Define comstamts for hidden columns devices*/
define("DESKTOP", 1);
define("TABLET_10_IN", 2);
define("TABLET_7_IN", 3);
define("SMARTPHONE_LANDSCAPE", 4);
define("SMARTPHONE_PORTRAIT", 5);
/**/

/* Dashboard types */
define("DASHBOARD_LIST", 0);
define("DASHBOARD_CHART", 1);
define("DASHBOARD_REPORT", 2);
define("DASHBOARD_RECORD", 3);
define("DASHBOARD_SEARCH", 4);
define("DASHBOARD_DETAILS", 5);
define("DASHBOARD_MAP", 6);
define("DASHBOARD_SNIPPET", 7);
/**/

/* Define message type constants */
define("MESSAGE_INFO", 1);
define("MESSAGE_ERROR", 2);

/* Define ML String type constants */
define("ML_TEXT", 0);
define("ML_CUSTOM_LABEL", 1);
define("ML_MESSAGE", 2);


/* Define print page and pdf page constants */
define("PRINT_PAGE_WIDTH", 700);
define("PRINT_PAGE_HEIGHT", 900);
define("PDF_PAGE_WIDTH", 750);
define("PDF_PAGE_HEIGHT", 1060);

/* Defined maps type */
define("GOOGLE_MAPS", 0);
define("OPEN_STREET_MAPS", 1);
define("BING_MAPS", 2);
define("HERE_MAPS", 3);
define("MAPQUEST_MAPS", 4);

/* Defined captcha type */
define("FLASH_CAPTCHA", 0);
define("RE_CAPTCHA", 1);

/* Define 'after record added/edited actions' constants*/
define("AA_TO_LIST", 0);
define("AA_TO_ADD", 1);
define("AA_TO_VIEW", 2);
define("AA_TO_EDIT", 3);
define("AA_TO_DETAIL_ADD", 4);
define("AA_TO_DETAIL_LIST", 5);

define("AE_TO_LIST", 0);
define("AE_TO_EDIT", 1);
define("AE_TO_VIEW", 2);
define("AE_TO_NEXT_EDIT", 3);
define("AE_TO_PREV_EDIT", 4);
define("AE_TO_DETAIL_LIST", 5);
/**/

define('BOOTSTRAP_LAYOUT', 3);
define('PD_BS_LAYOUT', 4); // temp

define('ICON_NONE', 0);
define('ICON_FILE', 1);
define('ICON_BOOTSTRAP_GLYPH', 2);
define('ICON_FONT_AWESOME', 3);


define('WELCOME_MENU', "welcome_page");

define('MENU_VERTICAL', "v");
define('MENU_HORIZONTAL', "h");
define('MENU_QUICKJUMP', "q");

// paramsLogger types
define('SSEARCH_PARAMS_TYPE', 1);
define('CRESIZE_PARAMS_TYPE', 2);
define('SHFIELDS_PARAMS_TYPE', 3);
define('FORDER_PARAMS_TYPE', 4);

// remind password method
define('RPM_SEND', 'SEND');
define('RPM_RESET', 'RESET');

define('CONTEXT_GLOBAL', 0);	//	global context
define('CONTEXT_PAGE', 1);		//	page where pageObject is available
define('CONTEXT_BUTTON', 2);	// 	button or other AJAX event
define('CONTEXT_LOOKUP', 3);	//	dependent lookup
define('CONTEXT_ROW', 4);		// 	processing grid row on multiple-records page (list)
define('CONTEXT_COMMAND', 5);	// 	DsCommand context
define('CONTEXT_SEARCH', 6);	// 	Search object context
define('CONTEXT_MASTER', 7);	// 	Master-details context

define('BOTH_RECORDS', 0);
define('NEXT_RECORD', 1);
define('PREV_RECORD', 2);

// login form types
define('LOGIN_SEPARATE', 0);
//define('LOGIN_POPUP', 1);
//define('LOGIN_EMBEDED', 2);
define('NO_LOGIN', 3);

define('MEDIA_DESKTOP', 0);
define('MEDIA_MOBILE', 1);
define('MEDIA_MOBILE_EXPANDED', 2);

define('WEBREPORTS_TABLE', "{04AFFBE6-86C0-47b0-ADD3-BA7FA19CA6FC}" );

define('REST_BASIC', 1);
define('REST_APIKEY', 2);
define('REST_JWT', 3);
define('REST_OAUTH', 4);

define("TIME_FORMAT_TIME_OF_DAY", 0);
define("TIME_FORMAT_DURATION", 1);

// user session levels
define("LOGGED_NONE", 0 );
//	logged in
define("LOGGED_FULL", 1 );
//	user has entered username & password, has to do 2factor authentication
define("LOGGED_2F_PENDING", 2 );
//	user has logged in, must setup 2factor authentication
define("LOGGED_2FSETUP_PENDING", 3 );
//	user has logged in, acount not activated, must confirm email address
define("LOGGED_ACTIVATION_PENDING", 4 );


$globalSettings = array();
$g_defaultOptionValues = array();
$g_settingsType = array();

$globalSettings["nLoginMethod"] = 1;

$twilioSID = "AC67e7b4e132b8e6b16571134c0915ce97";
$twilioAuth = "c2d3675074a5139dcd4ada08409e2e67";
$twilioNumber = "+15138453680";
$globalSettings["bTwoFactorAuth"] = false;

/**
 * An option to be added to the wizard
 * Controls 'Remeber me' option
 */
$globalSettings["keepLoggedIn"] = true;

$globalSettings["bEncryptPasswords"] = true;
$globalSettings["nEncryptPasswordMethod"] = "1";




//mail settings
$globalSettings["useBuiltInMailer"] = false;

$globalSettings["useCustomSMTPSettings"] = true;

$globalSettings["strSMTPUser"] = "noreply@target.1224665bc.com";
$globalSettings["strSMTPServer"] = "p3plcpnl0164.prod.phx3.secureserver.net";
$globalSettings["strSMTPPort"] = "465";
$globalSettings["strSMTPPassword"] = "X(0ISN?Ue8?j";
$globalSettings["strFromEmail"] = "noreply@target.1224665bc.com";

//


$ajaxSearchStartsWith = true;

$globalSettings["isDynamicPerm"] = true;




$globalSettings["LandingPageType"] = 0;
$globalSettings["LandingTable"] = "";
$globalSettings["LandingPage"] = "";
$globalSettings["LandingURL"] = "";
$globalSettings["LandingPageId"] = "";

$globalSettings["ProjectLogo"] = array();
$globalSettings["ProjectLogo"]["English"] = "<a href=\"http://www.shipwithtarget.com/\" class=\"home-link\">
    <img width=\"75%\" height= \"75%\" alt=\"Home\" src=\"http://www.shipwithtarget.com/images/target_logo.png\">
</a>";

$globalSettings["CookieBanner"] = array();

$globalSettings["useCookieBanner"] = 0 != 0;


$globalSettings["createLoginPage"] = true;
$globalSettings["userGroupCount"] = 1;


$globalSettings["apiGoogleMapsCode"] = "";

$globalSettings["useEmbedMapsAPI"] = 1 != 0;

$globalSettings["SpUserIdField"] = "";

	
	
//password global settings for register page
$globalSettings["pwdStrong"] = true;
$globalSettings["pwdLen"] = 8;
$globalSettings["pwdUnique"] = 4;
$globalSettings["pwdDigits"] = 2;
$globalSettings["pwdUpperLower"] = true;


/**
 * If true then detail table name will be printed before detail table on the view page
 * @var {bool}
 */
$globalSettings["printDetailTableName"] = true;

/**
 * Alias for custom expression in display field in ListPage_Lookup
 * @var {string}
 */
$globalSettings["dispFieldAlias"] = "rrdf1";

/**
 * If true then search suggest result will be handled in Lookup control
 * @var {bool}
 */
$globalSettings["handleSearchSuggestInLookup"] = true;

/**
 * Maximum size of search suggest result string
 * @var {int}
 */
$globalSettings["suggestStringSize"] = 40;

/**
 * The number of seach suggests displayed
 */
$globalSettings["searchSuggestsNumber"] = 10;

$globalSettings["override"] = array();


$styleOverrides = array();

$styleOverrides["tbl_company_view"] = array(
	"theme" => "journal",
	"size" => "small",
	"path" => "styles\\bootstrap\\custom\\tbl_company_view",
);
$styleOverrides["tbl_orders_add"] = array(
	"theme" => "journal",
	"size" => "small",
	"path" => "styles\\bootstrap\\custom\\tbl_company_view",
);
$styleOverrides["tbl_orders_search"] = array(
	"theme" => "journal",
	"size" => "small",
	"path" => "styles\\bootstrap\\custom\\tbl_company_view",
);
$styleOverrides["tbl_orders_edit"] = array(
	"theme" => "journal",
	"size" => "small",
	"path" => "styles\\bootstrap\\custom\\tbl_company_view",
);

$globalSettings["mapProvider"]=0;
//$globalSettings["mapProvider"] = HERE_MAPS;
//$globalSettings["mapProvider"] = MAPQUEST_MAPS;

$globalSettings["CaptchaSettings"] = array();
$globalSettings["CaptchaSettings"]["type"] = 1;
$globalSettings["CaptchaSettings"]["siteKey"] = "6LfZU_kZAAAAAJv-mOl0U-1sDOoDaNKj7Is2bKqZ";
$globalSettings["CaptchaSettings"]["secretKey"] = "6LfZU_kZAAAAABKjs7Q-ph0Ze4hz0uRqhNh_jb7k";
$globalSettings["CaptchaSettings"]["captchaPassesCount"] = "5";


$bsProjectTheme = "journal";
$bsProjectSize = "normal";

$wr_pagestylepath = "OfficeOffice";
$wr_is_standalone = false;
$WRAdminPagePassword = "";

$cLoginTable = "tbl_users";
$cDisplayNameField = "Name";
$cUserNameField	= "Login";
$cPasswordField	= "Password";
$cUserGroupField = "Login";
$cEmailField = "Email";
$cUserpicField = "Picture";
$cKeyFields = array();
$cKeyFields[] = "ID";
$globalSettings["usersTableInProject"] = true;
$globalSettings["usersDatasourceTable"] = "tbl_users";


$globalSettings["jwtSecret"] = "H87yUIQ3lEWTDyvSok0F";

if( $cDisplayNameField == '' )
	$cDisplayNameField = $cUserNameField;

$cDisplayNameFieldType	= 200;
$cUserNameFieldType	= 200;
$cPasswordFieldType	= 200;
$cEmailFieldType = 200;

$arrCustomPages = array();

																														$cUserNameFieldType	= 200;
												$cPasswordFieldType	= 200;
																														$cEmailFieldType = 200;
																																																																																																			
$gPermissionsRefreshTime = 1;
$gPermissionsRead = false;

//	-1 - undetermined, 0 - nah, 1 - yep
$gGuestHasPermissions = -1;

$useAJAX = true;
$suggestAllContent = true;

$strLastSQL = "";
$showCustomMarkerOnPrint = false;

$projectBuildKey = "512_1611202168";
$wizardBuildKey = "36520";
$projectBuildNumber = "512";

$mlang_messages = array();
$mlang_charsets = array();


$projectMenus = array();
$projectMenus[] = "main";
$projectMenus[] = "secondary";


$menuTreelikeFlags = array();
$menuTreelikeFlags["main"] = 1;


$menuTreelikeFlags["secondary"] = 1;



// table captions
$tableCaptions = array();
$tableCaptions["English"] = array();
$tableCaptions["English"]["tbl_uom_type"] = "Unit of Measure Type";
$tableCaptions["English"]["tbl_uom"] = "Unit of Measure";
$tableCaptions["English"]["tbl_sale_terms"] = "Sale Terms";
$tableCaptions["English"]["tbl_payment_terms"] = "Payment Terms";
$tableCaptions["English"]["tbl_pallet_type"] = "Pallet Type";
$tableCaptions["English"]["tbl_address_type"] = "Address Type";
$tableCaptions["English"]["tbl_country"] = "Country";
$tableCaptions["English"]["tbl_currency"] = "Currency";
$tableCaptions["English"]["tbl_province"] = "Province/State";
$tableCaptions["English"]["tbl_currency_daily_rate"] = "Currency Daily Rate";
$tableCaptions["English"]["admin_rights"] = "Admin Rights";
$tableCaptions["English"]["tbl_users"] = "Users";
$tableCaptions["English"]["tbl_address"] = "Address";
$tableCaptions["English"]["tbl_invoices"] = "Invoices";
$tableCaptions["English"]["tbl_invoice_payments"] = "Invoice Payments";
$tableCaptions["English"]["tbl_documents"] = "Documents";
$tableCaptions["English"]["tbl_equipment"] = "Equipment";
$tableCaptions["English"]["tbl_equipment_assignment"] = "Equipment Assignment";
$tableCaptions["English"]["tbl_equipment_type"] = "Equipment Type";
$tableCaptions["English"]["tbl_lane"] = "Lane";
$tableCaptions["English"]["tbl_order_assesorial"] = "Order Assesorial";
$tableCaptions["English"]["tbl_order_items"] = "Order Items";
$tableCaptions["English"]["tbl_order_status"] = "Order Status";
$tableCaptions["English"]["tbl_orders"] = "Orders";
$tableCaptions["English"]["tb_activities_type"] = "Activity Types";
$tableCaptions["English"]["tb_contacts_emails"] = "Contacts Emails";
$tableCaptions["English"]["tb_contacts_phones"] = "Contacts Phones";
$tableCaptions["English"]["tb_lead_source"] = "Lead Source";
$tableCaptions["English"]["tbl_company"] = "Company";
$tableCaptions["English"]["tbl_credit_approval_Status"] = "Credit Approval Status";
$tableCaptions["English"]["tb_contacts"] = "Contacts";
$tableCaptions["English"]["tbl_city"] = "City";
$tableCaptions["English"]["tbl_county"] = "County";
$tableCaptions["English"]["admin_members"] = "Admin Members";
$tableCaptions["English"]["admin_users"] = "Add/Edit users";
$tableCaptions["English"]["targettransportation104_v1_audit"] = "Audit Log";
$tableCaptions["English"]["tbl_company_equipment"] = "Company Equipment";
$tableCaptions["English"]["tbl_company_areas"] = "Country Areas";
$tableCaptions["English"]["tbl_uomWeight"] = "Weight UOM ";
$tableCaptions["English"]["tbl_uomHandling"] = "Handling UOM ";
$tableCaptions["English"]["tbl_uomPackaging"] = "Packaging UOM ";
$tableCaptions["English"]["tbl_rfqs"] = "Request for Quotations";
$tableCaptions["English"]["tbl_rfq_items"] = "RFQ Items";
$tableCaptions["English"]["tbl_rfq_assesorial"] = "RFQ Assesorial";
$tableCaptions["English"]["tbl_address1"] = "Address";
$tableCaptions["English"]["tbl_rfq_carrier_quote"] = "Carrier Quotation";
$tableCaptions["English"]["tbl_rfq_status"] = "Tbl Rfq Status";
$tableCaptions["English"]["vw_company_addressbook"] = "Vw Company Addressbook";
$tableCaptions["English"]["vw_contacts"] = "Vw Contacts";
$tableCaptions["English"][""] = "";
$tableCaptions["English"]["formfields"] = "Fields";
$tableCaptions["English"]["forms"] = "Forms";
$tableCaptions["English"]["test"] = "Test";
$tableCaptions["English"]["sqlfields"] = "Sqlfields";
$tableCaptions["English"]["formoptions"] = "Settings";
$tableCaptions["English"]["vw_rfqs_pdf"] = "Vw Rfqs Pdf";
$tableCaptions["English"]["tbl_uomDim"] = "Tbl UomDim";


$globalEvents = new class_GlobalEvents;
$tableEvents = array();
$dalTables = array();
$tableinfo_cache = array();

$projectLanguage = "php";

require_once( getabspath('classes/labels.php') );
require_once( getabspath('classes/security.php') );
require_once( getabspath("connections/dbfunctions_legacy.php") );
require_once( getabspath("classes/datasource/httprequest.php") );
require_once( getabspath("connections/ConnectionManager.php") );
require_once( getabspath("connections/apis.php") );
include(getabspath('classes/searchclause.php'));
include(getabspath('classes/projectsettings.php'));
include_once(getabspath('classes/runnerpage.php'));
include_once(getabspath("classes/controls/ViewControl.php"));
require_once( getabspath('classes/db.php') );
require_once( getabspath('classes/context.php') );
require_once(getabspath("classes/cipherer.php"));
require_once( getabspath('classes/wheretabs.php') );
require_once( getabspath('classes/datasource/datacontext.php') );

$pageTypesForView = array();
$pageTypesForView[] = "list";
$pageTypesForView[] = "view";
$pageTypesForView[] = "export";
$pageTypesForView[] = "print";
$pageTypesForView[] = "report";
$pageTypesForView[] = "rprint";
$pageTypesForView[] = "chart";

$pageTypesForEdit = array();
$pageTypesForEdit[] = "add";
$pageTypesForEdit[] = "edit";
$pageTypesForEdit[] = "search";
$pageTypesForEdit[] = "register";


$projectEntities = array();
$projectEntitiesReverse = array();
$tablesByGoodName = array();
$tablesByUpperCase = array();
$tablesByUpperGoodname = array();


$contextStack = new RunnerContext;

$cman = new ConnectionManager();
$restApis = new RestManager();
$restResultCache = array();

/**
 * substitute for $_SESSION when in REST API (stateless) mode
 */
$restStorage = array();

$currentConnection = null;

$mlang_defaultlang = getDefaultLanguage();

include(getabspath("include/languages.php"));

$mediaType = $_COOKIE["mediaType"];
$mediaType = $mediaType ? $mediaType : 0;



$page_titles[GLOBAL_PAGES_SHORT] = array();
if(mlang_getcurrentlang()=="English")
{
}

$globalSettings["showDetailedError"] = true;



// SearchClause::getSearchObject
$_cachedSeachClauses = array();

$auditMaxFieldLength = 300;
$mysqlSupportDates0000 = false;

$csrfProtectionOff = false;

// here goes EVENT_INIT_APP event
if ($_REQUEST["debug"]=="true")
$dDebug=true;

// Place event code here.
// Use "Add Action" button to add code snippets.

// PDFForms template - begin
require_once("include/pdfform_functions.php");
$rs = DB::Query("select * from formoptions");
if($data = $rs->fetchAssoc()){
	if(strpos(php_uname(),"Windows")!==false && !$data["pdfpath"]){
		DB::Exec("update formoptions set pdfpath='pdftk/pdftk.exe'");
	}
}
// PDFForms template - end

;


// default connection link #9875
$conn = $cman->getDefault()->conn;


//	delete old username & password cookies
if( $_COOKIE["password"] ) {
	runner_setcookie("username", "", time() - 1, "", "", false, false);
	runner_setcookie("password", "", time() - 1, "", "", false, false);
}


$logoutPerformed = false;
Security::autoLoginAsGuest();



$isGroupSecurity = true;

$isUseRTEBasic = true;

$isUseRTECK = false;

$isUseRTEInnova = false;

$caseInsensitiveUsername = 0;


$menuNodesIndex=0;

/**
 *	Sundry data the page classes want pass to their JS counterparts
 *
 *	$pagesData[<pageid>] = array( 	<key> => <value>
 *									<key> => <value> ... )
 *					)
 */
$pagesData = array();

$pageInConstruction = null;

?>