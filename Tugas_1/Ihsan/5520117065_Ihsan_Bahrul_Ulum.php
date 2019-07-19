<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kangguru</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body>

<div class="head">    
    <marquee behavior="" direction="">TUGAS 1</marquee>
</div>

<div class="text">  
<?php 

echo "  Terdapat dua kangguru yang siap melompat. <br>
        Kangguru pertama mulai melompat di lokasi x1 dan bergerak dengan rata-rata v1 meter setiap lompatannya. <br>
        Kangguru kedua memulai di lokasi x2 dan bergerak dengan rata-rata v2 meter setiap lompatannya. <br>
        Diberikan lokasi awal dan rata-rata pergerakan untuk setiap kangguru nya. <br><br><br> "
;

function kanguru($a1,$b1,$a2,$b2){

    $x = $a1. " ";
    $y = $a2. " ";

        echo "Kanguru (".$a1.",".$b1.",".$a2.",".$b2.")";
        echo "<br>";
        for ($i=0; $i <4 ; $i++) {
            $a1 += $b1;
            $a2 += $b2;
            @$kang1.= $a1. "->";
            @$kang2.= $a2. "->";
      }
    
      echo "Kanguru A = ".$kang1;
      echo "<br>";
      echo "Kanguru B = ".$kang2;
      echo "<br>";

      if($a1 == $a2) {
          echo "<b> Yes </b> <br></br>";
      }else{
          echo "<b> No </b> <br> </br>";
      }
    }

    kanguru(0,3,4,2);
    kanguru(1,3,5,1);
    kanguru(4,2,1,5);
?>
</div>

</body>
</html>
