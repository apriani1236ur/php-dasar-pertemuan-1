<?php

class MerkHandphone {
    // Properties dengan default value (nilai awal)
    public $namaMerk = "Samsung";
    public $seriUnggulan = "Galaxy S Series";

    public function tampilkanPesan() {
        echo "Merk HP saat ini adalah " . $this->namaMerk . " dengan seri " . $this->seriUnggulan . "<br>";
    }
}

// ==========================================
// OBJEK 1 (Menggunakan nilai bawaan/default)
// ==========================================
$hp1 = new MerkHandphone();
$hp1->tampilkanPesan();


// ==========================================
// OBJEK 2 (Mengubah nilainya untuk HP lain)
// ==========================================
$hp2 = new MerkHandphone();
$hp2->namaMerk = "iPhone";
$hp2->seriUnggulan = "15 Pro Max";
$hp2->tampilkanPesan();

?>