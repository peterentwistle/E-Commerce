<?php
// Have to start the session first
session_start();
include_once("includes/mainIncludes.php");
?>
<DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" <?php echo $main_css; ?>>
<title><?php echo $shopTitle; ?></title>
</head>

<body>
<?php include_once($header); ?>

<br/>
<?php include_once($footer); ?>

</body>
</html>