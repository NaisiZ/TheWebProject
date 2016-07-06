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
			
			
			
			
			
			<h3>Industrial Box</h3>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<!-- C1 -->
					<span class="dropdown-header">Ivy Bridge<br />Sandy Bridge<hr class="section-line" /></span>
					<p class="text-left">
						<a href="<?php echo $_SESSION['www']; ?>products/product_details.php?pn=BoxPC-108-G00">
							<span class="prod_name">BoxPC-108-G00</span>
						</a><br />
						1x PCIe Slot
					</p>
					<p class="text-left">
						<a href="<?php echo $_SESSION['www']; ?>products/product_details.php?pn=BoxPC-202-G00">
							<span class="prod_name">BoxPC-202-G00</span>
						</a><br />
						2x PCIe Slot
					</p>
					<p class="text-left">
						<a href="<?php echo $_SESSION['www']; ?>products/product_details.php?pn=BoxPC-401-G00">
							<span class="prod_name">BoxPC-401-G00</span>
						</a><br />
						PCI + PCIe
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