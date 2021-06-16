<ol class="breadcrumb mb-4"><br>
    <li class="breadcrumb-item active">Task Beranda</li>
</ol>
<div class="card mb-4"><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <form action="" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label for="" class="col-form-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="col-form-label">Judul</label>
                        <input type="text" name="judul" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="col-form-label">Keterangan Singkat</label>
                        <textarea name="ket_singkat" id="ket_singkat" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-form-label">Keterangan Lengkap</label>
                        <textarea name="ket_lengkap" id="ket_lengkap" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div><br><br>
</div>

<?php
if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $ket1 = $_POST['ket_singkat'];
    $ket2 = $_POST['ket_lengkap'];

    $namaFile = $_FILES['gambar']['name'];
    $namaSementara = $_FILES['gambar']['tmp_name'];
    $dirUpload = "images/";
    $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);
    if ($terupload) {
        $query = mysqli_query($koneksi, "INSERT INTO task_beranda VALUES('','$judul','$ket1','$ket2','$namaFile')");
        echo "<script>alert('Data berhasil di tambahkan!');</script>";
        echo "<script type='text/javascript'>
            window.location.href='?page=task';
        </script>";
    } else {
        echo "<script>alert('Gagal di tambahkan!');history.go(-1);</script>";
    }
}
?>