<?php
require('../path.php');
require('../db/db.php');
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $delete = deleteblog('blog', $id);
  if($delete){
    header('location:' . BASE_URL . '/dashboard/blog.php');
  }
}
function deleteeducation($table, $id)
{
  global $conn;
  $sql = "DELETE FROM $table WHERE id_education = ?";
  $stmt = executeQuery($sql, ['id_education' => $id]);
  return $stmt->affected_rows;
}
if(isset($_GET['ideducation'])){
  $id = $_GET['ideducation'];
  $delete = deleteeducation('educations', $id);
  if($delete){
    header('location:' . BASE_URL . '/dashboard/education.php');
  }
}

function deleteexperien($table, $id)
{
  global $conn;
  $sql = "DELETE FROM $table WHERE id_experiences = ?";
  $stmt = executeQuery($sql, ['id_experiences' => $id]);
  return $stmt->affected_rows;
}
if(isset($_GET['idexperience'])){
  $id = $_GET['idexperience'];
  $delete = deleteexperien('experiences', $id);
  if($delete){
    header('location:' . BASE_URL . '/dashboard/experience.php');
  }
}

function deleteskill($table, $id)
{
  global $conn;
  $sql = "DELETE FROM $table WHERE id_skill = ?";
  $stmt = executeQuery($sql, ['id_skill' => $id]);
  return $stmt->affected_rows;
}
if(isset($_GET['idskill'])){
  $id = $_GET['idskill'];
  $delete = deleteskill('skills', $id);
  if($delete){
    header('location:' . BASE_URL . '/dashboard/skill.php');
  }
}

function delete($table, $id)
{
  global $conn;
  $sql = "DELETE FROM $table WHERE id = ?";
  $stmt = executeQuery($sql, ['id' => $id]);
  return $stmt->affected_rows;
}
if(isset($_GET['idportfolio'])){
  $id = $_GET['idportfolio'];
  $delete = delete('portfolios', $id);
  if($delete){
    header('location:' . BASE_URL . '/dashboard/portfolio.php');
  }
}
?>