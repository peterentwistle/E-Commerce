<?php
// Start the session first
session_start();
include_once("inc/mainIncludes.php");
include_once("inc/shopIncludes.php");
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
<script type="text/javascript" src="js/core.js"></script>
<title>
<?php
if (isset($chosenItem)) {
	echo $shop->itemName($chosenItem, $items)." - ".$shopTitle;
} else {
	echo "Shop - ".$shopTitle;
}
?>
</title>
</head>

<body>
<?php include_once($header); ?>

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

<?php include_once($footer); ?>

</body>
</html>