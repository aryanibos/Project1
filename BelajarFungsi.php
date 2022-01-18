<?php 
// Membuat Fungsi
// function halo($nama){
//     echo "Assalammualaikum".$nama;

//fungsi + parameter
function panggil($nama , $usia){
    echo "Halo , $nama Umur saya $usia Tahun";
}

// Fungsi + Default Value
function lahir($bulan,$tahun=2021){
        echo "Bulan Lahir $bulan tahun $tahun";
}

// function lahir($bulan,$tahun=2021){
//     echo 'Bulan Lahir '.$bulan. ' tahun '. $tahun;
// }

// Fungsi + Return Vaue
function pejumlahan($a,$b){
    $hasil = $a + $b;
    echo " Hasil Pejumlahan $a + $b = $hasil";
    return $hasil;
}

// Luas Lingkaran
function luasLingkaran($r){
    $hasil = 3.14 * $r * $r ;
    echo " Hasil Dari Luas Lingkaran PHI X $r X $r = $hasil";
    return $hasil;
}

// Luas Segitiga
function luasSegitiga($a,$t){
    $hasil = $a * $t /2 ;
    echo " Hasil Dari Luas Segitiga $a X $t / 2 = $hasil";
    return $hasil;
}

// Keliling Lingkaran
function kelilingLingkaran($r){
    $hasil = 2 * 3.14 * $r ;
    echo " Hasil Dari Keliling Lingkaran 2 X PHI X $r = $hasil";
    return $hasil;
}

// Cara Singkat

// // Luas Lingkaran
// function luasLingkaran($r){
//     return 3.14 * $r * $r ;
// }

// // Luas Segitiga
// function luasSegitiga($a,$t){
//     return $a * $t /2 ;
// }

// // Keliling Lingkaran
// function kelilingLingkaran($r){
//     return 2 * 3.14 * $r ;
// }

// Fungsi di dalam Fungsi
function nama($nama){
    echo "Perkenalkan nama saya $nama <br>";
    echo "Usia Saya Sekarang Adalah ".umur(2003,2022)." Tahun";
}
function umur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
} 


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Fungsi</title>
</head>

<body>
    <!-- Memanggil Fungsi -->
    <!-- <h2><?php panggil(" Usman", 20) ?></h2> -->
    <!-- <h2><?php lahir("januari") ?></h2>
    <h2><?php pejumlahan( 10 , 12 ) ?></h2> -->
    <!-- <h2><?php luasLingkaran( 8 ) ?></h2>
    <h2><?php luasSegitiga( 10 , 12 ) ?></h2>
    <h2><?php kelilingLingkaran( 12 ) ?></h2> -->
    <h2><?php nama("Arya") ?></h2>
</body>

</html>
