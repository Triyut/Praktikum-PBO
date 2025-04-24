<?php
class AkunBank {
    private $saldo;

    public function __construct($saldoAwal) {
        $this->saldo = $saldoAwal;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($jumlah) {
        if ($jumlah >= 0) {
            $this->saldo = $jumlah;
        } else {
            echo "Saldo tidak dapat negatif!";
        }
    }
}

// Penggunaan
$akun = new AkunBank(100000);
echo "Saldo Awal: " . $akun->getSaldo() . "<br>";

$akun->setSaldo(150000);
echo "Saldo Setelah Perubahan: " . $akun->getSaldo();
?>
