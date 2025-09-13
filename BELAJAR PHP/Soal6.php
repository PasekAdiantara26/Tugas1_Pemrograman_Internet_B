<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata Singkat</title>
</head>
<body>
    <h2>Form Biodata Singkat</h2>
    <form method="post" action="">
        Nama: <input type="text" name="nama" required><br><br>
        Umur: <input type="number" name="umur" required><br><br>
        Jenis Kelamin: 
        <input type="radio" name="jk" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jk" value="Perempuan" required> Perempuan
        <br><br>
        Alamat: <br>
        <textarea name="alamat" rows="3" cols="30" required></textarea>
        <br><br>
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST['nama']);
        $umur = $_POST['umur'];
        $jk = $_POST['jk'];
        $alamat = htmlspecialchars($_POST['alamat']);

        echo "<h3>Hasil Biodata:</h3>";
        echo "Halo, nama saya <b>$nama</b>. Umur saya $umur tahun.<br>";
        echo "Saya seorang <b>$jk</b>.<br>";
        echo "Saya tinggal di <b>$alamat</b>.";
    }
    ?>
</body>
</html>
