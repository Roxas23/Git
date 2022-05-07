<style>
table {
    border: 1px solid grey;
    border-collapse: separate;
    border-spacing: 4px;
    margin: 60px auto;
    background:  #e0e0e0;
    padding: 17px;
    width: 800px;
}

ul.collection.with-header {
    margin-left: 420px;
    margin-right: 450px;
    margin-bottom: 50px;
}
</style>
<?php 
error_reporting (E_ALL ^ E_NOTICE);
error_reporting(E_ERROR | E_PARSE);

function set_dati($nome, $cognome, $email, $password)
{
    $i=0;
    $p = fopen("dati.txt", "a+");
    while(!feof($p))
    {
        $arr=fgets($p);
        list($nom,$cogn,$eml,$pass) = explode(";",$arr);
        if($eml == $email)
        {
            return 1;  
        } 
    }
    if($i==0){
    $str = "$nome;$cognome;$email;$password;\n";
    fwrite($p,$str);
    fclose($p);
    return $i;
    }
}

function get_dati($email, $password)
{
    $i = 0;
    $p = fopen("dati.txt", "r");
    while(!feof($p))
    {
        $arr=fgets($p);
        list($nome,$cognome,$eml,$pass) = explode(";",$arr);
        if(($eml == $email) && ($pass == $password))
        {
            $i = 1;
        } 
    }
    fclose($p);
    return $i;
}


function set_spesa($nome_file,$mele,$meloni,$arance,$spaghetti,$pennette,$riso,$bistecca,$salsiccia,$pollo,$salmone,$tonno,$polpo)
{
    $controllo=0;
    $file="./file-spesa/" ."$nome_file";
    
    if (false === file_exists($file)){
        $controllo=1;
    }

    if($controllo == 0){
    touch($file);
    }

    $p = fopen($file,"r");
    $row = fgets($p);
    fclose($p);

    list($mel,$melo,$arac,$spag,$pen,$ris,$bist,$sals,$pol,$salm,$tonn,$polp) = explode(";",$row);

    $p = fopen($file,"w");

       $mele= $mele + $mel;
       $meloni = $meloni + $melo;
       $arance =$arance + $arac;
       $spaghetti = $spaghetti + $spag;
       $pennette =$pennette + $pen;
       $riso = $riso + $ris;
       $bistecca = $bistecca + $bist;
       $salsiccia = $salsiccia + $sals;
       $pollo = $pollo + $pol;
       $salmone = $salmone + $salm;
       $tonno = $tonno + $tonn;
       $polpo = $polpo + $polp;

    
    $str = "$mele;$meloni;$arance;$spaghetti;$pennette;$riso;$bistecca;$salsiccia;$pollo;$salmone;$tonno;$polpo;";
    fwrite($p,$str);
    fclose($p);

}

