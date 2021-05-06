<?php 

	$str = "saya berada dimana";
	$coba = explode(" " , $str);

		for($i = count($coba)-1; $i >= 0; $i--)
		{
				echo $coba[$i] . " ";
		}


		// Output : dimana berada saya

 ?>