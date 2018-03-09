<?php

include_once("models/contato.php");
include_once("config/Database.php");
//include_once("model/user.php");

class Model
{
    protected $database;


    public function __construct()
    {
        $this->database = new Database();

    }

    public function adciona($val)
    {
        $tabela = 'produtos';
        //$this->database->testa_dados($val);

    }
















}