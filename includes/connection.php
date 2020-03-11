<?php
$host_name = 'db5000319364.hosting-data.io';
$database = 'dbs311509';
$user_name = 'dbu579861';
$password = 'Macjames050598.';
$conn = mysqli_connect($host_name, $database, $user_name, $password);

if (!conn) {
    die("Connection failed: ".msqli_connect_error());
}
?>