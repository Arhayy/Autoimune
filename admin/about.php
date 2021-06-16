<ol class="breadcrumb mb-4"><br>
    <li class="breadcrumb-item active">About</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        About
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM about");
                    while ($r = mysqli_fetch_assoc($data)) {;
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>
                                <img src="images/<?php echo $r['gambar_about']; ?>" alt="" width="200">
                            </td>
                            <td><?php echo $r['keterangan']; ?></td>
                            <td>
                                <a href="?page=edit_about&id=<?php echo $r['id_about']; ?>" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>