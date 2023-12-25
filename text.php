<?php

$server="localhost";
$username="id20252190_root";
$password="@Tirthesh123";
$con=mysqli_connect($server,$username,$password,"id20252190_root");
if ($con->connect_error) {
  echo("Connection failed: " . $con->connect_error);
}
else{
    echo "SUCCESS";
    $con->query("INSERT INTO `sports`( `name`, `rollno`, `club`, `password`) VALUES('[value]','[value]','[value]','[value]')");
}
?>