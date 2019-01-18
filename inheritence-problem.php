<?php 

class Produk {
  public  $judul,
       $penulis,
       $penerbit, 
       $harga,
       $jmlHalaman,
       $waktuMain,
       $tipe;


  	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      $this->jmlHalaman = $jmlHalaman;
      $this->waktuMain = $waktuMain;
      $this->tipe = $tipe;
   

  	}

  	public function getlabel() {
  		return "$this->penulis, $this->penerbit,";

  	}
public function getInfoLengkap() {
  //komik : lion | mela, cv sukses, (Rp. 50000) - 100 halaman.
  $str = "{$this->tipe} : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
  if( $this->tipe == "komik") {
  $str .= " - {$this->jmlHalaman} halaman.";
} else if( $this->tipe == "game") {
  $str .= " ~ {$this->waktuMain} jam.";
} 

return $str;
}



}


class CetakInfoproduk {
	public function cetak( Produk $produk) {
    $str ="{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
    return $str;
	}
}



 $produk1 = new Produk("lion", "caramel", "cv sukses", 50000, 100, 0, "komik");
 $produk2 = new Produk("superdede", "mela", "cv sukses", 50000, 0, 50, "game");

 echo $produk1->getInfoLengkap();
 echo "<br>";
 echo $produk2->getInfoLengkap();

 ?>
