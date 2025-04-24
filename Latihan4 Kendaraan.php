<?php
class kendaraan {
    public function bergerak(){
        return "Kendaraan bergerak";
    }
}

class Mobil extends Kendaraan {
    public function bergerak() {
        return "Mobil berjalan di jalan raya";
    }
}

class pesawat extends Kendaraan {
    public function bergerak() {
        return "Pesawat terbang di udara";
    }
}

// Implementasi polimorfisme
$kendaraan1 = new Mobil();
$kendaraan2 = new Pesawat();

echo $kendaraan1->bergerak(); // Output: Mobil berjalan di jalan raya
echo "<br>";
echo $kendaraan2->bergerak(); // Output: Pesawat terbang di udara
?>
