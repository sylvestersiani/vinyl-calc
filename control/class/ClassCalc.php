<?php

include "../control/functions/func.php";


/**
 * Created by PhpStorm.
 * User: sylvestersiani
 * Date: 25/11/2015
 * Time: 02:42
 */

class CALC{
    public $height;
    public $width;
    public $detail;
    public $vCost; // how much im paying for the vinyl per meter 
    private $labour = 1.50; // cost of running studio per t-shirt


    public function set_vCost($vCost){
        $this->vCost = clean($vCost);
    }
    public function setHeight($height){
        $this->height = clean($height);
    }
    public function setWidth($width){
        $this->width = clean($width);
    }
    public function setDetail($detail){
        $this->detail = clean($detail);
    }

/* v = vinyl
    pc = per centimenter
*/
    // taking the cm width of artwork & deviding it by 
   private function vCost_pc(){
       $vCost_mm_sqr = $this->vCost/5000; // calculating mm squared cost of the vinyl (this includes delivery also )
       $vMargin = ($vCost_mm_sqr/100)*100; // adding marging 100%
       $vSales = $vCost_mm_sqr+$vMargin; 
       return $vSales; // how much we would sell the 500mm by 1meter roll in mm
    }

    private function calculate(){
        $size = $this->width * $this->height; // artwork size
        $vPrice = $size * $this->vCost_pc();
        switch ($this->detail) {
            case 'low':
                return $vPrice;
                break;
            case 'medium':
                return $vPrice + ( $vPrice / 100)*30; // adding 10% of total price
                break;
            case 'high':
                return $vPrice + ( $vPrice / 100)*60; // adding 15% of total price
                break;
            default:
        }
        return $vPrice;
    }

    private function margin(){
        $rCost = $this->calculate()+$this->labour;
        $pMargin = ($rCost/100)*80; // 80% margin
        $total = $rCost + $pMargin;
        return $total;
    }

    public function output(){
        return round($this->margin(),2);
    }


    public function __construct(){}
}


?>

