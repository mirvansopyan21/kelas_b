<?php
function kangguru($x1, $y1, $x2, $y2){
    $kucing1 = $x1. " ";
    $kucing2 = $x2. " ";

    echo "kangguru(".$x1.",".$y1.",".$x2.",".$y2.")";
    echo "<br>";

    for($i=0; $i<4; $i++){
        $x1 += $y1;
        $x2 += $y2;

        @$kangguru1.= $x1. " ";
        @$kangguru2.= $x2. " ";
    }

    echo "kangguru1 = ".$kangguru1;
    echo "<br>";
    echo "kangguru2 = ".$kangguru2;
    echo "<br>";

    if($x1 == $x2){
        echo "<b> yes </b> <br></br>";
    }else{
        echo "<b> no </b> <br></br>";
    }
}

kangguru(6,9,6,9);
kangguru(2,0,3,7);
kangguru(5,8,1,5);

?>