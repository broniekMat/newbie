<?php

for ($i=1; $i<=100; $i++) {

$fiz = $i % 3;
$buzz = $i % 5;  

$str = "";

    if ($fiz == 0 && $buzz == 0) {
        
        $str.= "FizzBuzz";

    } else if ($buzz == 0) {
        
        $str.= "buzz";

    } else if ($fiz == 0 ) {

       $str.= "fizz";

    } else {

        echo $str.= $i;
    }


    echo $str."</br>";

}

?>


