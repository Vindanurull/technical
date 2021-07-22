<?php

include '../koneksi.php';
date_default_timezone_set("Asia/Jakarta");

//proses tambah
if($_POST){
  $id_header = $_POST['id_header'];
  $receipt_no = $_POST['receipt_no'];
  $receipt_date = $_POST['receipt_date'];
  $supplier_name = $_POST['supplier_name'];

    $sql = "INSERT INTO `tbl_receipt_header`(`id_header`,`receipt_no`,`receipt_date`,`supplier_name`) VALUES ('$id_header','$receipt_no','$receipt_date','$supplier_name')";
    if(mysql_query($sql)){
        echo"<script>alert('Data Berhasil di Tambah');document.location.href='receipt_header.php';</script>";
    }else{
        echo"<script>alert('Gagal Tambah Data');document.location.href='input.php';</script>";
    }
}
?>
<html>
<head>
  <title>Technical</title>
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
</head>

<body>
  
  <div class="wrap">
    <!-- bagian menu     -->
    <nav class="menu">
      <ul>
        <li><a href="../index.php">Beranda</a></li>
        <li><a href="../item_master/item_master.php">Item Master</a></li>
        <li><a href="receipt_header.php">Receipt Header</a></li>
        <li><a href="../receipt_detail/receipt_detail.php">Receipt Detail</a></li>
      </ul>
    </nav>
    <!-- akhir bagian menu -->
 
    <!-- bagian konten Blog -->
    <div class="blog">
      <div class="conteudo">
        <h1>Tambah Galeri</h1>
        <hr>
        <p>
          <!-- DATABASE -->
            <form action="input.php" method="POST" enctype="multipart/form-data">
            <table width="90%" align="center">
              <tr>
                <td width="20%" height="50">Id Header</td>
                <td width="10%" >:</td>
                <td width="50%">
                  <input type="text" name="id_header" id="id_header" style="width: 500px;height: 30px;"/></td>
              </tr>
              <tr>
                <td width="20%" height="50">Receipt No</td>
                <td width="10%" >:</td>
                <td width="50%">
                  <input type="text" name="receipt_no" id="receipt_no" style="width: 500px;height: 30px;"/></td>
              </tr>
              <tr>
                <td width="20%" height="50">Receipt Date</td>
                <td width="10%" >:</td>
                <td width="50%">
                  <input type="Date" name="receipt_date" id="receipt_date" style="width: 500px;height: 30px;"/></td>
              </tr>
                   <tr>
                <td width="20%" height="50">Supplier Name</td>
                <td width="10%" >:</td>
                <td width="50%">
                  <input type="text" name="supplier_name" id="supplier_name" style="width: 500px;height: 30px;"/></td>
              </tr>

              <tr>
                <td colspan="3" height="50" align="right">
                  <input type="submit" name="button" id="button" value="Tambah" />
                </td>
              </tr>
            </table>
            </form>
          <!-- DATABASE -->
        </p>
        <a href="receipt_header.php" style="text-decoration: none;"><button style="width: 10%; font-size: 16px;">Kembali</button></a>
      </div>
    </div>
    <!-- akhir bagian konten Blog -->
  </div>
 
</body>
</html>