<?php
require("../db/connect.php");


if (isset($_POST['query'])) {
  $search = $_POST['query'];
  $stmt1 = mysqli_query($conn, "SELECT * FROM skills WHERE skill_name LIKE '%$search%'");
  // $stmt->bind_param("ss",$search);
} else {
  $stmt1 = mysqli_query($conn, "SELECT * FROM skills");
}

?>
<html>

<!-- blog -->

<?php if (mysqli_num_rows($stmt1) > 0) { ?>
  <thead>
    <tr>
      <th>S No.</th>
      <th>Skill Name</th>
      <th>Degree</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;
    while ($skill = $stmt1->fetch_assoc()) { ?>

      <tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo $skill['skill_name'] ?></td>
        <td><?php echo $skill['level_skill'] ?></td>
        <td><a href="skillview.php?id=<?php echo $skill['id_skill'] ?>"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="skilledit.php?idskill=<?php echo $skill['id_skill'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a onclick="return Del('<?php echo $skill['skill_name']; ?>')" href="delete.php?idskill=<?php echo $skill['id_skill'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
      </tr>
    <?php } ?>
  </tbody>
<?php } else { ?>

  <h3>Records Found!</h3> <?php } ?>

</html>