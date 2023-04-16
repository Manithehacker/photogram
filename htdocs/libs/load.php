<?php

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT'] . "/templates/$name.php"; 
    //print_r($_SERVER['DOCUMENT_ROOT']);//not consistant
   
}
?>