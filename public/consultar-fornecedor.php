<?php include_once ('header.php'); ?>
<?php require_once('../controller/Config.inc.php'); ?>  

<section class="container">
    <div class="content">
        <?php require_once('../model/Fornecedor.php'); ?>
        <!-- 
                      ###########################
                           MENU DE INTERAÇÃO
                      ###########################
        --> 
        <div class="box-100 painel-padrao nav-title">
            <h3><i class="fa fa-filter" aria-hidden="true"></i> Consultar Fornecedor</h3>
            <ul>
                <li><a href="cadastrar-plano">Novo Plano /</a></li>
                <li><a href="consultar-plano">Consultar Plano </a></li>                           
            </ul> 
        </div>  
        <article class="box-100 painel-padrao">
            <select class="sis-form box-10">
                <option>Filtro</option>
                <option>Plano</option>          
                <option>Tamanho</option>          
                <option>Valor</option>
            </select>           
            <input type="search" class="sis-form box-70" placeholder="Procurar por:" id="autocomplete" title="type &quot;a&quot;" />           
            <button type="submit" name="next" class="sis-btn-verde box-20"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
        </article>
        <article class="box-100 painel-padrao sis-table">
            <table>
                <tr>

                    <th>Nome fantasia</th>
                    <th>Cnpj</th>
                    <th>E-mail</th>

                </tr>
                <?php foreach ($Fornecedor->findAll() as $key => $buscarFornecedor): ?>
                    <tr>
                        <td><?= $buscarFornecedor->nome_fantasia; ?></td>                        
                        <td><?= $buscarFornecedor->cnpj; ?></td>                        
                        <td><?= $buscarFornecedor->email; ?></td>                       
                        <td></td>                       
                    </tr>
                <?php endforeach; ?>
            </table>
        </article>
        <article class="acesso-rapido painel-padrao box-100">
            <header><h3><i class="fa fa-bars" aria-hidden="true"></i>
                    Guia de Acesso Rápido</h3></header>
            <ul>
                <li><a href="consultar-cliente"><i class="fa fa-users" aria-hidden="true"></i> Consultar Cliente</a></li>
                <li><a href="#"> <i class="fa fa-bell" aria-hidden="true"></i> Relatório</a></li>
                <li><a href="#"> <i class="fa fa-bell" aria-hidden="true"></i> Financeiro</a></li>
                <li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i> Alterar</a></li>
                <li><a href="#"> <i class="fa fa-barcode" aria-hidden="true"></i> Chamados</a></li>
                <li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i>Conexões</a></li>
                <li><a href="#"><i class="fa fa-dashboard" aria-hidden="true"></i> Enviar 2ª via de Boleto Por Sms</a></li>                
            </ul> 
        </article>        
        <div class="clear"></div>
    </div>
</section>

<?php include_once ('footer.php'); ?>