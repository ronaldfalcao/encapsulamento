<?php
/**
 * Created by PhpStorm.
 * User: Ronald
 * Date: 26/07/2015
 * Time: 12:09
 */

namespace cadastro;


class PessoaOld
{
    public $nome;
    public $endereco;
    public $rg;
    public $cpf;

    function __construct($nome){
        $this->nome = $nome;
    }


}