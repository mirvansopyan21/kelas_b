<?php
function kangguru($a1,$b1,$a2,$b2){

    $kelinci = $a1. " ";
    $kelinci = $a2. " ";

    echo "kangguru(".$a1.",".$b1.".".$a.".".$b2.")";
    echo "<br>";
    for ($i=0; $i <4 ; $i++) {
        $a1 += $b1;
        $a2 += $b2;
        @$kangguru1.= $a1. " " ;
        @$kangguru2.= $a2. " " ;

    }

    echo "kangguru1 = ".$kangguru1;
    echo "<br>";
    echo "kangguru2 = ".$kangguru2;
    echo "<br>";

    if($a1 == $a2) {
        echo "<b> yes </b> <br> </br>";
    }
    else{
        echo "<br> no </br> <br> </br>";
    }
}
kangguru(0,3,4,2);
kangguru(1,3,5,1);
kangguru(4,2,1,5);

    