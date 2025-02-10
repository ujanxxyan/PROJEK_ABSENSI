<?php
session_start()
include('../koneksi/koneksi.php');

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

;
?>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $role = htmlspecialchars($_POST["role"]);
    $password = htmlspecialchars($_POST["password"]);


    if ($password !== "your_password") {
        echo "<script>alert('Password salah! Silakan coba lagi.'); window.location.href='loginView.php';</script>";
        exit;
    }
} else {
    header("Location: loginView.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lengkapi Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .form-container h1 {
            margin-bottom: 20px;
        }
        .form-container label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
        }
        .form-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Lengkapi Data</h1>
        <form action="submit.php" method="post">
            <input type="hidden" name="role" value="<?php echo $role; ?>">

            <label for="name">Nama Lengkap:</label>
            <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username" required>

            <label for="nip">NIP:</label>
            <input type="text" id="nip" name="nip" placeholder="Masukkan NIP" required>

            <label for="jabatan">Jabatan:</label>
            <input type="text" id="jabatan" name="jabatan" placeholder="Masukkan jabatan" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>