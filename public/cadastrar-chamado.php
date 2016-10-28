<?php require_once ('header.php'); ?>
<?php require_once('../controller/Config.inc.php'); ?>  
<?php require_once('../model/Clients.php'); ?>
<section class="container">
    <div class="content">
        <div class="box-100 painel-padrao nav-title">
            <h3><i class="fa fa-bell" aria-hidden="true"></i> Cadastrar Chamado</h3>
            <ul>
                <li><a href="cadastrar-fornecedor">Novo Fornecedor /</a></li>
                <li><a href="cadastrar-produto">Novo Produto /</a></li>
                <li><a href="consultar">Consultar Fornecedor /</a></li>
                <li><a href="consultar">Consultar Produto</a></li>                
            </ul> 
        </div>  
        <!-- ABAS DO FORMULARIO -->
        <article class="painel-header box-100 widget" id="tabs">
            <header class="bg_orange"></header>
            <ul>
                <li><a href="#tabs-1">Novo chamado</a></li>
                <li><a href="#tabs-2">Consultar chamados</a></li>           
            </ul>
            <div id="tabs-1">
                <form  method="post">
                    <!-- Novo chamado -->                               
                    <input type="text" class="sis-form" size="32" name="nota" value="Atendente: Cristiano Santos"/>
                    <input type="text" class="sis-form" size="32" name="dt" placeholder="Nome do Cliente: "/>
                    <input type="text" class="sis-form" size="32" name="nota" value="Protocolo: 25092016175020"/>
                    <input type="text" class="sis-form" size="32" name="nota" value="Abertura: 25/09/2016 17:50:20"/>

                    <!-- Aqui vai calcular 48horas depois da data de abertura --->

                    <select class="sis-form">
                        <option>Prazo de visita</option>
                        <option>12 horas</option>
                        <option>24 horas</option>
                        <option>48 horas</option>
                        <option>72 horas</option>
                        <option>96 horas</option>
                    </select>

                    <!-- Aqui vai calcular 48horas depois da data de abertura --->                        
                    <input type="text" class="sis-form" size="28" value="Estimada: 23/09/2016 00:25:02" />                                                     
                    <select class="sis-form">
                        <option>Prioridade</option>
                        <option>Baixa</option>
                        <option>Normal</option>
                        <option>Alta</option>
                    </select>                                     

                    <select class="sis-form">
                        <option>Setor</option>
                        <option>Vila Norma</option>
                        <option>Vila São João</option>
                        <option>Iraja</option>
                    </select>                                         
                    <textarea rows="2" cols="80" class="sis-form box-100" placeholder="Descrição do problema:"></textarea>

            </div> 
            <!-- Valores --> 
            <div id="tabs-2">
               <article class="box-100 painel-padrao">
            <select class="sis-form box-20">
                <option>Filtro</option>
                <option>Nome</option>          
            </select>
                       
               <select class="sis-form box-20">
                <option>Chamados</option>
                <option>Abertos</option>          
                <option>Fechados</option>          
            </select>
            <input type="search" class="sis-form box-30" placeholder="Procurar por:"/>           
            <button type="submit" name="next" class="sis-btn-verde box-20"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
        </article>
        <article class="box-100 painel-padrao sis-table">

            <table class="sis-table">
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
            </div>

            <footer class="box-100">
                <button type="reset" name="" class="sis-btn-vermelho box-20">Limpar <i class="fa fa-ban" aria-hidden="true"></i></button>
                <button type="submit" name="save" class="sis-btn-verde box-20">SALVAR <i class="fa fa-floppy-o" aria-hidden="true"></i></button>                
                </form>	               
            </footer>
        </article>
        <!-- historico de chamados do cliente: -->
        <div class="box-100 painel-padrao nav-title bg-silver">
            <h3 class="fcolor_branco"><i class="fa fa-user" aria-hidden="true"></i> Historicos de chamado do cliente:</h3>           
        </div>         
        <article class="painel-header itens box-100">                     
            <table class="sis-table box-100">
                <tr>
                    <th><strong>Data e Hora</strong></th>
                    <th><strong>Ramal</strong></th>
                    <th><strong>Descrição</strong></th>
                    <th><strong>Chamado</strong></th>
                    <th><strong>Ação</strong></th>

                </tr>
                <tr>
                    <td><strong>30/07/2016 20:00</strong></td>
                    <td>BASE 01</td>                                
                    <td>Problemas com o roteador</td>
                    <td>Aberto</td>
                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                </tr>
                <tr>
                    <td><strong>30/06/2016 10:00</strong></td>
                    <td>BASE 01</td>                                
                    <td>Problemas com o roteador</td>
                    <td>Fechado</td>
                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                </tr>
                <tr>
                    <td><strong>30/06/2016 10:00</strong></td>
                    <td>BASE 01</td>                                
                    <td>Problemas com o roteador</td>
                    <td>Fechado</td>
                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                </tr>
                <tr>
                    <td><strong>30/06/2016 10:00</strong></td>
                    <td>BASE 01</td>                                
                    <td>Problemas com o roteador</td>
                    <td>Fechado</td>
                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                </tr>
                <tr>
                    <td><strong>30/06/2016 10:00</strong></td>
                    <td>BASE 01</td>                                
                    <td>Problemas com o roteador</td>
                    <td>Fechado</td>
                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                </tr>
                <tr>
                    <td><strong>30/06/2016 10:00</strong></td>
                    <td>BASE 01</td>                                
                    <td>Problemas com o roteador</td>
                    <td>Fechado</td>
                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                </tr>
                <tr>
                    <td><strong>30/06/2016 10:00</strong></td>
                    <td>BASE 01</td>                                
                    <td>Problemas com o roteador</td>
                    <td>Fechado</td>
                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                </tr>
                <tr>
                    <td><strong>30/06/2016 10:00</strong></td>
                    <td>BASE 01</td>                                
                    <td>Problemas com o roteador</td>
                    <td>Fechado</td>
                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                </tr>

            </table>         
        </article>
        <!-- historico de chamados no bairro: -->
        <div class="box-100 painel-padrao nav-title bg-silver">
            <h3 class="fcolor_branco"><i class="fa fa-home" aria-hidden="true"></i> Historicos de chamado no bairro:</h3>           
        </div>  
        <article class="painel-header itens box-100">        
            <table class="sis-table box-100">
                <tr>
                    <th><strong>Data e Hora</strong></th>
                    <th><strong>Ramal</strong></th>
                    <th><strong>Descrição</strong></th>
                    <th><strong>Chamado</strong></th>
                    <th><strong>Ação</strong></th>

                </tr>
                <tr>
                    <td><strong>30/07/2016 20:00</strong></td>
                    <td>BASE 01</td>                                
                    <td>Problemas com o roteador</td>
                    <td>Aberto</td>
                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                </tr>
                <tr>
                    <td><strong>30/06/2016 10:00</strong></td>
                    <td>BASE 01</td>                                
                    <td>Problemas com o roteador</td>
                    <td>Fechado</td>
                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                </tr>
                <tr>
                    <td><strong>30/06/2016 10:00</strong></td>
                    <td>BASE 01</td>                                
                    <td>Problemas com o roteador</td>
                    <td>Fechado</td>
                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                </tr>
                <tr>
                    <td><strong>30/06/2016 10:00</strong></td>
                    <td>BASE 01</td>                                
                    <td>Problemas com o roteador</td>
                    <td>Fechado</td>
                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                </tr>
                <tr>
                    <td><strong>30/06/2016 10:00</strong></td>
                    <td>BASE 01</td>                                
                    <td>Problemas com o roteador</td>
                    <td>Fechado</td>
                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                </tr>
                <tr>
                    <td><strong>30/06/2016 10:00</strong></td>
                    <td>BASE 01</td>                                
                    <td>Problemas com o roteador</td>
                    <td>Fechado</td>
                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                </tr>
                <tr>
                    <td><strong>30/06/2016 10:00</strong></td>
                    <td>BASE 01</td>                                
                    <td>Problemas com o roteador</td>
                    <td>Fechado</td>
                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                </tr>
                <tr>
                    <td><strong>30/06/2016 10:00</strong></td>
                    <td>BASE 01</td>                                
                    <td>Problemas com o roteador</td>
                    <td>Fechado</td>
                    <td><a href="//www.orientme.com.br" target="_blank">Detalhes</a></td>
                </tr>

            </table>         
        </article>
        <div class="clear"></div>
    </div>
</section>
<?php require_once ('footer.php'); ?>