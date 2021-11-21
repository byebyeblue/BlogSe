<div class="container">
    <h1 class="text-center">Selamat Datang di BlogSe</h1>
    <hr><br>
    <table class="table-hover" cellpadding="8" cellspacing="0">
        <thead>
            <th>Judul</th>
            <th>Isi</th>
            <th>Created Date</th>
            <th>Updated Date</th>
        </thead>
        <tbody>
            <?php
            $blog_id = 0;
            foreach ($tampilblog as $row) :
                $blog_id++
            ?>
                <tr>

                    <td>
                        <?= $row['judul']; ?>
                    </td>
                    <td>
                        <?= $row['isi']; ?>
                    </td>
                    <td>
                        <?= $row['created_at']; ?>
                    </td>
                    <td>
                        <?= $row['updated_at']; ?>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>
