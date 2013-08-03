<?php
// Start the session first
session_start();
include_once("inc/mainIncludes.php");
include_once("inc/basketIncludes.php");
if (isset($_SESSION['basketSession'])) {
	$basketSession = $_SESSION['basketSession'];
}
?>
<DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" <?php echo $main_css; ?> >
<title>Basket - <?php echo $shopTitle; ?></title>
</head>

<body>
<?php include_once($header); ?>
<?php 
if (isset($basketSession)) {
	$basket->basketContents($basketSession, $items, $currency, $currency_format);
	echo $basket->totalPrice($basketSession, $items, $currency, $currency_format);
} else {
	echo '<h1>Your Basket is empty. Take a look at <a href="shop.php">our shop</a>.</h1>'."\n";
}
?>
<?php include_once($footer); ?>

</body>
</html>