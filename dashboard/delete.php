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
?>