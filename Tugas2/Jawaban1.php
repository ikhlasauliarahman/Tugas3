<?php

$hari = array("Minggu,", " Senin,", " Selasa,", " Rabu,", " Kamis,", " Jum'at,", " Sabtu,");
$bulan = ["Januari,", " Februari,", " Maret,", " April,", " Mei,", " Juni,", " Juli,", " Agustus, ", " September,", " Oktober,", "  November,", " Desember,"];
$jml = count($hari);
$total = count($bulan);

$hasil = $total*17;

echo "Hari : ";
for($i=0; $i<$jml; $i++){
    echo $hari[$i];
}
echo"<br>";
echo "Bulan : ";
for($i=0; $i<$total; $i++){
    echo $bulan[$i];
}
echo "<br>";
echo "Jumlah : " . $total;
echo "<br>";
echo "Hasil : " . $hasil;
if ($total){
    echo ' merupakan hasil genap';
} else {
    echo ' merupakan hasil ganjil';
}