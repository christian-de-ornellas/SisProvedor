<?php

/*
  Aqui é onde são realizadas todo o controle dos planos.
 */
require_once ("Crud.php");

/**
 * Description of Plan
 *
 * @author christian
 */
class Plan extends Crud {

    protected $table = "radgroupcheck";
    private $groupname;
    private $attribute;
    private $op;
    private $value;
    private $valor;

    function getGroupname() {
        return $this->groupname;
    }

    function getAttribute() {
        return $this->attribute;
    }

    function getOp() {
        return $this->op;
    }

    function getValue() {
        return $this->value;
    }

    function getValor() {
        return $this->valor;
    }

    function setGroupname($groupname) {
        $this->groupname = $groupname;
    }

    function setAttribute($attribute) {
        $this->attribute = $attribute;
    }

    function setOp($op) {
        $this->op = $op;
    }

    function setValue($value) {
        $this->value = $value;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    public function insert() {
        $sql = "INSERT INTO $this->table (groupname, attribute, op, value, valor)values(:groupname, :attribute, :op, :value, :valor)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':groupname', $this->groupname);
        $stmt->bindParam(':attribute', $this->attribute);
        $stmt->bindParam(':op', $this->op);
        $stmt->bindParam(':value', $this->value);
        $stmt->bindParam(':valor', $this->valor);
        return $stmt->execute();
    }

    public function UltimosPlanos() {
        $sql = "SELECT * FROM $this->table ORDER BY id DESC;";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function update($id) {
        
    }

 

}
