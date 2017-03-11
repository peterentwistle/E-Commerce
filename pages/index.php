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