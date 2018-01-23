<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 29/04/15
 * Time: 11:17
 */
if(ctype_digit($content) )
{
    if($content == 1 )
    {
        $lg = testLangue($telephone);
        if($lg)
        {
            $lag = $lg['langue'];
            $tab = array('FC','menu'.$lag.'Langue','CHOIX_LANGUE');
        }


    }
    elseif($content == 2 )
    {

        $tab = array('FC','inter','INFO');
    }
    elseif($content == 3)
    {
        $tab = array('FC','Souscription','');
    }

}