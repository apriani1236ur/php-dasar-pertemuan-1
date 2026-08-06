<?php

$hari = "Sabtu";

switch ($hari) {
    case "Senin":
    case "Selasa":
    case "Rabu":
    case "Kamis":
    case "Jumat":
        echo "Hari Kerja";
        break;
    case "Sabtu":
    case "Minggu":
        echo "Akhir Pekan (Libur)";
        break;
    default:
        echo "Nama hari tidak valid";
}