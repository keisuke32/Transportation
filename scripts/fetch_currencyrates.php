<?php
include('../include/dbcommon.php');
$affectedRow = 0;

  $url = 'http://www.floatrates.com/daily/usd.xml';
  $xml = simplexml_load_file($url) or die("feed not loading");

foreach ($xml->children() as $row) {
  if ($row->baseCurrency == "USD") {	
	$PubDate = date("Y-m-d H:i:s", strtotime($row->pubDate));
	//echo "PubDate: " . $PubDate . "<br>\n";
	$BaseCurrency = $row->baseCurrency;
	//echo "BaseCurrency: " . $BaseCurrency . "<br>\n";
	$TargetCurrency = $row->targetCurrency;
	//echo "TargetCurrency: " . $TargetCurrency . "<br>\n";
	$ExchangeRate = $row->exchangeRate;
	//echo "ExchangeRate: " . $ExchangeRate . "<br>\n";
	$InverseRate = $row->inverseRate;
	//echo "InverseRate: " . $InverseRate . "<br>\n<br>\n";

	
	
    $sql = "INSERT INTO tbl_currency_daily_rate(PubDate,BaseCurrency,TargetCurrency,ExchangeRate,InverseRate) VALUES ('" . $PubDate . "','" . $BaseCurrency . "','" . $TargetCurrency . "','" . $ExchangeRate . "','" . $InverseRate . "')";
    
    $result = db_query( $sql);
    
     
  }
}
?>