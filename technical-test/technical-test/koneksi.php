<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("technical");
if(!$con){
echo"Tidak Dapat terkoneksi ke Server";
}
if(!$db){
echo"Tidak Dapat Memilih database/Database tidak ada";
}
$pdo = new PDO('mysql:host='.'localhost'.';dbname='.'technical', 'root', '');
?>