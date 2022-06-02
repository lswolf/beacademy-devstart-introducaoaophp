<?php
$url = $_SERVER['REQUEST_URI'];
echo match($url){
    default => "Pagina não encontrada 404",
    '/'=> "pagina inicial",
    '/login'=> "pagina de login",
    '/cadastro'=> "pagina de cadastro",
    '/sistema'=> "pagina inicial do sistema",

};