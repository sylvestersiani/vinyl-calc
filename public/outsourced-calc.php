<?php 
	include "../inc/layout/header.php";
	include "../control/exec/outsource-exec.php";
?>

<!-- improve this form by adding position of the print and and the method of print which is being outsourced.
		this form is ideal only for digital products (screen printing) which is outsourced will have it own form page.
	-->
<form method="Post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<ul>
		<li>Print type : <input type="text" name="print-type"></li>

		<li>Position
			<select name="print-position">
				<option value="chest">Chest</option>
				<option value="back">back</option>
				<option value="left-sleeve">left sleeve</option>
				<option value="right-sleeve">right sleeve</option>
				<option value="other">Other</option>
			</select>
		</li>

		<li>Cost <input type="number" step="any" name="cost"> </li>

		<li>Cost include vat?
			<label> Yes <input type="radio" name="vat" value="yes"></label>
		</li>

		<li><button type="submit">Calculate</button></li>
	</ul>
</form>





<?php 
	if (isset($outsourced_detail) && isset($selling_cost)) {
		foreach ($outsourced_detail as $outsourced_det => $outsourced_val) {
			# code...
			echo ucfirst($outsourced_det) .': ' . $outsourced_val .'<br>'; 
		}
		print $selling_cost;
		
		echo '<a href="../control/add-to-cart.php?outsourced_product='.$selling_cost.'&print_type='.$outsourced_detail['print type'].'&print_position='.$outsourced_detail['print position'].'"">Add to invoice</a>';

	}
?>



<?php 
	include "../inc/layout/footer.php";
?>