<?php
//koneksi ke databases
$conn = mysqli_connect("localhost", "root", "", "phpsandika");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }    
    return $rows;}


    function tambah($data) {
        global $conn;

    $nisn = htmlspecialchars($data["nisn"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

     //query insert data
     $query = "INSERT INTO siswa
     VALUES
     ('','$nisn', '$nama', '$email', '$jurusan', '$gambar')
     ";
mysqli_query($conn, $query);


return mysqli_affected_rows($conn);
 }


function hapus ($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE id = $id ");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nisn = htmlspecialchars($data["nisn"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

     //query insert data
     $query = "UPDATE siswa SET
                  nrp = '$nisn',
                  nama = '$nama',
                  email = '$email',
                  jurusan = '$jurusan',
                  gambar = '$gambar'
                  WHERE id = $id
                  ";
mysqli_query($conn, $query);


return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM siswa WHERE
            nama LIKE '%$keyword%' OR -- mencari dengan fleksibel
            nisn  LIKE '%$keyword%' OR
            email  LIKE '%$keyword%' OR
            jurusan  LIKE '%$keyword%'
            ";
    return query($query);

}






?>