function get_spesa($m)
{
    $tott=0;
    $nome_file= $m . ".txt";
    $file="./file-spesa/" ."$nome_file";
    
    $p = fopen($file,"r");
    $row = fgets($p);
    fclose($p);

    list($mele,$meloni,$arance,$spaghetti,$pennette,$riso,$bistecca,$salsiccia,$pollo,$salmone,$tonno,$polpo) = explode(";",$row);
    ?><ul class="collection with-header">
        <form action="" method="post" class="col s12">
        <li class="collection-header"><h5>Carrello</h5></li><?php
    if($mele != 0 )
    {
    ?>
        <li class="collection-item"><div>
            <?php
            echo "Mele = $mele &nbsp;";
            $cmele =   $mele * 0.90;
            $tott=$tott+$cmele;
            echo "&nbsp;&nbsp;&nbsp;&nbsp;$cmele"; ?>€&nbsp;&nbsp;&nbsp;
            <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="melepiu" ><i class="material-icons">add_circle_outline </i></button>
            <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="melemeno" ><i class="material-icons">remove_circle_outline</i></button>
            <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="meletogli" ><i class="material-icons"> highlight_off </i></button>
    </div></li><?php
    }
    if($meloni != 0 )
    {
        ?><li class="collection-item"><div>
        <?php
        echo "Meloni = $meloni &nbsp;";
        $cmeloni= $meloni * 3.25;
        $tott=$tott+$cmeloni;
        echo "&nbsp;&nbsp;&nbsp;&nbsp;$cmeloni"; ?>€&nbsp;&nbsp;&nbsp;
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="melonipiu" ><i class="material-icons">add_circle_outline </i></button>
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="melonimeno" ><i class="material-icons">remove_circle_outline</i></button>
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="melonitogli" ><i class="material-icons"> highlight_off </i></button>
    
        </div></li><?php
}
if($arance != 0 )
    {
        ?><li class="collection-item"><div>
        <?php
        echo "Arancia = $arance &nbsp;";
        $carance= $arance * 1.25;
        $tott=$tott+$carance;
        echo "&nbsp;&nbsp;&nbsp;&nbsp;$carance"; ?>€&nbsp;&nbsp;&nbsp;
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="arancepiu" ><i class="material-icons">add_circle_outline </i></button>
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="arancemeno" ><i class="material-icons">remove_circle_outline</i></button>
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="arancetogli" ><i class="material-icons"> highlight_off </i></button>
    
        </div></li><?php
    
}
if($spaghetti != 0 )
    {
        ?><li class="collection-item"><div>
        <?php
        echo "Spaghetti = $spaghetti &nbsp;";
        $cspaghetti= $spaghetti * 0.89;
        $tott=$tott+$cspaghetti;
        echo "&nbsp;&nbsp;&nbsp;&nbsp;$cspaghetti"; ?>€&nbsp;&nbsp;&nbsp;
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="spaghettipiu" ><i class="material-icons">add_circle_outline </i></button>
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="spaghettimeno" ><i class="material-icons">remove_circle_outline</i></button>
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="spaghettitogli" ><i class="material-icons"> highlight_off </i></button>
    
        </div></li><?php
    
}
if($pennette!= 0 )
    {
        ?><li class="collection-item"><div>
        <?php
        echo "Pennette = $pennette &nbsp;";
        $cpennette= $pennette * 0.89;
        $tott=$tott+$cpennette;
        echo "&nbsp;&nbsp;&nbsp;&nbsp;$cpennette"; ?>€&nbsp;&nbsp;&nbsp;
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="pennettepiu" ><i class="material-icons">add_circle_outline </i></button>
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="pennettemeno" ><i class="material-icons">remove_circle_outline</i></button>
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="pennettetogli" ><i class="material-icons"> highlight_off </i></button>
    
        </div></li><?php
    
}
if($riso != 0 )
    {
        ?><li class="collection-item"><div>
        <?php
        echo "Riso = $riso &nbsp;";
        $criso= $riso * 1.49;
        $tott=$tott+$criso;
        echo "&nbsp;&nbsp;&nbsp;&nbsp;$criso"; ?>€&nbsp;&nbsp;&nbsp;
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="risopiu" ><i class="material-icons">add_circle_outline </i></button>
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="risomeno" ><i class="material-icons">remove_circle_outline</i></button>
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="risotogli" ><i class="material-icons"> highlight_off </i></button>
    
        </div></li><?php
    
}
if($bistecca != 0 )
    {
        ?><li class="collection-item"><div>
        <?php
        echo "Bistecca = $bistecca &nbsp;";
        $cbistecca= $bistecca * 4;
        $tott=$tott+$cbistecca;
        echo "&nbsp;&nbsp;&nbsp;&nbsp;$cbistecca"; ?>€&nbsp;&nbsp;&nbsp;
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="bisteccapiu" ><i class="material-icons">add_circle_outline </i></button>
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="bisteccameno" ><i class="material-icons">remove_circle_outline</i></button>
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="bisteccatogli" ><i class="material-icons"> highlight_off </i></button>
    
        </div></li><?php
    
}
if($salsiccia != 0 )
    {
        ?><li class="collection-item"><div>
        <?php
        echo "Salsiccia = $salsiccia &nbsp;";
        $csalsiccia= $salsiccia * 3.50;
        $tott=$tott+$csalsiccia;
        echo "&nbsp;&nbsp;&nbsp;&nbsp;$csalsiccia"; ?>€&nbsp;&nbsp;&nbsp;
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="salsicciapiu" ><i class="material-icons">add_circle_outline </i></button>
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="salsicciameno" ><i class="material-icons">remove_circle_outline</i></button>
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="salsicciatogli" ><i class="material-icons"> highlight_off </i></button>
    
        </div></li><?php
    
}
if($pollo != 0 )
    {
        ?><li class="collection-item"><div>
        <?php
        echo "Pollo = $pollo &nbsp;";
        $cpollo= $pollo * 4.29;
        $tott=$tott+$cpollo;
        echo "&nbsp;&nbsp;&nbsp;&nbsp;$cpollo"; ?>€&nbsp;&nbsp;&nbsp;
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="pollopiu" ><i class="material-icons">add_circle_outline </i></button>
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="pollomeno" ><i class="material-icons">remove_circle_outline</i></button>
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="pollotogli" ><i class="material-icons"> highlight_off </i></button>
    
        </div></li><?php
    
}
if($salmone != 0 )
    {
        ?><li class="collection-item"><div>
        <?php
        echo "Salmone = $salmone &nbsp;";
        $csalmone= $salmone * 7.99;
        $tott=$tott+$csalmone;
        echo "&nbsp;&nbsp;&nbsp;&nbsp;$csalmone"; ?>€&nbsp;&nbsp;&nbsp;
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="salmonepiu" ><i class="material-icons">add_circle_outline </i></button>
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="salmonemeno" ><i class="material-icons">remove_circle_outline</i></button>
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="salmonetogli" ><i class="material-icons"> highlight_off </i></button>
    
        </div><?php
    
}
if($tonno != 0 )
    {
        ?><li class="collection-item"><div>
        <?php
        echo "Tonno = $tonno &nbsp;";
        $ctonno= $tonno * 6.50;
        $tott=$tott+$ctonno;
        echo "&nbsp;&nbsp;&nbsp;&nbsp;$ctonno"; ?>€&nbsp;&nbsp;&nbsp;
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="tonnopiu" ><i class="material-icons">add_circle_outline </i></button>
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="tonnomeno" ><i class="material-icons">remove_circle_outline</i></button>
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="tonnotogli" ><i class="material-icons"> highlight_off </i></button>
    
        </div></li><?php
    
}
if($polpo != 0 )
    {
        ?><li class="collection-item"><div>
        <?php
        echo "Polpo = $polpo &nbsp;";
        $cpolpo= $polpo * 11.49;
        $tott=$tott+$cpolpo;
        echo "&nbsp;&nbsp;&nbsp;&nbsp;$cpolpo"; ?>€&nbsp;&nbsp;&nbsp;
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="polpopiu" ><i class="material-icons">add_circle_outline </i></button>
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="polpomeno" ><i class="material-icons">remove_circle_outline</i></button>
        <button type="submit" value="Aggiungi" class="btn btn-primary btn-xs" name="polpotogli" ><i class="material-icons"> highlight_off </i></button>
        
        </div></li><?php
    
}


?></form></ul><?php
    $melepiu = isset($_POST['melepiu']) ? true: false;
    $melemeno = isset($_POST['melemeno']) ? true: false;
    $meletogli = isset($_POST['meletogli']) ? true: false;
    $melonipiu = isset($_POST['melonipiu']) ? true: false;
    $melonimeno = isset($_POST['melonimeno']) ? true: false;
    $melonitogli = isset($_POST['melonitogli']) ? true: false;
    $arancepiu = isset($_POST['arancepiu']) ? true: false;
    $arancemeno = isset($_POST['arancemeno']) ? true: false;
    $arancetogli = isset($_POST['arancetogli']) ? true: false;
    $spaghettipiu = isset($_POST['spaghettipiu']) ? true: false;
    $spaghettimeno = isset($_POST['spaghettimeno']) ? true: false;
    $spaghettitogli = isset($_POST['spaghettitogli']) ? true: false;
    $pennettepiu = isset($_POST['pennettepiu']) ? true: false;
    $pennettemeno = isset($_POST['pennettemeno']) ? true: false;
    $pennettetogli = isset($_POST['pennettetogli']) ? true: false;
    $risopiu = isset($_POST['risopiu']) ? true: false;
    $risomeno = isset($_POST['risomeno']) ? true: false;
    $risotogli = isset($_POST['risotogli']) ? true: false;
    $bisteccapiu = isset($_POST['bisteccapiu']) ? true: false;
    $bisteccameno = isset($_POST['bisteccameno']) ? true: false;
    $bisteccatogli = isset($_POST['bisteccatogli']) ? true: false;
    $salsicciapiu = isset($_POST['salsicciapiu']) ? true: false;
    $salsicciameno = isset($_POST['salsicciameno']) ? true: false;
    $salsicciatogli = isset($_POST['salsicciatogli']) ? true: false;
    $pollopiu = isset($_POST['pollopiu']) ? true: false;
    $pollomeno = isset($_POST['pollomeno']) ? true: false;
    $pollotogli = isset($_POST['pollotogli']) ? true: false;
    $salmonepiu = isset($_POST['salmonepiu']) ? true: false;
    $salmonemeno = isset($_POST['salmonemeno']) ? true: false;
    $salmonetogli = isset($_POST['salmonetogli']) ? true: false;
    $tonnopiu = isset($_POST['tonnopiu']) ? true: false;
    $tonnomeno = isset($_POST['tonnomeno']) ? true: false;
    $tonnotogli = isset($_POST['tonnotogli']) ? true: false;
    $polpopiu = isset($_POST['polpopiu']) ? true: false;
    $polpomeno = isset($_POST['polpomeno']) ? true: false;
    $polpotogli = isset($_POST['polpotogli']) ? true: false;

    if($melepiu==true){$mele = $mele+1;}
    if($melemeno==true && $mele>0){$mele = $mele-1;}
    if($meletogli==true){$mele = 0;}

    if($melonipiu==true){$meloni = $meloni+1;}
    if($melonimeno==true && $meloni>0){$meloni = $meloni-1;}
    if($melonitogli==true ){$meloni = 0;}

    if($arancepiu==true){$arance = $arance+1;}
    if($arancemeno==true && $arance>0){$arance = $arance-1;}
    if($arancetogli==true ){$arance = 0;}

    if($spaghettipiu==true){$spaghetti = $spaghetti+1;}
    if($spaghettimeno==true && $spaghetti>0){$spaghetti = $spaghetti-1;}
    if($spaghettitogli==true){$spaghetti = 0;}

    if($pennettepiu==true){$pennette = $pennette+1;}
    if($pennettemeno==true && $pennette>0){$pennette = $pennette-1;}
    if($pennettetogli==true){$pennette = 0;}

    if($risopiu==true){$riso = $riso+1;}
    if($risomeno==true && $riso>0){$riso = $riso-1;}
    if($risotogli==true){$riso = 0;}

    if($bisteccapiu==true){$bistecca = $bistecca+1;}
    if($bistecca==true && $bistecca>0){$bistecca = $bistecca-1;}
    if($bistecca==true){$bistecca = 0;}

    if($salsicciapiu==true){$salsiccia = $salsiccia+1;}
    if($salsicciameno==true && $salsiccia>0){$salsiccia = $salsiccia-1;}
    if($salsicciatogli==true){$salsiccia = 0;}

    if($pollopiu==true){$pollo = $pollo+1;}
    if($pollomeno==true && $pollo>0){$pollo = $pollo-1;}
    if($pollotogli==true){$pollo = 0;}

    if($salmonepiu==true){$salmone = $salmone+1;}
    if($salmonemeno==true && $salmone>0){$salmone = $salmone-1;}
    if($salmonetogli==true){$salmone = 0;}

    if($tonnopiu==true){$tonno = $tonno+1;}
    if($tonnomeno==true && $tonno>0){$tonno = $tonno-1;}
    if($tonnotogli==true){$tonno = 0;}

    if($polpopiu==true){$polpo = $polpo+1;}
    if($polpomeno==true && $polpo>0){$polpo = $polpo-1;}
    if($polpotogli==true){$polpo = 0;}
    

    $p = fopen($file,"w");
    $str = "$mele;$meloni;$arance;$spaghetti;$pennette;$riso;$bistecca;$salsiccia;$pollo;$salmone;$tonno;$polpo;";
    fwrite($p,$str);
    fclose($p);
    

    return $tott;

}

