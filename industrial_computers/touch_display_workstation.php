<?php
include("../../common.php");
$page_title = "Industrial Computers";

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
			<img src="<?php echo $www; ?>images/page_banner-AboutArista.png" height="213" width="962" class="img-responsive">
			<br />
			<!-- <img src="<?php echo $www; ?>images/product_thumbs/arp-3700-panel.jpg" height="300" width="300" class="img-responsive" /> -->
			
			<h1 class="page_title">INDUSTRIAL COMPUTERS</h1>
			
			
			<h3>Touch Display Workstation</h3>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<!-- C1 -->
					<p class="text-left">
						<a href="<?php echo $_SESSION['www']; ?>products/product_details.php?pn=AMA-7017AX">
							<span class="prod_name">AMA-7017AX</span>
						</a><br />
						Wall Mount
					</p>
					<p class="text-left">
						<a href="<?php echo $_SESSION['www']; ?>products/product_details.php?pn=AMA-7219AP">
							<span class="prod_name">AMA-7219AP</span>
						</a><br />
						AMA-7219AP
					</p>
					<p class="text-left">
						<a href="<?php echo $_SESSION['www']; ?>products/product_details.php?pn=AMA-7229">
							<span class="prod_name">AMA-7229</span>
						</a><br />
						AMA-7229
					</p>
				</div>
			</div>
			
			
			
			</div><!-- /Right Column -->
			
			<div class="col-sm-2"></div><!-- Right Spacer -->
			
			</div><!-- /Row -->
			
			
			
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