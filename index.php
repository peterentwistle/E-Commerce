<?php
// Begin the site session
session_start();
//Old Includes
include_once("inc-old/mainIncludes.php");
include_once("inc-old/shopIncludes.php");
//New Includes
require_once("inc/includes.php");
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
	require_once('inc/header.php');
?>

<!-- Content -->
<h1>Featured Items</h1>
<?php
//TODO: Update to use database items
echo $shop->randItems($items, $currency, $currency_format);
?>

<?php
	//Load in the footer
	require_once('inc/footer.php');
?>

</body>
</html>
