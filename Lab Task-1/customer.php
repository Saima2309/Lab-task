<?php 

include 'validation.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <title>Registration</title>
</head>

<body>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <fieldset>
      <legend>Registration Form</legend>
      <table>
        <tr>
          <td><label for="firstName">First Name:</label></td>
          <td>
            <input type="text" id="firstName" name="firstName" value="<?php echo $firstName; ?>">
            <span class="error"><?php echo $firstNameErr; ?></span>
          </td>
        </tr>
        <tr>
          <td><label for="lastName">Last Name:</label></td>
          <td>
            <input type="text" id="lastName" name="lastName" value="<?php echo $lastName; ?>">
            <span class="error"><?php echo $lastNameErr; ?></span>
          </td>
        </tr>
        <tr>
          <td><label for="email">Email:</label></td>
          <td>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>">
            <span class="error"><?php echo $emailErr; ?></span>
          </td>
        </tr>
        <tr>
          <td><label for="password">Password:</label></td>
          <td>
            <input type="password" id="password" name="password" value="<?php echo $password; ?>">
            <span class="error"><?php echo $passwordErr; ?></span>
          </td>
        </tr>
        <tr>
          <td><label for="phone">Phone:</label></td>
          <td>
            <input type="tel" id="phone" name="phone" value="<?php echo $phone; ?>">
            <span class="error"><?php echo $phoneErr; ?></span>
          </td>
        </tr>
        <tr>
          <td><label for="genre">Favorite Music Genre:</label></td>
          <td>
            <select id="genre" name="genre">
              <option value="">-- Select Genre --</option>
              <option value="rock" <?php if ($genre == "rock") echo "selected"; ?>>Rock</option>
              <option value="pop" <?php if ($genre == "pop") echo "selected"; ?>>Pop</option>
              <option value="metal" <?php if ($genre == "metal") echo "selected"; ?>>Metal</option>
              <option value="hiphop" <?php if ($genre == "hiphop") echo "selected"; ?>>Hip-Hop</option>
              <option value="classical" <?php if ($genre == "classical") echo "selected"; ?>>Classical</option>
            </select>
            <span class="error"><?php echo $genreErr; ?></span>
          </td>
        </tr>
      </table>

      <div class="button">
        <input type="submit" value="Register">
      </div>
    </fieldset>
  </form>
</body>

</html>