<?php  

// require_once'produk/infoproduk.php';
// require_once'produk/produk.php';
// require_once'produk/komik.php';
// require_once'produk/game.php';
// require_once'produk/cetak.php';
// require_once'produk/user.php';
// require_once'service/user.php';


spl_autoload_register(function( $class) {
	$class = explode('\\', $class);
	$class = end($class);
	require_once __DIR__ .'/produk/' . $class . '.php';
});

spl_autoload_register(function( $class) {
	$class = explode('\\', $class);
	$class = end($class);
	require_once __DIR__ .'/service/' . $class . '.php';
});