<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Registration Form</title>
    <link rel="stylesheet" type="text/css" href="mystyle1.css">
</head>
<body>
    <div class="form-container">
        <h2>Owner Registration</h2>
        <form id="registrationForm" action="form.html" method="post">

            <!-- Personal Info Section -->
            <fieldset class="personal-info">
                <label class="center">Personal Info</label><br>

                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
                <span id="usernameError"></span><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                <span id="passwordError"></span><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                <span id="emailError"></span><br>

                <label for="profile-pic">Profile Pic:</label>
                <input type="file" id="profile-pic" name="profile-pic"><br>
            </fieldset>

            <!-- Music Related Info Section -->
            <fieldset class="music-info">
                <label class="center">Music Related Info</label><br>

                <label for="artist">Artist:</label>
                <select id="artist" name="artist">
                    <option value="">--Select Artist--</option>
                    <option value="artist1">Justin Bieber</option>
                    <option value="artist2">Honey Singh</option>
                </select>
                <span id="artistError"></span><br>

                <label for="country">Country:</label>
                <select id="country" name="country">
                    <option value="country1">Bangladesh</option>
                    <option value="country2">India</option>
                    <option value="country3">America</option>
                </select><br>

                <label for="genre">Genre:</label>
                <select id="genre" name="genre">
                    <option value="">--Select Genre--</option>
                    <option value="genre1">Rock</option>
                    <option value="genre2">Jazz</option>
                    <option value="genre3">Classical</option>
                    <option value="genre4">RBW</option>
                </select>
                <span id="genreError"></span><br>

                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" cols="30"></textarea><br>
            </fieldset>

            <br><br><br>

            <div class="form-actions">
                <button type="submit">Submit</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </div>
    <script src="myjs.js"></script>
</body>
</html>
