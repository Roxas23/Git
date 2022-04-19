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
<nav>
    <div class="nav-wrapper">
    <a href="index.php" class="brand-logo"><i class="material-icons">storefront</i>Shopping</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="Carrello.php"><i class="material-icons">shopping_cart</i></a></li>
        <li><a href="Login.php">Login</a></li>
        <li><a href="Registrazione.php">Registra</a></li>
      </ul>
    </div>
  </nav>
</body>
</html>

<?php
if($reg_email!=" ")
{
    $contein_reg = get_spesa($reg_email);
    if($contein!=0)
    {
        list($email,$mele,$meloni,$arance,$spaghetti,$pennette,$riso,$bistecca,$salsiccia,$pollo,$salmone,$tonno,$polpo) = explode(";",$contein);
        if($mele!=0){
            echo "Mele = $mele\n";
        }
        if($meloni!=0){
            echo "Moloni = $meloni\n";
        }
        if($arance!=0){
            echo "Arance = $arance\n";
        }
        if($spaghetti!=0){
            echo "Spaghetti = $spaghetti\n";
        }
        if($pennettee!=0){
            echo "Penntette = $pennette\n";
        }
        if($riso!=0){
            echo "Riso = $riso\n";
        }
        if($bistecca!=0){
            echo "Bistecca = $bistecca\n";
        }
        if($salsiccia!=0){
            echo "Salsiccia = $salsiccia\n";
        }
        if($pollo!=0){
            echo "Polllo = $pollo\n";
        }
        if($salmone!=0){
            echo "Salmone = $salmone\n";
        }
        if($tonno!=0){
            echo "Tonno = $tonno\n";
        }
        if($polpo!=0){
            echo "Polpo = $polpo\n";
        }
    }
}
if($log_email!=" ")
{
    $contein_log = get_spesa($log_email);
    if($contein!=0)
    {
        list($email,$mele,$meloni,$arance,$spaghetti,$pennette,$riso,$bistecca,$salsiccia,$pollo,$salmone,$tonno,$polpo) = explode(";",$contein);
        if($mele!=0){
            echo "Mele = $mele\n";
        }
        if($meloni!=0){
            echo "Moloni = $meloni\n";
        }
        if($arance!=0){
            echo "Arance = $arance\n";
        }
        if($spaghetti!=0){
            echo "Spaghetti = $spaghetti\n";
        }
        if($pennettee!=0){
            echo "Penntette = $pennette\n";
        }
        if($riso!=0){
            echo "Riso = $riso\n";
        }
        if($bistecca!=0){
            echo "Bistecca = $bistecca\n";
        }
        if($salsiccia!=0){
            echo "Salsiccia = $salsiccia\n";
        }
        if($pollo!=0){
            echo "Polllo = $pollo\n";
        }
        if($salmone!=0){
            echo "Salmone = $salmone\n";
        }
        if($tonno!=0){
            echo "Tonno = $tonno\n";
        }
        if($polpo!=0){
            echo "Polpo = $polpo\n";
        }
    }
}
?>


</body>
</html>