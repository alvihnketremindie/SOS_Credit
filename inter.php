<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 29/04/15
 * Time: 14:53
 */

if(ctype_digit($content))
{
    if($content == 1)
    {
        $req = "SELECT * FROM subscriber WHERE telephone = '$telephone' ";
        $sql = mysqli_query($link,$req);
        if($sql)
        {
            if($assoc = mysqli_fetch_assoc($sql))
            {
                $langue = $assoc['langue'];
                if($langue = 0)
                {
                    echo " la langue par default est : francais";
                    $tab = array('FC','choixMenu','CHOIX_MENU1');
                }
                else
                {
                    $langue = $assoc['langue'];
                    $tab = array('FC','choixMenu','CHOIX_MENU2');
                }
            }
            else
            {
                echo " la langue par default est : francais";
                $tab = array('FC','choixMenu','CHOIX_MENU1');
            }
        }
        else
        {
            echo " la langue par default est : francais";
            $tab = array('FC','menu','CHOIX_MENU1');
        }
    }
    elseif($content == 2)
    {
        $tab = array('FB','menu','BYE_BYE');
    }
}