<?php

// // Tipe data array
// $nama =['samuel', 'marten','acho','maikel','korinus','lukas','obet'];

// // panggilan harga berdasarkan 
// echo '<p>'.$nama[0].'</p>';
// echo '<p>'.$nama[1].'</p>';
// echo '<p>'.$nama[2].'</p>';
// echo '<p>'.$nama[3].'</p>';
// echo '<p>'.$nama[4].'</p>';


// var_dump($nama);


// // panggil array menggunakan foreach

// $i= 0;

// echo "<p>Nama Siswa</p>";
// foreach($nama as $siswa)
// {
//     ++$i;
//     echo "<P>".$i.'.'.$siswa."</p>";
// }

// // array yang memiliki index dan value

// $datasiswa = [
//             "namaDepan" => 'Maikel',
//             "NamaBelakang" => 'kayame',
//             "alamat" => 'BTN Dunlop'
// ];

// echo $datasiswa['namaDepan'].''.$datasiswa['NamaBelakang'].'alamat :'.$datasiswa['alamat'];

// // Panggil dengan pengulangan
// echo "<br> Data siswa<br>";
// foreach ($datasiswa as $ds);
// {
//     echo $ds."<br>";
// }

// array multi dimensi
$datasemuasiswa=[
    [
        "namadepan" => "merten",
        "namabelakang" => "tenouye",
        "alamatjalan" => "btn graha permata permai",
        "alamatkelurahan" => "dobonsolo",
        "ttl"=> "wamena, 19 mei 20**",
    ],
    [
        "namadepan" => "merten",
        "namabelakang" => "tenouye",
        "alamatjalan" => "btn graha permata permai",
        "alamatkelurahan" => "dobonsolo",
        "ttl"=> "wamena, 19 mei 20**",
    ],
    [
        "namadepan" => "merten",
        "namabelakang" => "tenouye",
        "alamatjalan" => "btn graha permata permai",
        "alamatkelurahan" => "dobonsolo",
        "ttl"=> "wamena, 19 mei 20**",
    ],
];

// echo $datasemuasiswa[3]['namadepan']
 var_dump($datasemuasiswa );
$i = 0;
foreach($datasemuasiswa as $dss)
{ ++$i;
    echo "<h4>data siswa No.".$i."</h4> <br>";
   echo $dss['namadepan'].''.$dss['namabelakang'].'<br>';
   echo $dss['alamatjalan'].''.$dss['alamatkelurahan'].'<br>';
   echo $dss['ttl'];
}

?>