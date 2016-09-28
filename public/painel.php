<?php include_once ('header.php'); ?>
<?php require_once('../controller/Config.inc.php'); ?>  
<?php require_once('../model/Clients.php'); ?>   
<style>
    .column {
        width: 100%;
        float: left;        
    }
    .portlet {
        margin: 0 1em 1em 0;
        padding: 0.3em; border:none!important;
    }
    .portlet-header {
        padding: 0.2em 0.3em;
        margin-bottom: 0.5em;
        position: relative;
        background: transparent!important;
        border:none!important;
    }
    .portlet-toggle {
        position: absolute;
        top: 50%;
        right: 0;
        margin-top: -8px; 
    }
    .portlet-content {
        padding: 0.4em;
    }
    .portlet-placeholder {
        border: 1px dotted black;
        margin: 0 1em 1em 0;
        height: 50px;
    }
</style>
<script>
    $(function () {
        $(".column").sortable({
            connectWith: ".column",
            handle: ".portlet-header",
            cancel: ".portlet-toggle",
            placeholder: "portlet-placeholder ui-corner-all"
        });

        $(".portlet")
                .addClass("ui-widget ui-widget-content ui-helper-clearfix ui-corner-all")
                .find(".portlet-header")
                .addClass("ui-widget-header ui-corner-all")
                .prepend("<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>");

        $(".portlet-toggle").on("click", function () {
            var icon = $(this);
            icon.toggleClass("ui-icon-minusthick ui-icon-plusthick");
            icon.closest(".portlet").find(".portlet-content").toggle();
        });
    });
</script>
<section class="container">
    <div class="content">
        <div class="painel-padrao box-100">
            <h3><i class="fa fa-home" aria-hidden="true"></i> Painel</h3>
        </div> 
        <!-- FIM DO TOPO DE NAVEGAÇÃO -->
        <div class="column">
            <div class="painel-padrao portlet dashboard box-20 bg_orange">
                <div class="portlet-header"></div>
                <div class="portlet-content">  <h1><i class="fa fa-users fa-big" aria-hidden="true"></i> 3</h1>
                    <?php foreach ($Clients->Count() as $key => $valueCount): ?>
                        <h2>Clientes</h2> </div>
                <?php endforeach; ?>
            </div>           
            <div class="painel-padrao dashboard portlet bg-turquoise box-20">
                <div class="portlet-header"></div>
                <div class="portlet-content"> <h1><i class="fa fa-rss fa-big" aria-hidden="true"></i> 50</h1>
                    <h2>Online</h2></div>
            </div> 
            <div class="painel-padrao portlet dashboard box-20 bg-sun-flower">
                <div class="portlet-header"></div>
                <div class="portlet-content">  
                    <h1><i class="fa fa-exclamation-triangle fa-big" aria-hidden="true"></i> 80</h1>
                    <h2>Sem acesso</h2> </div>
            </div>           
            <div class="painel-padrao dashboard portlet bg-belize-hole box-20">
                <div class="portlet-header"></div>
                <div class="portlet-content"><h1><i class="fa fa-eye fa-big" aria-hidden="true"></i> 78</h1>
                    <h2>Chamados</h2></div>
            </div> 
            <div class="painel-padrao portlet dashboard bg-amethyst box-20">
                <div class="portlet-header"></div>
                <div class="portlet-content"><h1><i class="fa fa-life-ring fa-big" aria-hidden="true"></i>
                        15</h1>
                    <h2>Bloqueados</h2> </div>               
            </div>            
        </div>
        <!-- FIM DOS DASH INTERATIVOS -->
        <article class="painel-header box-50">
            <header class="bg-turquoise"><i class="fa fa-rss" aria-hidden="true"></i>
                Bairros Conectados</header>
            <p>Desculpe, nenhum bairro conectado ainda!</p>

        </article>
        <article class="painel-header box-50">
            <header class="bg-belize-hole"><i class="fa fa-eye" aria-hidden="true"></i>
                Chamados abertos</header>
            <p>Desculpe, nenhum aberto ainda!</p>
        </article>
        <article class="painel-header box-100">
            <header class="bg-amethyst"><i class="fa fa-life-ring" aria-hidden="true"></i>
                Bloqueados</header>
            <p>Desculpe, nenhum cliente bloqueado ainda!</p>
        </article>
        <article class="acesso-rapido painel-padrao box-100">
            <header><h3><i class="fa fa-bars" aria-hidden="true"></i>
                    Guia de Acesso Rápido</h3></header>
            <ul>
                <li><a href="cadastrar-cliente"><i class="fa fa-user-plus fa-big" aria-hidden="true"></i> Novo Cliente</a></li>
                <li><a href="#"> <i class="fa fa-bell fa-big" aria-hidden="true"></i> Abrir Chamado</a></li>
                <li><a href="#"><i class="fa fa-exchange fa-big" aria-hidden="true"></i> Iniciar Atendimento</a></li>
                <li><a href="#"> <i class="fa fa-barcode fa-big" aria-hidden="true"></i> Gerar Boleto</a></li>
                <li><a href="#"><i class="fa fa-ban fa-big" aria-hidden="true"></i>Desbloquear</a></li>
                <li><a href="#"><i class="fa fa-dashboard fa-big" aria-hidden="true"></i> Ver Estoque</a></li>                
            </ul>             
        </article>
        <div class="clear"></div>
    </div>
</section>
<?php include_once ('footer.php'); ?>    