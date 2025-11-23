<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resume</title>
    </head>

    <body>
        <h1>Resume Details</h1>
        <form action="" method="post">
            Name: <input type="text" name="name" /><br />
            Age: <input type="number" name="age" /><br />
            Phone Number: <input type="number" name="phone" /><br />
            Email Address: <input type="email" name="email" /><br />
            Address: <textarea name="address"></textarea><br /><br /><br />
            <input type="submit" value="Submit Data" />
        </form>
    </body>

</html>

<?php
if ($_POST) {
    echo "<h1>Biodata</h1>";
    echo "Name: " . $_POST["name"] . "<br/>";
    echo "Age: " . $_POST["age"] . "<br/>";
    echo "Phone Number: " . $_POST["phone"] . "<br/>";
    echo "Email: " . $_POST["email"] . "<br/>";
}
?>