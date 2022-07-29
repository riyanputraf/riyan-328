<?php


$printer = new Printer();
$buku = $printer->cetakBuku('Cara Efektif Belajar Framework Laravel');


$kurir = new Kurir();
$kurir->kirim($buku, 'Bandung');

spl_autoload_register (function  ($class ) {
    include $class . '.php' ;
    });

?>