<!-- Design an HTML page that includes a form containing an input element of text type
and accepts a numberas input and a submit button with caption Generate Fibonacci Series.
Include PHP scripts in the HTML page so that, when the user clicks the submit button,
Fibonacci series up to the number entered by the user is displayed.-->

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
        <input type="text" name="number" />
        <input type="submit" value="Get Fibonacci Series" />
    </form>
</body>

</html>

<?php
if ($_POST) {
    $number = $_POST['number'];
    if (!is_numeric($number)) {
        echo 'Enter a number';
        return;
    }
    echo 'Fibonacci Series: ';
    $first = 0;
    $second = 1;
    $next;
    while ($first < $number) {
        echo "$first ";
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}
?>