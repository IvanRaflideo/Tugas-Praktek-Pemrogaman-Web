<?php

session_start();

require 'function.php';

$error = false;

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) > 0) {
        if(password_verify($password, $user["password"])) {
            $_SESSION["login"] = $user["id"];
            header("Location: datapemain.php");
            exit;
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 align="center">Login</h1>
    <div class="container mt-4" style="max-width: 500px;">
        <div class="card text-white" style="background-color: darkmagenta;">
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <?php if($error) : ?>
                        <p style="color: red; font-style: italic;">Username atau Password salah!</p>
                    <?php endif; ?> 
                    <button type="submit" name="login" class="btn btn-light">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>