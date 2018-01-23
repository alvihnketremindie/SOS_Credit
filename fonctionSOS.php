<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 29/04/15
 * Time: 09:10
 */

function insertLangue($telephone)
{
    global $link;

    $req = "SELECT langue FROM subscriber WHERE telephone = '$telephone'";
    $sql = mysqli_query($link,$req);
    if($sql)
    {
        $file = "log/".$telephone.".txt";
        $langue = file_get_contents($file);

        if($assoc = mysqli_fetch_assoc($sql))
        {
            update($telephone,$langue);
        }
        else
        {
            insert($telephone);
        }
    }
}

function testLangue($telephone)
{

    global $link;

    $req = "SELECT langue FROM subscriber WHERE telephone = '$telephone'";
    $sql = mysqli_query($link,$req);
    if($sql)
    {
        return ($assoc = mysqli_fetch_assoc($sql));
    }

}

function update($telephone,$langue)
{
    global $link;
    $req = "UPDATE subscriber SET langue = '$langue' WHERE telephone = '$telephone'";
    mysqli_query($link,$req);
}

function insert($telephone)
{
    global $link;
    $req = "INSERT INTO subscriber (subId,telephone,langue) VALUES ('','$telephone','$langue') ";
    mysqli_query($link,$req);
}