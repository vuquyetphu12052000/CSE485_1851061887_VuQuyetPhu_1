<?php
require('connect.php');
session_start();
// $sql = "SELECT * FROM users WHERE id_user = '1'";
// $query = mysqli_query($conn,$sql);
// if($query && (mysqli_num_rows($query)>0)){
//   $row= mysqli_fetch_assoc($query);
// var_dump($row);

// }
// var_dump($conn);
function dd($value)
{
  echo "<pre>", print_r($value, true);
  die();
}

function executeQuery($sql, $data)
{
  global $conn;
  $stmt = $conn->prepare($sql);
  $values = array_values($data);
  $types = str_repeat('s', count($values));
  $stmt->bind_param($types, ...$values);
  $stmt->execute();
  return $stmt;
}

function selectAll($table, $conditions = [])
{
  global $conn;
  $sql = "SELECT * FROM $table";
  if (empty($conditions)) {
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
  } else {
    $i = 0;
    foreach ($conditions as $key => $value) {
      if ($i === 0) {
        $sql = $sql . " WHERE $key=?";
      } else {
        $sql = $sql . " AND $key=?";
      }
      $i++;
    }
    // dd($sql);
    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
  }
}
function selectOne($table, $conditions)
{
  global $conn;
  $sql = "SELECT * FROM $table";

  $i = 0;
  foreach ($conditions as $key => $value) {
    if ($i === 0) {
      $sql = $sql . " WHERE $key=?";
    } else {
      $sql = $sql . " AND $key=?";
    }
    $i++;
  }

  $sql = $sql . " LIMIT 1";
  // dd($sql);
  $stmt = executeQuery($sql, $conditions);
  $records = $stmt->get_result()->fetch_assoc();
  return $records;
}


function create($table, $data)
{
  global $conn;
  $sql = "INSERT INTO $table SET";

  $i = 0;
  foreach ($data as $key => $value) {
    if ($i === 0) {
      $sql = $sql . " $key=?";
    } else {
      $sql = $sql . ", $key=?";
    }
    $i++;
  }
  // dd($sql);

  $stmt = executeQuery($sql, $data);
  $id = $stmt->insert_id;
  return $id;
}

function update($table, $id, $data)
{
  global $conn;
  $sql = "UPDATE $table SET";

  $i = 0;
  foreach ($data as $key => $value) {
    if ($i === 0) {
      $sql = $sql . " $key = '?' ";
    } else {
      $sql = $sql . ", $key = '?' ";
    }
    $i++;
  }

  $sql = $sql . " WHERE id=?";
  $data['id'] = $id;
  $stmt = executeQuery($sql, $data);
  return $stmt->affected_rows;
}


function deleteblog($table, $id)
{
  global $conn;
  $sql = "DELETE FROM $table WHERE id_blog = ?";
  
  $stmt = executeQuery($sql, ['id_blog' => $id]);
  return $stmt->affected_rows;
}
// $conditions = [
//   'id_user' => 1,

// ];

// $row = selectOne('users', $conditions);

// dd($user);
$conditions = [
  'id_user' => 1,

];
$row = selectOne('users', $conditions);
$skills = selectAll('skills');
$educations = selectAll('educations');
$experiences = selectAll('experiences');
$blogs = selectAll('blog');
$portfolios = selectAll('portfolios');

$sql1 = "SELECT DISTINCT(portfolio_name) FROM portfolios";
$query1 = mysqli_query($conn, $sql1);
$q = mysqli_fetch_all($query1);


$q1 = mysqli_num_rows(mysqli_query($conn, 'SELECT * FROM blog'));
$q2 = mysqli_num_rows(mysqli_query($conn, 'SELECT * FROM portfolios'));
$q3 = mysqli_num_rows(mysqli_query($conn, 'SELECT * FROM skills'));

// $user11 = selectOne('users', ['email' => 'vuquyetphu12052000@gmail.com']);
// var_dump($user11);
// background profile
// $file=$_FILES['change-backgroud']['name'];
// if (isset($file)) {
//   $file=$_FILES['change-backgroud']['name'];
//   $file = base64_encode(file_get_contents(addslashes($file)));
//   $sqlimage = "UPDATE users SET image = '$file'";
//   $queryimage = mysqli_query($conn,$sqlimage);

