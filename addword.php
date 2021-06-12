<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }

  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</head>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Words book</h1>
  <p>Welcome to this web book.</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="http://172.20.10.5/phpinfo.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="http://172.20.10.5/addword.php">Add word</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://172.20.10.5/wordlist.php">Print book</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Why not change the world?</a>
      </li>
    </ul>
  </div>  
</nav>
<body>

<?php
        $hostname = 'localhost:3306';
        $user = 'raspberryWordWeb';
        $password = 'alswl0820';
        $database = 'testDB';
        $conn = mysqli_connect($hostname, $user, $password, $database);


?>

<div class="container">
  <h2>Input word</h2>
  <p>Type a word and the word's meaning. And then click save button.</p>
  <form class="form-inline" method = "post"  action="http://172.20.10.5/showword.php">
    <label for="word">Word:</label>
    <input type="text" class="form-control" id="word" placeholder="Enter word" name="word">
    <label for="meaning">Meaning:</label>
    <input type="text" class="form-control" id="meaning" placeholder="Enter meaning" name="meaning">
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
</div>

</body>
</html>

