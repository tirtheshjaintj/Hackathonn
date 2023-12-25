<?php
if(isset($_POST["name"])){
$user_name=$_POST["name"];
$user_email=$_POST["email"];

$server="localhost";
$username="id20252190_root";
$password="@Tirthesh123";
$sql=mysqli_connect($server,$username,$password,"id20252190_root");

$query="INSERT INTO `user_info`(`name`, `email`) VALUES ('$user_name','$user_email')";
$response=array();

if($sql->query($query)){

array_push($response,array("name"=>$user_name,"email"=>$user_email));

echo json_encode($response);
}
else{
    echo "Error While Insertion";
}

$sql->close();
}
else{
    echo "<h1>Please Give Some Values First</h1>";
}

?>