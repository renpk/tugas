<?php 
	
/*
	Soal:

 - Standart nilai IPK agar bisa mengambil 24 SKS adalah >= 3. 
 - Jika nilai IPK adalah 2.5 dan kurang dari 3 maka, SKS yang bisa diambil hanya 21 SKS.
 - Jika nilai IPK adalah >= 2 dan kurang dari 2.5 maka, SKS yang bisa diambil hanya 18 SKS.
 - Jika nilai IPK adalah >= 1.5 dan kurang dari 2 maka, SKS yang bisa diambil hanya 15 SKS.
 - Jika nilai IPK kurang dari 1.5 maka, SKS yang bisa diambil hanya 12 SKS

 	Catatan:
 	- Input Nilai IPK bisa diubah secara manual
 		// false && true => false
 		// false || true => true

*/ 


 	$ipk = 1.49 ;

	if ($ipk >= 3) {
		echo "Anda boleh mengambil 24 SKS";
	} else {
		if ($ipk >= 2.5 && $ipk < 3) {
    		echo "Anda boleh mengambil 21 SKS";
    	} else if ($ipk >= 2 && $ipk < 2.5) {
    		echo "Anda boleh mengambil 18 SKS";
    	} else if ($ipk >= 1.5 && $ipk < 2) {
    		echo "Anda boleh mengambil 15 SKS";
        } else{
    		echo "Anda boleh mengambil 12 SKS";
        }
	}

 ?>