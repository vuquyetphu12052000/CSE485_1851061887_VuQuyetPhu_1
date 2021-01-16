<?php
include(ROOT_PATH . "./db/db.php");
if(isset($_POST['register-btn'])){
    $h=password_hash($_POST['password'], PASSWORD_DEFAULT);
    dd($h);
}


 ?>