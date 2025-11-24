<!-- Write php script to store current date/time in a cookie and display
the last visited date time on the web page upon opening/reopening of the page.
Dislpay a message you are visiting this page for the first time if it is so.
Otherwise display the last visited date and time. -->

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
