<?php 

/*
			tugas rendi: 
		Judul: Reverse words In String
		Contoh: input= "saya berada dimana", output = "dimana berada saya"
		Catatan: tidak boleh pake fungsi yang sudah tersedia didalam php
		Petunjuk: Guanakan Looping
		Kriteria: Kerjakan dalam 4 versi looping (for, foreach, while,do-wihle)
*/ 


	$str = "saya-berada-dimana";
	// explode untuk mengubah string menjadi array
	$coba = explode('-' , $str);
	// var_dump untuk mengecek yang di explode sudah menjadi array
	var_dump($coba);

		for($i = count($coba)-1; $i >= 0; $i--)
		{
				echo $coba[$i];
			if($i > 0) {
				echo " ";
			}
		}

		// output = dimana berada saya


echo "<br>";

		foreach (array_reverse($coba) as $key) 	
		{
			echo $key . " ";
		}

		// output = dimana berada saya

echo "<br>";

	$nama = 'saya berada dimana';
	$coba = explode(' ', $nama);
	var_dump($coba);
	$o = count($coba)-1;


	while($o >= 0 ) {
		echo $coba[$o];
		
		if($o > 0){
			echo " ";
		}		
		// break;
		$o--;
	}

		// output = dimana berada saya
	echo "<br>";

	$o = count($coba)-1;

		do {

			echo $coba[$o];

			if($o > 0)
			{				
				echo " ";
			}

			// break untuk menghentikan looping
			// break;		
			$o--;

		} while ( $o >= 0);


		// output : dimana berada saya


		

 ?>