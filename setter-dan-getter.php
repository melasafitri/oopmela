<?php 

class Produk {
  private $judul,
       $penulis,
       $penerbit,
       $harga,
       $diskon = 0;
    

  	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      
  	}
    public function setjudul( $judul ) {
      $this->judul = $judul;

    }
    public function getjudul() {
      return $this->judul;
    }

    public function setpenulis( $penulis ) {
      $this->penulis = $penulis;
    }

    public function getpenulis() {
      return $this->penulis;
    }

    public function setpenerbit( $penerbit ) {
  $this->penerbit = $penerbit;
   }
  public function getpenerbit() {
    return $this->penerbit;
  }

   public function setdiskon( $diskon) {
        $this->diskon = $diskon;

    }

    public function getdiskon() {
      return $this->diskon;
    }
  public function setharga() {
    $this->harga = $harga;
  }

    public function getharga() {
      return $this->harga - ( $this->harga * $this->diskon / 100);


 }

  	public function getlabel() {
  		return "$this->penulis, $this->penerbit,";

  	}
public function getInfoproduk() {
  //komik : lion | mela, cv sukses, (Rp. 50000) - 100 halaman.
  $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";

return $str;
}



}

class komik extends produk {
  public $jmlHalaman;

  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) { 

    parent::__construct( $judul, $penulis, $penerbit, $harga);

    $this->jmlHalaman = $jmlHalaman;

  }

  public function getInfoproduk() {
    $str = "komik : " . parent::getInfoproduk() . " - {$this->jmlHalaman} halaman.";
    return $str;
  }

}

class game extends produk {
  public $waktuMain;

  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) { 

    parent::__construct( $judul, $penulis, $penerbit, $harga);

    $this->$waktuMain = $waktuMain;
 }

 public function getInfoproduk() {
    $str = "game : " . parent::getInfoproduk() . " ~ {$this->waktuMain} jam.";
    return $str;
  }

}


class CetakInfoproduk {
	public function cetak( Produk $produk) {
    $str ="{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
    return $str;
	}
}



 $produk1 = new komik("lion", "caramel", "cv sukses", 50000, 100);
 $produk2 = new game("superdede", "mela", "cv sukses", 50000, 50);
 
 echo $produk1->getInfoproduk();
 echo "<br>";
 echo $produk2->getInfoproduk();

 echo "<hr>";
$produk2->setdiskon(50);
 echo $produk2->getharga();
echo "<hr>";
echo $produk1->getpenulis();
 ?>
