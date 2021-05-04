<?php 


/* 	200 adalah bilangan genap
 	199 adalah bilangan ganjil
 	dst
 */

	$a = 200;
	
	while($a >= 80) {
			
		if ($a % 2 == 0 ) {
			echo " ini bilangan Genap = ";
		}else{
			echo " ini bilangan Ganjil = ";
		  }

		echo $a;
		echo "<br>";
		$a--;
	}


	echo "<br>";
	echo "<br>";
	echo "<br>";

	
	$b = 200;

	do{
		if($a &2 ==0){
			echo "ini bilangan Genap = ";
		}else{
			echo "ini bilangan Ganjil = ";
		}

   		echo $b . "<br>";
   		$b--;

	}while ($b >= 80)

 ?>