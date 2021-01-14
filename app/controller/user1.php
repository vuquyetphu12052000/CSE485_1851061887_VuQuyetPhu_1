<?php
include(ROOT_PATH . "./db/db.php");
include(ROOT_PATH . './app/error/error.php');
$errors = array();
$username = '';
$password = '';
$passwordConf = '';
$email = '';
$code = '';
if (isset($_POST['login-btn'])) {
  $errors = validateLogin($_POST);
  if (count($errors) === 0) {
    $user = selectOne('users', ['username' => $_POST['username']]);
    // dd($user['password']);
    if ($user && password_verify($_POST['password'], $user['password'])) {
      $_SESSION['id'] = $user['id'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['password'] = $user['password'];

      if ($_SESSION['username'] && $_SESSION['password']) {
        header('location:' . BASE_URL . '/dashboard/index.php');
      } else {
        header('location:' . BASE_URL . '/login.php');
      }
    } else {
      array_push($errors, 'Wrong credentials');
    }
  }

  $username = $_POST['username'];
  $password = $_POST['password'];
}

if (isset($_POST['email-btn'])) {
  $errors = validateEmail($_POST);
  if (count($errors) === 0) {
    $user = selectOne('users', ['email' => $_POST['email']]);
    if ($user) {
      $_SESSION['email'] = $user['email'];
      $code = rand(999999, 111111);
      $email = $user['email'];
      $sql = "UPDATE users SET code = '$code' ";
      $query = mysqli_query($conn, $sql);
      require(ROOT_PATH . "./sendMail.php");


      if ($_SESSION['email']) {
        header('location:' . BASE_URL . '/code.php');
      } else {
        header('location:' . BASE_URL . '/email.php');
      }
    } else {
      array_push($errors, 'Email does not exist');
    }
  }
  $email = $_POST['email'];
}

if (isset($_POST['code-btn'])) {
  $errors = validateCode($_POST);
  if (count($errors) === 0) {
    $user = selectOne('users', ['code' => $_POST['code']]);
    if ($user) {
      $_SESSION['code'] = $user['code'];

      if ($_SESSION['code']) {
        header('location:' . BASE_URL . '/newPassword.php');
      } else {
        header('location:' . BASE_URL . '/code.php');
      }
    } else {
      array_push($errors, 'Code does not exist');
    }
  }
  $code = $_POST['code'];
}
if (isset($_POST['change-btn'])) {
  $errors = validateChangePassword($_POST);
  if (count($errors) === 0) {
    unset($_POST['passwordConf']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $sql = "UPDATE users SET password = '$password'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
      // unset($_SESSION['email']);
      // unset($_SESSION['code']);
      // session_destroy();
      header('location:' . BASE_URL . '/login.php');
      unset($_SESSION['email']);
      unset($_SESSION['code']);
      session_destroy();
    } else {
      header('location:' . BASE_URL . '/newPassword.php');
    }
  } else {
    array_push($errors, '
    Password change failed');
  }
  $password = $_POST['password'];
  $passwordConf = $_POST['passwordConf'];
}
