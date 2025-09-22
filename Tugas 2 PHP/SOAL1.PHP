<!DOCTYPE html>
<html>
<head>
    <title>Daftar Barang</title>
</head>
<body>
    <?php
    // Membuat array barang
    $barang = ["Buku Tulis", "Pulpen", "Penggaris", "Penghapus", "Pensil"];

    echo "<h3>Daftar Barang:</h3>";
    echo "<ul>";
    foreach ($barang as $b) {
        echo "<li>$b</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
