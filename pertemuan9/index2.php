<?php
//koneksi ke database
$conn = mysqli_connect("localhost","root", "", "phpsandika");

//ambil data dari tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM siswa");
//kl misalnya error "false" pake if( !$result ){
//echo mysqli_error($conn);
//}

//ambil data (fetch) mahasiwa dari object result
//mysqli_fetch_row() //mengembalikan array numerik(angka)
//mysqli_fetch_assoc() //mengembalikan array associative
//mysqli_fetch_array() //mengembalikan keduanya
//mysqli_fetch_object()

// $mhs = mysqli_fetch_assoc($result);
// var_dump ($mhs["jurusan"]);

// $mhs = mysqli_fetch_array($result);
// var_dump($mhs);

// $mhs = mysqli_fetch_row($result);
// var_dump($mhs[1]);

// $mhs = mysqli_fetch_object($result);
// var_dump($mhs->nama);

// while( $mhs = mysqli_fetch_assoc($result) ) {
// var_dump ($mhs);
// }
?> 

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Siswa</h1>

<table border="1" cellpadding="10" cellspacing="0"

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
       </tr>
    <?php $i = 1; ?>
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
        <tr>
        <td><?= $row["id"] ?></td>
        <td>
            <a href="">Ubah</a>
            <a  href="">Hapus</a>
        </td>
        <td><img src="img/<?php echo $row["gambar"]; ?>"
        width="80"></td>
        <td><?= $row["nisn"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>

</table>
</body>
</html>