<?php
require("../db/connect.php");
if (isset($_POST['query1'])) {
  $search = $_POST['query1'];
  $stmt = mysqli_query($conn, "SELECT * FROM educations WHERE school_name LIKE '%$search%'");
  // $stmt->bind_param("ss",$search);
} else {
  $stmt = mysqli_query($conn, "SELECT * FROM educations");
}



?>
<html>
<?php if (mysqli_num_rows($stmt) > 0) { ?>
  <thead>
    <tr>
      <th>S No.</th>
      <th>School Name</th>
      <th>Time</th>
      <th>Description</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;
    while ($education = $stmt->fetch_assoc()) { ?>

      <tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo $education['school_name'] ?></td>
        <td><?php echo $education['time'] ?></td>
        <td><?php echo $education['description'] ?></td>
        <td><a href="educationview.php?id=<?php echo $education['id_education']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="educationedit.php?ideducation=<?php echo $education['id_education']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a onclick="return Del('<?php echo $education['school_name']; ?>')" href="delete.php?ideducation=<?php echo $education['id_education']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
      </tr>
    <?php } ?>
  </tbody>
<?php } else { ?>

  <h3>Records Found!</h3> <?php } ?>


</html>