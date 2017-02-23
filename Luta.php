<?php
require_once 'Lutador.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Luta
 *
 * @author Jefferson
 */
class Luta {
    //put your code here
    //Atributos
    private $desafiador;
    private $desafiado;
    private $rounds;
    private $aprovada;
    
    //Métodos Publicos
    public function marcarLuta($l1, $l2) {
        if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiador = $l2;
        }else{
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiador = null;
            
        }
        
    }
    public function lutar() {
        if ($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiador->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0: //Empate
                    echo "<p>////Empate\\\\</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiador->empatarLuta();
                    break;
                case 1:  //Desafiado vence
                    echo "<p>////DESAFIADO VENCEU\\\\</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiador->perderLuta();                
                    break;
                case 2:  //Desafiante vence
                    echo "<p>////DESAFIANTE VENCE\\\\</p>";
                    $this->desafiador->ganharLuta();
                    $this->desafiado->perderLuta();
            }
        }else{
            echo "Luta não pode acontecer";
        }
        
    }
    
    //Métodos Especiais
    function getDesafiador() {
        return $this->desafiador;
    }

    function getDesafiado() {
        return $this->desafiado;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovada() {
        return $this->aprovada;
    }

    function setDesafiador($desafiador) {
        $this->desafiador = $desafiador;
    }

    function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }


    
}
