<?php

   function clean($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

 //    function selling_cost($production_Cost){
	// 		$margin = ($production_Cost / 100)*50;
	// 		return  $margin + $production_Cost;
	// }


    //calculating margin of cost & returning the selling price
	function margin($cost, $studio_running_cost){
		$total = $cost+$studio_running_cost;
		$margin = ($total/100)*25;
		return $total + $margin;

	}


function redirect_to($new_location){
	header('location:' . $new_location.'');
	exit;
}

?>