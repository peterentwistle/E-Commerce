<?php
// Configuration file - Will be changed to load in from the DB
define("BASE_URL", "/");
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"]."/");
$shopTitle = "E-Commerce the Open Source Project";
$footerCopy = '&copy;'.date('Y').' Peter Entwistle and Rover656. Check out the source code on <a href="http://github.com/Rover656/E-Commerce">GitHub</a>'; //GitHub link to the Rover656 Fork
/*
Set shop currency
Currencies available:
GBP - £
USD - $
EUR - €
More currency support coming soon
*/
$currency = "GBP";
/* 
Set the currency format
"english" (default)
	e.g. 1,235.56

"european" notation
	e.g. 1.234,56

"eng_without_thous" english notation without thousands separator
	e.g. 1234.56
*/
$currency_format = "english";

?>
