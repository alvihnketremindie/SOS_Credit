<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 29/04/15
 * Time: 14:05
 */

if(ctype_digit($content) )
{
    if($content == 1)
    {
        insertLangue($telephone);
        $tab = array('FB','inter','BIENVENU');
    }
    elseif($content == 2)
    {
        $tab = array('FC','menuLangue','CHOIX_LANGUE');
    }
}