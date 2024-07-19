<?php
// $_GET
$mahasiswa = [
    [
    "nama" => "Ryo", 
    "nrp" => "7264371",
    "email" => "ryo@gmail.com",
    "jurusan" => "Informatika",
    "gambar" => "Ryo.jpg"
    
    ],
    [
    "nama" => "Nijika", 
    "nrp" => "7264372",
    "email" => "nijika@gmail.com",
    "jurusan" => "Informatika",
    "gambar" => "Nijika.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs) : ?>
    <li>
        <a href="latihan2.php?nama=
                <?= $mhs["nama"]; ?>
                &nrp=<?= $mhs["nrp"]; ?>
                &email=<?= $mhs["email"]; ?>
                &jurusan=<?= $mhs["jurusan"]; ?>
                &gambar=<?= $mhs["gambar"]; ?>"
        ><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>
</body>
</html>