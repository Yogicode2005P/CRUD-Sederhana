<?php
include 'core/init.php';
$db = new proses();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $hapus = $db->hapus_data($id);

    if ($hapus) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal menghapus data.";
    }
} else {
    echo "ID tidak ditemukan.";
}
?>
