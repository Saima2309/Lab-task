<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: Login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="mystyle1.css">
</head>
<body>

    <h2>Welcome, <?= $_SESSION["username"]; ?>!</h2>

    <div class="personal-info">
        
    <p>You have successfully logged in.</p>

    <div class="display-info">
        <p><strong>Username (Session):</strong> <?= $_SESSION["username"] ?? 'N/A' ?></p>
        <p><strong>Password (Session):</strong> <?= $_SESSION["password"] ?? 'No Access' ?></p>
        <p><strong>Email (Session):</strong> <?= $_SESSION["email"] ?? 'N/A' ?></p>
        <p><strong>Artist:</strong> <?= $_SESSION["artist"] ?? 'N/A' ?></p>
        <p><strong>Country:</strong> <?= $_SESSION["country"] ?? 'N/A' ?></p>
        <p><strong>Genre:</strong> <?= $_SESSION["genre"] ?? 'N/A' ?></p>
        <p><strong>Description:</strong> <?= $_SESSION["description"] ?? 'N/A' ?></p>
    </div>
    <div class="form-actions">
        <form action="Login.php" method="get" style="display:inline;">
                <button type="submit" class="loginbtn">Logout</button>
            </div>

</body>
</html>
