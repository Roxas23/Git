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
        <li><a href="Carrello.php"><i class="material-icons">shopping_cart</i></a></li>
        <li><a href="Login.php">Login</a></li>
        <li><a href="Registrazione.php">Registra</a></li>
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
              <p>clicca per aggiungere al carrello</p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Mele<i class="material-icons right">close</i></span>
              <form action="" method="post">
                <input type="number" name="mela-quantita" min="1" max="10" id="" placeholder="Quantità">
                <input type="submit" value="Aggiungi" class="btn" name="mela">
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
              <p>clicca per aggiungere al carrello</p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Melone<i class="material-icons right">close</i></span>
              <form action="" method="post">
                <input type="number" name="melone-quantita" min="1" max="10" id="" placeholder="Quantità">
                <input type="submit" value="Aggiungi" class="btn" name="melone">
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
              <p>clicca per aggiungere al carrello</p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Salsiccia<i class="material-icons right">close</i></span>
              <form action="" method="post">
                <input type="number" name="alsiccia-quantita" min="1" max="10" id="" placeholder="Quantità">
                <input type="submit" value="Aggiungi" class="btn" name="alsiccia">
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

    $sub_mele = isset($_POST['mela']) ? true: false;
    $sub_meloni = isset($_POST['melone']) ? true: false;
    $sub_arancia = isset($_POST['arancia']) ? true: false;
    $sub_spaghetti= isset($_POST['mela']) ? true: false;
    $sub_pennette = isset($_POST['melone']) ? true: false;
    $sub_riso = isset($_POST['arancia']) ? true: false;
    $sub_bistecca = isset($_POST['mela']) ? true: false;
    $sub_salsiccia = isset($_POST['melone']) ? true: false;
    $sub_pollo = isset($_POST['arancia']) ? true: false;
    $sub_salmone = isset($_POST['mela']) ? true: false;
    $sub_tonno = isset($_POST['melone']) ? true: false;
    $sub_polpo = isset($_POST['arancia']) ? true: false;

    if($sub_mele == true){
      $mele = $_REQUEST['mela-quantita'];
    }elseif($sub_meloni == true){
      $meloni = $_REQUEST['melone-quantita'];
    }elseif($sub_arancia == true){
      $arance = $_REQUEST['arancia-quantita'];
    }
    if($sub_spaghetti == true){
      $spaghetti = $_REQUEST['spaghetti-quantita'];
    }elseif($sub_pennette == true){
      $pennette = $_REQUEST['pennnette-quantita'];
    }elseif($sub_riso == true){
      $riso = $_REQUEST['riso-quantita'];
    }
    if($sub_bistecca == true){
      $bistecca = $_REQUEST['bistecca-quantita'];
    }elseif($sub_salsiccia == true){
      $salsiccia = $_REQUEST['salsiccia-quantita'];
    }elseif($sub_pollo == true){
      $pollo = $_REQUEST['pollo-quantita'];
    }
    if($sub_salmone == true){
      $salmone = $_REQUEST['salmone-quantita'];
    }elseif($sub_tonno == true){
      $tonno = $_REQUEST['tonno-quantita'];
    }elseif($sub_polpo == true){
      $polpo = $_REQUEST['polpo-quantita'];
    }

    if($reg_email!=" ")
    {
      set_spesa($reg_email,$mele,$meloni,$arance,$spaghetti,$pennette,$riso,$bistecca,$salsiccia,$pollo,$salmone,$tonno,$polpo);
    }
    if($log_email!=" ")
    {
      set_spesa($log_email,$mele,$meloni,$arance,$spaghetti,$pennette,$riso,$bistecca,$salsiccia,$pollo,$salmone,$tonno,$polpo);
    }




  ?>

</body>
</html>