<!DOCTYPE html>
<html>
<head>
    <title>Menu Makanan</title>
</head>
<body>
    <h2>Pilih Menu Makanan</h2>
    <form method="post" action="">
        <label for="menu">Pilih Makanan:</label>
        <select name="menu" id="menu" required>
            <option value="pizza">Pizza</option>
            <option value="burger">Burger</option>
            <option value="spaghetti">Spaghetti</option>
            <option value="salad">Salad</option>
            <option value="steak">Steak</option>
        </select>
        <br><br>
        <input type="submit" value="Lihat Harga">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $menu = $_POST['menu'];

        switch ($menu) {
            case "pizza":
                echo "<h3>Pizza - Rp " . number_format(50000, 0, ',', '.') . "</h3>";
                break;
            case "burger":
                echo "<h3>Burger - Rp " . number_format(30000, 0, ',', '.') . "</h3>";
                break;
            case "spaghetti":
                echo "<h3>Spaghetti - Rp " . number_format(40000, 0, ',', '.') . "</h3>";
                break;
            case "salad":
                echo "<h3>Salad - Rp " . number_format(25000, 0, ',', '.') . "</h3>";
                break;
            case "steak":
                echo "<h3>Steak - Rp " . number_format(75000, 0, ',', '.') . "</h3>";
                break;
            default:
                echo "<h3>Menu tidak tersedia</h3>";
        }
    }
    ?>
</body>
</html>
