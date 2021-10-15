<?php
$nilai = [90, 75, 80, 88, 88, 94, 83, 70, 95, 79, 82, 86, 90, 95, 95];
$jumlah = 0;

for($i=0; $i<=count($nilai)-1; $i++)
{
    $jumlah = $jumlah + $nilai[$i];
}
$rataRata = $jumlah/count($nilai);
$nilaiAkhir = $rataRata/25;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikhlasul Aulia Rahman</title>
    <style>
        body, h1, h2, p, td, a, span {
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: none;
        }
        span {
            color: darkblue;
        }
        
        .bungkus {
            background-color: rgba(255, 255, 255, 0.7);
            width: 800px;
            color: black;
            margin: 20px auto;
            padding: 10px;
        }

        .icon {
            text-align: center;
        }      

    </style>
</head>
<body style="background: url(http://localhost/Code/Tugas1/icon/140251_adapted_720x1560.jpg); background-size: cover; background-attachment: fixed;">
    <div class="bungkus">
        <h1 align="center"><span>NILAI UJIAN</span></h1>
        <h2 align="center" style="margin-top: -20px;"><span> </span></h2>
        <table>
            <tr>
                <td rowspan="12" width="100px"><img src="http://localhost/Code/Tugas1/icon/20210331_162909_0000.png" alt="" width="200px" style="display: block; border-radius: 10%; border-color: white; margin-right: 0px; border: 2px;"></td>
            </tr>
            <tr>
                <td width="180px"><b>Nilai yang diperoleh</b></td>
                <td><b>:</b></td>
                <td> <?php foreach($nilai as $value){echo ("$value". ", ");} ?> </td>
            </tr>
            <tr>
                <td><b>Rata-Rata Nilai</b></td>
                <td><b>:</b></td>
                <td> <?php echo $rataRata; ?> </td>
            </tr>
            <tr>
                <td><b>Keterangan</b></td>
                <td><b>:</b></td>
                <td> <?php if ($rataRata >= 80){
                                echo 'Anda LULUS dengan mendapat nilai A';
                            } else if ($rataRata >= 70){
                                echo 'Anda LULUS dengan mendapat nilai B';
                            } else if ($rataRata >= 60){
                                echo 'Anda LULUS dengan mendapat nilai C';
                            } else if ($rataRata >= 50){
                                echo 'Anda TIDAK LULUS dengan mendapat nilai D';
                            } else{
                                echo 'Anda TIDAK LULUS dengan mendapat nilai E';
                             } ?> </td>
            </tr>
            <tr>
                <td><b>Nilai Akhir</b></td>
                <td><b>:</b></td>
                <td> <?php function nilaiAkhir($nilaiAkhir){echo "$nilaiAkhir";}nilaiAkhir($nilaiAkhir); ?> </td>
            </tr>
        </table>
        <br>
        <br>
        <br>
    </div>
    <div class="bungkus" align="center">
        <h2 align="center">GET <span>IN TOUCH</span></h2>
        <a class="icon" href="https://instagram.com/ikhlasul_rahman1412"><img src="http://localhost/Code/Tugas1/icon/Instagram.png" alt="" width="40px"></a>
        <a class="icon" href="https://facebook.com/ikhlasul.ar"><img src="http://localhost/Code/Tugas1/icon/Facebook.png" alt="" width="40px"></a>
    </div>
    <p align="right" style="color: white;"><font size="2"><i><i></font></p>
    <footer align="center" style="color: white;">
        <i><b>Copyright ©</a> 2021<br>
            Created by Ikhlasul Aulia Rahman</a></b></i>
    </footer>
</body>
</html>