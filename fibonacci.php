<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series</title>
</head>

<body>
    <h1>Fibonacci Series</h1>
    <form method="post">
        <label for="number">Enter a number: </label>
        <input type="number" name="number" />
        <input type="submit" value="Get Series" />
    </form>
</body>

</html>

<?php
if ($_POST) {
    $number = $_POST['number'];
    echo 'Fibonacci Series: ';
    $first = 0;
    $second = 1;
    $next;
    while ($number > -1) {
        echo "$first ";
        $next = $first + $second;
        $first = $second;
        $second = $next;
        $number--;
    }
}
?>