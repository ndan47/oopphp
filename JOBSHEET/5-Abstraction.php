<?php
// definisi abstrak class pengguna
abstract class Pengguna {
    // construct
    public function __construct() {

    }

    abstract public function aksesFitur();
}

// class doesen yang mewarisi dari class pengguna
class Dosen extends Pengguna {
    public function __consturct() {

    }

    // implementasi metode abstrak aksesFitur dari class pengguna
    public function aksesFitur() {
        return "<br>Akses fitur dosen";
    }
}

// class mahasisiwa yang mewarisi dari class pengguna
class Mahasiswa extends Pengguna {
    // construct 
    public function __construct() {

    }
    // implementasi metode abstrak aksesFitur dari class pengguna
    public function aksesFitur() {
        return "<br>Akses fitur mahasiswa";
    }
}

// instansi objek 
$aksesDosen = new Dosen(); 
$aksesMhs = new Mahasiswa();
// output
echo $aksesDosen->aksesFitur();
echo $aksesMhs->aksesFitur();
?>