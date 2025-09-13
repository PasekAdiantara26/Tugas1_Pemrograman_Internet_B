<!DOCTYPE html>
<html>
<head>
    <title>Form Ucapan</title>
</head>
<body>
    <h2>Form Ucapan</h2>
    <form method="post" action="">
        Masukkan Nama: <input type="text" name="nama" required>
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST['nama']);
        echo "<h3>Halo, $nama selamat belajar PHP!</h3>";
    }
    ?>
</body>
</html>
