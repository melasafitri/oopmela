<?php 

abstract class Produk {
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
abstract public function getInfoproduk();
public function getInfo() {
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
    $str = "komik : " . $this->getInfo() . " - {$this->jmlHalaman} halaman.";
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
    $str = "game : " . $this->getInfo() . " ~ {$this->waktuMain} jam.";
    return $str;
  }

}


class CetakInfoproduk {
  public $daftarproduk = array();
public function tambahproduk( produk $produk) {
  $this->daftarproduk[] = $produk;
}

	public function cetak() {
    $str ="DAFTAR PRODUK : <br>";
    
    foreach( $this->daftarproduk as $p) {
      $str .= "- {$p->getInfoproduk()} <br>";
    }
    return $str;
	}
}



 $produk1 = new komik("lion", "caramel", "cv sukses", 50000, 100);
 $produk2 = new game("superdede", "mela", "cv sukses", 50000, 50);

 $cetakproduk = new CetakInfoproduk();
 $cetakproduk->tambahproduk( $produk1);
 $cetakproduk->tambahproduk( $produk2);
 echo $cetakproduk->cetak();
 

 ?>
