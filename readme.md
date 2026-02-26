# PHP Programs

---

## Design a webpage to invert the behavior of the <h1> to <h6> tags using external CSS. Use internal styledefintions to add border colours green, red and blue to h1, h2 and h3 elements respectively. Use inline styledefintions to change font colours of h4, h5 and h6 elements as green, red and blue respectively.

**index.html**

```php
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Headings Style</title>
        <link rel="stylesheet" href="style.css" />
        <style type="text/css">
            h1 {
                border-style: dashed;
                border-color: green;
            }

            h2 {
                border-style: dotted;
                border-color: red;
            }

            h3 {
                border-style: solid;
                border-color: blue;
            }
        </style>
    </head>

    <body>
        <h1>this is Heading 1</h1>
        <h2>this is Heading 2</h2>
        <h3>this is Heading 3</h3>
        <h4 style="color: green;">this is Heading 4</h4>
        <h5 style="color: red;">this is Heading 5</h5>
        <h6 style="color: blue;">this is Heading 6</h6>
    </body>

</html>
```

**style.css**

```php
h1 {
    font-size: 10px;
}

h2 {
    font-size: 13px;
}

h3 {
    font-size: 16px;
}

h4 {
    font-size: 20px;
}

h5 {
    font-size: 24px;
}

h6 {
    font-size: 32px;
}
```

---

## Design a table that displays the details of participants in the arts festival of your college in

a table format.Format the table using CSS. The table should include rows that display the
number of participants for each event just below the rows for a particular event, and the
grand total of the number of all participants for all events as the last row. The table should
have appropriate column headings and page should include proper headings.

**index.html**

```php
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arts Festival Participants</title>
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <div class="container">
            <h1>Arts Festival Participants</h1>
            <table>
                <thead>
                    <tr>
                        <th>Event</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Placement</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="event">
                        <td rowspan="3">Painting</td>
                        <td>John Doe</td>
                        <td>Oil Painting</td>
                        <td>1st Place</td>
                    </tr>
                    <tr class="event">
                        <td>Jane Smith</td>
                        <td>Watercolor</td>
                        <td>2nd Place</td>
                    </tr>
                    <tr class="event">
                        <td>David Brown</td>
                        <td>Acrylic Painting</td>
                        <td>3rd Place</td>
                    </tr>
                    <tr class="total">
                        <td colspan="5">Total Participants: 3</td>
                    </tr>
                    <tr class="event">
                        <td rowspan="2">Sculpture</td>
                        <td>Michael Johnson</td>
                        <td>Stone Carving</td>
                        <td>1st Place</td>
                    </tr>
                    <tr class="event">
                        <td>Sarah White</td>
                        <td>Metal Sculpture</td>
                        <td>2nd Place</td>
                    </tr>
                    <tr class="total">
                        <td colspan="5">Total Participants: 2</td>
                    </tr>
                    <tr class="grand-total">
                        <td colspan="5">Grand Total Participants: 5</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>

</html>
```

**style.css**

```php
.container {
    margin: 20px auto;
    width: 80%;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th,
td {
    border: 1px solid grey;
    padding: 8px;
    text-align: left;
}

th {
    background-color: yellow;
}

.event {
    background-color: cyan;
}

.total,
.grand-total {
    font-weight: bold;
}

.grand-total {
    background-color: grey;
}
```

---

## Fruits List

Design an HTML page to display a list of fruits (at least 7 fruits) in a list box and a sumit
button with caption Select Fruit so that a user can select his/her favourite fruit. Design
another HTML page that displaythe name of the fruit selected by the user by using an
embedded PHP script. This HTML page should also display a hyper link which will navigate
the user back to the fruit selection page.

**fruits.html**

```php
<!DOCTYPE html>
<html>

    <head>
        <title>Fruits Selection</title>
    </head>

    <body>

        <h2>Select Your Favorite Fruit</h2>

        <form action="displayfruit.php" method="post">
            <select name="fruit" size="7">
                <option>Apple</option>
                <option>Mango</option>
                <option>Banana</option>
                <option>Orange</option>
                <option>Pineapple</option>
                <option>Grapes</option>
                <option>Watermelon</option>
            </select>
            <br><br>
            <input type="submit" value="Select Fruit">
        </form>

    </body>

</html>
```

**displayfruit.php**

```php
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
```

---

## Session Handling using PHP:

Design a PHP page to implement a login screen using sessions. Login details are to be
verified from theserver side with values stored in a database.

**welcome.php**

