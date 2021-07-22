<?php
@session_start();
include 'koneksi.php';
date_default_timezone_set("Asia/Jakarta");
?>
<html>
<head>
  <title>Technical</title>
  <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
  
  
  <div class="wrap">
    <!-- bagian menu     -->
    <nav class="menu">
      <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="item_master/item_master.php">Item Master</a></li>
        <li><a href="receipt_header/receipt_header.php">Receipt Header</a></li>
        <li><a href="receipt_detail/receipt_detail.php">Receipt Detail</a></li>
        <li><a href="nomor3.php">TEST NO 3</a></li>
      </ul>
    </nav>
    <!-- akhir bagian menu -->
 
    <!-- bagian konten Blog -->
    <div class="blog">
      <div class="conteudo">
        <div class="post-info">
          <b>Technical Test</b> PT DHL Supply Chain
        </div>
        <h1> TECHNICAL TEST PT DHL SUPPLY CHAIN</h1>
        <hr>
        <p>
          Selamat Datang di halaman web technical test
        </p>
      </div>
    </div>
    <!-- akhir bagian konten Blog -->
  </div>
 
</body>
</html>