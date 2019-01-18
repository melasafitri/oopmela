<?php 

class Produk {
  public $judul = "judul",
       $penulis ="penulis",
       $penerbit ="penerbit", 
       $harga = "harga";

  	public function __construct( $judul, $penulis, $penerbit, $harga) {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;


  	}

  	public function getlabel() {
  		return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
  	}

}


class CetakInfoproduk {
	public function cetak( Produk $produk) {
		$str ="{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
		return $str;
	}
}



 $produk1 = new Produk("lion", "caramel", "cv sukses", "50000");
 $produk2 = new Produk("superdede", "mela", "cv sukses", "50000");


echo "komik : " . $produk1->getlabel();
echo "<br>";
echo "game : " . $produk2->getlabel();
echo "<br>";
$infoProduk1 = new CetakInfoproduk();
echo $infoProduk1->cetak($produk2);
 ?>
