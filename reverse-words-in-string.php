<?php 

/*
			tugas rendi: 
		Judul: Reverse words In String
		Contoh: input= "saya berada dimana", output = "dimana berada saya"
		Catatan: tidak boleh pake fungsi yang sudah tersedia didalam php
		Petunjuk: Guanakan Looping
		Kriteria: Kerjakan dalam 4 versi looping (for, foreach, while,do-wihle)
*/ 


	$str = "saya berada dimana";
	// explode untuk mengubah string menjadi array
	$coba = explode(' ' , $str);
	// var_dump untuk mengecek yang di explode sudah menjadi array
	var_dump($coba);

		for($i = count($coba)-1; $i >= 0; $i--)
		{
				echo $coba[$i] . " ";
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
	$o = 0;

	while($o <= 2 ){
		if ($o = 2) {
			echo $coba[2] . " " . $coba[1]. " " . $coba[0];
		}else{
			echo "salah";
		   	}
		
		break;
		$o++;
	}

		// output = dimana berada saya
	echo "<br>";


		do {
			if($o <= count($coba))
			{
					echo $coba[2] . " " ;
					echo $coba[1] . " " ;
					echo $coba[0]. " " ;
			}else{
					echo "saya berada dimana";
				}

			// break untuk menghentikan looping
			break;		
			$o++;

		} while ( $index <= count($coba));


		// output : dimana berada saya

 ?>