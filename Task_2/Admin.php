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
        <h2 id="form-title">Owner Registration</h2>
        <form action="form.html" method="post">

            <!-- Personal Info Section -->
            <fieldset class="personal-info">
                <lebel class="center">Personal Info</lebel><br>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>

                <label for="co-founder">Co-Founder:</label>
                <input type="text" id="co-founder" name="co-founder"><br>

                <label for="profile-pic">Profile Pic:</label>
                <input type="file" id="profile-pic" name="profile-pic"><br>
            </fieldset>

            <!-- Music Related Info Section -->
            <fieldset class="music-info">
                <lebel class="center">Music Related Info</lebel><br>
                <label for="artist">Artist:</label>
                <select id="artist" name="artist">
                    <option value="artist1">Artist 1</option>
                    <option value="artist2">Artist 2</option>
                </select><br>

                <label for="country">Country:</label>
                <select id="country" name="country">
                    <option value="country1">Country 1</option>
                    <option value="country2">Country 2</option>
                </select><br>

                <label for="genre">Genre:</label>
                <select id="genre" name="genre">
                    <option value="genre1">Genre 1</option>
                    <option value="genre2">Genre 2</option>
                </select><br>

                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" cols="30"></textarea><br>
            </fieldset>

            <br>
            <br>
            <br>
            <br>

            
            <div class="form-actions">
                <button type="submit">Submit</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </div>
</body>
</html>
