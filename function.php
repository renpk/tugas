<!DOCTYPE html>
<html>
<head>
	<p>PROVINSI JAWA TIMUR , KABUPATEN SIDOARJO</p>
	<title>function</title>
</head>
	<h4>NIK : 1726353514141526</h4>
<body>

	<?php 
	
/*
	Buat fungsi untuk menampilkan data pribadi dengan ouput seperti KTP.
	Jika usia kurang dari 17 tahun, tampilkan pesan "Anda belum cukup umur!" tanpa harus menampilkan data pribadi
*/

function persyaratan($thn_sekarang, $thn_lahir){  
	$umur = $thn_sekarang - $thn_lahir;
	return $umur;
  }

function data (
			   $nama , 
			   $ttl , 
			   $jl ,
			   $almt ,
			   $rtrw ,
			   $kel ,
			   $kec ,
			   $agama ,
			   $status ,
			   $Pekerjaan ,
			   $Kewarganegaraan ,
			   $Berlaku
			  ) 
{
	echo "Nama : " . $nama . " <br />";
	echo "Tempat/Tgl Lahir :  " . $ttl . " <br />";
	echo "Jenis Kelamin : " . $jl . " , Gol.Darah : - " . "<br />"  ;
	echo "Alamat : " . $almt . " <br />";
	echo "RT/RW : " . $rtrw . " <br />";
	echo "Kel/Desa : " . $kel . " <br />";
	echo "Kecamatan : " . $kec . " <br />";
	echo "Agama : " . $agama . " <br />";
	echo "Status Perkawinan : " . $status . " <br />";
	echo "Pekerjaan : " . $Pekerjaan . " <br />";
	echo "Kewarganegaraan : " . $Kewarganegaraan . " <br />";
	echo "Berlaku Hingga : " . $Berlaku ; 
}
	
	if ( $umur = persyaratan (2020, 2003) >= 17 ){
		echo data
		  	(
			  'Moch Ilham Rendiansyah ', 
			  'SIDOARJO, 25 Desember 2003 ',
			  'Laki-Laki',
			  'JL.HAYAM WURUK MASJID GG IV',
		      '06/07',
			  'SAWOTRATAP',
			  'GEDANGAN',
			  'ISLAM',
			  'BELUM KAWIN',
			  'PELAJAR/MAHASISWA',
			  'WNI',
			  'SEUMUR HIDUP' 
		  	);
  } else{
	   echo "Anda Belum cukup umur";
	}
		

 ?>

</body>
</html>