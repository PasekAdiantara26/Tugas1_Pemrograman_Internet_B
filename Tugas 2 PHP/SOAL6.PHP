<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa + Nilai</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
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
    <h2>Data Mahasiswa dengan Nilai</h2>
    <?php
    // Array multidimensi: Nim, Nama, Umur, Prodi, Nilai
    $mahasiswa = [
        ["nim" => "2305551001", "nama" => "Made Adi Pratama", "umur" => 20, "prodi" => "Teknologi Informasi", "nilai" => 85],
        ["nim" => "2305551002", "nama" => "Kadek Ayu Lestari", "umur" => 19, "prodi" => "Sistem Informasi", "nilai" => 72],
        ["nim" => "2305551003", "nama" => "I Gede Surya Putra", "umur" => 21, "prodi" => "Teknik Informatika", "nilai" => 65],
        ["nim" => "2305551004", "nama" => "Ni Luh Wulan Sari", "umur" => 20, "prodi" => "Teknologi Informasi", "nilai" => 55],
        ["nim" => "2305551005", "nama" => "Putu Lestari Dewi", "umur" => 19, "prodi" => "Sistem Informasi", "nilai" => 40],
        ["nim" => "2405551001", "nama" => "Komang Wira Mahendra", "umur" => 18, "prodi" => "Teknologi Informasi", "nilai" => 90],
        ["nim" => "2405551002", "nama" => "Ni Komang Dewi Cahyani", "umur" => 19, "prodi" => "Teknik Informatika", "nilai" => 77],
        ["nim" => "2405551003", "nama" => "I Gusti Agung Pradnya", "umur" => 18, "prodi" => "Sistem Informasi", "nilai" => 68],
        ["nim" => "2405551004", "nama" => "Kadek Surya Antara", "umur" => 20, "prodi" => "Teknologi Informasi", "nilai" => 35],
        ["nim" => "2405551005", "nama" => "Made Putri Maharani", "umur" => 19, "prodi" => "Teknik Informatika", "nilai" => 50]
    ];

    echo "<table>";
    echo "<tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Program Studi</th>
            <th>Nilai</th>
            <th>Keterangan</th>
          </tr>";

    $no = 1;
    foreach ($mahasiswa as $mhs) {
        // Tentukan lulus/tidak
        $keterangan = ($mhs['nilai'] >= 70) ? "Lulus" : "Tidak Lulus";

        echo "<tr>";
        echo "<td>$no</td>";
        echo "<td>{$mhs['nim']}</td>";
        echo "<td>{$mhs['nama']}</td>";
        echo "<td>{$mhs['umur']}</td>";
        echo "<td>{$mhs['prodi']}</td>";
        echo "<td>{$mhs['nilai']}</td>";
        echo "<td>$keterangan</td>";
        echo "</tr>";
        $no++;
    }

    echo "</table>";
    ?>
</body>
</html>
