<?php
if (isset($_GET['src'])) {
	include_once($_GET['src']);
} else {
	include_once("/pages/index.php");
}
?>
