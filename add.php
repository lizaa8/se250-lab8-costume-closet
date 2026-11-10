<?php
//check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //connect to the database
    $conn = mysqli_connect("localhost", "root", "", "costume_closet");
    if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

    //get information from the form
    $item = $_POST["item"];
    $borrower = $_POST["borrower"];
    $due_date = $_POST["due_date"];

    //add the loan using a prepared statement
    $stmt = mysqli_prepare($conn,
        "INSERT INTO loans (item, borrower, due_date) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sss", $item, $borrower, $due_date);
    mysqli_stmt_execute($stmt);

    //go back to list
    header("Location: list.php");
    exit;
}
?>

<h2>Add a Costume Loan</h2>

<!-- Form to add a new costume loan -->
<form action="add.php" method="post">
    Item: <input type="text" name="item" maxlength="60" required>
    <p>
    Borrower: <input type="text" name="borrower" maxlength="60" required>
    <p>
    Due Date: <input type="date" name="due_date">
    <p>
    <input type="submit" value="Add loan">
</form>

<a href="list.php">Back to loans</a>