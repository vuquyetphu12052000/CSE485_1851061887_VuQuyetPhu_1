<?php
function validateLogin($user){
  $errors = array();
  if(empty($user['username'])){
    array_push($errors, 'Username is required');
  }
  if(empty($user['password'])){
    array_push($errors, 'Password is password');
  }

  return $errors;
}

function validateEmail($user){
  $errors = array();
    if(empty($user['email'])){
      array_push($errors, 'Email is required');
    }
    return $errors;
  
}

function validateCode($user){
  $errors = array();
    if(empty($user['code'])){
      array_push($errors, 'Code is required');
    }
    return $errors;
  
}

function validateChangePassword($user){
  $errors = array();
    if(empty($user['password'])){
      array_push($errors, 'Password is required');
    }
    if(empty($user['passwordConf'])){
      array_push($errors, 'Password confirm is required');
    }
    if($user['passwordConf'] !== $user['password']){
      array_push($errors, 'Password do not match');
    }
    return $errors;
  
}
