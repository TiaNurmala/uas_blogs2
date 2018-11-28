<?php 
	include '../../conf.php'; 
	include '../../conn.php';

$No = get('No');
$hapus = $koneksi->prepare("DELETE FROM artikel WHERE `No` = '".$No."'"); 
$hapus->execute();
header("location:../../index.php?p=CRUD");

 ?>