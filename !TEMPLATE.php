<?php
include("common.php");
$page_title = "Page Title";

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

		</div>

		<div class="col-sm-2">
		</div>

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