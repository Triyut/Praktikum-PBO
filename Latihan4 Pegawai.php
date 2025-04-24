<?php
class Pegawai {
    public function getGaji() {
        return "Gaji pegawai umum";
    }
}

class Manager extends Pegawai {
    public function getGaji() {
        return "Gaji manager lebih besar";
    }
}

class Progammer extends Pegawai {
    public function getGaji() {
        return "Gaji progammer tergantung pengalaman";
    }
}

// Dynamic binding
function cetakGaji(Pegawai $pegawai) {
    echo $pegawai->getGaji() , "<br>";
}

$pegawai1 = new Manager();
$pegawai2 = new Progammer();

cetakGaji($pegawai1); // Output: Gaji manager lebih besar
cetakGaji($pegawai2); // Output: Gaji progammer tergantung pengalaman
?>
