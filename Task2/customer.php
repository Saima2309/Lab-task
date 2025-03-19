<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Registration</title>
</head>

<body>

  <form action="form.html" method="post">
    <fieldset>
      <legend>Registration Form</legend>
      <table>
        <tr>
          <td><label>First Name:</label></td>
          <td><input type="text" id="name" name="name" required></td>
        </tr>
        <tr>
        <tr>
          <td><label>Last Name:</label></td>
          <td><input type="text" id="name" name="name" required></td>
        </tr>
        <tr>

        </tr>
        <td><label>Email:</label></td>
        <td><input type="email" id="email" name="email" required></td>
        </tr>
        <tr>
          <td><label>Password:</label></td>
          <td><input type="password" id="password" name="password" required></td>

        </tr>
        <tr>
          <td> <label>Phone:</label></td>
          <td> <input type="tel" id="phone" name="phone" required></td>
        </tr>





        <tr>
          <td><label>Favorite Music Genre:</label></td>
          <td>
            <select id="favorite_genre" name="favorite_genre">
              <option value="rock">Rock</option>
              <option value="pop">Pop</option>
              <option value="jazz">Metal</option>
              <option value="hiphop">Hip-Hop</option>
              <option value="classical">Classical</option>
            </select>
          </td>
        </tr>




      </table>
      </legend>
      <div class="button">
        <input type="submit" value="Register">
      </div>

    </fieldset>
  </form>
</body>

</html>