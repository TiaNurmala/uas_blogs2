<?php 
$addonq = '';
if(get("q")!="") {
 $addonq = " WHERE nama LIKE '%".get('q')."%'";}
$hasil = $koneksi->prepare("SELECT * FROM artikel ".$addonq. "ORDER BY No DESC");
$hasil->execute();
$data = $hasil->fetchAll();
 ?>
 <a class="btn pull-right" href="index.php?p=CRUD&m=add">Tambah Baru</a>
 <h2>Data Artikel</h2>

<div style="clear: both;">&nbsp;</div>
 <table class="data">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>Judul</th>
 			<th>Konten</th>
 			<th>Penulis</th>
 			<th colspan="2">Action</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php 
 			$i = 1;
 			foreach ($data as $key) {
 				?>
 				<tr>
 					<td><?php echo $i;?></td>
 					<td><?php echo $key['judul']; ?></td>
 					<td><?php echo $key['konten']; ?></td>
 					<td><?php echo $key['penulis'] ?></td>
 					<td><a href="index.php?p=CRUD&m=edit&No=<?php echo $key['No']; ?>">Ubah</a></td>
 					<td><a onclick="return confirm('Hapus Data <?php echo $key['judul'];?>')" href="proses/blog/hapus.php?No= <?php echo $key['No'];?>">Hapus</a></td> 
 				</tr>
 				<?php 
 				$i++;
 			}
 		 ?>
 	</tbody>
 </table>
</html>