<?php

function set_file($nome, $cognome, $email, $password)
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

/*function get_file($email, $password)
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
}*/

?>