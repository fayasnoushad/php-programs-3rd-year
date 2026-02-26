
<!DOCTYPE html>
<html>

<head>
    <title>Employee Salary Calculation</title>
</head>

<body>

    <h2>Employee Salary Calculation</h2>

    <form method="post">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Basic Salary:</label><br>
        <input type="number" name="basic" required><br><br>

        <label>Designation:</label><br>
        <select name="designation" required>
            <option value="manager">Manager</option>
            <option value="supervisor">Supervisor</option>
            <option value="clerk">Clerk</option>
            <option value="peon">Peon</option>
        </select><br><br>

        <input type="submit" value="Calculate Salary">
    </form>

    <hr>


</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $basic = $_POST["basic"];
    $designation = $_POST["designation"];

    // Allowances based on designation
    $conveyance = 0;
    $extra = 0;

    switch ($designation) {
        case "manager":
            $conveyance = 1000;
            $extra = 500;
            break;

        case "supervisor":
            $conveyance = 750;
            $extra = 200;
            break;

        case "clerk":
            $conveyance = 500;
            $extra = 100;
            break;

        case "peon":
            $conveyance = 250;
            $extra = 0;
            break;
    }

    // HRA = 25%
    $hra = 0.25 * $basic;

    // Gross Salary
    $gross = $basic + $hra + $conveyance + $extra;

    // Income Tax Calculation
    if ($gross <= 2500) {
        $tax = 0;
    } elseif ($gross <= 4000) {
        $tax = 0.03 * $gross;
    } elseif ($gross <= 5000) {
        $tax = 0.05 * $gross;
    } else {
        $tax = 0.08 * $gross;
    }

    // Net Salary
    $net = $gross - $tax;

    echo "<h3>Salary Details</h3>";
    echo "Name: $name<br>";
    echo "Designation: $designation<br><br>";

    echo "Basic Salary: ₹$basic<br>";
    echo "HRA (25%): ₹$hra<br>";
    echo "Conveyance Allowance: ₹$conveyance<br>";
    echo "Extra Allowance: ₹$extra<br><br>";

    echo "<strong>Gross Salary: ₹$gross</strong><br>";
    echo "Income Tax: ₹$tax<br><br>";

    echo "<strong>Net Salary: ₹$net</strong>";
}
?>