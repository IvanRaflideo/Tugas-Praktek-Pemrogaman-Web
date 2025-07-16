<?php
require 'function.php';

if (isset($_POST["register"])) {
    $message = register($_POST);

    if ($message === "Register Berhasil") {
        echo "<script>
                alert('" . addslashes($message) . "');
                document.location.href='login.php';
              </script>";
    } else {
        echo "<script>
                alert('" . addslashes($message) . "');
                document.location.href='register.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 align="center">REGISTER</h1>
    <div class="container mt-4" style="max-width: 500px;">
        <div class="card text-white" style="background-color: darkmagenta;">
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password1" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password1" name="password1" required>
                    </div>
                    <div class="mb-3">
                        <label for="password2" class="form-label">Konfirmasi Password:</label>
                        <input type="password" class="form-control" id="password2" name="password2" required>
                    </div>
                    <button type="submit" name="register" class="btn btn-light">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>