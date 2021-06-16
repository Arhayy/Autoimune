<ol class="breadcrumb mb-4"><br>
    <li class="breadcrumb-item active">Autoimune</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Data Autoimune
        <a href="?page=tambah_autoimune" class="btn btn-primary tambah">Tambah</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <?php
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM autoimune");
                while ($r = mysqli_fetch_assoc($data)) {
                ?>
                    <tbody>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $r['judul'] ?></td>
                            <td>
                                <a href="?page=hapus_autoimune&id=<?php echo $r['id_autoimune'] ?>" class="btn btn-danger">Hapus</a>
                                <a href="?page=edit_autoimune&id=<?php echo $r['id_autoimune'] ?>" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>