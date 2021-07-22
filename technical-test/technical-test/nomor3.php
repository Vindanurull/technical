<?php

include 'koneksi.php';
date_default_timezone_set("Asia/Jakarta");
?>
<html>
<head>
  <title>Technical</title>
  <link rel="stylesheet" type="text/css" href="css/custom.css">
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
        <li><a href="index.php">Beranda</a></li>
        <li><a href="item_master/item_master.php">Item Master</a></li>
        <li><a href="receipt_header.php">Receipt Header</a></li>
        <li><a href="receipt_detail/receipt_detail.php">Receipt Detail</a></li>
        <li><a href="nomor3.php">TEST NO 3</a></li>
      </ul>
    </nav>
    <!-- akhir bagian menu -->
 
    <!-- bagian konten Blog -->
    <div class="blog">
      <div class="conteudo">
        <h1>Test Nomor 3</h1>
        <hr>
          <!-- DATABASE -->
          <?php

            $sql = "SELECT tbl_item_master.item_code, tbl_item_master.item_desc, tbl_item_master.item_price, tbl_receipt_header.id_header, tbl_receipt_header.receipt_no, tbl_receipt_header.receipt_date, tbl_receipt_detail.id_detail, tbl_receipt_detail.quantity, tbl_receipt_detail.batch, tbl_receipt_detail.quantity*tbl_item_master.item_price AS total FROM tbl_receipt_detail JOIN tbl_item_master ON tbl_item_master.item_code = tbl_receipt_detail.item_code JOIN tbl_receipt_header ON tbl_receipt_detail.id_header = tbl_receipt_detail.id_header";

            $query = mysql_query($sql);
            $total = mysql_num_rows(mysql_query($sql));
            ?>
            <h3>Total Item : <?= $total; ?></h3>
            <table width="100%" border="1" align="center" style="font-size: 14; border-collapse: collapse;">
              <tr align="center">
                <td><b>No</b></td>
                <td><b>Receipt No</b></td>
                <td><b>Receipt Date</b></td>
                <td><b>Item </b></td>
                <td><b>Item Des</b></td>
                <td><b>QTY</b></td>
                <td><b>Bacth</b></td>
                <td><b>Quantity</b></td>
                <td><b>Price</b></td>
                <td><b>Total</b></td>
              </tr>
              <?php
              if($total > 0){
                $no = 0;
              while ($row = mysql_fetch_array($query)):
                $no++;
                echo "<tr>";
                  echo "<td align=center>".$no.".</td>";
                  echo "<td align=center>".$row['receipt_no']."</td>";
                  echo "<td align=center>".$row['receipt_date']."</td>";
                  echo "<td align=center>".$row['item_code']."</td>";
                  echo "<td align=center>".$row['item_desc']."</td>";
                  echo "<td align=center>".$row['quantity']."</td>";
                  echo "<td align=center>".$row['batch']."</td>";
                  echo "<td align=center>".$row['quantity']."</td>";
                  echo "<td align=center>".$row['item_price']."</td>";
                  echo "<td align=center>".$row['total']."</td>";
                echo "</tr>";
                endwhile;
                }else{
                echo "<tr><td colspan=7>Data tidak tersedia</td></tr>";
                }
              ?>
              </table>
          <!-- DATABASE -->
      </div>
    </div>
    <!-- akhir bagian konten Blog -->
  </div>
 
</body>
</html>