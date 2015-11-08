<?php

/**
 * Created by PhpStorm.
 * User: Razma
 * Date: 2015-11-08
 * Time: 10:10
 */
class GestionaireDeVote
{
    function insertVote($valueOfVote)
    {

        $resource = fopen("Gestionaire.txt", "a+");

        if($resource)
        {
           fwrite($resource,$valueOfVote."\n");

        }
        fclose($resource);
    }

    function readVote()
    {

        for($i = 0; $i < 5 ; $i++)
        {
            $voteArray[$i] = 0;
        }

        $resource = file("Gestionaire.txt");


           for ($j = 0 ; $j < count($resource);$j++)
           {
               switch ($resource[$j]) {
                   case "Chien"."\n":
                       $voteArray[0]++;
                       break;
                   case "Chat"."\n":
                       $voteArray[1]++;
                       break;
                   case "Oiseau"."\n":
                       $voteArray[2]++;
                       break;
                   case "Serpent"."\n":
                       $voteArray[3]++;
                       break;
                   case "Singe"."\n":
                       $voteArray[4]++;
                       break;
               }
           }

        $voteArray[5] =  count($resource);
        return $voteArray;
    }

}