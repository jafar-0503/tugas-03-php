<?php
//soal
echo "Tabungan Awal = Rp. 150000";
echo "<br>";
echo "Bunga Setahun = 12.5 %";
echo "<br>";
echo "Total Tabungan Setahun = ...?";
echo "<br>";
echo "Jawaban : Rp...";
echo "<br>";

//deklarasi
$tabungan_awal = 150000;
$bunga = 12.5 / 100;

//rumus
echo"Bunga = $bunga x $tabungan_awal";
echo "<br>";
$hasil_bunga = $bunga * $tabungan_awal;
echo "Bunga = Rp. $hasil_bunga";
echo "<br>";
echo "Bunga selama setahun adalah Rp. <b>$hasil_bunga</b>.";
echo "<br><br>";

//Hitung Jumlah tabungan Setahun
echo "Jumlah Tabungan = Tabungan Awal + Bunga";
echo "<br>";
echo "Jumlah Tabungan = $tabungan_awal + $hasil_bunga";
echo "<br>";
$jumlah_tabungan = $tabungan_awal + $hasil_bunga;
echo "Jumlah Tabungan = $jumlah_tabungan";
echo "<br><Br>";
echo "<b>Jumlah tabungan Defan setelah setahun adalah Rp. $jumlah_tabungan</b>.";


?>