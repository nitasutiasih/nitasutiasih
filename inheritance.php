<?php 

class produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktuMain;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
    
    public function getInfoProduk() {
    	$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    	return $str;
    }

}


class komik extends produk {
	public function getInfoProduk() {
		$str = "komik : ". parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}


class Game extends produk {
	public function getInfoProduk() {
		$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} jam.";
		return $str;
	}
}


class cetakinfoproduk {
	public function cetak( produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new komik("Naruto", "masashi kishimoto", "shonen jump", 30000,100, 0);
$produk2 = new Game("Uncharted", "neil druckman", "sony computer", 250000,0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();