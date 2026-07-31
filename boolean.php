<?php
$isLulus = true;
$isGraduated = false;

// Contoh penggunaan pada pengondisian (if-else)
if ($isLulus) {
    echo "Selamat, Anda dinyatakan Lulus!<br>";
} else {
    echo "Maaf, Anda tidak lulus.<br>";
}

// Mengecek tipe data
var_dump($isLulus);      // outputs: bool(true)
echo "<br>";
var_dump($isGraduated);  // outputs: bool(false)
?>