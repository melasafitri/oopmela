<?php 

class Produk {
  public $judul = "judul",
  		 $penulis ="penulis",
  		 $penerbit ="penerbit", 
  		 $harga = "harga";

  	public function getlabel() {
  		return "$this->judul, $this->penulis, $this->penerbit, $this->harga";

  	}

}

// $produk1 = new Produk();
// $produk1->komik ="lion";
// var_dump($produk1); 

// $produk2 = new Produk();
// $produk2->game = "superdede";
// $produk2->penulis = "mela";
// $produk2->tambahproperty = "hothothot";
// var_dump($produk2);

 $produk3 = new Produk();
 $produk3->judul = "lion";
 $produk3->penulis = "caramel";
 $produk3->penerbit = "cv sukses";
 $produk3->harga = "50000";
 



$produk4 = new Produk();
 $produk4->judul = "superdede";
 $produk4->penulis = "mela ";
 $produk4->penerbit = "cv sukses";
 $produk4->harga = "50000";

echo "komik : " . $produk3->getlabel();
echo "<br>";
echo "game : " . $produk4->getlabel();
 ?>
