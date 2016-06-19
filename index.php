<?php
include("common.php");
$page_title = "Home";


// Get Wordpress RSS feed for Press Releases
function read_rss($display = 0, $url = '')
{
	$doc = new DOMDocument();
	$doc->load($url);
	$itemArr = array();
	foreach ($doc->getElementsByTagName('item') as $node) {
					if ($display == 0) {
									break;
					}
					$itemRSS = array(
									'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
									'description' => $node->getElementsByTagName('description')->item(0)->nodeValue,
									'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
									'pubdate' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue
					);
					array_push($itemArr, $itemRSS);
					$display--;
	}
	return $itemArr;
}


include($www ."head.inc.php");
?>



	
	<!--
		Slider
	-->
	
<div class="container-fluid">	
	<div class="row">
		<div class="col-sm-12">
			<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<?php
						$i = 0;
						$path = "images/home_slider/";
						$slides = glob($path ."*.jpg");
						foreach($slides as $slide) {
							if($i < 1) { $active = "active"; } else{ $active = ""; }
							echo "<div class='item ". $active ."'>";
							echo "<img src='". $slide ."' alt=''>";
							echo "</div>";
							$i++;
						}
					?>
				</div>
				<!-- Controls -->
			  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left white" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right white" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</div>
</div>
	<!-- /Slider -->
	
	
	
	
	<!--
		Product Line
	-->
	<div class="section">
		<div class="row">
			<h2 class="title">PRODUCT LINE <hr class="section-line" /></h2>
			
			<div class="col-sm-2" id="product-line">
				<a href="<?php echo $www; ?>products/industrial_displays">
					<img src="images/home-productLine/Industrial-Displays.jpg" class="img-padding img-responsive" alt="Industrial Displays" />
					<p class="prod-line-title">Industrial Displays</p>
				</a>
				<!--<p>Touch Industrial Displays, from 6" to 84", NEMA 4/4X, 5-Wire Resistive Touch, High Bright and Tempered Glass Options, Accessories Include HDMI/USB Extenders, MultiPlexers and MultiViewers</p>-->
				
			</div>
			
			<div class="col-sm-2" id="product-line">
				<a href="products/industrial_panel_pcs/index.php">
					<img src="images/home-productLine/Industrial-Panel-PCs.jpg" height="300" width="300" class="img-padding img-responsive" alt="Industrial Panel PCs" />
					<p class="prod-line-title">Industrial TPC</p>
				</a>
				<!--<p>Fanless Panel PCs, from 10.4" to 84", 5-Wire Resistive or Projective Capacitive Touch, NEMA 4/4X, Intel Dual Core Atom / Q77 with i7 CPU, Class 1 Div 2 and ACP Thin Manager Options</p>-->
			</div>
			
			<div class="col-sm-2" id="product-line">
				<a href="<?php echo $www; ?>products/box_pcs">
					<img src="images/home-productLine/Embedded-and-Box-PCs.jpg" class="img-padding img-responsive" alt="Embedded and Box PCs" />
					<p class="prod-line-title">Embedded &amp; Box PCs</p>
				</a>
				<!--<p>Fanless Options, Intel Atom to i7 Q77 Platforms, PCI / PCIe Expansion Slots, Removable HDD/SSD Options, ATX / DC Power, Wall or DIN-RAIL Mount, Smart Battery Option</p>-->
			</div>
			
			<div class="col-sm-2" id="product-line">
				<a href="<?php echo $www; ?>products/acp_thinmanager_ready">
					<img src="images/home-productLine/ACP-Thin-Manager.jpg" height="300" width="300" class="img-padding img-responsive" alt="ACP ThinManager" />
					<p class="prod-line-title">ACP ThinManager</p>
				</a>
				<!--<p>Office or Industrial Thin Clients, Multi-Monitor and Touch Panel PC, ACP ThinManager Ready PCs, Supports Full-Featured Centralized Thin Client and Terminal Server Management Software</p>-->
			</div>
			
			<div class="col-sm-2" id="product-line">
				<a href="<?php echo $www; ?>products/industrial_rack_mount">
					<img src="images/home-productLine/Hazardous-Zone.jpg" height="300" width="300" class="img-padding img-responsive" alt="Hazardous Zone" />
					<p class="prod-line-title">Hazardous Zone</p>
				</a>
				<!--<p>Office or Industrial Thin Clients, Multi-Monitor and Touch Panel PC, ACP ThinManager Ready PCs, Supports Full-Featured Centralized Thin Client and Terminal Server Management Software</p>-->
			</div>
			
			<div class="col-sm-2" id="product-line">
				<a href="<?php echo $www; ?>products/industrial_displays/large_format.php">
					<img src="images/home-productLine/Large-Format-Disply-PC.jpg" class="img-padding img-responsive" alt="Large Format Display PC" />
					<p class="prod-line-title">Large Format Displays</p>
				</a>
				<!--<p>Office or Industrial Thin Clients, Multi-Monitor and Touch Panel PC, ACP ThinManager Ready PCs, Supports Full-Featured Centralized Thin Client and Terminal Server Management Software</p>-->
			</div>
		</div>
		
		<br />
		
		<div class="row">
			<div class="col-sm-2" id="product-line">
				<a href="products/industrial_panel_pcs/index.php">
					<img src="images/home-productLine/RTU-and-Smart-Sensors.jpg" height="300" width="300" class="img-padding img-responsive" alt="RTU and Smart Sensors" />
					<p class="prod-line-title">RTU &amp; Smart Sensors</p>
				</a>
				<!--<p>Computer / Video / Audio Interfaces, Switchers, Configurable Control Systems, Distribution Amplifiers, Computer Video-Scan Converters, Scalers, Signal Processing Equipment</p>-->
			</div>
			
			<div class="col-sm-2" id="product-line">
				<a href="<?php echo $www; ?>products/industrial_displays">
					<img src="images/home-productLine/Industrial-CPU-Boards.jpg" class="img-padding img-responsive" alt="Industrial CPU Boards" />
					<p class="prod-line-title">Industrial CPU Boards</p>
				</a>
				<!--<p>Computer / Video / Audio Interfaces, Switchers, Configurable Control Systems, Distribution Amplifiers, Computer Video-Scan Converters, Scalers, Signal Processing Equipment</p>-->
				
			</div>
			
			<div class="col-sm-2" id="product-line">
				<a href="<?php echo $www; ?>products/box_pcs">
					<img src="images/home-productLine/Industrial-WIFI-AP.jpg" class="img-padding img-responsive" alt="Industrial WIFI AP" />
					<p class="prod-line-title">Industrial WIFI AP</p>
				</a>
				<!--<p>Fanless Options, Intel Atom to i7 Q77 Platforms, PCI / PCIe Expansion Slots, Removable HDD/SSD Options, ATX / DC Power, Wall or DIN-RAIL Mount, Smart Battery Option</p>-->
			</div>
			
			<div class="col-sm-2" id="product-line">
				<a href="<?php echo $www; ?>products/professional_av/av_extenders.php">
					<img src="images/home-productLine/Video-Extenders.jpg" height="300" width="300" class="img-padding img-responsive" alt="Video Extenders" />
					<p class="prod-line-title">AV Extenders</p>
				</a>
				<!--<p>Office or Industrial Thin Clients, Multi-Monitor and Touch Panel PC, ACP ThinManager Ready PCs, Supports Full-Featured Centralized Thin Client and Terminal Server Management Software</p>-->
			</div>
			
			<div class="col-sm-2" id="product-line">
				<a href="<?php echo $www; ?>products/professional_av/arista_matrix_series.php">
					<img src="images/home-productLine/Video-Matrix-Switchers.jpg" class="img-padding img-responsive" alt="Video Matrix Switchers" />
					<p class="prod-line-title">AV Matrix Switchers</p>
				</a>
				<!--<p>Computer / Video / Audio Interfaces, Switchers, Configurable Control Systems, Distribution Amplifiers, Computer Video-Scan Converters, Scalers, Signal Processing Equipment</p>-->
			</div>
			
			<div class="col-sm-2" id="product-line">
				<a href="<?php echo $www; ?>products/professional_av/av_multi_viewers.php">
					<img src="images/home-productLine/Multiviewers.jpg" height="300" width="300" class="img-padding img-responsive" alt="MultiViewers" />
					<p class="prod-line-title">AV MultiViewers</p>
				</a>
				<!--<p>Office or Industrial Thin Clients, Multi-Monitor and Touch Panel PC, ACP ThinManager Ready PCs, Supports Full-Featured Centralized Thin Client and Terminal Server Management Software</p>-->
			</div>
						
		</div>
	</div>
	<!-- /Product Line -->
	
	
	
	
	
	<!--
		ODM Custom Design / News & Events Panels
	-->
	<div class="section">
		<div class="row">
			<div class="col-sm-6">
				<h2 class="title" style="margin-left: -15px;">
				<a href="odm_design_services.php" style="color: #c40023;">ODM CUSTOM DESIGN</a><!-- ODM Design Services Link -->
				<hr class="section-line" /></h2>
				<div class="background-gray">
					<a href="why_arista.php"><!-- Why Arista link -->
					<img src="images/banner-ODM.jpg" class="img-responsive" />
				</a>
			</div>
			<br />
			<div style="padding-left: 25px; padding-right: 25px;">
				<p>Arista is your company's engineering resource for all your customization requirements.  We have a team of in-house mechanical, electrical (CPU) and display design engineers to handle any requirement.  No custom job is too small or too large, from simple turnkey integration, to custom chassis, CPU and display design.  Our focus is working in partnership with our ODM customers, providing maximum flexibility and quick time to market.  We have hundreds of successful ODM designs in Automation, Food & Beverage, Pharmaceutical, Oil & Gas, Waste Water Management and Control Room applications.  Our custom capabilities include:</p>
				<ul class="no-indent">
					<li class="padding"><strong>Mechanical Design:</strong> Chassis, CAD drawing</li>
					<li class="padding"><strong>Electrical Design:</strong> CPU or daughter boards</li>
					<li class="padding"><strong>Display Design:</strong> LCD panel display</li>
					<li class="padding"><strong>Environmental:</strong> Thermal, shock and vibration testing</li>
					<li class="padding"><strong>Compliance:</strong> UL, FCC, CE and more...</li>
				</ul>
				<p><strong><a href="odm_design_services.php">Arista Custom ODM Design Services</a></strong></p>
				<p><strong><a href="why_arista.php">Why Arista?</a></strong></p>
			</div>
		</div>
		
		<div class="col-sm-6">
			<h2 class="title" style="margin-left: -15px;">NEWS &amp; EVENTS <hr class="section-line" /></h2>
			<div class="background-gray clearfix">
				<img src="images/InfoComm16.jpg" class="img-responsive">
				<!--<h3 class="custom-design-title"><a href="news-and-events/index.php">News &amp; Events</a></h3>-->
			</div>
			
			<div style="padding-left: 25px; padding-right: 25px;">
				<br />
				
				<?
				// Display PR from blog
				$items = read_rss(20,'https://host.fotan.us/~goarista/blog/?cat=405&feed=rss2');
				foreach ( $items as $item ) {
				$timestamp = strtotime($item['pubdate']);
				$fixed_date = date("Y.m.d", $timestamp);
				echo "<p><a href='". $item['link'] ."'><b>". $fixed_date ."</b> - ". $item['title'] ."</a></p>";
				}
				?>
				<?php
					//try {
						//	$query=$db->query("SELECT * FROM news_events ORDER BY DATE(date) DESC LIMIT 10");
						//	while($news=$query->fetch(PDO::FETCH_ASSOC)) {
							//		echo "<p><a href='". $news['link'] ."' target='_blank'><strong>". $news['date'] ."</strong> - ". $news['title'] ."</a></p>";
						//	}
					//}
					//catch(PDOException $e)
						//	{ $e->getMessage(); }
				?>
				<p><a href="news_and_events/index.php">More >> </a></p>
				
			</div>
		</div>
	</div>
