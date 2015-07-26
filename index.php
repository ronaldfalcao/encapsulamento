<?php
/**
 * Created by PhpStorm.
 * User: Ronald
 * Date: 26/07/2015
 * Time: 11:56
 */
    require_once 'class/PessoaOld.php';
    require_once 'class/Pessoa.php';
    require_once 'class/PessoaEncapsulada.php';

    $pessoaOld = new \cadastro\PessoaOld("Ronald Bolsoni Falc�o");
    $pessoa = new \cadastro\Pessoa("Maria","Jos�","Silva");
    $pessoaEncapsulada = new \cadastro\PessoaEncapsulada("Jos�","Jesus","Silva");

    echo'<h1>Encapsulamento em PHP</h1>';

    echo '<h2>Usando apenas o atributo $nome</h2>';
    echo '<p><i>N�o � poss�vel inverter nome e sobrenome</i></p>';
    echo '<b>Formato ($nome): </b>'.$pessoaOld->nome.'<br>'; //Acessando o atributo diretamente

    echo '<h2>Usando os atributo $nome, $nomeMeio e $sobrenome (sem get)</h2>';
    echo '<h3>Nome normal</h3>';
    echo '<b>Formato ($nome, $nomeMeio e $sobreNome):</b> '.$pessoa->retornaNome().'<br>'; //Usando fun��o para acesso
    echo '<h3>Invertendo o sobrenome</h3>';
    echo '<b>Formato ($sobreNome, $nome e $nomeMeio):</b> '.$pessoa->retornaSobrenomePrimeiro().'<br>';

    //Agora usando os m�todos get() para cada atributo
    echo '<h2>Usando os atributo $nome, $nomeMeio e $sobrenome (com get)</h2>';
    echo '<h3>Nome normal</h3>';
    echo '<b>Formato ($nome, $nomeMeio e $sobreNome):</b> '.$pessoaEncapsulada->retornaNome().'<br>'; //Usando fun��o para acesso
    echo '<h3>Invertendo o sobrenome</h3>';
    echo '<b>Formato ($sobreNome, $nome e $nomeMeio):</b> '.$pessoaEncapsulada->retornaSobrenomePrimeiro().'<br>';