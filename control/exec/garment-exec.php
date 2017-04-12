<?php
	include '../control/functions/func.php';
	require_once "../model/db-con/database.php";

	if ($_SERVER['REQUEST_METHOD'] = 'GET') {
		
		if (!empty($_GET['search-garment'])) {
			$search = clean($_GET['search-garment']);
			$query = "SELECT * FROM ralawisePricelist WHERE supplier LIKE '%".$search."%' OR code LIKE '%".$search."%'";

			$search_result = mysqli_query($connection, $query);

			if (empty($search_result)) {
				$error_message = 'Nothing returned';
			}

		}else{
			// $error_message = 'We wish we could search without an input';
		}
		// searching data by name or code

	}