<?php
include 'admin/koneksi.php';
session_start();
if (isset($_SESSION['status'])) {
    header("location:admin/index.php");
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
    <?php
    $asd = mysqli_query($koneksi, "SELECT * FROM setting");
    $e = mysqli_fetch_assoc($asd);
    ?>
    <link rel="shortcut icon" href="admin/images/<?php echo $e['logo'] ?>">
    <title>Panel Login</title>
    <link href="admin/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 mt-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Username</label>
                                            <input class="form-control py-4" name="uname" type="text" placeholder="Username" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input class="form-control py-4" name="pass" type="password" placeholder="Password" required>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button class="btn btn-primary" name="masuk" type="submit">Masuk</button>
                                        </div>
                                    </form>
                                    <?php
                                    if (isset($_POST['masuk'])) {
                                        $uname = mysqli_real_escape_string($koneksi, $_POST['uname']);
                                        $pass = md5($_POST['pass']);
                                        $login = mysqli_query($koneksi, "SELECT * FROM admin WHERE uname='$uname' AND pword='$pass'");
                                        $cek = mysqli_num_rows($login);
                                        if ($cek > 0) {
                                            $c = mysqli_fetch_assoc($login);
                                            session_start();
                                            $_SESSION['uname'] = $uname;
                                            $_SESSION['id'] = $c['id_login'];
                                            $_SESSION['status'] = true;
                                            $_SESSION['nama'] = $c['nama'];
                                            header("location:admin/index.php");
                                        } else {
                                            echo "<script>alert('username dan password salah!');history.go(-1);</script>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="admin/js/scripts.js"></script>
</body>

</html>