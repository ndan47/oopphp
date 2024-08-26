<?php
// definisi pengguna 
class Pengguna {
    // construct
    public function __construct() {

    }
    // metode atau fungsi
    public function aksesFitur() {

        return "Akses fitur pengguna";
    }
}

// class dosen yang mewarisi dari class pengguna
class Dosen extends Pengguna {
    // construct
    public function __consturct() {

    }
    // metode atau function
    public function aksesFitur() {
        return "<br>Akses fitur dosen";
    }
}

// class mahasiswa yang mewarisi dari class pengguna 
class Mahasiswa extends Pengguna {
    public function __construct() {

    }

    // metode atau function
    public function aksesFitur() {
        return "<br>Akses fitur mahasiswa";
    }
}

// instansi objek
$aksesPengguna = new Pengguna(); 
$aksesDosen = new Dosen(); 
$aksesMhs = new Mahasiswa();
// output
echo $aksesPengguna->aksesFitur();
echo $aksesDosen->aksesFitur();
echo $aksesMhs->aksesFitur();
?>