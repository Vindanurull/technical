<?php

include '../koneksi.php';
date_default_timezone_set("Asia/Jakarta");

//proses edit
if($_POST){
  $item_desc = $_POST['item_desc'];
  $item_unit = $_POST['item_unit'];
  $item_price= $_POST['item_price'];

   $sql = "UPDATE `tbl_item_master` SET `item_desc`='$item_desc',`item_unit`='$item_unit',`item_price`='$item_price' WHERE `item_code`='$_GET[item_code]'";

    if(mysql_query($sql)){
       echo"<script>alert('Data Berhasil di Ubah');document.location.href='item_master.php';</script>";
    }
    else{
       echo"<script>alert('Gagal Ubah Data');document.location.href='edit.php?item_code=$_GET[item_code];</script>";
    }
}

if(isset($_GET['item_code'])){
    $item_code = $_GET['item_code'];
    $sql = "SELECT * FROM `tbl_item_master` WHERE `item_code`='$item_code'";
    $query = mysql_query($sql);
    if(mysql_num_rows($query) > 0){
        while ($row = mysql_fetch_array($query)) {
          $item_desc = $row['item_desc'];
          $item_unit = $row['item_unit'];
          $item_price = $row['item_price'];

        }
    }else{
        echo "Not Found";
        die();
    }
}else{
    die();
}
?>

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

<html>
<head>
  <title>Technical</title>
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
</head>

    <!-- bagian konten Blog -->
    <div class="blog">
      <div class="conteudo">
        <h1>Ubah Item Master</h1>
        <hr>
        <p>
          <!-- DATABASE -->
            <form id="form1" name="form1" method="post" action="edit.php?item_code=<?php echo $_GET['item_code']; ?>">
            <table width="500" border="0" align="center">
              <tr>
                <td height="30">Item Desc</td>
                <td >:</td>
                <td ><input type="text" name="item_desc" id="item_desc" value="<?php echo $item_desc;?>"/></td>
              </tr>
              <tr>
                <td height="30">Item Unit</td>
                <td >:</td>
                <td ><input type="text" name="item_unit" id="item_unit" value="<?php echo $item_unit;?>"/></td>
              </tr>
              <tr>
                <td height="30">Item Price</td>
                <td >:</td>
                <td ><input type="text" name="item_price" id="item_price" value="<?php echo $item_price;?>"/></td>
              </tr>

              <tr>
                <td colspan="3" height="50" align="right">
                  <input type="submit" name="button" id="button" value="Ubah" />
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