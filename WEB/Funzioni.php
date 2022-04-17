<?php
    function set_file($nome, $cognome, $email, $password)
    {
        $p = fopen("file.txt", "a");
        $str = "$nome;$cognome;$email;$password;\n";
        fwrite($p,$str);
        fclose($p);
    }

    function get_file($email, $password)
    {
        $i = 0;
        $p = fopen("file.txt", "r");
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


