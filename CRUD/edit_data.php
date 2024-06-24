<?php
include 'core/init.php';
$db = new proses();
include 'template/header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $mahasiswa = $db->tampil_data($id);

    

    if ($mahasiswa) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $jurusan = $_POST['jurusan'];

            $update = $db->update_data($id, $nim, $nama, $jurusan);

            if ($update) {
                header("Location: index.php");
                exit();
            } else {
                echo "Gagal mengupdate data.";
            }
        }
?>
        <div class="container d-flex justify-content-center">
            <div class="card" style="width: 30rem;">
                <div class="card-header bg-primary text-white text-center">Edit Data Mahasiswa</div>
                <form method="post" action="">
                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label">NIM</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nim" value="<?php echo htmlspecialchars($mahasiswa['nim']); ?>">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama" value="<?php echo htmlspecialchars($mahasiswa['nama']); ?>">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label">Jurusan</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="jurusan">
                                <option value="">Pilih Jurusan</option>
                                <option value="Informatika" <?php if($mahasiswa['jurusan'] == 'Teknik Informatika') echo 'selected'; ?>>Teknik Informatika</option>
                                <option value="Sipil" <?php if($mahasiswa['jurusan'] == 'Teknik Sipil') echo 'selected'; ?>>Teknik Sipil</option>
                                <option value="Elektro" <?php if($mahasiswa['jurusan'] == 'Teknik Elektro') echo 'selected'; ?>>Teknik Elektro</option>
                                <option value="Mesin" <?php if($mahasiswa['jurusan'] == 'Teknik Mesin') echo 'selected'; ?>>Teknik Mesin</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-sm-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary mt-3">Simpan Perubahan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
<?php
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak ditemukan.";
}

include 'template/footer.php';
?>
