<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Mahasiswa</title>
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
    a {
      text-decoration: none;
      color: #0066cc;
    }
    a:hover {
      text-decoration: underline;
    }
    .btn {
      background-color: #0066cc;
      color: white;
      padding: 6px 12px;
      border-radius: 4px;
      text-decoration: none;
      font-size: 14px;
    }
    .btn:hover {
      background-color: #004999;
    }
    table {
      width: 85%;
      margin: 20px auto;
      border-collapse: collapse;
      background-color: white;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    th, td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: center;
    }
    th {
      background-color: #0066cc;
      color: white;
    }
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    .action-links a {
      margin: 0 5px;
      color: #0066cc;
      padding: 4px 8px;
      border-radius: 4px;
    }
    .nilai-btn {
      background-color: #007bff;
      color: white !important;
    }
    .edit-btn {
      background-color: #28a745;
      color: white !important;
    }
    .hapus-btn {
      background-color: #dc3545;
      color: white !important;
    }
    .action-links a:hover {
      opacity: 0.8;
    }
    .top-bar {
      text-align: center;
      margin-bottom: 15px;
    }
    #keyword {
      width: 300px;
      padding: 8px;
      display: block;
      margin: 0 auto 20px auto;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
  </style>
</head>
<body>

  <h3>📋 Daftar Mahasiswa</h3>
  
  <div class="top-bar">
    <a href="tambah.php" class="btn">➕ Tambah Mahasiswa</a>
  </div>

  <input type="text" id="keyword" placeholder="🔍 Cari mahasiswa (nama/NIM)...">

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody id="hasil">
      <!-- hasil data atau pencarian akan dimuat lewat JS -->
    </tbody>
  </table>

  <script>
  // Fungsi untuk menampilkan data mahasiswa
  function tampilData(keyword = "") {
    fetch("cari.php?keyword=" + keyword)
      .then(response => response.json())
      .then(data => {
        let isi = "";
        if (data.length > 0) {
          data.forEach(m => {
            isi += `<tr>
                      <td>${m.id}</td>
                      <td>${m.nim}</td>
                      <td>${m.nama}</td>
                      <td>${m.prodi}</td>
                      <td class='action-links'>
                        <a href='nilai.php?id=${m.id}' class='nilai-btn'>📘 Nilai</a>
                        <a href='edit.php?id=${m.id}' class='edit-btn'>✏️ Edit</a>
                        <a href='hapus.php?id=${m.id}' class='hapus-btn' onclick="return confirm('Yakin ingin menghapus data ini?')">🗑️ Hapus</a>
                      </td>
                    </tr>`;
          });
        } else {
          isi = `<tr><td colspan='5'>Data tidak ditemukan.</td></tr>`;
        }
        document.querySelector("#hasil").innerHTML = isi;
      })
      .catch(err => {
        document.querySelector("#hasil").innerHTML = `<tr><td colspan='5'>⚠️ Gagal memuat data!</td></tr>`;
        console.error(err);
      });
  }

  // Tampilkan semua data saat pertama kali halaman dibuka
  tampilData();

  // Jalankan pencarian realtime
  document.querySelector("#keyword").oninput = function() {
    tampilData(this.value);
  };
  </script>

</body>
</html>
