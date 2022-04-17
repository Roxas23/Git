<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="cod.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
<nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo">Shopping</a>
      <a href="index.php" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="Carrello.php"><i class="material-icons">local_grocery_store</i></a></li>
        <li><a href="Login.php">Login</a></li>
        <li><a href="Registrazione.php">Registrazione</a></li>
      </ul>

    </div>
    <div class="nav nav-tabs">
        <ul class="tabs tabs-transparent">
            <li class="tab"><a href="#Frutta">Frutta</a></li>
            <li class="tab"><a href="#Pasta">Pasta</a></li>
            <li class="tab"><a href="#Carne">Carne</a></li>
            <li class="tab"><a href="#Pesce">Pesce</a></li>
        </ul>
    </div>
 </nav>
</body>
</html>