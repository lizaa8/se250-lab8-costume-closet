<?php
//connect to csotume closet database
$conn = mysqli_connect("localhost", "root", "", "costume_closet");
if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

//get the costume loans
$sql = "SELECT id, item, borrower, due_date, returned FROM loans";
$result = mysqli_query($conn, $sql);
?>

<h2>Campus Costume Closet</h2>

<a href="add.php">Add a new loan</a>

<!-- show the loans in a table -->
<table border="1">
  <tr>
    <th>Item</th>
    <th>Borrower</th>
    <th>Due Date</th>
    <th>Returned</th>
    <th></th>
    <th></th>
  </tr>

  <?php while ($row = mysqli_fetch_assoc($result)) { ?>
  <tr>
    <td><?php echo htmlspecialchars($row["item"]); ?></td>
    <td><?php echo htmlspecialchars($row["borrower"]); ?></td>
    <td><?php echo htmlspecialchars($row["due_date"]); ?></td>
    <td><?php echo $row["returned"] ? "Yes" : "No"; ?></td>
    <td><a href="mark_returned.php?id=<?php echo $row["id"]; ?>">Mark returned</a></td>
    <td><a href="delete.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Delete this loan?')">Delete</a></td>
  </tr>
  <?php } ?>
</table>

<?php
//Show a message if the database has no loans
if (mysqli_num_rows($result) == 0) {
    echo "No loans yet. The closet is empty!";
}

//close the database connection
mysqli_close($conn);
?>