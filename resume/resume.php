<?php
if ($_POST) {
    echo "<h1>Biodata</h1>";
    echo "Name: " . $_POST["name"] . "<br/>";
    echo "Age: " . $_POST["age"] . "<br/>";
    echo "Phone Number: " . $_POST["phone"] . "<br/>";
    echo "Email: " . $_POST["email"] . "<br/>";
}
?>