<?php
$servername = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'loginsys01';
$port = 3308;

$connection = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName,$port);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}