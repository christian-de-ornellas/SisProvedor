<!DOCTYPE html>
<!--
SisProvedor 2016 
Desenvolvido por Christian de Ornellas & Cristiano Santos 
Aqui no painel de controle encontra-se as melhores ferramentas
para a gestão do seu provedor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SP :: Painel</title>
        <!--###########################ARQUIVOS METAS TAGS############################################ -->
        <meta name="author" content="Christian de Ornellas & Cristiano Santos"/>
        <meta name="keywords" content="Ti, Freeradius, Tecnologia, Provedor, Gestão de provedores, Administração de Provedores, Mikrotik, Radius, Freeradius">
        <meta name="description" content="Uma aplicação desenvolvida para descomplicar seu provedor e enfim fazer tudo ficar mais fácil em poucos cliques ou toques."/>
        <meta name="viewport" content="width=device-width, initia-scale=1.0"/>

        <!--###########################ARQUIVOS CSS############################################ -->
        <!--A fonte principal é gerada deste link e está locada no Google Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700,300' rel='stylesheet'>
        <!--Aqui onde faz os icones funcionar-->
        <link rel="stylesheet" href="icons/css/font-awesome.min.css"/>
        <!--Aqui todos os arquivos de estilização, que fica locado na pasta css-->
        <link rel="stylesheet" href="css/sisprovedor.css"/>   
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/custom.css"/>
        <!-- Jquery UI CSS -->
        <link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">

        <!--###########################ARQUIVOS JAVA SCRIPT############################################ -->

        <!-- Jquery UI -->
        <script src="js/jquery-ui/external/jquery/jquery.js"></script>   
        <script src="js/jquery-ui/jquery-ui.js"></script>
        <script src="js/jquery-ui/jquery-ui.theme.min.css"></script>
        <!--        Arquivo js maskinput(mascaras de formulário)-->
        <script src="js/jquery.maskedinput-1.3.1.min.js"></script>
        <!--        Aqui todos os arquivos para a aplicação javascript-->
        <script src="js/custom.js"></script>
    </head>
    <body>        
        <header class="main_header">                      
            <!--Aqui é o logo do sistema-->
            <h1 class="fontzero" title="Institucional" alt="[Institucional]">SisProvedor</h1>
            <a href="painel"><img  src="image/system/logo-clean.png" title="Identidade visual" alt="[Identidade visual]"/></a>
            <!--Aqui é as configurações de menu tais como: notificações, configurações e perfil de usuário-->
            <ul class="main_menu">
                <li><a href="configuracoes" title="Aqui você configura o servidor" alt="[Aqui você configura o servidor]"><i class="fa fa-cogs" aria-hidden="true"></i> Configurações</a></li>
                <li><a href="#" title="Aqui você ver as informações de usuário e ainda edita" alt="[Aqui você ver as informações de usuário e ainda edita"><i class="fa fa-pencil" aria-hidden="true"></i> Perfil</a></li>
                <li><a href="#" title="Aqui você ver e responde todos notificações" alt="[Aqui você ver e responde todas as notificações]"><i class="fa fa-bell" aria-hidden="true"></i> Notificações <b>10</b></a></li>
            </ul>            
        </header>
    </div>             
    <!--Aqui é o final do menu ao topo-->
