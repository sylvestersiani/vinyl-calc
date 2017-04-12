<?php 
	include "../inc/layout/header.php";
	require_once"../control/exec/calc-exec.php";

?>
		
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">

    <span class="error" style="color: red">
    	<?php isset($warning)? print $warning: '';?>
    </span>

   <ul>
       <span class="error">
			<?php isset($widthError)? print $widthError : '' ;?>	
		</span>
		<li>Width 
           <input type="number" name="width" value="<?php isset($calc->width)? print $calc->width : ''; ?>">
        </li>


       <span class="error">
       		<?php isset($heightError)? print $heightError : '';?>
       	</span>
       <li>Height 
           <input type="number" name="height" value="<?php isset($calc->height)? print $calc->height : '';?>">
       </li>

       <span class="error">
       		<?php isset($detailError)? print $detailError : '';?>	
       	</span>
       <li>detail
			<label class="vcalc">
               	<input type="radio" name="detail" value="basic-detail">
              	 <img src="#" alt="Basic detail">
           	</label>
           	<label class="vcalc">
               	<input type="radio" name="detail" value="medium">
               	<img src="#" alt="Medium details">
          	 </label>
          	 <label class="vcalc">
               	<input type="radio" name="detail" value="high">
               	<img src="#" alt="Very Detailed">
           	</label>
       </li>
       
    <li>
    Position
      <select>
        <option>Chest</option>
        <option>back</option>
        <option>left sleeve</option>
        <option>right sleeve</option>
      </select>
    </li>
       <li>
       		<input type="submit" value="Calculate">
       	</li>

   </ul>
</form>

<?php



 if(isset($output)){
     foreach($output as $description => $item ){

         if($item == $calc->output()){
             echo $description . ' : ' . '£' . $item;
         }else{
             echo $description . ' : ' . $item . ' cm' . '<br>';
         }
     }
?>
    <br>

    <?php 
          $add_to_basket = "vinyl_width='".$output['Design Width']."'";
          $add_to_basket .= "&vinyl_height='".$output['Design Height']."'";
          $add_to_basket .= "&vinyl_detail='".$output['Design Detail']."'";
          $add_to_basket .=  "&vinyl_price='".$output['Price']."'";
    ?>
    <a href="../control/add-to-cart.php?<?php echo $add_to_basket ?>"> Add to Cart</a> 

<?php
 }


?>

<br>


<?php 	include "../inc/layout/footer.php"; ?>