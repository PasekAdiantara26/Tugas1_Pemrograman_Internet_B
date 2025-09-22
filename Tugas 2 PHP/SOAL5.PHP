<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Data Mahasiswa Angkatan 2023 & 2024</h2>
    <?php
    // Array multidimensi: Nim, Nama, Umur, Prodi
    $mahasiswa = [
        ["nim" => "2305551001", "nama" => "Made Adi Pratama", "umur" => 20, "prodi" => "Teknologi Informasi"],
        ["nim" => "2305551002", "nama" => "Kadek Ayu Lestari", "umur" => 19, "prodi" => "Sistem Informasi"],
        ["nim" => "2305551003", "nama" => "I Gede Surya Putra", "umur" => 21, "prodi" => "Teknik Informatika"],
        ["nim" => "2305551004", "nama" => "Ni Luh Wulan Sari", "umur" => 20, "prodi" => "Teknologi Informasi"],
        ["nim" => "2305551005", "nama" => "Putu Lestari Dewi", "umur" => 19, "prodi" => "Sistem Informasi"],
        ["nim" => "2405551001", "nama" => "Komang Wira Mahendra", "umur" => 18, "prodi" => "Teknologi Informasi"],
        ["nim" => "2405551002", "nama" => "Ni Komang Dewi Cahyani", "umur" => 19, "prodi" => "Teknik Informatika"],
        ["nim" => "2405551003", "nama" => "I Gusti Agung Pradnya", "umur" => 18, "prodi" => "Sistem Informasi"],
        ["nim" => "2405551004", "nama" => "Kadek Surya Antara", "umur" => 20, "prodi" => "Teknologi Informasi"],
        ["nim" => "2405551005", "nama" => "Made Putri Maharani", "umur" => 19, "prodi" => "Teknik Informatika"]
    ];

    echo "<table>";
    echo "<tr><th>No</th><th>NIM</th><th>Nama</th><th>Umur</th><th>Program Studi</th></tr>";

    $no = 1;
    foreach ($mahasiswa as $mhs) {
        echo "<tr>";
        echo "<td>$no</td>";
        echo "<td>{$mhs['nim']}</td>";
        echo "<td>{$mhs['nama']}</td>";
        echo "<td>{$mhs['umur']}</td>";
        echo "<td>{$mhs['prodi']}</td>";
        echo "</tr>";
        $no++;
    }

    echo "</table>";
    ?>
</body>
</html>
