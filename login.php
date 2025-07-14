<?php
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT id, email, password FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        // Correct binding order matches SELECT fields
        $stmt->bind_result($user_id, $user_email, $stored_password);
        $stmt->fetch();

        // Debug (for testing — remove later)
        echo "Entered: " . htmlspecialchars($password) . "<br>";
        echo "Stored: " . htmlspecialchars($stored_password) . "<br>";

        // Secure password verification
        if (password_verify($password, $stored_password)) {
            $_SESSION['email'] = $user_email;
            $_SESSION['user_id'] = $user_id;
            echo "✅ Login successful!";
            // header("Location: dashboard.php"); // uncomment to redirect
            // exit();
        } else {
            echo "❌ Incorrect password!";
        }
    } else {
        echo "❌ User not found!";
    }

    $stmt->close();
    $conn->close();
}
?>