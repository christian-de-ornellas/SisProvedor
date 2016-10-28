<?php

require '../controller/Fornecedor.class.php';
/**
 * Arquivo inc.php à configuração do sistema.
 * Fornecedor [ TIPO ]
 * Descrição:
 * @copyright (c) year, Christian de Ornellas Possidonio - ORIENTME TECNOLOGIA, 
 *   
 */
$Fornecedor = new Fornecedor;

if (isset($_POST["cad-fornecedor"])):
    $razao_social = trim(strip_tags($_POST["razao_social"]));
    $nome_fantasia = trim(strip_tags($_POST["nome_fantasia"]));
    $cnpj = trim(strip_tags($_POST["cnpj"]));
    $ie = trim(strip_tags($_POST["ie"]));
    $email = trim(strip_tags($_POST["email"]));
    $tel = trim(strip_tags($_POST["tel"]));
    $cel = trim(strip_tags($_POST["cel"]));
    $cel_opt = trim(strip_tags($_POST["cel_opt"]));
    $cep = trim(strip_tags($_POST["cep"]));
    $rua = trim(strip_tags($_POST["rua"]));
    $n = trim(strip_tags($_POST["n"]));
    $complemento = trim(strip_tags($_POST["complemento"]));
    $bairro = trim(strip_tags($_POST["bairro"]));
    $cidade = trim(strip_tags($_POST["cidade"]));
    $uf = trim(strip_tags($_POST["uf"]));
    $ibge = trim(strip_tags($_POST["ibge"]));

    $Fornecedor->setRazao_social($razao_social);
    $Fornecedor->setNome_fantasia($nome_fantasia);
    $Fornecedor->setCnpj($cnpj);
    $Fornecedor->setIe($ie);
    $Fornecedor->setEmail($email);
    $Fornecedor->setTel($tel);
    $Fornecedor->setCel($cel);
    $Fornecedor->setCel_opt($cel_opt);
    $Fornecedor->setCep($cep);
    $Fornecedor->setRua($rua);
    $Fornecedor->setN($n);
    $Fornecedor->setComplemento($complemento);
    $Fornecedor->setBairro($bairro);
    $Fornecedor->setCidade($cidade);
    $Fornecedor->setUf($uf);
    $Fornecedor->setIbge($ibge);

    if ($razao_social == ""):
        print "<script>alert('A razão social não pode ser em branco!');</script>";
    else:
        if ($Fornecedor->insert()):
            print "<script>alert('Salvo com sucesso!');</script>";
        endif;

    endif;
endif;