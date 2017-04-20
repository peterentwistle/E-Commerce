<?php
// The theme controller
$themeXML = simplexml_load_file("themes/" . $currentTheme . "/manifest.xml") or die("Error: Cannot find theme");
$themeUri = "themes/" . $themeXML->theme_id . "/";
?>