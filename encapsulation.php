<?php
class Buku1  {
    private $judul;
    private $penulis;

    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setJudul() {
        $this->judul = $judul;
    }
}

$buku1 = new Buku1("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->getJudul(); // Output : Pemrograman PHP
?>