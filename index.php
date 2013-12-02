<?php
require 'connect.inc.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!empty($username) && !empty($password)) {
        $query = "SELECT `id` FROM `users_inj` WHERE `username`='".mysql_real_escape_string($username)."' AND `password`='".mysql_real_escape_string($password)."'";
        $query_run = mysql_query($query);
        
        if (mysql_num_rows($query_run) == 1) {
            echo 'Login success.';
        } else {
            echo 'Invalid username/password combination.';
        }
    }
}
?>

<form action="index.php" method="POST">
    Username: <input type="text" name="username" value="" />
    Password: <input type="text" name="password" value="" />
    <input type="submit" value="Submit" />
</form>