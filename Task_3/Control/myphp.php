<?php
include("../Model/mydb.php");

$usernameErr = $passwordErr = $emailErr = $artistErr = $countryErr = $genreErr = "";
$username = $email = $artist = $country = $genre = $description = "";
$hasError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $usernameErr = "Username required";
        $hasError = true;
    } else {
        $username = $_POST["username"];
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password required";
        $hasError = true;
    } else {
        $password = $_POST["password"];
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email required";
        $hasError = true;
    } else {
        $email = $_POST["email"];
    }

    if (empty($_POST["artist"])) {
        $artistErr = "Artist required";
        $hasError = true;
    } else {
        $artist = $_POST["artist"];
    }

    if (empty($_POST["country"])) {
        $countryErr = "Country required";
        $hasError = true;
    } else {
        $country = $_POST["country"];
    }

    if (empty($_POST["genre"])) {
        $genreErr = "Genre required";
        $hasError = true;
    } else {
        $genre = $_POST["genre"];
    }

    $description = $_POST["description"] ;

    if (!$hasError) {
        $conn = createCon();
        $inserted = insertData($conn, $username, $password, $email, $artist, $country, $genre, $description);
        closeCon($conn);

        if ($inserted) {
            header("Location: ../View/Login.php");
            exit();
        } else {
            echo " Registration failed.";
        }
    }
}
