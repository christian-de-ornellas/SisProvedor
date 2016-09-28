<?php
//Aqui é requerido a biblioteca do controlador
require_once ('../controller/Plan.class.php');
// Aqui é realizado a instancia do controlador de Planos
$Plan = new Plan();

if (isset($_POST["save"])):
    // aqui eu resgato os valores do formulários, mas alguns valores 
    // são padronizados como por exemplo o attribute e o op//
    $groupname = strip_tags(trim($_POST["groupname"]));
    $attribute = "Mikrotik_Rate_Limit";
    $op = "==";
    $value = strip_tags(trim($_POST["value"]));
    $valor = strip_tags(trim($_POST["valor"]));
    
    //Aqui eu seto os Objetos
    $Plan->setGroupname($groupname);
    $Plan->setAttribute($attribute);
    $Plan->setOp($op);
    $Plan->setValue($value);
    $Plan->setValor($valor);
    
   // Aqui eu mando salvar os dados 
    if($Plan->insert()){
           echo "<div class='success'>Parabéns, o plano {$groupname} foi salvo com sucesso</div>";             
    }else{
         echo "<div class='error'>Desculpe, Ocerreu um erro e plano {$groupname} não foi salvo!</div>";
    }
    
    
endif;
