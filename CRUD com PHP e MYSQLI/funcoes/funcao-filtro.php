<?php

function limparstring($string){
    
    $filtro=filter_var($string, FILTER_SANITIZE_STRING);
    $linha=strip_tags($filtro);

    return $linha;
}