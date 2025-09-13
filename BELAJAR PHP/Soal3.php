<!DOCTYPE html>
<html>
<head>
    <title>Cek Ganjil atau Genap</title>
</head>
<body>
    <h2>Cek Bilangan Ganjil atau Genap</h2>
    <form method="post" action="">
        Masukkan Angka: <input type="number" name="angka" required>
        <input type="submit" value="Cek">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka = $_POST['angka'];

        if ($angka % 2 == 0) {
            echo "<h3>Angka $angka adalah Bilangan Genap</h3>";
        } else {
            echo "<h3>Angka $angka adalah Bilangan Ganjil</h3>";
        }
    }
    ?>
</body>
</html>
