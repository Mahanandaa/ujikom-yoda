<?php
if (isset($_GET['id_pengunjung'])) {
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "bimbel";

    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (!$connection) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    $id_pengunjung = $_GET['id_pengunjung'];
    $query = "SELECT * FROM pengunjung WHERE id_pengunjung = '$id_pengunjung'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama_siswa = $_POST['nama_siswa'];
        $jk = $_POST['jk'];
        $asal_sekolah = $_POST['asal_sekolah'];
        $kelas = $_POST['kelas'];
        $nama_orang_tua = $_POST['nama_orang_tua'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];
        $kursus = $_POST['kursus'];

        $update_query = "UPDATE pengunjung SET 
            nama_siswa = '$nama_siswa',
            jk = '$jk',
            asal_sekolah = '$asal_sekolah',
            kelas = '$kelas',
            nama_orang_tua = '$nama_orang_tua',
            no_telp = '$no_telp',
            alamat = '$alamat',
            kursus = '$kursus'
            WHERE id_pengunjung = '$id_pengunjung'";

        if (mysqli_query($connection, $update_query)) {
            echo "<script>alert('Data Berhasil Di Update!!'); window.location.href = 'dashboardAdmin.php';</script>";
        } else {
            echo "Error updating data: " . mysqli_error($connection);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-top: 30px;
            color: #3B82F6;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .form-container label {
            display: block;
            font-size: 16px;
            margin-bottom: 8px;
            color: #333;
        }
        .form-container input, .form-container textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }
        .form-container textarea {
            height: 100px;
        }
        .form-container button {
            width: 100%;
            padding: 12px;
            background-color: #3B82F6;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .form-container button:hover {
            background-color: #2563EB;
        }
        .form-container button:active {
            background-color: #1D4ED8;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Edit Data Pengunjung</h1>
        <form method="POST" action="update.php?id_pengunjung=<?php echo $id_pengunjung; ?>">
            <label for="nama_siswa">Nama Siswa:</label>
            <input type="text" id="nama_siswa" name="nama_siswa" value="<?php echo $row['nama_siswa']; ?>" required><br>

            <label for="jk">Jenis Kelamin:</label>
            <input type="text" id="jk" name="jk" value="<?php echo $row['jk']; ?>" required><br>

            <label for="asal_sekolah">Asal Sekolah:</label>
            <input type="text" id="asal_sekolah" name="asal_sekolah" value="<?php echo $row['asal_sekolah']; ?>" required><br>

            <label for="kelas">Kelas:</label>
            <input type="text" id="kelas" name="kelas" value="<?php echo $row['kelas']; ?>" required><br>

            <label for="nama_orang_tua">Nama Orang Tua:</label>
            <input type="text" id="nama_orang_tua" name="nama_orang_tua" value="<?php echo $row['nama_orang_tua']; ?>" required><br>

            <label for="no_telp">No. Telepon:</label>
            <input type="text" id="no_telp" name="no_telp" value="<?php echo $row['no_telp']; ?>" required><br>

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" required><?php echo $row['alamat']; ?></textarea><br>

            <label for="kursus">Kursus:</label>
            <input type="text" id="kursus" name="kursus" value="<?php echo $row['kursus']; ?>" required><br>

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>

<?php
mysqli_close($connection);
?>
