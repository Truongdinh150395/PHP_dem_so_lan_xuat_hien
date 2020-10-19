<?php
 function findNumber($arr,$number) {
     $count = 0;
     for($i = 0 ; $i < count($arr) ; $i ++) {
         if($arr[$i] == $number) {
             $count ++;
         }
     }
     return $count;
 }
 $number = findNumber([1,3,3,3,4,5,6],3);
 echo $number;