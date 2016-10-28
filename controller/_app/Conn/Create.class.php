<?php

/**
 * <strong>Create.class.php:</strong>
 * Descrição: Classe responsável por realizar cadastros genéricos no banco de dados!
 * 
 * @copyright (c) 2016, Christian de Ornellas Possidonio - ORIENTME TECNOLOGIA
 */
class Create extends Conn{

    /**
     * Atributos da classe
     * 
     */
    private $Tabela;
    private $Dados;
    private $Result;

    /** @var PDOStatment */
    private $Create;

    /** @var PDO */
    private $Conn;

    /**
     * <b>ExeCreate:</b> Executa um cadastro simplificado no banco de dados ultilizado prepared statements.
     * Basta informa o nome da tabela e um array atribuitivo com o nome da coluna e valor!
     * 
     * @param STRING $Tabela = Informe o nome da tabela no banco!
     * @param ARRAY $Dados = Informe um array atribuitivo. ( Nome da coluna => valor ).
     * 
     */
    public function ExeCreate($Tabela, array $Dados) {
        $this->Tabela = (string) $Tabela;
        $this->Dados = $Dados;
        $this->getSyntax();
        $this->Execute();
    }

    public function getResult() {
        return $this->Result;
    }

    /**
     * **************************************************
     * **************** PRIVATE METHODS *****************
     * **************************************************
     */
    /* <strong>Connect:</strong>
     * Method que tenho o objetivo de preparar a conexão
     */

    private function Connect() {
        $this->Conn = parent::getConn();
        $this->Create = $this->Conn->prepare($this->Create);
    }

    /* <strong>getSyntax:</strong>
     * Method resposável para montar os bindValues.
     * $Fileds = implode um espaço em branco no array de dados.
     * $Places = implode adicionado os : de link para os dados no Array.
     * Prepara a adicioar no banco de dados!
     */

    private function getSyntax() {
        $Fileds = implode(', ', array_keys($this->Dados));
        $Places = ':' . implode(', :', array_keys($this->Dados));
        $this->Create = "INSERT INTO {$this->Tabela}({$Fileds})VALUES({$Places})";
    }

    /* <strong>Execute:</strong>
     * Executa os methods para inserir no banco
     */

    private function Execute() {
        $this->Connect();
        try {
            $this->Create->execute($this->Dados);
            $this->Result = $this->Conn->lastInsertId();
        } catch (PDOException $e) {
            $this->Result = null;
            WSErro("<b>Erro ao cadastrar:</b> {$e->getMessage()}", $e->getCode());
        }
    }

}
