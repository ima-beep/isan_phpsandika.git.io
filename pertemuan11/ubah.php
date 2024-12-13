<?php 
require 'functions.php';  

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$siswa = query("SELECT * FROM siswa WHERE id = $id") [0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
   

   

    // cek apakah data berhasil diubah atau tidak
   if( ubah($_POST) > 0 ) {
        echo "
             <script>
                alert('data gagal diubah!');
                document.location.href = 'index.php';
            </script>;
    ";
   }else {
        echo "
         <script>
                alert('data berhasil diubah!');
              document.location.href = 'index.php';
        </script>;
   ";
   }

}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Siswa</title>
</head>
<body>
    <h1>Ubah Data Siswa</h1>

    <form action="" method="post">
       <input type="hidden" name="id" value="<?= $siswa["id"]; ?>">
        <ul>
            <li>
                <label for="nisn">NISN :</label>
                <input type="text" name="nisn" id="nisn" required value="<?= $siswa["nisn"]; ?>">
            </li>
            <li>
                <label for="nama">Nama  :</label>
                <input type="text" name="nama" id="nama" value="<?= $siswa["nama"]; ?>">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" value="<?= $siswa["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $siswa["jurusan"]; ?>">
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" value="<?= $siswa["gambar"]; ?>">
            </li>
            <li>
    <button type="submit" name="submit">Ubah Data!</button>
</li>
</form>

</body>
</html>