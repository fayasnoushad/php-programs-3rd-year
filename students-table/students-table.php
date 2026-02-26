<?php
$conn = mysqli_connect("localhost", "root", "123", "school");

if (!$conn) {
    die("Connection failed");
}

if (isset($_POST['rollno'])) {
    $rollno = $_POST['rollno'];

    $query = "SELECT * FROM students WHERE rollno = $rollno";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo "<h3>Student Mark List</h3>";
        echo "Roll No : " . $row['rollno'] . "<br>";
        echo "Name : " . $row['name'] . "<br>";
        echo "Mark : " . $row['mark'] . "<br>";
        echo "Grade : " . $row['grade'];
    } else {
        echo "No student found with Roll No $rollno";
    }
}
?>

<form method="post">
    Enter Roll No:
    <input type="number" name="rollno" required>
    <input type="submit" value="Show Mark List">
</form>