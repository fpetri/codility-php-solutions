<?php

function solution($A) {
    // write your code in PHP5
    
    $register=array();
    sort($A);
    $count=count($A);
    //
    for($i=0;$i<count($A);$i++)
    {
      if(!array_key_exists($A[$i],$register))
      {
          $register[$A[$i]]=$A[$i];
      }else{
          //duplicates found exit 
          return 0;
      }
      //lets check if each number between 1-n exists 
      if($A[$i]!=$i+1)
           return 0;
        
    }
    
    // lets check if sum is ok 
    $sum=array_sum($A);
    $expectedSum=$count*($A[0]+$A[$count-1])/2;
    // echo "here";
    //check if there is a skipped ellement
    return ($sum==$expectedSum)?1:0;
    


    

}