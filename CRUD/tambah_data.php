<?php
include 'core/init.php';
include 'template/header.php';
?>
<div class="container d-flex justify-content-center">
<div class="card" style="width: 30rem; ">
<div class="card-header bg-primary text-white text-center">Registrasi</div>
  <form method="post" action="input.php">
  <div class="form-group row ">
    <label  class="col-sm-2 col-form-label">NIM</label>
    <div class="col-sm-8">
      <input type="Teks" class="form-control" name="nim">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-8">
      <input type="Teks" class="form-control" name="nama">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">jurusan</label>
    <div class="col-sm-8">
    <select  class="form-control" name="jurusan">
        <option>Pilih Jurusan</option>
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Teknik Sipil">Teknik Sipil</option>
        <option value="Teknik Elektro">Teknik Elektro</option>
        <option value="Teknik Mesin">Teknik Mesin</option>
    </select>
  </div>
  <div class="col-sm-12 d-flex justify-content-center">
    <button type="submit" class="btn btn-primary mt-5">Simpan Data</button>
  </div>
</div>
</form>
</div>
</div>
<?php
include 'template/footer.php' 
?>
</html>