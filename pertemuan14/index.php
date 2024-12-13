<?php
require 'functions.php';
$siswa = query("SELECT * FROM siswa");
// $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC"); untuk kecil ke besar 1-4
// $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC"); //mundur 4-1 besar ke kecil
// $mahasiswa = query("SELECT * FROM mahasiswa WHERE nrp = '008442623' "); //untuk salah satu

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
  $siswa = cari($_POST["keyword"]);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Siswa</h1>

<a href="tambah.php">Tambah Data Siswa</a>
<br><br>

<form action="" method="post">

<input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
<button type="submit" name="cari">Cari!</button> <!-- cari untuk tombol keyword untuk input -->

</form>
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
<?php $i = 1;  ?>
<?php foreach( $siswa as $row ): ?>
    <tr>
      <td><?= $i; ?></td>     
    <td>
           <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>
           <a href="hapus.php?id=<?= $row ["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
    </td>
     <td><img src="img/<?= $row ["gambar"]; ?>" width="80"></td>
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
