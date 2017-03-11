<?php
// Begin the site session
session_start();
//New Includes
require_once("inc/includes.php");
?>
<DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" <?php echo $main_css; ?>>
<title><?php echo $siteData[0]; ?></title>
</head>

<body>
<?php
	//Load in the header
	require_once('inc/header.php');
?>

<!-- Content -->
<h1>Featured Items</h1>
<?php
//TODO: Update to use database items
echo $shop->randItems($items, $currency, $currency_format);
?>

<h1>Encryption Check</h1>
<?php
	$text = "HELLO";
	$password = "GOODBYE";
	echo "TEXT = " . $text . "</br>";
	echo "PASSWORD = ". $password . "</br>";
	echo "ENCRYPTED = " . $REnc->REnc_Encrypt($text, $password) . "</br>";
	echo "DECRYPTED = " . $REnc->REnc_Decrypt($REnc->REnc_Encrypt($text, $password), $password) . "</br>";
?>

<?php
	//Load in the footer
	require_once('inc/footer.php');
?>

</body>
</html>
