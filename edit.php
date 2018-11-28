<?php 
$hasil = $koneksi->prepare("SELECT * FROM artikel WHERE `No` = '".get('No')."'");
$hasil->execute();
$data = $hasil->fetch(PDO::FETCH_ASSOC);
 ?>
 <form method="POST" action="proses/blog/update.php"
	enctype="multipart/form-data">
		<input type="hidden" name="No" value="<?php echo $data['No']; ?>">
		<table>
			<tr>
				<td>Judul</td>
				<td><input type="text" name="judul" value="<?php echo $data['judul']; ?>"></td>
			</tr>
			<tr>
				<td>Konten</td>
				<td><input type="text" name="konten" value="<?php echo $data['konten']; ?>"></td>
			</tr>
			<tr>
				<td>Penulis</td>
				<td><input type="text" name="penulis" value="<?php echo $data['penulis']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit">Update</button></td>
			</tr>
		</table>
	</form>