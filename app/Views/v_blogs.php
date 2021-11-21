<div class="container">
    <h1>Kelola Blog</h1>
    <hr><br>
    <a href="/blogs/tambahblog"><button class="btn btn-primary">Tambah Blog</button></a>
    <br><br>
    <table class="table-hover" cellpadding="8" cellspacing="0">
        <thead>
            <th>Judul</th>
            <th>Slug</th>
            <th>Isi</th>
            <th>Created Date</th>
            <th>Updated Date</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
                $blog_id = 0;
                foreach ($tampilblog as $row):
                    $blog_id++;
            ?>
                <tr>
                    <td><?= $row['judul'];?></td>
                    <td><?= $row['slug'];?></td>
                    <td><?= $row['isi'];?></td>
                    <td><?= $row['created_at'];?></td>
                    <td><?= $row['updated_at'];?></td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm" onclick="window.location='<?= site_url('blogs/editblog/' . $row['blog_id']) ?>'">Edit</button>    
                        <button type="button" class="btn btn-danger btn-sm" onclick="hapus('<?= $row['blog_id'] ?>')">Hapus</button>
                    </td>
                </tr>
                <?php
                endforeach;
                ?>
        </tbody>
    </table>
    <script>
        function hapus(blog_id){
            message = confirm('Apakah Anda yakin ingin menghapus postingan?');
                if(message) {
                    window.location.href = ("<?= site_url('blogs/hapus/') ?>") + blog_id;
                } else return false;
        }
    </script>

</div>
