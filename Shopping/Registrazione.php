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
    <div class="nav-wrapper deep-purple accent-1">
    <a href="index.php" class="brand-logo"><i class="material-icons">storefront</i>Shopping</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      </ul>
    </div>
</nav>

  <div class="row">
    <form action="" method="post" class="col s12">
      <div class="row">
        <div class="input-field col s5">
          <input type="text" name="nome" id="nome" placeholder="nome">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s5">
          <input type="text" name="cognome" id="cognome" placeholder="cognome">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s5">
          <input type="email" name="email" id="email" placeholder="email">
        </div>
      </div>
  <div class="row">
    <div class="input-field col s5">
      <input type="password" name="password" id="password" placeholder="password" minlength="8" required>
        <p>
          <label>
            <input type="checkbox" onclick="pass_visibility()"/>
            <span>Mostra password</span>
          </label>
        </p>
    </div>
  </div>
    <div class="input-field col s6">
      <input type="submit" value="Login" class="btn" name="sub">
    </div>      
    </form>
  </div>
    <script>
      function pass_visibility(){
        var input = document.getElementById("password");
        if (input.type === "password") {
          input.type = "text";
        } else {
            input.type = "password";
          }
      }
    </script>

<?php include 'Funzioni.php';
error_reporting (E_ALL ^ E_NOTICE);

    $submit = isset($_POST['sub']) ? true : false;
      $i=0;
    if($submit){
        $nome = $_REQUEST['nome'];
        $cognome = $_REQUEST['cognome'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $i=set_dati($nome, $cognome, $email, $password);
        if($i==1)
        {
          echo "Email esistente";
        }
        if($i == 0)
        {
          $_SESSION['reg_email'] = $email;
          $_SESSION['identiti'] = $i;
          header("location: home.php");
        }
    }

?>

</body>
</html>