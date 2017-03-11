<?php
	include_once($themeUri . "inc/header.php");
?>
<?php
if (isset($_GET['src'])) {
	include_once($_GET['src']);
} else {
	include_once("/pages/index.php");
}
?>
<?php
	include_once($themeUri . "inc/footer.php");
?>