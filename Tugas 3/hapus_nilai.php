<?php
include "koneksi.php";

$id = $_GET['id'];     // id nilai
$mhs_id = $_GET['mhs']; // id mahasiswa untuk redirect balik

$sql = "DELETE FROM nilai WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "<p style='color:green; text-align:center; font-family:Segoe UI;'>✅ Nilai berhasil dihapus.</p>";
    echo "<div style='text-align:center;'><a href='nilai.php?id=$mhs_id'>← Kembali ke Daftar Nilai</a></div>";
} else {
    echo "<p style='color:red; text-align:center; font-family:Segoe UI;'>❌ Gagal menghapus: " . $conn->error . "</p>";
    echo "<div style='text-align:center;'><a href='nilai.php?id=$mhs_id'>← Kembali</a></div>";
}
?>
