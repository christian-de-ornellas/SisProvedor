<?php
require_once ('Crud.php');

/**
 * <b>Fornecedor.class.php</b>.class.php: [ TIPO ]
 * Descrição:
 * @copyright (c) 2016, Christian de Ornellas Possidonio - ORIENTME TECNOLOGIA
 */
class Fornecedor extends Crud{

    protected $table = "radfornecedor";
    private $razao_social;
    private $nome_fantasia;
    private $cnpj;
    private $ie;
    private $email;
    private $tel;
    private $cel;
    private $cel_opt;
    private $cep;
    private $rua;
    private $n;
    private $complemento;
    private $bairro;
    private $cidade;
    private $uf;
    private $ibge;

    function getRazao_social() {
        return $this->razao_social;
    }

    function getNome_fantasia() {
        return $this->nome_fantasia;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getIe() {
        return $this->ie;
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

    function getCel_opt() {
        return $this->cel_opt;
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

    function setRazao_social($razao_social) {
        $this->razao_social = $razao_social;
    }

    function setNome_fantasia($nome_fantasia) {
        $this->nome_fantasia = $nome_fantasia;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setIe($ie) {
        $this->ie = $ie;
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

    function setCel_opt($cel_opt) {
        $this->cel_opt = $cel_opt;
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
        $sql = "INSERT INTO $this->table(razao_social, nome_fantasia, cnpj, ie, email, tel, cel, cel_opt, cep, rua, n, complemento, bairro, cidade, uf, ibge)values(:razao_social, :nome_fantasia, :cnpj, :ie, :email, :tel, :cel, :cel_opt, :cep, :rua, :n, :complemento, :bairro, :cidade, :uf, :ibge)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':razao_social', $this->razao_social);
        $stmt->bindParam(':nome_fantasia', $this->nome_fantasia);
        $stmt->bindParam(':cnpj', $this->cnpj);
        $stmt->bindParam(':ie', $this->ie);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':tel', $this->tel);
        $stmt->bindParam(':cel', $this->cel);
        $stmt->bindParam(':cel_opt', $this->cel_opt);
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

}