```php
<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Welcome</title>
</head>

<body>

    <h2>Welcome <?php echo $_SESSION['user']; ?></h2>
    <p>You have successfully logged in.</p>

    <a href="logout.php">Logout</a>

</body>

</html>
```

**login.php**

```php
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "123", "authdb");

if (!$conn) {
    die("Database connection failed");
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users
              WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['user'] = $username;
        header("Location: welcome.php");
    } else {
        echo "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>

    <h2>Login</h2>

    <form method="post">
        Username:
        <input type="text" name="username" required><br><br>

        Password:
        <input type="password" name="password" required><br><br>

        <input type="submit" name="login" value="Login">
    </form>

</body>

</html>
```

**logout.php**

```php
<?php
session_start();
session_destroy();
header("Location: login.php");
```

---

## Update / Delete data in a table using PHP:

Create a table accounts with columns accountno, name and amount. Write a php program for delete andupdate operation on account table.

**accounts.php**

```php
<!DOCTYPE html>
<html>

<head>
    <title>Account Operations</title>
</head>

<body>

    <h2>Update / Delete Account</h2>

    <form method="post">
        Account No:
        <input type="number" name="accountno" required><br><br>

        Name:
        <input type="text" name="name"><br><br>

        Amount:
        <input type="number" step="0.01" name="amount"><br><br>

        <input type="submit" name="update" value="Update">
        <input type="submit" name="delete" value="Delete">
    </form>

    <hr>

    <?php
    $conn = mysqli_connect("localhost", "root", "123", "bank");

    if (!$conn) {
        die("Connection failed");
    }

    /* UPDATE OPERATION */
    if (isset($_POST['update'])) {
        $accountno = $_POST['accountno'];
        $name = $_POST['name'];
        $amount = $_POST['amount'];

        $update = "UPDATE accounts
               SET name='$name', amount='$amount'
               WHERE accountno=$accountno";

        if (mysqli_query($conn, $update)) {
            echo "Account updated successfully<br>";
        }
    }

    /* DELETE OPERATION */
    if (isset($_POST['delete'])) {
        $accountno = $_POST['accountno'];

        $delete = "DELETE FROM accounts WHERE accountno=$accountno";

        if (mysqli_query($conn, $delete)) {
            echo "Account deleted successfully<br>";
        }
    }

    /* DISPLAY TABLE */
    $result = mysqli_query($conn, "SELECT * FROM accounts");

    echo "<h3>Account Details</h3>";
    echo "<table border='1' cellpadding='10'>
        <tr>
            <th>Account No</th>
            <th>Name</th>
            <th>Amount</th>
        </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$row['accountno']}</td>
            <td>{$row['name']}</td>
            <td>{$row['amount']}</td>
          </tr>";
    }

    echo "</table>";

    mysqli_close($conn);
    ?>

</body>

</html>
```

---

## Write JavaScript code to find the area and circumference of a circle.

**area-and-circumference.html**

```php
<!-- Write JavaScript code to find the area and circumference of a circle. -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Area of Circumference</title>
    </head>

    <body>
        <h3>Area and Circumference</h3>
        Enter the radius of the circle:
        <input type="number" name="radius" />
        <br />
        <button onclick="calculate()">Get Area</button>
        <br /><br />
        <p id="output"></p>
        <script type="text/javascript">
            function calculate() {
                let radius = document.getElementsByName("radius")[0].value;
                if (isNaN(radius)) return alert("Enter a number");
                let area = Math.PI * radius * radius;
                let circumference = 2 * Math.PI * radius;
                document.getElementById("output").innerText = `Area of ${radius} is ${area}\n`;
                document.getElementById("output").innerText += `Circumference of ${radius} is ${circumference}\n`;
            }
        </script>
    </body>

</html>
```

---

## Basic Calculator using JavaScript:

Design a form that accepts two integers with four buttons with captions Add, Subtract, Multiply,
Divide. Include JavaScript code to perform addition, subtraction, multiplication and dividision
of the given numbers when these buttons are clicked. Use output element to display the results.
Use field sets and legends to

**calculator.html**

