<?php
require('../path.php');
session_start();
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['password']);
session_destroy();
header('location:' . BASE_URL . '/index.php');

?>