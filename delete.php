<?php
//connect to costume closet database
$conn = mysqli_connect("localhost", "root", "", "costume_closet");

//get loan ID from the link
$id = (int) $_GET["id"];

//delete only the selected loan
mysqli_query($conn, "DELETE FROM loans WHERE id = $id");

//go back to the loan list
header("Location: list.php");
exit;
?>