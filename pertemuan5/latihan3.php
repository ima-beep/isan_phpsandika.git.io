<?php
$siswa = [
    ["isan", "2341564251", "rekayasa perangkat lunak", "isan@gmail.com"],
    ["ima", "2341564251", "rekayasa perangkat lunak", "ima@gmail.com"],
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
</head>
</html>
<h1>Daftar Siswa</h1>

<?php foreach( $siswa as $siswa ) : ?>
<ul>
    <li>Nama :<?= $siswa[0]; ?></li>
    <li>NISN : <?= $siswa[1]; ?></li>
    <li>Jurusan : <?= $siswa[2]; ?></li>
    <li> Email : <?= $siswa[3]; ?></li>
    
</ul>
<?php endforeach; ?>