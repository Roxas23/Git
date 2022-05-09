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
top: 650px;
left: 1100px;
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


<?php include 'Funzioni.php';
error_reporting (E_ALL ^ E_NOTICE);

$submit = isset($_POST['sub']) ? true : false;

    $i=$_SESSION['identiti'];
    if($i==0)
    {
        $m=$_SESSION['reg_email'];
        $tott=get_spesa($m);
       
        ?><ul class="collection with-header">
        <form action="" method="post" class="col s12">
        <li class="collection-header"><h5>Scontrino</h5></li>
        <li class="collection-item"><div>
            <?php
            echo "Totale = $tott &nbsp;";?>€&nbsp;&nbsp;&nbsp;
            <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="scontrino" ><i class="material-icons"> euro </i></button>
        <?php
        $scontrino = isset($_POST['scontrino']) ? true: false;
        if($scontrino==true)
        {
            $to = $m;
            $subject = 'the subject';
            $message = "il tuo scontrino è $tott";
            $headers = 'From: rosariomanuele2318@gmail.com'. "\r\n" .
            'Reply-To: '.$m . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
            mail($to, $subject, $message, $headers);
            
            azzera_spesa($m); 
            
            header("location: home.php");
            
        }
        
    }

    else if($i==1)
    {
        $m=$_SESSION['log_email'];
        $tott=get_spesa($m);
        
        ?><ul class="collection with-header">
        <form action="" method="post" class="col s12">
        <li class="collection-header"><h4>Scontrino</h4></li>
        <li class="collection-item"><div>
            <?php
            echo "Totale = $tott &nbsp;";?>€&nbsp;&nbsp;&nbsp;
            <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="scontrino" ><i class="material-icons"> euro</i></button>
            <?php

        $scontrino = isset($_POST['scontrino']) ? true: false;
        if($scontrino==true)
        {
            $to = $m;
            $subject = 'the subject';
            $message = "il tuo scontrino è $tott";
            $headers = 'From: rosariomanuele2318@gmail.com'. "\r\n" .
            'Reply-To: '.$m . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
            mail($to, $subject, $message, $headers);
            
            azzera_spesa($m); 
            
            header("location: home.php");
            
        }
    }

    


?>


</body>
</html>