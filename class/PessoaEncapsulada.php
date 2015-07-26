<?php
/**
 * Created by PhpStorm.
 * User: Ronald
 * Date: 26/07/2015
 * Time: 12:31
 */

namespace cadastro;


class PessoaEncapsulada
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

    public function getPrimeiroNome()
    {
        return $this->primeiroNome;
    }

    public function getNomeMeio()
    {
        return $this->nomeMeio;
    }

    public function getSobreNome()
    {
        return $this->sobreNome;
    }

    function retornaNome(){
        return $this->getPrimeiroNome()." ".$this->getNomeMeio()." ".$this->getSobreNome();
    }

    function retornaSobrenomePrimeiro(){
        return $this->sobreNome.', '.$this->primeiroNome." ".$this->nomeMeio;
    }

}