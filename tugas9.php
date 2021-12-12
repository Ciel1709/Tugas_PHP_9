<?php 
    $bil1 = 0;
    $bil2 = 0;
    $temp;
    for ($i=0; $i <22 ; $i++) { 
        if ($i==0) {
            echo "0 ";
            $bil1 = 0;
        }else if($i==1){
            echo "1 ";
            $bil2 = 1;
        }else{
            $temp = $bil1+$bil2;
            echo $temp." ";
            $bil1 = $bil2;
            $bil2 = $temp;
            
            
        }
    }
?>