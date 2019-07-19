<?php 
function kangguru($a1,$b1,$a2,$b2){
	$kelinci1 = $a1." ";
	$kelinci2 = $a2." ";

	echo "kangguru(".$a1.",".$b1.",".$a2.",".$b2.")";
	echo "<br>";
	for($i=0; $i<4; $i++){
		$a1 +=$b1;
		$a2 +=$b2;
		@$kangguru1.=$a1."";
		@$kangguru2.=$a2."";
	}
	echo "kangguru1 =".$kangguru1;
	echo "<br>";
	echo "kangguru2 =".$kangguru2;
	echo "<br>";
	if ($a1 == $a2) {
		echo "<b> yess </b> <br></br>";
	}else{
		echo "<b> no </b> <br></br>";
	}
}
	kangguru(0,3,4,2);
	kangguru(1,3,5,1);
	kangguru(4,2,1,5);	

 ?>