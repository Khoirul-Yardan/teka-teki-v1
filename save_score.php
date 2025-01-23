<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teka_teki";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = intval($_POST['score']);

    $sql = "INSERT INTO scores (score) VALUES ($score)";
    if ($conn->query($sql) === TRUE) {
        echo "Skor berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
