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

	$tanggal 	= 19;
	$bulan  	= 1;
	

	if ($bulan === 1 && $tanggal >=20 || $bulan === 2 && $tanggal <=18 ) {
		echo "Benar itu zodiak Aquarius";
	}

echo "<br>";

	
	if ($bulan === 2 && $tanggal >=19 || $bulan === 3 && $tanggal <=20 ) {
		echo "Benar itu zodiak Pisces";
	}

echo "<br>";

	
	if ($bulan === 3 && $tanggal >=21 || $bulan === 4 && $tanggal <=20 ) {
		echo "Benar itu zodiak Aries";
	}

echo "<br>";	

	
	if ($bulan === 4 && $tanggal >=21 || $bulan === 5 && $tanggal <=20 ) {
		echo "Benar itu zodiak Taurus";
	}

echo "<br>";

	

	if ($bulan === 5 && $tanggal >=21 || $bulan === 6 && $tanggal <=20 ) {
		echo "Benar itu zodiak Gemini";
	}

echo "<br>";

	

	if ($bulan === 6 && $tanggal >=21 || $bulan === 7 && $tanggal <=20 ) {
		echo "Benar itu zodiak Cancer";
	}

echo "<br>";

	

	if ($bulan === 7 && $tanggal >=21 || $bulan === 8 && $tanggal <=21 ) {
		echo "Benar itu zodiak Leo";
	}
echo "<br>";	

	

	if ($bulan === 8 && $tanggal >=22 || $bulan === 9 && $tanggal <=22 ) {
		echo "Benar itu zodiak Virgo";
	}
echo "<br>";	

	

	if ($bulan === 9 && $tanggal >=23 || $bulan === 10 && $tanggal <=12 ) {
		echo "Benar itu zodiak Libra";
	}
echo "<br>";	

	
	if ($bulan === 10 && $tanggal >=23 || $bulan === 11 && $tanggal <=22 ) {
		echo "Benar itu zodiak Scorpio";
	}
echo "<br>";	

	

	if ($bulan === 11 && $tanggal >=23 || $bulan === 12 && $tanggal <=20 ) {
		echo "Benar itu zodiak Sagitarius";
	}
echo "<br>";	

	

	if ($bulan === 12 && $tanggal >=21 || $bulan === 1 && $tanggal <=19 ) {
		echo "Benar itu zodiak Capicorn";
	}
	 ?>

</body>
</html>