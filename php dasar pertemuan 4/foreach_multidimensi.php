<?php
$karyawan = [
    ["Nama" => "Apriani", "Jabatan" => "Manager"],
    ["Nama" => "Nur", "Jabatan" => "Developer"],
    ["Nama" => "Anggraini", "Jabatan" => "Designer"]
];

foreach ($karyawan as $person) {
    echo $person["Nama"] . " bekerja sebagai " . $person["Jabatan"] . ".<br>";
}
?>