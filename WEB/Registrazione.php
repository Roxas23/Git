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

<div class="row">
    <form class="col s12" method="POST">
        <div class="row">
            <div class="input-field col s4">
            <input id="nome" type="text" name="nome" class="validate">
            <label for="nome">Nome</label>
        </div>
        <div class="input-field col s4">
            <input id="cognome" type="text" name="cognome" class="validate">
            <label for="cognome">Cognome</label>
        </div>
        </div>
        <div class="row">
        <div class="input-field col s4">
            <input id="email" type="text" name="email" class="validate">
            <label for="email">Inserisci Email</label>
        </div>
        </div>
        <div class="row">
        <div class="input-field col s4">
            <input id="password" type="password" name="password" class="validate">
            <label for="password">Password</label>
        </div>
        </div>
        <div class="row">
            <input type="submit" value="Invio" class="btn bottton2" name="Invio"  id= "Invio">
        </div>
      
    </form>
</div>

<?php include 'Funzioni.php';

$value = isset($_POST ['Invio']) ? $_POST ['Invio'] : '';
if($value == "Invio")
{
    $nome = $_REQUEST['nome'];
    $cognome= $_REQUEST['cognome'];
    $email = $_REQUEST['email'];
    $password =  $_REQUEST['password'];

    set_file($nome, $cognome, $email, $password);
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
        
    echo "REGISTRAZIONE AVVENUTA CON SUCCESSO";
}
/*if($email != ""){
    header("location: Index.php");
}*/


?>
</body>
</html>