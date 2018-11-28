<h1>Welcome to Tia's Blog!</h1><hr><br><br><br>

<?php 
	$judul = post('judul');
	$penulis = post('penulis');
	$konten = post('konten');
 ?>

	<?php
	$addonq = '';
	if(get("q")!="") {
 	$addonq = " WHERE nama LIKE '%".get('q')."%'";}
	$hasil = $koneksi->prepare("SELECT * FROM artikel ".$addonq. "ORDER BY No DESC");
	$hasil->execute();
	$data = $hasil->fetchAll();

		$i = 1;
		foreach ($data as $key) {
			?>

		<h2><?php echo $key['judul']; ?></h2><br>
 		<h4><?php echo $key['penulis']; ?></h4><br>
 		<hr>
 		<p><?php echo $key['konten']; ?></p>
 		<hr>
 	
 	<?php 
 		$i++;
 	}
 ?>