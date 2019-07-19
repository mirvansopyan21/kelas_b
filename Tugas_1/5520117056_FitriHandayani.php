<?php

function kangaroo($k1,$k2,$ka1,$ka2){

    $kangguru1=$k1." ";
    $kangguru2=$k2." ";

    echo "Kangguru(".$k1.",".$k2.",".$ka1.",".$ka2.")";
    echo "<br>";

    for($i=0;$i<4;$i+=1){
        $k1+=$k2;
        $ka1+=$ka2;
        @$kangaroo1.=$k1." ";
        @$kangaroo2.=$ka1." ";
    }

    echo "Kangguru pertama = ".$kangaroo1;
    echo "<br>";
    echo "Kangguru kedua = ".$kangaroo2;
    echo "<br>";

    if($k1==$ka1){
        echo"<b>Yes</b> <br></br>";
    }
    else{
        echo "<b>No</b> <br></br>";
    }

}

kangaroo(0,3,4,2);
kangaroo(8,9,5,1);
kangaroo(6,1,2,3);

?>