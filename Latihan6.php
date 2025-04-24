<?php
class Mobil {
    private $kecepatan = 0;
    private $bahanBakar = 100;

    public function tambahKecepatan($kecepatan) {
        $this->kecepatan += $kecepatan;
        echo "Kecepatan bertambah menjadi {$this->kecepatan} km/jam.<br>";
        return $this;
    }

    public function kurangiKecepatan($kecepatan) {
        $this->kecepatan += $kecepatan;
        echo "Kecepatan berkurang menjadi {$this->kecepatan} km/jam.<br>";
        return $this;
    }

    public function isiBahanBakar($bahanBakar) {
        $this->bahanBakar += $bahanBakar;
        echo "Bahan bakar bertambah menjadi {$this->bahanBakar}%<br>";
        return $this;
    }
}

//Penggunaan method chaining
$mobil = new Mobil();
$mobil->tambahKecepatan(20)->kurangiKecepatan(5)->isiBahanBakar(10);