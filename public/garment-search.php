<?php 
	include "../inc/layout/header.php";
	include "../control/exec/garment-exec.php";
?>

<?php isset($error_message)? print $error_message : '' ?>

<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="text" name="search-garment" placeholder="Search garment by name or code">
	<button type="submit">Search</button>
</form>

		
<?php 
	if (isset($search_result)) {
		# code...
?>
			<table>
				<tr>
					<th>Supplier</th>
					<th>Code</th>
					<!-- <th>Product Group</th> -->
					<th>Garment Colour</th>
					<th>Sizes</th>
					<th>Carton(72)</th>
					<th>Pack(5)</th>
					<th>Single(1)</th>
				</tr>
<?php
		while($result_row = mysqli_fetch_assoc($search_result)) {
?>	
				<tr>
					<td><?php echo $result_row['supplier'] ?></td>
					<td><?php echo $result_row['code'] ?></td>
					<td><?php echo $result_row['colours'] ?></td>
					<td><?php echo $result_row['sizes'] ?></td>
					<td><?php echo $result_row['cartonPrice'] ?></td>
					<td><?php echo $result_row['packPrice'] ?></td>
					<td><?php echo $result_row['Price'] ?></td>
					<td>
						<form method="get" action="../control/add-to-cart.php">
							<input type="number" width="30px"  name="garment_quantity" placeholder="0">
								<input type="hidden" name="garment_supplier" value="<?php echo $result_row['supplier'] ?>">
								<input type="hidden" name="garment_code" value="<?php echo $result_row['code'] ?>">
								<input type="hidden" name="garment_carton_price" value="<?php echo $result_row['cartonPrice'] ?>">
								<input type="hidden" name="garment_pack_price" value="<?php echo $result_row['packPrice'] ?>">
								<input type="hidden" name="garment_single_price" value="<?php echo $result_row['Price'] ?>">
							<button type="submit">add to Invoice/button>
						</form></td>
				</tr>



<?php	}    ?>
		</table>
<?php   
    }
?>

<?php
	include '../inc/layout/footer.php';
?>