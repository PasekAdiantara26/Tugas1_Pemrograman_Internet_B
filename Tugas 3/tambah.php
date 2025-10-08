<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Mahasiswa</title>
  <style>
    body {
      font-family: "Segoe UI", sans-serif;
      background-color: #f7f9fb;
      margin: 40px;
      color: #333;
    }
    h3 {
      text-align: center;
      color: #0066cc;
    }
    form {
      width: 400px;
      margin: 30px auto;
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    input[type="text"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .btn {
      background-color: #0066cc;
      color: white;
      border: none;
      padding: 8px 15px;
      border-radius: 5px;
      cursor: pointer;
    }
    .btn:hover {
      background-color: #004999;
    }
    p#pesan {
      color: red;
      text-align: center;
      font-weight: bold;
    }
    .back {
      display: block;
      text-align: center;
      margin-top: 15px;
    }
  </style>
</head>
<body>

  <h3>➕ Tambah Mahasiswa</h3>

  <form method="post" onsubmit="return validasi()">
    <label for="nim">NIM:</label>
    <input type="text" id="nim" name="nim">

    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">

    <label for="prodi">Prodi:</label>
    <input type="text" id="prodi" name="prodi">

    <input type="submit" name="simpan" value="Simpan" class="btn">
  </form>

  <p id="pesan"></p>
  <div class="back"><a href="index.php">← Kembali ke Daftar</a></div>

  <script>
  function validasi() {
    let nim = document.querySelector("#nim").value.trim();
    let nama = document.querySelector("#nama").value.trim();
    let prodi = document.querySelector("#prodi").value.trim();
    let pesan = document.querySelector("#pesan");

    if (nim.length < 5) {
      pesan.innerHTML = "⚠️ NIM minimal 5 karakter!";
      return false;
    }
    if (nama === "" || prodi === "") {
      pesan.innerHTML = "⚠️ Nama dan Prodi tidak boleh kosong!";
      return false;
    }
    return true;
  }
  </script>

  <?php
  if (isset($_POST['simpan'])) {
      $nim   = $_POST['nim'];
      $nama  = $_POST['nama'];
      $prodi = $_POST['prodi'];

      $sql = "INSERT INTO mahasiswa (nim, nama, prodi) VALUES ('$nim', '$nama', '$prodi')";
      if ($conn->query($sql) === TRUE) {
          echo "<p style='color:green; text-align:center;'>✅ Data berhasil disimpan!</p>";
          echo "<div style='text-align:center;'><a href='index.php'>Kembali ke Daftar</a></div>";
      } else {
          echo "<p style='color:red; text-align:center;'>❌ Error: " . $conn->error . "</p>";
      }
  }
  ?>
</body>
</html>