<asside class="main_menu_left">
    <!-- Aqui ficará a foto do usuário-->
    <div class="main_perfil">
        <h1 class="fontzero" title="Perfil do usuário" alt="[Perfil do usuário]">Perfil do usuário </h1>
        <img  src="image/users/cristiano.jpg" title="Foto do Usuário" alt="[Foto do Usuário]"/>
        <!--Informações e saudações ao usuário-->
        <div class="perfil">
            <small title="Seja bem vindo" alt="[Seja bem vindo]">Seja bem vindo</small>
            <h4 title="Cristiano Santos" alt="[Cristiano Santos]"><i class="fa fa-user" aria-hidden="true"></i> Cristiano <b>Santos</b></h3>
        </div>
    </div>
    <!--Aqui são ferramentas do sistema-->       
    <ul id="nav">     
        <li><a href="painel"><b><i class="fa fa-home" aria-hidden="true"></i> Painel</b></a></li>

        <li><a href="#" ><i class="fa fa-history" aria-hidden="true"></i> Atendimento</a>
            <!--Aqui são as Sub categorias-->
            <ul>
                <li><a href="cadastrar-chamado">Chamado</a></li>
                <li><a href="#">Desbloqueio</a></li>
                <li><a href="#">Iniciar</a></li>
            </ul>
        </li>
        <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Clientes</a>
            <!--Aqui são as Sub categorias-->
            <ul>
                <li><a href="cadastrar-cliente" title="" alt="">Cadastrar</a></li>
                <li><a href="consultar-cliente" title="" alt="">Consultar</a></li>
                <li><a href="cadastrar-conexao" title="" alt="">Criar acesso</a></li>
            </ul>
        </li>
        <li><a href="#" ><i class="fa fa-th-large" aria-hidden="true"></i>
                Controle de Estoque</a>
            <!--Aqui são as Sub categorias-->
            <ul>
                <li><a href="cadastrar-fornecedor" title="" alt="">Incluir Fornecedor</a></li>
                <li><a href="cadastrar-produto" title="" alt="">Incluir Produto</a></li>
                <li><a href="cadastrar-fornecedor" title="" alt="">Consultar Fornecedor</a></li>

                <li><a href="cadastrar-fornecedor" title="" alt="">Consultar Produto</a></li>                
            </ul></li>
        <li><a href="#" ><i class="fa fa-sliders" aria-hidden="true"></i>
                Equipamentos</a>
            <!--Aqui são as Sub categorias-->
            <ul>
                <li><a href="cadastrar-equipamentos" title="" alt="">Cadastrar</a></li>
                <li><a href="#" title="" alt="">Alterar</a></li>
                <li><a href="#" title="" alt="">Manutenção</a></li>
            </ul>
        </li>
        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i> Financeiro</a>
            <!--Aqui são as Sub categorias-->
            <ul>
                <li><a href="#" title="" alt="">Fluxo de caixa</a></li>
                <li><a href="#" title="" alt="">Boletos</a></li>
                <li><a href="#" title="" alt="">Pagamentos</a></li>
            </ul></li>
        <li><a href="#"><i class="fa fa-sellsy" aria-hidden="true"></i> Planos</a>
            <!--Aqui são as Sub categorias-->
            <ul>
                <li><a href="cadastrar-plano" title="" alt="">Novo</a></li>
                <li><a href="consultar-plano" title="" alt="">Consultar</a></li>
                <li><a href="#" title="" alt="">Alterar</a></li>
            </ul></li>
        <li><a href="#"> <i class="fa fa-line-chart" aria-hidden="true"></i> Relatórios</a>
            <!--Aqui são as Sub categorias-->
            <ul>                
                <li><a href="relatorio-de-chamados">Chamados</a></li>
                <li><a href="relatorio-de-clientes">Clientes</a></li>
                <li><a href="#" title="" alt="">Financeiro</a></li>
            </ul></li>            
        <li><a href="#"><i class="fa fa-wrench" aria-hidden="true"></i> Suporte</a>
            <!--Aqui são as Sub categorias-->
            <ul>
                <li><a href="#" title="" alt="">Instalação</a></li>
                <li><a href="#" title="" alt="">Serviços</a></li>
                <li><a href="#" title="" alt="">Manutenção</a></li>
            </ul>
        </li>

    </ul>
</asside>
<!-- Aqui é o final do menu lateral-->
<!--################ CONTEÚDO DINÂMICO #####################-->
<main class="main">      
    <!-- Aqui é o início do conteúdo principal-->