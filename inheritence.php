<?php 

class Produk {
  public  $judul,
       $penulis,
       $penerbit, 
       $harga,
       $jmlHalaman,
       $waktuMain;
       


  	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0) {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      $this->jmlHalaman = $jmlHalaman;
      $this->waktuMain = $waktuMain;
      
   

  	}

  	public function getlabel() {
  		return "$this->penulis, $this->penerbit,";

  	}
public function getInfoproduk() {
  //komik : lion | mela, cv sukses, (Rp. 50000) - 100 halaman.
  $str = "{$this->tipe} : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";

return $str;
}



}

class komik extends produk {
  public function getInfoproduk() {
    $str = "komik : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) ~ {$this->jmlHalaman} halaman.";
    return $str;
  }

}

class game extends produk {
  public function getInfoproduk() {
    $str = "game : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) - {$this->waktuMain} jam.";
    return $str;
  }

}


class CetakInfoproduk {
	public function cetak( Produk $produk) {
    $str ="{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
    return $str;
	}
}



 $produk1 = new komik("lion", "caramel", "cv sukses", 50000, 100, 0);
 $produk2 = new game("superdede", "mela", "cv sukses", 50000, 0, 50);

 echo $produk1->getInfoproduk();
 echo "<br>";
 echo $produk2->getInfoproduk();

 ?>
