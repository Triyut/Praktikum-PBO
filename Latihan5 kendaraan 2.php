<?php
interface Transportasi {
    public function bergerak();
}

abstract class Kendaraan implements Transportasi {
    protected $nama;

    public function __construct($nama){
        $this->nama = $nama;
    }

    abstract public function bergerak();
}

class Mobil extends Kendaraan {
    public function bergerak() {
        echo "$this->nama bergerak di jalan raya.";
    }
}

class Pesawat extends Kendaraan {
    public function bergerak() {
        echo "$this->nama terbang di udara.";
    }
}

$mobil = new Mobil("Toyota");
$mobil->bergerak(); // Output: Toyota bergerak di jalan raya.
echo "<br>";
$pesawat = new Pesawat("Boeing737");
$pesawat->bergerak(); // Output: Boeing 737 terbang di udara.
?>