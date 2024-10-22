<?php
$con = mysqli_connect(
    'db', # service name
    'php_docker', # username
    'password', # password
    'php_docker' # db name
);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}