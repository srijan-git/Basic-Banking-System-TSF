<?php
$host = "localhost";
$database = "sparks_bank";
$username = "root";
$password = "";

// $conn = mysqli_connect('shareddb-x.hosting.stackcp.net', 'shivangi', '12345678@', 'malyaraaj-313537e38d');

$conn = mysqli_connect("$host", "$username", "$password", "$database");

if (!$conn) {
    die("Could not connect to the database due to the following error --> " . mysqli_connect_error());
}
