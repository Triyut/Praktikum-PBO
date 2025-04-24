<?php

class Hewan {
    public function bersuara () {
        echo "Hewan bersuara\n";
    }
}

class Kucing extends Hewan {
    public function bersuara() {
        echo "Meow!\n";
    }
}

class Anjing extends Hewan {
    public function bersuara() {
        echo "Guk guk!\n";
    }
}

$hewan1 = new hewan();
$hewan2 = new Kucing();
$hewan3 = new Anjing();

$hewan1->bersuara(); // Output: Hewan bersuara
$hewan2->bersuara(); // Output: Meow!
$hewan3->bersuara(); // Output: Guk guk!

?>