<?php require('path.php') ?>
<?php require(ROOT_PATH . "/app/controller/user1.php") ?>
<?php if(isset($_SESSION['email'])) {?>
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
    <form action="code.php" method="post">
      <h2 class="form-title">Code Verification</h2>
      <?php if(count($errors) >0) { ?>
                <div class="msg error">
                    <?php foreach($errors as $error){ ?>
                        <li><?php echo $error ?></li>
                    <?php } ?>
            </div>
            <?php } ?>
      <div>
        <input type="text" name="code" class="text-input" value="<?php echo $code ?>">
      </div>

      <div>
        <button type="submit" name="code-btn" class="btn btn-big">Submit</button>
      </div>
    </form>
  </div>

  <!-- Template js -->
  
</body>

</html>
<?php } else {
    header('location:' . BASE_URL . '/index.php');
} ?>