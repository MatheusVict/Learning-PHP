<?php

//localhost:3030?nome=matheus  === query string ou query params
//localhost:3030?nome=matheus&email=oi@email.com&idada=18

/*var_dump($_GET);
var_dump($_COOKIE);
die;*/

$url = $_GET['url'];

if ($url == '/') {
    echo 'home';
}

if ($url == '/gato') {
    echo 'Fofinha de papai';
}
