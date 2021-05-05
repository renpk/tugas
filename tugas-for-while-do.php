<?php 

	// Moch Ilham Rendiansyah

	$h = 8;

	for($m = 13; $m >= $h; $m--)
		{
			if( ($m - $h == 5) ){
				echo 13 - 8 . "<br>" . "<br>";
				break;
			}else{
				echo 0 . "<br>";
			  }
		}


	$m = 13;
	$i = 9;

		while ($m >= $i) 
		{
				if ( ($m - $i == 4) ) {
					echo 13 - 9 . "<br>" . "<br>";
					break;
				}else{
					echo 0 . "<br>";
		  	  	  }
				$m--;
		}

		
	$r = 18;
	$h = 8;

		do {
				if ( ($r - $h == 10) ) {
					echo 18 - 8 . "<br>". "<br>" ;
					break;
				}else{
					echo 0 . "<br>" ;
				  }
				$r--;
		}while ($r >= $h);

 ?>