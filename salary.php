<!-- Design an HTML page that includes a form containing input elements
for accepting name, basic salaryand designation of an employee and a
submit button with caption Print Salary. Include PHP script in the HTML page
to calculate and display net salary based on the following conditions. -->

<!-- Assumed Conditions
DA = 40% of basic
HRA = 20% of basic
PF = 12% of basic
Net Salary = Basic + DA + HRA – PF -->

<!DOCTYPE html>
<html>

<head>
    <title>Employee Salary Calculator</title>
    <style>
        body {
            margin: 40px;
        }

        form {
            border: 1px solid black;
            padding: 10px;
            width: 500px;
        }
    </style>
</head>

<body>

    <h2>Employee Salary Calculator</h2>

    <form method="post">
        <label>Employee Name:</label>
        <input type="text" name="name" required>
        <br /><br />
        <label>Basic Salary:</label>
        <input type="number" name="basic" required>
        <br /><br />
        <label>Designation:</label>
        <input type="text" name="designation" required>
        <br /><br />
        <input type="submit" value="Print Salary">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST["name"];
        $basic = $_POST["basic"];
        $designation = $_POST["designation"];

        // Salary calculations (you can change the conditions)
        $da  = 0.40 * $basic;   // 40% DA
        $hra = 0.20 * $basic;   // 20% HRA
        $pf  = 0.12 * $basic;   // 12% PF
        $net = $basic + $da + $hra - $pf;

        echo "<h3>Salary Details</h3>";
        echo "Name: $name<br>";
        echo "Designation: $designation<br>";
        echo "Basic Salary: $basic INR<br>";
        echo "DA (40%): $da INR<br>";
        echo "HRA (20%): $hra INR<br>";
        echo "PF (12%): -$pf INR<br><br>";
        echo "<strong>Net Salary: $net INR</strong>";
    }
    ?>

</body>

</html>