<?php require('path.php') ?>
<?php require(ROOT_PATH . "/app/controller/user1.php") ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Personal Portfolio Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Template css Files -->
  <link rel="stylesheet" href="css/style1.css" type="text/css">
  <link rel="stylesheet" href="css/skins/pink.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="auth-content">
        <form action="login.php" method="post">
            <h2 class="form-title">Login</h2>
            
            <?php if(count($errors) >0) { ?>
                <div class="msg error">
                    <?php foreach($errors as $error){ ?>
                        <li><?php echo $error ?></li>
                    <?php } ?>
            </div>
            <?php } ?>
            <div>
                <label>Username</label>
                <input type="text" name="username" class="text-input" value="<?php echo $username ?>">
            </div>
            
            <div>
                <label>Password</label>
                <input type="password" name="password" class="text-input" value="<?php echo $password ?>"> 
            </div>
            <a href="<?php  echo BASE_URL . '/email.php'?>">Forgot password?</a>
            <div>
                <button type="submit" name="login-btn" class="btn btn-big">Login</button>
            </div>
            <a href="<?php  echo BASE_URL . '/index.php'?>">← Back to Online CV</a>
        </form>
    </div>

<!-- Template js -->
<!-- <script src="js/script.js"></script> -->
</body>

</html>


