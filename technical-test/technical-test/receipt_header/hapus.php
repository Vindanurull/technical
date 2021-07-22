<?php

include '../koneksi.php';

if(isset($_GET['id_header'])){
	$sql = "DELETE FROM `tbl_receipt_header` WHERE `id_header`='$_GET[id_header]'";
	$query = mysql_query($sql);
	echo"<script>alert('Data Berhasil di Hapus');document.location.href='receipt_header.php';</script>";
}else{
	echo"<script>alert('Gagal Hapus Data');document.location.href='receipt_header.php';</script>";
}
?>