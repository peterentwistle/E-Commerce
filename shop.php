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
	print_r($Item->LoadItem(0));
?>

<?php
	//Load in the footer
	require_once('inc/footer.php');
?>

</body>
</html>