<?php

function solution($N, $A) {
    //@todo: 
    $clocks=array();
    $max=0;
    
    for($i=0;$i<$N;$i++){
        $clocks[$i]=0;
    }
    
    $count=count($A);
    
    for($i=0;$i<$count;$i++){
      if($A[$i] > $N){
      	//Its over  9000  Max counter time
        for($j=0;$j<$N;$j++){
            $clocks[$j]=$max;
        }

      }
      
      if(($A[$i] <= $N) && $A[$i] >=1){
      	//increment
          $clocks[$A[$i]-1]= $clocks[$A[$i]-1]+1;
          if($clocks[$A[$i]-1] > $max)
            $max=$clocks[$A[$i]-1];
      }
     
    } 
    
    return $clocks;
    
}