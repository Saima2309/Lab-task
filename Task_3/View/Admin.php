<?php 
include("../Control/myphp.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Owner Registration Form</title>
    <link rel="stylesheet" type="text/css" href="mystyle1.css">
</head>
<body>
    <div class="form-container">
        <h2>Owner Registration</h2>
        <form id="registrationForm" action="" method="post" enctype="multipart/form-data">

            <!-- Personal Info Section -->
            <fieldset class="personal-info">
                <label class="center">Personal Info</label><br>

                <label for="username">Username:</label>
                <input type="text" id="username" name="username" >
                <span class="error"><?php $usernameErr ?></span><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                <span class="error"><?php $passwordErr ?></span><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                <span class="error"><?php $emailErr ?></span><br>

                <label for="profile-pic">Profile Pic:</label>
                <input type="file" id="profile-pic" name="profile-pic"><br>
            </fieldset>

            <!-- Music Related Info Section -->
            <fieldset class="music-info">
                <label class="center">Music Related Info</label><br>

                <label for="artist">Artist:</label>
                <select id="artist" name="artist">
                    <option value="">--Select Artist--</option>
                    <option value="Justin Bieber">Justin Bieber</option>
                    <option value="Honey Singh">Honey Singh</option>
                </select>
                <span class="error"><?php $artistErr ?></span><br>

                <label for="country">Country:</label>
                <select id="country" name="country">
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="India">India</option>
                    <option value="America">America</option>
                </select><br>

                <label for="genre">Genre:</label>
                <select id="genre" name="genre">
                    <option value="">--Select Genre--</option>
                    <option value="Rock" >Rock</option>
                    <option value="Jazz">Jazz</option>
                    <option value="Classical">Classical</option>
                    <option value="RBW">RBW</option>
                </select>
                <span class="error"><?php $genreErr ?></span><br>

                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" cols="30"><?= $description ?></textarea><br>
            </fieldset>

            <div class="form-actions">
                <button type="submit" class="btn" >Submit</button>
                <button type="reset" class="btn" >Reset</button>
            </div>
        </form>
    </div>
</body>
</html>
