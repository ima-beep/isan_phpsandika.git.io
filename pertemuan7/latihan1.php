<?php 
// $_GET
$siswa =[
    [
    "nama" => "isan",
    "nisn" => "0073988420",
    "email" => "isan@gmail.com",
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "kuning1.img"
    ],
    [
        "nama" => "ima",
        "nisn" => "008442326",
        "email" => "ima@gmail.com",
        "jurusan" => "rekayasa perangkat lunak",
        "gambar" => "kuning2.img"
        ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <ul>    <?php foreach( $siswa as $siswa ): ?>
        <li>
          <a href="latihan2.php?nama=<?=$siswa["nama"];?>%nrp=<?= $siswa["nisn"];?>&email=<?= $siswa["email"];?>&jurusan=<?= $siswa["jurusan"];?>"><?= $siswa["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
    
    </ul>

</body>
</html>