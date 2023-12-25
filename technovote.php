<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="home.css">
   
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amaranth">
   <link rel="shortcut icon" href="pcte.png" type="image/x-icon">
   <link rel="stylesheet" href="register.css">
    <title>Pcte techno Club Voting</title>
    <style>
      body{
        background:url(register.webp) ;
        background-repeat: no-repeat;
  background-size: 100% 100%;
      }
    </style>
</head>
<body>
   
    <?php
include "nav.html"
?>

<div class="container" id="register">
<center><h1>Vote For Techno Club  🧑‍💻</h1></center>
<form action="technovote.php" method="post">
  <div class="mb-3">
    <label for="rollno" class="form-label">Enter Your RollNo.</label>
    <input name="rollno" type="number" class="form-control" id="rollno" required >
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="password" required>
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" onchange="myFunction()" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Show Password</label>
  </div>
  <div class="mb-3">
    <label for="president" class="form-label">Select President</label>
    <select name="president" class="form-select" aria-label="Default select example" required>
  <option></option>
  <option value="Tirthesh">Tirthesh Jain</option>
  <option value="Brijesh">Brijesh Kumar</option>
  <option value="Suraj">Suraj Singh</option>
</select>
  </div>
  <div class="mb-3">
    <label for="vicepresident" class="form-label">Select Vice-President</label>
    <select name="vicepresident" class="form-select" aria-label="Default select example" required>
 <option></option>
  <option value="Tirthesh">Tirthesh Jain</option>
  <option value="Brijesh">Brijesh Kumar</option>
  <option value="Suraj">Suraj Singh</option>
</select>
  </div>
  <div class="mb-3">
    <label for="secretary" class="form-label">Select Secreatary</label>
    <select name="secretary" class="form-select" aria-label="Default select example" required>
 <option></option>
  <option value="Tirthesh">Tirthesh Jain</option>
  <option value="Brijesh">Brijesh Kumar</option>
  <option value="Suraj">Suraj Singh</option>
</select>
  </div> 
  
<center>
  <button type="submit" class="btn btn-outline-light btn-lg">Vote Now</button>
  </center>
</form>
<script>

function myFunction() {

var x = document.getElementById("password");
if (x.type === "password") {
x.type = "text";
} else {
x.type = "password";
}
} 
</script>

<?php
try{
if(isset($_REQUEST["rollno"])){
$server="localhost";
$username="id20252190_root";
$password="@Tirthesh123";
$con=mysqli_connect($server,$username,$password,"id20252190_root");

$pass=$_REQUEST["password"];
$rollno=$_REQUEST["rollno"];
$president=$_REQUEST["president"];
$vicepresident=$_REQUEST["vicepresident"];
$secretary=$_REQUEST["secretary"];

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
$query="SELECT * FROM techno WHERE rollno =$rollno";
$result=$con->query($query);
if(mysqli_num_rows(mysqli_query($con,$query))>0){
 
  while($row=mysqli_fetch_assoc($result)){
 
    if(password_verify($pass,$row['password'])){
      if($row["status"]=="0"){
     $query1="UPDATE `techno` SET `status`='1' WHERE rollno=$rollno";
     $con->query($query1);
     
     $query2="UPDATE technovote SET vote = vote + 1 WHERE name='$president' and post='president'";
     $con->query($query2);
      $query3="UPDATE technovote SET vote = vote + 1 WHERE name='$vicepresident' and post='vicepresident'";
     $con->query($query3);
      $query4="UPDATE technovote SET vote = vote + 1 WHERE name='$secretary' and post='secretary'";
     $con->query($query4);
 echo "<script>alert('Voted Successfully');location.href='https://exudative-capacitie.000webhostapp.com/hackathon/result.php'</script>";      }
      else{
        echo "<script>alert('Sorry You Have Already Voted');</script>";
      }
    }
    else{
      echo "<script>alert('Password Not Matched');</script>";
    }
    };

}
else{
 echo "<script>alert('Account Not Found');location.href='https://exudative-capacitie.000webhostapp.com/hackathon/register.php'</script>";  
}

}
$con->close();

}
catch(Exception $e) {

}

?>



<?php
include "foot.html"
?>

</body>
</html>