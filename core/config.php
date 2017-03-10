<?php
//////Configuration file - Will be changed to load in from the DB
////Changable by User - For help see GitHub WiKi
///Shop Details
$shopTitle = "E-Commerce the Open Source Project";
$footerCopy = '&copy;'.date('Y').' Peter Entwistle and Rover656. Check out the source code on <a href="http://github.com/Rover656/E-Commerce">GitHub</a>'; //GitHub link to the Rover656 Fork
///Set shop currency
$currency = "GBP";
///Set the currency format
$currency_format = "english";
///Database Details
//Database host
$db_host = "localhost";
//Database User
$db_user = "DBUSER";
//Database Password
$db_pass = "CHANGEME";
//Database Name
$db_name = "DB_NAME";
///Shop Data Encryption
$shopEncryptionKey = "RANDOMTEXTHERE";
////DO NOT CHANGE
define("BASE_URL", "/");
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"]."/");
?>