</div>
<!-- /ODM Custom Design / News & Events -->






<!--
	Applications
-->
<div class="section">
	<div class="row">
		<h2 class="title">APPLICATIONS <hr class="section-line" /></h2>
		<div class="col-sm-2" id="product-line">
			<a href="industrial_applications/industrial_automation.php">
				<img src="images/home_applications/Industrial_Automation.jpg" class="img-padding img-responsive" />
				<p class="prod-line-title">Industrial Automation</p>
			</a>
		</div>
		
		<div class="col-sm-2" id="product-line">
			<a href="industrial_applications/machine_automation.php">
				<img src="images/home_applications/Machine_Automation.jpg" class="img-padding img-responsive" />
				<p class="prod-line-title">Machine Automation</p>
			</a>
		</div>
		
		<div class="col-sm-2" id="product-line">
			<a href="industrial_applications/food_beverage.php">
				<img src="images/home_applications/Food_Beverage.jpg" class="img-padding img-responsive" />
				<p class="prod-line-title">Food &amp; Beverage</p>
			</a>
		</div>
		
		<div class="col-sm-2" id="product-line">
			<a href="industrial_applications/pharma.php">
				<img src="images/home_applications/Pharmaceutical.jpg" class="img-padding img-responsive" />
				<p class="prod-line-title">Pharmaceutical</p>
			</a>
		</div>
		
		<div class="col-sm-2" id="product-line">
			<a href="industrial_applications/oil_gas.php">
				<img src="images/home_applications/Oil_Gas.jpg" class="img-padding img-responsive" />
				<p class="prod-line-title">Oil &amp; Gas</p>
			</a>
		</div>
		
		<div class="col-sm-2" id="product-line">
			<a href="industrial_applications/hazardous.php">
				<img src="images/home_applications/Hazardous_Zone.jpg" class="img-padding img-responsive" />
				<p class="prod-line-title">Hazardous Zone</p>
			</a>
		</div>
	</div>
	
	<br />
	
	<div class="row">
		<div class="col-sm-2" id="product-line">
			<a href="industrial_applications/waste_water_management.php">
				<img src="images/home_applications/Water_Treatment.jpg" class="img-padding img-responsive" />
				<p class="prod-line-title">Waste Water Management</p>
			</a>
		</div>
		
		<div class="col-sm-2" id="product-line">
			<a href="industrial_applications/control_room.php">
				<img src="images/home_applications/Control_Room.jpg" class="img-padding img-responsive" />
				<p class="prod-line-title">Control Room</p>
			</a>
		</div>
		
		<div class="col-sm-2" id="product-line">
			<a href="industrial_applications/embedded_computing.php">
				<img src="images/home_applications/Embedded.jpg" class="img-padding img-responsive" />
				<p class="prod-line-title">Embedded Computing</p>
			</a>
		</div>
		
		<div class="col-sm-2" id="product-line">
			<a href="industrial_applications/commercial.php">
				<img src="images/home_applications/Pro_AV.jpg" class="img-padding img-responsive" />
				<p class="prod-line-title">Commercial Integration</p>
			</a>
		</div>
		
		<div class="col-sm-2" id="product-line">
			<a href="industrial_applications/marine.php">
				<img src="images/home_applications/Marine.jpg" class="img-padding img-responsive" />
				<p class="prod-line-title">Marine</p>
			</a>
		</div>
		
		<div class="col-sm-2" id="product-line">
			<a href="industrial_applications/healthcare.php">
				<img src="images/home_applications/Healthcare.jpg" class="img-padding img-responsive" />
				<p class="prod-line-title">Healthcare</p>
			</a>
		</div>
		
	</div>
