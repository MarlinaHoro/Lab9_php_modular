<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "latihan1";
$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false) {
    echo "Koneksi ke server gagal.";
    die();
} #else echo "Koneksi berhasil";


function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM data_barang WHERE id_barang = $id");
    return mysqli_affected_rows($conn);
}
