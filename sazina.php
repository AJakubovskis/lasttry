<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Decembra</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    position: relative; 
  }
  #section1 {
    padding-top:50px;height:1000px;color: #fff;
  }
  #background {
    border-radius: 60px;
    border: 20px solid white;
    background: #13ACEF;
  }
  body {
    background-color: #13ACEF;
  }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">CrazyFlights</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#section1">Home</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Galleries<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section41">Photos</a></li>
              <li><a href="#section42">Videos</a></li>
            </ul>
          </li>
          <li><a href="#section2">Contacts</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>    
<div id="section1" class="container-fluid">
  <div id="background" class="jumbotron text-center">
  <img src="img/petuh.png" height="300px">
  <p>CrazyFlights, best deals for budget travelling!</p> 
</div>
  
<div class="container">
  <div class="row">
  <div class="col-sm-4"></div>
    <div class="col-sm-4">
    <h3>Join!</h3>
		<form>
		  <div class="form-group">
      <form action="sazina" method="post">
        <div class="form-group">
          <label for="name">Vārds:</label>
          <input type="name" class="form-control" id="name" placeholder="Ievadiet vārdu" name="name">
        </div>
        <div class="form-group">
          <label for="surname">Uzvārds:</label>
          <input type="surname" class="form-control" id="surname" placeholder="Ievadiet uzvārdu" name="surname">
        </div>
        <div class="form-group">
          <label for="email">E-pasts:</label>
          <input type="email" class="form-control" id="email" placeholder="Ievadiet e-pastu" name="email">
        </div>
        <div class="form-group">
          <label for="mobile">Telefons:</label>
          <input type="number" class="form-control" id="mobile" placeholder="Ievadiet telefona numuru" name="mobile">
        </div>
        <div class="form-group">
          <label for="question">Jūsu jautājums:</label>
          <textarea class="form-control" id="question" rows="3" name="question"></textarea>
        </div>
        <button class="btn btn-secondary" type="submit" name="save">Iesūtīt</button>
      </form>
    </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>
	<?php
        if(isset($_POST['save'])){
          if(empty($_POST['name'])){
            echo "<b>Vārds nav ievadīts</b>";
          } else {
            echo "<b>Vārds:</b>{$_POST['name']}";
          }
          if(empty($_POST['name'])){
            echo "<b>Uzvārds nav ievadīts</b>";
          } else {
            echo "<b>Uzvārds:</b>{$_POST['surname']}<br/>";
          }

          echo "<b>E-pasts:</b>{$_POST['email']}<br/>";
          echo "<b>Telefons:</b>{$_POST['mobile']}<br/>";
          echo "<b>Jūsu jautājums:</b>{$_POST['question']}";
        }
      ?>
<div class="container">
  <div class="row">
    <div class="col-sm-4"> </div> 
    <div class="col-sm-4">
      <h3>Join to see new</h3>
        <form>
          <div class="form-group">
            <label for="name">Vārds:</label>
            <input type="name" class="form-control" id="name" placeholder="Ievadiet vārdu" name="name">
          </div>
          <div class="form-group">
              <form action="forma" method="post">
              <div class="form-group">
                  <label for="news">E-pasts:</label>
                  <input type="email" class="form-control" id="news" placeholder="Ievadiet e-pastu" name="news">
              </div>
              <button class="btn btn-secondary" type="submit" name="news">Iesūtīt</button>
              </form>
          </div>
          <?php
          if(isset($_POST['news'])){
              echo "<b>E-pasts:</b>{$_POST['news']}<br/>";
          }
          ?>
          <h3>Register</h3>
          <div class="form-group">
              <form action="forma" method="post">
              <div class="form-group">
                  <label for="emaillogin">E-pasts:</label>
                  <input type="email" class="form-control" id="emaillogin" placeholder="Ievadiet e-pastu" name="emaillogin">
              </div>
              <div class="form-group">
                  <label for="password">Parole</label>
                  <input type="password" class="form-control" id="password" placeholder="Ievadiet paroli" name="password">
              </div>
              <button class="btn btn-secondary" type="submit" name="login">Logoties</button>
              </form>
          </div>
        </form>
    </div>
  </div>
</div>
          <?php
          if(isset($_POST['login'])){
              echo "<b>E-pasts:</b>{$_POST['emaillogin']}<br/>";
              echo "<b>Parole</b>{$_POST['password']}<br/>";
          }
          ?>
</body>
</html>