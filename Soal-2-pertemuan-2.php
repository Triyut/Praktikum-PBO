<?php
class PemesananTiket {
    // Atribut private
    private $namaPemesan;
    private $judulFilm;
    private $jumlahTiket;
    private $hargaTiket;
    private $totalHarga;

    // Constructor
    public function __construct($namaPemesan, $judulFilm, $jumlahTiket, $hargaTiket) {
        $this->namaPemesan = $namaPemesan;
        $this->judulFilm = $judulFilm;
        $this->jumlahTiket = $jumlahTiket;
        $this->hargaTiket = $hargaTiket;
        $this->hitungTotalHarga();
    }

    // Getter untuk nama pemesan
    public function getNamaPemesan() {
        return $this->namaPemesan;
    }

    // Getter untuk judul film
    public function getJudulFilm() {
        return $this->judulFilm;
    }

    // Getter untuk jumlah tiket
    public function getJumlahTiket() {
        return $this->jumlahTiket;
    }

    // Getter untuk harga tiket
    public function getHargaTiket() {
        return $this->hargaTiket;
    }

    // Getter untuk total harga
    public function getTotalHarga() {
        return $this->totalHarga;
    }

    // Method untuk menghitung total harga
    private function hitungTotalHarga() {
        $this->totalHarga = $this->jumlahTiket * $this->hargaTiket;
    }

    // Method untuk menampilkan detail pemesanan
    public function tampilkanDetailPemesanan() {
        echo "Detail Pemesanan:\n";
        echo "Nama Pemesan: " . $this->getNamaPemesan() . "\n";
        echo "Judul Film: " . $this->getJudulFilm() . "\n";
        echo "Jumlah Tiket: " . $this->getJumlahTiket() . "\n";
        echo "Harga Tiket: Rp " . number_format($this->getHargaTiket(), 0, ',', '.') . "\n";
        echo "Total Harga: Rp " . number_format($this->getTotalHarga(), 0, ',', '.') . "\n";
    }
}

// Contoh penggunaan
$pemesanan1 = new PemesananTiket("John Doe", "Avengers: Endgame", 2, 50000);
$pemesanan1->tampilkanDetailPemesanan();

/*
Output:
Detail Pemesanan:
Nama Pemesan: John Doe
Judul Film: Avengers: Endgame
Jumlah Tiket: 2
Harga Tiket: Rp 50.000
Total Harga: Rp 100.000
*/
?>