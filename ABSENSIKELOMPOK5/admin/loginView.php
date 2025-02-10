<?php
include('../koneksi/koneksi.php');
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Informasi Perusahaan</title>
    <link href="https://fonts.googleapis.com/css2?family=Droid+Sans:regular,bold&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Droid Sans', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #f5f7fa, #c3cfe2);
            color: #333; 
    }

    .login-container {
        display: flex;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: 70%;
        max-width: 900px;
        margin: auto; 
        position: relative; 
        top: 50%; 
        transform: translateY(-0%); 
        animation: fadeIn 1s ease-out;
    }

    .form-section {
        flex: 1;
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .form-section h1 {
        font-size: 28px;
        margin-bottom: 20px;
        color: #333;
    }

    .form-section label {
        margin-bottom: 10px;
        font-size: 14px;
        color: #555;
    }

    .form-section input,
    .form-section select {
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 14px;
        width: 100%;
        box-sizing: border-box;
        appearance: none;
        background: white;
    }

    .form-section select {
        background: url("data:image/svg+xml;charset=US-ASCII,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23666' d='M2 0L0 2h4z'/%3E%3C/svg%3E") no-repeat right 10px center;
        background-size: 10px;
        color: #555;
    }

    .form-section select:focus,
    .form-section input:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 4px rgba(0, 123, 255, 0.5);
    }

    .checkbox-container {
        display: flex;
        align-items: center;
        margin-top: 10px;
    }

    input[type="checkbox"] {
        width: 15px;
        height: 15px;
        margin-left: 10px;
        transform: none;
        position: relative;
        transition: transform 0.2s ease-in-out, background-color 0.3s ease;
    }

    input[type="checkbox"]:checked {
        transform: scale(1.2);
        background-color: #007bff;
    }

    input[type="checkbox"]:hover {
        transform: scale(1.1);
    }

    input[type="checkbox"]:checked::before {
        content: "✔";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        font-size: 12px;
        font-weight: bold;
        opacity: 1;
        transition: opacity 0.2s ease;
    }

    input[type="checkbox"]:not(:checked)::before {
        opacity: 0;
    }

    .stay-logged-in-message {
        font-size: 14px;
        color: #007bff;
        display: none;
        margin-top: 10px;
    }

    input[type="checkbox"]:checked ~ .stay-logged-in-message {
        display: block;
    }

    .form-section button {
        padding: 10px;
        background: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        width: 100%; 
        display: flex;
        justify-content: center;
        align-items: center;
        transition: background 0.3s ease, transform 0.2s ease-in-out;
    }

    .form-section button .arrow {
        font-size: 18px;
        opacity: 0;
        transform: translateX(10px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .form-section button:hover {
        background: #0056b3;
        transform: scale(1.05);
    }

    .form-section button:hover .arrow {
        opacity: 1;
        transform: translateX(0); 
    }
    .form-section button .login-text {
        flex: 1;
        text-align: center;
    }

    .illustration-section {
        flex: 1;
        background: #f5f7fa;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .illustration-section img {
        width: 80%;
        max-width: 400px;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes zoomIn {
        0% {
            transform: scale(0.8);
            opacity: 0;
        }
        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    .button-container {
        text-align: center;
        margin-top: 20px;
    }

</style>
</head>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if (!empty($username) && !empty($password)) {
        $stmt = $koneksi->prepare("SELECT * FROM login WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $data = $result->fetch_assoc();
            $_SESSION['username'] = $data['username'];
            $_SESSION['role'] = $data['role']; 
            $_SESSION['NIP'] = $data['NIP'];
               
            if ($data['role'] == 'admin') {
                $_SESSION['adm'] = $data;
                echo "<script>alert('Login Berhasil!'); window.location='adminView.php';</script>";
                $_SESSION['username'] = $data['username'];
                $_SESSION['role'] = $data['role']; 
                $_SESSION['NIP'] = $data['NIP'];
            } elseif ($data['role'] == 'pegawai') {
                $_SESSION['pgw'] = $data;
                $_SESSION['username'] = $data['username'];
                $_SESSION['role'] = $data['role']; 
                $_SESSION['NIP'] = $data['NIP'];
                $_SESSION['username'] = $data['username'];
                echo "<script>alert('Login Berhasil!'); window.location='pegawaiAbsensi.php';</script>";
            } elseif ($data['role'] == 'pimpinan') {
                $_SESSION['pimpinan'] = $data;
                echo "<script>alert('Login Berhasil!'); window.location='pimpinanView.php';</script>";
                $_SESSION['username'] = $data['username'];
                $_SESSION['role'] = $data['role']; 
                $_SESSION['NIP'] = $data['NIP'];
            } else {
                echo "<script>alert('Role tidak dikenali!'); window.location='./?adm=login';</script>";
            }            
        } else {
            echo "<script>alert('Username atau password salah!'); window.location='./?adm=login';</script>";
        }
    } else {
        echo "<script>alert('Harap isi username dan password!');</script>";
    }
}


?>
<body>
    <div class="login-container">

        <div class="form-section">
            <h1>Login</h1>
            <form action="" method="post">
                <label for="username">Username/NIP</label>
                <input type="text" id="username" name="username" placeholder="Masukkan Username/NIP" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan Password" required>

                <div class="checkbox-container">
                    <input type="checkbox" id="stayLoggedIn" name="stayLoggedIn">
                    <label for="stayLoggedIn">Anda akan tetap login setelah sesi berakhir.</label>
                </div>

                <div class="stay-logged-in-message">
                    <p>Anda akan tetap login setelah menutup browser.</p>
                </div>

               <button type="submit">
                    <span class="login-text">Login</span>
                    <span class="arrow">→</span>
                </button>

            </form>
        </div>

        <div class="illustration-section">
            <img src="logo2.png" alt="Login Illustration">
        </div>
    </div>
</body>
</html>
