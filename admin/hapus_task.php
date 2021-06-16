<?php
$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM task_beranda WHERE id_task='$id'");

echo "<script type='text/javascript'>
            window.location.href='?page=task';
        </script>";
