<?php 
    function isPrime($num){
        for ($i=2; $i <= $num/2 ; $i++) { 

            if($num%$i==0){
                return false;
            }
        }
        return true;
    }
    // echo +isPrime(4);
    for ($i=2; $i <200 ; $i++) { 
        if($i<=2){
            echo "2,";
        }else if(isPrime($i)){
            echo $i.",";
        }
    }
?>