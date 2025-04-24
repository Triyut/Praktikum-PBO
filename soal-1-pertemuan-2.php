<?php
class Mobil {
    // Atribut private
    private $kecepatan;

    // Constructor
    public function __construct($kecepatanAwal = 0) {
        $this->kecepatan = $kecepatanAwal;
    }

    // Getter untuk kecepatan
    public function getKecepatan() {
        return $this->kecepatan;
    }

    // Setter untuk kecepatan
    public function setKecepatan($kecepatanBaru) {
        if ($kecepatanBaru >= 0) {
            $this->kecepatan = $kecepatanBaru;
        } else {
            echo "Kecepatan tidak boleh negatif!\n";
        }
    }

    // Method untuk menambah kecepatan
    public function tambahKecepatan($tambahan) {
        $this->setKecepatan($this->kecepatan + $tambahan);
    }

    // Method untuk mengurangi kecepatan
    public function kurangiKecepatan($pengurangan) {
        $this->setKecepatan($this->kecepatan - $pengurangan);
    }
}

// Contoh penggunaan
$mobil = new Mobil();
echo "Kecepatan awal: " . $mobil->getKecepatan() . " km/h\n"; // Output: 0 km/h

$mobil->setKecepatan(60);
echo "Kecepatan setelah diubah: " . $mobil->getKecepatan() . " km/h\n"; // Output: 60 km/h

$mobil->tambahKecepatan(20);
echo "Kecepatan setelah ditambah: " . $mobil->getKecepatan() . " km/h\n"; // Output: 80 km/h

$mobil->kurangiKecepatan(30);
echo "Kecepatan setelah dikurangi: " . $mobil->getKecepatan() . " km/h\n"; // Output: 50 km/h

$mobil->setKecepatan(-10); // Output: Kecepatan tidak boleh negatif!
?>