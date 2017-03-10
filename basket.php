<?php
// Begin the site session
session_start();
//TODO: Update the inc folder then migrate lib to inc
include_once("inc-old/mainIncludes.php");
include_once("inc-old/shopIncludes.php");
?>
<DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" <?php echo $main_css; ?>>
<title>Basket - <?php echo $shopTitle; ?></title>
</head>

<body>
<?php
	//Load in the header
	require_once('inc/header.php');
?>

<!-- Content -->
<?php 
if (isset($basketSession)) {
	$basket->basketContents($basketSession, $items, $currency, $currency_format);
	echo $basket->totalPrice($basketSession, $items, $currency, $currency_format);
} else {
	echo '<h1>Your Basket is empty. Take a look at <a href="shop.php">our shop</a>.</h1>'."\n";
}
?>

<?php
	//Load in the footer
	require_once('inc/footer.php');
?>

</body>
</html>
