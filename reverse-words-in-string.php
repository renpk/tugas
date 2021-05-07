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

echo "<br>";

		foreach (array_reverse($coba) as $key) 	
		{
			echo $key . " ";
		}

echo "<br>";
		
	//$index variabel yg saya buat untuk menyimpan nilai 0 
	$index = 0;

		while($index <= count($coba)) 
		{	
			if ($index <= count($coba) ) 
			{
				echo "dimana berada saya" . "<br> ";
				// break untuk menghentikan looping
				break;
		}else{
				echo "saya berada dimana";
		}

  			$index++;
		}

		do {
			if($index <= count($coba))
			{
				echo "dimana berada saya";
			}else{
				echo "saya berada dimana";
			}
			break;		
			$index++;

		} while ( $index <= count($coba));


		// Output : dimana berada saya

 ?>