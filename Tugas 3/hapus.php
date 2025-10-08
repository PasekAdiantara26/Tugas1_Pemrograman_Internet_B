<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

   
    $sql = "DELETE FROM mahasiswa WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='text-align:center; color:green; font-family:Segoe UI;'>✅ Data berhasil dihapus.</p>";
        echo "<div style='text-align:center;'><a href='index.php'>← Kembali ke Daftar Mahasiswa</a></div>";
    } else {
        echo "<p style='text-align:center; color:red; font-family:Segoe UI;'>❌ Gagal menghapus data: " . $conn->error . "</p>";
    }
} else {
    echo "<p style='text-align:center; color:red; font-family:Segoe UI;'>ID tidak ditemukan!</p>";
    echo "<div style='text-align:center;'><a href='index.php'>← Kembali ke Daftar Mahasiswa</a></div>";
}
?>
