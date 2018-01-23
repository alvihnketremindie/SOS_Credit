<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 29/04/15
 * Time: 09:10
 */
define ('MYSQL_USERNAME', 'root');
define ('MYSQL_HOSTNAME', 'localhost');
define ('MYSQL_PASSWORD', '');
define ('MYSQL_DATABASE', 'soscredit');





DEFINE('ERREUR_SELECTION_BD_FR','DESOLE LE SERVICE EST INDISPONIBLE POUR L INSTANT , MERCI DE REESSAYER PLUS TARD');

DEFINE('BIENVENU_FR','Cher Client, desormais votre language par defaut est le Français. Merci.  1. MENU PRINCIPAL   2. QUITTER');
DEFINE('CHOIX_MENU1_FR','BIENVENUE CHER ABONNE {CR} 1. CHOISIR UNE LANGUE {CR} 2. INFORMATION  3. SOUSCRIPTION');
DEFINE('CHOIX_MENU2_FR','BIENVENUE CHER ABONNE {CR} 1. CHANGE LA LANGUE {CR} 2. INFORMATION  3. SOUSCRIPTION');
DEFINE('CHOIX_LANGUE_FR','BIENVENUE CHER ABONNE , CHOISSISSEZ VOTRE LANGUE {CR} 1.ANGLAIS  {CR} 2. MALGACHE  3. CONTINUE AVEC LA LANGUE PAR DEFAUT');
DEFINE('INFO_FR','SOS CREDIT vous permet de faire une demande d avance de crédit en fonction de vos habitudes de consommation, à rembourser avec 10% de frais de service  1. MENU PRINCIPAL   2. QUITTER ');
DEFINE('choixLangue_EN_FR','  CONFIRMEZ VOUS  L  ANGLAIS  COMME LANGUE CHOISI?  \n 1. VALIDER  \n 2. ANNULER ');
DEFINE('choixLangue_FR_FR','  CONFIRMEZ VOUS  LE FRANCAIS  COMME LANGUE CHOISI?  \n 1. VALIDER  \n 2. ANNULER ');
DEFINE('choixLangue_MG_FR','  CONFIRMEZ VOUS  lE MALGACHE  COMME LANGUE CHOISI?  \n 1. VALIDER  \n 2. ANNULER ');
DEFINE('BYE_BYE_FR','MERCI D AVOIR UTILISER SOS CREDIT ');


DEFINE('ERREUR_SELECTION_BD_EN','DESOLE LE SERVICE EST INDISPONIBLE POUR L INSTANT , MERCI DE REESSAYER PLUS TARD');
DEFINE('BIENVENU_EN','Dear Customer, your request to use English as default language has been successfull.');
DEFINE('CHOIX_MENU1_EN',' welcom dear Customer{CR} 1. Choose your language {CR} 2. Explanation  3. SOUSCRIPTION');
DEFINE('CHOIX_MENU2_EN','welcom dear Customer {CR} 1. CHANGE your language {CR} 2. Explanation  3. SOUSCRIPTION');
DEFINE('CHOIX_LANGUE_EN','BIENVENUE CHER ABONNE , CHOISSISSEZ VOTRE LANGUE {CR} 1.FRANCAIS  {CR} 2. MALGACHE  3. CONTINUE AVEC L ANGLAIS');
DEFINE('INFO_EN','SOS CREDIT allows you to apply for a credit advance depending on your spending habits, to pay 10% service charge');
DEFINE('choixLangue_EN_EN','  CONFIRMEZ VOUS  L  ANGLAIS  COMME LANGUE CHOISI?  \n 1. VALIDER  \n 2. ANNULER ');
DEFINE('choixLangue_FR_EN','  CONFIRMEZ VOUS  LE FRANCAIS  COMME LANGUE CHOISI?  \n 1. VALIDER  \n 2. ANNULER ');
DEFINE('choixLangue_MG_EN','  CONFIRMEZ VOUS  lE MALGACHE  COMME LANGUE CHOISI?  \n 1. VALIDER  \n 2. ANNULER ');
DEFINE('BYE_BYE_EN','MERCI D AVOIR UTILISER SOS CREDIT ');

DEFINE('BIENVENU_MG','Tompoko, tontosa ny fangatahanao hampiasa ny teny malagasy.');
DEFINE('CHOIX_MENU1_MG','BIENVENUE CHER ABONNE {CR} 1. CHOISIR UNE LANGUE {CR} 2. INFORMATION  3. SOUSCRIPTION');
DEFINE('CHOIX_MENU2_MG','BIENVENUE CHER ABONNE {CR} 1. CHANGE LA LANGUE {CR} 2. INFORMATION  3. SOUSCRIPTION');

/*DEFINE('','');



DEFINE('BYE_BYE_FR','MERCI D AVOIR UTILISER SOS CREDIT ');

DEFINE('','');
DEFINE('','');
DEFINE('','');
DEFINE('','');
DEFINE('','');
*/
function dbConnect()
{
    if ($link = mysqli_connect(MYSQL_HOSTNAME, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE))
    {
        return $link;
    }
    else
    {
        return FALSE;
    }
}

function test ($telephone)
{
    global $link;
    $req = "SELECT * FROM subscriber WHERE telephone = '$telephone' ";
    $sql = mysqli_query($link,$req);
    if($sql)
    {
         return $assoc = mysqli_fetch_assoc($sql);
    }
    else
    {
        return false;
    }

}
