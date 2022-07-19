<?php 

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
$jenis = $_POST['jenis'];


echo "<head><title>My Guest Book</title></head>";
$fp = fopen("TA.txt", "a+");
fputs($fp, "$nama|$nim|$alamat|$email|$jurusan|$jenis\n");
fclose($fp);
echo "<center><h2>ANDA TELAH MASUK</h2></center><br>";


 ?>