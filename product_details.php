<?php
include("../common.php");

try{
	$pn=$db->quote($_GET['pn']);
	$query=$db->query("SELECT * FROM products where pn = $pn");
	$row=$query->fetch(PDO::FETCH_ASSOC);
}
catch(PDOException $e){
	$e->getMessage();
}

$page_title = $_GET['pn'];

include($www ."head.inc.php");
?>


<div class="container-fluid">

	<div class="row">
		<!-- Left Column -->
		<div class="col-sm-3">
			<?php include($www ."product_menu.inc.php"); ?>
		</div>

		<!-- right Column -->
		<div class="col-sm-offset-1 col-sm-7">
			<img src="../images/page_banner-AboutArista.png" class="img-responsive" height="213" width="962">
			<h1 class="page_title"><?php echo $page_title; ?><br />
			<span class="subtitle"><?php echo $row['title']; ?></span></h1>

			<?php
				if($row['cat1'] != "") { echo $row['cat1']; }
				if($row['cat2'] != "") { echo " &nbsp;&nbsp; / &nbsp;&nbsp; ". $row['cat2']; }
				if($row['cat3'] != "") { echo " &nbsp;&nbsp; / &nbsp;&nbsp; ". $row['cat3']; }
				echo " &nbsp;&nbsp; / &nbsp;&nbsp; ". $row['pn'];
			?>

			<div class="row">
				<div class="col-sm-6">

					<!-- Get an array of images for this product -->
					<?php
					$photos = glob("_images/". $row['pn'] ."-*");
					sort($photos);
					$num = count($photos);

					if($num > 0) {
						$first = array_shift($photos);
						echo "<a href='". $first ."' data-lightbox='prod_img'>";
						echo "	<img src='". $first ."' class='img-responsive' />";
						echo "</a>";

						foreach($photos as $photo) {
							echo "<a rel='gallery' href='". $photo ."'data-lightbox='prod_img'>";
							echo "	<img src='". $photo ."' width='100px' />";
							echo "</a>";
						}
					}
					?>


				</div>

				<div class="col-sm-6">
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<ul>
						<?php
						try{
							$pn=$db->quote($_GET['pn']);
							$query = $db->query("SELECT * FROM features WHERE pn=$pn");
							$row = $query->fetch(PDO::FETCH_ASSOC);
							for($i=1;$i<=13;$i++) {
								if($row[$i] != "") {
									echo "<li>". $row[$i] ."</li>";
								}
							}
						}
						catch(PDOException $e){
							$e->getMessage();
						}
						?>
					</ul>

					<p>&nbsp;</p>
					<?php
					//	try{
					//		$pn=$db->quote($_GET['pn']);
					//		$query = $db->query("SELECT * FROM logos WHERE pn=$pn");
					//		$logo = $query->fetch(PDO::FETCH_ASSOC);

					//		if($logo['ce'] != "") { logo_ce(); }
					//		if($logo['ul'] != "") { logo_ul(); }
					//		if($logo['intel'] != "") { logo_intel(); }
					//		if($logo['winembedded'] != "") { logo_winembedded(); }
					//		if($logo['intouch'] != "") { logo_intouch(); }
					//		if($logo['smartbattery'] != "") { logo_smartbattery(); }
					//		if($logo['wifi'] != "") { logo_wifi(); }
					//		if($logo['thinmanager'] != "") { logo_thinmanager(); }
					//		if($logo['swappablecpu'] != "") { logo_swappablecpu(); }
					//		if($logo['auxvideo'] != "") { logo_auxvideo(); }
					//	}
					//	catch(PDOException $e){
					//		$e->getMessage();
					//	}
					?>
				</div>
			</div>

			<div class="row">

				<p>&nbsp;</p>
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#features" role="tab" data-toggle="tab">Features</a></li>
					<li><a href="#tech_specs" role="tab" data-toggle="tab">Technical Specifications</a></li>
					<li><a href="#order_info" role="tab" data-toggle="tab">Ordering Information</a></li>
					<li><a href="#datasheets" role="tab" data-toggle="tab">Datasheets</a></li>
					<li><a href="#accessories" role="tab" data-toggle="tab">Accessories</a></li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane fade in active" id="features">
						<p>
							<ul>
								<?php
								try{
									$pn=$db->quote($_GET['pn']);
									$query = $db->query("SELECT * FROM features WHERE pn=$pn");
									$row = $query->fetch(PDO::FETCH_ASSOC);
									for($i=1;$i<=12;$i++) {
										if($row[$i] != "") {
											echo "<li>". $row[$i] ."</li>";
										}
									}
								}
								catch(PDOException $e){
									$e->getMessage();
								}
								?>
							</ul>
						</p>
					</div>

					<div class="tab-pane fade" id="tech_specs">
						<?php 
							$spec_file = "_specs/". $_GET['pn'] .".php"; 
							if(is_file($spec_file)) { include($spec_file); } 
							else { echo "<p>No technical specs available at this time.</p>"; }
						?>
					</div>

					<div class="tab-pane fade" id="order_info">
						<?php 
							$order_file = "_order_info/". $_GET['pn'] .".php"; 
							if(is_file($order_file)) { include($order_file); }
							else { echo "<p>No order info available at this time.</p>"; } 
						?>
					</div>

					<div class="tab-pane fade" id="datasheets">
						<p>
							<ul>
							<?php
								try{
									$pn=$db->quote($_GET['pn']);
									$ds = $db->query("SELECT * FROM datasheets WHERE pn=$pn");
									while($row_ds = $ds->fetch(PDO::FETCH_ASSOC)) {
										if($row_ds['label'] != "") {
											echo "<li><a href='". $row_ds['filename'] ."' target='_blank'>". $row_ds['label'] ."</a></li>";
										}
									}
								}
								catch(PDOException $e){
									$e->getMessage();
								}
							?>
							</ul>
						</p>
					</div>

					<div class="tab-pane fade" id="accessories">
						<?php 
							$acc_file = "_accessories/". $_GET['pn'] .".php"; 
							if(is_file($acc_file)) { include($acc_file); } 
							else { echo "<p>No accessory info available at this time.</p>"; }
						?>
					</div>

				</div>
			</div>
		</div>

		<div class="col-sm-1">
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
<script type="text/javascript" src="<?php echo $www; ?>js/lightbox.js"></script>

<!-- /PAGE SPECIFIC SCRIPTS -->




</body>
</html>