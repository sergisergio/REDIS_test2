<?php

require 'vendor/autoload.php';

$oClient = new Predis\Client(array(
    "scheme" => "tcp",
    "host" => "redis-13768.c74.us-east-1-4.ec2.cloud.redislabs.com",
    "port" => 13768,
    "password" => "bg0ggLwMxGY3HQxFoQCHjpgAyfxJRJBo")
);

$oClient->set("foo", "bar");
$value = $oClient->get("foo");
var_dump($value);

echo '<hr>';
// cas classique enregitsrement d'un key avec sa valeur sans contrainte
$oClient->set('test', 'Hello World');

// la key test sera disponible 10 secondes (elle expire au bout de 10 secondes
//$oClient->set('test', 'Hello World', 'ex', 10);

// la key test sera disponible 5 secondes (elle expire au bout de 5 secondes (écrit en millisecondes)
//$oClient->set('test', 'Hello World', 'px', 5000);

// la key test sera affectée seulement si elle n'existait pas avant
//$oClient->set('test', 'Hello World', 'nx');

// la key test sera affectée seulement si elle existait avant
//$oClient->set('test', 'Hello World', 'xx');






echo $oClient->get('test');
