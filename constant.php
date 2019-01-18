<?php 

// defined('Nama', 'Mela Safitri');
// echo Nama;

// echo "<br>";

// const Umur = 17;
// echo Umur;

// class coba {
// 	const Nama = 'Mela safitri'
// }
// class coba::Nama;


//echo __LINE__;

// function coba() {
// 	return __FUNCTION__;
// }

// echo coba();

class coba {
	public $kelas = __CLASS__;
}

$obj = new coba;
echo $obj->kelas;

 ?>