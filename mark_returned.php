<?php
//connect to costume closet database
$conn = mysqli_connect("localhost", "root", "", "costume_closet");

//get loan ID from the link
$id = (int) $_GET["id"];

//mark the selected costume as returned
mysqli_query($conn, "UPDATE loans SET returned = 1 WHERE id = $id");

//go back to loan list
header("Location: list.php");
exit;
?>