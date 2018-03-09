<?php


require_once 'controllers/ContatoController.php';

$controller = new ContatoController();

if(empty($_REQUEST['action'])) $action='index';
else $action=$_REQUEST['action'];

$controller->$action();



