<?php
require_once ('Crud.php');  

/**
 * <b>Produto</b>.class.php: [ TIPO ]
 * Descrição:
 * @copyright (c) year, Christian de Ornellas Possidonio - ORIENTME TECNOLOGIA
 */
class Produto extends Crud{

    protected $table = "radproduto";
    private $fornecedor_id;
    private $nota_fiscal;
    private $data_nota;
    private $nome_produto;
    private $n_serie;
    private $estoque;
    private $peso;
    private $altura;
    private $largura;
    private $profundidade;
    private $descricao;
    private $preco;
    private $ipi;
    private $icms;

    function getFornecedor_id() {
        return $this->fornecedor_id;
    }

    function getNotafiscal() {
        return $this->nota_fiscal;
    }

    function getData_nota() {
        return $this->data_nota;
    }

    function getNome_produto() {
        return $this->nome_produto;
    }

    function getN_serie() {
        return $this->n_serie;
    }

    function getEstoque() {
        return $this->estoque;
    }

    function getPeso() {
        return $this->peso;
    }

    function getAltura() {
        return $this->altura;
    }

    function getLargura() {
        return $this->largura;
    }

    function getProfundidade() {
        return $this->profundidade;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getPreco() {
        return $this->preco;
    }

    function getIpi() {
        return $this->ipi;
    }

    function getIcms() {
        return $this->icms;
    }

    function setFornecedor_id($fornecedor_id) {
        $this->fornecedor_id = $fornecedor_id;
    }

    function setNota_fiscal($nota_fiscal) {
        $this->nota_fiscal = $nota_fiscal;
    }

    function setData_nota($data_nota) {
        $this->data_nota = $data_nota;
    }

    function setNome_produto($nome_produto) {
        $this->nome_produto = $nome_produto;
    }

    function setN_serie($n_serie) {
        $this->n_serie = $n_serie;
    }

    function setEstoque($estoque) {
        $this->estoque = $estoque;
    }

    function setPeso($peso) {
        $this->peso = $peso;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setLargura($largura) {
        $this->largura = $largura;
    }

    function setProfundidade($profundidade) {
        $this->profundidade = $profundidade;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }

    function setIpi($ipi) {
        $this->ipi = $ipi;
    }

    function setIcms($icms) {
        $this->icms = $icms;
    }

    public function insert() {
        $sql = "INSERT INTO $this->table (fornecedor_id, nota_fiscal, data_nota, nome_produto, n_serie, estoque, peso, altura, largura, profundidade, descricao, preco, ipi, icms)values(:fornecedor_id, :nota_fiscal, :data_nota, :nome_produto, :n_serie, :estoque, :peso, :altura, :largura, :profundidade, :descricao, :preco, :ipi, :icms)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':fornecedor_id', $this->fornecedor_id);
        $stmt->bindParam(':nota_fiscal', $this->nota_fiscal);
        $stmt->bindParam(':data_nota', $this->data_nota);
        $stmt->bindParam(':nome_produto', $this->nome_produto);
        $stmt->bindParam(':n_serie', $this->n_serie);
        $stmt->bindParam(':estoque', $this->estoque);
        $stmt->bindParam(':peso', $this->peso);
        $stmt->bindParam(':altura', $this->altura);
        $stmt->bindParam(':largura', $this->largura);
        $stmt->bindParam(':profundidade', $this->profundidade);
        $stmt->bindParam(':descricao', $this->descricao);
        $stmt->bindParam(':preco', $this->preco);
        $stmt->bindParam(':ipi', $this->ipi);
        $stmt->bindParam(':icms', $this->icms);
        return $stmt->execute();
    }
    public function update($id) {
        
    }
}