function get_utente($m)
{
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


    //vedi se tolgo l'if funziona, ma eliminando l'if il form rimane sempre evidente ma io non lo voglio evidente 
    //e non mi va bene sta cosa, ce non capisco 
    cambia_nome($m);
    //if($Modificanome==true){cambia_nome($m);}


    if($Modificacognome==true){cambia_cognome($m);}
    if($Modificapassword==true){cambia_password($m);}

}

function star_out_password($password,$number_show)
{
	$star = '';
	if(is_numeric($number_show) && $number_show < strlen($password))
    {
	    $star = str_repeat('*',(strlen($password) - $number_show)) . substr($password,-$number_show,$number_show);
	}
	return $star;
}

function cambia_nome($m)
{
    echo "Cambiare Nome";
    ?>
    <div class="row">
    <form action="" method="post" class="col s12">
      <div class="row">
        <div class="input-field col s5">
          <input type="text" name="cambianome" id="nome" placeholder="nome">
        </div>
      </div>
   </div>
    <div class="input-field col s6">
      <input type="submit" value="cambia" class="btn" name="cambia">
    </div>  </form>
<?php
    $cambia = isset($_POST['cambia']) ? true : false;
    $vet=array();
    $i=0;
   
    if($cambia)
    {
        $cam = $_REQUEST['cambianome'];
        $p = fopen("dati.txt", "r");
       while(!feof($p))
        {
            $arr=fgets($p);
            $vet[$i]=$arr;
            $i++;
        }
        fclose($p);
        for($j=0;$j<$i;$j++)
        {
            $var=$vet[$j];
            list($nom,$cogn,$eml,$pass) = explode(";",$var);
            if($m==$eml)
            {
                $nom=$cam;
                $str = "$nom;$cogn;$eml;$pass;\n";
                $vet[$j]=$str;
            }
        }

        $p = fopen("dati.txt", "w");
        for($j=0;$j<$i;$j++)
        {
            $c=$vet[$j];
            fwrite($p,$c);
        }
        fclose($p);
   }
    
}

