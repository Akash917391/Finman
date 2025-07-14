<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "Starting register.php<br>";
include 'connection.php';
echo "Connected to database<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Form submitted<br>";

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    echo "Received: $username, $email<br>";

    if ($password !== $cpassword) {
        die("Passwords do not match!");
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password, cpassword) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $email, $hashedPassword, $hashedPassword);

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Form not submitted via POST.";
}
?>