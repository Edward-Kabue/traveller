<?php
session_start();
require_once 'includes/pdo.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database for the user
    /** @var TYPE_NAME $pdo */
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the user exists and the password is correct
    if ($user && password_verify($password, $user['password'])) {
        // Set the user session variable and redirect to the home page
        $_SESSION['user'] = $user;
        header('Location: index.php');
        exit;
    } else {
        // Display an error message
        $error = "Invalid username or password.";
    }
}
?>