<?php
session_start();
$host="localhost";
$username="root";
$password="";
$database="data_mahasiswa";
$koneksi = mysqli_connect($host, $username, $password, $database);
if (!$koneksi) {
die("Koneksi gagal: " . mysqli_connect_error());
}
if (isset($_POST['tambah'])) {
    $sql="INSERT INTO data_mahasiswa VALUES ('" . $_POST['nim'] . "','" . $_POST['nama'] . "','" . $_POST['jurusan'] . "','" . $_POST['alamat'] . "')";
    $eksekusi=$koneksi->query($sql);
    if ($eksekusi) {
        header("Location: index.php");
    }
}
if (isset($_POST['update'])) {
    $sql="UPDATE data_mahasiswa SET nim='" . $_POST['nim'] . "', nama='" . $_POST['nama'] . "',jurusan='" . $_POST['jurusan'] . "',alamat='" . $_POST['alamat'] . "' WHERE nim='" . $_POST['nim'] . "'";
    $eksekusi=$koneksi->query($sql);
    if ($eksekusi) {
        header("Location: index.php");
    }
}
if (isset($_POST['delete'])) {
    $sql="DELETE FROM data_mahasiswa WHERE nim='" . $_SESSION['nim'] . "'";
    $eksekusi=$koneksi->query($sql);
    if ($eksekusi) {
        header("Location: index.php");
    }
    echo "<script>alert('data berhasil dihapus.');window.location='index.php';</script>";
}
?>
