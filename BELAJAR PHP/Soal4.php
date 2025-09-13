<!DOCTYPE html>
<html>
<head>
    <title>Penentu Nilai Huruf</title>
</head>
<body>
    <h2>Penentu Nilai Huruf</h2>
    <form method="post" action="">
        Masukkan Nilai (0-100): <input type="number" name="nilai" min="0" max="100" required>
        <input type="submit" value="Cek">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST['nilai'];
        $grade = "";

        if ($nilai >= 85) {
            $grade = "A";
        } elseif ($nilai >= 70) {
            $grade = "B";
        } elseif ($nilai >= 55) {
            $grade = "C";
        } elseif ($nilai >= 40) {
            $grade = "D";
        } else {
            $grade = "E";
        }

        echo "<h3>Nilai Anda: $nilai <br> Grade: $grade</h3>";
    }
    ?>
</body>
</html>
