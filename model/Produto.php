<?php

require ('../controller/Produto.class.php');
/**
 * Arquivo inc.php à configuração do sistema.
 * Produto [ TIPO ]
 * Descrição:
 * @copyright (c) year, Christian de Ornellas Possidonio - ORIENTME TECNOLOGIA, 
 *   
 */
$Produto = new Produto();

if (isset($_POST["cad-produto"])):
    $fornecedor_id = trim(strip_tags($_POST["fornecedor_id"]));
    $nota_fiscal = trim(strip_tags($_POST["nota_fiscal"]));
    $data_nota = trim(strip_tags($_POST["data_nota"]));
    $nome_produto = trim(strip_tags($_POST["nome_produto"]));
    $n_serie = trim(strip_tags($_POST["n_serie"]));
    $estoque = trim(strip_tags($_POST["estoque"]));
    $peso = trim(strip_tags($_POST["peso"]));
    $altura = trim(strip_tags($_POST["altura"]));
    $largura = trim(strip_tags($_POST["largura"]));
    $profundidade = trim(strip_tags($_POST["profundidade"]));
    $descricao = trim(strip_tags($_POST["descricao"]));
    $preco = trim(strip_tags($_POST["preco"]));
    $ipi = trim(strip_tags($_POST["ipi"]));
    $icms = trim(strip_tags($_POST["icms"]));

    $Produto->setFornecedor_id($fornecedor_id);
    $Produto->setNota_fiscal($nota_fiscal);
    $Produto->setData_nota($data_nota);
    $Produto->setNome_produto($nome_produto);
    $Produto->setN_serie($n_serie);
    $Produto->setEstoque($estoque);
    $Produto->setPeso($peso);
    $Produto->setAltura($altura);
    $Produto->setLargura($largura);
    $Produto->setProfundidade($profundidade);
    $Produto->setDescricao($descricao);
    $Produto->setPreco($preco);
    $Produto->setIpi($ipi);
    $Produto->setIcms($icms);

    if ($preco == 0 || ""):
        echo"<script>alert('Preencha o campo preço!');";
    else:
        if ($Produto->insert()):
            echo"<script>alert('Salvo com sucesso');";
        else:
            echo"<script>alert('Não Salvo!');";
        endif;
    endif;
    
endif;