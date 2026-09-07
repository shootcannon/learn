<?php

$fk = [
    "nama" => "agung",
    "umur" => 20,
    "hobi" => "gaming"
];

// key itu variabel nya
// value itu nilai dari variabel nya sendiri

foreach($fk as $key => $value) {
    echo "Key: ";
    echo $key;

    echo " | Value: ";
    echo $value;
    echo "<br>";
}

?>