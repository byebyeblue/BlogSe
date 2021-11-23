<?= $this->extend('/layouts/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
	<h1>Edit Blog</h1>
	<hr>
	<form action="/blogs/updateblog/<?= $tampilblog['blog_id']; ?>" method="post">
		<input type="text" class="form-control" name="judul" placeholder="Judul" id="judul" value="<?= $tampilblog['judul']; ?>"><br>
		<input type="text" class="form-control" name="slug" placeholder="Slug" id="slug" value="<?= $tampilblog['slug']; ?>"><br>
		<textarea class="mb-2" rows="8" cols="117" type="text" name="isi" autocomplete="off" placeholder="Isi" maxlength="3000"><?= $tampilblog['isi']; ?></textarea><br>
		<a href="/blogs"><button type="button" class="btn btn-outline-danger" onclick="return confirm('Discard changes ?'); ">Kembali</button></a>
		<button type="submit" class="btn btn-primary"> Update </button>
	</form>
</div>

<?= $this->endSection(); ?>