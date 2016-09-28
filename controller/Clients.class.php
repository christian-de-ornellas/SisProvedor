<?php

/*
  Está classe foi criado para manipular todos os dados de clientes
 */
require_once ('Crud.php');

/**
 * Description of Clients
 *
 * @author Christian
 */
class Clients extends Crud {

    protected $table = 'radclients';
    private $nome;
    private $sobrenome;
    private $sexo;
    private $civil;
    private $nasc;
    private $cpf;
    private $rg;
    private $email;
    private $tel;
    private $cel;
    private $cep;
    private $rua;
    private $n;
    private $complemento;
    private $bairro;
    private $cidade;
    private $uf;
    private $ibge;

    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getCivil() {
        return $this->civil;
    }

    function getNasc() {
        return $this->nasc;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getRg() {
        return $this->rg;
    }

    function getEmail() {
        return $this->email;
    }

    function getTel() {
        return $this->tel;
    }

    function getCel() {
        return $this->cel;
    }

    function getCep() {
        return $this->cep;
    }

    function getRua() {
        return $this->rua;
    }

    function getN() {
        return $this->n;
    }

    function getComplemento() {
        return $this->complemento;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getUf() {
        return $this->uf;
    }

    function getIbge() {
        return $this->ibge;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setCivil($civil) {
        $this->civil = $civil;
    }

    function setNasc($nasc) {
        $this->nasc = $nasc;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }

    function setCel($cel) {
        $this->cel = $cel;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setN($n) {
        $this->n = $n;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    function setIbge($ibge) {
        $this->ibge = $ibge;
    }

    public function insert() {
        $sql = "INSERT INTO $this->table (nome, sobrenome, sexo, civil, nasc, cpf, rg, email, tel, cel, cep, rua, n, complemento, bairro, cidade, uf, ibge)values(:nome, :sobrenome, :sexo, :civil, :nasc, :cpf, :rg, :email, :tel, :cel, :cep, :rua, :n, :complemento, :bairro, :cidade, :uf, :ibge)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':sobrenome', $this->sobrenome);
        $stmt->bindParam(':sexo', $this->sexo);
        $stmt->bindParam(':civil', $this->civil);
        $stmt->bindParam(':nasc', $this->nasc);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':rg', $this->rg);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':tel', $this->tel);
        $stmt->bindParam(':cel', $this->cel);
        $stmt->bindParam(':cep', $this->cep);
        $stmt->bindParam(':rua', $this->rua);
        $stmt->bindParam(':n', $this->n);
        $stmt->bindParam(':complemento', $this->complemento);
        $stmt->bindParam(':bairro', $this->bairro);
        $stmt->bindParam(':cidade', $this->cidade);
        $stmt->bindParam(':uf', $this->uf);
        $stmt->bindParam(':ibge', $this->ibge);
        return $stmt->execute();
    }

    public function update($id) {
        
    }

    public function Count() {
        $sql = "SELECT count(id) as total from $this->table";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':total', $this->total);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}
