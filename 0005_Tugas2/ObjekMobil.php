<?php
// Termasuk class Mobil.php
require_once "Mobil.php";

// Inisialisasi variabel (objek) mobilSatu
$mobilSatu = new Mobil();

// Menampilkan informasi objek
// var_dump($mobilSatu);

// menambahkan properties pada objek mobilSatu
$mobilSatu->nama = "Avanza";
$mobilSatu->merk = "Toyota";
$mobilSatu->warna = "Hitam";
$mobilSatu->tahun = 2019;
$mobilSatu->kecepatanMaksimal = 1300;

// Menampilkan informasi objek mobilSatu
echo " Nama : $mobilSatu->nama" . PHP_EOL;
echo " Merk : $mobilSatu->merk" . PHP_EOL;
echo " Warna : $mobilSatu->warna" . PHP_EOL;
echo " Tahun : $mobilSatu->tahun" . PHP_EOL;
echo " Kecepatan Maksimal : $mobilSatu->kecepatanMaksimal" . PHP_EOL;

// Membuat objek mobilDua
$mobilDua = new Mobil();

// Menambahkan properties pada objek mobilDua
$mobilDua->nama = "Brio";
$mobilDua->merk = "Honda";
$mobilDua->warna = "Merah";
$mobilDua->tahun = 2018;
$mobilDua->kecepatanMaksimal = 1000;

// Menampilkan informasi objek mobilDua
// var_dump($mobilDua);

// Mengakses function/method
$mobilSatu->tambahKecepatan();

// Mengakses Function infoMobil
$mobilSatu->infoMobil("Xenia");

// Memanggil dan Menampilkan constant
echo Mobil::AUTHOR;
?>