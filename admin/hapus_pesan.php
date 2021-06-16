<?php
$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM pesan WHERE id_pesan='$id'");

echo "<script type='text/javascript'>
            window.location.href='?page=pesan';
        </script>";
