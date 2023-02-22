<?php
// Buat Array
$animals = ["burung", "kucing", "nyamuk", "singa"];
echo $animals[1] . "<br>";

echo $animals[3]. "<br>";

// Nampilin semua data
foreach ($animals as $animal) {
    echo $animal . "<br>";
}

// Buat Array Asosiatif
$mahasiswa = ["nama"=>"Ziyad", "jurusan"=>"TI", "semester"=>6];
echo $mahasiswa["jurusan"] . "<br>";

// Nampilin semua data
foreach ($mahasiswa as $key=>$value){
    echo "Key : " . $key . " Value : " . $value . "<br>";
}

// Buat array multidimensi

$dosen = [
    ["Pak Rojul", "Web"],
    ["Pak Reza", "DDP"],
    ["Pak Lukman", "OS"]
];

echo $dosen[2][0];

//  00 01 10 11 20 21

?>