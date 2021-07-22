<?php

include '../koneksi.php';
date_default_timezone_set("Asia/Jakarta");

//proses tambah
if($_POST){
  $item_code = $_POST['item_code'];
  $item_desc = $_POST['item_desc'];
  $item_unit = $_POST['item_unit'];
  $item_price = $_POST['item_price'];

    $sql = "INSERT INTO `tbl_item_master`(`item_code`,`item_desc`,`item_unit`,`item_price`) VALUES ('$item_code','$item_desc','$item_unit','$item_price')";
    if(mysql_query($sql)){
        echo"<script>alert('Data Berhasil di Tambah');document.location.href='item_master.php';</script>";
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
        <li><a href="item_master.php">Item Master</a></li>
        <li><a href="../receipt_header/receipt_header.php">Receipt Header</a></li>
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
                <td width="20%" height="50">Item Code</td>
                <td width="10%" >:</td>
                <td width="50%">
                  <input type="text" name="item_code" id="item_code" style="width: 500px;height: 30px;"/></td>
              </tr>
              <tr>
                <td width="20%" height="50">Item Desc</td>
                <td width="10%" >:</td>
                <td width="50%">
                  <input type="text" name="item_desc" id="item_code" style="width: 500px;height: 30px;"/></td>
              </tr>
              <tr>
                <td width="20%" height="50">Item Unit</td>
                <td width="10%" >:</td>
                <td width="50%">
                  <input type="text" name="item_unit" id="item_code" style="width: 500px;height: 30px;"/></td>
              </tr>
                   <tr>
                <td width="20%" height="50">Item Price</td>
                <td width="10%" >:</td>
                <td width="50%">
                  <input type="text" name="item_price" id="item_code" style="width: 500px;height: 30px;"/></td>
              </tr>
              <script type="text/javascript">    
                <?php echo $jsArray; ?>  
                function changeValue(item_master){  
                document.getElementById('item_master').value = item_master[item_code].item_master;  
                };  
                </script>
              <tr>
                <td colspan="3" height="50" align="right">
                  <input type="submit" name="button" id="button" value="Tambah" />
                </td>
              </tr>
            </table>
            </form>
          <!-- DATABASE -->
        </p>
        <a href="item_master.php" style="text-decoration: none;"><button style="width: 10%; font-size: 16px;">Kembali</button></a>
      </div>
    </div>
    <!-- akhir bagian konten Blog -->
  </div>
 
</body>
</html>