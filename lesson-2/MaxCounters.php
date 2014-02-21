<?php

//@todo fix the method to beat their timeouts 
// https://codility.com/demo/results/demoH25AY2-HRX/
function solution($N, $A) {

    $clocks=array_fill(0,$N,0);
    $max=0;
    
    // for($i=0;$i<$N;$i++){
    //     $clocks[$i]=0;
    // }
    
    $count=count($A);
    
    for($i=0;$i<$count;$i++){
      if($A[$i] > $N){
        //Its over  9000  Max counter time
        //does the same as the loop below only faster
        $clocks=array_fill(0,$N,$max);
        // for($j=0;$j<$N;$j++){
        //     $clocks[$j]=$max;
        // }

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