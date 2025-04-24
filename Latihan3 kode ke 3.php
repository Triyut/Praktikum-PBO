<?php
class BankAccount {
    private $saldo;

    public function __construct($saldoAwal) {
        $this->saldo = $saldoAwal;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function deposit($jumlah) {
        if ($jumlah > 0) {
            $this->saldo += $jumlah;
        } else {
            echo "Jumlah deposit harus lebih dari 0!";
        }
    }

    public function tarik($jumlah) {
        if ($jumlah > 0 && $jumlah <= $this->saldo) {
            $this->saldo -= $jumlah;
        } else {
            echo "Penarikan tidak valid!";
        }
    }
}

// Contoh penggunaan
$akun = new BankAccount(500000);
$akun->deposit(200000);
$akun->tarik(100000);
echo "Saldo akhir: " . $akun->getSaldo();
?>
