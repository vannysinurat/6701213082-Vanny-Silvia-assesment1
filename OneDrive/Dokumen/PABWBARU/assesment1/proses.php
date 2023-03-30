<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$angka1 = $_POST["angka1"];
	$angka2 = $_POST["angka2"];
	$operator = $_POST["operator"];
	switch ($operator) {
		case "+":
			$hasil = $angka1 + $angka2;
			echo "Hasil penjumlahan: $hasil";
			break;
		case "-":
			$hasil = $angka1 - $angka2;
			echo "Hasil pengurangan: $hasil";
			break;
		case "*":
			$hasil = $angka1 * $angka2;
			echo "Hasil perkalian: $hasil";
			break;
		case "/":
			$hasil = $angka1 / $angka2;
			echo "Hasil pembagian: $hasil";
			break;
		default:
			echo "Operator tidak valid";
			break;
	}
}
?>