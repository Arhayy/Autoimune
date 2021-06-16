<?php
include 'koneksi.php';
session_start();
if (!isset($_SESSION['status'])) {
    header("location:../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- Logo icon -->
    <?php
    $asd = mysqli_query($koneksi, "SELECT * FROM setting");
    $e = mysqli_fetch_assoc($asd);
    ?>
    <link rel="shortcut icon" href="images/<?php echo $e['logo'] ?>">
    <title>Panel Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">Panel Admin</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <?php
                    $data = mysqli_query($koneksi, "SELECT * FROM setting");
                    $r = mysqli_fetch_assoc($data);
                    ?>
                    <a class="dropdown-item" href="?page=setting&id=<?php echo $r['id_setting'] ?>">Setting</a>
                    <hr>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="?page=beranda">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Beranda
                        </a>
                        <a class="nav-link" href="?page=task">
                            <div class="sb-nav-link-icon"><i class="fas fa-head-side-mask"></i></div>
                            Task
                        </a>
                        <a class="nav-link" href="?page=autoimune">
                            <div class="sb-nav-link-icon"><i class="fas fa-theater-masks"></i></div>
                            Autoimune
                        </a>
                        <a class="nav-link" href="?page=about">
                            <div class="sb-nav-link-icon"><i class="fas fa-eject"></i></div>
                            About
                        </a>
                        <a class="nav-link" href="?page=pesan">
                            <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                            Pesan
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid"><br>
                    <?php
                    if (isset($_GET['page'])) {
                        if ($_GET['page'] == "beranda") {
                            include "beranda.php";
                        } elseif ($_GET['page'] == "autoimune") {
                            include "autoimune.php";
                        } elseif ($_GET['page'] == "task") {
                            include "task.php";
                        } elseif ($_GET['page'] == "about") {
                            include "about.php";
                        } elseif ($_GET['page'] == "pesan") {
                            include "pesan.php";
                        } elseif ($_GET['page'] == "hapus_pesan") {
                            include "hapus_pesan.php";
                        } elseif ($_GET['page'] == "setting") {
                            include "setting.php";
                        } elseif ($_GET['page'] == "tambah_autoimune") {
                            include "tambah_autoimune.php";
                        } elseif ($_GET['page'] == "hapus_autoimune") {
                            include "hapus_autoimune.php";
                        } elseif ($_GET['page'] == "edit_autoimune") {
                            include "edit_autoimune.php";
                        } elseif ($_GET['page'] == "edit_autoimune") {
                            include "edit_autoimune.php";
                        } elseif ($_GET['page'] == "tambah_task") {
                            include "tambah_task.php";
                        } elseif ($_GET['page'] == "hapus_task") {
                            include "hapus_task.php";
                        } elseif ($_GET['page'] == "edit_task") {
                            include "edit_task.php";
                        } elseif ($_GET['page'] == "about") {
                            include "about.php.php";
                        } elseif ($_GET['page'] == "edit_about") {
                            include "edit_about.php";
                        }
                    } else {
                        include "beranda.php";
                    }

                    ?>

                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <?php
                        $asd = mysqli_query($koneksi, "SELECT * FROM setting");
                        $a = mysqli_fetch_assoc($asd);
                        ?>
                        <div class="text-muted">Copyright &copy; 2020 | <?php echo $a['copy_right'] ?></div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>