<?php
	include '../control/functions/func.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$outsourced_cost = clean($_POST['cost']);
		$labour = 2;
		$outsourced_detail = array('print type' => $_POST['print-type'],
								   'print position' => $_POST['print-position']);

		if (!empty($outsourced_cost)) {
			function selling_cost($outsourced_cost){
				global $labour;

				if (isset($_POST['vat'])) {
					$vat = ($outsourced_cost/100)*20;

					$total_cost = $vat + $outsourced_cost;
					return  margin($total_cost, $labour);


				}else{
					return margin($outsourced_cost, $labour);
				}
			}

			$selling_cost = round(selling_cost($outsourced_cost),2);
		}
	}

?>