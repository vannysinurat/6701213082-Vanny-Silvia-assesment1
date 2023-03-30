<?php
$angka1 = $_POST["angka1"];
$angka2 = $_POST["angka2"];
$operator = $_POST["operator"];

if ($operator == "+") {
	$hasil = $angka1 + $angka2;
} else if ($operator == "-") {
	$hasil = $angka1 - $angka2;
} else if ($operator == "*") {
	$hasil = $angka1 * $angka2;
} else if ($operator == "/") {
	$hasil = $angka1 / $angka2;
} else {
	$hasil = "Operator tidak valid";
}

echo "Hasil operasi: " . $hasil;
?>
