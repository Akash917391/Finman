<?php
include 'conn.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT user_name, user_pass FROM users WHERE user_email='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row["user_pass"];

        if (password_verify($password, $hashed_password)) {
            $_SESSION["user_name"] = $row["user_name"];
            $_SESSION["user_email"] = $email;

            header("Location: home.php" );
            exit();
        } else {
            echo "❌ Invalid password!";
        }
    } else {
        echo "❌ Email not found!";
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finman</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="logo">
        <img src="./img/logo.png" alt="logo" width="30px" height="30px">
        <h2 class="head-name">FINMAN</h2>
    </div>
    <div class="login-container">
        <div class="login-content">
            <div class="login">
                <h2 class="log">LOGIN</h2>
            </div>
            <div class="form-detail">
                <form method="POST" class="form-login">
                    <div class="email-id">
                        <label for="email" class="email-txt">Email:</label>
                        <input type="email" name="email" class="email-input" placeholder="Enter Email" id="email"
                            required>
                    </div>
                    <div class="password">
                        <label for="password" class="password-txt">Password:</label>
                        <input type="password" name="password" class="password-input" placeholder="Enter Password"
                            id="password" required>
                    </div>
                    <div class="submit-button">
                        <button type="submit" class="submit-btn">Submit</button>
                    </div>
                    <div class="redirect-login">
                        <a href="register.php" class="create-acc">
                            Create An Account
                        </a>
                        <a href="#forgot" class="forgot-pass">
                            Forgot Password
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
