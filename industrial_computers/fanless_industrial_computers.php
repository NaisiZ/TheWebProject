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
			
			<h3>Fanless Industrial Computers</h3>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<!-- C1 -->
					<span class="dropdown-header">Embedded Computers<hr class="section-line" /></span>
					<span class="dropdown-header"><br />Atom<hr class="section-line" /></span>
					<p class="text-left">
						<a href="<?php echo $_SESSION['www']; ?>products/product_details.php?pn=MicroBox-7824A-B01">
							<span class="prod_name">MicroBox-7824A-B01</span>
						</a><br />
						Diamondville 1.6GHz N270
					</p>
					<p class="text-left">
						<a href="<?php echo $_SESSION['www']; ?>products/product_details.php?pn=MicroBox-7824A-C01">
							<span class="prod_name">MicroBox-7824A-C01</span>
						</a><br />
						Cedar Trail 1.86GHz N2800
					</p>
					<p class="text-left">
						<a href="<?php echo $_SESSION['www']; ?>products/product_details.php?pn=MicroBox-7824A-C01">
							<span class="prod_name">MicroBox-7824A-C01</span>
						</a><br />
						Bay Trail 1.91GHz E3845
					</p>
				</div>
			</div>
			
			<div class="row">
				<p>&nbsp;</p>
				<span class="dropdown-header">Fanless Box PC<hr class="section-line" /></span>
				<div class="col-md-4 col-sm-4">
					<span class="dropdown-header"><br />Core 2 Duo<hr class="section-line" /></span>
					<p class="text-left">
						<a href="<?php echo $_SESSION['www']; ?>products/product_details.php?pn=BoxPC-138-D00">
							<span class="prod_name">BoxPC-138-D00</span>
						</a><br />
						1x PCI Slot
					</p>
					<p class="text-left">
						<a href="<?php echo $_SESSION['www']; ?>products/product_details.php?pn=BoxPC-238-D00">
							<span class="prod_name">BoxPC-238-D00</span>
						</a><br />
						2x PCI Slot
					</p>
				</div>
				
				<div class="col-md-4 col-sm-4">
					<span class="dropdown-header">Ivy Bridge<br />Sandy Bridge<hr class="section-line" /></span>
					<p class="text-left">
						<a href="<?php echo $_SESSION['www']; ?>products/product_details.php?pn=BoxPC-138-G00">
							<span class="prod_name">BoxPC-138-G00</span>
						</a><br />
						1x PCIe Slot
					</p>
					<p class="text-left">
						<a href="<?php echo $_SESSION['www']; ?>products/product_details.php?pn=BoxPC-238-G00">
							<span class="prod_name">BoxPC-238-G00</span>
						</a><br />
						1x PCIe Slot
					</p>
					<p class="text-left">
						<a href="<?php echo $_SESSION['www']; ?>products/product_details.php?pn=BoxPC-402-G00">
							<span class="prod_name">BoxPC-402-G00</span>
						</a><br />
						PCI + PCIe
					</p>
					<p class="text-left">
						<a href="<?php echo $_SESSION['www']; ?>products/product_details.php?pn=BoxPC-138-G01">
							<span class="prod_name">BoxPC-138-G01</span>
						</a><br />
						1x PCIe Slot
					</p>
					<p class="text-left">
						<a href="<?php echo $_SESSION['www']; ?>products/product_details.php?pn=BoxPC-238-G01">
							<span class="prod_name">BoxPC-238-G01</span>
						</a><br />
						2x PCIe Slot
					</p>
					<p class="text-left">
						<a href="<?php echo $_SESSION['www']; ?>products/product_details.php?pn=BoxPC-402-G01">
							<span class="prod_name">BoxPC-402-G01</span>
						</a><br />
						PCI + PCIe
					</p>
				</div>
				
				<div class="col-md-4 col-sm-4">
					<span class="dropdown-header"><br />Skylake<hr class="section-line" /></span>
					<p class="text-left">
						<a href="<?php echo $_SESSION['www']; ?>products/product_details.php?pn=BoxPC-138-H00">
							<span class="prod_name">BoxPC-138-H00</span>
						</a><br />
						1x PCIe Slot
					</p>
				</div>
			</div>
			
			<div class="row">
				<span class="dropdown-header">Multi-Touch<hr class="section-line" /></span>
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