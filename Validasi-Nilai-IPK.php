<?php 
	
/*
	Soal:

 Standart nilai IPK agar bisa mengambil 24 SKS adalah >= 3. 
 - Jika nilai IPK adalah 2.5 dan kurang dari 3 maka, SKS yang bisa diambil hanya 21 SKS.
 - Jika nilai IPK adalah >= 2 dan kurang dari 2.5 maka, SKS yang bisa diambil hanya 18 SKS.
 - Jika nilai IPK adalah >= 1.5 dan kurang dari 2 maka, SKS yang bisa diambil hanya 15 SKS.
 - Jika nilai IPK kurang dari 1.5 maka, SKS yang bisa diambil hanya 12 SKS

 Catatan:
 - Input Nilai IPK bisa diubah secara manual

*/ 


	$IPK = 2.5 ;

	if ($IPK < 3) {
		echo "SKS yang bisa di ambil hanya 21 SKS";
	}else{
		echo "SKS tidak bisa diambil";
	}

echo "<br>";

	if ($IPK >= 2 && $IPK < 2.5) {
		echo "SKS yang bisa di ambil hanya 18 SKS";
	}else{
		echo "SKS tidak bisa diambil";
	}

echo "<br>";	

	if ($IPK >= 1.5 && $IPK < 2) {
		echo "SKS yang bisa di ambil hanya 15 SKS";
	}else{
		echo "SKS tidak bisa diambil";
	}

echo "<br>";	

	if ($IPK < 1.5 ) {
		echo "SKS yang bisa di ambil hanya 12 SKS";
	}else{
		echo "SKS tidak bisa diambil";
	}

 ?>