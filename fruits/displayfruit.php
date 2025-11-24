<!DOCTYPE html>
<html>

<head>
    <title>Selected Fruit</title>
</head>

<body>

    <?php
    if (isset($_POST["fruit"])) {
        $fruit = $_POST["fruit"];
        echo "<h2>You selected: <u>$fruit</u></h2>";
    } else {
        echo "<h2>No fruit selected!</h2>";
    }
    ?>

    <br>
    <a href="fruits.html">Go Back to Fruit Selection</a>

</body>

</html>