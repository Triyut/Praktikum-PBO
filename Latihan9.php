<?php
class Mahasiswa {
    public $nama;
    
    public function __construct($nama) {
        $this->nama = $nama;
    }
}

// Array of objects
$mahasiswaList = [];
$mahasiswaList [] = new Mahasiswa ("Rina");
$mahasiswaList [] = new Mahasiswa ("Budi");

foreach ($mahasiswaList as $mhs) {
    echo $mhs->nama . "\n";
}
?>


<?php
abstract class Pegawai {
    abstract function info();
}

class Dosen extends Pegawai {
    function info() {
        return "Saya dosen.";
    }
}

class Staf extends Pegawai {
    function info() {
        return "Saya staf.";
    }
}

$pegawai = [new Dosen(), new Staf()];
foreach ($pegawai as $p) {
    echo $p->info() . "\n";
}
?>


<?php
// 1. membuat class Produk
class Produk {
    public $nama;
    public $harga;
    public $stok;
    
    public function __construct($nama, $harga, $stok) {
        $this->nama = $nama;
        $this->nama = $harga;
        $this->nama = $stok;
}

    public function tampilkan() {
        return " Nama: {$this->nama}. Harga: Rp{$this->harga}, Stok: {$this->stok}";
}

}
// 2. Menyimpan beberapa produk dalam array

$produkList = [];
$produkList[] = new Produk("Laptop", 7000000, 5);
$produkList[] = new Produk("Mouse", 100000, 15);
$produkList[] = new Produk("Keyboard", 250000, 10);
$produkList[] = new Produk("Monitor", 1500000, 3);

// 3. Menampilkan semua produk
echo "--- Semua Produk ---\n";
foreach ($produkList as $produk) {
    echo $produk->tampilkan(). "\n";
}

// 4. Mencari produk berdasarkan harga tertentu (misal: di bawah Rp1.000.000)
$hargaMaks = 1000000;
echo "\n--- Produk dengan harga di bawah Rp$hargaMaks ---\n";
foreach ($produkList as $produk) {
    if ($produk->harga < $hargaMaks) {
        echo $produk->tampilkan(), "\n";
    }
}

// 5. Menampilkan elemen array angka
$angka = [10, 20, 30];
echo "\nAngka kedua dalam array adalah: " . $angka[1]; // output: 20
?>