<!DOCTYPE html>
<html>

<head>
    <title>Product Entry</title>
</head>

<body>

    <h2>Enter Product Details</h2>

    <form method="post">
        Item Code:
        <input type="number" name="itemcode" required><br><br>

        Item Name:
        <input type="text" name="itemname" required><br><br>

        Unit Price:
        <input type="number" step="0.01" name="unitprice" required><br><br>

        <input type="submit" name="submit" value="Submit">
        <input type="reset" value="Refresh">
    </form>

    <hr>

    <?php
    $conn = mysqli_connect("localhost", "root", "123", "shop");

    if (!$conn) {
        die("Database connection failed");
    }

    /* Insert Data */
    if (isset($_POST['submit'])) {
        $itemcode  = $_POST['itemcode'];
        $itemname  = $_POST['itemname'];
        $unitprice = $_POST['unitprice'];

        $insert = "INSERT INTO products VALUES ('$itemcode','$itemname','$unitprice')";
        mysqli_query($conn, $insert);
    }

    /* Fetch & Display Data */
    $result = mysqli_query($conn, "SELECT * FROM products");

    echo "<h2>Product List</h2>";
    echo "<table border='1' cellpadding='10'>
        <tr>
            <th>Item Code</th>
            <th>Item Name</th>
            <th>Unit Price</th>
        </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$row['itemcode']}</td>
            <td>{$row['itemname']}</td>
            <td>{$row['unitprice']}</td>
          </tr>";
    }

    echo "</table>";

    mysqli_close($conn);
    ?>

</body>

</html>