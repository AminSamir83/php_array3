<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 10/11/2018
 * Time: 17:05
 */
$chaine="Daghe Munegu";
$tab=count_chars($chaine,1);
foreach ($tab as $index=> $value)
{


    echo "<br>".chr($index).": ".$value;
}


?>
