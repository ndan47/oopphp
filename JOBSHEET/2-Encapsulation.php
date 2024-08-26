<?php
// definisi class mahasiswa
class Mahasiswa {
    // attribute atau properti yang bersifat akses private
    private $nama;
    private $nim;
    private $jurusan;

    // metode atau function menalpilkan data mahasiswa 
    public function tampilkanData() {
        return "Nama : $this->nama <br>Nim : $this->nim <br>Jurursan : $this->jurusan";
    }
    // constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    // getter untuk mendapatkan properti nama
    public function getNama() {
        return $this->nama;
    }
    // getter untuk mendapatkan properti nim
    public function getNim() {
        return $this->nim;
    }
    // getter untuk mendapatkan properti jurusan
    public function getJurursan() {
        return $this->jurusan;
    }
    // setter mengatur nilai properti nama
    public function setNama() {
        $this->nama = $nama;
    }
    // setter mengatur nilai properti nim
    public function setNim() {
        $this->nim = $nim;
    }
    // setter mengatur nilai properti jurusan
    public function setJurusan() {
        $this->jurusan = $jurusan;
    }
}

// instansi objek
$mahasiswa = new Mahasiswa ("Muhammad Bondan Rahardinata", "230202018", "Komputer Dan Bisnis");
echo $mahasiswa->tampilkanData(); // output
?>