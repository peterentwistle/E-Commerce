    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
	<?php
	include_once($themeUri . "inc/header.php");
	?>
    <div class="content-section">
        <div class="container">
            <!-- featured content -->
			<?php
			if (isset($_GET['src'])) {
				include_once($_GET['src']);
			} else {
				include_once("/pages/index.php");
			}
			?>
        </div> <!-- /.container -->
    </div> <!-- /.content-section -->
