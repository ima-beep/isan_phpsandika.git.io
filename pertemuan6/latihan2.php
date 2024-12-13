<?php
$siswa =[
    [
    "nama" => "Moch. Fahmi Ikhsan",
    "nisn" => "0073988420",
    "email" => "isan@gmail.com",
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "kuning1.jpg"
],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
<?php foreach( $siswa as $siswa ) :?>
    <ul>
        <li>
            <img src="img/kuning1.jpg">
        <li>Nama:<? $siswa ["nama"] ;?></li>
        <li>NISN:<? $siswa ["nisn"] ;?></li>
        <li>Jurusan:<? $siswa ["jurusan"] ;?></li>
        <li>Email:<? $siswa ["email"] ;?></li>
</ul>
<?php endforeach; ?>

</body>
</html>
