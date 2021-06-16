<ol class="breadcrumb mb-4"><br>
    <li class="breadcrumb-item active">Pesan</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Pesan Masuk
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Isi</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <?php
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM pesan");
                while ($r = mysqli_fetch_assoc($data)) {
                ?>
                    <tbody>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $r['nama_lengkap'] ?></td>
                            <td><?php echo $r['email'] ?></td>
                            <td><?php echo $r['isi'] ?></td>
                            <td>
                                <a href="?page=hapus_pesan&id=<?php echo $r['id_pesan'] ?>" class="btn btn-danger">Hapus</a>

                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>