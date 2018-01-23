<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 29/04/15
 * Time: 09:11
 */


$req = "SELECT * FROM subscriber WHERE telephone = '$telephone' AND eligible = 'oui' " ;
$sql = mysqli_query($link,$req);
if($sql)
{
    if($assoc = mysqli_fetch_assoc($sql))
    {
        $langue = $assoc['langue'];
        $statut = $assoc['eligible'];
        if($statut = 'oui')
        {
            $langue = $assoc['langue'];
            if($langue = 0)
            {
                echo " la langue par default est : francais";
                $tab = array('FC','choixMenu','CHOIX_MENU1');
            }
            else
            {
                echo " la langue par default est :".$langue;
                $tab = array('FC','choixMenu','CHOIX_MENU2');
            }
        }
        else
        {
            echo " la langue par default est :".$langue;
            $tab = array('FC','choixMenuNonEligible','CHOIX_MENU1');
        }
    }
    else
    {

    }
}
else
{
    echo " la langue par default est : francais";
    $tab = array('FC','menu','CHOIX_MENU1');
}