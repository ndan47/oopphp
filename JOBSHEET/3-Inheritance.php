<?php
// definisi class pengguna 
class Pengguna {
    // attribute atau properti yang bersifat akses protected atau membatasi akses 
    protected $nama;

    // construct
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // getter untuk mendapatkan properti nama
    public function getNama() {
        return $this->nama;
    }
}

// definisi class dosen yang mewarisi dari class pengguna
class Dosen extends Pengguna {
    // attribute atau properti yang bersifat akses private 
    private $matakuliah;

    //public construct
    public function __construct($nama, $matakuliah) {
        parent::__construct($nama);
        $this->matakuliah = $matakuliah;
    }

    // getter untuk mendapatkan nilai matakuliah
    public function getMatakuliah() {
        return $this->matakuliah;
    }
}

// instansi objek
$dosen = new Dosen ("Pak Abda'u", "<br>Praktikum WEB 2");
echo $dosen->getNama(); // output
echo $dosen->getMatakuliah(); // output
?>