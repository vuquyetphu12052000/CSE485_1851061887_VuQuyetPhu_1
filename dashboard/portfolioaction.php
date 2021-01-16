<?php
require("../db/connect.php");


if (isset($_POST['query'])) {
  $search = $_POST['query'];
  $stmt1 = mysqli_query($conn, "SELECT * FROM portfolios WHERE portfolio_name LIKE '%$search%'");
  // $stmt->bind_param("ss",$search);
} else {
  $stmt1 = mysqli_query($conn, "SELECT * FROM portfolios");
}

?>
<html>

<!-- blog -->

<?php if (mysqli_num_rows($stmt1) > 0) { ?>
  <thead>
    <tr>
      <th>S No.</th>
      <th>Portfolio Name</th>
      <th>Image</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;
    while ($portfolio = $stmt1->fetch_assoc()) { ?>

      <tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo $portfolio['portfolio_name'] ?></td>
        <td>
          <img style="width: 100px; height: 50px;" src="<?php echo 'data:image/png;base64,', ($portfolio['image']); ?>" alt="">
        </td>

        <td><a href="portfolioview.php?id=<?php echo $portfolio['id'] ?>"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="portfolioedit.php?idportfolio=<?php echo $portfolio['id'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a onclick="return Del('<?php echo $portfolio['portfolio_name']; ?>')" href="delete.php?idportfolio=<?php echo $portfolio['id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
      </tr>
    <?php } ?>
  </tbody>
<?php } else { ?>

  <h3>Records Found!</h3> <?php } ?>

</html>