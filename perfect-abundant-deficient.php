<!-- Check Whether a given number is Perfect, Abundant or Deficient. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfect, Abundant or Deficient</title>
</head>

<body>
    <h3>Perfect, Abundant or Deficient</h3>
    <form action="" method="POST">
        <label>Enter a number:</label>
        <input type="number" name="number">
        <input type="submit" />
    </form>
</body>

</html>

<?php
if ($_POST) {
    $number = $_POST["number"];
    $sum = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) $sum += $i;
    }
    echo "$number is a ";
    if ($sum == $number) echo "Perfect number";
    elseif ($sum > $number) echo "Abundant number";
    else echo "Deficient number";
}
?>