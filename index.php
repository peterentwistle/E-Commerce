<?php
// Have to start the session first
session_start();
include_once("inc/mainIncludes.php");
include_once("inc/shopIncludes.php");
?>
<DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" <?php echo $main_css; ?>>
<title><?php echo $shopTitle; ?></title>
</head>

<body>
<?php
	//Load in the header
	require_once('lib/header.php');
?>

<h1>Featured Items</h1>
<?php
echo $shop->randItems($items, $currency, $currency_format);
?>


<?php
	//Load in the footer
	require_once('lib/footer.php');
?>

</body>
</html>
