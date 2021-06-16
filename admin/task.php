<ol class="breadcrumb mb-4"><br>
    <li class="breadcrumb-item active">Task</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Data Task
        <a href="?page=tambah_task" class="btn btn-primary tambah">Tambah</a>
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
                $data = mysqli_query($koneksi, "SELECT * FROM task_beranda");
                while ($r = mysqli_fetch_assoc($data)) {
                ?>
                    <tbody>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $r['judul_task'] ?></td>
                            <td>
                                <a href="?page=hapus_task&id=<?php echo $r['id_task'] ?>" class="btn btn-danger">Hapus</a>
                                <a href="?page=edit_task&id=<?php echo $r['id_task'] ?>" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>