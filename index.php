<?php include 'admin/koneksi.php' ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<?php
	$asd = mysqli_query($koneksi, "SELECT * FROM setting");
	$e = mysqli_fetch_assoc($asd);
	?>
	<link rel="shortcut icon" href="admin/images/<?php echo $e['logo'] ?>">
	<title>Autoimune-Selamat Datang di website kami</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/screen.css" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700,700italic|Playfair+Display:400,700,400italic,700italic" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="home-template">
	<div class="site-wrapper">
		<nav class="main-nav overlay clearfix">
			<ul id="menu">
				<li class="nav-home nav-current" role="presentation"><a href="?page=beranda">Beranda</a></li>
				<li class="nav-article-example" role="presentation"><a href="?page=autoimune">Autoimune</a></li>
				<li class="nav-about-us" role="presentation"><a href="?page=tentangkami">Tentang kami</a></li>
				<li class="nav-about-us" role="presentation"><a href="?page=ar">Qr Code AR</a></li>
				<li class="nav-author-page" role="presentation"><a href="login.php">Login</a></li>
				<span class="socialheader">
					<a href="#"><span class='symbol'>circleinstagram</span></a>
					<a href="#"><span class='symbol'>circlefacebook</span></a>
					<a href="#"><span class='symbol'>circleemail</span></a>
				</span>
			</ul>
		</nav>
		<section id="main">
			<?php
			if (isset($_GET['page'])) {
				if ($_GET['page'] == "beranda") {
					include 'beranda.php';
				} elseif ($_GET['page'] == "autoimune") {
					include 'autoimune.php';
				} elseif ($_GET['page'] == "tentangkami") {
					include 'tentangkami.php';
				} elseif ($_GET['page'] == "detail_task") {
					include 'detail_task.php';
				} elseif ($_GET['page'] == "detail") {
					include 'detail.php';
				} elseif ($_GET['page'] == "ar") {
					include 'ar.php';
				}
			} else {
				include 'beranda.php';
			}
			?>
		</section>
		<footer class="site-footer clearfix">
			<a href="#top" id="back-to-top" class="back-top"></a>
			<div class="text-center">

				<p>Copyright &copy; 2020<br /></p>
				<?php
				$asd = mysqli_query($koneksi, "SELECT * FROM setting");
				$e = mysqli_fetch_assoc($asd);
				?>
				<p> Allright Reserved <a href="#"><?php echo $e['copy_right'] ?></a></p>
			</div>
		</footer>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="assets/js/masonry.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.fitvids.js"></script>
	<script type="text/javascript" src="assets/js/index.js"></script>
</body>

</html>