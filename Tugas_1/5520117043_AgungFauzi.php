<html>
<style>
body{
	font-family: sans-serif;
	background: linear-gradient(to right, orange, #ec38bc, #7303c0, cyan); 
}
#wrapper {
     width: 250px;
     margin: 0 auto;
     font-size: 18pt;
     color: white;
     text-align: center;
     
}
</style>
<body>
  <div id="wrapper">
      <br>
      <br>
      <br>
      <br>
<?php

function kanguru($y1,$z1,$y2,$z2){

    $kelinci1 = $y1. " ";
    $kelinci2 = $y2. " ";

        echo "kanguru(".$y1.",".$y2.",".$z1.",".$z2.")";
        echo "<br>";
        for ($i=0; $i <4 ; $i++) {
            $y1 += $z1;
            $y2 += $z2;
            @$kanguru1.= $y1. " ";
            @$kanguru2.= $y2. " ";
        }

        echo "kanguru1 = " .$kanguru1;
        echo "<br>";
        echo "kanguru2 = " .$kanguru2;
        echo "<br>";
        
        if($y1 == $y2) {
            echo "<b> yess </b> <br></br>";
        }else{
            echo "<b> no </b> <br> </br>";

         }    
        }
        kanguru(0,3,4,2);
        kanguru(1,3,5,1);
        kanguru(4,2,1,5);
       
?>  
</div>
</body>  