<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biaya Kursus</title>
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
    padding: 10px 40px;
    background: linear-gradient(to bottom, #3B82F6, #93C5FD);
    color: #FFFFFF;
    font-size: 17px;
    font-weight: bold;
}

.navbar .logo img {
    height: 60px;
    width: auto;
}

.navbar .menu {
    display: flex;
    align-items: center;
}

.navbar a {
    color: #FFFFFF;
    text-decoration: none;
    margin-left: 30px;
    font-weight: 500;
    transition: 0.9s;
    padding: 5px 10px;
    border-radius: 5px;
}

.navbar a:hover {
    background-color: #2563EB;
    color: #FFFFFF;
}

.quote {
    width: 100%;
    background: linear-gradient(to bottom, #93C5FD, #E0F2FE);
    color: #1E3A8A;
    padding: 40px 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    height: 70vh;
    box-sizing: border-box;
    min-height: 50vh;
}

.text {
    font-family: 'Playfair Display', serif;
    font-size: 42px;
    font-style: italic;
    overflow: hidden;
    white-space: nowrap;
    width: 100%;
    animation: typing 2.9s steps(46, end) forwards, cursor 0.7s step-end infinite;
    margin: 0;
}

@keyframes typing {
    from { width: 0; }
    to { width: 100%; }
}

@keyframes cursor {
    50% { border-color: transparent; }
}

.quote span {
    display: block;
    margin-top: 20px;
    font-size: 18px;
    max-width: 1100px;
    font-weight: bold;
    color: #3B82F6;
}

.fml{
    background-color: #fbfdffc9;
    flex-direction: column;
   padding-bottom: 200px;
    justify-content: center;
    align-items: center;
}
.fml h3{
    color: #3B82F6;
    padding-top: 64px;
    text-align: center;
    font-size: 35px;
}
.fml p{
    max-width: 900px;
    margin-left: 490px;
    text-align: center;
    padding-bottom: 70px;
}
    form {
        padding-bottom: 900px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: 20px auto;
        padding: 20px;
        max-width: 500px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    form input[type="text"]
    {
        width: 100%;
        margin: 10px 0;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #d1d5db;
        border-radius: 5px;
        box-sizing: border-box;
        outline: none;
        transition: border-color 0.3s, box-shadow 0.3s;
    }
    form input[type="submit"] {
    width: 100%;
    margin: 12px 0;
    padding: 12px;
    background-color: #3B82F6;
    font-size: 16px;
    border: 1px solid #d1d5db;
    color: #ffffff;
    border-radius: 8px;
    box-sizing: border-box;
    outline: none;
    transition: border-color 0.3s, box-shadow 0.3s;
}

    form input[type="text"]:focus {
        border-color: #3B82F6;
        box-shadow: 0 0 5px rgba(59, 130, 246, 0.5);
    }

    form input[type="sumbit"] {
        background-color: #3B82F6;
        color: white;
        font-weight: bold;
        cursor: pointer;
        border: none;
        transition: background-color 0.3s;
    }

    form input[type="sumbit"]:hover {
        background-color: #2563EB;
    }

    form h3 {
        margin-bottom: 20px;
        font-size: 24px;
        font-weight: bold;
        color: #1E3A8A;
    }

.fml h4{
color: #2563EB;
}
form select {
    width: 100%;
    margin: 10px 0;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #d1d5db;
    border-radius: 5px;
    background-color: white;
    color: #1F2937;
   
    outline: none;
    cursor: pointer;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    transition: border-color 0.3s, box-shadow 0.3s;
}

form select:focus {
    border-color: #3B82F6;
    box-shadow: 0 0 5px rgba(59, 130, 246, 0.5);
}

form select option {
    padding: 10px;
    font-size: 15px;
    color: #1F2937;
    background-color: #FFFFFF;
    border: none;
    text-align: left;
}

form select option:hover {
    background-color: #E5F3FF;
    color: #2563EB;
}
.total {
    color: #3B82F6;
    padding-top: 64px;
   
    font-size: 35px;
    background-color: #fbfdffc9;
   
    justify-content: center;
    align-items: center;
    
    padding: 30px 20px;
    box-sizing: border-box;
    border-radius: 10px;

    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}
.total p{
    max-width: 700px;
}

.total h3 {
    font-size: 32px;
    font-weight: 600;
    color: #1E3A8A;
    margin-bottom: 20px;
}

.total p {
    font-size: 18px;
    color: #333;
    line-height: 1.5;
    flex-wrap: wrap;
    text-align: center;
    max-width: 900px;
    margin-bottom: 30px;
}

.total p span {
    font-size: 20px;
    font-weight: 600;
    color: #2563EB;
    display: block;
    margin-top: 10px;
}
.footer {
    background: linear-gradient(180deg, #2672ff, #5673d1);
  color: #ffffff;
  padding: 40px 20px;
  text-align: center;
}

.footer-content {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: flex-start;
  gap: 20px;
  margin-bottom: 20px;
}

.footer-logo img {
    height: 130px;
    width: auto;
}

.footer-logo p {
  font-size: 18px;
  font-weight: bold;
  margin: 0;
}

.footer-info, .footer-contact, .footer-social {
  flex: 1 1 200px;
}

.footer-info h4, .footer-contact h4, .footer-social h4 {
  font-size: 20px;
  margin-bottom: 10px;
}

.footer-contact p, .footer-info p {
  margin: 0;
  font-size: 14px;
}

.footer-social .social-link {
  display: block;
  color: #E0F2FE;
  text-decoration: none;
  margin: 5px 0;
}

.footer-social .social-link:hover {
  text-decoration: underline;
}

.footer-bottom {
  font-size: 14px;
  margin-top: 20px;
  border-top: 1px solid #ffffff;
  padding-top: 10px;
}

footer .mail,
footer .w {
    margin: 10px 0;
}

footer .mail a,
footer .w a {
    display: inline-block;

    font-size: 16px;
}
.mail a, .w a{
  text-decoration: none;
  color: #ffffff;
}
.mail a:hover, .w a:hover{
  color: #ffffff;
  text-decoration: underline;
}
</style>
</head>
<body>
<div class="navbar">
        <div class="logo">
            <img src="logo tanpa font.png" alt="Logo Bimbel">
        </div>
        <div class="menu">
            <a href="dashboardPengunjung.html">Home</a>
            <a href="kursus.html">Kursus</a>
            <a href="sejarah_bimbel.html">Sejarah</a>
            <a href="Formulir.php">Formulir</a>
        </div>
    </div>

    <div class="quote">
        <p class="text">Bergabunglah Bersama Kami!</p>  
        <span>Mulailah perjalanan kariermu bersama kami dan berperan aktif dalam membangun generasi yang lebih cerdas. Raih kesempatan baru untuk berkontribusi bagi kemajuan bangsa.</span>
    </div>
    <div class="fml">
        <h3>Formulir Pendaftaran</h3>
        <p>Biodata Anda akan dimasukkan ke dalam database, dan pihak admin akan menghubungi Anda melalui nomor telepon yang telah Anda berikan. Proses ini akan diselesaikan paling lambat dalam 3 hari kerja.</p>
        <form name="formulir" method="POST">
    <h4>Biodata Siswa</h4>
    <input type="text" name="nama" placeholder="Nama Siswa" required>
    <input type="text" name="umur" placeholder="Umur Siswa" required>
    <input type="text" name="jk" placeholder="Jenis Kelamin Siswa" required>
    <input type="text" name="skl" placeholder="Asal Sekolah" required>
    <input type="text" name="kelas" placeholder="Kelas Siswa" required> <!-- Perbaikan di sini -->
    
    <h4>Biodata Orang Tua / Wali</h4>
    <input type="text" name="ortu" placeholder="Nama Orang Tua/Wali" required>
    <input type="text" name="tlp" placeholder="Nomor Telepon" required>
    <input type="text" name="Alamat" id="Alamat" placeholder="Masukan Alamat" required>
    <h4>Kursus Yang Dipilih</h4>
<select name="kursus" id="kursus" required>
    <option value="" disabled selected>Pilih Kursus</option>
    <option value="sd">Sekolah Dasar</option>
    <option value="smp">Sekolah Menengah Pertama</option>
    <option value="eng">English</option>
    <option value="privat-english">Privat - English</option>
    <option value="privat-matematika">Privat - Matematika</option>
</select>

    
    <input type="submit" value="Kirim">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db = 'bimbel';
    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db);
    if ($connection) {
        $nama = mysqli_real_escape_string($connection, $_POST['nama']);
        $umur = mysqli_real_escape_string($connection, $_POST['umur']);
        $jk = mysqli_real_escape_string($connection, $_POST['jk']);
        $skl = mysqli_real_escape_string($connection, $_POST['skl']);
        $kelas = mysqli_real_escape_string($connection, $_POST['kelas']);  
        $ortu = mysqli_real_escape_string($connection, $_POST['ortu']);
        $tlp = mysqli_real_escape_string($connection, $_POST['tlp']);
        $Alamat = mysqli_real_escape_string($connection, $_POST['Alamat']);
        $kursus = mysqli_real_escape_string($connection, $_POST['kursus']);

        $query = "INSERT INTO pengunjung (nama_siswa, jk, asal_sekolah, kelas, nama_orang_tua, no_telp, alamat, kursus) 
                  VALUES ('$nama', '$jk', '$skl', '$kelas', '$ortu', '$tlp', '$Alamat', '$kursus')";  
        if (mysqli_query($connection, $query)) {
            echo "<center style='color: green;'>Data berhasil disimpan!</center>";
        } else {
            echo "Error: " . mysqli_error($connection);
        }
        mysqli_close($connection);
    } else {
        echo "Connection failed: " . mysqli_connect_error();
    }
}
?>


    <div class="total">
       
        <h3>Total Pembayaran</h3>
        <p>
        Cek total pembayaran anda. Admin kami akan menghubungi anda paling lambat 3 hari. Lalu anda dapat memputuskan akan membayar cash atau trasnfer
        </p>
        <p>Uang masuk: -</p>
        <p>Biaya bulanan: -</p>
        <p>Total bayar: -</p>
    </div>

    <script>
    class Kursus {
    constructor() {
       
    }

    total() {
        this.awal = 200000;
        this.bulan = 100000;
        const total = this.awal + this.bulan;
        return { awal: this.awal, bulan: this.bulan, total: total };
    }

    smp() {
        this.awal = 150000;
        this.bulan = 75000;
        const total = this.awal + this.bulan;
        return { awal: this.awal, bulan: this.bulan, total: total };
    }

    privatEnglish() {
        this.awal = 0;
        this.bulan = 200000;
        const total = this.awal + this.bulan;
        return { awal: this.awal, bulan: this.bulan, total: total };
    }

    privatMatematika() {
        this.awal = 0;
        this.bulan = 250000;
        const total = this.awal + this.bulan;
        return { awal: this.awal, bulan: this.bulan, total: total };
    }

    eng() {
        this.awal = 100000;
        this.bulan = 75000;
        const total = this.awal + this.bulan;
        return { awal: this.awal, bulan: this.bulan, total: total };
    }
}

document.addEventListener("DOMContentLoaded", () => {
    const kursus = new Kursus();
    const kursusSelect = document.getElementById("kursus");
    const totalDisplay = document.querySelector(".total");

    kursusSelect.addEventListener("change", () => {
        const selectedCourse = kursusSelect.value;
        let result;

        if (selectedCourse === "sd") {
            result = kursus.total();
        } else if (selectedCourse === "smp") {
            result = kursus.smp();
        } else if (selectedCourse === "privat-english") {
            result = kursus.privatEnglish();
        } else if (selectedCourse === "privat-matematika") {
            result = kursus.privatMatematika();
        } else if (selectedCourse === "eng") {
            result = kursus.eng();
        }

        if (result) {
            totalDisplay.innerHTML = `
                <h3>Total Pembayaran</h3>
                <p>
                    Cek total pembayaran anda. Admin kami akan menghubungi anda paling lambat 3 hari. Lalu anda dapat memutuskan akan membayar cash atau transfer
                </p>
                <p>Uang masuk: Rp${result.awal.toLocaleString()}</p>
                <p>Biaya bulanan: Rp${result.bulan.toLocaleString()}</p>
                <p>Total bayar: Rp${result.total.toLocaleString()}</p>
            `;
        }
    });
});

    </script>
</body>
</html>

