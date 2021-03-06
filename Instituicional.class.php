<?php

class Institucional {
    private $idInstitucional ="";
    private $nome ="";
    private $cpf_cpnj ="";
    private $tipoPessoa ="";
    private $endereco ="";
    private $bairro ="";
    private $cidade ="";
    private $uf ="";
    private $cep ="";
    private $telefone ="";
    private $email ="";
    private $logo ="";

    private function __construct($idInstitucional,$nome ,$cpf_cpnj,$tipoPessoa,$endereco ,$bairro,$cidade,$uf,$cep,$telefone,$email,$logo){
        $this->setIdInstitucional($idInstitucional);
        $this->setNome($nome);
        $this->setCpf_cpnj($cpf_cpnj);
        $this->setTipoPessoa($tipoPessoa);
        $this->setEndereco($endereco);
        $this->setBairro($bairro);
        $this->setCidade($cidade);
        $this->setUf($uf);
        $this->setCep($cep);
        $this->setTelefone($telefone);
        $this->setEmail($email);
        $this->setLogo($logo);
    }
    public function getIdInstitucional(){
        return $this->idInstitucional;
    }

    public function setIdInstitucional($idInstitucional){
        $this->idInstitucional = $idInstitucional;
        return $this;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getCpf_cpnj(){
        return $this->cpf_cpnj;
    }

    public function setCpf_cpnj($cpf_cpnj){
        $this->cpf_cpnj = $cpf_cpnj;
        return $this;
    }

    public function getTipoPessoa(){
        return $this->tipoPessoa;
    }

    public function setTipoPessoa($tipoPessoa){
        $this->tipoPessoa = $tipoPessoa;
        return $this;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
        return $this;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function setBairro($bairro){
        $this->bairro = $bairro;
        return $this;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
        return $this;
    }

    public function getUf(){
        return $this->uf;
    }

    public function setUf($uf){
        $this->uf = $uf;
        return $this;
    }

    public function getCep(){
        return $this->cep;
    }

    public function setCep($cep){
        $this->cep = $cep;
        return $this;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
        return $this;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this;
    }

    public function getLogo(){
        return $this->logo;
    }

    public function setLogo($logo){
        $this->logo = $logo;
        return $this;
    }

}
?>