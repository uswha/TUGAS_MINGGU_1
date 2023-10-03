<?php
 
// mengincludekan file berisi class nusoap
require_once('nusoap.php');
// instansiasi class soap untuk server
$server = new soap_server;
// meregistrasi 'method' untuk proses penjumlahan dengan nama 'jumlahkan'
$server->register('jumlahkan');
 
// detil isi method 'jumlahkan'
function jumlahkan ($x, $y) {
    return $x + $y;
}
 
// memberikan response service
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>