<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM task_beranda WHERE id_task='$id'");
$r = mysqli_fetch_assoc($data);
?>

<header class="main-header post-head " style="background-image: url(admin/images/<?php echo $r['gambar_task']; ?>)">
	<div class="vertical">
		<div class="main-header-content inner">
			<h1 class="post-title"><?php echo $r['judul_task'] ?></h1>
		</div>
	</div>
</header>
<main id="content" class="content" role="main">
	<div class="wraps">
		<img src="assets/img/shadow.png" class="wrapshadow">
		<article class="post featured">
			<section class="post-content">
				<img src="admin/images/<?php echo $r['gambar_task']; ?>" alt=""><br>
				<div class="container">
					<h1><b><?php echo $r['judul_task']; ?></b></h1><br>
					<p class="text-justify"><?php echo $r['ket_lengkap'] ?></p>
				</div>
			</section>
			<footer class="post-footer">
				<figure class="author-image">
					<a class="img" href="?page=beranda" style="background-image: url(assets/img/kembali.png"></span></a>
				</figure>
				<section class="author">
					</nav>
	</div>
</main>