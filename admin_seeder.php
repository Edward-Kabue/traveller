<?php
require 'includes/pdo.php';

// Define the users to be added
$users = [
    ['username' => 'john_doe', 'password' => 'password123', 'email' => 'john_doe@example.com', 'is_admin' => 0],
    ['username' => 'jane_smith', 'password' => 'password456', 'email' => 'jane_smith@example.com', 'is_admin' => 1],
    ['username' => 'bob_johnson', 'password' => 'password789', 'email' => 'bob_johnson@example.com', 'is_admin' => 0]
];

// Hash the passwords using the bcrypt algorithm
foreach ($users as &$user) {
    $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);
}

// Insert the users into the database

/** @var TYPE_NAME $pdo */
$stmt = $pdo->prepare("INSERT INTO users (username, password, email, is_admin) VALUES (?, ?, ?, ?)");
foreach ($users as $user) {
    $stmt->execute([$user['username'], $user['password'], $user['email'], $user['is_admin']]);
}
echo count($users) . " users added to database.\n";
?>
