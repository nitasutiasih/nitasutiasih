<?php 

class produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
    
}


class cetakinfoproduk {
	public function cetak( produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}



$produk1 = new produk("Naruto", "masashi kishimoto", "shonen jump", 30000);
$produk2 = new produk("Uncharted", "neil druckman", "sony computer", 250000);


echo "komik : " . $produk1->getLabel();
echo "<br>";
echo "game : " . $produk2->getLabel();
echo "<br>";

$infoproduk1 = new cetakinfoproduk();
echo $infoproduk1->cetak($produk1);