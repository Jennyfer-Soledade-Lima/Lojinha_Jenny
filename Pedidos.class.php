<?php
 
class Pedidos {
    private $idPedidos ="";
    private $idUsuario ="";
    private $dtPedido="";
    private $dtPagamento ="";
    private $dtNotaFiscal ="";
    private $notaFiscal ="";
    private $dtEnvio ="";
    private $recebimento ="";
    private $tipoFrete ="";
    private $rastreioFrete ="";
    private $entregaEndereco ="";
    private $entregaNumero ="";
    private $entregaCompl ="";
    private $entregaBairro ="";
    private $entregaCidade ="";
    private $entregaUf ="";
    private $entregaCep ="";
    private $entregaTelefone ="";
    private $entregaRefer ="";
    private $valorTotal ="";
    private $qtdItems ="";
    private $qtdDevolucao ="";
    private $motivoDevolucao ="";
    
    private function __construct($idPedidos,$idUsuario,$dtPedido,$dtPagamento,$dtNotaFiscal,$notaFiscal,$dtEnvio,$recebimento,$tipoFrete,$rastreioFrete,$entregaEndereco, $entregaNumero,$entregaCompl, $entregaBairro, $entregaCidade,$entregaUf, $entregaCep, $entregaTelefone, $entregaRefer,$valorTotal, $qtdItems, $qtdDevolucao,$motivoDevolucao){
        $this->setIdPedidos($idPedidos);
        $this->setIdUsuario($idUsuario);
        $this->setDtPedido($dtPedido);
        $this->setDtPagamento($dtPagamento);
        $this->setDtNotaFiscal($dtNotaFiscal);
        $this->setNotaFiscal($notaFiscal);
        $this->setDtEnvio($dtEnvio);
        $this->setRecebimento($recebimento);
        $this->setTipoFrete($tipoFrete);
        $this->setRastreioFrete($rastreioFrete);
        $this->setEntregaEndereco($entregaEndereco);
        $this->setEntregaNumero($entregaNumero);
        $this->setEntregaCompl($entregaCompl);
        $this->setEntregaBairro($entregaBairro);
        $this->setEntregaCidade($entregaCidade);
        $this->setEntregaUf($entregaUf);
        $this->setEntregaCep($entregaCep);
        $this->setEntregaTelefone($entregaTelefone);
        $this->setEntregaRefer($entregaRefer);
        $this->setValorTotal($valorTotal);
        $this->setQtdItems($qtdItems);
        $this->setQtdDevolucao($qtdDevolucao);
        $this->setMotivoDevolucao($motivoDevolucao);
        
    }
    

    public function getIdPedidos(){
        return $this->idPedidos;
    }

    public function setIdPedidos($idPedidos){
        $this->idPedidos = $idPedidos;
        return $this;
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
        return $this;
    }

    public function getDtPedido(){
        return $this->dtPedido;
    }

    public function setDtPedido($dtPedido){
        $this->dtPedido = $dtPedido;
        return $this;
    }

    public function getDtPagamento(){
        return $this->dtPagamento;
    }

    public function setDtPagamento($dtPagamento){
        $this->dtPagamento = $dtPagamento;
        return $this;
    }

    public function getDtNotaFiscal(){
        return $this->dtNotaFiscal;
    }

    public function setDtNotaFiscal($dtNotaFiscal){
        $this->dtNotaFiscal = $dtNotaFiscal;
        return $this;
    }

    public function getNotaFiscal(){
        return $this->notaFiscal;
    }

    public function setNotaFiscal($notaFiscal){
        $this->notaFiscal = $notaFiscal;
        return $this;
    }

    public function getDtEnvio(){
        return $this->dtEnvio;
    }

    public function setDtEnvio($dtEnvio){
        $this->dtEnvio = $dtEnvio;
        return $this;
    }

    public function getRecebimento(){
        return $this->recebimento;
    }

    public function setRecebimento($recebimento){
        $this->recebimento = $recebimento;
        return $this;
    }

    public function getTipoFrete(){
        return $this->tipoFrete;
    }

    public function setTipoFrete($tipoFrete){
        $this->tipoFrete = $tipoFrete;
        return $this;
    }

    public function getRastreioFrete(){
        return $this->rastreioFrete;
    }

    public function setRastreioFrete($rastreioFrete){
        $this->rastreioFrete = $rastreioFrete;
        return $this;
    }

    public function getEntregaEndereco(){
        return $this->entregaEndereco;
    }

    public function setEntregaEndereco($entregaEndereco){
        $this->entregaEndereco = $entregaEndereco;
        return $this;
    }

    public function getEntregaNumero(){
        return $this->entregaNumero;
    }

    public function setEntregaNumero($entregaNumero){
        $this->entregaNumero = $entregaNumero;
        return $this;
    }

    public function getEntregaCompl(){
        return $this->entregaCompl;
    }

    public function setEntregaCompl($entregaCompl){
        $this->entregaCompl = $entregaCompl;
        return $this;
    }

    public function getEntregaBairro(){
        return $this->entregaBairro;
    }

    public function setEntregaBairro($entregaBairro){
        $this->entregaBairro = $entregaBairro;
        return $this;
    }

    public function getEntregaCidade(){
        return $this->entregaCidade;
    }

    public function setEntregaCidade($entregaCidade){
        $this->entregaCidade = $entregaCidade;
        return $this;
    }

    public function getEntregaUf(){
        return $this->entregaUf;
    }

    public function setEntregaUf($entregaUf){
        $this->entregaUf = $entregaUf;
        return $this;
    }

    public function getEntregaCep(){
        return $this->entregaCep;
    }

    public function setEntregaCep($entregaCep){
        $this->entregaCep = $entregaCep;
        return $this;
    }

    public function getEntregaTelefone(){
        return $this->entregaTelefone;
    }

    public function setEntregaTelefone($entregaTelefone){
        $this->entregaTelefone = $entregaTelefone;
        return $this;
    }

    public function getEntregaRefer(){
        return $this->entregaRefer;
    }

    public function setEntregaRefer($entregaRefer){
        $this->entregaRefer = $entregaRefer;
        return $this;
    }

    public function getValorTotal(){
        return $this->valorTotal;
    }

    public function setValorTotal($valorTotal){
        $this->valorTotal = $valorTotal;
        return $this;
    }

    public function getQtdItems(){
        return $this->qtdItems;
    }

    public function setQtdItems($qtdItems){
        $this->qtdItems = $qtdItems;
        return $this;
    }

    public function getQtdDevolucao(){
        return $this->qtdDevolucao;
    }

    public function setQtdDevolucao($qtdDevolucao){
        $this->qtdDevolucao = $qtdDevolucao;
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