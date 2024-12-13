<?php

require 'functions.php';

// Ambil ID dan validasi
$id = isset($_GET["id"]) ? intval($_GET["id"]) : 0;
if ($id <= 0) {
    echo "
        <script>
            alert('ID tidak valid!');
            document.location.href = 'index.php';
        </script>
    ";
    exit;
}

// Hapus data
if (hapus($id) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
}

?>
