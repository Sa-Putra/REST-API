<?php

// $mahasiswa = [
//     [
//         "nama" => "Rahmat Awal Saputra",
//         "nim" => "2217020156",
//         "email" => "putra07062020@gmail.com"
//     ],
//     [
//         "nama" => "Cristiano Ronaldo",
//         "nim" => "3017020225",
//         "email" => "cristiano@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost; dbname=phpdasar', 'root', 
''); 
$db = $dbh->prepare('SELECT * FROM mahasiswa'); 
$db->execute(); 
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
?>
