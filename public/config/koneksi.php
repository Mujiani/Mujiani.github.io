<?php
try {
    // PDO
    // mysqli_*
    $con = new PDO('mysql:host=localhost;dbname=db_ti3d', 'root', '');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Koneksi Gagal : " . $e->getMessage() . "<br>";
    die();
}
