<!--setting the database connection -->
<?php
$serverName = "localhost";
$dbUserName = "userManage";
$dbPassword = "0zK@Wp[]ZCCakjer";
$dbName = "usermanagement";

$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

if (!$conn){
    die("Connection failed : ". mysqli_connect_error());
}
else{
    echo "DB Connected";
}