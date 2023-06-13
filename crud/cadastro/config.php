<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "ivan_tutor_trabalho";
$port = 3306;

//cria uma conexão com o mysql
$config = new mysqli($host, 
                      $user, 
                      $password,
                      $database,
                      $port);

//verifica se existe erros na conexão                      
if($config->connect_error){
    echo $config->connect_error;
    die();
}