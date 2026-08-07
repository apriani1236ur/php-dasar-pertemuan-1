<?php
// Mendefinisikan array multidimensi
$produk = [
    ["Nama" => "Laptop", "Stok" => 10],
    ["Nama" => "Mouse", "Stok" => 25],
    ["Nama" => "Keyboard", "Stok" => 15]
];

// Mengakses elemen array multidimensi
echo $produk[0]["Nama"] . " tersisa " . $produk[0]["Stok"] . " unit.<br>";
echo $produk[1]["Nama"] . " tersisa " . $produk[1]["Stok"] . " unit.";
?>