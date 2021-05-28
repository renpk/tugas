<?php 
	
	$input = "Ando";
	$nama  = ['Doni', 'Gace', 'Ando', 'Mimi' ];
	var_dump($nama [2]);
	for ($u = 0; $u <= count($nama) -1; $u++)
	{
		if ($nama [$u] === $input ){
			echo " User ditemukan  <br>";
		} else {
			echo " User belum terdaftar <br>";
		}	
			 
	}
		

		

				

 ?>