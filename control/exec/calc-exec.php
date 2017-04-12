<?php 

    require_once '../control/class/ClassCalc.php';
    require_once '../control/functions/func.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $calc = new CALC(); // instantiating new calculator class


    if(!empty($_POST['height'])){
       if($_POST['height'] <= 3){
           $heightError = 'minimum width 3cm';
       }else{
           $calc->setHeight($_POST['height']);
       }
    } else{
        $heightError = 'Enter height';
    }


    if(!empty($_POST['width'])){
        if($_POST['width'] <= 3){
            $widthError = 'Minimum width 3cm';
        }else{
            $calc->setWidth($_POST['width']);
        }
    }else{
        $widthError = 'Enter width';
    }

    if(!empty($_POST['detail'])){
        $calc->setDetail($_POST['detail']);
    }else{
        $detailError = 'Select detail';
    }



// vinyl selection (create a class containing multiple vinyls & its price);
    $calc->set_vCost(8);

    if(!empty($calc->height) && 
            !empty($calc->width) && 
                !empty($calc->detail)){

        $output = array('Design Width'  => $calc->width,
                        'Design Height' => $calc->height,
                        'Design Detail' => $calc->detail,
                        'Price' => $calc->output());

    } else{
        $warning = 'fill in entire form';
    }



}
