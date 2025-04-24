<?php
abstract class Hewan {
    protected $nama;
    
    public function __construct($nama) {
        $this->nama = $nama;
    }

    abstract public function bersuara();
}

class Kucing extends Hewan {
    public function bersuara() {
        return "Meong!";
    }
}

class Anjing extends Hewan {
    public function bersuara() {
        return "Guk!";
    }
}

$kucing = new Kucing("Kitty");
echo $kucing->bersuara(); // output: Meong!
echo "<br>";
$anjing = new Anjing("Buddy");
echo $anjing->bersuara(); // Output: Guk!
?>