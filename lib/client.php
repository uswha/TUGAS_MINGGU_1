<?php
 
require_once('nusoap.php');
 
// dua bilangan yang akan dijumlahkan
$bil1 = 15;
$bil2 = 25;
 
// instansiasi obyek untuk class nusoap client
$client = new nusoap_client('localhost/lib/server.php');
// proses call method 'jumlahkan' di script server.php yang ada di komputer B
$result = $client->call ('jumlahkan', array('x' => $bil1, 'y' => $bil2,));

echo "<p>Hasil penjumlahan ".$bil1." dan ".$bil2." adalah ".$result."</p>";
 
?>