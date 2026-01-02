<!DOCTYPE html>
<html>

<head>
    <title>Account Operations</title>
</head>

<body>

    <h2>Update / Delete Account</h2>

    <form method="post">
        Account No:
        <input type="number" name="accountno" required><br><br>

        Name:
        <input type="text" name="name"><br><br>

        Amount:
        <input type="number" step="0.01" name="amount"><br><br>

        <input type="submit" name="update" value="Update">
        <input type="submit" name="delete" value="Delete">
    </form>

    <hr>

    <?php
    $conn = mysqli_connect("localhost", "root", "123", "bank");

    if (!$conn) {
        die("Connection failed");
    }

    /* UPDATE OPERATION */
    if (isset($_POST['update'])) {
        $accountno = $_POST['accountno'];
        $name = $_POST['name'];
        $amount = $_POST['amount'];

        $update = "UPDATE accounts 
               SET name='$name', amount='$amount' 
               WHERE accountno=$accountno";

        if (mysqli_query($conn, $update)) {
            echo "Account updated successfully<br>";
        }
    }

    /* DELETE OPERATION */
    if (isset($_POST['delete'])) {
        $accountno = $_POST['accountno'];

        $delete = "DELETE FROM accounts WHERE accountno=$accountno";

        if (mysqli_query($conn, $delete)) {
            echo "Account deleted successfully<br>";
        }
    }

    /* DISPLAY TABLE */
    $result = mysqli_query($conn, "SELECT * FROM accounts");

    echo "<h3>Account Details</h3>";
    echo "<table border='1' cellpadding='10'>
        <tr>
            <th>Account No</th>
            <th>Name</th>
            <th>Amount</th>
        </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$row['accountno']}</td>
            <td>{$row['name']}</td>
            <td>{$row['amount']}</td>
          </tr>";
    }

    echo "</table>";

    mysqli_close($conn);
    ?>

</body>

</html>