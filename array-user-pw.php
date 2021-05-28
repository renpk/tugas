<?php 
	
	$input_user = 'Doni';
	$input_pw = 'don123';
	$nama = ['Doni', 'Gace', 'Ando', 'Mimi' ];
	$password = ['don123', 'g4ce', '4ndo', 'm1m1'];
	
/*
jika $username ada maka check password
jika password benar maka tampilkan pesan positif

jika password salah tampilkan pesan negatif
jika username belum terdaftar tidak perlu check password langsung tampilkan pesan negatif
*/
	foreach ($nama as $key ) {
		foreach ($password as $value) 
		{
			  if ($key === $input_user) 
			{
				 	echo $input_user .' = ' . " check password => ";
				  	break;
			  }else if ($value === $input_pw) {
					echo $input_pw . " password anda benar <br> ";
			  }else if ($value === $input_pw){
					echo "user/password belum terdaftar <pre>";
			  }else if ($key === $input_user) {
					echo "tidak perlu di check !";
			}
		}
	}
	



 ?>