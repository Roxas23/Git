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

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
<nav>

    <div class="nav-wrapper purple darken-3">
    <a href="Index.php" class="brand-logo">Schoppin</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
    <li><a href="Carrello.php">Carrello</a></li>  
    </ul>
    </div>
  </nav>

<?php include 'Funzioni.php';

?>
</body>
</html>