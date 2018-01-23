<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 29/04/15
 * Time: 09:08
 */
header('Content-type:text/plain;charset=utf8');

$path = dirname(__FILE__);

$shortcode = $_REQUEST['DA'];
$smscid = @$_REQUEST['smscid'];
$telephone =  substr($_REQUEST['SOA'], -8);
$content = str_replace(' ','',$_REQUEST['Content']);
$content = strtoupper($content);
$date = @date('Y-m-d H:i:s');
$canal = $_REQUEST['canal'];
$next = trim($_REQUEST['next']);

include 'fonctionSOS.php';
include 'parametreSOS.php';

$link = dbConnect();
$langue = test ($telephone);
$tab = array('FB', 'menu', 'ERREUR_SELECTION_BD');

if($link)
{

    if($langue)
    {
       $langue = $langue['langue'];
        // print $path.'/'.$next.'.php';
        if (file_exists($path.'/'.$next.'.php'))
        {
            require_once($next. '.php');
        }
        else
        {
            require_once('menu.php');
        }

        #insertCallers($date,$telephone,$shortcode,$content,$tab[2],$canal);
        mysqli_close($link);
    }
    else
    {
        $langue = 'FR';
        if (file_exists($path.'/'.$next.'.php'))
        {
            require_once($next. '.php');
        }
        else
        {
            require_once('menu.php');
        }
        #insertCallers($date,$telephone,$shortcode,$content,$tab[2],$canal);
        mysqli_close($link);
    }

}

header("FreeFlow: $tab[0]");
header("next: $tab[1]");

print ('FreeFlow: '.$tab[0]."\r\n");
print ('next: '.$tab[1]."\r\n");
print(constant($tab[2]."_".$langue));
