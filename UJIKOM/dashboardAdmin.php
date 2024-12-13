<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f3;
            color: #1F2937;
        }
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 40px;
            background: linear-gradient(to bottom, #3B82F6, #60A5FA);
            color: #FFFFFF;
            font-size: 17px;
            font-weight: bold;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .navbar img {
            height: 50px;
            width: auto;
            margin-right: 10px;
        }
        .navbar p {
            margin: 0;
            font-size: 20px;
        }
        .navbar a {
            color: #FFFFFF;
            text-decoration: none;
            padding: 5px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .navbar a:hover {
            background-color: #2563EB;
        }
        .sidebar {
            background-color: #1F2A44;
            width: 250px;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            color: #FFFFFF;
        }
        .sidebar a {
            color: #FFFFFF;
            text-decoration: none;
            font-size: 16px;
            margin: 15px 0;
            padding: 10px 15px;
            width: 100%;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .sidebar a:hover {
            background-color: #2563EB;
            transform: translateX(12px);
        }
        .sidebar a:active {
            background-color: #1E40AF;
        }
        .content {
            margin-left: 270px;
            padding: 20px;
            text-align: center; 
        }
        .content h1 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #3B82F6;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%; 
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: left;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #3B82F6;
            color: white;
            text-align: center;
        }
        button {
            padding: 8px 15px;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
            border: none;
            border-radius: 5px; 
            align-items: center; 
            justify-content: center;
            cursor: pointer;
            display: inline-block;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        button[name="submit"] {
            margin: 10px;
            background-color: #3B82F6; 
            color: #ffffff;
            margin-bottom: 10px;
            display: flex;
            gap: 8px;
        }
        button[name="del"] {
            background-color: #F44336;
            color: #ffffff;
            display: flex;
            gap: 8px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <img src="logo tanpa font.png" alt="Logo Tidak Ditemukan">
        <p>Bimbel Success</p>
    </div>

    <div class="sidebar">
        <a href="dashboardAdmin.php">Data Pendaftar</a>
        <a href="admin.php">Data Admin</a>
        <a href="login_admin.php">Keluar</a>
    </div>

    <div class="content">
        <h1>Data Formulir Yang Masuk</h1>

        <?php
        
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "bimbel";

        $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

        if (!$connection) {
            die("Koneksi database gagal: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM pengunjung";
        $result = mysqli_query($connection, $query);

        echo "<table>";
        echo "<tr>
                <th>ID Pengunjung</th>
                <th>Nama Siswa</th>
                <th>Jenis Kelamin</th>
                <th>Asal Sekolah</th>
                <th>Kelas</th>
                <th>Nama Orang Tua</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
                <th>Kursus</th>
                <th>Aksi</th>
              </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id_pengunjung'] . "</td>";
            echo "<td>" . $row['nama_siswa'] . "</td>";
            echo "<td>" . $row['jk'] . "</td>";
            echo "<td>" . $row['asal_sekolah'] . "</td>";
            echo "<td>" . $row['kelas'] . "</td>";
            echo "<td>" . $row['nama_orang_tua'] . "</td>";
            echo "<td>" . $row['no_telp'] . "</td>";
            echo "<td>" . $row['alamat'] . "</td>";
            echo "<td>" . $row['kursus'] . "</td>";
            echo "<td>
                    <a href='update.php?id_pengunjung=" . $row['id_pengunjung'] . "'>
                        <button type='button' name='submit'>Edit</button>
                    </a>
                    <a href='hapus.php?id_pengunjung=" . $row['id_pengunjung'] . "'>
                        <button type='button' name='del'>Delete</button>
                    </a>
                  </td>";
            echo "</tr>";
        }
        
        echo "</table>";

        mysqli_close($connection);
        ?>
    </div>
</body>
</html>
