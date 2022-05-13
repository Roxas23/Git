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
    <script src="cambia.js"></script>
    <title>Carello</title>
</head>
<body>
<nav>
    <div class="nav-wrapper deep-purple accent-1">
    <a href="home.php" class="brand-logo"><i class="material-icons">storefront</i>Shopping</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="Carrello.php"><i class="material-icons">shopping_cart</i></a></li>
        <li><a href="index.php">Logout</a></li>
      </ul>
    </div>
</nav>

<?php include 'Funzioni.php';
error_reporting (E_ALL ^ E_NOTICE);

    $i=$_SESSION['identiti'];
    if($i==0)
    {
        $m=$_SESSION['reg_email'];
        get_utente($m);
    }

    else if($i==1)
    {
        $m=$_SESSION['log_email'];
        get_utente($m);
    }
?>


</body>
</html>