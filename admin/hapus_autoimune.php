<?php
$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM autoimune WHERE id_autoimune='$id'");

echo "<script type='text/javascript'>
            window.location.href='?page=autoimune';
        </script>";
