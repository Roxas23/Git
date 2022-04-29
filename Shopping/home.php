
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
        <li><a href="Utente.php"><i class="material-icons">account_box</i></a></li>
        <li><a href="index.php">Logout</a></li>
      </ul>
    </div>
  </nav>
<div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#frutta">Frutta</a></li>
        <li class="tab col s3"><a href="#pasta">Pasta</a></li>
        <li class="tab col s3"><a href="#carne">Carne</a></li>
        <li class="tab col s3"><a href="#pesce">Pesce</a></li>
      </ul>

      <div id="frutta">
        <div class="row frutta">
          <div class="col s3">
            <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/download.jpeg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Mele<i class="material-icons right">more_vert</i></span>
              <p>0.90€</p>
              <p>clicca per aggiungere al carrello</p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Mele<i class="material-icons right">close</i></span>
              <form action="" method="post">
                <input type="number" name="mela-quantita" min="1" max="10" id="" placeholder="Quantità">
                <input type="submit" value="Aggiungi" class="btn" name="mele">
              </form>
            </div>
          </div>
          </div>
          <div class="col s3">
            <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/melon.jpeg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Melone<i class="material-icons right">more_vert</i></span>
              <p>3.25€</p>
              <p>clicca per aggiungere al carrello</p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Melone<i class="material-icons right">close</i></span>
              <form action="" method="post">
                <input type="number" name="meloni-quantita" min="1" max="10" id="" placeholder="Quantità">
                <input type="submit" value="Aggiungi" class="btn" name="meloni">
              </form>
            </div>
          </div>
          </div>
          <div class="col s3">
            <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/oranges.jpeg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Arancia<i class="material-icons right">more_vert</i></span>
              <p>1.25€</p>
              <p>clicca per aggiungere al carrello</p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Arancia<i class="material-icons right">close</i></span>
              <form action="" method="post">
                <input type="number" name="arancia-quantita" min="1" max="10" id="" placeholder="Quantità">
                <input type="submit" value="Aggiungi" class="btn" name="arancia">
              </form>
            </div>
          </div>
          </div>
        </div>
      </div>

      <div id="pasta">
        <div class="row pasta">
          <div class="col s3">
            <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/spaghetti.jpeg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Spaghetti<i class="material-icons right">more_vert</i></span>
              <p>0.89€</p>
              <p>clicca per aggiungere al carrello</p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Spaghetti<i class="material-icons right">close</i></span>
              <form action="" method="post">
                <input type="number" name="spaghetti-quantita" min="1" max="10" id="" placeholder="Quantità">
                <input type="submit" value="Aggiungi" class="btn" name="spaghetti">
              </form>
            </div>
          </div>
          </div>
          <div class="col s3">
            <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/pennette.jpeg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Pennette<i class="material-icons right">more_vert</i></span>
              <p>0.89€</p>
              <p>clicca per aggiungere al carrello</p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Pennette<i class="material-icons right">close</i></span>
              <form action="" method="post">
                <input type="number" name="pennette-quantita" min="1" max="10" id="" placeholder="Quantità">
                <input type="submit" value="Aggiungi" class="btn" name="pennette">
              </form>
            </div>
          </div>
          </div>
          <div class="col s3">
            <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/riso.jpeg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Riso<i class="material-icons right">more_vert</i></span>
              <p>1.49€</p>
              <p>clicca per aggiungere al carrello</p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Riso<i class="material-icons right">close</i></span>
              <form action="" method="post">
                <input type="number" name="riso-quantita" min="1" max="10" id="" placeholder="Quantità">
                <input type="submit" value="Aggiungi" class="btn" name="riso">
              </form>
            </div>
          </div>
          </div>
        </div>
      </div>

      <div id="carne">
      <div class="row carne">
          <div class="col s3">
            <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/bistecca.jpeg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Bistecca<i class="material-icons right">more_vert</i></span>
              <p>4€</p>
              <p>clicca per aggiungere al carrello</p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Bistecca<i class="material-icons right">close</i></span>
              <form action="" method="post">
                <input type="number" name="bistecca-quantita" min="1" max="10" id="" placeholder="Quantità">
                <input type="submit" value="Aggiungi" class="btn" name="bistecca">
              </form>
            </div>
          </div>
          </div>
          <div class="col s3">
            <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/salsiccia.jpeg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Salsiccia<i class="material-icons right">more_vert</i></span>
              <p>3.50€</p>
              <p>clicca per aggiungere al carrello</p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Salsiccia<i class="material-icons right">close</i></span>
              <form action="" method="post">
                <input type="number" name="salsiccia-quantita" min="1" max="10" id="" placeholder="Quantità">
                <input type="submit" value="Aggiungi" class="btn" name="salsiccia">
              </form>
            </div>
          </div>
          </div>
          <div class="col s3">
            <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/pollo.jpeg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Pollo<i class="material-icons right">more_vert</i></span>
              <p>4.29€</p>
              <p>clicca per aggiungere al carrello</p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Pollo<i class="material-icons right">close</i></span>
              <form action="" method="post">
                <input type="number" name="pollo-quantita" min="1" max="10" id="" placeholder="Quantità">
                <input type="submit" value="Aggiungi" class="btn" name="pollo">
              </form>
            </div>
          </div>
          </div>
        </div>
      </div>

      <div id="pesce">
      <div class="row pesce">
          <div class="col s3">
            <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/salmone.jpeg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Salmone<i class="material-icons right">more_vert</i></span>
              <p>7.99€</p>
              <p>clicca per aggiungere al carrello</p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Salmone<i class="material-icons right">close</i></span>
              <form action="" method="post">
                <input type="number" name="salmone-quantita" min="1" max="10" id="" placeholder="Quantità">
                <input type="submit" value="Aggiungi" class="btn" name="salmone">
              </form>
            </div>
          </div>
          </div>
          <div class="col s3">
            <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/tonno.jpeg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Tonno<i class="material-icons right">more_vert</i></span>
              <p>6.50€</p>
              <p>clicca per aggiungere al carrello</p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Tonno<i class="material-icons right">close</i></span>
              <form action="" method="post">
                <input type="number" name="tonno-quantita" min="1" max="10" id="" placeholder="Quantità">
                <input type="submit" value="Aggiungi" class="btn" name="tonno">
              </form>
            </div>
          </div>
          </div>
          <div class="col s3">
            <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/polpo.jpeg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Polpo<i class="material-icons right">more_vert</i></span>
              <p>11.49€</p>
              <p>clicca per aggiungere al carrello</p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Polpo<i class="material-icons right">close</i></span>
              <form action="" method="post">
                <input type="number" name="polpo-quantita" min="1" max="10" id="" placeholder="Quantità">
                <input type="submit" value="Aggiungi" class="btn" name="polpo">
              </form>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <script>
    var el = document.querySelector('.tabs');
    var instance = M.Tabs.init(el, {});
    //var instance = M.Tabs.init(el, options);
  </script>

  <?php include 'Funzioni.php';

    $sub_mele = isset($_POST['mele']) ? true: false;
    $sub_meloni = isset($_POST['meloni']) ? true: false;
    $sub_arancia = isset($_POST['arancia']) ? true: false;
    $sub_spaghetti= isset($_POST['spaghetti']) ? true: false;
    $sub_pennette = isset($_POST['pennette']) ? true: false;
    $sub_riso = isset($_POST['riso']) ? true: false;
    $sub_bistecca = isset($_POST['bistecca']) ? true: false;
    $sub_salsiccia = isset($_POST['salsiccia']) ? true: false;
    $sub_pollo = isset($_POST['pollo']) ? true: false;
    $sub_salmone = isset($_POST['salmone']) ? true: false;
    $sub_tonno = isset($_POST['tonno']) ? true: false;
    $sub_polpo = isset($_POST['polpo']) ? true: false;

    if($sub_mele == true){
      $mele = $_REQUEST['mela-quantita'];
    }
    else{
        $mele = 0;
    }
    if($sub_meloni == true){
      $meloni = $_REQUEST['meloni-quantita'];
    }else{
        $meloni=0;
    }
    if($sub_arancia == true){
      $arance = $_REQUEST['arancia-quantita'];
    }
    else{
        $arance=0;
    }

    if($sub_spaghetti == true){
      $spaghetti = $_REQUEST['spaghetti-quantita'];
    }
    else{
        $spaghetti=0;
    }

    if($sub_pennette == true){
      $pennette = $_REQUEST['pennette-quantita'];
    }
    else{
        $pennette=0;
    }

    if($sub_riso == true){
      $riso = $_REQUEST['riso-quantita'];
    }
    else{
        $riso=0;
    }

    if($sub_bistecca == true){
      $bistecca = $_REQUEST['bistecca-quantita'];
    }
    else{
        $bistecca=0;
    }
    if($sub_salsiccia == true){
      $salsiccia = $_REQUEST['salsiccia-quantita'];
    }
    else{
        $salsiccia=0;
    }
    if($sub_pollo == true){
      $pollo = $_REQUEST['pollo-quantita'];
    }
    else{
        $pollo=0;
    }

    if($sub_salmone == true){
      $salmone = $_REQUEST['salmone-quantita'];
    }else{
        $salmone=0;
    }
    if($sub_tonno == true){
      $tonno = $_REQUEST['tonno-quantita'];
    }else{
        $tonno=0;
    }
    if($sub_polpo == true){
      $polpo = $_REQUEST['polpo-quantita'];
    }
    else{
        $polpo=0;
    }

    $i=$_SESSION['identiti'];
    if($i==0)
    {
        $m=$_SESSION['reg_email'];
        $nome_file= $m . ".txt";
        set_spesa($nome_file,$mele,$meloni,$arance,$spaghetti,$pennette,$riso,$bistecca,$salsiccia,$pollo,$salmone,$tonno,$polpo);
    }
    else if($i==1)
    {
        $m=$_SESSION['log_email'];
        $nome_file= $m . ".txt";
        set_spesa($nome_file,$mele,$meloni,$arance,$spaghetti,$pennette,$riso,$bistecca,$salsiccia,$pollo,$salmone,$tonno,$polpo);
    }
   
  ?>

</body>
</html>