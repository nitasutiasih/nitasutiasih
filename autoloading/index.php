<?php 

require_once 'App/init.php';

$produk1 = new komik("Naruto", "masashi kishimoto", "shonen jump", 30000, 100);
$produk2 = new Game("Uncharted", "neil druckman", "sony computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();