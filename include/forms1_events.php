<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_forms1  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["BeforeShowEdit"]=true;


		$this->events["BeforeProcessEdit"]=true;

		$this->events["ProcessValuesEdit"]=true;

		$this->events["BeforeEdit"]=true;

		$this->events["AfterDelete"]=true;

		$this->events["BeforeProcessAdd"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["AfterEdit"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		$arrfile = my_json_decode($values["formfile"]);

if($arrfile[0]["type"] == "application/pdf"){
	$fname = $arrfile[0]["name"];
	$name = str_replace(".pdf","",$fname);
	exec($_SESSION["pdftkpath"]." \"".getabspath($fname)."\" dump_data_fields_utf8 output \"".getabspath($name.".txt")."\"");
	$handle = fopen($name.".txt", "r");
	$isText = false;
	while (!feof($handle)) {
		$buffer = fgets($handle);
		if(strpos($buffer,"FieldType:") !== false){
			$isText = true;
		}
		if(strpos($buffer,"FieldName:") !== false && strpos($buffer,"FieldName:") == 0 && $isText){
				$fname = trim(substr($buffer,11));
		}
		if(strpos($buffer,"FieldNameAlt:") !== false && strpos($buffer,"FieldNameAlt:") == 0 && $isText){
			$fnamealt = trim(substr($buffer,14));
			DB::Exec("insert into formfields (formid, fieldformalt, fieldform) values (".$keys["id"].",'".$fnamealt."','".$fname."')");
			$lastid = DB::LastId();
			$isText = false;
		}
		if(strpos($buffer,"FieldFlags:") !== false && strpos($buffer,"FieldFlags:") == 0 && $isText){
			DB::Exec("insert into formfields (formid, fieldformalt, fieldform) values (".$keys["id"].",'".$fname."','".$fname."')");
			$lastid = DB::LastId();
			$isText = false;
		}
		if (strpos($buffer,"FieldStateOption:") !== false && strpos($buffer,"FieldStateOption:") == 0){
			if(strpos($buffer,"Off") !== false){
				DB::Exec("update formfields set cboxoff='".trim(substr($buffer,18))."' where id=".$lastid);
				$buffer = fgets($handle);
				$l = strlen($buffer);
				DB::Exec("update formfields set cboxon='".trim(substr($buffer,18))."' where id=".$lastid);
			}
			else{
				DB::Exec("update formfields set cboxon='".trim(substr($buffer,18))."' where id=".$lastid);
				$buffer = fgets($handle);
				DB::Exec("update formfields set cboxoff='".trim(substr($buffer,18))."' where id=".$lastid);
			}
			
		}
	}
	fclose($handle);
	unlink(getabspath($name.".txt"));
	header("Location: forms_edit.php?editid1=".$keys["id"]);
	exit();
}

;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, $pageObject)
{

		$pageObject->AddCSSFile("include/fancybox/jquery.fancybox.css");
$pageObject->AddJSFile("include/fancybox/jquery.fancybox.pack.js");
;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
				// Edit page: Before process
function BeforeProcessEdit($pageObject)
{

		$_SESSION["formid"] = postvalue("editid1");
$rs = DB::Query("select * from formoptions");
if($data = $rs->fetchAssoc()){
	if(strpos(php_uname(),"Windows")!==false)
		$_SESSION["pdftkpath"] = getabspath($data["pdfpath"]);
	else
		$_SESSION["pdftkpath"] = $data["pdfpath"];
}

;		
} // function BeforeProcessEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesEdit(&$values, $pageObject)
{

		if(!$values["formname"]){
	$arr = my_json_decode($values["formfile"]);
	$values["formname"] = str_replace(".pdf","",$arr[0]["usrName"]); 
}

;		
} // function ProcessValuesEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject)
{

		
if(strpos(php_uname,"Windows")!==false && !$_SESSION["pdftkpath"]){
	$message = "Path to pdftk.exe is not set";
	return false;
}

unset($values["pdffile"]);

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record deleted
function AfterDelete($where, &$deleted_values, &$message, $pageObject)
{

		DB::Exec("delete from formfields where formid=".$deleted_values{"id"});
DB::Exec("delete from sqlfields where formid=".$deleted_values{"id"});

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
				// Add page: Before process
function BeforeProcessAdd($pageObject)
{

		
$rs = DB::Query("select * from formoptions");
if($data = $rs->fetchAssoc()){
	if(strpos(php_uname(),"Windows")!==false)
		$_SESSION["pdftkpath"] = getabspath($data["pdfpath"]);
	else
		$_SESSION["pdftkpath"] = $data["pdfpath"];
}



// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, $pageObject)
{

		if(strpos(php_uname(),"Windows")!==false && !$_SESSION["pdftkpath"]){
	$message = "Path to pdftk.exe is not set";
	return false;
}
return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, $pageObject)
{

		$old_file_info = my_json_decode($oldvalues["formfile"]);
$new_file_info = my_json_decode($values["formfile"]);
if( $new_file_info[0]["name"] == $old_file_info[0]["name"] )
	return;

DB::Exec("delete from formfields where formid=".$values["id"]);
$arrfile = my_json_decode($values["formfile"]);
if($arrfile[0]["type"] == "application/pdf"){
	$fname = $arrfile[0]["name"];
	$name = str_replace(".pdf","",$fname);
	exec($_SESSION["pdftkpath"]." \"".getabspath($fname)."\" dump_data_fields_utf8 output \"".getabspath($name.".txt")."\"");
	$handle = fopen($name.".txt", "r");
	$isText = false;
	while (!feof($handle)) {
		$buffer = fgets($handle);
		if(strpos($buffer,"FieldType:") !== false){
			$isText = true;
		}
		if(strpos($buffer,"FieldName:") !== false && strpos($buffer,"FieldName:") == 0 && $isText){
				$fname = trim(substr($buffer,11));
		}
		if(strpos($buffer,"FieldNameAlt:") !== false && strpos($buffer,"FieldNameAlt:") == 0 && $isText){
			$fnamealt = trim(substr($buffer,14));
			DB::Exec("insert into formfields (formid, fieldformalt, fieldform) values (".$keys["id"].",'".$fnamealt."','".$fname."')");
			$lastid = DB::LastId();
			$isText = false;
		}
		if(strpos($buffer,"FieldFlags:") !== false && strpos($buffer,"FieldFlags:") == 0 && $isText){
			DB::Exec("insert into formfields (formid, fieldformalt, fieldform) values (".$keys["id"].",'".$fname."','".$fname."')");
			$lastid = DB::LastId();
			$isText = false;
		}
		if (strpos($buffer,"FieldStateOption:") !== false && strpos($buffer,"FieldStateOption:") == 0){
			if(strpos($buffer,"Off") !== false){
				DB::Exec("update formfields set cboxoff='".trim(substr($buffer,18))."' where id=".$lastid);
				$buffer = fgets($handle);
				$l = strlen($buffer);
				DB::Exec("update formfields set cboxon='".trim(substr($buffer,18))."' where id=".$lastid);
			}
			else{
				DB::Exec("update formfields set cboxon='".trim(substr($buffer,18))."' where id=".$lastid);
				$buffer = fgets($handle);
				DB::Exec("update formfields set cboxoff='".trim(substr($buffer,18))."' where id=".$lastid);
			}
			
		}
	}
	fclose($handle);
	unlink(getabspath($name.".txt"));
	header("Location: forms_edit.php?editid1=".$keys["id"]);
	exit();
}
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>