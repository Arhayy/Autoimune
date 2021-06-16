<ol class="breadcrumb mb-4"><br>
    <li class="breadcrumb-item active">Autoimune</li>
</ol>
<div class="card mb-4"><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <?php
                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "SELECT * FROM task_beranda WHERE id_task='$id'");
                $r = mysqli_fetch_assoc($data);
                ?>
                <form action="" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <input type="text" name="id" class="form-control" value="<?php echo $r['id_task']; ?>" hidden>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" value="<?php echo $r['judul_task']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="" class="col-form-label">Keterangan Singkat</label>
                        <textarea name="ket_singkat" id="ket_singkat" class="form-control" cols="30" rows="5"><?php echo $r['ket_singkat']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-form-label">Keterangan Lengkap</label>
                        <textarea name="ket_lengkap" id="ket_lengkap" class="form-control" cols="30" rows="10"><?php echo $r['ket_lengkap']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-form-label">Gambar</label><br>
                        <img src="images/<?php echo $r['gambar_task']; ?>" alt="" width="200"><br><br>
                        <input type="file" name="gambar" class="form-control">
                    </div>
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div><br><br>
</div>

<?php
if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $ket1 = $_POST['ket_singkat'];
    $ket2 = $_POST['ket_lengkap'];

    $namaFile = $_FILES['gambar']['name'];
    $namaSementara = $_FILES['gambar']['tmp_name'];
    $dirUpload = "images/";
    $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);
    if ($terupload) {
        $query = mysqli_query($koneksi, "UPDATE task_beranda SET  judul_task='$judul', ket_singkat='$ket1', ket_lengkap='$ket2', gambar_task='$namaFile' WHERE id_task='$id' ");
        echo "<script>alert('Data berhasil di update!');</script>";
        echo "<script type='text/javascript'>
            window.location.href='?page=task';
        </script>";
    } else {
        echo "<script>alert('Gagal di update!');history.go(-1);</script>";
    }
}
?>