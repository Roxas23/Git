


<?php //error_reporting (E_ALL ^ E_NOTICE);

function set_dati($nome, $cognome, $email, $password)
{
    $i=0;
    $p = fopen("dati.txt", "a+");
    while(!feof($p))
    {
        $row=fgets($p);
        list($nom,$cogn,$eml,$pass) = explode(";",$row);
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

function set_spesa($m,$mele,$meloni,$arance,$spaghetti,$pennette,$riso,$bistecca,$salsiccia,$pollo,$salmone,$tonno,$polpo)
{
    $i=0;
    $p = fopen("spesa.txt", "a+");
    while(!feof($p))
    {
        $row=fgets($p);
        list($email,$mel,$melo,$arac,$spag,$pen,$ris,$bist,$sals,$pol,$salm,$tonn,$polp) = explode(";",$row);
        if($email == $m)
        {
            if($mel !=$mele && $mele > 0 ){
                $mel = $mele;
            }
            if($melo!=$meloni && $meloni > 0 ){
                $melo =$meloni;
            }
            if($arac!=$arance && $arance > 0 ){
                $aranc =$arance;
            }
            if($spag !=$spaghetti && $spaghetti > 0 ){
                $spag = $spaghetti;
            }
            if($pen!=$pennette && $pennette > 0 ){
                $pen =$pennette;
            }
            if($ris!=$riso && $riso > 0 ){
                $ris =$riso;
            }
            if($bist !=$bistecca && $bistecca > 0 ){
                $bist = $bistecca;
            }
            if($sals!=$salsiccia && $salsiccia > 0 ){
                $sals =$salsiccia;
            }
            if($pol!=$pollo && $pollo > 0 ){
                $pol =$pollo;
            }
            if($salm != $salmone && $salmone > 0 ){
                $salm = $salmone;
            }
            if($tonn!=$tonno && $tonno > 0 ){
                $tonn =$tonno;
            }
            if($polp!=$polpo && $polpo > 0 ){
                $polp =$polpo;
            }
            $str="$m;$mel;$melo;$arac;$spag;$pen;$ris;$bist;$sals;$pol;$salm;$tonn;$polp;\n";
            $i=1;
        }
        if($i!=1){
        $str="$m;$mel;$melo;$arac;$spag;$pen;$ris;$bist;$sals;$pol;$salm;$tonn;$polp;\n";
        }
        fwrite($p, $str);
    }
    fclose($p);
}

function azzera_spesa()
{

}

function get_spesa($gen_email)
{
    $p = fopen("spesa.txt", "r");
    while(!feof($p))
    {
        $row=fgets($p);
        list($email,$mel,$melo,$arac,$spag,$pen,$ris,$bist,$sals,$pol,$salm,$tonn,$polp) = explode(";",$row);
        if($gen_email == $email)
        {
            return $row;
        }
    }
    fclose($p);
    return 0;
}


function get_dati($email, $password)
{
    $i = 0;
    $p = fopen("dati.txt", "r");
    while(!feof($p))
    {
        $row=fgets($p);
        list($nome,$cognome,$eml,$pass) = explode(";",$row);
        if(($eml == $email) && ($pass == $password))
        {
            return $i = 1;  
        } 
    }
    fclose($p);
    return $i;
}



?>