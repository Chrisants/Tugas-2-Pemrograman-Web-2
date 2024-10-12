<?php

class Mobil
{
    const AUTHOR = "Christian Santoso";
    var String $nama;
    var String $merk;
    var ?String $warna = null;
    var int $tahun;
    var int $kecepatanMaksimal;

    function tambahKecepatan()
    {
        echo "Kecepatan Bertambah!";
    }

    function infoMobil(?string $nama)
    {
        //Kondisi jika parameter kosong maka akan ditampilkan properti dari objek
        if(is_null($nama))
        {
            echo "\nNama Mobil adalah {$this->nama}" . PHP_EOL;
            // Jika parameter memiliki nilai maka yang ditampilkan adalah parameter pada function
        } else { 
            echo "\nMobil Anda adalah $nama" . PHP_EOL;
        }
    }
}
?>