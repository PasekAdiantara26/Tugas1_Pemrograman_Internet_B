<!DOCTYPE html>
<html>
<head>
    <title>Daftar Harga Barang</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
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
    <?php
    // Array associative: Barang => Harga
    $barang = [
        "Buku Tulis" => 5000,
        "Pulpen" => 3000,
        "Penggaris" => 4000,
        "Penghapus" => 2000,
        "Tas Sekolah" => 150000
    ];

    echo "<h3>Daftar Harga Barang:</h3>";
    echo "<table>";
    echo "<tr><th>Nama Barang</th><th>Harga (Rp)</th></tr>";

    foreach ($barang as $nama => $harga) {
        echo "<tr>";
        echo "<td>$nama</td>";
        echo "<td>" . number_format($harga, 0, ',', '.') . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>
