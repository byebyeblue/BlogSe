<div class="container">
	<h1>Posting Blog</h1>
	<hr><br>
	<form action="/blogs/posting" method="post">
	<div class="row">
		<div class="col-9">
			<input type="text" class="form-control" name="judul" placeholder="Judul"><br>
			<input type="text" class="form-control" name="slug" placeholder="Slug"><br>
			<textarea rows="8" cols="109" type="text" name="isi" autocomplete="off" placeholder="Isi" maxlength="3000"></textarea>
		</div>
	</div>
		
		<br><input type="submit" value="Submit">
	</form>
</div>
