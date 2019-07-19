<?php
function kangguru($x1, $y1, $x2, $y2){

    $kucing1 = $x1. " ";
    $kucing2 = $x2. " ";

        echo "kangguru(".$x1.",".$y1.",".$x2.",".$y2.")";
        echo "<br>";

        for($i=0; $i<4; $i++{
            $x1 += $y1;
            $x2 += $y2;
            @$kangguru1.= $x1. " ";
            @$kangguru2.= $x2. " ";
        }

        echo "kangguru1 = ".$kangguru1;
        echo "<br>";
        echo "kangguru2 = ".$kangguru2;
        echo "<br>";

        if($x1 === $x2){
            echo "<b> yes </b> <br></br>";
        }else{
            echo "<b> no </b> <br></br>";
        }
    }

    kangguru(0,3,4,2);
    kangguru(1,3,5,1);
    kangguru(4,2,1,5);
?>