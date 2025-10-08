<?php
include "koneksi.php";

$keyword = $_GET['keyword'] ?? '';

$result = $conn->query("SELECT * FROM mahasiswa 
                        WHERE nama LIKE '%$keyword%' 
                        OR nim LIKE '%$keyword%' 
                        ORDER BY id DESC");

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
?>
