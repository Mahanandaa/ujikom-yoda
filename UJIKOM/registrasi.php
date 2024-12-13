<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Registrasi</title>
</head>
<body>
 <style>
  body {
    font-family: 'Poppins', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            box-sizing: border-box;
            text-align: center;
            text-align: center;

}
.login {
 
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
    padding: 20px;
    border-radius: 10px;
    width: 300px; 
   margin-left: 40%;
   margin-top: 13%;
    text-align: center;
    transition: 0.8s ease-in-out;
        }
        .login:hover{
            transform: translateY(-10px);
            transition: 0.8s ease-in-out;
        }
        .login h4{
            font-size: 30px;
            color: #007BFF;
        }
        form {
            
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="text"], input[type="password"] {
            margin: 10px 0;
            padding: 10px;
            width: 250px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            margin-top: 10px;
            padding: 10px;
            width: 260px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.5s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
            transition: 0.5s ease-in-out;
        }
        input[type="submit"]:active {
            background-color: #004494;
           
        }

        .toregis {
            margin-top: 10px;
        }

        .toregis a {
            text-decoration: none;
            color: #007BFF;
        }

        .toregis a:hover {
            text-decoration: underline;
        }
        hr{
            width: 90%;
            margin-bottom: 30px;
            margin-top: -30px;
        }
      
 </style>   
<div class="login">
    <h4>Registrasi Admin</h4><hr>
    <p class="log">Masukkan Username dan Password Anda</p>


<form action="" method="post">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" value="Masuk">
</form>

<p class="toregis">
    <a href="login_admin.php">Sudah mendaftar?</a> 
</p>
</div>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db = 'bimbel';

    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db);

    if ($connection) {
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);

        $query = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";

        if (mysqli_query($connection, $query)) {
            echo "<center style='color: green;'>Data berhasil disimpan!</center>";
            header('Location: login_admin.php');
        } else {
            echo "Error: " . mysqli_error($connection);
        }

        mysqli_close($connection);
    } else {
        echo "Connection failed: " . mysqli_connect_error();
    }
}
?>

</body>
</html>