```php
<!-- Design a form that accepts two integers. Provide 4 buttons for Add, Subtract, Multiply,
Divide. Add JavaScript program to add, subtract, multiply and divide the given numbers
when these buttons are clicked. Use output element to display the results. -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculator</title>
    </head>

    <body>
        <h3>Calculator</h3>
        <form name="calculator">
            Number 1: <input type="number" name="num1" />
            <br />
            Number 2: <input type="number" name="num2" />
            <br /><br />
            <button type="button" onclick="calculate('add')">Add</button>
            <button type="button" onclick="calculate('subtract')">Subtract</button>
            <button type="button" onclick="calculate('multiply')">Multiply</button>
            <button type="button" onclick="calculate('divide')">Divide</button>
            <br /><br />
            Output: <output name="output">Select one option</output>
        </form>

        <script type="text/javascript">
            function calculate(operation) {
                let num1 = Number(calculator.num1.value), num2 = Number(calculator.num2.value);
                if (!num1 || !num2) return alert("Enter numbers");
                let result;
                switch (operation) {
                    case 'add': result = num1 + num2; break;
                    case 'subtract': result = num1 - num2; break;
                    case 'multiply': result = num1 * num2; break;
                    case 'divide': result = (num2 === 0) ? 'Cannot divide by zero' : num1 / num2; break;
                    default: result = 'Invalid operation';
                }
                calculator.output.value = result;
            }
        </script>
    </body>

</html>
```

---

## Timer Events: Design a webpage that displays a digital clock using JavaScript.

**clock.html**

```php
<!-- Write a JavaScript program to create clock with a timing event. -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Clock</title>

        <style>
            body {
                text-align: center;
                padding: 40vh 0;
                font-size: 5rem;
            }
        </style>
    </head>

    <body onload="setClock()">
        <span id="clock"></span>

        <script type="text/javascript">
            function setClock() {
                setInterval(() => document.getElementById("clock").textContent = new Date().toLocaleTimeString(), 1000);
            }
        </script>
    </body>

</html>
```

---

## Write a JavaScript program to store different colors in an array and change thebackground color of the pageusing this array elements

**colors-array.html**

```php
<!-- Write a JavaScript program to store different colors in an array
and change the background color of the page using this array elements -->

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Colors Array</title>
    </head>

    <body>
        <h3>Change background color</h3>
        <h4>Select a color</h4>

        <div id="buttons">
            <button onclick="changeBgColor('')">RESET</button>
        </div>

        <script type="text/javascript">
            const colors = ["red", "blue", "green", "yellow", "cyan"];
            const buttons = document.getElementById("buttons");
            for (const color of colors)
                buttons.innerHTML += `<button onclick="changeBgColor('${color}')">${color.toUpperCase()}</button>&nbsp;`;
            const changeBgColor = (color) => document.body.style.backgroundColor = color;
        </script>
    </body>

</html>
```

---

## Form submission and processing:

Design an HTML page that includes a form containing an input element of text type and
accepts a numberas input and a submit button with caption Generate Fibonacci Series.
Include PHP scripts in the HTML pageso that, when the user clicks the submit button,
Fibonacci series up to the number entered by the user is displayed.

**fibonacci.php**

```php
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
```

---

## Design a simple image gallery using CSS and JavaScript.

**image-gallery.html**

```php
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Image Gallery</title>
        <style>
            h1 {
                text-align: center;
                text-decoration: underline;
            }

            #gallery {
                margin: 2rem 4rem;
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                gap: 2rem;
                justify-content: center;
                align-items: center;
            }

            #gallery>img {
                width: 300px;
                height: 300px;
                border-radius: 10px;
            }
        </style>
    </head>

    <body>
        <h1>Image Gallery</h1>
        <div id="gallery"></div>
    </body>
    <script>
        let images = ["img.png", "img.png", "img.png", "img.png", "img.png", "img.png"];
        for (image of images) {
            document.getElementById("gallery").innerHTML += `<img src=${image} alt='Image' />`
        }
    </script>

</html>
```

---

## File Upload using PHP:

Design a PHP page to illustrate the use of file upload \E2\80\93 for uploading files of a specified type
with a specifiedsize to the webserver.

**file-upload.php**

```php
<!DOCTYPE html>
<html>

<head>
    <title>File Upload</title>
</head>

<body>
    <h2>Upload a File</h2>
    <!-- File Upload Form -->
    <form action="" method="post" enctype="multipart/form-data">
        Select file to upload:<br><br>
        <input type="file" name="myfile" required>
        <br><br>
        <input type="submit" name="upload" value="Upload File">
    </form>
    <hr>
</body>

</html>

<?php
// When the form is submitted
if (isset($_POST["upload"])) {

    // Allowed file types (you can change these)
    $allowedTypes = ["image/jpeg", "image/png", "application/pdf"];

    // Maximum file size (in bytes) – here: 2MB
    $maxSize = 2 * 1024 * 1024;

    $file = $_FILES["myfile"];
    $fileName = $file["name"];
    $fileType = $file["type"];
    $fileSize = $file["size"];
    $tmpName  = $file["tmp_name"];

    // Validation
    if (!in_array($fileType, $allowedTypes)) echo "<p style='color:red;'>Error: Only JPEG, PNG, or PDF files are allowed.</p>";
    elseif ($fileSize > $maxSize) echo "<p style='color:red;'>Error: File size must be less than 2MB.</p>";
    else {
        // Move file to server folder named uploads
        if (!is_dir("uploads")) mkdir("uploads", 0777, true);
        $dest = "uploads/" . basename($fileName);
        if (move_uploaded_file($tmpName, $dest)) {
            echo "<p style='color:green;'>File uploaded successfully!</p>";
            echo "<p>Stored as: $dest</p>";
        } else echo "<p style='color:red;'>Error uploading file.</p>";
    }
}
?>
```

