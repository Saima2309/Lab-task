<?php
session_start();
include("../Model/mydb.php");

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if (!empty($username) && !empty($password)) {
        $conn = createCon();
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

            // Set all session variables you want to use in Display.php
            $_SESSION["username"] = $row["Username"];
            $_SESSION["email"] = $row["Email"];
            $_SESSION["artist"] = $row["Artist"] ;
            $_SESSION["country"] = $row["Country"];
            $_SESSION["genre"] = $row["Genre"] ;
            $_SESSION["description"] = $row["Description"] ;

            header("Location: ../View/Display.php");
            
        closeCon($conn);

            exit();
        } 
        else {
            $error = "Invalid username or password.";
        }

        $stmt->close();
        closeCon($conn);
    } else {
        $error = "Please enter both fields.";
    }
}
?>
