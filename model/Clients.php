 <link rel="stylesheet" href="css/style.css"/>   
<?php

require_once('../controller/Clients.class.php');
/*
  Aqui é onde parti todas funções requisitadas atráves da classe de clients
 */
/* Aqui onde realizamos o salvamento dos dados */

 // Instancia da Classe Clients no controller//
 $Clients = new Clients();
 
if (isset($_POST["save"])):
   

    $nome = strip_tags(trim($_POST["nome"]));
    $sobrenome = strip_tags(trim($_POST["sobrenome"]));
    $sexo = strip_tags(trim($_POST["sexo"]));
    $civil = strip_tags(trim($_POST["civil"]));
    $nasc = strip_tags(trim($_POST["nasc"]));
    $cpf = strip_tags(trim($_POST["cpf"]));
    $rg = strip_tags(trim($_POST["rg"]));
    $email = strip_tags(trim($_POST["email"]));
    $tel = strip_tags(trim($_POST["tel"]));
    $cel = strip_tags(trim($_POST["cel"]));
    $cep = strip_tags(trim($_POST["cep"]));
    $rua = strip_tags(trim($_POST["rua"]));
    $n = strip_tags(trim($_POST["n"]));
    $complemento = strip_tags(trim($_POST["complemento"]));
    $bairro = strip_tags(trim($_POST["bairro"]));
    $cidade = strip_tags(trim($_POST["cidade"]));
    $uf = strip_tags(trim($_POST["uf"]));
    $ibge = strip_tags(trim($_POST["ibge"]));

    /* Aqui requerimos os objetos da classe clients */
    $Clients->setNome($nome);
    $Clients->setSobrenome($sobrenome);
    $Clients->setSexo($sexo);
    $Clients->setCivil($civil);
    $Clients->setNasc($nasc);
    $Clients->setCpf($cpf);
    $Clients->setRg($rg);
    $Clients->setEmail($email);
    $Clients->setTel($tel);
    $Clients->setCel($cel);
    $Clients->setCep($cep);
    $Clients->setRua($rua);
    $Clients->setN($n);
    $Clients->setComplemento($complemento);
    $Clients->setBairro($bairro);
    $Clients->setCidade($cidade);
    $Clients->setUf($uf);
    $Clients->setIbge($ibge);
    /* Aqui executo o salvamento */
    if ($Clients->insert()) {
        
        echo "<div class='success'>Parabéns, os dados de {$nome} foi salvo com sucesso</div>";
//        echo'<script>window.location="create-client.php";</script>';
    } else {
        echo "<div class='error'> Desculpe, o cliente não foi salvo!</div>";
    }
    
endif;

// Aqui ele salva e prossegui até a tela de criação de login
if(isset($_POST["next"])):
    $nome = strip_tags(trim($_POST["nome"]));
    $sobrenome = strip_tags(trim($_POST["sobrenome"]));
    $sexo = strip_tags(trim($_POST["sexo"]));
    $civil = strip_tags(trim($_POST["civil"]));
    $nasc = strip_tags(trim($_POST["nasc"]));
    $cpf = strip_tags(trim($_POST["cpf"]));
    $rg = strip_tags(trim($_POST["rg"]));
    $email = strip_tags(trim($_POST["email"]));
    $tel = strip_tags(trim($_POST["tel"]));
    $cel = strip_tags(trim($_POST["cel"]));
    $cep = strip_tags(trim($_POST["cep"]));
    $rua = strip_tags(trim($_POST["rua"]));
    $n = strip_tags(trim($_POST["n"]));
    $complemento = strip_tags(trim($_POST["complemento"]));
    $bairro = strip_tags(trim($_POST["bairro"]));
    $cidade = strip_tags(trim($_POST["cidade"]));
    $uf = strip_tags(trim($_POST["uf"]));
    $ibge = strip_tags(trim($_POST["ibge"]));

    /* Aqui requerimos os objetos da classe clients */
    $Clients->setNome($nome);
    $Clients->setSobrenome($sobrenome);
    $Clients->setSexo($sexo);
    $Clients->setCivil($civil);
    $Clients->setNasc($nasc);
    $Clients->setCpf($cpf);
    $Clients->setRg($rg);
    $Clients->setEmail($email);
    $Clients->setTel($tel);
    $Clients->setCel($cel);
    $Clients->setCep($cep);
    $Clients->setRua($rua);
    $Clients->setN($n);
    $Clients->setComplemento($complemento);
    $Clients->setBairro($bairro);
    $Clients->setCidade($cidade);
    $Clients->setUf($uf);
    $Clients->setIbge($ibge);
    /* Aqui executo o salvamento */
    if ($Clients->insert()) {
        header("Refresh: 5; url=create-connection.php");
    } else {
        echo '<script type="text/javascript">alert(" Desculpe, o cliente não foi salvo!")</script>';
    }
    
endif;


