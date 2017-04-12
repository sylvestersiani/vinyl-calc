<?php  include"../inc/layout/header.php" ?>

	<div>
		<h1>Vinyl Price :</h1>
		<ul>
			<li>Vinyl Cost : 
				<?php 
					isset($_SESSION['vinyl_price']) ? print($_SESSION['vinyl_price']) : Print 'No vinyl cost' ;
				?>
			</li>
		</ul>
	</div>
	<div>
		<h1>Garment Detail :</h1>
		<ul>
			<li>Garment Qty :
				<?php 
					isset($_SESSION['garment_quantity'])? print($_SESSION['garment_quantity']) : Print 'No garment detail provided';
				?>		
			</li>
			<li>Garment Cost :
				<?php 
					isset($_SESSION['garment_single_price'])? print $_SESSION['garment_single_price'] : print 'No garment cost' ;
				?>
			</li>
			<li>Garment Code : 
				<?php 
					isset($_SESSION['garment_code'])? print($_SESSION['garment_code']) : print 'No garment code';
				?>
			</li>
		</ul>
	</div>
	<div>
		<h1>Outsourced product :</h1>
		<ul>
			<li>Outsourced production cost : 
				<?php 
					isset($_SESSION['outsourced_product'])? print($_SESSION['outsourced_product']) : print 'No outsourced products';
				?>
			</li>
		</ul>
	</div>

<?php  include"../inc/layout/footer.php" ?>