<?php
	/////TODO: FIX DEFINED LOCATIONS (NEED FOR SUBDIRECTORIES I THINK)
	//This script just adds all the config into a massive array for easy access
	//Normal Includes
	require_once('/core/config.php');
	$siteData[0] = $shopTitle;
	$siteData[1] = $footerCopy;
	$siteData[2] = $currency;
	$siteData[3] = $currency_format;
	$main_css = 'href="' . $themeUri . 'style/css/main.css"';
	require_once("/core/config.php");
    require_once("/core/dbcon.php");
	//Basket Includes
	require_once("/core/items.php");
	require_once("/core/classes/Basket.php");
	require_once("/core/classes/Shop.php");
	$basket = new Basket;
	//Shop Includes
	require_once("/core/items.php");
	require_once("/core/classes/Shop.php");
	require_once("/core/classes/Item.php");
	$Item = new Item;
	$shop = new Shop;
	//Encryption Includes
	require_once("/core/classes/REnc.php");
	$REnc = new REnc;
	//Currency Includes
	require_once("core/classes/Currency.php");
	$Currency = new Currency;
?>
