<?php  session_start();

	include '../control/functions/func.php';

		// future reference all data passed through this will be stored in a database and returned to the cart.
		if (!empty($_GET['vinyl_width'])) {
				$_SESSION['vinyl_width'] = $_GET['vinyl_width'];
				$_SESSION['vinyl_height'] = $_GET['vinyl_height'];
				$_SESSION['vinyl_detail'] = $_GET['vinyl_detail'];
				$_SESSION['vinyl_price'] = $_GET['vinyl_price'];

				redirect_to('../public/vinyl-calc.php');	
		}

		if (!empty($_GET['garment_quantity']) && $_GET['garment_quantity'] >= 1) {
			$_SESSION['garment_quantity'] = $_GET['garment_quantity'];
			$_SESSION['garment_single_price'] = $_GET['garment_single_price'];
			$_SESSION['garment_code'] = $_GET['garment_code'];

			redirect_to('../public/garment-search.php');	
		}


		if (!empty($_GET['outsourced_product'])) {
			$_SESSION['outsourced_product'] = $_GET['outsourced_product'];
			redirect_to('../public/outsourced-calc.php');
		}