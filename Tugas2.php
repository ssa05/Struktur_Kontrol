<html>
<head>
	<title>Tugas 2</title>
<body>
<?php
$totalBelanja = 100000;
$minimalBelanja = 100000;
$besardiskon = 0.1; //variabel diskon 10%

if ($totalBelanja >= $minimalBelanja) {
  $diskon = $besardiskon * $totalBelanja;
  $totalBayar = $totalBelanja - $diskon;
  echo "Total belanja: " . $totalBelanja . "<br>";
  echo "Diskon: " . $diskon . "<br>";
  echo "Total bayar setelah diskon: " . $totalBayar;
} else {
  $totalBayar = $totalBelanja;
  echo "Total belanja: " . $totalBelanja . "<br>";
  echo "Anda tidak mendapat diskon karena total belanja kurang dari minimal belanja" . "<br>";
  echo "Total bayar: " . $totalBayar;
}
?>

</body>
</html>