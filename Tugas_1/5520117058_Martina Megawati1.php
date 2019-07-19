<?php

echo "MARTINA MEGAWATI <br>";
echo "5520117058 <br>";
echo "IF B 2017 <br><br>";
$kangguru3= "  ";
$kangguru4= "  ";

function kangguru($m1,$w1,$m2,$w2){
    echo "Kangguru(".$m1.",".$w1.",".$m2.",".$w2.")";
    echo "<br>";
for  ($i=0;$i<4;$i++){
     $m1 += $w1;
     $m2 += $w2;
     @$kangguru3.= $m1. " ";
     @$kangguru4.= $m2. " ";
}
    echo "Kangguru Betina"."=" .$kangguru3;
    echo "<br>";
    echo "Kangguru Jantan"."=" .$kangguru4;
    echo "<br>";

if ($m1==$m2){
    echo "<br> YES </br></br>";
} else{
    echo "<br> NO </br>";

    }
}
kangguru (0,3,4,2);
kangguru (0,6,4,8);
?> 