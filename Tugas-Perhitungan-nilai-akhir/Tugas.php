<?php
$nama = "Fasha";
$kelas = "XII DKV BL";

$nilaiTugas = 90;
$nilaiUTS = 75;
$nilaiUAS = 85;

$nilaiAkhir = ($nilaiTugas * 30/100) + ($nilaiUTS * 30/100) + ($nilaiUAS * 30/100);

if ($nilaiAkhir <= 90) {
    $predikat = "A";
}elseif ($nilaiAkhir <= 80){
    $predikat = "B";
}elseif ($nilaiAkhir <= 70){
    $predikat = "C";
}elseif ($nilaiAkhir <= 60){
    $predikat = "D";
}else{
    $predikat = "E";
}

if ($nilaiAkhir >= 75) {
    $status = "lulus";
} else {
    $status = "anda gagal coba lagi nanti";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Hasil penilaian Siswa Fahri Akhsa</h1>
        <p>nama : <?= $nama ?></p>
        <p>kelas : <?= $kelas ?></p>
        <hr style="width: 200px; display: inline-flex;">
        <p>nilaiTugas : <?= $nilaiTugas ?></p>
        <p>nilaiUTS : <?= $nilaiUTS ?></p>
        <p>nilaiUAS : <?= $nilaiUAS ?></p>
        <hr style="width: 200px; display: inline-flex;">
        <p>total nilai : <?= $nilaiAkhir ?></p>
        <p>predikat : <?= $predikat ?></p>
        <p>status : <?= $status ?></p>
    </div>
</body>
</html>