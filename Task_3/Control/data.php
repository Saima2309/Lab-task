<?php
session_start();

// Fetching data from POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["artist"] = $_POST["artist"];
    $_SESSION["country"] = $_POST["country"];
    $_SESSION["genre"] = $_POST["genre"];
    $_SESSION["description"] = $_POST["description"];

    // Set cookies (expire in 1 day)
    setcookie("username", $_POST["username"], time() + 86400, "/");
    setcookie("email", $_POST["email"], time() + 86400, "/");

    // Redirect to display page
    header("Location: ../View/Display.php");
    exit();
} else {
    echo "Invalid access.";
}
?>
