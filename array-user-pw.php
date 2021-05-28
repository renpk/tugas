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




 ?>