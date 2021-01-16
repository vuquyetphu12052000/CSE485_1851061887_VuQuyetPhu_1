<?php
require("../db/connect.php");


if (isset($_POST['query'])) {
  $search = $_POST['query'];
  $stmt1 = mysqli_query($conn, "SELECT * FROM experiences WHERE work LIKE '%$search%'");
  // $stmt->bind_param("ss",$search);
} else {
  $stmt1 = mysqli_query($conn, "SELECT * FROM experiences");
}

?>
<html>

<!-- blog -->

<?php if (mysqli_num_rows($stmt1) > 0) { ?>
  <thead>
    <tr>
      <th>S No.</th>
      <th>Job Name</th>
      <th>Time</th>
      <th>Description</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;
    while ($experience = $stmt1->fetch_assoc()) { ?>

      <tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo $experience['work'] ?></td>
        <td><?php echo $experience['time'] ?></td>
        <td><?php echo $experience['description'] ?></td>
        <td><a href="experienceview.php?id= <?php echo $experience['id_experiences']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="experienceedit.php?idexperience= <?php echo $experience['id_experiences']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a onclick="return Del('<?php echo $experience['work']; ?>')" href="delete.php?idexperience= <?php echo $experience['id_experiences']; ?>" href=""><i class="fa fa-trash" aria-hidden="true"></i></a></td>
      </tr>
    <?php } ?>
  </tbody>
<?php } else { ?>

  <h3>Records Found!</h3> <?php } ?>

</html>