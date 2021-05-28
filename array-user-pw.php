<?php 
	
	$nama = ['Doni', 'Gace', 'Ando', 'Mimi' ];
	$password = ['don123', 'g4ce', '4ndo', 'm1m1'];
	$akun = [
			  'Doni' => 'don123', 
			  'Gace' => 'g4ce', 
			  'Ando' => '4ndo', 
			  'Mimi' => 'm1m1'		  
			];
	
	for ($a = 0; $a < count($nama) ; $a++) { 
		if ($password = $nama) {
			 echo '<pre>';
			 echo $nama [$a] . " = User berhasil login";
		}  if ($akun = $nama && $password) {
			 echo " Akun anda benar";
		  }else{
			 echo "Password anda salah";
		}
	}















			// foreach ($nama as $key => $value) {
			// 	echo "<pre>";
			// 	echo $key . " adalah sandi dari " . $value;
			// }








	// foreach ($nama as $k ) {
	// 	foreach ($password as $v) {
	// 		echo "user login $k => $v <br/> ";
	// 		  if ($nama = $k) {
	// 			echo "user berhasil login";
	// 		 }else if ($password = $v) {
	// 			echo "user berhasil login";
	// 		 }else{
	// 			echo "password salah";
	// 		}
	// 	}
	// }


	// for ($i = 0; $i <= count($nama)-1 ; $i++) { 
	// 	for ($a = 0; $a <= count($password) -1; $a++) { 
	// 		echo $nama [$i]. '=' . $password [$a] ."<br>";	
	// 	}if ($nama >= $password) {
	// 		echo "user berhasil login";
	// 	}else{
	// 		echo "password salah";
	// 	}
		
		
	// }

// $akun = array_merge ($nama => $password);
	// 	print_r($akun) . "<br>";
	// 	// for ($a = 0; $a >= count($akun) ; $a--){
	// 	// 	if ($a >= 0) {
	// 	// 		echo "User berhasil login";
	// 	// 	}else{
	// 	// 		echo "Password anda salah";
	// 	// 	}
	// 	// }
 ?>