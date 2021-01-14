<?php
$localhost ='localhost';
$username = 'root';
$password = '';
$database = 'cv1';

$conn = mysqli_connect($localhost,$username,$password, $database);
// var_dump($conn);
if(!$conn){
  die('connect error');
}

else {
  // echo "Bạn đẹp trai";
}
?>