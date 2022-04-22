<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
    <title>Carello</title>
</head>
<body>
<nav>
    <div class="nav-wrapper">
    <a href="index.php" class="brand-logo"><i class="material-icons">storefront</i>Shopping</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
</nav>
<div class="row">
    <form action="" method="post" class="col s12">
    <div class="input-field col s6">
      <input type="submit" value="Login" class="btn" name="sub">
    </div>
    <div class="input-field col s6">
      <input type="submit" value="Registrazione" class="btn" name="sub">
    </div>      
    </form>

    <?php 
    $value = isset($_POST ['sub']) ? $_POST ['sub'] : '';


    switch($value)
    {
        case "Login":
            header("location: Login.php");
        break;

        case "Registrazione":
            header("location: Registrazione.php");
        break;

        default:
        break;
    }
    ?>

</body>
</html>