<?php
include("common.php");
$page_title = "Partners &amp; Memberships";

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

			<!-- Intel -->
			<div class="col-sm-2">
				<img src="<?php echo $www; ?>images/partners/logo_Intel_IoT_Alliance_69x72.png" height="65" />
			</div>
			<div class="col-sm-10">
				<h3 class="left-menu-title margin-bottom-fix margin-bottom-fix">INTEL® INTERNET OF THINGS SOLUTIONS ALLIANCE</h3>
				<a href="http://www.intel.com/iot-solutions-alliance" target="_blank">www.intel.com/iot-solutions-alliance</a>
			</div>

			<p>&nbsp;<hr class="section-line" /><br /></p>

			<!-- Indusoft -->
			<div class="col-sm-2">
				<img src="<?php echo $www; ?>images/partners/indusoft.png" height="72" />
			</div>
			<div class="col-sm-10">
				<h3 class="left-menu-title margin-bottom-fix">INDUSOFT</h3>
				<a href="http://www.indusoft.com" target="_blank">www.indusoft.com</a>
			</div>

			<p>&nbsp;<hr class="section-line" /><br /></p>

			<!-- Microsoft -->
			<div class="col-sm-2">
				<img src="<?php echo $www; ?>images/partners/Microsoft.png" height="72" />
			</div>
			<div class="col-sm-10">
				<h3 class="left-menu-title margin-bottom-fix">MICROSOFT</h3>
				<a href="http://www.microsoft.com" target="_blank">www.microsoft.com</a>
			</div>

			<p>&nbsp;<hr class="section-line" /><br /></p>

			<!-- ACP Thinmanager -->
			<div class="col-sm-2">
				<img src="<?php echo $www; ?>images/partners/Thinmanager.png" height="72" />
			</div>
			<div class="col-sm-10">
				<h3 class="left-menu-title margin-bottom-fix">ACP THINMANAGER</h3>
				<a href="http://www.thinmanager.com/" target="_blank">www.thinmanager.com</a>
			</div>

			<p>&nbsp;<hr class="section-line" /><br /></p>

			<!-- Wonderware -->
			<div class="col-sm-2">
				<img src="<?php echo $www; ?>images/partners/Wonderware.png" height="72" />
			</div>
			<div class="col-sm-10">
				<h3 class="left-menu-title margin-bottom-fix">WONDERWARE</h3>
				<a href="http://software.schneider-electric.com/wonderware/" target="_blank">software.schneider-electric.com/wonderware</a>
			</div>

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