<?php
//////Configuration file
///Database Details
//Database host
$db_host = "localhost";
//Database User
$db_user = "root";
//Database Password
$db_pass = "password";
//Database Name
$db_name = "E-Commerce";
//Shop Data Encryption
$shopEncryptionKey = "RANDOMTEXTHERE"; //NOT LOADED BY DB FOR SAFETY
//Server install directory (FROM THE HTDOCS LOCATION) (BLANK IF IN ROOT)
$install_dir = "E-Commerce";
/////////////////TESTING\\\\\\\\\\\\\\\\\\\\\

$currentTheme = "default";
include_once("themeControl.php");


///Load DB
require_once("/core/dbcon.php");
$sql = "SELECT * FROM config";
$result = $dbcon->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		///Shop Details
		if ($row["setting"] == "shopTitle") {
			$shopTitle = $row["value"];
		}
		if ($row["setting"] == "footerCopy") {
			$footerCopy = $row["value"];
		}
		if ($row["setting"] == "currency") {
			$currency = $row["value"];
		}
		if ($row["setting"] == "currency_format") {
			$currency_format = "english";
		}
	}
} else {
	///Shop Details
	$shopTitle = "E-Commerce the Open Source Project";
	$footerCopy = '&copy;'.date('Y').' Peter Entwistle and Rover656. Check out the source code on <a href="http://github.com/Rover656/E-Commerce">GitHub</a>';
	///Set shop currency
	$currency = "GBP";
	///Set the currency format
	$currency_format = "english";
}

//Check that they are set
if (!isset($shopTitle)) { $shopTitle = "E-Commerce the Open Source Project"; }
if (!isset($footerCopy)) { $footerCopy = '&copy;'.date('Y').' Peter Entwistle and Rover656. Check out the source code on <a href="http://github.com/Rover656/E-Commerce">GitHub</a>'; }
if (!isset($currency)) { $currency = "GBP"; }
if (!isset($currency_format)) { $currency_format = "english"; }
//////////DO NOT CHANGE\\\\\\\\\\
define("BASE_URL", "/");
define("INSTALL_DIR", dirname(__FILE__) + ".." + DIRECTORY_SEPARATOR);
ini_set('default_charset', 'utf-8');
?>
