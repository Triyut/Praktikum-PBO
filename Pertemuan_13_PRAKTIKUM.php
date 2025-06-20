<?php

namespace App\Models;

class User
{
    public function info()
    {
        return "Ini adalah class User dari namespace App\Models";
    }
}








<?php

require 'User.php';

use App\Models\User;


$user = new User();
echo $user->info();
?>







<?php

namespace Models;

class Mahasiswa
{
    public $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function tampilkanNama()
    {
        return "Nama Mahasiswa: " . $this->nama;
    }
}









<?php

namespace Controllers;

use Models\Mahasiswa;

class MahasiswaController
{
    public function proses()
    {
        $mhs = new Mahasiswa("Rommi");
        echo $mhs->tampilkanNama();
    }
}











<?php

require 'Models/Mahasiswa.php';
require 'Controllers/MahasiswaController.php';

use Controllers\MahasiswaController;

$controller = new MahasiswaController();
$controller->proses();





public function proses()
{
    $mhs = new Mahasiswa("Rommi");
    echo $mhs->tampilkanNama();
}

