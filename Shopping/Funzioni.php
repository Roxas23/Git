


<?php //error_reporting (E_ALL ^ E_NOTICE);

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

function set_spesa($m,$mele,$meloni,$arance,$spaghetti,$pennette,$riso,$bistecca,$salsiccia,$pollo,$salmone,$tonno,$polpo)
{
    $i=0;
    $p = fopen("spesa.txt", "a+");
    while(!feof($p))
    {
        $arr=fgets($p);
        list($email,$mel,$melo,$arac,$spag,$pen,$ris,$bist,$sals,$pol,$salm,$tonn,$polp) = explode(";",$arr);
        if($email == $m)
        {
            if($mel !=$mele && $mele > 0 ){
                $mel = $mele;
            }
            if($melo!=$meloni && $meloni > 0 ){
                $melo =$meloni;
            }
            if($arac!=$arance && $arance > 0 ){
                $arac =$arance;
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
        if($i==0){
        fwrite($p, $arr);
        }
        fwrite($p, $str);
       
    }
    fclose($p);
}

function spesa($m,$mele,$meloni,$arance,$spaghetti,$pennette,$riso,$bistecca,$salsiccia,$pollo,$salmone,$tonno,$polpo)
{
    $arr=array();
    $i=0;
    $p = fopen("spesa.txt", "r");
    while(!feof($p))
    {
        $arr[$i]=fgets($p);
        echo "$arr[$i]";
        $i++;
    }
    fclose($p);
    
    $p = fopen("spesa.txt", "w");
    for($j=0;$j<$i;$j++)
    {
        list($email,$mel,$melo,$arac,$spag,$pen,$ris,$bist,$sals,$pol,$salm,$tonn,$polp) = explode(";",$arr[$j]);
        if($email == $m)
        {
            if($mel !=$mele && $mele > 0 ){
                $mel = $mele;
            }
            if($melo!=$meloni && $meloni > 0 ){
                $melo =$meloni;
            }
            if($arac!=$arance && $arance > 0 ){
                $arac =$arance;
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
            $str="$email;$mel;$melo;$arac;$spag;$pen;$ris;$bist;$sals;$pol;$salm;$tonn;$polp;\n";
            fwrite($p,$str);
            
        }
        else{
            fwrite($p,$arr[$j]);
        }

    }
    fclose($p);
}

function get_spesa($gen_email)
{
    $p = fopen("spesa.txt", "r");
    while(!feof($p))
    {
        $arr=fgets($p);
        list($email,$mel,$melo,$arac,$spag,$pen,$ris,$bist,$sals,$pol,$salm,$tonn,$polp) = explode(";",$arr);
        if($gen_email == $email)
        {
            return $arr;
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
        $arr=fgets($p);
        list($nome,$cognome,$eml,$pass) = explode(";",$arr);
        if(($eml == $email) && ($pass == $password))
        {
            return $i = 1;  
        } 
    }
    fclose($p);
    return $i;
}



?>