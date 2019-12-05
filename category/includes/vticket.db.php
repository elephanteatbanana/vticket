<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "v_database";

if($conn = mysqli_connect($dbServername, $dbUsername,$dbPassword, $dbName)){

}else{
    die("can not connect to Mysql");
}
?>