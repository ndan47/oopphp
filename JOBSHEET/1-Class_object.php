<?php
// definisi class mahasiswa
class Mahasiswa {
    // attribut atau properti
    public $nama;
    public $nim;
    public $jurusan;
    // metode atau function
    public function tampilkanData() {
        return "Nama : $this->nama <br>Nim : $this->nim <br>Jurursan : $this->jurusan";
    }

    // constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
}

// instansi objek
$mahasiswa = new Mahasiswa ("Muhammad Bondan Rahardinata", "230202018", "Komputer dan Bisnis");
echo $mahasiswa->tampilkanData();
?>