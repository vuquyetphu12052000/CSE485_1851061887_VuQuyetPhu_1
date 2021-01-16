<?php
require("../db/connect.php");


if (isset($_POST['query'])) {
  $search = $_POST['query'];
  $stmt1 = mysqli_query($conn, "SELECT * FROM blog WHERE blog_name LIKE '%$search%'");
  // $stmt->bind_param("ss",$search);
} else {
  $stmt1 = mysqli_query($conn, "SELECT * FROM blog");
}

?>
<html>

<!-- blog -->

<?php if (mysqli_num_rows($stmt1) > 0) { ?>
  <thead>
    <tr>
      <th>S No.</th>
      <th>Blog Name</th>
      <th>Date</th>
      <th>Image</th>
      <th>Description</th>
      <th>Tag</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;
    while ($blog = $stmt1->fetch_assoc()) { ?>

      <tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo $blog['blog_name'] ?></td>
        <td><?php echo $blog['date'] ?></td>
        <td>
          <img style="width: 100px; height: 50px;" src="<?php echo "data:image/png;base64,", ($blog['image']); ?>" alt="">
        </td>
        <td><?php echo $blog['description_short'] ?></td>
        <td><?php echo $blog['tag'] ?></td>
        <td><a href="blogview.php?id=<?php echo $blog['id_blog'] ?>"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="editblog.php?id=<?php echo $blog['id_blog'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a onclick="return Del('<?php echo $blog['blog_name']; ?>')" href="delete.php?id=<?php echo $blog['id_blog'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
      </tr>
    <?php } ?>
  </tbody>
<?php } else { ?>

  <h3>Records Found!</h3> <?php } ?>

</html>