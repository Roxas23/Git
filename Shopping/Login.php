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
    <div class="row">
        <form action="" method="post" class="col s12">
            <div class="row">
                <div class="input-field col s5">
                    <input type="text" name="email" id="email" placeholder="email">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s5">
                    <input type="password" name="password" id="password" placeholder="password">
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
<?php
    $submit = isset($_POST['sub']) ? true : false;

    if($submit){
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
    }

?>
</body>
</html>