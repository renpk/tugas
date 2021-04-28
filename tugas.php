<!DOCTYPE html>
<html>
<head>
	<title>Zodiak</title>
</head>
<body>

	<h1>Tugas If dan Else</h1>

	<?php 

/*	
											januari		(1)
	Aquarius	(20 Jan - 18 Feb)  			februari 	(2)
	Pisces 		(19 Feb - 20 Mar)			maret 		(3)
	Aries 		(21 Maret – 20 April)		April 		(4)
	Taurus 		(21 April – 20 Mei)			Mei 		(5)
	Gemini 		(21 Mei – 20 Juni)			juni 		(6)
	Cancer 		(21 Juni – 20 Juli)			juli 		(7)
	Leo 		(21 Juli – 21 Agust)		agustus		(8)
	Virgo 		(22 Agust – 22 Sep)			september	(9)
	Libra 		(23 Sept – 22 Okt)			oktober		(10)
	Scorpio 	(23 Okt – 22 Nov)			november	(11)
	Sagitarius 	(23 Nov – 20 Des)			desember	(12)
	Capicorn 	(21 Des - 19 Jan)
*/

	$tanggal 	= 20;
	$bulan  	= 1;
	$tanggal	= 18;
	$bulan		= 2 ;

	if ($bulan === 1 && $tanggal >=20 || $bulan === 2 && $tanggal <=18 ) {
		echo "Benar itu zodiak Aquarius";
	}else{
		echo "Salah";
	}

echo "<br>";

	$tanggal 	= 19;
	$bulan  	= 2;
	$tanggal	= 20;
	$bulan		= 3 ;

	if ($bulan === 2 && $tanggal >=19 || $bulan === 3 && $tanggal <=20 ) {
		echo "Benar itu zodiak Pisces";
	}else{
		echo "Salah";
	}

echo "<br>";

	$tanggal 	= 21;
	$bulan  	= 3;
	$tanggal	= 20;
	$bulan		= 4 ;

	if ($bulan === 3 && $tanggal >=21 || $bulan === 4 && $tanggal <=20 ) {
		echo "Benar itu zodiak Aries";
	}else{
		echo "Salah";
	}

echo "<br>";	

	$tanggal 	= 21;
	$bulan  	= 4;
	$tanggal	= 20;
	$bulan		= 5 ;

	if ($bulan === 4 && $tanggal >=21 || $bulan === 5 && $tanggal <=20 ) {
		echo "Benar itu zodiak Taurus";
	}else{
		echo "Salah";
	}

echo "<br>";

	$tanggal 	= 21;
	$bulan  	= 5;
	$tanggal	= 20;
	$bulan		= 6 ;

	if ($bulan === 5 && $tanggal >=21 || $bulan === 6 && $tanggal <=20 ) {
		echo "Benar itu zodiak Gemini";
	}else{
		echo "Salah";
	}

echo "<br>";

	$tanggal 	= 21;
	$bulan  	= 6;
	$tanggal	= 20;
	$bulan		= 7 ;

	if ($bulan === 6 && $tanggal >=21 || $bulan === 7 && $tanggal <=20 ) {
		echo "Benar itu zodiak Cancer";
	}else{
		echo "Salah";
	}

echo "<br>";

	$tanggal 	= 21;
	$bulan  	= 7;
	$tanggal	= 21;
	$bulan		= 8 ;

	if ($bulan === 7 && $tanggal >=21 || $bulan === 8 && $tanggal <=21 ) {
		echo "Benar itu zodiak Leo";
	}else{
		echo "Salah";
	}

echo "<br>";	

	$tanggal 	= 22;
	$bulan  	= 8;
	$tanggal	= 22;
	$bulan		= 9 ;

	if ($bulan === 8 && $tanggal >=22 || $bulan === 9 && $tanggal <=22 ) {
		echo "Benar itu zodiak Virgo";
	}else{
		echo "Salah";
	}

echo "<br>";	

	$tanggal 	= 23;
	$bulan  	= 9;
	$tanggal	= 12;
	$bulan		= 10 ;

	if ($bulan === 9 && $tanggal >=23 || $bulan === 10 && $tanggal <=12 ) {
		echo "Benar itu zodiak Libra";
	}else{
		echo "Salah";
	}

echo "<br>";	

	$tanggal 	= 23;
	$bulan  	= 10;
	$tanggal	= 22;
	$bulan		= 11 ;

	if ($bulan === 10 && $tanggal >=23 || $bulan === 11 && $tanggal <=22 ) {
		echo "Benar itu zodiak Scorpio";
	}else{
		echo "Salah";
	}

echo "<br>";	

	$tanggal 	= 23;
	$bulan  	= 11;
	$tanggal	= 20;
	$bulan		= 12 ;

	if ($bulan === 11 && $tanggal >=23 || $bulan === 12 && $tanggal <=20 ) {
		echo "Benar itu zodiak Sagitarius";
	}else{
		echo "Salah";
	}

echo "<br>";	

	$tanggal 	= 21;
	$bulan  	= 12;
	$tanggal	= 19;
	$bulan		= 1 ;

	if ($bulan === 12 && $tanggal >=21 || $bulan === 1 && $tanggal <=19 ) {
		echo "Benar itu zodiak Capicorn";
	}else{
		echo "Salah";
	}

	 ?>

</body>
</html>