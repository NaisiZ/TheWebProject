<?php
include("common.php");
$page_title = "Products";

include($www ."head.inc.php");
?>


<div class="container-fluid">

	<div class="row">
		<div class="col-sm-12">
			<br />
			<!--<hr class="subpage-divider" />-->
		</div>
	</div>

    <div class="row">
        <!-- Left Column -->
        <div class="col-sm-3">
        	<?php include("product_menu.inc.php"); ?>
        </div>
        <!-- /Left Column -->

        <!-- Right Column -->
        <div class="col-sm-offset-1 col-sm-8">

        	<h1 class="page_title"><?php echo $page_title; ?></h1>

        </div>
        <!-- /Right Column -->
    </div>


	<div class="row section">
		<?php include($www ."footer.inc.php"); ?>
	</div>

</div><!-- /container-fluid -->

<?php include($www ."/sitewide_scripts.inc.php"); ?>

<!-- PAGE SPECIFIC SCRIPTS -->
<script src="js/responsiveslides.min.js"></script>
<script>
$(".rslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 1500,             // Integer: Speed of the transition, in milliseconds
  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
  pager: false,           // Boolean: Show pager, true or false
  nav: false,              // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: true,            // Boolean: Pause on hover, true or false
  pauseControls: false,    // Boolean: Pause when hovering controls, true or false
  prevText: "Previous",   // String: Text for the "previous" button
  nextText: "Next",       // String: Text for the "next" button
  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
  manualControls: "",     // Selector: Declare custom pager navigation
  namespace: "rslides",   // String: Change the default namespace used
  before: function(){},   // Function: Before callback
  after: function(){}     // Function: After callback
});
</script>
<!-- /PAGE SPECIFIC SCRIPTS -->




</body>
</html>