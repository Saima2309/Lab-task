<?php
function createCon() {
    return mysqli_connect("localhost", "root", "", "mydb");
}

function insertData($conn, $username, $password, $email, $artist, $country, $genre, $description) {
    $sql = "INSERT INTO users (username, password, email, artist, country, genre, description) 
            VALUES ('$username', '$password', '$email', '$artist', '$country', '$genre', '$description')";
    return mysqli_query($conn, $sql);
}

function closeCon($conn) {
    mysqli_close($conn);
}

