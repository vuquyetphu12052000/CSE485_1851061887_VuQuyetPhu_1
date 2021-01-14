<?php
include(ROOT_PATH . "./db/db.php");
if(isset($_POST['register-btn'])){
    $_POST['password']=password_hash($_POST['password'], PASSWORD_DEFAULT);
    dd($_POST);
}
$code = rand(999999, 111111);
echo $code
 ?>