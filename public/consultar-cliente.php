<?php include_once ('header.php'); ?>
<?php require_once('../controller/Config.inc.php'); ?>  
<?php require_once('../model/Clients.php'); ?>
<section class="container">
    <div class="content">
        <div class="box-100 painel-padrao nav-title">
            <h3><i class="fa fa-filter" aria-hidden="true"></i> Consultar Cliente</h3>
            <ul>
                <li><a href="cadastrar-cliente">Novo Cliente /</a></li>
                <li><a href="consultar-cliente">Consultar /</a></li>
                <li><a href="cadastrar-plano">Criar Acesso</a></li>                      
            </ul> 
        </div> 
        <article class="box-100 painel-padrao">
            <select class="sis-form box-10">
                <option>Filtro</option>
                <option>Nome</option>          
                <option>Cpf</option>          
                <option>Cidade</option>
            </select>           
            <input type="search" class="sis-form box-70" placeholder="Procurar por:"/>           
            <button type="submit" name="next" class="sis-btn-verde box-20"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
        </article>
        <article class="box-100 painel-padrao sis-table">

            <table>
                <tr>

                    <th>LOGIN <i class="fa fa-sort-desc" aria-hidden="true"></i></th>
                    <th>CPF</th>
                    <th>RAMAL</th>
                    <th>NOME</th>                    
                    <th>CONEXÕES</th>                    
                </tr>
                <?php foreach ($Clients->findAll() as $key => $ConsultClients): ?>
                    <tr>
                        <td><?= $ConsultClients->sobrenome; ?></td>                        
                        <td><?= $ConsultClients->cpf; ?></td>                        
                        <td><?= $ConsultClients->bairro; ?></td>
                        <td><?= $ConsultClients->nome; ?></td>
                        <!-- A ÚLTIMA CONEXÃO OU SE ELE ESTÁ ATIVO NO MOMENTO 
                        $conn = aqui busca do free raduis
                        if($conn ele estiver conectado):
                        $conn = 'ATIVO';
                        else:
                        $conn = 'DESCONECTADO';
                        endif;                                                
                        -->                        
                        <td><span>Ativo</span></td>                        
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