<div class="container">
	<h1>Edit Blog</h1>
	<hr>
	<form action="/blogs/updateblog" method="post">
		<input type="hidden" name="blog_id" id="blog_id" value="<?= $blog_id; ?>"><br>
		<input type="text" class="form-control" name="judul" placeholder="Judul" value="<?=$judul?>"><br>
		<input type="text" class="form-control" name="slug" placeholder="Slug" value="<?=$slug?>"><br>
		<textarea class="mb-2" rows="8" cols="117" type="text" name="isi" autocomplete="off" placeholder="Isi" maxlength="3000"><?=$isi?></textarea><br>
		<input type="submit" value="Simpan Edit">
	</form>
	<br><a href="/blogs"><button>Kembali</button></a>
</div>
