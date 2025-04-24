<?php class Mobil
{
    public $merk = '';
    public $tipe = '';
    
    public function maju(){
        echo 'Brooooommmm......<br>';
    }
}
//membuat dan mengatur proprty object 1
$mobill = new Mobil();
$mobill->merk = 'Suzuki';
$mobill->tipe = 'Ertiga';

//mencetak property dan menjalankan method maju() object 1
echo $mobill->merk . " " . $mobill->tipe . " " . $mobill->maju()."<br>";

//membuat dan mengatur property object 2
$mobil2 = new Mobil();
$mobil2->merk = 'Ford';
$mobil2->tipe = 'Mustang';

//mencetak property dan menjalankan method maju() object 2
echo $mobil2->merk . " " . $mobil2->tipe . " " . $mobil2->maju();
?>
