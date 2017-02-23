<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lutador
 *
 * @author Jefferson
 */
class Lutador {
    //put your code here
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;
    //Métodos
    function apresentar(){
        echo "<p>--/--/--/--/--/--/--/--/--/--/--/--/--/--/--</p>";
        echo "<p>Chegou a hora!!! O Lutador " . $this->getNome();
        echo " veio do " . $this->getNacionalidade();
        echo ", ele tem " . $this->getIdade() . " anos, sua altura é de ";
        echo $this->getAltura() . " m. Ele chega pra essa luta ";
        echo "Pesando " . $this->getPeso() . " Kg, ";
        echo " ganhou " . $this->getVitorias();
        echo " lutas, perdeu " . $this->getDerrotas();
        echo " e empatou " . $this->getEmpates();
    }
    function status(){
        echo "<p>--/--/--/--/--/--/--/--/--/--/--/--/--/--/--</p>";
        echo "<p>" . $this->getNome(). " ,";
        echo " é um peso " . $this->getCategoria() . ", ";
        echo "e ja teve " .$this->getVitorias() . " vitórias,";
        echo " perdeu " . $this->getDerrotas() . " vezes,";
        echo " e empatou " . $this->getEmpates() . " vez(es)!.";
    }
    function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
        
    }
    function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
        
    }
    function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }

    //Métodos Especiais
    function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }
    
    function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpates() {
        return $this->empates;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria() {
        if ($this->peso <= 52.2){
            $this->categoria = "Inválido";
        }elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        }elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        }elseif ($this->peso <= 120.2) {
            $this->categoria= "Pesado";
        }else {
    $this->categoria = "Inválido";
    }
  
    }

    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates) {
        $this->empates = $empates;
    }



}
