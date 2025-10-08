<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Nilai Mahasiswa</title>
  <style>
    body { font-family: "Segoe UI"; background-color: #f7f9fb; margin: 40px; color: #333; }
    h3 { text-align: center; color: #0066cc; }
    table { width: 80%; margin: 20px auto; border-collapse: collapse; background-color: white; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
    th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
    th { background-color: #0066cc; color: white; }
    a { text-decoration: none; color: #0066cc; }
    .btn { background-color: #0066cc; color: white; padding: 6px 12px; border-radius: 4px; }
    .btn:hover { background-color: #004999; }
  </style>
</head>
<body>

<?php
$id = $_GET['id']; // id mahasiswa
$mhs = $conn->query("SELECT * FROM mahasiswa WHERE id=$id")->fetch_assoc();
?>

<h3>📘 Nilai Mahasiswa: <?= $mhs['nama']; ?> (<?= $mhs['nim']; ?>)</h3>
<div style="text-align:center;">
  <a href="tambah_nilai.php?id=<?= $id ?>" class="btn">➕ Tambah Nilai</a> |
  <a href="index.php">⬅️ Kembali ke Daftar Mahasiswa</a>
</div>

<table>
  <tr>
    <th>ID</th>
    <th>Mata Kuliah</th>
    <th>SKS</th>
    <th>Nilai Huruf</th>
    <th>Nilai Angka</th>
    <th>Aksi</th>
  </tr>

<?php
$q = $conn->query("SELECT * FROM nilai WHERE mahasiswa_id=$id");
if ($q->num_rows > 0) {
  while ($n = $q->fetch_assoc()) {
    echo "<tr>
            <td>{$n['id']}</td>
            <td>{$n['mata_kuliah']}</td>
            <td>{$n['sks']}</td>
            <td>{$n['nilai_huruf']}</td>
            <td>{$n['nilai_angka']}</td>
            <td>
              <a href='edit_nilai.php?id={$n['id']}&mhs={$id}'>✏️ Edit</a> |
              <a href='hapus_nilai.php?id={$n['id']}&mhs={$id}' onclick=\"return confirm('Hapus nilai ini?')\">🗑️ Hapus</a>
            </td>
          </tr>";
  }
} else {
  echo "<tr><td colspan='6'>Belum ada nilai.</td></tr>";
}
?>
</table>

</body>
</html>
