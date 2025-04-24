<?php

// Interface Laporan
interface Laporan {
    public function cetakDetail($showAdmin = false);
}

// Abstract Class Pelanggan
abstract class Pelanggan implements Laporan {
    protected $nama;
    protected $jumlahKwh;
    protected $tarifPerKwh;

    public function __construct($nama, $jumlahKwh, $tarifPerKwh) {
        $this->nama = $nama;
        $this->jumlahKwh = $jumlahKwh;
        $this->tarifPerKwh = $tarifPerKwh;
    }

    public function setJumlahKwh($jumlahKwh) {
        $this->jumlahKwh = $jumlahKwh;
        return $this;
    }

    abstract public function hitungTagihan();
}

// Subclass PelangganRumahTangga
class PelangganRumahTangga extends Pelanggan {
    public function hitungTagihan() {
        return $this->jumlahKwh * $this->tarifPerKwh;
    }

    public function cetakDetail($showAdmin = false) {
        echo "Pelanggan Rumah Tangga: {$this->nama}, Tagihan: Rp. " . $this->hitungTagihan() . "\n";
    }
}

// Subclass PelangganBisnis
class PelangganBisnis extends Pelanggan {
    private $biayaAdmin = 5000;

    public function hitungTagihan() {
        return ($this->jumlahKwh * $this->tarifPerKwh) + $this->biayaAdmin;
    }

    public function cetakDetail($showAdmin = false) {
        echo "Pelanggan Bisnis: {$this->nama}, Tagihan: Rp. " . $this->hitungTagihan();
        if ($showAdmin) {
            echo " (termasuk biaya admin Rp. {$this->biayaAdmin})";
        }
        echo "\n";
    }
}

// Fungsi untuk memproses laporan tagihan
function prosesLaporanTagihan(Pelanggan $pelanggan) {
    $pelanggan->cetakDetail(true);
}

// Membuat objek dan menguji kode
$rumahTangga = new PelangganRumahTangga("Budi", 100, 1500);
$bisnis = new PelangganBisnis("Toko Jaya", 200, 2000);

$rumahTangga->cetakDetail();
$bisnis->cetakDetail();

// Menggunakan method chaining
$bisnis->setJumlahKwh(300)->cetakDetail(true);

// Proses laporan tagihan
prosesLaporanTagihan($rumahTangga);
prosesLaporanTagihan($bisnis);

?>
