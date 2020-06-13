<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-inverse navbar-expand-lg navbar-fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">LifeStyle Store</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">

            <?php
            if(isset($_SESSION['email'])){
            ?>
            <li class="nav-item">
              <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true">&nbsp;Cart</i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="setting.php"><i class="fa fa-cog  fa-1x fa-fw"></i>&nbsp;Setting</a>
<span class="sr-only">Loading...</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php"><i class="fa fa-sign-out-alt fas-lg">Logout</i></a>
            </li>
            <?php
            } else {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="signup.php">Sign Up<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <?php
            }
            ?>
          </ul>
        </div>
</nav>
</body>
</html>