function cambia_cognome($m)
{
    echo "Cambiare Cognome";
    ?>
    <div class="row">
    <form action="" method="post" class="col s12">
      <div class="row">
        <div class="input-field col s5">
          <input type="text" name="cambiacognome" id="nome" placeholder="cognome">
        </div>
      </div>
   </div>
    <div class="input-field col s6">
      <input type="submit" value="cambia" class="btn" name="cambia">
    </div>  </form>
<?php
   $cambia = isset($_POST['cambia']) ? true : false;
   $vet=array();
   $i=0;
   if($cambia==true){
    $cam = $_REQUEST['cambiacognome'];

    $p = fopen("dati.txt", "r");
    while(!feof($p))
    {
        $arr=fgets($p);
        $vet[$i]=$arr;
        $i++;
    }
    fclose($p);

    for($j=0;$j<$i;$j++)
    {
        $var=$vet[$j];
        list($nom,$cogn,$eml,$pass) = explode(";",$var);
        if($m==$eml)
        {
            $cogn=$cam;
            $str = "$nom;$cogn;$eml;$pass;\n";
            $vet[$j]=$str;
        }
    }
    $p = fopen("dati.txt", "w");
    for($j=0;$j<$i;$j++)
    {
        $c=$vet[$j];
        fwrite($p,$c);
    }
    fclose($p);
    }
}

