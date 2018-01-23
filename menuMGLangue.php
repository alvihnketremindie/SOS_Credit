<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 29/04/15
 * Time: 10:20
 */

if(ctype_digit($content) )
{
    if($content == 1 )
    {
        $file = "log/".$telephone.".txt";
        file_put_contents($file,"FR");
        $tab = array('FC','ConfirmerOuAnnuler','choixLangue_FR');

    }
    elseif($content == 2)
    {
        $file = "log/".$telephone.".txt";
        file_put_contents($file,"EN");
        $tab = array('FC','ConfirmerOuAnnuler','choixLangue_EN');
    }
    elseif($content == 3)
    {
        $file = "log/".$telephone.".txt";
        file_put_contents($file,"MG");
        $tab = array('FC','ConfirmerOuAnnuler','choixLangue_MG');
    }
    else
    {
        $tab = array('FC','nouvelleSouscription','CHOIX_LANGUE');
    }





}