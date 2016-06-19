<?php
include("common.php");
$page_title = "Careers";

include($www ."head.inc.php");
?>


<div class="container-fluid">

	<div class="row">
		<!-- Left Column -->
		<div class="col-sm-3">
			<?php include($www ."product_menu.inc.php"); ?>
		</div>

		<!-- right Column -->
		<div class="col-sm-offset-1 col-sm-6">

			<img src="images/page_banner-AboutArista.png" height="213" width="962" class="img-responsive">

			<h1 class="page_title"><?php echo $page_title; ?></h1>
		</div>

		<div class="col-sm-2"></div>
	</div>



	<!-- Footer -->
	<div class="row section">
		<?php include($www ."footer.inc.php"); ?>
	</div>
	<!-- /Footer -->

</div><!-- /container-fluid -->

<?php include($www ."/sitewide_scripts.inc.php"); ?>

<!-- PAGE SPECIFIC SCRIPTS -->

<!-- /PAGE SPECIFIC SCRIPTS -->




</body>
</html>