<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Nilai</title>
  <style>
    body { font-family: "Segoe UI"; background-color: #f7f9fb; margin: 40px; color: #333; }
    form { width: 400px; margin: 30px auto; background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
    label { display: block; margin-bottom: 5px; font-weight: bold; }
    input, select { width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px; }
    .btn { background-color: #0066cc; color: white; padding: 8px 15px; border: none; border-radius: 5px; cursor: pointer; }
    .btn:hover { background-color: #004999; }
    p#pesan { color: red; text-align: center; font-weight: bold; }
  </style>
</head>
<body>

<?php
$mhs_id = $_GET['id'];
?>

<h3 style="text-align:center;">➕ Tambah Nilai Mahasiswa</h3>

<form method="post" onsubmit="return validasi()">
  <label>Mata Kuliah</label>
  <input type="text" id="mk" name="mata_kuliah">

  <label>SKS</label>
  <input type="number" id="sks" name="sks">

  <label>Nilai Huruf</label>
  <select id="huruf" name="nilai_huruf">
    <option value="">-- Pilih --</option>
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
    <option value="E">E</option>
  </select>

  <input type="submit" name="simpan" value="Simpan" class="btn">
</form>

<p id="pesan"></p>
<div style="text-align:center;"><a href="nilai.php?id=<?= $mhs_id ?>">⬅️ Kembali</a></div>

<script>
function validasi() {
  let mk = document.querySelector("#mk").value.trim();
  let sks = document.querySelector("#sks").value.trim();
  let huruf = document.querySelector("#huruf").value.trim();
  let pesan = document.querySelector("#pesan");

  if (mk === "" || sks === "" || huruf === "") {
    pesan.innerHTML = "⚠️ Semua kolom wajib diisi!";
    return false;
  }
  return true;
}
</script>

<?php
if (isset($_POST['simpan'])) {
    $mk = $_POST['mata_kuliah'];
    $sks = $_POST['sks'];
    $huruf = $_POST['nilai_huruf'];

    // konversi huruf ke angka
    $konversi = ['A'=>4.00, 'B'=>3.00, 'C'=>2.00, 'D'=>1.00, 'E'=>0.00];
    $angka = $konversi[$huruf];

    $sql = "INSERT INTO nilai (mahasiswa_id, mata_kuliah, sks, nilai_huruf, nilai_angka)
            VALUES ('$mhs_id', '$mk', '$sks', '$huruf', '$angka')";
    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green; text-align:center;'>✅ Nilai berhasil ditambahkan!</p>";
    } else {
        echo "<p style='color:red; text-align:center;'>❌ Gagal: " . $conn->error . "</p>";
    }
}
?>
</body>
</html>
