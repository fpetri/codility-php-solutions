<?php

function solution($X, $A) {
    // write your code in PHP5
    //this will check the prefix
    
    $storage=array();
    $sum=$X*(($X+1)/2);
    
    $newsum=0;
    
    for($i=0;$i<count($A);$i++)
    {
        if(!array_key_exists($A[$i],$storage))
        {
           //store the key
            $storage[$A[$i]]=true;
            $newsum += $A[$i];
            
        }
        if($newsum==$sum)
            return $i;
        
    }
    return -1;
    
    
    
    
}