// }
if (isset($_POST['sbm1'])) {
  $fullname = $_POST['fullname'];
  $work = $_POST['description_short'];
  // if($_POST['image'] =''){
  //   $image = base64_encode($row['image']);
  // }
  // else{
  if ($_FILES["image"]["tmp_name"] === "") {
    $image = $row['image'];
  } else {
    $image = addslashes($_FILES["image"]["tmp_name"]);
    $image = file_get_contents($image);
    $image = base64_encode($image);
  }




  // }
  $birthday = $_POST['birthday'];
  $city = $_POST['city'];
  $description = $_POST['description'];

  $sql111 = "UPDATE users SET fullname = '$fullname' , short_description = '$work', `image`='$image' , birthday = '$birthday' , city = '$city', description = '$description'";



  $query111 = mysqli_query($conn, $sql111);
  if ($query111) {
    header('location:' . BASE_URL . '/dashboard/profile.php');
  } else {
    echo 'khong thanh cong';
  }
}
//create blog
if(isset($_POST['blogcreate'])){
  unset($_POST['blogcreate']);
  $image = addslashes($_FILES["image"]["tmp_name"]);
  $image = file_get_contents($image);
  $image= base64_encode($image);
  $description= $_POST['description_short'];
  $tag=$_POST['tag'];
  $user= $row['id_user'];
  $blog_name = $_POST['blog_name'];
  $date = $_POST['date'];
  $sql = "INSERT INTO blog(blog_name,date,image,description_short,tag,id_user) VALUES ('$blog_name', '$date', '$image', '$description','$tag','$user')";
  // var_dump($sql);
  $query= mysqli_query($conn,$sql);
  if($query){
    header('location:' . BASE_URL . '/dashboard/blog.php');
  }
  else{echo 'không thành công';}
  
}
//editblog
// if (isset($_GET['id'])) {
//   $blog = selectOne('blog', ['id_blog' => $_GET['id']]);
// }
// if (isset($_POST['blogedit'])) {
//   if ($_FILES["image"]["tmp_name"] === "") {
//     $image = $blog['image'];
//   } else {
//     $image = addslashes($_FILES["image"]["tmp_name"]);
//     $image = file_get_contents($image);
//     $image = base64_encode($image);
//   }
//   $data = [
//     'blog_name' => $_POST["blogname"],
//     'date' => $_POST["date"],
//     'image' => $image,
//     'description_short' => $_POST["description"],
//     'tag' => $_POST["tag"]
//   ];
//   // dd($data);
//   update('blog', ['id_blog' => $_GET['id']], $data);
// }
if(isset($_GET['id'])){
  $blog = selectOne('blog', ['id_blog'=> $_GET['id']]);
  $id = $_GET['id'];
  
}
if(isset($_POST['blogedit'])){
  $blog_name= $_POST['blogname'];
  $date = $_POST['date'];
  if($_FILES["image"]["tmp_name"] === ""){
    $image = $blog['image'];
  }
  else {
    $image = addslashes($_FILES["image"]["tmp_name"]);
    $image = file_get_contents($image);
    $image= base64_encode($image);
  }
  $description = $_POST['description'];
  $tag = $_POST['tag'];
  $sql111 = "UPDATE blog SET blog_name = '$blog_name' , date = '$date', `image`='$image' , description_short = '$description' , tag = '$tag' WHERE id_blog = '$id'";

  $query111 = mysqli_query($conn, $sql111);
  if ($query111) {
    header('location:' . BASE_URL . '/dashboard/blog.php');
  } else {
    echo 'khong thanh cong';
  }

}

// Create education
// if(isset($_POST['educationcreate'])){
//   unset($_POST['educationcreate']);
//   $_POST['id_user']= $row['id_user'];
//   dd($_POST);
//   $education_id=create('educations',$_POST);
//   $education = selectOne('educations',$education_id);
//   // dd($_POST);
  
// }
if(isset($_POST['educationcreate'])){
  $school_name = $_POST['school_name'];
  $time = $_POST['time'];
  $description = $_POST['description_short'];
  $id_user= $row['id_user'];
  $sql = "INSERT INTO educations(school_name, time, description,id_user) VALUES('$school_name', '$time', '$description', '$id_user'
  )";
  $query = mysqli_query($conn,$sql);
  if($query){
    header('location:' . BASE_URL . '/dashboard/education.php');
  }
  else{

  }
}

//education edit
if(isset($_GET['ideducation'])){
  $education = selectOne('educations', ['id_education'=> $_GET['ideducation']]);
  $id_education = $_GET['ideducation'];
}
if(isset($_POST['educationedit'])){
  $school_name = $_POST['school_name'];
  $time = $_POST['time'];
  $description = $_POST['description_short'];
  $sql = "UPDATE educations SET school_name = '$school_name', time = '$time', description ='$description' WHERE id_education = '$id_education' ";
  $query = mysqli_query($conn,$sql);
  if($query){
    header('location:' . BASE_URL . '/dashboard/education.php');
  }
}

//create experience
if(isset($_POST['experiencecreate'])){
  $jobname = $_POST['experience_name'];
  $time = $_POST['time'];
  $description = $_POST['description_short'];
  $id_user= $row['id_user'];
  $sql = "INSERT INTO experiences(work, time, description,id_user) VALUES('$jobname', '$time', '$description', '$id_user'
  )";
  $query = mysqli_query($conn,$sql);
  if($query){
    header('location:' . BASE_URL . '/dashboard/experience.php');
  }
  else{

  }
}
?>
