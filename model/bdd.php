<?php
class Bdd{

    public static function connexion()
    {
        try
        {
            $bdd = new PDO('mysql:host=localhost;port=8889;dbname=util', 'root', 'root');
            //echo "Connexion OK\n";
            return $bdd;
        }
        catch(Exception $e)
        {
            echo $e;
        }
    }

}

?>