---

## Write JavaScript code to check whether a given number is perfect, abundant or deficient. Use alert box todisplay the output.

**perfect-abundant-deficient.html**

```php
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perfect, Abundant or Deficient</title>
    </head>

    <body>
        <h3>Perfect, Abundant or Deficient</h3>
        <form onsubmit="check()">
            <label>Enter a number:</label>
            <input id="number" type="number">
            <input type="submit" />
        </form>
        <script>
            function check() {
                let number = parseInt(document.getElementById("number").value);
                if (isNaN(number) || number <= 0) {
                    alert("Please enter a positive integer.");
                    return;
                }
                let sum = 0;
                for (let i = 1; i < number; i++) {
                    if (number % i === 0) sum += i;
                }
                let result = number + " is a ";
                if (sum === number) result += "Perfect number";
                else if (sum > number) result += "Abundant number";
                else result += "Deficient number";
                alert(result);
            }
        </script>
    </body>

</html>
```

---

## Store date and time in a cookie

Write php script to store current date/time in a cookie and display
the last visited date time on the web page upon opening/reopening of the page.
Dislpay a message you are visiting this page for the first time if it is so.
Otherwise display the last visited date and time.

**last-visit.php**

```php
<?php
// Name of cookie
$cookie_name = "lastVisit";

// Check if cookie exists
if (isset($_COOKIE[$cookie_name])) {
    $lastVisit = $_COOKIE[$cookie_name];
    echo "<h3>Your last visit was on: $lastVisit</h3>";
} else {
    echo "<h3>You are visiting this page for the first time.</h3>";
}

// Store current date & time in cookie (valid for 1 year)
$currentDate = date("d-m-Y H:i:s");
setcookie($cookie_name, $currentDate, time() + (365 * 24 * 60 * 60));
```

---

## Basic login script using PHP:

Create a login page using database.

**login.php**

```php
<?php
$conn = mysqli_connect("localhost", "root", "123", "sadanam");

if (isset($_POST['login'])) {
    $u = $_POST['username'];
    $p = $_POST['password'];

    $q = mysqli_query(
        $conn,
        "SELECT * FROM users WHERE username='$u' AND password='$p'"
    );

    if (mysqli_num_rows($q) == 1)
        echo "Login success";
    else
        echo "Invalid login";
}
?>

<form method="post">
    <input name="username" placeholder="Username" required>
    <input name="password" type="password" placeholder="Password" required>
    <button name="login">Login</button>
</form>
```

---

## Insert data into a table and Fetch and display data from a table using PHP:

Create a table products with columns itemcode, itemname, unitprice. Design an HTML
page for acceptinguser input for itemcode, itemname and unit price with submit and refresh
buttons. Include PHP script in thepage to insert the data submitted by the user into the table
and display all the rows in the product table in a tabular format.

**products.php**

```php
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
```

---

## Design a web page that displays your resume with your photograph (without using tables), in a neat format.Use internal CSS to format the content.

**resume.html**

```php
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Resume</title>
        <style>
            body {
                margin: 20px;
            }

            .box {
                width: 300px;
                padding: 15px;
                border: 1px solid #555;
                border-radius: 8px;
            }

            img {
                width: 120px;
                height: 120px;
                border-radius: 10px;
                margin-bottom: 10px;
            }

            h2 {
                margin: 5px 0;
            }

            ul {
                list-style-type: none;
            }
        </style>
    </head>

    <body>

        <div class="box">
            <img src="img.png" alt="My Photo">
            <h2>Bio Data</h2>
            Name: Rahul<br />
            Age: 20<br />
            Course: Engineering<br />
            Email: rahul@mail.com<br />
            Address: Ottappalam, Kerala, India<br />
        </div>

    </body>

</html>
```

---

## Print Salary

Design an HTML page that includes a form containing input elements
for accepting name, basic salaryand designation of an employee and a
submit button with caption Print Salary. Include PHP script in the HTML page
to calculate and display net salary based on the following conditions.

