<?php
/**
 * Created by PhpStorm.
 * User: Ronald
 * Date: 26/07/2015
 * Time: 11:56
 */

namespace cadastro;


class Pessoa
{
    private $primeiroNome;
    private $nomeMeio;
    private $sobreNome;
    private $endereco;
    private $rg;
    private $cpf;

    function __construct($primeiroNome, $nomeMeio, $sobreNome){
        $this->primeiroNome = $primeiroNome;
        $this->nomeMeio = $nomeMeio;
        $this->sobreNome = $sobreNome;
    }

    function retornaNome(){
        return $this->primeiroNome." ".$this->nomeMeio." ".$this->sobreNome;
    }

    function retornaSobrenomePrimeiro(){
        return $this->sobreNome.', '.$this->primeiroNome." ".$this->nomeMeio;
    }

}