<?php


$rota = $_SERVER["REQUEST_URI"];
$metodo = $_SERVER["REQUEST_METHOD"];

require "./controller/FilmesController.php";

switch($rota){
     case "/": 
        require "view/filmes.php";
        break;
     case "/novo": 
        if($metodo == "GET") require "view/cadastro.php";
        if($metodo == "POST") {
            $controller = new FilmesController();
            $controller->save($_REQUEST);
        };
        break;
}