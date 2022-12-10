<?php
    /*function addNum($first,$second){
   $sum=$first+$second;
   return $sum;
   }
   $test=addNum(9,9);
       echo "and the some of  ".$first." and ".$second ." is ". $test; 
       */
       
       $speed1= 4;
       $speed2 = 6;
       function speedUp(){
       	 global $speed1,$speed2;
        $speed1 += $speed2;
        return $speed1;
       }
       $newspeed= speedUp();
         echo  $newspeed;

?>