<?php
session_start();

if( !isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// Pagination konfigurasi
$jumlahDataPerHalaman = 3;
if (isset($_POST["cari"])) {
    $siswa = cari($_POST["keyword"]);
    $jumlahData = count($siswa);
    $jumlahHalaman = 1;
} else {
    $jumlahData = count(query("SELECT * FROM siswa"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
    $awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;
    $siswa = query("SELECT * FROM siswa LIMIT $awalData, $jumlahDataPerHalaman");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>

<a href="logout.php">Logout</a>
<h1>Daftar Siswa</h1>

<a href="tambah.php">Tambah Data Siswa</a>
<br><br>

<form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian.." autocomplete="off">
    <button type="submit" name="cari">Cari!</button>
</form>

<br><br>

<!-- Navigasi -->
<?php if( $halamanAktif > 1 ) : ?>
    <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
<?php endif; ?>

<?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
    <?php if( $i == $halamanAktif ) : ?>
        <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
    <?php else : ?>
        <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
    <?php endif; ?>
<?php endfor; ?>

<?php if( $halamanAktif < $jumlahHalaman ) : ?>
    <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
<?php endif; ?>

<br>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NISN</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i = $awalData + 1; ?>
    <?php foreach( $siswa as $row ): ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="80"></td>
     <td><?= $row["nisn"]; ?></td>
     <td><?= $row["nama"]; ?></td>
     <td><?= $row["email"]; ?></td>
     <td><?= $row["jurusan"]; ?></td>

    </tr>
  <?php $i++; ?>
  <?php endforeach; ?>

</table>

</body>
</html>
