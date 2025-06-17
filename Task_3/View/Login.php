<?php 
include("../Control/loginchk.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="mystyle1.css">
</head>
<body>

    <h2>Login Page</h2>

    <div class="login personal-info">
        <form id="loginForm" action="" method="post">
            <label for="username">Username:</label><br>
            <input type="text" name="username" id="username" required><br><br>

            <label for="password">Password:</label><br>
            <input type="password" name="password" id="password" required><br><br>

            <div class="form-actions">
                <button type="submit" class="loginbtn">Login</button>
            </div>
        </form>

        <?php if (!empty($error)): ?>
            <span class="error"><?php echo $error; ?></span>
        <?php endif ?>
    </div>

</body>
</html>