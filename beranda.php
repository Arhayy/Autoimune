<header class="main-header " style="background-image: url(assets/img/autoimune.jpg)">
    <div class="vertical">
        <div class="main-header-content inner">
            <h1 class="page-title">Sistem imune</h1>
            <div class="entry-title-divider">
                <span></span><span></span><span></span>
            </div>
            <h2 class="page-description">informasi sistem imun pada tubuh</h2>
            <h1 class="page-description">manusia</h1>

        </div>
    </div>
    <a class="scroll-down icon-arrow-left" href="#content" data-offset="-45"><span class="hidden">Scroll Down</span></a>
</header>
<main id="content" class="content" role="main">
    <div class="wraps">
        <img src="assets/img/shadow.png" class="wrapshadow">
        <div class="grid">
            <?php
            $data = mysqli_query($koneksi, "SELECT * FROM task_beranda");
            while ($r = mysqli_fetch_assoc($data)) {
            ?>
                <div class="grid-item">
                    <article class="post tag-romance">
                        <div class="wrapgriditem">
                            <header class="post-header">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" role="tab" aria-controls="contact" aria-selected="false">
                                    <center><i class=""><img src="admin/images/<?php echo $r['gambar_task']; ?>" alt="image" height="100" width="100"></i>
                                        <h2 class="post-title"><a href="article.html"><?php echo $r['judul_task']; ?></a></h2>
                            </header>
                            <section class="post-excerpt">
                                <p><?php echo $r['ket_singkat']; ?></p>
                                <br>
                                <br>
                                <a class="btn btn-outline-primary" href="?page=detail_task&id=<?php echo $r['id_task']; ?>">Selengkapnya</a>
                        </div>
                    </article>
                </div>
            <?php } ?>
        </div>
        <nav class="pagination" role="navigation">
            <span class="page-number">Page 1 of 1</span>
        </nav>
    </div>
</main>