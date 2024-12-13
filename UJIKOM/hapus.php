<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "bimbel";

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$connection) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

if (isset($_GET['id_pengunjung'])) {
    $id_pengunjung = $_GET['id_pengunjung'];
    
    $query = "DELETE FROM pengunjung WHERE id_pengunjung = $id_pengunjung";
    if (mysqli_query($connection, $query)) {
        header("Location: dashboardAdmin.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>
