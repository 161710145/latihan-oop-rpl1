<?php 

require_once 'identitas.php';


	$manusia1 = new manusia;
	$manusia2 = new manusia;
	$manusia3 = new manusia;
	$manusia4 = new manusia; 
	$manusia5 = new manusia;

echo"<h3> Data Kelas XI RPL 1 </h3>";
$manusia1-> set_nama('Ica Cahyani');
echo "Nama         : ".$manusia1-> get_nama(). '<br>';
$manusia1->set_tempatlahir('Bandung');
echo "Tempat lahir : ".$manusia1-> get_tempatlahir(). '<br>';
$manusia1->set_kelas('XI RPL 1');
echo "Kelas  :       ".$manusia1-> get_kelas(). '<br>';
$manusia1->set_status('Menikah');
echo "Status  : ".$manusia1-> get_status(). '<br>';

	echo"<h3> Data Kelas XI RPL 2 </h3>";
	$manusia2-> set_nama('Melan ');
	echo "Namanya....  : ".$manusia2-> get_nama(). '<br>';
	$manusia2->set_tempatlahir('Bandung');
	echo "Tempat lahir... : ".$manusia2-> get_tempatlahir(). '<br>';
	$manusia2->set_kelas('XI RPL 2');
	echo "Kelas ... : ".$manusia2-> get_kelas(). '<br>';
	$manusia2->set_status('Pelajar');
	echo "Status... : ".$manusia2-> get_status(). '<br>';
	echo"<br>";

$manusia3-> set_nama('Angga');
echo "Namanya....  : ".$manusia3-> get_nama(). '<br>';
$manusia3->set_tempatlahir('Bandung');
echo "Tempat lahir... : ".$manusia3-> get_tempatlahir(). '<br>';
$manusia3->set_kelas('XI RPL 2');
echo "Kelas ... : ".$manusia3-> get_kelas(). '<br>';
$manusia3->set_status('Duda');
echo "Status... : ".$manusia3-> get_status(). '<br>';
echo"<br>";

	$manusia4-> set_nama('Diandra');
	echo "Namanya....  : ".$manusia4-> get_nama(). '<br>';
	$manusia4->set_tempatlahir('Bandung');
	echo "Tempat lahir... : ".$manusia4-> get_tempatlahir(). '<br>';
	$manusia4->set_kelas('XI RPL 2');
	echo "Kelas ... : ".$manusia4-> get_kelas(). '<br>';
	$manusia4->set_status('janda');
	echo "Status... : ".$manusia4-> get_status(). '<br>';
	echo"<br>";

$manusia5-> set_nama('Halimah');
echo "Namanya....  : ".$manusia2-> get_nama(). '<br>';
$manusia5->set_tempatlahir('Bandung');
echo "Tempat lahir... : ".$manusia5-> get_tempatlahir(). '<br>';
$manusia5->set_kelas('XI RPL 2');
echo "Kelas ... : ".$manusia5-> get_kelas(). '<br>';
$manusia5->set_status('Pelajar');
echo "Status... : ".$manusia5-> get_status(). '<br>';



?>