<html>
<head>
	<title>Tugas 1</title>
<body>
<?php
$minimal_belanja = 100000; // variabel minimal belanja
$total_belanja = 120000; // variabel total belanja
$besardiskon = 0.1; //variabel diskon 10%

if ($total_belanja > $minimal_belanja) {
    $diskon = $total_belanja * $besardiskon; 
    $total_bayar = $total_belanja - $diskon; 
    echo "Selamat, Anda mendapatkan diskon 10%!<br>";
    echo "Total bayar sebelum diskon: Rp. ".$total_belanja."<br>";
    echo "Total bayar setelah diskon: Rp. ".$total_bayar."<br>";
} else {
    echo "Maaf, total belanja Anda belum mencapai minimal belanja.<br>";
    $total_bayar = $total_belanja; 
    echo "Total bayar: Rp. ".$total_bayar."<br>";
}
?>

</body>
</html>