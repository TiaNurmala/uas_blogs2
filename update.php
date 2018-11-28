<?php 
include '../../conf.php'; 
include '../../conn.php';

$No = post('No'); 
$judul = post('judul'); 
$konten = post('konten');
$penulis = post('penulis');

$simpan = $koneksi->prepare("UPDATE artikel SET `judul`='".$judul."', `konten`='".$konten."',`penulis`='".$penulis."' WHERE `No` ='".$No."'"); 

$simpan->execute();

header("location:../../index.php?p=CRUD");

 ?>