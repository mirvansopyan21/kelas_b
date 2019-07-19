 <?php
    kanguru(0,3,4,2);
    kanguru(3,2,5,1); 
    kanguru(1,2,6,3);
    kanguru(0,6,8,4);

 function kanguru($x1,$v1,$x2,$v2){
     $kanguru1 = $x1." ";
     $kanguru2 = $x2." ";

        echo "<center><b>KANGURU ( ".$x1." , ".$v1." , ".$x2." , ".$v2." )</b></center>";
        echo "<br>";

        for($i=0; $i<4; $i++){
            $x1 += $v1;
            $x2 += $v2;
            @$kanguru.= $x1. " ";
            @$kanguru.= $x2. " ";
        }

        echo"<center>kanguru 1 = "."$kanguru1</center>";
        echo "<br>";
        echo"<center>kanguru 2 = "."$kanguru2</center>";
        echo "<br>";
        
        if($x1 == $x2){
            echo "<center><b><u> Yess </u></b></center>";
            echo "<br>";
            echo "<br>";
        }else{
            echo "<center><b><u> No </u></b></center>";
            echo "<br>";
            echo "<br>";
        }
 }

//  5520117046-PatriaWiwaha