</div>
<!-- /Applications -->









<!--
	News & Resources
-->
<div class="section">
	<div class="row">
		<h2 class="title">NEWS &amp; RESOURCES <hr class="section-line" /></h2>
		<div class="col-sm-4 col-lg-2" id="product-line">
			<div class="well nr-well">
				<a href="new_products.php">
					<h3 class="text-center new-resources-title">NEW PRODUCTS</h3>
					<img src="images/new-products.png" class="center-block img-responsive" />
				</a>
			</div>
		</div>
		<!--
			<div class="col-sm-4 col-lg-2" id="product-line">
					<div class="well nr-well">
						<a href="#">
								<h3 class="text-center new-resources-title">ODM CUSTOM DESIGN</h3>
								<img src="images/custom-design.png" class="center-block img-responsive" />
						</a>
					</div>
			</div>
		-->
		<div class="col-sm-4 col-lg-2" id="product-line">
			<div class="well nr-well">
				<a href="news_and_events">
					<h3 class="text-center new-resources-title">NEWS &amp; EVENTS</h3>
					<img src="images/news_events.png" class="center-block img-responsive" />
				</a>
			</div>
		</div>
		<div class="col-sm-4 col-lg-2" id="product-line">
			<div class="well nr-well">
				<a href="partners_and_memberships.php">
					<h3 class="text-center new-resources-title">OUR PARTNERS</h3>
					<img src="images/our-partners.png" class="center-block img-responsive" />
				</a>
			</div>
		</div>
		<div class="col-sm-4 col-lg-2" id="product-line">
			<div class="well nr-well">
				<a href="support.php">
					<h3 class="text-center new-resources-title">SUPPORT</h3>
					<img src="images/support.png" class="center-block img-responsive" />
				</a>
			</div>
		</div>
		<div class="col-sm-4 col-lg-2" id="product-line">
			<div class="well nr-well">
				<a href="https://www.youtube.com/channel/UC3O7v0SVVThcOXN16earrgw" target="_blank">
					<h3 class="text-center new-resources-title">VIDEO</h3>
					<img src="images/video.png" class="center-block img-responsive" />
				</a>
			</div>
		</div>
		<div class="col-sm-4 col-lg-2" id="product-line">
			<div class="well nr-well">
				<a href="blog">
					<h3 class="text-center new-resources-title">BLOG</h3>
					<img src="images/blog.png" class="center-block img-responsive" />
				</a>
			</div>
		</div>
	</div>