function cambia_password($m)
{
    echo "Cambiare Password";
    ?>
    <div class="row">
    <form action="" method="post" class="col s12">
      <div class="row">
        <div class="input-field col s5">
          <input type="text" name="cambianome" id="nome" placeholder="password">
        </div>
      </div>
   </div>
    <div class="input-field col s6">
      <input type="submit" value="cambia" class="btn" name="cambia">
    </div>  </form>
<?php
   $cambia = isset($_POST['cambia']) ? true : false;
   $vet=array();
   $i=0;
   if($cambia==true){
    $cam = $_REQUEST['cambiapassword'];

    $p = fopen("dati.txt", "r");
    while(!feof($p))
    {
        $arr=fgets($p);
        $vet[$i]=$arr;
        $i++;
    }
    fclose($p);
    
    for($j=0;$j<$i;$j++)
    {
        $var=$vet[$j];
        list($nom,$cogn,$eml,$pass) = explode(";",$var);
        if($m==$eml)
        {
            $pass=$cam;
            $str = "$nom;$cogn;$eml;$pass;\n";
            $vet[$j]=$str;
        }
    }
    $p = fopen("dati.txt", "w");
    for($j=0;$j<$i;$j++)
    {
        $c=$vet[$j];
        fwrite($p,$c);
    }
    fclose($p);
    }
}



function azzera_spesa($m)
{
    $nome_file= $m . ".txt";
    $file="./file-spesa/" ."$nome_file";
    $azzera="0;0;0;0;0;0;0;0;0;0;0;0;";
    $p = fopen($file,"w");
    fwrite($p,$azzera);
    fclose($p);
}

?>