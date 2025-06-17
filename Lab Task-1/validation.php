<?php
$firstName = $lastName = $email = $password = $phone = $genre = "";
$firstNameErr = $lastNameErr = $emailErr = $passwordErr = $phoneErr = $genreErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if (empty($_POST["firstName"])) {
    $firstNameErr = "First name is required";
  } else {
    $firstName = test_input($_POST["firstName"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
      $firstNameErr = "Only letters and spaces allowed";
    }
  }


  if (empty($_POST["lastName"])) {
    $lastNameErr = "Last name is required";
  } else {
    $lastName = test_input($_POST["lastName"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $lastName)) {
      $lastNameErr = "Only letters and spaces allowed";
    }
  }

 
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }


  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
    if (strlen($password) < 6) {
      $passwordErr = "Password must be at least 6 characters";
    }
  }


  if (empty($_POST["phone"])) {
    $phoneErr = "Phone number is required";
  } else {
    $phone = test_input($_POST["phone"]);
    if (!preg_match("/^[0-9]{10,15}$/", $phone)) {
      $phoneErr = "Invalid phone number format";
    }
  }


  if (empty($_POST["genre"])) {
    $genreErr = "Please select a music genre";
  } else {
    $genre = test_input($_POST["genre"]);
  }

  if (
    empty($firstNameErr) && empty($lastNameErr) && empty($emailErr) &&
    empty($passwordErr) && empty($phoneErr) && empty($genreErr)
  ) {
 
    echo "<script>alert('Registration Successful');</script>";
  }
}

function test_input($data) {
  return htmlspecialchars(stripslashes(trim($data)));
}