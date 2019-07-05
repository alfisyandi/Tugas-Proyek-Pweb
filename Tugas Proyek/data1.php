<?php 
$myfile = fopen("newfile.txt", "r") or die("Tidak bisa membuka file!");
	while (!feof($myfile)) {
		echo fgets($myfile)."<br>";
	}
fclose($myfile);
 ?>