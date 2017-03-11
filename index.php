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
<?php
if (isset($_GET['src'])) {
	include_once($_GET['src']);
} else {
	include_once("/pages/index.php");
}
?>

<?php
	//Load in the footer
	require_once('inc/footer.php');
?>

</body>
</html>
