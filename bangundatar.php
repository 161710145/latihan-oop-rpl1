<?php
class Bangun_datar{

 	public $panjang1,$lebar1;

 	function set_luaspersegipanjang($panjang1,$lebar1){

 		$this->panjang1 = $panjang1;
 		$this->lebar1 = $lebar1;
 	}

 	function get_luaspersegipanjang(){
 		return $this->panjang1 * $this->lebar1;
 	}
 	function set_kelilingpersegipanjang($panjang1,$lebar1){

 		$this->panjang1 = $panjang1;
 		$this->lebar1 = $lebar1;
 	}

 	function get_kelilingpersegipanjang(){
 		return  ($this->panjang1 + $this->lebar1)*2 ;
 	}
 	
 	public $sisi;

 	function set_luaspersegi($sisi)
 	{

 		$this->sisi = $sisi;
 		
 	}

 	function get_luaspersegi(){
 		return  $this->sisi * $this->sisi;
 	}
 	function set_kelilingpersegi($sisi)
 	{

 		$this->sisi = $sisi;
 		
 	}

 	function get_kelilingpersegi(){
 		return 4 * $this->sisi;
 	}
 	public $alas,$tinggi        ;

 	function set_luassegitiga($alas,$tinggi){

 		$this->alas = $alas;
 		$this->tinggi = $tinggi;
 	}

 	function get_luassegitiga()
 	{
 		return $this->alas * $this->tinggi / 2;
 	}
 	function set_kelilingsegitiga($alas,$tinggi,$sisi1){

 		$this->alas = $alas;
 		$this->tinggi = $tinggi;
 		$this->sisi1 = $sisi1;

 	}

 	function get_kelilingsegitiga()
 	{
 		return 3 * $this->sisi1;
 	}
 }


 $persegipanjang1 = new Bangun_datar;
 $persegipanjang1 = new Bangun_datar;
 $persegipanjang1->set_luaspersegipanjang(5,2);
 $persegipanjang1->set_kelilingpersegipanjang(2,2);
 echo"<h3> Bangun datar persegi panjang </h3>";
 echo"Luas : " .$persegipanjang1->get_luaspersegipanjang(). ' Keliling : '.$persegipanjang1->get_kelilingpersegipanjang().'cm','<br>';
 $persegi1 = new Bangun_datar;
 $persegi1 = new Bangun_datar;
 $persegi1->set_luaspersegi(3);
 $persegi1->set_kelilingpersegi(3);
 echo"<h3> Bangun datar persegi </h3>";
 echo"Luas : " .$persegi1->get_luaspersegi().' Keliling : '.$persegi1->get_kelilingpersegi().'cm','<br>';
 $segitiga1 = new Bangun_datar;
 $segitiga1 = new Bangun_datar;
 $segitiga1->set_luassegitiga(5,2);
 $segitiga1->set_kelilingsegitiga(5,2,2);
 echo"<h3> Bangun datar segitiga </h3>";
 echo"Luas : " .$segitiga1->get_luassegitiga(). ' Keliling : ' .$segitiga1-> get_kelilingsegitiga().'<br>';
 


?>