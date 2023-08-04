<?php
//  $_GET

// var_dump($_GET);

$mahasiswa = [
    [
        "nrp" => "043040023",
        "nama" => "Sandhika Galih",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "sandhika.jpeg"
    ],
    [
        "nama" => "Doddy Ferdiansyah",
        "nrp" => "033040001",
        "email" => "doddy@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "doddy.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>

    <body>
        <h1> Daftar Mahasiswa</h1>
        <?php foreach ($mahasiswa as $mhs): ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?> &nrp=
                <?= $mhs["nrp"]; ?>&email=
                <?= $mhs["email"]; ?>&jurusan=
                <?= $mhs["jurusan"]; ?>&gambar=
                <?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?>
            </a>
        </li>
        <?php endforeach; ?>
    </body>

</html>