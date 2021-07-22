<?php

include '../koneksi.php';

if(isset($_GET['item_code'])){
	$sql = "DELETE FROM `tbl_item_master` WHERE `item_code`='$_GET[item_code]'";
	$query = mysql_query($sql);
	echo"<script>alert('Data Berhasil di Hapus');document.location.href='item_master.php';</script>";
}else{
	echo"<script>alert('Gagal Hapus Data');document.location.href='item_master.php';</script>";
}
?>