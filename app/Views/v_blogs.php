<?= $this->extend('/layouts/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <h1>Kelola Blog</h1>
    <hr><br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
        <a href="/blogs/tambahblog"><button class="btn btn-primary">Tambah Blog</button></a>
    </div>
    <br><br>
    <table class="table-hover" width="1000px" cellpadding="8" cellspacing="0">
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
            foreach ($tampilblog as $row) :
                $blog_id++;
            ?>
                <tr>
                    <td><?= $row['judul']; ?></td>
                    <td><?= $row['slug']; ?></td>
                    <td><?= $row['isi']; ?></td>
                    <td><?= $row['created_at']; ?></td>
                    <td><?= $row['updated_at']; ?></td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm" onclick="window.location='<?= site_url('blogs/editblog/' . $row['slug']) ?>'">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm" onclick="hapus('<?= $row['slug'] ?>')">Hapus</button>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
    <script>
        function hapus(slug) {
            message = confirm('Apakah Anda yakin ingin menghapus postingan?');
            if (message) {
                window.location.href = ("<?= site_url('blogs/hapus/') ?>") + slug;
            } else return false;
        }
    </script>

</div>

<?= $this->endSection(); ?>