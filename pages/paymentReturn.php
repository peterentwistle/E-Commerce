<?php
  if (isset($_GET["return"])) {
    if ($_GET["return"] == "cancel") {
      echo "Payment has been canceled.";
    } else if ($_GET["return"] == "success") {
      echo "Payment has been completed!";
    }
  } else {
    exit;
  }
?>
