<?php

require_once 'view/repeating/head.php';
require_once 'view/repeating/navbar.php';

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'inicio') {
        $title = "Ínicio";
        require_once 'view/inicio.php'
    }

    if ($_GET['action'] == 'servico') {
        $title = "Serviço";
        require_once 'view/servico.php'
    }

    if ($_GET['action'] == 'quemSomos') {
        $title = "Quem Somos";
        require_once 'view/quemSomos.php'
    }
    
    if ($_GET['action'] == 'perguntasFrequentes') {
        $title = "Perguntas Frequentes";
        require_once 'view/perguntasFrequentes.php'
    }

    if ($_GET['action'] == 'contato') {
        $title = "Contato";
        require_once 'view/contato.php'
    }
} else {
    $title = "Ínicio";
    require_once 'view/inicio.php'
}

?>