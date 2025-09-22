<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <?php
    // Array associative: NIM => Nama
    $mahasiswa = [
        "2305551001" => "Made Adi Pratama",
        "2305551002" => "Kadek Ayu Lestari",
        "2305551003" => "I Gede Surya Putra",
        "2405551001" => "Putu Wira Mahendra",
        "2405551002" => "Ni Komang Dewi Cahyani"
    ];

    echo "<h3>Daftar Mahasiswa Angkatan 2023 & 2024:</h3>";
    echo "<ul>";
    foreach ($mahasiswa as $nim => $nama) {
        echo "<li>NIM: $nim - Nama: $nama</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
