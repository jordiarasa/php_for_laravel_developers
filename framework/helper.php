<?php

function dd($xivato)
{
    var_dump($xivato);
    die();
}

function greet()
{
    return "Hola " . $_GET["nom"] . " " . $_GET["Cognom"] . "!";
}