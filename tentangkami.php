<section class="main-header" style="background-image: url(assets/carousel/)">
    <div class="vertical">
        <div class="main-header-content inner">
            <h1 class="page-title">Tentang Kami</h1>
            <div class="entry-title-divider">
                <span></span><span></span><span></span>
            </div>

        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.018597204229!2d106.74249654986933!3d-6.261280263019382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f08a86a3c0dd%3A0x6483f0b47a86d6f!2sJl.%20Swadaya%2C%20Pd.%20Karya%2C%20Kec.%20Pd.%20Aren%2C%20Kota%20Tangerang%20Selatan%2C%20Banten%2015225!5e0!3m2!1sid!2sid!4v1604472222880!5m2!1sid!2sid" width="1100" height="400" frameborder="0" style="border:5;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?php
            $asd = mysqli_query($koneksi, "SELECT * FROM setting");
            $e = mysqli_fetch_assoc($asd);
            ?>
            <h3 class="text-center"><b> Kontak Kami</b></h3><br>
            <p><i class="fas fa-phone"></i> +62 <?php echo $e['telp'] ?></p>
            <p><i class="fas fa-envelope"></i> <?php echo $e['email'] ?></p>
            <p><i class="fas fa-map-marker-alt"></i> <?php echo $e['alamat'] ?></p>
        </div>
        <div class="col-md-8">
            <form action="" method="post" enctype="multipart/form-data" class="asd">
                <div class="form-group">
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="email">
                </div>
                <div class="form-group">
                    <textarea name="isi" id="isi" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="col-md-12 text-center">
                    <button name="kirim" type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $isi = $_POST['isi'];

    $query = mysqli_query($koneksi, "INSERT INTO pesan VALUES('', '$nama', '$email', '$isi')");
    echo "<script>alert('Pesan Telah Terkirim!');</script>";
    echo "<script type='text/javascript'>
            window.location.href='?page=tentangkami';
        </script>";
}
?>