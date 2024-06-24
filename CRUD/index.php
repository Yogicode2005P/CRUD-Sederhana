<?php
include 'core/init.php';
$db = new proses();
include 'template/header.php';
?>
<div class="container">
<a href="tambah_data.php" class="btn btn-primary mb-3">Tambah Data</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $no = 1;
    foreach ($db->tampil_data() as $mhs) {
    ?>
    <tr>
        <th scope="row"><?php echo $no++;?></th>
        <td><?php echo $mhs['nim'];?></td>
        <td><?php echo $mhs['nama'];?></td>
        <td><?php echo $mhs['jurusan'];?></td>
        <td>
            <a href="edit_data.php?id=<?php echo $mhs['id']; ?>" class="btn btn-warning mb-3">Edit Data</a>
            <a href="delete_data.php?id=<?php echo $mhs['id']; ?>" class="btn btn-danger mb-3">Hapus Data</a>
        </td>
    </tr>
    <?php } ?>
</tbody>
</table>
</div>
<?php
include 'template/footer.php'
?>