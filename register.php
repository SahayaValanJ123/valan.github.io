<?php
$host = "localhost";
$db = "antony";
$user = "valan";
$pass = "20042004";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $passwordc = $_POST['passwordc'];

    // Check if password and confirm password match
    if ($_POST['password'] != $_POST['passwordc']) {
        echo "Passwords do not match!";
        exit();
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (username, email, mobile, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $email, $mobile, $password);

    if ($stmt->execute()) {
        echo "Registration Successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
