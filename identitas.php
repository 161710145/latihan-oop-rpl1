<?php
echo"<h3> Data Siswa SMK Assalaam Bandung </h3>";
//class
class manusia{

	//property
	public $nama;
	public $tempatlahir;
	public $kelas;
	public $status;

//konstruktor
public function __construct(){
}

public function set_nama($nama)
	{
		$this-> nama = $nama;
	}
public function get_nama()
	{
		return $this-> nama;
	}
public function set_tempatlahir($tempatlahir)
	{
		$this-> tempatlahir = $tempatlahir;
	}
public function get_tempatlahir()
	{
		return $this-> tempatlahir;
	}
public function set_kelas($kelas)
	{
		$this-> kelas = $kelas;
	}
public function get_kelas()
	{
		return $this-> kelas;
	}
public function set_status($status)
	{
		$this-> status = $status;
	}
public function get_status()
	{
		return $this-> status;
	}
    } 
?>