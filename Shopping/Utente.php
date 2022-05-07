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
        //get_utente($m);
        $p = fopen("dati.txt", "r");
        while(!feof($p))
        {
            $arr=fgets($p);
            list($nome,$cognome,$eml,$pass) = explode(";",$arr);
            if($eml == $m)
            {
                ?><ul class="collection with-header">
                <form action="" method="post" class="col s12">
                <li class="collection-header"><h5>Area personale</h5></li><?php
                ?><li class="collection-item"><div>
                    <?php
                    echo "Nome: &nbsp;$nome";?>&nbsp;&nbsp;&nbsp;
                    <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="Modificanome" ><i class="material-icons">edit </i></button></div></li>
                    <li class="collection-item"><div>
                    <?php
                    echo "Cognome: &nbsp;$cognome";?>&nbsp;&nbsp;&nbsp;
                    <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="Modificacognome" ><i class="material-icons">edit </i></button></div></li>
                    <li class="collection-item"><div>
                    <?php
                    echo "E-mail: &nbsp;$eml";?></div></li>
                    <li class="collection-item"><div>
                    <?php
                    $s=star_out_password($pass,4);
                    echo "Password: &nbsp;$s"  ;?>&nbsp;&nbsp;&nbsp;
                    <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="Modificapassword" ><i class="material-icons"> edit</i></button></div></li>
                  </table></form></ul><?php
            } 
        }
        fclose($p);
    
        $Modificanome = isset($_POST['Modificanome']) ? true: false;
        $Modificacognome = isset($_POST['Modificacognome']) ? true: false;
        $Modificapassword = isset($_POST['Modificapassword']) ? true: false;
    
        if($Modificanome==true){cambia_nome($m);}
        if($Modificacognome==true){cambia_cognome($m);}
        if($Modificapassword==true){cambia_password($m);}
    }
    

    else if($i==1)
    {
        $m=$_SESSION['log_email'];
        get_utente($m);
    }
?>


</body>
</html>