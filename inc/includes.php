<?php
	//This script just adds all the config into a massive array for easy access
	//Normal Includes
	require_once(BASE_URL . 'core/config.php');
	$siteData[0] = $shopTitle;
	$siteData[1] = $footerCopy;
	$siteData[2] = $currency;
	$siteData[3] = $currency_format;
	$main_css = 'href="style/css/main.css"';
	include_once("core/config.php");
    //////Commented out for now include_once("core/dbcon.php");
	//Basket Includes
	require_once("core/items.php");
	require_once("core/classes/Basket.php");
	require_once("core/classes/Shop.php");
	$basket = new Basket;
	//Shop Includes
	include_once("core/items.php");
	include_once("core/classes/Shop.php");
	$shop = new Shop;
?>
