<?php
class ItemsPedido{
    private $idItemsPedido ="";
    private $ordem ="";
    private $idPedido ="";
    private $idEstoque ="";
    private $qtdItem ="";
    private $dtDevolucao ="";
    private $motivoDevolucao ="";

    private function __construct($idItemsPedido,$ordem,$idPedido,$idEstoque,$qtdItem,$dtDevolucao,$motivoDevolucao){
        $this->setIdItemsPedido($idItemsPedido);
        $this->setOrdem($ordem);
        $this->setIdPedido($idPedido);
        $this->setIdEstoque($idEstoque);
        $this->setQtdItem($qtdItem);
        $this->setDtDevolucao($dtDevolucao);
        $this->setMotivoDevolucao($motivoDevolucao);
    }
    
    public function getIdItemsPedido(){
        return $this->idItemsPedido;
    }

    public function setIdItemsPedido($idItemsPedido){
        $this->idItemsPedido = $idItemsPedido;
        return $this;
    }

    public function getOrdem(){
        return $this->ordem;
    }

    public function setOrdem($ordem){
        $this->ordem = $ordem;
        return $this;
    }

    public function getIdPedido(){
        return $this->idPedido;
    }

    public function setIdPedido($idPedido){
        $this->idPedido = $idPedido;
        return $this;
    }

    public function getIdEstoque(){
        return $this->idEstoque;
    }

    public function setIdEstoque($idEstoque){
        $this->idEstoque = $idEstoque;
        return $this;
    }

    public function getQtdItem(){
        return $this->qtdItem;
    }

    public function setQtdItem($qtdItem){
        $this->qtdItem = $qtdItem;
        return $this;
    }

    public function getDtDevolucao(){
        return $this->dtDevolucao;
    }

    public function setDtDevolucao($dtDevolucao){
        $this->dtDevolucao = $dtDevolucao;
        return $this;
    }

    public function getMotivoDevolucao(){
        return $this->motivoDevolucao;
    }

    public function setMotivoDevolucao($motivoDevolucao){
        $this->motivoDevolucao = $motivoDevolucao;
        return $this;
    }

}