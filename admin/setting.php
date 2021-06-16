<ol class="breadcrumb mb-4"><br>
    <li class="breadcrumb-item active">Setting</li>
</ol>
<div class="card mb-4"><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <?php
                $id = $_GET['id'];
                $asd = mysqli_query($koneksi, "SELECT * FROM setting WHERE id_setting='$id'");
                while ($r = mysqli_fetch_assoc($asd)) {
                ?>
                    <form action="" enctype="multipart/form-data" method="post">
                        <div class="form-group">
                            <input type="text" name="id" class="form-control" value="<?php echo $r['id_setting'] ?>" hidden>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Logo</label><br>
                            <img src="images/<?php echo $r['logo'] ?>" alt="" width="200 "><br><br>
                            <input type="file" name="logo" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $r['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Telp</label>
                            <input type="number" name="telp" value="<?php echo $r['telp'] ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $r['email'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Alamat</label>
                            <textarea name="alamat" id="" cols="30" rows="10" class="form-control"><?php echo $r['alamat'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Copy Right</label>
                            <input type="text" name="copy" class="form-control" value="<?php echo $r['copy_right'] ?>">
                        </div>
                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div><br><br>
</div>


<?php
if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $copy = $_POST['copy'];


    $namaFile = $_FILES['logo']['name'];
    $namaSementara = $_FILES['logo']['tmp_name'];
    $dirUpload = "images/";
    $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);
    if ($terupload) {
        $query = mysqli_query($koneksi, "UPDATE setting SET logo='$namaFile', nama='$nama', telp='$telp', email='$email', alamat='$alamat', copy_right='$copy' WHERE id_setting='$id'");
        echo "<script>alert('Data berhasil di ubah!');</script>";
        echo "<script type='text/javascript'>
            window.location.href='./';
        </script>";
    } else {
        echo "<script>alert('Gagal di ubah!');history.go(-1);</script>";
    }
}
?>