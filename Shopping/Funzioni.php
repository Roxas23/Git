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
    $nome_file= $m . ".txt";
    $file="./file-spesa/" ."$nome_file";
    
    $p = fopen($file,"r");
    $row = fgets($p);
    fclose($p);

    list($mele,$meloni,$arance,$spaghetti,$pennette,$riso,$bistecca,$salsiccia,$pollo,$salmone,$tonno,$polpo) = explode(";",$row);
    ?><table class="highlight">
    <thead>
    <tr>
        <th>Spesa</th>
        <th>Quantità</th>
        <th>Costo</th>
        </tr>
    </thead>
    <tbody>
        <?php

        if($mele != 0 ){
            ?><tr>
                <td>Mele:</td>
                <td><?php echo $mele; ?></td>
                <td><?php echo $mele * 0.90; ?>€</td>
            </tr>
            <?php
        }
        if($meloni != 0 ){
            ?><tr>
                <td>Meloni:</td>
                <td><?php echo $meloni; ?></td>
                <td><?php echo $meloni * 3.25; ?>€</td>
            </tr>
            <?php
        }
        if($arance != 0 ){
            ?><tr>
                <td>Arance:</td>
                <td><?php echo $arance; ?></td>
                <td><?php echo $arance * 1.25; ?>€</td>
            </tr>
            <?php

        }
        if($spaghetti != 0){
            ?><tr>
                <td>Spaghetti:</td>
                <td><?php echo $spaghetti; ?></td>
                <td><?php echo $spaghetti * 0.89; ?>€</td>
            </tr>
            <?php

        }
        if($pennette != 0 ){
            ?><tr>
                <td>Pennette:</td>
                <td><?php echo $pennette; ?></td>
                <td><?php echo $pennette * 0.89; ?>€</td>
            </tr>
            <?php

        }
        if($riso != 0){
            ?><tr>
                <td>Riso:</td>
                <td><?php echo $riso; ?></td>
                <td><?php echo $riso * 1.49; ?>€</td>
            </tr>
            <?php
            
        }
        if($bistecca != 0 ){
            ?><tr>
                <td>Bistecca:</td>
                <td><?php echo $bistecca; ?></td>
                <td><?php echo $bistecca * 4; ?>€</td>
            </tr>
            <?php
            
        }
        if($salsiccia != 0 ){
            ?><tr>
                <td>Salsiccia:</td>
                <td><?php echo $salsiccia; ?></td>
                <td><?php echo $salsiccia * 3.5; ?>€</td>
            </tr>
            <?php
            
        }
        if($pollo != 0 ){
            ?><tr>
            <td>Pollo:</td>
            <td><?php echo $pollo; ?></td>
            <td><?php echo $pollo * 4.29; ?>€</td>
        </tr>
        <?php
            
        }
        if($salmone != 0){
            ?><tr>
                <td>Salmone:</td>
                <td><?php echo $salmone; ?></td>
                <td><?php echo $salmone * 7.99; ?>€</td>
            </tr>
            <?php
            
        }
        if($tonno != 0){
            ?><tr>
                <td>Tonno:</td>
                <td><?php echo $tonno; ?></td>
                <td><?php echo $tonno * 6.50; ?>€</td>
            </tr>
            <?php
            
        }
        if($polpo != 0){
            ?><tr>
                <td>Polpo:</td>
                <td><?php echo $polpo; ?></td>
                <td><?php echo $polpo * 11.49; ?>€</td>
            </tr>
            <?php
        }

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
            ?><table class="highlight">
                <thead>
                <tr>
                    <th>Area Personale</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nome: <?php echo $nome; ?></td>
                    </tr>
                    <tr>
                        <td>Cognome: <?php echo $cognome; ?></td>
                    </tr>
                    <tr>
                        <td>Email: <?php echo $eml; ?></td>
                    </tr>
                </tbody>
            </table>
            <?php
        } 
    }
    fclose($p);

}



?>

