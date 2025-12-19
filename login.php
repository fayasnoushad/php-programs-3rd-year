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