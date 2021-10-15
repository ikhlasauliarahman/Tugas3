<?php

$nilai = [90, 75, 80, 88, 88, 94, 83, 70, 95, 79, 82, 86, 90, 95, 95];
$jumlah = 0;

for($i=0; $i<=count($nilai)-1; $i++)
{
    $jumlah = $jumlah + $nilai[$i];
}
$rataRata = $jumlah/count($nilai);
$nilaiAkhir = $rataRata/25;

echo ("Nilai yang diperoleh : ");
    foreach($nilai as $value)
    {
        echo ("$value". ", ");
    } 
echo "<br/>";
echo "NILAI UJIAN : " . $rataRata;
echo "<br/>";
if ($rataRata >= 80){
    echo 'Anda mendapat nilai A <br> Anda LULUS';
} else if ($rataRata >= 70){
    echo 'Anda mendapat nilai B <br> Anda LULUS';
} else if ($rataRata >= 60){
    echo 'Anda mendapat nilai C <br> Anda LULUS';
} else if ($rataRata >= 50){
    echo 'Anda mendapat nilai D <br> Anda TIDAK LULUS';
} else{
    echo 'Anda mendapat nilai E <br> Anda TIDAK LULUS';
}
echo "<br/>";
echo "Nilai Akhir : ";
function nilaiAkhir($nilaiAkhir)
{
    echo "$nilaiAkhir";
}
nilaiAkhir($nilaiAkhir);
