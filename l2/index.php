<?php

require_once("./function.php");

$data = [
    "nama" => "Agung",
    "umur" => 19,
    "pekerjaan" => "Programmer",

    "hobi" => [
        "coding",
        "gaming",
        "ngoding",
        "balap"
    ],

    "keahlian" => [
        "bahasa" => "PHP",
        "framework" => "Laravel",
        "database" => "MySQL"
    ]
];

echo garis();
echo " PROFIL SAYA ";
echo garis();
echo "<br>";

echo "Nama: ";
echo $data["nama"];
echo "<br>";
echo "Umur: ";
echo $data["umur"];
echo "<br>";
echo "Pekerjaan: ";
echo $data["pekerjaan"];
echo "<br>";
echo "<br>";

echo garis();
echo "HOBI";
echo garis();
echo "<br>";

$i = 1;

foreach($data["hobi"] as $hobi) {
    // for ($i = 0; $i < $hobi; $i++) {
    //     echo $i + ". ";
    //     echo $hobi;
    //     echo "<br>";
    // }
    echo "$i. $hobi";
    echo "<br>";
    $i++;

    // echo "Total Hobi: ";
    // echo count($data["hobi"]);
}

echo "<br>";
echo "Total Hobi: ";
echo count($data["hobi"]);
echo "<br>";

echo "<br>";
echo garis();
echo " KEAHLIHAN ";
echo garis();
echo "<br>";

// echo "Bahasa: ";
// echo $data["keahlian"]["bahasa"];
// echo "<br>";
// echo "Framework: ";
// echo $data["keahlian"]["framework"];
// echo "<br>";
// echo "Database: ";
// echo $data["keahlian"]["database"];
// echo "<br>";

foreach($data["keahlian"] as $key => $value) {
    echo $key . ": " . $value;
    echo "<br>";
}
?>