<?php

$data = [
    "nama" => "Agung",
    "umur" => 19,

    "hobi" => [
        "coding",
        "gaming",
        "balap"
    ],

    "keahlian" => [
        "bahasa" => "PHP",
        "level" => "Pemula"
    ]
];

echo "Nama: ";
echo $data["nama"];
echo "<br>";
echo "Umur: ";
echo $data["umur"];
echo "<br>";
echo "Jumlah Hobi: ";
echo count($data["hobi"]);
echo "<br>";
echo "Bahasa: ";
echo $data["keahlian"]["bahasa"];
echo "<br>";
echo "Level: ";
echo $data["keahlian"]["level"];

?>