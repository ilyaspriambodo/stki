<?php
include 'index.php';
?>

<html>

<body>
	<header>
		<h3>Tambah Data Baru</h3>
	</header>
	
	<form action="proses.php" method="POST">
		
		<fieldset>
		
		<p>
			<label for="nama">judul :</label>
			<input type="text" name="judul" placeholder="judul berita" />
		</p>
		<p>
			<label for="alamat">Isi :</label>
			<textarea name="isi" cols="100" rows="10" tabindex="4"></textarea>
		</p>
		<p>
			<label for="sekolah_asal">URL :</label>
			<input type="text" name="url" placeholder="Isikan URL" />
		</p>
		<p>
			<input type="submit" value="Tambah" name="tambah" />
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html>
