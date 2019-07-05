<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
if(isset($_POST["nama"])&& isset($_POST["tgl"])&& isset($_POST["email"])){
$nama = $_POST['nama'];
$tanggal = $_POST['tgl'];
$email = $_POST['email'];
}
$myfile = fopen("newfile.txt", "a");
	$txt1 = "Nama    : ".$nama."\n";
	$txt2 = "Tanggal : ".$tanggal."\n";
	$txt3 = "Email   : ".$email."\n\n";
	fwrite($myfile, $txt1);
	fwrite($myfile, $txt2);
	fwrite($myfile, $txt3);
	fclose($myfile);
	
 ?>
 <a href="data1.php">Daftara Nama</a>
<li><a href="index.html">Home</a></li>
</body>
</html>