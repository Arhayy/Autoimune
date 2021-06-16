<?php
session_start();
// hapus session
session_destroy();

// alihkan ke halaman "logout-success"
header('Location: ../index.php');
