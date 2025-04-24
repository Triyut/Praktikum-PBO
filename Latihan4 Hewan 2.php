<?php
interface Hewan {
    public function bersuara();
}

class Kucing implements Hewan {
    public function bersuara() {
        return "Meow";
    }
}

class Anjing implements Hewan {
    public function bersuara() {
        return "Guk guk";
    }
}

// Implementasi polimorfisme dengan interface
$hewan1 = new Kucing();
$hewan2 = new Anjing();

echo $hewan1->bersuara(); // Output: Meong
echo "<br>";
echo $hewan2->bersuara(); // Output: Guk guk
?>