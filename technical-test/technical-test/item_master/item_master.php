<?php

include '../fungsi.php';
include '../koneksi.php';
date_default_timezone_set("Asia/Jakarta");
?>
<html>
<head>
  <title>Technical</title>
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
</head>

<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Hapus data ini ?");
 if (tanya == true) return true;
 else return false;
 }</script>

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
        <h1>Item Master</h1>
        <hr>
          <a href="input.php" style="text-decoration: none;"><button style="width: 15%; font-size: 16px;">Tambah Data</button></a>
          <!-- DATABASE -->
          <?php
            $limit = 5;
            if(isset($_GET['page'])){
              $page = anti_injection($_GET['page']);
            }else{
              $page = 1;
            }
            $offset = ($page - 1) * $limit; 
            $sql = "SELECT * FROM `tbl_item_master` ORDER BY `item_code` ASC";
            $query = mysql_query($sql." LIMIT $offset, $limit");
            $total = mysql_num_rows(mysql_query($sql));
            ?>
            <h3>Total Item : <?= $total; ?></h3>
            <table width="100%" border="1" align="center" style="font-size: 14; border-collapse: collapse;">
              <tr align="center">
                <td><b>No</b></td>
                <td><b>Item Code</b></td>
                <td><b>Item Desc</b></td>
                <td><b>Item Unit</b></td>
                <td><b>Item Price</b></td>
                <td><b>Aksi</b></td>
              </tr>
              <?php
              if($total > 0){
              $no = ($page - 1) * $limit;
              while ($row = mysql_fetch_array($query)):
                $no++;
                echo "<tr>";
                echo "<td align=center>".$no.".</td>";
                echo "<td align=center>".($row['item_code'])."</td>";
                echo "<td align=center>".($row['item_desc'])."</td>";
                echo "<td align=center>".($row['item_unit'])."</td>";
                echo "<td align=center>".($row['item_price'])."</td>";
                echo '<td align=center>
                <a href="edit.php?item_code='.$row['item_code'].'"><button>Ubah</button></a>
                <a onclick="return konfirmasi()" href="hapus.php?item_code='.$row['item_code'].'"><button>Hapus</button></a>
                </td>';
                echo "</tr>";
                endwhile;
                }else{
                echo "<tr><td colspan=7>Data tidak tersedia</td></tr>";
                }
              ?>
              </table>
              <center><?php pagination_new($total, $page, $limit, '#', '?page='); ?></center>
          <!-- DATABASE -->
      </div>
    </div>
    <!-- akhir bagian konten Blog -->
  </div>
 
</body>
</html>