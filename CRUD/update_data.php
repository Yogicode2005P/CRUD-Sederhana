<?php
include 'core/init.php';
$db = new proses();

// Pastikan ada parameter ID yang diterima dari form
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    // Lakukan proses update data
    $update = $db->update_data($id, $nim, $nama, $jurusan);

    if ($update) {
        // Redirect ke halaman utama atau halaman detail mahasiswa
        header("Location: index.php");
        exit();
    } else {
        // Tampilkan pesan jika terjadi kesalahan saat mengupdate
        echo "Gagal mengupdate data.";
    }
} else {
    // Tampilkan pesan jika tidak ada parameter ID yang diterima
    echo "ID tidak ditemukan.";
}
?>
