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


function set_spesa($nome_file,$mele,$meloni,$arance,$spaghetti,$pennette,$riso,$bistecca,$salsiccia,$pollo,$salmone,$tonno,$polpo)
{
    $p = fopen("spesa.txt","r");
    $row = fgets($p);
    fclose($p);

    list($mel,$melo,$arac,$spag,$pen,$ris,$bist,$sals,$pol,$salm,$tonn,$polp) = explode(";",$row);

    $p = fopen("spesa.txt","w");

    if($mele < $mel ){
        $mele = $mel;
    }
    if($meloni < $melo ){
        $meloni =$melo;
    }
    if($arance < $arac ){
        $arance =$arac;
    }
    if($spaghetti < $spag){
        $spaghetti = $spag;
    }
    if($pennette < $pen ){
        $pennette =$pen;
    }
    if($riso < $ris){
        $riso = $ris;
    }
    if($bistecca < $bist ){
        $bistecca = $bist;
    }
    if($salsiccia < $sals ){
        $salsiccia = $sals;
    }
    if($pollo < $pol ){
        $pollo = $pol;
    }
    if($salmone < $salm ){
        $salmone = $salm;
    }
    if($tonno < $tonn){
        $tonno =$tonn;
    }
    if($polpo< $polpo){
        $polpo =$polp;
    }
    
    $str = "$mele;$meloni;$arance;$spaghetti;$pennette;$riso;$bistecca;$salsiccia;$pollo;$salmone;$tonno;$polpo;";
    fwrite($p,$str);
    echo $str;
    fclose($p);

}

function prova($nome_file)
{

    $file="/Applications/XAMPP/xamppfiles/htdocs/Git/Shopping/file-spesa/" ."$nome_file";
    echo "$file";

    //creare file
    //touch($file);

    $p = fopen($file,"w");
    fclose($p);

    //cancellare file
    /*$file = 'miofile.txt';
    if (unlink($file)) {
    echo 'il file è stato cancellato';
    }else{
    echo 'il file NON è stato cancellato';
    }*/
}


?>