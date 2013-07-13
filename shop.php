<?php
// Have to start the session first
session_start();
include_once("includes/mainIncludes.php");
include_once("includes/shopIncludes.php");
?>
<DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $shopTitle; ?></title>
</head>

<body>
<?php include_once($header); ?>

<?php
if (isset($_GET['item'])) {
	$chosenItem = ($_GET['item']);/* Use real escape funct when connected to database */
	echo $shop->displayItemDetails($chosenItem, $items);
} else {
	$shop->listItems($items, $currency); 
}
?>

<?php include_once($footer); ?>

</body>
</html>