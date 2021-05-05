<?php 


/* 	200 adalah bilangan genap
 	199 adalah bilangan ganjil
 	dst
 */

	$a = 200;
	
	while($a >= 80) {
			
		if ($a % 2 == 0 ) {
			echo $a .  " adalah bilangan Genap ";
		}else{
			echo $a . " adalah bilangan Ganjil ";
		  }

		echo "<br>";
		$a--;
	}


	echo "<br>";
	echo "<br>";
	echo "<br>";

	
	$b = 200;

	do{
		if($b % 2 == 0){
			echo $b . " adalah bilangan Genap";
		}else{
			echo $b . " adalah bilangan Ganjil ";
		}

   		echo "<br>";
   		$b--;

	}while ($b >= 80)

 ?>