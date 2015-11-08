<?php
/**
 * Created by PhpStorm.
 * User: 201037629
 * Date: 2015-10-29
 * Time: 15:11
 */
include_once("GestionaireDeVote.php");

$gestionaire = new GestionaireDeVote();

    if(isset($_POST["animal"]))
    {

        if(isset($_SESSION["NbVotes"]) && (int)$_SESSION["NbVotes"] < 3) {
            $gestionaire->insertVote($_POST["animal"]);
            $_SESSION["NbVotes"] = $_SESSION["NbVotes"] + 1;
        }

    }

   $lesvotes = $gestionaire->readVote();
