<?php include('path.php'); ?>
<?php include(ROOT_PATH . "./app/controller/user.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Personal Portfolio Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Template css Files -->
  <link rel="stylesheet" href="css/style1.css" type="text/css">
  <link rel="stylesheet" href="css/skins/pink.css" type="text/css">
</head>

<body>
<div class="auth-content">
        <form action="register.php" method="post">
            <h2 class="form-title">Register</h2>

            <!-- <div class="msg error">
                <li>Username required</li>
            </div> -->

            <div>
                <label>Username</label>
                <input type="text" name="username" class="text-input">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" class="text-input">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" class="text-input">
            </div>
            <div>
                <label>Password Confirmation</label>
                <input type="password" name="passwordConf" class="text-input">
            </div>
            <div>
                <button type="submit" name="register-btn" class="btn btn-big">Register</button>
            </div>
            <p>Or <a href="<?php  echo BASE_URL . '/login.php'?>">Sign In</a></p>
            <a href="<?php  echo BASE_URL . '/index.php'?>">← Back to Online CV</a>
        </form>
    </div>

<!-- Template js -->
<script src="js/script.js"></script>
</body>

</html>