Designation - Conveyance allowance - Extra allowance
Manager - 1000 - 500
Supervisor - 750 - 200
Clerk - 500 - 100
Peon - 250

HRA=25% of basic salary
Gross=basic salary +HRA + conveyance + extra

Income Tax
Gross<=2500 => 0%
2500<gross<=4000 => 3%
4000<gross<=5000 => 5%
gross > 5000 => 8%

Net = Gross – Income Tax

**salary.php**

```php
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
```

---

## Query a table in a database using PHP:

Create a table students with columns rollno, name, mark, grade. Insert at least 7 rows in the
table. Write aPHP script to display the mark list of a student by accepting the rollno of the
student.

**students-table.php**

```php
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
```

---

## Write a JavaScript program to find all years in which 1st January is a Sunday between a given range (eg:- between 2010 and 2017).

**sundays.html**

```php
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sundays</title>
    </head>

    <body>
        Enter two years to find all years between them in which January 1 falls on a Sunday.
        <br /><br />
        Year 1: <input type="number" id="year1" />
        &nbsp;&nbsp;&nbsp;&nbsp;
        Year 2: <input type="number" id="year2" />
        <br /><br /><button onclick="getYears()">Get Years</button>
        <p id="years"></p>

        <script type="text/javascript">
            function getYears() {
                let year1 = Number(document.getElementById("year1").value)
                let year2 = Number(document.getElementById("year2").value)
                if (year1 > year2) return alert("Enter valid years.");
                let yearsElement = document.getElementById("years");
                years.innerHTML = "<br>";
                for (let year = year1; year <= year2; year++) {
                    var day = new Date(year, 0, 1);
                    if (day.getDay() === 0) yearsElement.innerHTML += "<br>" + year;
                }
            }
        </script>
    </body>

</html>
```

---

## Write JavaScript code for form validation in a web page with the following form controls:

(i) Input controls: single-line text, password, multi-line text
(ii) Buttons: submit and reset.

**validation.html**

```php
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Password Validation</title>
        <script>
            function validateForm() {
                const name1 = document.getElementById("fname").value;
                const name2 = document.getElementById("lname").value;
                const pw1 = document.getElementById("pswd1").value;
                const pw2 = document.getElementById("pswd2").value;

                // First name validation
                if (name1 == "") {
                    document.getElementById("blankMsg").innerHTML = "**Fill the first name";
                    return false;
                }
                if (!isNaN(name1)) {
                    document.getElementById("blankMsg").innerHTML = "**Only characters are allowed";
                    return false;
                }

                // Last name validation
                if (!isNaN(name2)) {
                    document.getElementById("charMsg").innerHTML = "**Only characters are allowed";
                    return false;
                }

                // Password validation
                if (pw1 == "") {
                    document.getElementById("message1").innerHTML = "**Fill the password please!";
                    return false;
                }
                if (pw2 == "") {
                    document.getElementById("message2").innerHTML = "**Enter the password please!";
                    return false;
                }

                if (pw1.length < 8) {
                    document.getElementById("message1").innerHTML = "**Password length must be at least 8 characters";
                    return false;
                }

                if (pw1.length > 15) {
                    document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";
                    return false;
                }

                if (pw1 != pw2) {
                    document.getElementById("message2").innerHTML = "**Passwords are not same";
                    return false;
                }
                alert("Your password created successfully");
                document.write("JavaScript form has been submitted successfully!");
            }
        </script>
    </head>

    <body>
        <h1 style="color:green">Account</h1>
        <h3>Password validation</h3>

        <form onsubmit="return validateForm()">
            <table>
                <tr>
                    <td>First Name*</td>
                    <td><input type="text" id="fname"></td>
                    <td><span id="blankMsg" style="color:red"></span></td>
                </tr>

                <tr>
                    <td>Last Name*</td>
                    <td><input type="text" id="lname"></td>
                    <td><span id="charMsg" style="color:red"></span></td>
                </tr>

                <tr>
                    <td>Create Password*</td>
                    <td><input type="password" id="pswd1"></td>
                    <td><span id="message1" style="color:red"></span></td>
                </tr>

                <tr>
                    <td>Confirm Password*</td>
                    <td><input type="password" id="pswd2"></td>
                    <td><span id="message2" style="color:red"></span></td>
                </tr>

                <tr>
                    <td><input type="submit" value="Submit"></td>
                    <td><button type="reset" value="Reset">Reset</button></td>
                </tr>
            </table>
        </form>

    </body>

</html>
```

---
