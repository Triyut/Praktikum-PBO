class Produk {
    private $harga;

    public function __construct($harga) {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga;
    }

    public function setHarga($hargaBaru) {
        if ($hargaBaru > 0) {
            $this->harga = $hargaBaru;
        } else {
            echo "Harga tidak valid!";
        }
    }
}
