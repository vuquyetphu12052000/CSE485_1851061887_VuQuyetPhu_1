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
    <form action="email.php" method="post">
      <h2 class="form-title">Forgot Password</h2>
      <div class="form-title">Enter your email address</div>

      <?php if (count($errors) > 0) { ?>
        <div class="msg error">
          <?php foreach ($errors as $error) { ?>
            <li><?php echo $error ?></li>
          <?php } ?>
        </div>
      <?php } ?>

      <div>
        <input type="text" name="email" class="text-input" value="<?php echo $email ?>">
      </div>

      <div>
        <button type="submit" name="email-btn" class="btn btn-big" >Continue</button>
      </div>
      <a href="<?php echo BASE_URL . '/login.php' ?>">← Back to Login</a>
    </form>
  </div>

  <!-- Template js -->
  
</body>

</html>