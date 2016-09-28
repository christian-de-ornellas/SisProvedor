<?php include_once ('header.php'); ?>
<?php require_once('../controller/Config.inc.php'); ?>  
<?php require_once('../model/Clients.php'); ?>
<section class="container">
    <div class="content">
        <div class="box-100 painel-padrao nav-title">
            <h3><i class="fa fa-line-chart" aria-hidden="true"></i> Relatório de Atendimento</h3>            
        </div> 
        <article class="box-100 painel-padrao">
            <select class="sis-form box-30">
                <option>Filtro</option>
                <option>Desativados</option>          
                <option>Isentos</option>          
                <option>Bloqueados</option>
                <option>Cadastros recentes</option>
                <option>Pagamentos em espera</option>
                <option>Sem títulos</option>
                <option>Sem carnes</option>
                <option>Pagamentos em atraso</option>
                <option>Alterações recentes</option>
            </select>           
            <input type="search" class="sis-form box-50" placeholder="Procurar por:"/>           
            <button type="submit" name="next" class="sis-btn-verde box-20"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
        </article>
        <article class="box-100 painel-padrao sis-table">

            <table>
                <tr>

                    <th>LOGIN <i class="fa fa-sort-desc" aria-hidden="true"></i></th>
                    <th>CPF</th>
                    <th>RAMAL</th>
                    <th>NOME</th>                    
                    <th>DATA</th>                    
                </tr>
                <?php foreach ($Clients->findAll() as $key => $ConsultClients): ?>
                    <tr>
                        <td><?= $ConsultClients->sobrenome; ?></td>                        
                        <td><?= $ConsultClients->cpf; ?></td>                        
                        <td><?= $ConsultClients->bairro; ?></td>
                        <td><?= $ConsultClients->nome; ?></td>                                              
                        <td><span>20/06/2016</span></td>                        
                    </tr>
                <?php endforeach; ?>
            </table>
        </article>
        <article class="acesso-rapido painel-padrao box-100">
            <header><h3><i class="fa fa-bars" aria-hidden="true"></i>
                    Guia de Acesso Rápido</h3></header>
            <ul>
                <li><a href="consultar-cliente"><i class="fa fa-users" aria-hidden="true"></i> Exportar Planilha</a></li>
                <li><a href="#"> <i class="fa fa-bell" aria-hidden="true"></i> Imprimir</a></li>                
            </ul> 
        </article>        
        <div class="clear"></div>
    </div>
</section>

<?php include_once ('footer.php'); ?>