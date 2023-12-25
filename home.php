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

    <title>Pcte Club Elections</title>
    <style>
      #box{
    display:flex;
    flex-direction: row;
    justify-content:space-evenly;
    align-items:center;
    min-height: 500px;
    
}

@media(max-width:1024px){
  #box{
    display:flex;
    flex-direction: column;
}
.bigimg{
  width:100%;
}
p{
  text-align:left;
}
h2{
    color:white;
}

    </style>
    
</head>
<body style="background:url(home.jpg) ;background-repeat: no-repeat;background-size: 100% 100%;">
 <?php
include "nav.html"
 ?>
<div id="bigbox" style="backdrop-filter:blur(5px)">

 <center>
      <div  id="box">
        <br><br>
        
<div>
<h1 id="heading"><b>PCTE CLUB ELECTIONS <br>2023-24 </b> </h1>
</div>
<br><br>
<div>
<img  class="bigimg" src="pcte.webp" alt="">
</div>
<br><br><br>

</div>
</center>
<center>
    <a href="register.php">
      <button type="submit" class="btn btn-outline-light btn-lg">Register To Vote</button>

</a>
    <br><br>
<a href="result.php">
      <button type="submit" class="btn btn-outline-light btn-lg">View Live Results</button>

</a>
</center>  
    
<br><br>
<div class="container text-center">
    <h1><b>All PCTE CLUBS</b></h1>
   
        <br>
    <div class="row" id="clubs">
        <a name="clubs"></a>
    <div class="card col" >
        <img src="sports.jpg" class="card-img-top " alt="...">
        <div class="card-body">
          <h2 class="card-title" style="color:white;" >Sports Club</h2>
          <p class="card-text">Welcome to our sports club! We are a thriving community of athletes who are passionate about their chosen sports. Whether you are a beginner or a seasoned pro, our club offers a welcoming and inclusive environment where you can improve your skills, make new friends, and enjoy the thrill of competition.</p>
          <a href="sportsvote.php">  <button type="submit" class="btn btn-outline-light btn-lg">Vote Now</button>
</button></a>
        </div>
      </div>
      
      <br><br>
      <div class="card col" >
        <img src="literary.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h2 class="card-title" style="color:white;" >Literary Club</h2>
          <p class="card-text">The purpose of this club is to foster a love for literature, encourage creativity, and develop critical thinking skills through the exploration of various literary works. We will delve into all genres including fiction, poetry, drama, and non-fiction. Each month, we will select a book or a theme to focus on.</p>
          <a href="literaryvote.php">  <button type="submit" class="btn btn-outline-light btn-lg">Vote Now</button>
</a>
        </div>
      </div>
      <br><br>
      <div class="card col" >
        <img src="techno.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h2 class="card-title" style="color:white;" >Techno Club</h2>
          <p class="card-text">Our primary goal is to provide a platform for members to learn, explore, and discuss various topics within the realm of technology. From coding and programming to artificial intelligence and virtual reality, we cover a wide range of subjects that can help you broaden your knowledge.</p>
          <a href="technovote.php">  <button type="submit" class="btn btn-outline-light btn-lg">Vote Now</button>
</a>
        </div>
      </div>
      </div>
</div>

<?php
include "foot.html"
?>
</div>
</body>
</html>