<?php error_reporting (E_ALL ^ E_NOTICE);

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

function set_spesa($gen_email,$mele,$meloni,$arance,$spaghetti,$pennette,$riso,$bistecca,$salsiccia,$pollo,$salmone,$tonno,$polpo)
{
    $str="$gen_email;$mele;$meloni;$arance;$spaghetti;$pennette;$riso;$bistecca;$salsiccia;$pollo;$salmone;$tonno;$polpo;\n";
    $p = fopen("spesa.txt", "a+");
    while(!feof($p))
    {
        $row=fgets($p);
        list($email,$mel,$melo,$arac,$spag,$pen,$ris,$bist,$sals,$pol,$salm,$tonn,$polp) = explode(";",$row);
        if( $gen_email == $email)
        {
            fwrite($p,$str);
        } 
    }
    fclose($p);
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