<?php
require_once("./function.php");

$data = [
    "nama" => "kontol ngaceng",
    "umur" => 13,
    "hobi" => "ngatain orang",
    "img" => "https://media.tenor.com/_zWYqfZdneIAAAAM/shocked-face-shocked-meme.gif",
    "keseharian" => [
        "kerjaan" => "coli",
        "keahlian" => "sewa lonte"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- kalau mau ambil data di html content. pastikan ada syntax -->
    <img src="<?= $data["img"] ?>" width="435">
    <h2>Nama: <?= $data["nama"] ?></h2>
    <h2>Umur: <?= $data["umur"] ?></h2>
    <h2>Hobi: <?= $data["hobi"] ?></h2>
    <h2>Keseharian: <?= $data["keseharian"]["kerjaan"] ?> <br> Keahlian: <?= $data["keseharian"]["keahlian"] ?></h2>
    <p>Total keseharian: <?= count($data["keseharian"])?></p>
</body>
</html>