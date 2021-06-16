<ol class="breadcrumb mb-4"><br>
    <li class="breadcrumb-item active">Autoimune</li>
</ol>
<div class="card mb-4"><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <?php
                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "SELECT * FROM about WHERE id_about='$id'");
                $r = mysqli_fetch_assoc($data);
                ?>
                <form action="" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <input type="text" name="id" class="form-control" value="<?php echo $r['id_about']; ?>" hidden>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-form-label">Gambar</label><br>
                        <img src="images/<?php echo $r['gambar_about']; ?>" alt="" width="200"><br><br>
                        <input type="file" name="gambar" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="col-form-label">Keterangan Singkat</label>
                        <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="5"><?php echo $r['keterangan']; ?></textarea>
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
    $ket = $_POST['keterangan'];

    $namaFile = $_FILES['gambar']['name'];
    $namaSementara = $_FILES['gambar']['tmp_name'];
    $dirUpload = "images/";
    $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);
    if ($terupload) {
        $query = mysqli_query($koneksi, "UPDATE about SET gambar_about='$namaFile', keterangan='$ket' WHERE id_about='$id' ");
        echo "<script>alert('Data berhasil di update!');</script>";
        echo "<script type='text/javascript'>
            window.location.href='?page=about';
        </script>";
    } else {
        echo "<script>alert('Gagal di update!');history.go(-1);</script>";
    }
}
?>