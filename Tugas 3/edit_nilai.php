<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Nilai</title>
  <style>
    body { font-family: "Segoe UI"; background-color: #f7f9fb; margin: 40px; color: #333; }
    h3 { text-align: center; color: #0066cc; }
    form { width: 400px; margin: 30px auto; background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
    label { display: block; margin-bottom: 5px; font-weight: bold; }
    input, select { width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px; }
    .btn { background-color: #0066cc; color: white; padding: 8px 15px; border: none; border-radius: 5px; cursor: pointer; }
    .btn:hover { background-color: #004999; }
    p#pesan { color: red; text-align: center; font-weight: bold; }
    .back { text-align:center; margin-top:10px; }
  </style>
</head>
<body>

<?php
$id = $_GET['id'];    // id nilai
$mhs_id = $_GET['mhs']; // id mahasiswa untuk kembali ke nilai.php
$q = $conn->query("SELECT * FROM nilai WHERE id=$id");
$data = $q->fetch_assoc();
?>

<h3>✏️ Edit Nilai Mahasiswa</h3>

<form method="post" onsubmit="return validasi()">
  <label>Mata Kuliah</label>
  <input type="text" id="mk" name="mata_kuliah" value="<?= $data['mata_kuliah']; ?>">

  <label>SKS</label>
  <input type="number" id="sks" name="sks" value="<?= $data['sks']; ?>">

  <label>Nilai Huruf</label>
  <select id="huruf" name="nilai_huruf">
    <option value="">-- Pilih --</option>
    <option value="A" <?= $data['nilai_huruf']=='A'?'selected':''; ?>>A</option>
    <option value="B" <?= $data['nilai_huruf']=='B'?'selected':''; ?>>B</option>
    <option value="C" <?= $data['nilai_huruf']=='C'?'selected':''; ?>>C</option>
    <option value="D" <?= $data['nilai_huruf']=='D'?'selected':''; ?>>D</option>
    <option value="E" <?= $data['nilai_huruf']=='E'?'selected':''; ?>>E</option>
  </select>

  <input type="submit" name="update" value="Update" class="btn">
</form>

<p id="pesan"></p>
<div class="back"><a href="nilai.php?id=<?= $mhs_id ?>">⬅️ Kembali ke Daftar Nilai</a></div>

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
if (isset($_POST['update'])) {
    $mk = $_POST['mata_kuliah'];
    $sks = $_POST['sks'];
    $huruf = $_POST['nilai_huruf'];

    $konversi = ['A'=>4.00, 'B'=>3.00, 'C'=>2.00, 'D'=>1.00, 'E'=>0.00];
    $angka = $konversi[$huruf];

    $sql = "UPDATE nilai 
            SET mata_kuliah='$mk', sks='$sks', nilai_huruf='$huruf', nilai_angka='$angka'
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green; text-align:center;'>✅ Nilai berhasil diperbarui!</p>";
    } else {
        echo "<p style='color:red; text-align:center;'>❌ Error: " . $conn->error . "</p>";
    }
}
?>
</body>
</html>
