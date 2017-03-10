<?php
// Begin the site session
session_start();
//Old Includes
include_once("inc-old/mainIncludes.php");
include_once("inc-old/shopIncludes.php");
//New Includes
require_once("inc/includes.php");
//STORE CODE
if (isset($_GET['item'])) {
	$chosenItem = ($_GET['item']);/* Use real escape funct when connected to database */
}
if (isset($_SESSION['basketSession'])) {
	$basketSession = $_SESSION['basketSession'];
}
if (isset($_POST['item-id'])) {
	$itemId = $_POST['item-id'];
	$quantity = $_POST['quant'];
	$shop->addItemToBasket($itemId, $quantity, $basketSession, $items);
	$basketSession = $_SESSION['basketSession'];
}
?>
<DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" <?php echo $main_css; ?>>
<title>
<?php
if (isset($chosenItem)) {
	echo $shop->itemName($chosenItem, $items)." - ".$shopTitle;
} else {
	echo "Shop - ". $siteData[0];
}
?>
</title>
</head>

<body>
<?php
	//Load in the header
	require_once('inc/header.php');
?>

<!-- Content -->
<?php 
if (isset($basketSession)) {
	print_r($basketSession);
}
?>

<?php
if (isset($chosenItem)) {
	$quant = "";
	for ($i = 1; $i <= 10; $i++) {
		$quant .= '<option value='.$i.'>'.$i.'</option>'."\n";
	}
	echo $shop->displayItemDetails($chosenItem, $items, $currency, $currency_format);
	echo '<form action="shop.php" method="post">'."\n".
	'<input type="hidden" name="item-id" value='.$chosenItem.'>'."\n".
	'<select name="quant" id="quant">'."\n".
	$quant."\n".
	'</select>'."\n".
	'<input type="submit" value="Add to Cart" name="submit">';
} else {
	$shop->listItems($items, $currency, $currency_format); 
}
?>

<?php
	//Load in the footer
	require_once('inc/footer.php');
?>

</body>
</html>