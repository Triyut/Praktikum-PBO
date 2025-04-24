<?php
class Mahasiswa {
    public $nama;
    public $umur;

public function __construct ($nama, $umur) {
    $this->nama = $nama;
    $this->umur = $umur;
    }
}

// Membuat Objek
$mhs = new Mahasiswa("Andi", 20);

// Serialisasi objek dan simpan ke file 
$data = serialize($mhs);
file_put_contents("mahasiswa.txt", $data);

echo "Objek telah disimpan ke file.\n";


$data = file_get_contents("mahasiswa.txt");
$mhs_baca = unserialize($data);

echo "Nama: " . $mhs_baca->nama . "\n";
echo "Umur: " . $mhs_baca->umur . "\n";


class produk {
    public $nama, $harga, $stok;
    
    public function __construct($nama, $harga, $stok) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }
}

$produk1 = new produk("Laptop", 10000000, 5);
$produk2 = new produk("Mouse", 150000, 20);

//simpan array objek ke file
$produk_list = [$produk1, $produk2];
file_put_contents("produk.txt", serialize($produk_list));

// baca dan tampilkan 
$data = unserialize(file_get_contents("produk.txt"));
foreach ($data as $p) {
    echo "Nama: $p->nama, Harga: $p->harga, Stok: $p->stok\n";
}
?>