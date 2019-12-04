<?php

// $mahasiswa = [
//     [
//     "nama" => "Yantivia",
//     "nrp" => "173040011",
//     "email" => "yantifia@mail.unpas.ac.id"
// ],

// [
//     "nama" => "Bella",
//     "nrp" => "173040019",
   
//     "email" => "bella@mail.unpas.ac.id"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpmvc', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;


?>