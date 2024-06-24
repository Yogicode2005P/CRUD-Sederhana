<?php
class proses extends database
{
    public function tampil_data($id = null)
    {
        if ($id === null) {
            $data = mysqli_query($this->connect, "SELECT * FROM mahasiswa");
            $row = mysqli_fetch_all($data, MYSQLI_ASSOC);
            return $row;
        } else {
            $query = "SELECT * FROM mahasiswa WHERE id = ?";
            $stmt = $this->connect->prepare($query);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_assoc();
        }
    }

    public function tambah_data($nim, $nama, $jurusan)
    {
        $data = "INSERT INTO mahasiswa (nim, nama, jurusan) VALUES ('$nim','$nama','$jurusan')";
        $this->connect->query($data);
    }

    public function update_data($id, $nim, $nama, $jurusan)
    {
        $query = "UPDATE mahasiswa SET nim = ?, nama = ?, jurusan = ? WHERE id = ?";
        $stmt = $this->connect->prepare($query);
        $stmt->bind_param("sssi", $nim, $nama, $jurusan, $id);
        return $stmt->execute();
    }
    public function hapus_data($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = ?";
        $stmt = $this->connect->prepare($query);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
