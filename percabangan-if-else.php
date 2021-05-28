<?php 

	$nama = ['Doni', 'Gace', 'Ando', 'Mimi' ];
	// var_dump($nama);
	for ($u = 0; $u <= count($nama) -1; $u++)
	{
			if ($u >= 0 ){
			  echo $nama [$u] . " : User ditemukan  <br>";
		  	}else{
			  echo $nama [$u] . " : User belum terdaftar <br>";
				 }	
	}
		
		

				

 ?>