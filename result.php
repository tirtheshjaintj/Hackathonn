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
    <title>Voting Live Result</title>
    <style>
      body{
        background:url(register.webp) ;
        background-repeat: no-repeat;
  background-size: 100% 100%;
      }
      #register{
          width:90%;
      }
      table{
          background:transparent;
      }
    </style>
</head>
<body>
    <?php
    include "nav.html";
    ?>
    <div class="container" id="register">
<?php



$server="localhost";
$username="id20252190_root";
$password="@Tirthesh123";
$con=mysqli_connect($server,$username,$password,"id20252190_root");
if ($con->connect_error) {
  echo("Connection failed: " . $con->connect_error);
}
$sql="SELECT * FROM sportsvote ORDER BY vote DESC;";
$result=$con->query($sql);
echo "<center><h1>Sports Club Result</h1></center>";
if(mysqli_num_rows($result)>0){
    print_r('<table class="table" style="background:tranparent">
     <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Position</th>
      <th scope="col">Votes</th>
    </tr>
  </thead>');
    while($row=mysqli_fetch_assoc($result)){
        print_r("
        <tr>
        <td>".$row["name"]."</td>
          <td>".ucwords($row["post"])."</td>
          <td>".$row["vote"]."</td>
        </tr>
      ");
    }
    echo "</table>";
}

$sql="SELECT * FROM technovote ORDER BY vote DESC;";
$result=$con->query($sql);
echo "<center><h1>Techno Club Result</h1></center>";
if(mysqli_num_rows($result)>0){
    print_r('<table class="table" style="background:tranparent">
     <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Position</th>
      <th scope="col">Votes</th>
    </tr>
  </thead>');
    while($row=mysqli_fetch_assoc($result)){
        print_r("
        <tr>
        <td>".$row["name"]."</td>
          <td>".ucwords($row["post"])."</td>
          <td>".$row["vote"]."</td>
        </tr>
      ");
    }
    echo "</table>";
}

$sql="SELECT * FROM literaryvote ORDER BY vote DESC;";
$result=$con->query($sql);
echo "<center><h1>Literary Club Result</h1></center>";
if(mysqli_num_rows($result)>0){
    print_r('<table class="table" style="background:tranparent">
     <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Position</th>
      <th scope="col">Votes</th>
    </tr>
  </thead>');
    while($row=mysqli_fetch_assoc($result)){
        print_r("
        <tr>
        <td>".$row["name"]."</td>
          <td>".ucwords($row["post"])."</td>
          <td>".$row["vote"]."</td>
        </tr>
      ");
    }
    echo "</table>";
}

$con->close();

?>




</div>
<?php
include "foot.html";
?>
</body>
</html>