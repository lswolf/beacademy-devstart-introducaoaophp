<?php
include 'funcoes.php';
include 'telas/head.php';
$url = $_SERVER['REQUEST_URI'];
include 'telas/menu.php';
$r = match($url){
    default => include 'telas/404.php',
    '/'=> include 'telas/home.php',
    '/login'=> include 'telas/login.php',
    '/cadastro'=> include 'telas/cadastro.php',
    '/listar'=>include 'telas/listar.php'
};
include 'telas/footer.php';