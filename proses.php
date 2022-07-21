<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$tanggal = $_POST['tanggal'];

echo "<head><title>My Guest Book</head><title>";
$fp = fopen("penyewa.txt","a+");
fputs($fp,"$nama|$nohp|$email|$alamat|$tanggal\n");
fclose($fp);

header('Location:index.html');
?>