<?php
// Configuration file - Might remove this later
define("BASE_URL", "/");
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"]."/");
$shopTitle = "Peter's E-Shop";
$footerCopy = "&copy;".date('Y')." Peter Entwistle"; 
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