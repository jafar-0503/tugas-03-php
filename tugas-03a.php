<?php
//soal
echo "Jarak kota A-Z = 360 Km";
echo "<br>";
echo "Kecepatan Motor = 90";
echo "<br>";
echo "Waktu Tempuh = ...?";
echo "<br>";
echo "Jawaban : ...Menit";
echo "<br>";

//deklarasi
$jarak = 360;
$kecepatan = 90;

//rumus
echo "V = s / t";
echo "<br>";
echo "$kecepatan = $jarak / t";
echo "<br>";
echo "t = $jarak / $kecepatan";
$time = $jarak / $kecepatan;
echo "<br>";
$menit = $time * 60;
echo "t = $time Jam ($menit Menit)";
echo "<br>";
echo "<br>";
echo "<b>Jadi, jarak yang ditempuh antara kota A-Z adalah $time Jam ($menit Menit).</b>";

?>