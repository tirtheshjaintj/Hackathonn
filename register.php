


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
    <title>Pcte Club Registeration</title>
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
    <center><h1>Register To Vote </h1></center>
  <form action="register.php" method="post">
<div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="name" class="form-label">Enter Your Name</label>
    <input name="name" type="text" class="form-control" id="name" required>
  </div>
  <div class="mb-3">
    <label for="rollno" class="form-label">Enter Your RollNo.</label>
    <input name="rollno" type="number" class="form-control" id="rollno" required >
  </div>
  <div class="mb-3">
    <label for="rollno" class="form-label">Enter Your Club</label>
    <select name="club" class="form-select" aria-label="Default select example" required>
  <option value="sports" selected>Sports Club</option>
  <option value="literary">Literary Club</option>
  <option value="techno">Techno Club</option>
</select>
  </div>
  
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="password" required>
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" onchange="myFunction()" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Show Password</label>
  </div>

<center>
  <button type="submit" class="btn btn-outline-light btn-lg">Register Now</button>
  </center>
</form>
</div>


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
if(isset($_REQUEST["email"])){

$server="localhost";
$username="id20252190_root";
$password="@Tirthesh123";
$con=mysqli_connect($server,$username,$password,"id20252190_root");
if ($con->connect_error) {
  echo("Connection failed: " . $con->connect_error);
}


$email=$_REQUEST["email"];
$name=$_REQUEST["name"];
$rollno=$_REQUEST["rollno"];
$club=$_REQUEST["club"];
$pass=$_REQUEST["password"];
$hpass=password_hash($pass,PASSWORD_DEFAULT);


$query1="select * from $club where email='$email'";
if(mysqli_num_rows(mysqli_query($con,$query1))>0){
  echo "<script>alert('Account Already Exists Try Another Email And RollNo.');</script>";
}
else{

if($club=="sports"){

  if($con->query("INSERT INTO sports( `email`, `name`, `rollno`, `password`) 
  VALUES ('$email','$name','$rollno','$hpass')")){
    echo "<script>alert('Account Created Successfully Now You Can Vote');location.href='http://tirtheshjain.com/hackathon/sportsvote.php'</script>";
  }
 


}
else if($club=="literary"){
  if($con->query("INSERT INTO literary( `email`, `name`, `rollno`, `password`) 
  VALUES ('$email','$name','$rollno','$hpass')")){
    echo "<script>alert('Account Created Successfully Now You Can Vote');location.href='http://tirtheshjain.com/hackathon/literaryvote.php'</script>";
  }
}
else if($club="techno"){
  if($con->query("INSERT INTO techno ( `email`, `name`, `rollno`, `password`) 
  VALUES ('$email','$name','$rollno','$hpass')")){
    echo "<script>alert('Account Created Successfully Now You Can Vote');location.href='http://tirtheshjain.com/hackathon/technovote.php'</script>";
  }
}

}
}


?>



</body>
</html>