</div>
<!-- /News & Resources -->






<!--
	Featured Products
-->
<div class="section">
	<div class="row">
		<h2 class="title">FEATURED PRODUCTS <hr class="section-line" /></h2>
		
		<!-- 1 -->
		<div class="col-sm-6 col-md-4 featured_product">
			<div class="well clearfix">
				<a href="products/product_details.php?pn=BoxPC-402-G00">
					<img src="images/product_thumbs/BoxPC-402G.jpg" width="150px" class="img-featured-prod" />
					<p class="feat-prod-name">BoxPC-402</p>
				</a>
				<p class="feat-prod-desc">
					Fanless Wall-Mount Embedded PC, Q77 Ivy Bridge Platform with i7 CPU, 24VDC, 2x PCIe and 2x PCI Expansion Slots, Dual Swappable SSD/HDD Bays
				</p>
			</div>
		</div>
		
		<!-- 2 -->
		<div class="col-sm-6 col-md-4 featured_product">
			<div class="well clearfix">
				<a href="products/product_details.php?pn=BoxPC-138-G00">
					<img src="images/product_thumbs/BoxPC-138-D00.jpg" height="150" width="150" class="img-featured-prod" />
					<p class="feat-prod-name">BoxPC-138-G00</p>
				</a>
				<p class="feat-prod-desc">
					
				</p>
			</div>
		</div>
		
		<!-- 3 -->
		<div class="col-sm-6 col-md-4 featured_product">
			<div class="well clearfix">
				<a href="products/product_details.php?pn=MicroBox-7824A-C01">
					<img src="images/product_thumbs/MicroBox-7824A-C01.jpg" height="150" width="150" class="img-featured-prod" />
					<p class="feat-prod-name">MicroBox-7824A-C01</p>
				</a>
				<p class="feat-prod-desc">
					Fanless Embedded Box PC, Intel Atom Dual Core N2800 Platform, 24WDC, Smart Battery Option, External Rechargeable Lithium Battery Function Provides Uninterrupted Operation if Power Outage Occurs
				</p>
			</div>
		</div>
		
		<!-- 4 -->
		<div class="col-sm-6 col-md-4 featured_product">
			<div class="well clearfix">
				<a href="products/product_details.php?pn=ARP-3815AP-C01">
					<img src="images/product_thumbs/ARP-3815AP.jpg" height="150" width="150" class="img-featured-prod" />
					<p class="feat-prod-name">ARP-3815AP-C01</p>
				</a>
				<p class="feat-prod-desc">
					Fanless 15" Touch Panel PC, Intel Atom N2800 CPU, Projected Capacitive Touch, 1x Mini PCIe Expansion Slot, NEMA 4/4X
				</p>
			</div>
		</div>
		
		<!-- 5 -->
		<div class="col-sm-6 col-md-4 featured_product">
			<div class="well clearfix">
				<a href="products/product_details.php?pn=ARP-2921AP-G00">
					<img src="images/product_thumbs/ARP-2921AP-G00.jpg" width="150px" class="img-featured-prod" />
					<p class="feat-prod-name">ARP-2921-G00</p>
				</a>
				<p class="feat-prod-desc">
					Fanless 21.5" Touch Panel PC, Intel i7 QM77 Mobile CPU, 5-Wire Resistive Touch, 1x Mini PCIe Expansion Slot, NEMA 4x4X
				</p>
			</div>
		</div>
		
		<!-- 6 -->
		<div class="col-sm-6 col-md-4 featured_product">
			<div class="well clearfix">
				<a href="products/product_details.php?pn=ARP-5519AX-D00">
					<img src="images/product_thumbs/ARP-5519AX-D00.jpg" width="150px" class="img-featured-prod" />
					<p class="feat-prod-name">ARP-5519AX-D00</p>
				</a>
				<p class="feat-prod-desc">
					Fanless 19" Touch Panel PC, Intel Core 2 Duo CPU, 5-Wire Resistive Touch, NEAM 4X, Class 1 Div 2
				</p>
			</div>
		</div>
		
		<!-- 7 -->
		<div class="col-sm-6 col-md-4 featured_product">
			<div class="well clearfix">
				<a href="products/product_details.php?pn=ADM-2121AP">
					<img src="images/product_thumbs/ADM-2121AP.jpg" width="150" class="img-featured-prod" />
					<p class="feat-prod-name">ADM-2121AP</p>
				</a>
				<p class="feat-prod-desc">
					Rugged Industrial 21" Projected Capacitive Touch Display, NEMA 4/4X, 250 Nit, 1920 X 1080 Resolution
				</p>
			</div>
		</div>
		
		<!-- 8 -->
		<div class="col-sm-6 col-md-4 featured_product">
			<div class="well clearfix">
				<a href="products/product_details.php?pn=ADM-5842AX">
					<img src="images/product_thumbs/adm_5842ax_v1a.jpg" height="150" width="150" class="img-featured-prod" />
					<p class="feat-prod-name">ADM-5842AX</p>
				</a>
				<p class="feat-prod-desc">
					Rugged Industrial 42" LCD Touch Display, NEMA 4/4X Stainless Steel Enclosure, IR Touch Screen, 1920 X 1080 HD Resolution, Full Color, Full HD Display
				</p>
			</div>
		</div>
		
		
		<!-- 9 -->
		<div class="col-sm-6 col-md-4 featured_product">
			<div class="well clearfix">
				<a href="products/product_details.php?pn=ADM-5865BP-A01">
					<img src="images/product_thumbs/ADM-5865BP-01.jpg" width="150px" class="img-featured-prod" />
					<p class="feat-prod-name">ADM-5865BP</p>
				</a>
				<p class="feat-prod-desc">
					Rugged Industrial 65" Active Matrix TFT LCD Touch Display, Optical Multi-Touch Screen, 1920 X 1080 HD Resolution, Deep Color, Full HD Display
				</p>
			</div>
		</div>
		
		<!-- 10 -->
		<div class="col-sm-6 col-md-4 featured_product">
			<div class="well clearfix">
				<a href="products/product_details.php?pn=AMP-1616">
					<img src="images/product_thumbs/AMP-1616.jpg" width="150px" class="img-featured-prod" />
					<p class="feat-prod-name">AMP-1616</p>
				</a>
				<p class="feat-prod-desc">
					16x16, Video Matrix Switch, Modular Design, Multi-format, Full HD, HDCP, HDMI, CAT 5e/6/7, IR/RS-232/TCP/IP/USB/Software Control, Input/Output Group Settings
				</p>
			</div>
		</div>
		
		<!-- 11 -->
		<div class="col-sm-6 col-md-4 featured_product">
			<div class="well clearfix">
				<a href="products/product_details.php?pn=MVD-104">
					<img src="images/product_thumbs/mvd104.jpg" height="150" width="150" class="img-featured-prod" />
					<p class="feat-prod-name">MVD-104</p>
				</a>
				<p class="feat-prod-desc">
					2U 19" Rack Mount, 4 Channel Swappable Video Input and Output Modules, DVI / HDMI / VGA / CVBS / Component / Video Input Module Options
				</p>
			</div>
		</div>
		
		<!-- 12 -->
		<div class="col-sm-6 col-md-4 featured_product">
			<div class="well clearfix">
				<a href="products/product_details.php?pn=ARD-1005">
					<img src="images/product_thumbs/ARD-1005.jpg" height="150" width="150" class="img-featured-prod" />
					<p class="feat-prod-name">ARD-1005</p>
				</a>
				<p class="feat-prod-desc">
					Power Over Ethernet (PoE), DVI Digital Extender up to 246 ft, support DVI/HDMI video signal, resolution up to 1920x1080@60Hz
				</p>
			</div>
		</div>
		
	</div>
</div>
<!-- /Featured Products -->


<div class="row section">
	<?php include($www ."footer.inc.php"); ?>
</div>

</div><!-- /container-fluid -->

<?php include($www ."/sitewide_scripts.inc.php"); ?>

<!-- PAGE SPECIFIC SCRIPTS -->
<script type="text/javascript">
	$('.carousel').carousel({
	  interval: 5000,
	  pause: "hover",
	  wrap: true
	})
</script>
<!-- /PAGE SPECIFIC SCRIPTS -->




</body>
</html>