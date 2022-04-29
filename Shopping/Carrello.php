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
    <title>Document</title>
</head>
<body>
<style type="text/css">
input {
position:fixed;
top: 600px;
left: 930px;
}
</style>

<nav>
    <div class="nav-wrapper">
    <a href="home.php" class="brand-logo"><i class="material-icons">storefront</i>Shopping</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="Utente.php"><i class="material-icons">account_box</i></a></li>
      <li><a href="index.php">Logout</a></li>
      </ul>
    </div>
</nav>
<div class="row">
    <form action="" method="post" class="col s12">
        <div class="input-field col s6">
            <input type="submit" value="Acquista" class="btn" name="sub">
        </div>
    </form>
</div>
<?php include 'Funzioni.php';
error_reporting (E_ALL ^ E_NOTICE);

    $i=$_SESSION['identiti'];
    if($i==0)
    {
        $m=$_SESSION['reg_email'];
        get_spesa($m);
    }
    else if($i==1)
    {
        $m=$_SESSION['log_email'];
        get_spesa($m);
    }



?>


</body>
</html>