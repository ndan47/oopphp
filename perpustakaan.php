<?php
// Definisi Class
class Buku  {
    // Attribut atau properti
    public $judul;
    public $penulis;

    // Constructor                  //(parameter)
    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis; //prosedur 
    }

    // Metode atau Function
    public function tampilkanInfo() {
        return "Judul : $this->judul, Penulis : $this->penulis"; //function
    } 
}

// Instansi Objek
$buku = new Buku ("Pemrograman PHP", "Andi Prasetyo"); 
echo $buku->tampilkanInfo(); // output

?>

